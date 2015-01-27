<?php

namespace GPI\CoreBundle\Model\Service;

use GPI\AuctionBundle\Entity\AuctionAttributeValue;
use GPI\AuctionBundle\Entity\AuctionComments;
use GPI\CoreBundle\Model\Auction\AddNewAuctionCommand;
use GPI\CoreBundle\Model\Auction\AuctionRepository;
use GPI\CoreBundle\Model\Auction\PartlyUpdateAuctionCommand;
use GPI\CoreBundle\Model\Auction\UpdateAuctionCommand;
use GPI\CoreBundle\Model\Calendar\Calendar;
use GPI\CoreBundle\Model\Offer\Offer as ModelOffer;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Doctrine\ORM\EntityManager;

use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;

class Auction
{
    private $calendar;
    private $allowedTimePeriods;
    private $auctionRepository;
    private $securityToken;
    private $em;
    private $mail;
    private $systemUserId;

    public function __construct(
        Calendar $calendar,
        array $allowedTimePeriods,
        AuctionRepository $auctionRepository,
        TokenStorage $securityToken,
        EntityManager $em,
        Mail $mail,
        EngineInterface $templating,
        $systemUserId
    )
    {
        $this->calendar = $calendar;
        $this->allowedTimePeriods = $allowedTimePeriods;
        $this->auctionRepository = $auctionRepository;
        $this->securityToken = $securityToken;
        $this->em = $em;
        $this->mail = $mail;
        $this->templating = $templating;
        $this->systemUserId = $systemUserId;
    }

    public function createNewAuction(AddNewAuctionCommand $command)
    {
        $dateTimeNow = $this->calendar->dateTimeNow();

        $timePeriod = $command->getTimePeriod();
        if (!in_array($timePeriod, $this->allowedTimePeriods)) {
            throw new \InvalidArgumentException('Time period not allowed.');
        }
        $dateTimeAuctionEnd = $this->calendar->dateTimeInNDays($timePeriod);

        $auction = new \GPI\AuctionBundle\Entity\Auction(
            $dateTimeAuctionEnd,
            $command->getName(),
            $command->getContent(),
            $command->getCategories()
        );

        $auction->setStartTime($dateTimeNow);
        $auction->setMaxPrice($command->getMaxPrice());
        $auction->setMaxRealizationDate($command->getMaxRealizationDate());

        foreach($command->getAttributeValues() as $commandAV){
            /** @var \GPI\AuctionBundle\Entity\AddAuctionCommandAttributeValue $commandAV */
            $auctionAtributeValue = new AuctionAttributeValue();
            $auctionAtributeValue->setName($commandAV->getName());
            $auctionAtributeValue->setValue($commandAV->getValue());
            $auctionAtributeValue->setAuction($auction);
            $auction->getAttributeValues()->add($auctionAtributeValue);
        }

        foreach ($command->getDocuments() as $document) {
            $auction->getDocuments()->add($document);
            /** @var $document \GPI\CoreBundle\Model\Document\Document */
            $document->upload();
        }
        return $auction;
    }

    public function getOfferCurrentPosition(ModelOffer $offer, \GPI\CoreBundle\Model\Auction\Auction $auction)
    {
        $offers = $auction->getSortedActiveOffers();

        return array_search($offer, $offers);
    }

    public function editAuction(UpdateAuctionCommand $c, $auctionId)
    {
        $a = $this->findAuction($auctionId);
        $a->setName($c->getName());
        $a->setContent($c->getContent());
        $a->setCategories($c->getCategories());
        $a->setMaxRealizationDate($c->getMaxRealizationDate());
        foreach ($c->getDocuments() as $document) {
            $a->getDocuments()->add($document);
            $document->upload();
        }
        return $a;
    }

    public function partlyEditAuction(PartlyUpdateAuctionCommand $command, $auctionId)
    {
        $auction = $this->findAuction($auctionId);
        $comment = new AuctionComments();
        $comment->setAuction($auction);
        $comment->setContent($command->getComment());
        $comment->setCreated($this->calendar->dateTimeNow());
        $auction->getComments()->add($comment);
        $this->em->persist($comment);
        $this->em->flush();

        return $auction;
    }

    /**
     * @param int $auctionId
     * @return \GPI\CoreBundle\Model\Auction\Auction
     */
    private function findAuction($auctionId)
    {
        return $this->auctionRepository->find($auctionId);
    }

    public function finishUnfinishedAuctionsAndInformWinners()
    {
        $userRepo = $this->em->getRepository('ApplicationSonataUserBundle:User');
        /** @var \Application\Sonata\UserBundle\Entity\User $systemUser */
        $systemUser = $userRepo->findOneBy(array('id'=> $this->systemUserId));

        $auctionsToFinish = $this->getAuctionsToFinish();
        foreach ($auctionsToFinish as $auctionToFinish) {
            /** @var $auctionToFinish \GPI\CoreBundle\Model\Auction\Auction */
            $auctionToFinish->finish();
            $auctionToFinish->setUpdatedBy($systemUser);
            $this->em->persist($auctionToFinish);

            $winningOffer = $this->getWinner($auctionToFinish);

            if ($winningOffer !== null) {
                $this->sendEmailToWinner(
                    $winningOffer->getCreatedBy()->getEmail(),
                    $winningOffer->getCreatedBy()->getUsername(),
                    $auctionToFinish->getName(),
                    $auctionToFinish->getCreatedBy()->getEmail()
                );
            }
        }
        $this->em->flush();
    }

    /**
     * @param \GPI\CoreBundle\Model\Auction\Auction $auction
     * @return ModelOffer|null
     */
    private function getWinner(\GPI\CoreBundle\Model\Auction\Auction $auction)
    {
        $offers = $auction->getSortedActiveOffers();
        if (!empty($offers)) {
            /** @var ModelOffer $winningOffer */
            $winningOffer = $offers[0];
            if ($winningOffer->hasWon()) {
                return $winningOffer;
            }
        }
        return null;
    }

    private function sendEmailToWinner($userEmail, $userName, $auctionName, $auctionCreatorEmail)
    {
        $mailContent = $this->templating->render('GPIOfferBundle:Mail:won_offer.html.twig', array(
            'name' => $userName,
            'offer_name' => $auctionName,
            'auction_owner_mail' => $auctionCreatorEmail
        ));

        $this->mail->sendMail($userEmail, $mailContent, "GPI: wygrana");
    }

    /**
     * @return array
     */
    private function getAuctionsToFinish()
    {
        $queryBuilder = $this->em->createQueryBuilder();
        $queryBuilder
            ->select('auction')
            ->from('GPI\AuctionBundle\Entity\Auction', 'auction')
            ->andWhere('auction.isFinished = false')
            ->andWhere('auction.isCanceled = false')
            ->andWhere('auction.isDeactivated = false')
            ->andWhere('auction.endTime < :now')
            ->setParameter('now', $this->calendar->dateTimeNow());

        $auctionsToFinish = $queryBuilder->getQuery()->getResult();
        return $auctionsToFinish;
    }
}

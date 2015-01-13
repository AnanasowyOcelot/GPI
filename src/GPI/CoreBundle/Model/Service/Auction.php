<?php

namespace GPI\CoreBundle\Model\Service;

use GPI\AuctionBundle\Entity\AuctionComments;
use GPI\CoreBundle\Model\Auction\AddNewAuctionCommand;
use GPI\CoreBundle\Model\Auction\AuctionRepository;
use GPI\CoreBundle\Model\Auction\PartlyUpdateAuctionCommand;
use GPI\CoreBundle\Model\Auction\UpdateAuctionCommand;
use GPI\CoreBundle\Model\Calendar\Calendar;
use GPI\OfferBundle\Entity\Offer;
use Doctrine\ORM\EntityManager;

use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;

class Auction
{
    private $calendar;
    private $allowedTimePeriods;
    private $auctionRepository;
    private $securityToken;
    private $em;

    public function __construct(Calendar $calendar, array $allowedTimePeriods, AuctionRepository $auctionRepository, TokenStorage $securityToken, EntityManager $em)
    {
        $this->calendar = $calendar;
        $this->allowedTimePeriods = $allowedTimePeriods;
        $this->auctionRepository = $auctionRepository;
        $this->securityToken = $securityToken;
        $this->em = $em;

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
        foreach ($command->getDocuments() as $document) {
            $auction->getDocuments()->add($document);
            $document->upload();
        }
        return $auction;
    }

    public function getOfferCurrentPosition(\GPI\CoreBundle\Model\Offer\Offer $offer, \GPI\CoreBundle\Model\Auction\Auction $auction)
    {
        $offers = $auction->getActiveOffers();
        usort($offers, function (Offer $o1, Offer $o2) {
            if ($o1->getActualPrice() > $o2->getActualPrice()) {
                return -1;
            } else if ($o1->getActualPrice() > $o2->getActualPrice()) {
                return 1;
            }
            return 0;
        });
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
}

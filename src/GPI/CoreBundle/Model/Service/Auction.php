<?php

namespace GPI\CoreBundle\Model\Service;

use GPI\CoreBundle\Model\Auction\AddNewAuctionCommand;
use GPI\CoreBundle\Model\Auction\AuctionRepository;
use GPI\CoreBundle\Model\Auction\UpdateAuctionCommand;
use GPI\CoreBundle\Model\Calendar\Calendar;
use GPI\OfferBundle\Entity\Offer;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\Security\Core\SecurityContext;

class Auction
{
    private $calendar;
    private $allowedTimePeriods;
    private $auctionRepository;
    private $securityToken;

    public function __construct(Calendar $calendar, array $allowedTimePeriods, AuctionRepository $auctionRepository, TokenStorage $securityToken)
    {
        $this->calendar = $calendar;
        $this->allowedTimePeriods = $allowedTimePeriods;
        $this->auctionRepository = $auctionRepository;
        $this->securityToken = $securityToken;
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

    public function editAuction(UpdateAuctionCommand $command, $auctionId)
    {
        /**
         * @var $auction \GPI\CoreBundle\Model\Auction\Auction
         */
        $auction = $this->auctionRepository->find($auctionId);

        $auction->setName($command->getName());
        $auction->setContent($command->getContent());
        $auction->setCategories($command->getCategories());
        $auction->setMaxRealizationDate($command->getMaxRealizationDate());
        foreach ($command->getDocuments() as $document) {
            $auction->getDocuments()->add($document);
        }
        return $auction;
    }
}

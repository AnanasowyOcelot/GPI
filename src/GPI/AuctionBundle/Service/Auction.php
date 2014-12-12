<?php

namespace GPI\AuctionBundle\Service;

use GPI\CoreBundle\Model\Auction\AddNewAuctionCommand;
use GPI\CoreBundle\Model\Calendar\Calendar;

class Auction
{
    private $calendar;
    private $allowedTimePeriods;

    public function __construct(Calendar $calendar, array $allowedTimePeriods)
    {
        $this->calendar = $calendar;
        $this->allowedTimePeriods = $allowedTimePeriods;
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
        $auction->setMaxPrice($command->getMaxPrice());
        foreach ($command->getDocuments() as $document) {
            $auction->getDocuments()->add($document);
            $document->upload();
        }
        $auction->setStartTime($dateTimeNow);
        return $auction;
    }
}
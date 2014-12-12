<?php


namespace GPI\CoreBundle\Model\Auction;

class AuctionTimePeriod
{
    public function getAllowedPeriodsInDays()
    {
        return array(30, 60, 90);
    }
} 
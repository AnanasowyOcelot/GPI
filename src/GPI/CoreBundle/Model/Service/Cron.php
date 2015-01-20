<?php


namespace GPI\CoreBundle\Model\Service;


class Cron {

    private $auctionService;

    public function __construct(Auction $auctionService){
        $this->auctionService = $auctionService;
    }
    public function cron5(){
        $this->auctionService->finishUnfinishedAuctionsAndInformWinners();
    }
} 
<?php


namespace GPI\OfferBundle\ViewModel;

use GPI\CoreBundle\Model\Offer\Offer as OfferEntity;

class Offer {

    public $auctionName;
    public $auctionId;
    public $actualPrice;
    public $price;
    public $id;
    public $status;
    public $isActive;
    public $currentPosition;
    public $hasWon;

    function __construct(OfferEntity $offer)
    {
        $this->actualPrice = $offer->getActualPrice();
        $this->auctionName = $offer->getAuction()->getName();
        $this->auctionId = $offer->getAuction()->getId();
        $this->id = $offer->getId();
        $this->price = $offer->getPrice();
        $this->status = $offer->getStatus();
        $this->isActive = $offer->isActive();
    }

    public function setCurrentPosition($number){
        $this->currentPosition = $number;
    }


}

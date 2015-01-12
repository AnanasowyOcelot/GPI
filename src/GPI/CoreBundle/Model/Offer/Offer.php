<?php

namespace GPI\CoreBundle\Model\Offer;

use GPI\AuctionBundle\Entity\Auction;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

class Offer
{
    const MAX_FILES = 20;

    protected $isCanceled;
    protected $isDeactivated;

    protected $content;
    protected $auction;

    protected $documents;

    protected $price;
    protected $actualPrice;
    protected $bidPercent;

    protected $createdBy;
    protected $updatedBy;
    protected $contentChangedBy;


    public function __construct($content, $price, Auction $auction)
    {
        $this->isCanceled = false;
        $this->isDeactivated = false;
        $this->documents = new ArrayCollection();

        $this->setContent($content);
        $this->setPrice($price);
        $this->setAuction($auction);
    }

    /**
     * @param mixed $actualPrice
     */
    public function setActualPrice($actualPrice)
    {
        $this->actualPrice = $actualPrice;
    }

    /**
     * @param mixed $bidPercent
     */
    public function setBidPercent($bidPercent)
    {
        $this->bidPercent = $bidPercent;
    }

    /**
     * @return int
     */
    public function getAuctionId()
    {
        return $this->auction->getId();
    }

    /**
     * @return mixed
     */
    public function getBidPercent()
    {
        return $this->bidPercent;
    }

    /**
     * @return mixed
     */
    public function getActualPrice()
    {
        return $this->actualPrice;
    }

    /**
     * @param mixed $auction
     */
    public function setAuction($auction)
    {
        $this->auction = $auction;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }


    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return int
     */
    public function getStatus()
    {
        if ($this->isActive()) {
            return OfferStatus::ACTIVE;
        } else if($this->isCanceled()){
            return OfferStatus::CANCELED;
        }else{
            return OfferStatus::DEACTIVATED;
        }
    }

    public function getDocuments()
    {
        return $this->documents;
    }

    public function setDocuments(ArrayCollection $documents)
    {
        $this->documents = $documents;
    }

      public function isCanceled()
    {
        return $this->isCanceled;
    }

    public function ownerId()
    {
        return $this->createdBy;
    }

    public function isActive(){
        return !$this->isCanceled() && !$this->isDeactivated();
    }

    public function isDeactivated(){
        return $this->isDeactivated;
    }

    public function cancel()
    {
        $this->isCanceled = true;
    }

    public function deactivate()
    {
        $this->isDeactivated = true;
    }

    public function activate()
    {
        $this->isDeactivated = false;
    }

    public function isNotDeactivated(){
        return !$this->isDeactivated();
    }

    public function setContent($content)
    {
        if ($content === null) {
            throw new \InvalidArgumentException('Offer content cannot be null.');
        }
        if ($content === '') {
            throw new \InvalidArgumentException('Offer content cannot be empty.');
        }
        $this->content = $content;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * Get content short
     *
     * @return string
     */
    public function getContentShort()
    {
        $maxLength = 30;
        $string = strip_tags($this->content);
        return (strlen($string) > $maxLength) ? substr($string, 0, $maxLength) . '...' : $string;
    }
}

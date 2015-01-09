<?php

namespace GPI\CoreBundle\Model\Offer;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

class AddNewOfferCommand
{
    protected $content;
    protected $price;
    protected $documents;
    protected $auction;
    protected $bidPercent;

    public function __construct()
    {
        $this->documents = new ArrayCollection();
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @param mixed $auction
     */
    public function setAuction($auction)
    {
        $this->auction = $auction;
    }

    /**
     * @return mixed
     */
    public function getAuction()
    {
        return $this->auction;
    }

    /**
     * @param mixed $bidPercent
     */
    public function setBidPercent($bidPercent)
    {
        $this->bidPercent = $bidPercent;
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
    public function getPrice()
    {
        return $this->price;
    }

    public function getDocuments()
    {
        return $this->documents;
    }

    public function setDocuments(ArrayCollection $documents)
    {
        $this->documents = $documents;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('documents', new Assert\Valid());
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }
}

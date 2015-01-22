<?php


namespace GPI\CoreBundle\Model\Auction;

use Doctrine\Common\Collections\ArrayCollection;

class AuctionAttributesGroup {

    protected $id;

    protected $category;

    protected $auctionAttributes;

    public function __construct(){
        $this->auctionAttributes = new ArrayCollection();
    }

    /**
     * @param mixed $auctionAttributes
     */
    public function setAuctionAttributes($auctionAttributes)
    {
        $this->auctionAttributes = $auctionAttributes;
    }

    /**
     * @return mixed
     */
    public function getAuctionAttributes()
    {
        return $this->auctionAttributes;
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    public function addAuctionAttributes($auctionAttributes)
    {
        $this->auctionAttributes[] = $auctionAttributes;
    }

} 
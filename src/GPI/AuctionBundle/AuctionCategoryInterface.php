<?php

namespace GPI\AuctionBundle;

use Sonata\ClassificationBundle\Model\CategoryInterface;
use GPI\AuctionBundle\Entity\Auction as Auction;

interface AuctionCategoryInterface
{
    /**
     * Set enabled
     *
     * @param boolean $enabled
     */
    public function setEnabled($enabled);

    /**
     * Get enabled
     *
     * @return boolean $enabled
     */
    public function getEnabled();

    /**
     * Set if auction category is the main category
     *
     * @param boolean $main
     */
    public function setMain($main);

    /**
     * Get if auction category is the main category
     *
     * @return boolean $main
     */
    public function getMain();

    /**
     * Set updatedAt
     *
     * @param \DateTime $updatedAt
     */
    public function setUpdatedAt(\DateTime $updatedAt = null);

    /**
     * Get updatedAt
     *
     * @return \DateTime $updatedAt
     */
    public function getUpdatedAt();

    /**
     * Set createdAt
     *
     * @param \DateTime $createdAt
     */
    public function setCreatedAt(\DateTime $createdAt = null);

    /**
     * Get createdAt
     *
     * @return \Datetime $createdAt
     */
    public function getCreatedAt();

    /**
     * Set auction
     *
     * @param Auction $auction
     */
    public function setAuction(Auction $auction);

    /**
     * Get auction
     *
     * @return Auction
     */
    public function getAuction();

    /**
     * Set Category
     *
     * @param CategoryInterface $category
     */
    public function setCategory(CategoryInterface $category);

    /**
     * Get Category
     *
     * @return CategoryInterface $category
     */
    public function getCategory();
}

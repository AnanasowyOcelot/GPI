<?php

namespace GPI\OfferBundle;

use Sonata\ClassificationBundle\Model\CategoryInterface;
use GPI\OfferBundle\Entity\Offer as Offer;

interface OfferCategoryInterface
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
     * Set if offer category is the main category
     *
     * @param boolean $main
     */
    public function setMain($main);

    /**
     * Get if offer category is the main category
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
     * Set offer
     *
     * @param Offer $offer
     */
    public function setOffer(Offer $offer);

    /**
     * Get offer
     *
     * @return Offer
     */
    public function getOffer();

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

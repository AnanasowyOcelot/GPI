<?php

namespace GPI\CoreBundle\Model\Auction;

use Application\Sonata\ClassificationBundle\Entity\Category;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Application\Sonata\UserBundle\Entity\User as User;

class AddNewAuctionCommand
{
    protected $id;
    protected $name;
    protected $content;
    protected $maxPrice;
    protected $categories;
    protected $documents;
    protected $timePeriod;
    protected $maxRealizationDate;
    protected $createdBy;
    protected $attributeValues;

    public function __construct()
    {
        $this->documents = new ArrayCollection();
        $this->attributeValues = new ArrayCollection();
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

    /**
     * @param \DateTime $maxRealizationDate
     */
    public function setMaxRealizationDate($maxRealizationDate)
    {
        $this->maxRealizationDate = $maxRealizationDate;
    }

    /**
     * @return \DateTime
     */
    public function getMaxRealizationDate()
    {
        return $this->maxRealizationDate;
    }

    /**
     * @param mixed $maxPrice
     */
    public function setMaxPrice($maxPrice)
    {
        $this->maxPrice = $maxPrice;
    }

    /**
     * @return mixed
     */
    public function getMaxPrice()
    {
        return $this->maxPrice;
    }

    /**
     * @param mixed $timePeriod
     */
    public function setTimePeriod($timePeriod)
    {
        $this->timePeriod = $timePeriod;
    }

    /**
     * @return mixed
     */
    public function getTimePeriod()
    {
        return $this->timePeriod;
    }




    public function getDocuments()
    {
        return $this->documents;
    }

    public function setDocuments($documents)
    {
        $this->documents = $documents;
    }

    public function addCategory(Category $category)
    {
        $this->categories[] = $category;
    }

    public function addAttributeValue($attributeValue)
    {
        $this->attributeValues[] = $attributeValue;
    }

    /**
     * @param mixed $categories
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
    }

    /**
     * @return mixed
     */
    public function getCategories()
    {
        return $this->categories;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $createdBy
     */
    public function setCreatedBy($createdBy)
    {
        $this->createdBy = $createdBy;
    }

    /**
     * @return mixed
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    public function toString(){
        return "Name: " . $this->getName() . " Content: " . $this->getContent() . " Category: " . $this->getCategories()->getName();
    }

    public function isOwner(User $user) {
        return $this->getCreatedBy() === $user;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $attributeValues
     */
    public function setAttributeValues($attributeValues)
    {
        $this->attributeValues = $attributeValues;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getAttributeValues()
    {
        return $this->attributeValues;
    }


}

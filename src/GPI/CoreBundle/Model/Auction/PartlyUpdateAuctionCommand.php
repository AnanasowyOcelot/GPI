<?php

namespace GPI\CoreBundle\Model\Auction;

use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

class PartlyUpdateAuctionCommand
{
    protected $name;
    protected $content;
    protected $categories;
    protected $documents;
    protected $maxRealizationDate;
    protected $comment = '';
    protected $attributeValues;

    public function __construct()
    {
        $this->documents = new ArrayCollection();
    }

    /**
     * @param \DateTime $maxRealizationDate
     */
    public function setMaxRealizationDate($maxRealizationDate)
    {
        $this->maxRealizationDate = $maxRealizationDate;
        $this->attributeValues = new ArrayCollection();
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


    /**
     * @return \DateTime
     */
    public function getMaxRealizationDate()
    {
        return $this->maxRealizationDate;
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
     * @return mixed
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    /**
     * @param mixed $documents
     */
    public function setDocuments($documents)
    {
        $this->documents = $documents;
    }

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('documents', new Assert\Valid());
    }

    /**
     * @param mixed $categories
     */
    public function setCategories($categories)
    {
        $this->categories = $categories;
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

    /**
     * @param mixed $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }
}

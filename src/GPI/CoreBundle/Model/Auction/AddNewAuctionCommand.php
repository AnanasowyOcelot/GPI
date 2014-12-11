<?php

namespace GPI\CoreBundle\Model\Auction;

use Doctrine\Common\Collections\ArrayCollection;
use Entity\Category;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;

class AddNewAuctionCommand
{
    protected $name;
    protected $content;
    protected $categories;
    protected $documents;

    public function __construct()
    {
        $this->documents = new ArrayCollection();
    }

    public function getDocuments()
    {
        return $this->documents;
    }

    public function setDocuments(ArrayCollection $documents)
    {
        $this->documents = $documents;
    }

    public function addCategory(Category $category)
    {
        $this->categories[] = $category;
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

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
}

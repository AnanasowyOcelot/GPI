<?php

namespace GPI\AuctionBundle\Model\Command;

use Symfony\Component\Validator\Constraints as Assert;
use GPI\CoreBundle\Model\Document\Document;
use Symfony\Component\Validator\Mapping\ClassMetadata;

class UpdateAuctionCommand
{
    protected $name;
    protected $content;
    protected $category;
    protected $documents;

    public function addDocument(Document $document)
    {
        $this->documents[] = $document;
        $document->setAuction($this);
        return $this;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
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

    public static function loadValidatorMetadata(ClassMetadata $metadata)
    {
        $metadata->addPropertyConstraint('documents', new Assert\Valid());
    }

    /**
     * @param mixed $category
     */
    public function setCategory($category)
    {
        $this->category = $category;
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

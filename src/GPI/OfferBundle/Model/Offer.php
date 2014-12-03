<?php

namespace GPI\OfferBundle\Model;

use \GPI\OfferBundle\Entity\Document as Document;

class Offer
{
    const MAX_FILES = 20;

    protected $status;
    protected $name;
    protected $content;
    protected $documents;
    protected $endTime;

    public function __construct()
    {
        $this->status = OfferStatus::ACTIVE;
        $this->endTime = new \DateTime('+30 days');
    }

    public function setEndTime(\DateTime $endTime)
    {
        $this->endTime = $endTime;
    }

    public function isCanceled()
    {
        return $this->status === OfferStatus::CANCELED;
    }

    public function isActive()
    {
        return $this->status === OfferStatus::ACTIVE && $this->endTime > new \DateTime('now');
    }

    public function cancel()
    {
        $this->status = OfferStatus::CANCELED;
    }

    public function deactivate()
    {
        $this->status = OfferStatus::DEACTIVATED;
    }

    public function addDocument(Document $document)
    {
        $this->documents[] = $document;

        $document->setOffer($this);

        return $this;
    }


    public function removeDocument($document)
    {
        // TODO: zrobić!
    }


    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }


    /**
     * Set content
     *
     * @param string $content
     * @return Offer
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
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
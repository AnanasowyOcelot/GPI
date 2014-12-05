<?php

namespace GPI\OfferBundle\Model;

use Application\Sonata\ClassificationBundle\Entity\Category;
use Symfony\Component\Validator\Constraints as Assert;

class Offer
{
    const MAX_FILES = 20;

    protected $status;
    protected $name;
    protected $content;
    protected $documents;
    protected $endTime;
    private $calendar;
    protected $category;

    public function __construct(\DateTime $endTime, $name, $content, $category, Calendar $calendar = null)
    {
        $this->status = OfferStatus::ACTIVE;

        $this->setEndTime($endTime);
        $this->setName($name);
        $this->setContent($content);
        $this->setCategory($category);
        if ($calendar !== null) {
            $this->calendar = $calendar;
        } else {
            $this->calendar = new Calendar();
        }
    }

    protected function setCategory(Category $category)
    {
        $this->category = $category;
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
        if ($this->endTime < $this->calendar->dateTimeNow()) {
            return false;
        }
        return $this->status === OfferStatus::ACTIVE;
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
        if ($name === null) {
            throw new \InvalidArgumentException('Offer name cannot be null.');
        }
        if ($name === '') {
            throw new \InvalidArgumentException('Offer name cannot be empty.');
        }
        $this->name = $name;
        return $this;
    }

    public function getMainPhoto()
    {
        if (!$this->getDocuments()->isEmpty()) {
            return $this->getDocuments()->get(0)->getWebPath();
        } else {
            return "/uploads/documents/default.jpg";
        }
    }

    /**
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getDocuments()
    {
        return $this->documents;
    }

    public function getCategory()
    {
        return $this->category;
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

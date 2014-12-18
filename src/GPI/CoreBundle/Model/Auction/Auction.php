<?php

namespace GPI\CoreBundle\Model\Auction;

use Application\Sonata\ClassificationBundle\Entity\Category;
use Doctrine\ORM\PersistentCollection;
use GPI\CoreBundle\Model\Calendar\Calendar;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\ArrayCollection;

class Auction
{
    const MAX_FILES = 20;

    protected $isCanceled;
    protected $isDeactivated;
    protected $name;
    protected $content;
    protected $documents;
    protected $endTime;
    protected $startTime;
    private $calendar;
    protected $categories;
    protected $maxPrice;
    protected $createdBy;

    public function __construct(\DateTime $endTime, $name, $content, $categories, Calendar $inCalendar = null)
    {
        $this->isCanceled = false;
        $this->isDeactivated = false;
        $this->documents = new ArrayCollection();
        $this->setEndTime($endTime);
        $this->setName($name);
        $this->setContent($content);
        foreach ($categories as $category) {
            $this->addCategory($category);
        }

        if ($inCalendar !== null) {
            $calendar = $inCalendar;
        } else {
            $calendar = new Calendar();
        }

        $this->init($calendar);
    }

    public function init(Calendar $calendar)
    {
        $this->calendar = $calendar;
    }

    /**
     * @param \DateTime $startTime
     */
    public function setStartTime($startTime)
    {
        $this->startTime = $startTime;
    }

    /**
     * @return \DateTime
     */
    public function getStartTime()
    {
        return $this->startTime;
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
     * @return int
     */
    public function getStatus()
    {
        if ($this->isActive()) {
            return AuctionStatus::ACTIVE;
        } else if($this->isCanceled()){
            return AuctionStatus::CANCELED;
        }else{
            return AuctionStatus::DEACTIVATED;
        }
    }

    public function getDocuments()
    {
        return $this->documents;
    }

    public function setDocuments(ArrayCollection $documents)
    {
        $this->documents = $documents;
    }

    public function setCategories(PersistentCollection $categories)
    {
        $this->categories = $categories;
    }

    public function setEndTime(\DateTime $endTime)
    {
        $this->endTime = $endTime;
    }

    public function isCanceled()
    {
        return $this->isCanceled;
    }

    public function ownerId()
    {
        return $this->createdBy;
    }

    private function hasEnded()
    {
        return $this->endTime < $this->calendar->dateTimeNow();
    }

    protected function isPartiallyActive(){
        return !$this->isCanceled() && !$this->isDeactivated();
    }

    public function isDeactivated(){
        return $this->isDeactivated;
    }

    public function isActive()
    {
        return !$this->hasEnded() && $this->isPartiallyActive();
    }

    public function cancel()
    {
        $this->isCanceled = true;
    }
    public function deactivate()
    {
        $this->isDeactivated = true;
    }

    public function activate()
    {
        $this->isDeactivated = false;
    }

    public function isNotDeactivated(){
        return !$this->isDeactivated();
    }

    public function addCategory(Category $category)
    {
        $this->categories[] = $category;
    }

    public function setName($name)
    {
        if ($name === null) {
            throw new \InvalidArgumentException('Auction name cannot be null.');
        }
        if ($name === '') {
            throw new \InvalidArgumentException('Auction name cannot be empty.');
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

    public function getCategories()
    {
        return $this->categories;
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
            throw new \InvalidArgumentException('Auction content cannot be null.');
        }
        if ($content === '') {
            throw new \InvalidArgumentException('Auction content cannot be empty.');
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

    public function __toString(){
        return $this->getName();
    }
}

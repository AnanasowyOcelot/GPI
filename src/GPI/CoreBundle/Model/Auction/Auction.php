<?php

namespace GPI\CoreBundle\Model\Auction;

use Application\Sonata\ClassificationBundle\Entity\Category;
use Doctrine\ORM\PersistentCollection;
use GPI\CoreBundle\Model\Calendar\Calendar;
use GPI\CoreBundle\Model\Offer\Offer;
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
    protected $categories;
    protected $maxPrice;
    protected $createdBy;
    protected $updatedBy;
    protected $offers;
    protected $maxRealizationDate;
    protected $comments;
    protected $disableReason;
    protected $isFinished = false;
    protected $attributeValues;

    private $calendar;
    private $defaultImgPath;

    public function __construct(\DateTime $endTime, $name, $content, $categories, Calendar $inCalendar = null, $defaultImgPath = null)
    {
        $this->isCanceled = false;
        $this->isDeactivated = false;
        $this->documents = new ArrayCollection();
        $this->comments = new ArrayCollection();
        $this->attributeValues = new ArrayCollection();
        $this->disableReason = new ArrayCollection();
        $this->offers = new ArrayCollection();
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

        $this->init($calendar, $defaultImgPath);
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
     * @param mixed $comments
     */
    public function setComments(ArrayCollection $comments)
    {
        $this->comments = $comments;
    }

    /**
     * @return ArrayCollection
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * @param \Doctrine\Common\Collections\ArrayCollection $disableReason
     */
    public function setDisableReason($disableReason)
    {
        $this->disableReason = $disableReason;
    }

    /**
     * @return mixed
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * @return \Doctrine\Common\Collections\ArrayCollection
     */
    public function getDisableReason()
    {
        return $this->disableReason;
    }

    public function init(Calendar $calendar, $defaultImgPath)
    {
        $this->calendar = $calendar;
        $this->defaultImgPath = $defaultImgPath;
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
        } else if ($this->isCanceled()) {
            return AuctionStatus::CANCELED;
        } else {
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

    private function hasEnded()
    {
        return $this->endTime < $this->calendar->dateTimeNow();
    }

    public function getNumberOfOffers()
    {
        return count($this->offers->toArray());
    }

    protected function isPartiallyActive()
    {
        return !$this->isCanceled() && !$this->isDeactivated();
    }

    public function isDeactivated()
    {
        return $this->isDeactivated;
    }

    public function isActive()
    {
        return !$this->hasEnded() && $this->isPartiallyActive();
    }

    public function hasProperlyEnded()
    {
        return $this->hasEnded() && $this->isPartiallyActive();
    }

    public function cancel()
    {
        $this->isCanceled = true;
    }

    public function deactivate()
    {
        $this->isDeactivated = true;
    }

    public function getCurrentDisableReason()
    {
        return $this->disableReason->first();
    }

    public function activate()
    {
        $this->isDeactivated = false;
    }

    public function isNotDeactivated()
    {
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

    public function finish()
    {
        $this->isFinished = true;
    }

    public function addOffer(Offer $offer)
    {
        $this->offers->add($offer);
    }

    public function canBeEdittedFully()
    {
        return $this->getNumberOfOffers() == 0;
    }

    public function getMainPhoto()
    {
        if (!$this->getDocuments()->isEmpty()) {
            return $this->getDocuments()->get(0)->getWebImagePath();
        } else {
            return $this->defaultImgPath;
        }
    }

    /**
     * @param \Application\Sonata\UserBundle\Entity\User $updatedBy
     */
    public function setUpdatedBy($updatedBy)
    {
        $this->updatedBy = $updatedBy;
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

    public function getDaysToEnd()
    {

        $end = $this->endTime;
        $now = $this->calendar->dateTimeNow();

        $daysLeft = $end->format("U") - $now->format("U");
        $daysLeft = (floor(($daysLeft % 2592000) / 86400)>0)?floor(($daysLeft % 2592000) / 86400):"";

        return $daysLeft;
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

    public function __toString()
    {
        return $this->getName();
    }

    /**
     * @return mixed
     */
    public function getOffers()
    {
        return $this->offers;
    }

    public function getActiveOffers()
    {
        return array_values(array_filter(
            $this->getOffers()->toArray(),
            function (Offer $o) {
                return $o->isActive();
            }
        ));
    }

    /**
     * @return array
     */
    public function getSortedActiveOffers()
    {
        $offers = $this->getActiveOffers();

        usort($offers, function (Offer $o1, Offer $o2) {
            if ($o1->getActualPrice() < $o2->getActualPrice()) {
                return -1;
            } else if ($o1->getActualPrice() > $o2->getActualPrice()) {
                return 1;
            }
            return 0;
        });

        return $offers;
    }
}

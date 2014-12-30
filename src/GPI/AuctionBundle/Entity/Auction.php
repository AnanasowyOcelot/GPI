<?php

namespace GPI\AuctionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use GPI\OfferBundle\Entity\Offer;
use Symfony\Component\Validator\Constraints AS Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use Application\Sonata\UserBundle\Entity\User as User;

/**
 * Auction
 *
 * @ORM\Table("auction")
 * @ORM\Entity(repositoryClass="GPI\AuctionBundle\Entity\AuctionRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Auction extends \GPI\CoreBundle\Model\Auction\Auction
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_canceled", type="boolean")
     */
    protected $isCanceled;

    /**
     * @var boolean
     * @ORM\Column(name="is_deactivated", type="boolean")
     */
    protected $isDeactivated;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_partially_active", type="boolean")
     */
    protected $isPartiallyActive;
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     * @Assert\Length(min = 5)
     */
    protected $name;

    /**
     * @var string
     * @ORM\Column(name="max_price", type="decimal", scale=2, nullable=true)
     */
    protected $maxPrice;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    protected $content;

    /**
     * @var ArrayCollection $trainings
     * @ORM\ManyToMany(targetEntity="\Application\Sonata\ClassificationBundle\Entity\Category")
     */
    protected $categories;

    /**
     * @var ArrayCollection $trainings
     * @ORM\ManyToMany(targetEntity="\GPI\DocumentBundle\Entity\Document")
     */
    protected $documents;

    /**
     * @ORM\Column(name="end_time", type="datetime")
     */
    protected $endTime;

    /**
     * @ORM\Column(name="start_time", type="datetime")
     */
    protected $startTime;

    /**
     * @ORM\OneToMany(targetEntity="\GPI\OfferBundle\Entity\Offer", mappedBy="auction")
     **/
    protected $offers;


    public function isOwner(User $user) {
        return $this->getCreatedBy() === $user;
    }

    /**
     * @param mixed $offers
     */
    public function setOffers($offers)
    {
        $this->offers = $offers;
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
        return array_filter(
            $this->getOffers()->toArray(),
            function (Offer $o) {
                return $o->isActive();
            }
        );
    }

    /**
     * @var User $updatedBy
     *
     * @Gedmo\Blameable(on="update")
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="updated_by", referencedColumnName="id")
     */
    protected $updatedBy;

    /**
     * @var User $contentChangedBy
     *
     * @Gedmo\Timestampable(on="change", field={"content", "name"})
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="content_changed_by", referencedColumnName="id")
     */
    protected $contentChangedBy;

    /**
     * @var User $createdBy
     *
     * @Gedmo\Blameable(on="create")
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="created_by", referencedColumnName="id")
     */
    protected $createdBy;

    public function __construct($endTime = null, $name = null, $content = null, $categories = null, $inCalendar = null)
    {
        if ($endTime === null) {
            $this->postLoad();
        } else {
            parent::__construct($endTime, $name, $content, $categories, $inCalendar);
        }
    }


    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function setPartiallyActive()
    {
        $this->isPartiallyActive = $this->isPartiallyActive();
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->endTime;
    }

    /**
     * @return \Application\Sonata\UserBundle\Entity\User
     */
    public function getCreatedBy()
    {
        return $this->createdBy;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
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

    public function __get($param)
    {
        if (property_exists($this, $param)) {
            return $this->$param;
        }
        throw new \InvalidArgumentException();
    }
}

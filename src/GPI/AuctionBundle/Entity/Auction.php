<?php

namespace GPI\AuctionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints AS Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use Application\Sonata\UserBundle\Entity\User as User;

/**
 * Auction
 *
 * @ORM\Table()
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
     * @ORM\ManyToMany(targetEntity="\GPI\AuctionBundle\Entity\Document")
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

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function setPartiallyActive(){
        $this->isPartiallyActive = $this->isPartiallyActive();
    }

    /**
     * @ORM\PostLoad
     */
    public function postLoad()
    {
        /** @var $kernel \Symfony\Component\HttpKernel\Kernel */
        global $kernel;
                if ('AppCache' == get_class($kernel)) {
                    $kernel = $kernel->getKernel();
                }
        /** @var $calendar \GPI\CoreBundle\Model\Calendar\Calendar */
        $calendar = $kernel->getContainer()->get('gpi_core.model.calendar.calendar');
        $this->init(
            $calendar
        );
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

    public function __get($param)
    {
        if (property_exists($this, $param)) {
            return $this->$param;
        }
        throw new \InvalidArgumentException();
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

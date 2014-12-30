<?php

namespace GPI\OfferBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints AS Assert;
use Doctrine\Common\Collections\ArrayCollection;
use Gedmo\Mapping\Annotation as Gedmo;
use Application\Sonata\UserBundle\Entity\User as User;

/**
 * Offer
 *
 * @ORM\Table("offer")
 * @ORM\Entity(repositoryClass="GPI\OfferBundle\Entity\OfferRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Offer extends \GPI\CoreBundle\Model\Offer\Offer
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
     * @var string
     * @ORM\Column(name="price", type="decimal", scale=2, nullable=false)
     */
    protected $price;

    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text")
     */
    protected $content;

    /**
     * @var ArrayCollection $trainings
     * @ORM\ManyToMany(targetEntity="\GPI\DocumentBundle\Entity\Document")
     */
    protected $documents;

    /**
     * @var \GPI\AuctionBundle\Entity\Auction $auction
     *
     * @ORM\ManyToOne(targetEntity="\GPI\AuctionBundle\Entity\Auction", inversedBy="offers")
     * @ORM\JoinColumn(name="auction", referencedColumnName="id")
     */
    protected $auction;

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


    public function isOwner(User $user) {
        return $this->getCreatedBy() === $user;
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

    public function getAuction()
    {
        return $this->auction;
    }
}

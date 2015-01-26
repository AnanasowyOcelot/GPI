<?php

namespace GPI\AuctionBundle\Entity;

use Application\Sonata\ClassificationBundle\Entity\Category;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Validator\Mapping\ClassMetadata;
use Doctrine\ORM\Mapping as ORM;
use Gedmo\Mapping\Annotation as Gedmo;
use Application\Sonata\UserBundle\Entity\User as User;

/**
 * AddNewAuctionCommand
 *
 * @ORM\Table("add_auction_command")
 * @ORM\Entity
 */
class AddNewAuctionCommand extends \GPI\CoreBundle\Model\Auction\AddNewAuctionCommand
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=true)
     * @Assert\Length(min = 5)
     */
    protected $name;
    /**
     * @var string
     *
     * @ORM\Column(name="content", type="text", nullable=true)
     */
    protected $content;
    /**
     * @var string
     * @ORM\Column(name="max_price", type="decimal", scale=2, nullable=true, nullable=true)
     */
    protected $maxPrice;
    /**
     * @var ArrayCollection $categories
     * @ORM\ManyToMany(targetEntity="\Application\Sonata\ClassificationBundle\Entity\Category", cascade={"persist"})
     */
    protected $categories;
    /**
     * @var ArrayCollection $documents
     * @ORM\ManyToMany(targetEntity="\GPI\DocumentBundle\Entity\Document", cascade={"persist"})
     */
    protected $documents;
    /**
     * @var ArrayCollection $attributeValues
     * @ORM\OneToMany(targetEntity="\GPI\AuctionBundle\Entity\AddAuctionCommandAttributeValue", cascade={"persist"}, mappedBy="command")
     */
    protected $attributeValues;
    /**
     * @var integer
     *
     * @ORM\Column(name="time_period", type="integer", nullable=true)
     */
    protected $timePeriod;
    /**
     * @ORM\Column(name="max_realization_date", type="datetime", nullable=true)
     */
    protected $maxRealizationDate;

    /**
     * @var User $createdBy
     *
     * @Gedmo\Blameable(on="create")
     * @ORM\ManyToOne(targetEntity="Application\Sonata\UserBundle\Entity\User")
     * @ORM\JoinColumn(name="created_by", referencedColumnName="id")
     */
    protected $createdBy;
}

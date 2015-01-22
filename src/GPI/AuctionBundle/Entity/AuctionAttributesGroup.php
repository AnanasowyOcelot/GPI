<?php

namespace GPI\AuctionBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints AS Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * AuctionAttributesGroup
 *
 * @ORM\Table("auction_attributes_group")
 * @ORM\Entity
 */
class AuctionAttributesGroup extends \GPI\CoreBundle\Model\Auction\AuctionAttributesGroup
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
     * @var \Application\Sonata\ClassificationBundle\Entity\Category $category
     * @ORM\ManyToOne(targetEntity="\Application\Sonata\ClassificationBundle\Entity\Category")
     */
    protected $category;

    /**
     * @var ArrayCollection $auctionAttributes
     * @ORM\ManyToMany(targetEntity="\GPI\AuctionBundle\Entity\AuctionAttribute", cascade={"persist"})
     */
    protected $auctionAttributes;

}

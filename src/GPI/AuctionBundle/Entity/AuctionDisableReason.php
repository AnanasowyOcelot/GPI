<?php

namespace GPI\AuctionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints AS Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * AuctionComments
 *
 * @ORM\Table("auction_disable_reason")
 * @ORM\Entity
 */
class AuctionDisableReason extends \GPI\CoreBundle\Model\Auction\AuctionDisableReason
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
     * @ORM\Column(name="content", type="text")
     */
    protected $content;

    /**
     * @ORM\ManyToOne(targetEntity="\GPI\AuctionBundle\Entity\Auction", inversedBy="disableReason")
     */
    protected $auction;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    protected $created;
}

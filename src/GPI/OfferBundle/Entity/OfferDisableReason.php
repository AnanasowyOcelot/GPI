<?php

namespace GPI\OfferBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints AS Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 *
 * @ORM\Table("offer_disable_reason")
 * @ORM\Entity
 */
class OfferDisableReason extends \GPI\CoreBundle\Model\Offer\OfferDisableReason
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
     * @ORM\ManyToOne(targetEntity="\GPI\OfferBundle\Entity\Offer", inversedBy="disableReason")
     */
    protected $offer;

    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    protected $created;
}

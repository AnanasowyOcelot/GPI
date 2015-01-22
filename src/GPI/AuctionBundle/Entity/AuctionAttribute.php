<?php

namespace GPI\AuctionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints AS Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * AuctionAttribute
 *
 * @ORM\Table("auction_attribute")
 * @ORM\Entity
 */
class AuctionAttribute extends \GPI\CoreBundle\Model\Auction\AuctionAttribute
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
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;

    public function __toString(){
        return $this->name;
    }

}

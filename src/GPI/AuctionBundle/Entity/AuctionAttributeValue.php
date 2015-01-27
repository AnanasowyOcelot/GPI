<?php

namespace GPI\AuctionBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints AS Assert;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * AttributeValue
 *
 * @ORM\Table("aucition_attribute_value")
 * @ORM\Entity
 */
class AuctionAttributeValue
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
     * @var \GPI\AuctionBundle\Entity\Auction $command
     *
     * @ORM\ManyToOne(targetEntity="\GPI\AuctionBundle\Entity\Auction", inversedBy="attributeValues")
     */
    protected $auction;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    protected $name;

    /**
     * @var string
     *
     * @ORM\Column(name="value", type="string", length=255)
     */
    protected $value;

    public function __toString(){
        return $this->name;
    }

    /**
     * @param \GPI\AuctionBundle\Entity\Auction $auction
     */
    public function setAuction($auction)
    {
        $this->auction = $auction;
    }

    /**
     * @return \GPI\AuctionBundle\Entity\Auction
     */
    public function getAuction()
    {
        return $this->auction;
    }



    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param string $value
     */
    public function setValue($value)
    {
        $this->value = $value;
    }

    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }



}

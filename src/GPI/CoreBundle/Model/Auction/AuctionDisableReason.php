<?php

namespace GPI\CoreBundle\Model\Auction;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints AS Assert;
use Gedmo\Mapping\Annotation as Gedmo;


class AuctionDisableReason
{

    protected $id;
    protected $content;
    protected $auction;
    protected $created;

    /**
     * @param mixed $auction
     */
    public function setAuction($auction)
    {
        $this->auction = $auction;
    }

    /**
     * @return mixed
     */
    public function getAuction()
    {
        return $this->auction;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $created
     */
    public function setCreated($created)
    {
        $this->created = $created;
    }

    /**
     * @return mixed
     */
    public function getCreated()
    {
        return $this->created;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    public function __toString(){
        return $this->getCreated()->format('Y-m-d H:i:s'). " - " . $this->getContent();
    }

}

<?php

namespace GPI\AuctionBundle\Entity;

class AuctionFilterParams
{
    private $name = null;

    private $category = null;

    //    function __construct(array $params = array())
    //    {
    //        $this->setCategory($params['category']);
    //        $this->setName($params['name']);
    //    }

    /**
     * @param mixed $categpory
     */
    public function setCategory($categpory)
    {
        $this->category = $categpory;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
}

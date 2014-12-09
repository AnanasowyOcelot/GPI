<?php

namespace GPI\Sonata\ClassificationBundle\Entity;

use Doctrine\ORM\EntityRepository;


class CategoryRepository extends EntityRepository
{
    private $auctionRootCategoryId;

    public function setAuctionRootCategoryId($id)
    {
        $this->auctionRootCategoryId = $id;
    }

    public function findByParentId($id)
    {
        $parent = $this->find($id);
        $categories = $this->findBy(array('parent' => $parent));
        return $categories;
    }

    public function auctionCategoryTree($parentCatId = null)
    {
        $parentId = $parentCatId;
        if ($parentCatId === null) {
            $parentId = $this->auctionRootCategoryId;
        }

        $categories = $this->findByParentId($parentId);

        $tree = array();
        foreach ($categories as $category) {
            $tree[] = array(
                'name' => $category->getName(),
                'children' => $this->auctionCategoryTree($category->getId()),
                'slug' => $category->getSlug()
            );
        }

        return $tree;
    }
}

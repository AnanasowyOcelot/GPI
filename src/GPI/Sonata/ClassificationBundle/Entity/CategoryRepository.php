<?php

namespace GPI\Sonata\ClassificationBundle\Entity;

use Doctrine\ORM\EntityRepository;


class CategoryRepository extends EntityRepository
{
    private $offerRootCategoryId;

    public function setOfferRootCategoryId($id)
    {
        $this->offerRootCategoryId = $id;
    }

    public function findByParentId($id)
    {
        $parent = $this->find($id);
        $categories = $this->findBy(array('parent' => $parent));
        return $categories;
    }

    public function offerCategoryTree($parentCatId = null)
    {
        $parentId = $parentCatId;
        if ($parentCatId === null) {
            $parentId = $this->offerRootCategoryId;
        }

        $categories = $this->findByParentId($parentId);

        $tree = array();
        foreach ($categories as $category) {
            $tree[] = array(
                'name' => $category->getName(),
                'children' => $this->offerCategoryTree($category->getId()),
                'slug' => $category->getSlug()
            );
        }

        return $tree;
    }
}

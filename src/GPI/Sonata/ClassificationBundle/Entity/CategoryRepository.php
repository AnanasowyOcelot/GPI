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

    public function findChildrenForParents(array $parents)
    {
        $allChildren = [];
        foreach ($parents as $parent) {
            $children = $this->findBy(array('parent' => $parent));
            $allChildren[$parent->getName()] = $children;
        }
        return $allChildren;
    }

    public function findParentSlugBySlug($slug)
    {
        $cat = $this->findOneBy(array('slug' => $slug));
        if (!$cat) {
            return null;
        }
        return $cat->getParent()->getSlug();
    }

    public function findMainCategories()
    {
        return $this->findBy(array('parent' => $this->auctionRootCategoryId));
    }

    public function findCategoriesByIds(array $catIds){
        $categories = [];
        foreach($catIds as $id){
            $categories[] = $this->findOneBy(array('id'=>$id));
        }
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
            /** @var \Application\Sonata\ClassificationBundle\Entity\Category $category */
            $tree[] = array(
                'name' => $category->getName(),
                'children' => $this->auctionCategoryTree($category->getId()),
                'slug' => $category->getSlug(),
                'entity' => $category,
                'parentSlug' => $category->getParent()->getSlug()
            );
        }

        return $tree;
    }
}

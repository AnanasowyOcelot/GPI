<?php

namespace GPI\AuctionBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * AuctionRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class AuctionRepository extends EntityRepository implements \GPI\CoreBundle\Model\Auction\AuctionRepository
{
    public function filterBy(AuctionFilterParams $params)
    {
        $queryBuilder = $this->createQueryBuilder('auction', 'categories');
        $queryBuilder->andWhere('auction.isPartiallyActive = true');
        $queryBuilder->setParameter('now', new \DateTime());

        $queryBuilder->andWhere($queryBuilder->expr()->gt('auction.endTime', ":now"));

        if ($params->getCategory() == null && $params->getName() == null) {
            $queryBuilder->orderBy('auction.endTime', 'ASC');
            $auctions = $queryBuilder->getQuery()->getResult();
        } else {

            if ($params->getName() != null) {
                $name = $params->getName();
                $queryBuilder->andWhere('auction.name LIKE :pac');
                $queryBuilder->setParameter('pac', '%' . $name . '%');
            }
            if ($params->getCategory() != null) {
                $queryBuilder->leftJoin('auction.categories', 'category');
                $category = $params->getCategory();
                $queryBuilder->andWhere('category = :cat OR category.parent = :cat');
                $queryBuilder->setParameter('cat', $category);
            }
            $queryBuilder->orderBy('auction.endTime', 'ASC');
            $auctions = $queryBuilder->getQuery()->getResult();
        }

        return $auctions;
    }

}

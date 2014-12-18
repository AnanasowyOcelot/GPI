<?php


namespace GPI\CoreBundle\Model\Offer;

interface OfferRepository
{
    /**
     * Finds an entity by its primary key / identifier.
     *
     * @param int $id The identifier.
     *
     * @return object|null The entity instance or NULL if the entity can not be found.
     */
    public function find($id);
}

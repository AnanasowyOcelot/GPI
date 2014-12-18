<?php

namespace GPI\CoreBundle\Model\Service;

use GPI\CoreBundle\Model\Offer\AddNewOfferCommand;
use GPI\CoreBundle\Model\Offer\OfferRepository;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;


class Offer
{
    private $offerRepository;
    private $securityToken;

    public function __construct(OfferRepository $offerRepository, TokenStorage $securityToken)
    {
        $this->offerRepository = $offerRepository;
        $this->securityToken = $securityToken;
    }

    public function createNewOffer(AddNewOfferCommand $command)
    {
        $offer = new \GPI\OfferBundle\Entity\Offer(
            $command->getContent(),
            $command->getPrice(),
            $command->getAuction()
        );
        foreach ($command->getDocuments() as $document) {
            $offer->getDocuments()->add($document);
            $document->upload();
        }
        return $offer;
    }

//
//    private function isOwner(\GPI\CoreBundle\Model\Offer\Offer $offer)
//    {
//        return $offer->ownerId() === $this->securityToken->getToken()->getUser();
//    }
}

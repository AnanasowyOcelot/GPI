<?php

namespace GPI\CoreBundle\Model\Service;

use Doctrine\Common\Proxy\Exception\InvalidArgumentException;
use Doctrine\ORM\EntityManager;
use GPI\CoreBundle\Model\Auction\Auction as CoreAuction;
use GPI\CoreBundle\Model\Offer\AddNewOfferCommand;
use GPI\OfferBundle\Entity\Offer as OfferEntity;

class Offer
{
    private $em;

    public function __construct(EntityManager $em)
    {
        $this->em = $em;
    }

    public function createNewOffer(AddNewOfferCommand $command)
    {
        $offer = new OfferEntity(
            $command->getContent(),
            $command->getPrice(),
            $command->getAuction()
        );
        $offer->setActualPrice($offer->getPrice());
        //TODO: łap błąd
        $offer->setBidPercent($command->getBidPercent());

        foreach ($command->getDocuments() as $document) {
            /** @var $document \GPI\CoreBundle\Model\Document\Document */
            $offer->getDocuments()->add($document);
            $document->upload();
        }
        return $offer;
    }

    public function updateActualPrices(CoreAuction $auction)
    {
        $offers = $auction->getSortedActiveOffers();

        foreach ($offers as $offer) {
            /** @var OfferEntity $offer */
            $offer->setActualPrice($offer->getPrice());
        }
        if (count($offers) > 1) {
            /** @var OfferEntity $winningOffer */
            $winningOffer = $offers[0];
            $winningOfferPrice = $winningOffer->getPrice();

            /** @var OfferEntity $penultimateOffer */
            $penultimateOffer = $offers[1];
            $penultimateOfferPrice = $penultimateOffer->getPrice();

            $bidPercentValue = $winningOffer->getBidPercent();

            //TODO: co gdy tu będzie 0
            if ($bidPercentValue !== null) {
                $newWinningOfferPrice = $penultimateOfferPrice - $penultimateOfferPrice * $bidPercentValue;
                while ($newWinningOfferPrice < $winningOfferPrice) {
                    $newWinningOfferPrice++;
                }
                $winningOffer->setActualPrice($newWinningOfferPrice);
            } else {
                $winningOffer->setActualPrice($penultimateOfferPrice - 1);
            }
        }
        foreach ($offers as $offer) {
            $this->em->persist($offer);
        }
        $this->em->flush();
    }
}

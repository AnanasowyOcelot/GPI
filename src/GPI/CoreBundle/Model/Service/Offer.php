<?php

namespace GPI\CoreBundle\Model\Service;

use Doctrine\ORM\EntityManager;
use GPI\AuctionBundle\Entity\Auction as AuctionEntity;
use GPI\CoreBundle\Model\Offer\AddNewOfferCommand;
use GPI\OfferBundle\Entity\Offer as OfferEntity;
use GPI\CoreBundle\Model\Offer\OfferRepository;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage;


class Offer
{
    private $offerRepository;
    private $securityToken;
    private $em;

    public function __construct(OfferRepository $offerRepository, TokenStorage $securityToken, EntityManager $em)
    {
        $this->offerRepository = $offerRepository;
        $this->securityToken = $securityToken;
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
        $offer->setBidPercent($command->getBidPercent());
        foreach ($command->getDocuments() as $document) {
            $offer->getDocuments()->add($document);
            $document->upload();
        }
        return $offer;
    }

    public function updateActualPrices(AuctionEntity $auction){
        $offers = $auction->getActiveOffers();
        foreach($offers as $offer){
            /** @var OfferEntity $offer */
            $offer->setActualPrice($offer->getPrice());
        }
        if(count($offers) > 1){
            /** @var OfferEntity $winningOffer */
            $winningOffer = $offers[0];
            $winningOfferPrice = $winningOffer->getPrice();
            /** @var OfferEntity $penultimateOffer */
            $penultimateOffer = $offers[1];
            $penultimateOfferPrice  = $penultimateOffer->getPrice();

            $bidPercentValue = $winningOffer->getBidPercent();
            if($bidPercentValue !== null){
                $newWinningOfferPrice = $penultimateOfferPrice - $penultimateOfferPrice * $bidPercentValue;
                while($newWinningOfferPrice < $winningOfferPrice){
                    $newWinningOfferPrice++;
                }
                $winningOffer->setActualPrice($newWinningOfferPrice);
            }else{
                $winningOffer->setActualPrice($penultimateOfferPrice - 1);
            }

        }
        foreach($offers as $offer){
            $this->em->persist($offer);
        }
        $this->em->flush();
    }
}

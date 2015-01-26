<?php

namespace GPI\AuctionBundle\Controller;

use GPI\CoreBundle\Model\Offer\OfferStatus;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AuctionDetailsController extends Controller
{
    public function indexAction($id)
    {
        /** @var \Doctrine\Common\Persistence\ObjectRepository $auctionRepo */
        $auctionRepo = $this->get('gpi_auction.auction_repository');
        /** @var \GPI\AuctionBundle\Entity\Auction $auction */
        $auction = $auctionRepo->find($id);


//        /** @var \GPI\Sonata\ClassificationBundle\Entity\CategoryRepository $categoriesRepo */
//        $categoriesRepo = $this->get('gpi_sonata.category_repository');
//        $auctionCategories = $auction->getCategories();
//        foreach($auctionCategories as $category){
//            /** @var  $category */
//            $parentCategories = $categoriesRepo->findByParentId($category->getId());
//
//        }
        // kategorie i wszystkie parenty, dla nich grupy atrybutów



        return $this->render(
            'GPIAuctionBundle:Default:details.html.twig',
            array(
                'auction' => $auction,
                'offerStatus' => new OfferStatus(),
                'disableReason'=> $auction->getCurrentDisableReason(),
                'isActive' => $auction->isActive(),
                'isDeactivated' => $auction->isDeactivated(),
                'hasProperlyEnded' => $auction->hasProperlyEnded()
            )
        );

    }
}

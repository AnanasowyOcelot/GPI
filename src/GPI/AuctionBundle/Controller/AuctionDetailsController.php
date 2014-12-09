<?php

namespace GPI\AuctionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AuctionDetailsController extends Controller
{
    public function indexAction($id)
    {
        /** @var \Doctrine\Common\Persistence\ObjectRepository $repo */
        $repo = $this->get('gpi_auction.auction_repository');
        /** @var \GPI\AuctionBundle\Entity\Auction $auction */
        $auction = $repo->find($id);

        return $this->render(
            'GPIAuctionBundle:Default:details.html.twig',
            array('auction' => $auction)
        );

    }
}

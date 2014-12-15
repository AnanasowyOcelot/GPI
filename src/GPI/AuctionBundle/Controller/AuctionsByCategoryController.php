<?php

namespace GPI\AuctionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AuctionsByCategoryController extends Controller
{
    public function indexAction($categorySlug)
    {
        return $this->render('GPIAuctionBundle:Default:index.html.twig', array());
    }
}

<?php

namespace GPI\OfferBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OffersByCategoryController extends Controller
{
    public function indexAction($categorySlug)
    {

        return $this->render('GPIOfferBundle:Default:index.html.twig', array());
    }
}

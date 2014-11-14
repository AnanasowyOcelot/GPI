<?php

namespace GPI\OfferBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GPIOfferBundle:Default:index.html.twig', array('name' => $name));
    }
}

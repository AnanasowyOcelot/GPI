<?php

namespace GPI\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FAQController extends Controller
{
    public function indexAction()
    {
        return $this->render('GPISiteBundle:Default:faq.html.twig');
    }
}

<?php

namespace GPI\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegulationsController extends Controller
{
    public function indexAction()
    {
        return $this->render('GPISiteBundle:Default:regulations.html.twig');
    }
}

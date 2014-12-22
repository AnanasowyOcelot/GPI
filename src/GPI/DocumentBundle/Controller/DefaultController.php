<?php

namespace GPI\DocumentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('GPIDocumentBundle:Default:index.html.twig', array('name' => $name));
    }
}

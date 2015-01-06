<?php

namespace GPI\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class RegulationsController extends Controller
{
    public function indexAction()
    {
        /** @var \Doctrine\Common\Persistence\ObjectRepository $repo */
        $repo = $this->get('gpi_site.site_repository');
        $regulationsSite = $repo->findOneBy(array('slug'=>'regulamin'));

        return $this->render('GPISiteBundle:Default:site.html.twig', array('site' => $regulationsSite));
    }
}

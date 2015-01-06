<?php

namespace GPI\SiteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class FAQController extends Controller
{
    public function indexAction()
    {
        /** @var \Doctrine\Common\Persistence\ObjectRepository $repo */
        $repo = $this->get('gpi_site.site_repository');
        $faqSite = $repo->findOneBy(array('slug'=>'faq'));

        return $this->render('GPISiteBundle:Default:site.html.twig', array('site' => $faqSite));
    }
}

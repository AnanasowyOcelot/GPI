<?php

namespace GPI\OfferBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OfferDetailsController extends Controller
{
    public function indexAction($id)
    {
        /** @var \Doctrine\Common\Persistence\ObjectRepository $repo */
        $repo = $this->get('gpi_offer.offer_repository');
        /** @var \GPI\OfferBundle\Entity\Offer $offer */
        $offer = $repo->find($id);

        return $this->render(
            'GPIOfferBundle:Default:details.html.twig',
            array('offer' => $offer)
        );

    }
}

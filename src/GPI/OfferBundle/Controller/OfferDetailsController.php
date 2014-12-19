<?php

namespace GPI\OfferBundle\Controller;

use GPI\CoreBundle\Model\Offer\OfferStatus;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class OfferDetailsController extends Controller
{
    public function indexAction($id)
    {
        /** @var \Doctrine\Common\Persistence\ObjectRepository $repo */
        $repo = $this->get('gpi_offer.offer_repository');
        /** @var \GPI\OfferBundle\Entity\Offer $auction */
        $offer = $repo->find($id);

        return $this->render(
            'GPIOfferBundle:Offer:details.html.twig',
            array(
                'offer' => $offer,
                'offerStatus' => new OfferStatus()
            )
        );

    }
}

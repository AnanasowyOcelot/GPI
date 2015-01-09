<?php

namespace GPI\OfferBundle\Controller;

use GPI\CoreBundle\Model\Offer\OfferStatus;
use GPI\OfferBundle\Entity\Offer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class OfferDetailsController extends Controller
{
    public function indexAction($id)
    {
        /** @var \Doctrine\Common\Persistence\ObjectRepository $repo */
        $repo = $this->get('gpi_offer.offer_repository');
        /** @var \GPI\OfferBundle\Entity\Offer $offer */
        $offer = $repo->find($id);

        $this->validateUser($offer);

        return $this->render(
            'GPIOfferBundle:Offer:details.html.twig',
            array(
                'offer' => $offer,
                'offerStatus' => new OfferStatus()
            )
        );

    }

    /**
     * @param $offer
     * @throws \Symfony\Component\Security\Core\Exception\AccessDeniedException
     */
    private function validateUser(Offer $offer)
    {
        if (!$this->container->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            throw new AccessDeniedException('You have to be logged');
        }
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!$offer->isOwner($user) && !$offer->getAuction()->isOwner($user)) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
    }
}

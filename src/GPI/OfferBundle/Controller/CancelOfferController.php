<?php


namespace GPI\OfferBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class CancelOfferController extends Controller
{
    public function indexAction(Request $request, $id){
        /** @var \Doctrine\Common\Persistence\ObjectRepository $repo */
        $repo = $this->get('gpi_offer.offer_repository');
        /** @var \GPI\OfferBundle\Entity\Offer $offer */
        $offer = $repo->find($id);

        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!$this->container->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            throw new AccessDeniedException('You have to be logged');
        }
        if (!$offer->isOwner($user)) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        if ($offer->hasWon()) {
            throw new AccessDeniedException('You can not remove this offer');
        }

        if($offer->isCanceled()){
            return $this->render(
                'GPIOfferBundle:Offer:cancel_info.html.twig',
                array('offer' => $offer)
            );
        }

        if($request->isMethod('POST')){
            $offer->cancel();
            $this->getDoctrine()->getManager()->flush($offer);
            return $this->redirectToRoute('gpi_offer_list');
        }

        return $this->render(
            'GPIOfferBundle:Offer:cancel.html.twig',
            array('offer' => $offer)
        );
    }


} 
<?php


namespace GPI\OfferBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class CancelOfferController extends Controller
{
    public function indexAction(Request $request, $id){
        /** @var \Doctrine\Common\Persistence\ObjectRepository $repo */
        $repo = $this->get('gpi_offer.offer_repository');
        /** @var \GPI\OfferBundle\Entity\Offer $offer */
        $offer = $repo->find($id);

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
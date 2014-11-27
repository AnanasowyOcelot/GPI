<?php


namespace GPI\OfferBundle\Controller;

use GPI\OfferBundle\Form\OfferType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class OfferEditController extends Controller
{


    public function editAction($id, Request $request)
    {
        /**
         * @var $repo \GPI\OfferBundle\Entity\OfferRepository
         */
        $repo = $this->get('gpi_offer.offer_repository');
        $offer = $repo->find($id);

        if (!$offer && !$request->isMethod('POST')) {
            throw $this->createNotFoundException(
                'No Offer found for id ' . $id
            );
        }

        $form = $this->createForm('offer', $offer);

        $form->handleRequest($request);

        if ($form->isValid()) {

            $editOffer = $form->getData();
            $em = $this->getDoctrine()->getManager();
            $em->persist($editOffer);
            $em->flush();
            return $this->redirect($this->generateUrl('sonata_user_profile_show'));

        }

        return $this->render('GPIOfferBundle:EditOffer:index.html.twig', array('form' => $form->createView()));
    }
} 
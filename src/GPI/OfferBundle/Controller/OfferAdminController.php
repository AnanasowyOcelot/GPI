<?php

namespace GPI\OfferBundle\Controller;

use GPI\OfferBundle\Entity\OfferDisableReason;
use Sonata\AdminBundle\Controller\CRUDController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class OfferAdminController extends CRUDController
{
    public function deactivateAction(Request $request)
    {
        $id = $this->get('request')->get($this->admin->getIdParameter());

        /**
         * @var $object \GPI\OfferBundle\Entity\Offer
         */
        $offer = $this->admin->getObject($id);

        if (!$offer) {
            throw new NotFoundHttpException(sprintf('unable to find the object with id : %s', $id));

        }

        if($offer->isDeactivated()){
            $this->addFlash('sonata_flash_error', 'Oferta jest już wyłączona.');
            return new RedirectResponse($this->admin->generateUrl('list'));
        }else{
            $disableReason = new OfferDisableReason();
            $disableReason->setOffer($offer);
            $disableReason->setCreated(new \DateTime());

            $form = $this->createForm('offer_disable', $disableReason);
            $form->handleRequest($request);

            if ($form->isValid()) {
                $offer->deactivate();
                $this->getDoctrine()->getManager()->persist($disableReason);
                $this->getDoctrine()->getManager()->persist($offer);
                $this->getDoctrine()->getManager()->flush();
                $this->addFlash('sonata_flash_success', 'Wyłączono ofertę');
                return new RedirectResponse($this->admin->generateUrl('list'));

            }

            return $this->render(
                'GPIOfferBundle:Offer:add_disable_reason.html.twig',
                array(
                    'form' => $form->createView(),
                )
            );
        }
    }

    public function activateAction()
    {
        $id = $this->get('request')->get($this->admin->getIdParameter());

        /**
         * @var $object \GPI\OfferBundle\Entity\Offer
         */
        $object = $this->admin->getObject($id);

        if (!$object) {
            throw new NotFoundHttpException(sprintf('unable to find the object with id : %s', $id));
        }

        if(!$object->isDeactivated()){
            $this->addFlash('sonata_flash_error', 'Oferta jest już włączona.');
        }else{
            $object->activate();
            $this->getDoctrine()->getManager()->flush($object);
            $this->addFlash('sonata_flash_success', 'Włączono ofertę');
        }

        return new RedirectResponse($this->admin->generateUrl('list'));
    }
}

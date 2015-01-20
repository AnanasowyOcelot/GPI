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
         * @var $offer \GPI\OfferBundle\Entity\Offer
         */
        $offer = $this->admin->getObject($id);

        if (!$offer) {
            throw new NotFoundHttpException(sprintf('unable to find the object with id : %s', $id));

        }

        if($offer->isDeactivated()){
            $this->addFlash('sonata_flash_error', 'Oferta jest już wyłączona.');
            return new RedirectResponse($this->admin->generateUrl('list'));
        }else{
            $disableReason = $this->createDisableReason($offer);

            $form = $this->createForm('offer_disable', $disableReason);
            $form->handleRequest($request);

            if ($form->isValid()) {
                $offer->deactivate();
                $this->sendMailAboutOfferDeactivation($offer, $disableReason);

                $this->flush($disableReason, $offer);
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
            $this->sendMailAboutOfferActivation($object);

            $this->getDoctrine()->getManager()->flush($object);
            $this->addFlash('sonata_flash_success', 'Włączono ofertę');
        }

        return new RedirectResponse($this->admin->generateUrl('list'));
    }

    /**
     * @param $disableReason
     * @param $offer
     */
    private function flush($disableReason, $offer)
    {
        $this->getDoctrine()->getManager()->persist($disableReason);
        $this->getDoctrine()->getManager()->persist($offer);
        $this->getDoctrine()->getManager()->flush();
    }

    /**
     * @param $offer
     * @return OfferDisableReason
     */
    private function createDisableReason($offer)
    {
        $disableReason = new OfferDisableReason();
        $disableReason->setOffer($offer);
        $disableReason->setCreated(new \DateTime());
        return $disableReason;
    }

    /**
     * @param $object
     */
    private function sendMailAboutOfferActivation($object)
    {
        /** @var \GPI\CoreBundle\Model\Service\Mail $mailService */
        $mailService = $this->get('gpi_auction.service.mail');
        $mailTemplate = $this->renderView('GPIOfferBundle:Mail:enable_offer.html.twig', array(
            'name' => $object->getCreatedBy()->getUsername(),
            'offer_name' => $object->getAuction()->getName(),
        ));
        $mailService->sendMail($object->getCreatedBy()->getEmail(), $mailTemplate, "GPI: Odblokowanie oferty");
    }

    /**
     * @param $offer
     * @param $disableReason
     */
    private function sendMailAboutOfferDeactivation($offer, $disableReason)
    {
        /** @var \GPI\CoreBundle\Model\Service\Mail $mailService */
        $mailService = $this->get('gpi_auction.service.mail');
        $mailTemplate = $this->renderView('GPIOfferBundle:Mail:disable_offer.html.twig', array(
            'name' => $offer->getCreatedBy()->getUsername(),
            'offer_name' => $offer->getAuction()->getName(),
            'reason' => $disableReason->getContent()
        ));
        $mailService->sendMail($offer->getCreatedBy()->getEmail(), $mailTemplate, "GPI: Blokada złożonej oferty");
    }
}

<?php

namespace GPI\AuctionBundle\Controller;

use GPI\AuctionBundle\Entity\AuctionDisableReason;
use Sonata\AdminBundle\Controller\CRUDController;
use Symfony\Component\HttpFoundation\RedirectResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AuctionAdminController extends CRUDController
{
    public function deactivateAction(Request $request)
    {
        $id = $this->get('request')->get($this->admin->getIdParameter());

        /**
         * @var $auction \GPI\AuctionBundle\Entity\Auction
         */
        $auction = $this->admin->getObject($id);

        if (!$auction) {
            throw new NotFoundHttpException(sprintf('unable to find the object with id : %s', $id));
        }

        if ($auction->isDeactivated()) {
            $this->addFlash('sonata_flash_error', 'Aukcja "' . $auction->getName() . '" jest już wyłączona.');
            return new RedirectResponse($this->admin->generateUrl('list'));

        } else {
            $disableReason = $this->createNewDisableReason($auction);

            $form = $this->createForm('auction_disable', $disableReason);
            $form->handleRequest($request);

            if ($form->isValid()) {
                $auction->deactivate();
                $this->sendMailAboutAuctionDeactivation($auction, $disableReason);

                $this->flush($disableReason, $auction);
                $this->addFlash('sonata_flash_success', 'Wyłączono "' . $auction->getName() . '"');
                return new RedirectResponse($this->admin->generateUrl('list'));

            }

            return $this->render(
                'GPIAuctionBundle:EditAuction:add_disable_reason.html.twig',
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
         * @var $object \GPI\AuctionBundle\Entity\Auction
         */
        $object = $this->admin->getObject($id);

        if (!$object) {
            throw new NotFoundHttpException(sprintf('unable to find the object with id : %s', $id));
        }

        if (!$object->isDeactivated()) {
            $this->addFlash('sonata_flash_error', 'Aukcja "' . $object->getName() . '" jest już włłączona.');
        } else {
            $object->activate();
            $this->sendMailAboutAuctionActivation($object);

            $this->getDoctrine()->getManager()->flush($object);
            $this->addFlash('sonata_flash_success', 'Włączono "' . $object->getName() . '"');
        }

        return new RedirectResponse($this->admin->generateUrl('list'));
    }

    /**
     * @param $auction
     * @return AuctionDisableReason
     */
    private function createNewDisableReason($auction)
    {
        $disableReason = new AuctionDisableReason();
        $disableReason->setAuction($auction);
        $disableReason->setCreated(new \DateTime());
        return $disableReason;
    }

    /**
     * @param $disableReason
     * @param $auction
     */
    private function flush($disableReason, $auction)
    {
        $this->getDoctrine()->getManager()->persist($disableReason);
        $this->getDoctrine()->getManager()->persist($auction);
        $this->getDoctrine()->getManager()->flush();
    }

    /**
     * @param $object
     */
    private function sendMailAboutAuctionActivation($object)
    {
        /** @var \GPI\CoreBundle\Model\Service\Mail $mailService */
        $mailService = $this->get('gpi_auction.service.mail');
        $mailTemplate = $this->renderView('GPIAuctionBundle:Mail:enable_auction.html.twig', array(
            'name' => $object->getCreatedBy()->getUsername(),
            'auction_name' => $object->getName(),
        ));
        $mailService->sendMail($object->getCreatedBy()->getEmail(), $mailTemplate, "GPI: Odblokowanie aukcji");
    }

    /**
     * @param $auction
     * @param $disableReason
     */
    private function sendMailAboutAuctionDeactivation($auction, $disableReason)
    {
        /** @var \GPI\CoreBundle\Model\Service\Mail $mailService */
        $mailService = $this->get('gpi_auction.service.mail');
        $mailTemplate = $this->renderView('GPIAuctionBundle:Mail:disable_auction.html.twig', array(
            'name' => $auction->getCreatedBy()->getUsername(),
            'auction_name' => $auction->getName(),
            'reason' => $disableReason->getContent()
        ));
        $mailService->sendMail($auction->getCreatedBy()->getEmail(), $mailTemplate, "GPI: Blokada aukcji");
    }
}

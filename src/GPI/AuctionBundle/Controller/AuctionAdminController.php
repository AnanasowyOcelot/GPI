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
            $disableReason = new AuctionDisableReason();
            $disableReason->setAuction($auction);
            $disableReason->setCreated(new \DateTime());

            $form = $this->createForm('auction_disable', $disableReason);
            $form->handleRequest($request);

            if ($form->isValid()) {
                $auction->deactivate();
                $this->getDoctrine()->getManager()->persist($disableReason);
                $this->getDoctrine()->getManager()->persist($auction);
                $this->getDoctrine()->getManager()->flush();
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
            $this->getDoctrine()->getManager()->flush($object);
            $this->addFlash('sonata_flash_success', 'Włączono "' . $object->getName() . '"');
        }

        return new RedirectResponse($this->admin->generateUrl('list'));
    }
}

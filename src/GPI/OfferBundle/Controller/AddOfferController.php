<?php

namespace GPI\OfferBundle\Controller;

namespace GPI\OfferBundle\Controller;

use GPI\DocumentBundle\Entity\Document;
use GPI\OfferBundle\Entity\Offer;

use GPI\CoreBundle\Model\Offer\AddNewOfferCommand;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class AddOfferController extends Controller
{
    public function indexAction($auctionId, Request $request)
    {
        /** @var $repo \GPI\AuctionBundle\Entity\AuctionRepository */
        $repo = $this->get('gpi_auction.auction_repository');
        /** @var $auction \GPI\AuctionBundle\Entity\Auction */
        $auction = $repo->find($auctionId);

        if (!$auction && !$request->isMethod('POST')) {
            throw $this->createNotFoundException(
                'No Auction found for id ' . $auctionId
            );
        }
        $user = $this->container->get('security.context')->getToken()->getUser();
        if ($auction->isOwner($user)) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
        if (!$auction->isActive()) {
            throw new \Exception("Aukcja jest nie aktywna");
        }

        $command = new AddNewOfferCommand();
        $command->setAuction($auction);
        $d1 = new Document();
        $command->getDocuments()->add($d1);

        $form = $this->createForm('offer', $command);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $offerService = $this->get('gpi_offer.service.offer');
            $offer = $offerService->createNewOffer($command);
            $this->persistOffer($offer);
            return $this->redirect($this->generateUrl('gpi_auction_details', array('id' => $auctionId)));
        }

        return $this->render(
            'GPIOfferBundle:Offer:add.html.twig',
            array(
                'form' => $form->createView(),
                'auction' => $auction
            )
        );
    }

    /**
     * @param Offer $offer
     */
    private function persistOffer(Offer $offer)
    {
        /** @var \Doctrine\ORM\EntityManager $em */
        $em = $this->getDoctrine()->getManager();
        foreach ($offer->getDocuments() as $document) {
            $em->persist($document);
        }
        $em->persist($offer);
        $em->flush();
    }
}
<?php

namespace GPI\AuctionBundle\Controller;

use GPI\DocumentBundle\Entity\Document;
use GPI\AuctionBundle\Entity\Auction;

use GPI\CoreBundle\Model\Auction\AddNewAuctionCommand;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AddAuctionController extends Controller
{
    public function indexAction(Request $request)
    {
        $command = new AddNewAuctionCommand();
        $d1 = new Document();
        $command->getDocuments()->add($d1);

        $form = $this->createForm('auction', $command);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $auctionService = $this->get('gpi_auction.service.auction');
            $auction = $auctionService->createNewAuction($command);
            $this->persistAuction($auction);
            return $this->redirect($this->generateUrl('sonata_user_profile_show'));
        }

        return $this->render(
            'GPIAuctionBundle:AddAuction:index.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @param Auction $auction
     */
    private function persistAuction(Auction $auction)
    {
        /** @var \Doctrine\ORM\EntityManager $em */
        $em = $this->getDoctrine()->getManager();
        foreach ($auction->getDocuments() as $document) {
            $em->persist($document);
        }
        $em->persist($auction);
        $em->flush();
    }
}

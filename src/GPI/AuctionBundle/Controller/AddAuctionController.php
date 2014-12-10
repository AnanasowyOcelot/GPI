<?php

namespace GPI\AuctionBundle\Controller;

use GPI\AuctionBundle\Entity\Document;
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
        $command->addDocument($d1);
        $d2 = new Document();
        $command->addDocument($d2);

        $form = $this->createForm('auction', $command);
        $form->handleRequest($request);

        if ($form->isValid()) {
            /** @var \Doctrine\ORM\EntityManager $repo */
            $repo = $this->getDoctrine()->getManager();

            $auction = new Auction(
                new \DateTime('2014-12-30 14:01'),
                $command->getName(),
                $command->getContent(),
                $command->getCategories()
            );
            $auction->setContent($command->getDocuments());
            foreach ($command->getDocuments() as $document) {
                $auction->addDocument($document);
                $document->upload();
                $repo->persist($document);
            }

            $repo->persist($auction);
            $repo->flush();
            return $this->redirect($this->generateUrl('sonata_user_profile_show'));
        }

        return $this->render(
            'GPIAuctionBundle:AddAuction:index.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
}

<?php

namespace GPI\AuctionBundle\Controller;

use GPI\DocumentBundle\Entity\Document;
use GPI\AuctionBundle\Entity\AddNewAuctionCommand;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class PrepareAuctionController extends Controller
{
    public function indexAction(Request $request)
    {
        if (!$this->container->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            throw new AccessDeniedException('You have to be logged');
        }

        $command = new AddNewAuctionCommand();
        $d1 = new Document();
        $command->getDocuments()->add($d1);

        $form = $this->createForm('prepare_auction', $command);
        $form->handleRequest($request);

        if ($form->isValid()) {
            /** @var \Doctrine\ORM\EntityManager $em */
            $em = $this->getDoctrine()->getManager();
            $em->persist($command);
            $em->flush();

            return $this->redirect($this->generateUrl("gpi_auction_add2", array('commandId'=>$command->getId())));
        }

        return $this->render(
            'GPIAuctionBundle:AddAuction:prepare.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
}

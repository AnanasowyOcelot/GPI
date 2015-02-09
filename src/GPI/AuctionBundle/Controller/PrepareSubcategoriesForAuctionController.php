<?php

namespace GPI\AuctionBundle\Controller;

use GPI\DocumentBundle\Entity\Document;
use GPI\AuctionBundle\Entity\AddNewAuctionCommand;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class PrepareSubcategoriesForAuctionController extends Controller
{
    public function indexAction(Request $request, $commandId)
    {
        if (!$this->container->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            throw new AccessDeniedException('You have to be logged');
        }

        /** @var \GPI\CoreBundle\Model\Auction\AddNewAuctionCommand $command */
        $commandRepo = $this->getDoctrine()->getRepository('GPIAuctionBundle:AddNewAuctionCommand');
        $command = $commandRepo->findOneBy(array('id' => $commandId));
        $this->validateUser($command);

        $form = $this->createForm('prepare_auction_subcategories', $command);
        $form->handleRequest($request);

        if ($form->isValid()) {
            /** @var \Doctrine\ORM\EntityManager $em */
            $em = $this->getDoctrine()->getManager();
            $em->persist($command);
            $em->flush();

            return $this->redirect($this->generateUrl("gpi_auction_add2", array('commandId'=>$command->getId())));
        }

        return $this->render(
            'GPIAuctionBundle:AddAuction:prepareSubcategories.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }

    /**
     * @param $command
     * @throws \Symfony\Component\Security\Core\Exception\AccessDeniedException
     */
    private function validateUser($command)
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!$command->isOwner($user)) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
    }
}

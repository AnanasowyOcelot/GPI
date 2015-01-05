<?php


namespace GPI\AuctionBundle\Controller;

use GPI\AuctionBundle\Entity\Auction;
use GPI\CoreBundle\Model\Auction\UpdateAuctionCommand;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class AuctionEditController extends Controller
{
    public function editAction($id, Request $request)
    {
        /** @var $repo \GPI\AuctionBundle\Entity\AuctionRepository */
        $repo = $this->get('gpi_auction.auction_repository');

        /** @var $auction \GPI\AuctionBundle\Entity\Auction */
        $auction = $repo->find($id);

        if (!$auction && !$request->isMethod('POST')) {
            throw $this->createNotFoundException('No Auction found for id ' . $id . '.');
        }
        $this->validateUser($auction);
        if (!$auction->isActive()) {
            throw new \Exception('Aukcja jest nieaktywna.');
        }

        $command = new UpdateAuctionCommand();
        $command->setName($auction->getName());
        $command->setContent($auction->getContent());
        $command->setCategories($auction->getCategories());

        $form = $this->createForm('auction_update', $command);

        $form->handleRequest($request);

        if ($form->isValid()) {

            /**
             * @var $auctionService /GPI/AuctionBundle/Service/Auction
             */
            $auctionService = $this->get('gpi_auction.service.auction');
            $auction = $auctionService->editAuction($command, $id);

            $em = $this->getDoctrine()->getManager();
            $em->persist($auction);
            $em->flush();
            return $this->redirect($this->generateUrl('sonata_user_profile_show'));
        }

        return $this->render(
            'GPIAuctionBundle:EditAuction:index.html.twig',
            array(
                'form' => $form->createView(),
                'documents' => $auction->getDocuments()
            )
        );
    }

    /**
     * @param $auction
     * @throws \Symfony\Component\Security\Core\Exception\AccessDeniedException
     */
    private function validateUser($auction)
    {
        if (!$this->container->get('security.context')->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
            throw new AccessDeniedException('You have to be logged');
        }
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!$auction->isOwner($user)) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }
    }
}

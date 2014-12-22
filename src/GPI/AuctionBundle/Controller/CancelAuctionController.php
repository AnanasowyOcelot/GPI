<?php


namespace GPI\AuctionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

class CancelAuctionController extends Controller
{
    public function indexAction(Request $request, $id)
    {
        /** @var \Doctrine\Common\Persistence\ObjectRepository $repo */
        $repo = $this->get('gpi_auction.auction_repository');
        /** @var \GPI\AuctionBundle\Entity\Auction $auction */
        $auction = $repo->find($id);

        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!$auction->isOwner($user)) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        if ($auction->isCanceled()) {
            return $this->render(
                'GPIAuctionBundle:Default:cancel_info.html.twig',
                array('auction' => $auction)
            );
        }

        if ($request->isMethod('POST')) {
            $auction->cancel();
            $this->getDoctrine()->getManager()->flush($auction);
            return $this->redirectToRoute('fos_user_profile_show');
        }

        return $this->render(
            'GPIAuctionBundle:Default:cancel.html.twig',
            array('auction' => $auction)
        );
    }
}
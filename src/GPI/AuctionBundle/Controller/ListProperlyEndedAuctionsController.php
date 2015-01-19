<?php


namespace GPI\AuctionBundle\Controller;

use GPI\CoreBundle\Model\Auction\Auction;
use GPI\CoreBundle\Model\Auction\AuctionStatus;

use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Response;
use FOS\UserBundle\Model\UserInterface;
use Sonata\UserBundle\Controller\ProfileFOSUser1Controller as BaseController;

class ListProperlyEndedAuctionsController extends BaseController
{

    /**
     * @return Response
     *
     * @throws AccessDeniedException
     */
    public function showAction()
    {
        $user = $this->container->get('security.context')->getToken()->getUser();
        if (!is_object($user) || !$user instanceof UserInterface) {
            throw new AccessDeniedException('This user does not have access to this section.');
        }

        $auctions = $this->get('gpi_auction.auction_repository')->findBy(array('createdBy'=>$this->getUser()));

        $auctions = array_filter($auctions, function(Auction $auction){
            return $auction->hasProperlyEnded();
        });

        return $this->render('GPIAuctionBundle:Profile:show.html.twig', array(
            'user' => $user,
            'auctions' => $auctions,
            'auctionStatus' => new AuctionStatus()
        ));

    }
}

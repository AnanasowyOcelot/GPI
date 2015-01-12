<?php


namespace GPI\OfferBundle\Controller;

use GPI\CoreBundle\Model\Offer\Offer;
use GPI\CoreBundle\Model\Offer\OfferStatus;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;
use Symfony\Component\HttpFoundation\Response;
use FOS\UserBundle\Model\UserInterface;
use Sonata\UserBundle\Controller\ProfileFOSUser1Controller as BaseController;

class ListOffersController extends BaseController
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

        $offers = $this->get('gpi_offer.offer_repository')->findBy(array('createdBy' => $this->getUser()));

        $statusOrder = [
            OfferStatus::ACTIVE => 1,
            OfferStatus::DEACTIVATED => 2,
            OfferStatus::CANCELED => 3
        ];

        usort(
            $offers,
            function (Offer $a, Offer $b) use ($statusOrder) {
                if ($a->getAuctionId() !== $b->getAuctionId()) {
                    return $a->getAuctionId() - $b->getAuctionId();
                }
                return $statusOrder[$a->getStatus()] - $statusOrder[$b->getStatus()];
            }
        );
        /** @var \GPI\CoreBundle\Model\Service\Auction $auctionService */
        $auctionService = $this->get('gpi_auction.service.auction');

        $offersViewModels = array_map(
            function (Offer $offer) use ($auctionService) {
                $offerView = new \GPI\OfferBundle\ViewModel\Offer($offer);
                $offerView->setCurrentPosition($auctionService->getOfferCurrentPosition($offer, $offer->getAuction())+1);
                return $offerView;
            },
            $offers
        );

        return $this->render('GPIOfferBundle:Profile:show.html.twig', array(
            'user' => $user,
            'offers' => $offersViewModels,
            'offerStatus' => new OfferStatus()
        ));
    }
}

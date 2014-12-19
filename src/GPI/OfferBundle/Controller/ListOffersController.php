<?php


namespace GPI\OfferBundle\Controller;


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

        return $this->render('GPIOfferBundle:Profile:show.html.twig', array(
            'user' => $user,
            'offers' => $offers,
            'offerStatus' => new OfferStatus()
        ));
    }
}
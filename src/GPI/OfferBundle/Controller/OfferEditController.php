<?php


namespace GPI\OfferBundle\Controller;

use GPI\OfferBundle\Entity\Offer;
use GPI\OfferBundle\Model\Command\UpdateOfferCommand;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class OfferEditController extends Controller
{
    public function editAction($id, Request $request)
    {
        /**
         * @var $repo \GPI\OfferBundle\Entity\OfferRepository
         */
        $repo = $this->get('gpi_offer.offer_repository');
        /**
         * @var $offer \GPI\OfferBundle\Entity\Offer
         */
        $offer = $repo->find($id);

        if (!$offer && !$request->isMethod('POST')) {
            throw $this->createNotFoundException(
                'No Offer found for id ' . $id
            );
        }

        $command = new UpdateOfferCommand();
        $command->setName($offer->getName());
        $command->setContent($offer->getContent());
        $command->setCategory($offer->getCategory());
        foreach ($offer->getDocuments() as $document) {
            $command->addDocument($document);
        }

        $form = $this->createForm('offer_update', $command);

        $form->handleRequest($request);

        if ($form->isValid()) {

            $offer = new Offer(
                new \DateTime('2014-12-30 14:01'),
                $command->getName(),
                $command->getContent(),
                $command->getCategory()
            );
            foreach ($command->getDocuments() as $document) {
                $offer->addDocument($document);
            }

            $em = $this->getDoctrine()->getManager();
            $em->persist($offer);
            $em->flush();
            return $this->redirect($this->generateUrl('sonata_user_profile_show'));
        }

        return $this->render('GPIOfferBundle:EditOffer:index.html.twig', array('form' => $form->createView()));
    }
}

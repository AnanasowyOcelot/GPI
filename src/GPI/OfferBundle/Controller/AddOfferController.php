<?php

namespace GPI\OfferBundle\Controller;

use GPI\OfferBundle\Entity\Document;
use GPI\OfferBundle\Entity\Offer;

use GPI\OfferBundle\Model\Command\AddNewOfferCommand;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AddOfferController extends Controller
{
    public function indexAction(Request $request)
    {
        $command = new AddNewOfferCommand();
        $d1 = new Document();
        $command->addDocument($d1);

        $form = $this->createForm('offer', $command);
        $form->handleRequest($request);

        if ($form->isValid()) {
            /** @var \Doctrine\ORM\EntityManager $repo */
            $repo = $this->getDoctrine()->getManager();

            $offer = new Offer(
                new \DateTime('2014-12-30 14:01'),
                $command->getName(),
                $command->getContent(),
                $command->getCategory()
            );
            foreach ($command->getDocuments() as $document) {
                $offer->addDocument($document);
            }

            $d1->upload();

            $repo->persist($offer);
            $repo->flush();
            return $this->redirect($this->generateUrl('sonata_user_profile_show'));
        }

        return $this->render(
            'GPIOfferBundle:AddOffer:index.html.twig',
            array(
                'form' => $form->createView()
            )
        );
    }
}

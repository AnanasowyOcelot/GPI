<?php

namespace GPI\OfferBundle\Controller;

use GPI\OfferBundle\Entity\Document;
use GPI\OfferBundle\Entity\Offer;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class AddOfferController extends Controller
{
    public function indexAction(Request $request)
    {
        $offer = new Offer();
        $d1 = new Document();
//        $d2 = new Document();
//        $d3 = new Document();
        $offer->addDocument($d1);
//        $offer->addDocuments($d2);


        $form = $this->createForm('offer', $offer);
        $form->handleRequest($request);


        if ($form->isValid()) {
            /** @var \Doctrine\ORM\EntityManager $repo */
            $repo = $this->getDoctrine()->getManager();

            $d1->upload();

//            $repo->persist($d1);
//            $repo->persist($d2);
//            $repo->persist($d3);
            $repo->persist($offer);
            $repo->flush();
        }

        return $this->render('GPIOfferBundle:AddOffer:index.html.twig', array(
            'form' => $form->createView()
        ));
    }

}

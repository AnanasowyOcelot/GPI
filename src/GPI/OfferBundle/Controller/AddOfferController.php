<?php

namespace GPI\OfferBundle\Controller;

use GPI\OfferBundle\Entity\Offer;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;


class AddOfferController extends Controller
{
    public function indexAction(Request $request)
    {
        $offer = new Offer();

        $form = $this->createFormBuilder($offer)
            ->add('name')
            ->add('content')
            ->add('category', 'entity', array(
                'class' => 'Application\Sonata\ClassificationBundle\Entity\Category',
            ))
            ->add('file')
            ->add('submit', 'submit')
            ->getForm();

        $form->handleRequest($request);


        if ($form->isValid()) {
            /** @var \Doctrine\ORM\EntityManager $repo */
            $repo = $this->getDoctrine()->getManager();

            $offer->upload();

            $repo->persist($offer);
            $repo->flush($offer);
        }

        return $this->render('GPIOfferBundle:AddOffer:index.html.twig', array(
            'form' => $form->createView(),
        ));
    }

}

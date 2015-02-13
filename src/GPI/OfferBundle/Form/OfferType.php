<?php

namespace GPI\OfferBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

use Functional as F;

abstract class OfferType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content', 'textarea', array('label' => "Treść:"))
            ->add(
                'price',
                'money',
                array(
                    'label' => "Cena minimalna:",
                    'currency' => "PLN",
                    'required' => true,
                    'help_block' => 'Minimalna cena za jaką możesz wykonać zlecenie'

                )
            )
            ->add(
                'bidPercent',
                'choice',
                array(
                    'choices' => array(
                        '0.01' => '1%',
                        '0.02' => '2%',
                        '0.05' => '5%',
                        '0.1' => '10%',
                        '0.2' => '20%'
                    ,),
                    'multiple' => false,
                    'empty_value' => false,
                    'label' => "Procent przebicia oferty",
                    'required' => false,
                    //                    'help_block' => 'W przypadku nie wypełnienia pola konkurencyjna oferta przebijana będzie o 1zł.',
                )
            )

            ->add('auction', 'entity', array(
                    'class' => 'GPI\AuctionBundle\Entity\Auction',
                    'label' => 'Aukcja:',
                    'disabled' => true,
                    'attr' => array('data-sonata-select2' => 'false'),
                )
            )
            ->add(
                'documents',
                'collection',
                array(
                    'type' => 'document',
                    'allow_add' => true,
                    'allow_delete' => true,
                    'by_reference' => false,
                    'label' => "Dokumenty:"
                )
            )
            ->add('submit', 'submit', array('label'=> 'Dodaj'));
    }

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        // TODO: Implement getName() method.
    }
}

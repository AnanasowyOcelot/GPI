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
                'percent',
                array(
                    'label' => "Procent przebicia oferty",
                    'required' => false,
                    'help_block' => 'W przypadku nie wypełnienia pola konkurencyjna oferta przebijana będzie o 1zł.'
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
            ->add('submit', 'submit');
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

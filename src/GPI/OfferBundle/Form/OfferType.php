<?php

namespace GPI\OfferBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class OfferType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name')
            ->add('content')
            ->add(
                'category',
                'entity',
                array(
                    'class' => 'Application\Sonata\ClassificationBundle\Entity\Category',
                )
            )
            ->add(
                'documents',
                'collection',
                array(
                    'type' => 'document',
                    'allow_add' => true,
                    'allow_delete' => true,
                    'prototype' => true,
                    'by_reference' => false,
                    'required' => false
                )
            )
            ->add('submit', 'submit');
    }

    public function getName()
    {
        return 'offer';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'GPI\OfferBundle\Entity\Offer',
            )
        );
    }
}

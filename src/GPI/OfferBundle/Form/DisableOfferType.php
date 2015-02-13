<?php

namespace GPI\OfferBundle\Form;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\AbstractType;

class DisableOfferType extends AbstractType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'GPI\OfferBundle\Entity\OfferDisableReason',
            )
        );
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('content', 'textarea', array(
                'label' => "Treść:",
                'required' => true
            ))
            ->add('submit', 'submit', array('label'=> 'Potwierdź'));

    }


    public function getName()
    {
        return 'offer_disable';
    }

    protected function addTimePeriodToForm(FormBuilderInterface $builder)
    {
    }

    protected function addPriceToForm(FormBuilderInterface $builder)
    {
    }
}

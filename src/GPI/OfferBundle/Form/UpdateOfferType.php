<?php

namespace GPI\OfferBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UpdateOfferType extends OfferType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'GPI\OfferBundle\Model\Command\UpdateOfferCommand',
            )
        );
    }

    public function getName()
    {
        return 'offer_update';
    }
}

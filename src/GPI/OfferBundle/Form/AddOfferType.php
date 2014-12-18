<?php


namespace GPI\OfferBundle\Form;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Functional as F;

class AddOfferType extends OfferType
{

    public function getName()
    {
        return 'offer';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'GPI\CoreBundle\Model\Offer\AddNewOfferCommand',
            )
        );
    }
}

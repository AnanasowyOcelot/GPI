<?php

namespace GPI\AuctionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UpdateAuctionType extends AuctionType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'GPI\AuctionBundle\Model\Command\UpdateAuctionCommand',
            )
        );
    }

    public function getName()
    {
        return 'auction_update';
    }
}

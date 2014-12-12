<?php

namespace GPI\AuctionBundle\Form;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class UpdateAuctionType extends AuctionType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'GPI\CoreBundle\Model\Auction\UpdateAuctionCommand',
            )
        );
    }

    public function getName()
    {
        return 'auction_update';
    }

    protected function addTimePeriodToForm($builder)
    {
    }
}

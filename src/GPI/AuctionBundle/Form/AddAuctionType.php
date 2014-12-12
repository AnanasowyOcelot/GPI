<?php


namespace GPI\AuctionBundle\Form;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Functional as F;

class AddAuctionType extends AuctionType
{

    public function getName()
    {
        return 'auction';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'GPI\CoreBundle\Model\Auction\AddNewAuctionCommand',
            )
        );
    }

    protected function addTimePeriodToForm($builder)
    {
        $builder->add('timePeriod', 'choice', array(
                'label' => "Długość aukcji:",
                'choices' => array(30 => '30 dni', 60 => '60 dni', 90 => '90 dni'),
                'attr' => array('data-sonata-select2' => 'false'),

            )
        );
    }
}
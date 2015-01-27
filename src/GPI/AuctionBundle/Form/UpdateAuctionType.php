<?php

namespace GPI\AuctionBundle\Form;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormBuilderInterface;

class UpdateAuctionType extends AuctionType
{

    protected $disableCategories = true;

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

    protected function addTimePeriodToForm(FormBuilderInterface $builder)
    {
    }

    protected function addPriceToForm(FormBuilderInterface $builder)
    {
    }

    protected function addAttributesToForm(FormBuilderInterface $builder)
    {
        $builder->add(
            'attributeValues',
            'collection',
            array(
                'type' => 'auction_attribute_edit',
                'by_reference' => false,
                'label' => " "
            )
        );
    }
}

<?php


namespace GPI\AuctionBundle\Form;

use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AddAuctionType extends AuctionType
{

    protected $disableCategories = true;

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

    protected function addTimePeriodToForm(FormBuilderInterface $builder)
    {
        $builder->add(
            'timePeriod',
            'choice',
            array(
                'label' => "Długość aukcji:",
                'choices' => array(30 => '30 dni', 60 => '60 dni', 90 => '90 dni'),
                'attr' => array('data-sonata-select2' => 'false'),
            )
        );
    }

    protected function addPriceToForm(FormBuilderInterface $builder)
    {
        $builder->add(
            'maxPrice',
            'money',
            array(
                'label' => "Cena maksymalna:",
                'currency' => "PLN",
                'required' => false
            )
        );
    }

    protected function addAttributesToForm(FormBuilderInterface $builder)
    {
        $builder->add(
            'attributeValues',
            'collection',
            array(
                'type' => 'auction_attribute',
                'by_reference' => false,
                'label' => " "
            )
        );
    }
}

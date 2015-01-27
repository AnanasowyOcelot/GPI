<?php

namespace GPI\AuctionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AuctionAttributeEditType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'hidden', array(
                'label' => "Opis:",
                'disabled'=>true
            ))
            ->add('value', 'text', array('label' => "Wartość:"))            ;
    }

    public function getName()
    {
        return 'auction_attribute_edit';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'GPI\AuctionBundle\Entity\AuctionAttributeValue',
            )
        );
    }
}

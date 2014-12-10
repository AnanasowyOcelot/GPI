<?php

namespace GPI\AuctionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class DocumentType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('description')
            ->add(
                'file',
                'file',
                array(
                    'multiple' => 'multiple'
                )
            );
    }

    public function getName()
    {
        return 'document';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'GPI\AuctionBundle\Entity\Document',
            )
        );
    }
}

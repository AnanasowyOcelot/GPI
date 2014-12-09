<?php

namespace GPI\AuctionBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class AuctionType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text')
            ->add('content', 'textarea')
            ->add(
                'category',
                'entity',
                array(
                    'class' => 'Application\Sonata\ClassificationBundle\Entity\Category',
                )
            )
            ->add(
                'documents',
                'collection',
                array(
                    'type' => 'document',
                    'allow_add' => true,
                    'allow_delete' => true,
                )
            )
            ->add('submit', 'submit');
    }

    public function getName()
    {
        return 'auction';
    }

    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'GPI\AuctionBundle\Model\Command\AddNewAuctionCommand',
            )
        );
    }
}

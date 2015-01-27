<?php

namespace GPI\AuctionBundle\Form;

use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\FormBuilderInterface;

class PartlyUpdateAuctionType extends AuctionType
{
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(
            array(
                'data_class' => 'GPI\CoreBundle\Model\Auction\PartlyUpdateAuctionCommand',
            )
        );
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array(
                'label' => "Tytuł:",
                'disabled' => true,
            ))
            ->add('content', 'textarea', array('label' => "Treść:",
                'disabled' => true,
            ))
            ->add('maxRealizationDate', 'date', array(
                'attr' => array(
                    'data-sonata-select2' => 'false',
                ),
                'label' => "Maksymalny termin wykonania:",
                'required' => false,
                'disabled' => true,
                'input' => 'datetime',
                'empty_data' => null,
                'widget' => 'choice',
            ));

        $this->addPriceToForm($builder);
        $this->addTimePeriodToForm($builder);
        $this->addAttributesToForm($builder);

        $builder
            ->add(
                'categories',
                'entity',
                array(
                    'class' => 'Application\Sonata\ClassificationBundle\Entity\Category',
                    'choice_list' => parent::categoryChoiceList(),
                    'multiple' => true,
                    'disabled' => true,

                    'attr' => array('data-sonata-select2' => 'false'),
                    'label' => "Kategorie:"
                )
            )
            ->add(
                'comment',
                'text',
                array(
                    'label' => 'Dodaj uwagę: '
                ))
            ->add('submit', 'submit');
    }

    public function getName()
    {
        return 'auction_partly_update';
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
                'label' => " ",
                'disabled' => true,
            )
        );
    }
}

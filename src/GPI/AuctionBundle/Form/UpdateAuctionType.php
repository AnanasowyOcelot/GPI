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

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array('label' => "Tytuł:"))
            ->add('content', 'textarea', array('label' => "Treść:"))
            ->add('maxRealizationDate', 'date', array(
                'attr' => array(
                    'data-sonata-select2' => false,
                ),

                'label' => "Maksymalny termin wykonania:",
                'required'    => false,
                'input' => 'datetime',
                'empty_data'  => null,
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
                    'choice_list' => $this->categoryChoiceList(),
                    'multiple' => true,
                    'disabled' => $this->disableCategories,
                    'attr' => array(
                        'data-sonata-select2' => 'false',

                    ),
                    'label' => "Wybrane kategorie:",
                )
            )
            ->add(
                'documents',
                'collection',
                array(
                    'type' => 'document',
                    'allow_add' => true,
                    'allow_delete' => true,
                    'by_reference' => false,
                    'label' => " "
                )
            )
            ->add('submit', 'submit', array('label'=> 'Zapisz'));
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

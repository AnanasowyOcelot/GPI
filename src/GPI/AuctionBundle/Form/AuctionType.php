<?php

namespace GPI\AuctionBundle\Form;

use GPI\Sonata\ClassificationBundle\Entity\CategoryRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceList;
use Symfony\Component\Form\FormBuilderInterface;
use Functional as F;

abstract class AuctionType extends AbstractType
{
    /**
     * @var CategoryRepository
     */
    private $catRepo;
    protected $disableCategories = false;

    private function categoryTreeMap($tree, $depth = 0)
    {
        $treeMap = array();
        foreach ($tree as $node) {
            $treeMap[] = array(
                'label' => str_repeat('-', $depth) . ' ' . $node['name'],
                'entity' => $node['entity']
            );
            $treeMap = array_merge(
                $treeMap,
                $this->categoryTreeMap($node['children'], $depth + 1)
            );
        }
        return $treeMap;
    }

    /**
     * @return ChoiceList
     */
    protected  function categoryChoiceList()
    {
        $tree = $this->catRepo->auctionCategoryTree();
        $treeMap = $this->categoryTreeMap($tree);
        return new ChoiceList(
            F\pluck($treeMap, 'entity'),
            F\pluck($treeMap, 'label')
        );
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', 'text', array('label' => "Tytuł:"))
            ->add('content', 'textarea', array('label' => "Treść:"))
            ->add('maxRealizationDate', 'date', array(
                'attr' => array(
                    'data-sonata-select2' => 'false',
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
                    'label' => "Kategorie:",
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
                    'label' => "Dokumenty:"
                )
            )
            ->add('submit', 'submit');
    }

    abstract protected function addTimePeriodToForm(FormBuilderInterface $builder);

    abstract protected function addPriceToForm(FormBuilderInterface $builder);

    abstract protected function addAttributesToForm(FormBuilderInterface $builder);

    /**
     * Returns the name of this type.
     *
     * @return string The name of this type
     */
    public function getName()
    {
        // TODO: Implement getName() method.
    }

    /**
     * @param CategoryRepository $catRepo
     */
    public function __construct(CategoryRepository $catRepo)
    {
        $this->catRepo = $catRepo;
    }
}

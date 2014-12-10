<?php

namespace GPI\AuctionBundle\Form;

use GPI\Sonata\ClassificationBundle\Entity\CategoryRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceList;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Functional as F;

class AuctionType extends AbstractType
{
    /**
     * @var CategoryRepository
     */
    private $catRepo;

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
    private function categoryChoiceList()
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
            ->add('content', 'textarea')
            ->add(
                'categories',
                'entity',
                array(
                    'class' => 'Application\Sonata\ClassificationBundle\Entity\Category',
                    'choice_list' => $this->categoryChoiceList(),
                    'multiple' => true
                )
            )
            ->add(
                'documents',
                'collection',
                array(
                    'type' => 'document',
                    'allow_add' => true,
                    'allow_delete' => true
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
                'data_class' => 'GPI\CoreBundle\Model\Auction\AddNewAuctionCommand',
            )
        );
    }

    /**
     * @param CategoryRepository $catRepo
     */
    public function __construct(CategoryRepository $catRepo)
    {
        $this->catRepo = $catRepo;
    }
}

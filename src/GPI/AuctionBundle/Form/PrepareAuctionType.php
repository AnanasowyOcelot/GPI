<?php


namespace GPI\AuctionBundle\Form;

use GPI\Sonata\ClassificationBundle\Entity\CategoryRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Functional as F;
use Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceList;

class PrepareAuctionType extends AbstractType
{

    public function getName()
    {
        return 'prepare_auction';
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
     * @var CategoryRepository
     */
    private $catRepo;

    private function categoryTreeMap($tree)
    {
        $treeMap = array();
        foreach ($tree as $node) {
            /** @var \Application\Sonata\ClassificationBundle\Entity\Category $node */
            $treeMap[] = array(
                'label' => $node->getName(),
                'entity' => $node
            );
        }
        return $treeMap;
    }

    /**
     * @return ChoiceList
     */
    protected  function categoryChoiceList()
    {
        $tree = $this->catRepo->findMainCategories();
        $treeMap = $this->categoryTreeMap($tree);
        return new ChoiceList(
            F\pluck($treeMap, 'entity'),
            F\pluck($treeMap, 'label')
        );
    }

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add(
                'categories',
                'entity',
                array(
                    'required' => true,
                    'class' => 'Application\Sonata\ClassificationBundle\Entity\Category',
                    'choice_list' => $this->categoryChoiceList(),
                    'multiple' => true,
                    'expanded' => true,
                    'attr' => array(
                        'data-sonata-select2' => 'false',
                    ),
                    'label' => "Kategorie:",
                                    )
            )
            ->add('submit', 'submit');
    }

    /**
     * @param CategoryRepository $catRepo
     */
    public function __construct(CategoryRepository $catRepo)
    {
        $this->catRepo = $catRepo;
    }
}

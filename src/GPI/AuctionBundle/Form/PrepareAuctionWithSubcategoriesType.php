<?php


namespace GPI\AuctionBundle\Form;

use Application\Sonata\ClassificationBundle\Document\Category;
use GPI\Sonata\ClassificationBundle\Entity\CategoryRepository;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Functional as F;
use Symfony\Component\Form\Extension\Core\ChoiceList\ChoiceList;

class PrepareAuctionWithSubcategoriesType extends AbstractType
{

    public function getName()
    {
        return 'prepare_auction_subcategories';
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

    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        /** @var \GPI\AuctionBundle\Entity\AddNewAuctionCommand $entity */
        $entity = $builder->getData();
        $parents = $entity->getCategories()->toArray();
        $parentsWithChildrenArr = $this->catRepo->findChildrenForParents($parents);

        $index = 0;
        foreach ($parentsWithChildrenArr as $parentName => $children) {
            $choices = [];
            foreach ($children as $catEntity) {
                $choices = $this->addCatToChoices($catEntity, $choices);
            }

            $builder
                ->add(
                    'subcategories_' . $index,
                    'choice',
                    array(
                        'required' => true,
                        'choices' => $choices,
                        'multiple' => true,
                        'expanded' => true,
                        'attr' => array('data-sonata-select2' => 'false'),
                        'label' => $parentName
                        )
                );

            $index++;
        }

        $builder
            ->add(
                'categories',
                'entity',
                array(
                    'class' => 'Application\Sonata\ClassificationBundle\Entity\Category',
                    'multiple' => true,
                    'attr' => array('data-sonata-select2' => 'false'),
                    'label' => "Kategorie:",
                    'disabled' => true,
                )
            );

        $builder->add('submit', 'submit');
    }

    /**
     * @param CategoryRepository $catRepo
     */
    public function __construct(CategoryRepository $catRepo)
    {
        $this->catRepo = $catRepo;
    }

    /**
     * @param $catEntity
     * @param $choices
     * @return mixed
     */
    private function addCatToChoices(\Application\Sonata\ClassificationBundle\Entity\Category $catEntity, $choices)
    {
        $choices[$catEntity->getId()] = $catEntity->getName();
        return $choices;
    }
}

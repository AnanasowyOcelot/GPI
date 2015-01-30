<?php


namespace GPI\Sonata\BlockBundle\Block;

use Doctrine\ORM\EntityManager;
use GPI\CoreBundle\Model\Auction\AuctionRepository;
use GPI\Sonata\ClassificationBundle\Entity\CategoryRepository;
use Sonata\BlockBundle\Block\BaseBlockService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\BlockBundle\Block\BlockContextInterface;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;
use Functional as F;

use Symfony\Component\HttpFoundation\RequestStack;

class CategoriesMainBlockService extends BaseBlockService
{
    /**
     * @var CategoryRepository
     */
    private $catRepo;
    /**
     * @var AuctionRepository
     */
    private $auctionRepo;

    /**
     * @param string $name
     * @param EngineInterface $templating
     * @param CategoryRepository $catRepo
     * @param EntityManager $entityManager
     */
    public function __construct($name, EngineInterface $templating, CategoryRepository $catRepo, EntityManager $entityManager)
    {
        $this->name = $name;
        $this->templating = $templating;
        $this->catRepo = $catRepo;
        $this->entityManager = $entityManager;
    }

    public function getName()
    {
        return 'Lista kategorii na stronie głównej';
    }

    public function getDefaultSettings()
    {
        return array();
    }

    public function setDefaultSettings(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'title' => 'Lista kategorii',
            'template' => 'GPISonataBlockBundle:Block:block_core_categories_main.html.twig',
        ));
    }

    public function buildEditForm(FormMapper $formMapper, BlockInterface $block)
    {
        $formMapper->add('settings', 'sonata_type_immutable_array', array(
            'keys' => array(
                array('title', 'text', array('required' => false)),
            )
        ));
    }

    public function validateBlock(ErrorElement $errorElement, BlockInterface $block)
    {
        //        $errorElement
        //            ->with('settings.title')
        //            ->assertNotNull(array())
        //            ->assertNotBlank()
        //            ->assertMaxLength(array('limit' => 50))
        //            ->end();
    }

    /**
     * @var \Symfony\Component\HttpFoundation\Request
     */
    protected $request;

    public function setRequest(RequestStack $request_stack)
    {
        $this->request = $request_stack->getCurrentRequest();
    }

    public function execute(BlockContextInterface $blockContext, Response $response = null)
    {

        $settings = $blockContext->getSettings();
        $categories = $this->catRepo->findByParentId(305);

        $numbersDict = array();

        $categoriesCols = $this->getColumns($categories, 6);

        return $this->renderResponse($blockContext->getTemplate(), array(
            'categoriesCol0' => $categoriesCols[0],
            'categoriesCol1' => $categoriesCols[1],
            'categoriesCol2' => $categoriesCols[2],
            'categoriesCol3' => $categoriesCols[3],
            'categoriesCol4' => $categoriesCols[4],
            'categoriesCol5' => $categoriesCols[5],
            'numbersDict' => $numbersDict,
            'block' => $blockContext->getBlock(),
            'settings' => $settings,
        ), $response);
    }

    private function getColumns($collection, $numCols)
    {
        $colSize = ceil(count($collection) / $numCols);
        $cols = [];
        for($i = 0; $i < $numCols; $i ++) {
            $cols[$i] = array_slice(
                $collection,
                $i * $colSize,
                $colSize
            );
        }
        return $cols;
    }
}
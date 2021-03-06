<?php


namespace GPI\Sonata\BlockBundle\Block;

use Application\Sonata\ClassificationBundle\Entity\Category;
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
        foreach ($categories as $category) {
            $numbersDict[$category->getId()] = $this->getNumberOfElementsInCategory($category);
        }

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
        for ($i = 0; $i < $numCols; $i++) {
            $cols[$i] = array_slice(
                $collection,
                $i * $colSize,
                $colSize
            );
        }
        return $cols;
    }

    private function getNumberOfElementsInCategory(Category $category)
    {

        $categoryIds = $this->getCategoryAndSubcategoriesIds($category);

        $sql = "SELECT COUNT(DISTINCT auction.id)
             FROM auction
             LEFT JOIN auction_category ac ON auction.id = ac.auction_id
             WHERE
                auction.is_partially_active = 1
                AND auction.end_time > now()
                AND ac.category_id IN (?)";
        $stmt = $this->entityManager->getConnection()->executeQuery($sql, array($categoryIds), array(\Doctrine\DBAL\Connection::PARAM_INT_ARRAY));

        $result = $stmt->fetchColumn();

        return $result;
    }

    private function getCategoryAndSubcategoriesIds($category)
    {
        $sql = "SELECT cc.id FROM classification__category cc
                WHERE cc.id = :id
                OR cc.parent_id = :id";
        $stmt = $this->entityManager->getConnection()->prepare($sql);
        $stmt->bindValue('id', $category->getId());
        //        $stmt->bindValue('id', 306);
        $stmt->execute();
        $results = $stmt->fetchAll();
        $resultsArr = array_map(function ($row) {
            return $row['id'];
        }, $results);

        return $resultsArr;
    }
}
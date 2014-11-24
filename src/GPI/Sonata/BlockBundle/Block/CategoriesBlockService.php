<?php


namespace GPI\Sonata\BlockBundle\Block;


use Doctrine\ORM\EntityManager;
use GPI\OfferBundle\Entity\OfferRepository;
use GPI\Sonata\ClassificationBundle\Entity\CategoryRepository;
use Knp\Bundle\PaginatorBundle\Definition\PaginatorAwareInterface;
use Knp\Component\Pager\Paginator;
use Sonata\BlockBundle\Block\BaseBlockService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\BlockBundle\Block\BlockContextInterface;

use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

use Symfony\Component\HttpFoundation\RequestStack;

class CategoriesBlockService extends BaseBlockService
{


    /**
     * @var CategoryRepository
     */
    private $catRepo;

    /**
     * @param string $name
     * @param EngineInterface $templating
     * @param CategoryRepository $catRepo
     */
    public function __construct($name, EngineInterface $templating, CategoryRepository $catRepo)
    {
        $this->name = $name;
        $this->templating = $templating;
        $this->catRepo = $catRepo;
    }

    public function getName()
    {
        return 'Lista Kategorii';
    }

    public function getDefaultSettings()
    {
        return array();
    }

    public function setDefaultSettings(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'title' => 'Lista Kategorii',
            'template' => 'GPISonataBlockBundle:Block:block_core_categories.html.twig',
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



    protected $request;

    public function setRequest(RequestStack $request_stack)
    {
        $this->request = $request_stack->getCurrentRequest();
    }

    public function execute(BlockContextInterface $blockContext, Response $response = null)
    {

        $settings = $blockContext->getSettings();


        $categories = $this->catRepo->offerCategoryTree();


        return $this->renderResponse($blockContext->getTemplate(), array(
            'categories' => $categories,
            'block' => $blockContext->getBlock(),
            'settings' => $settings
        ), $response);
    }

}
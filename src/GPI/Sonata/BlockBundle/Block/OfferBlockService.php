<?php


namespace GPI\Sonata\BlockBundle\Block;


use Doctrine\ORM\EntityManager;
use GPI\OfferBundle\Entity\OfferRepository;
use Knp\Bundle\PaginatorBundle\Definition\PaginatorAwareInterface;
use Knp\Component\Pager\Paginator;
use Sonata\BlockBundle\Block\BaseBlockService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use GPI\Sonata\ClassificationBundle\Entity\CategoryRepository;

use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\BlockBundle\Block\BlockContextInterface;

use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

use Symfony\Component\HttpFoundation\RequestStack;

class OfferBlockService extends BaseBlockService implements PaginatorAwareInterface
{

    /**
     * @var CategoryRepository
     */
    private $catRepo;


    private $or;
    /**
     * @var $paginator \Knp\Component\Pager\Paginator
     */
    private $paginator;

    /**
     * @var \Doctrine\ORM\EntityManager
     */
    private $em;

    /**
     * @param string $name
     * @param EngineInterface $templating
     * @param OfferRepository $or
     * @param EntityManager $em
     * @param CategoryRepository $catRepo
     */
    public function __construct($name, EngineInterface $templating, OfferRepository $or, EntityManager $em, CategoryRepository $catRepo)
    {
        $this->name = $name;
        $this->templating = $templating;
        $this->or = $or;
        $this->em = $em;
        $this->catRepo = $catRepo;

    }

    public function getName()
    {
        return 'Lista Aukcji';
    }

    public function getDefaultSettings()
    {
        return array();
    }

    public function setDefaultSettings(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'title' => 'Lista Aukcji',
            'template' => 'GPISonataBlockBundle:Block:block_core_offer.html.twig',
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
     * @return array
     */
    private function getOffers()
    {
        $offers = $this->or->findAll();
        return $offers;
    }

    private function getOffersBySlug($slug)
    {
        $category = $this->catRepo->findBy(array('slug'=>$slug));
        $offers = $this->or->findBy(array('category'=>$category));
        return $offers;
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

        $slug = $this->request->get('slug');

        if ($slug === null) {
            $offers = $this->getOffers();
        } else {
            $offers = $this->getOffersBySlug($slug);
        }

        $settings = $blockContext->getSettings();

        $pagination = $this->paginator->paginate(
            $offers,
            $this->request->query->get('page', 1),
            5
        );


        return $this->renderResponse($blockContext->getTemplate(), array(
            'pagination' => $pagination,
            'block' => $blockContext->getBlock(),
            'settings' => $settings
        ), $response);
    }

    /**
     * Sets the KnpPaginator instance.
     *
     * @param Paginator $paginator
     *
     * @return mixed
     */
    public function setPaginator(Paginator $paginator)
    {
        $this->paginator = $paginator;
    }
}
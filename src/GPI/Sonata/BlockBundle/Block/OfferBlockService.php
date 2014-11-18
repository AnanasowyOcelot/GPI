<?php


namespace GPI\Sonata\BlockBundle\Block;

use Doctrine\ORM\EntityManager;
use GPI\OfferBundle\Entity\Offer;
use GPI\OfferBundle\Entity\OfferRepository;
use Sonata\BlockBundle\Block\BaseBlockService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\BlockBundle\Block\BlockContextInterface;

use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Validator\ErrorElement;
use Symfony\Bundle\FrameworkBundle\Templating\EngineInterface;

class OfferBlockService extends BaseBlockService
{

    private $or;
    /**
     * @param string          $name
     * @param EngineInterface $templating
     * @param OfferRepository $or
     */
    public function __construct($name, EngineInterface $templating, OfferRepository $or)
    {
        $this->name       = $name;
        $this->templating = $templating;
        $this->or = $or;
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
    private function getOffers() {
        $offers = $this->or->findAll();
        return $offers;
    }

    public function execute(BlockContextInterface $blockContext, Response $response = null)
    {
        $settings = $blockContext->getSettings();

        return $this->renderResponse($blockContext->getTemplate(), array(
            'offers' => $this->getOffers(),
            'block' => $blockContext->getBlock(),
            'settings' => $settings
        ), $response);
    }

} 
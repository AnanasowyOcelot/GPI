<?php


namespace GPI\Sonata\BlockBundle\Block;

use Sonata\BlockBundle\Block\BaseBlockService;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\BlockBundle\Block\BlockContextInterface;

use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Validator\ErrorElement;

class OfferBlockService extends BaseBlockService
{

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

    public function execute(BlockContextInterface $blockContext, Response $response = null)
    {
        $settings = $blockContext->getSettings();

        return $this->renderResponse($blockContext->getTemplate(), array(
            'offers' => "PACAK!!!!",
            'block' => $blockContext->getBlock(),
            'settings' => $settings
        ), $response);
    }

} 
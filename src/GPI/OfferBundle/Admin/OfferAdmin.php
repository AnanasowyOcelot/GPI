<?php

namespace GPI\OfferBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Show\ShowMapper;
use Knp\Menu\ItemInterface as MenuItemInterface;
use Sonata\AdminBundle\Admin\AdminInterface;

class OfferAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('createdBy', null, array('label' => "Dodano przez"))
            ->add('content', null, array('label' => "Treść"))
            ->add('auction', null, array('label' => "Aukcja"))
            ->add('price', null, array('label' => "Cena"))
            ->add('isCanceled', null, array('label' => "Skasowane"))
            ->add('isDeactivated', null, array('label' => "Nieaktywne"));
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('createdBy', null, array('label' => "Dodano przez", "sortable" => false))
            ->add('content', null, array('label' => "Treść", "sortable" => false))
            ->add('auction', null, array('label' => "Aukcja", "sortable" => false))
            ->add('price', null, array('label' => "Cena"))
            ->add('isCanceled', null, array('label' => "Skasowane"))
            ->add('isNotDeactivated', 'boolean', array('label' => "Włączona"))
            ->add(
                '_action',
                'actions',
                array(
                    'actions' => array(
                        'show' => array(),
                        'Wyłącz' => array(
                            'template' => 'GPIOfferBundle:Admin:list__action_deactivate.html.twig'
                        )
                    ),
                    'label' => "Opcje"
                )
            );
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('createdBy', null, array('label' => "Dodano przez"))
            ->add('content', null, array('label' => "Treść"))
            ->add('auction', 'entity',
                array('class' => 'GPI\AuctionBundle\Entity\Auction',
                    'property' => 'name'))
            ->add('price', null, array('label' => "Cena"))
            ->add('actualPrice', null, array('label' => "Cena aktualna"))
            ->add('bidPercent', null, array('label' => "Procent przebicia oferty"))
            ->add('isCanceled', null, array('label' => "Skasowane"))
            ->add('isNotDeactivated', 'boolean', array('label' => "Włączona"))
            ->add('disableReason', null, array('label' => "Powody wyłączenia"))
            ->add('documents', null, array(
                    'label' => "Pliki",
                )
            );
    }

    protected function configureSideMenu(MenuItemInterface $menu, $action, AdminInterface $childAdmin = null)
    {
        if (!$childAdmin && !in_array($action, array('edit'))) {
            return;
        }

        $admin = $this->isChild() ? $this->getParent() : $this;

        $id = $admin->getRequest()->get('id');

        $menu->addChild(
            $this->trans('Edycja', array(), 'SonataOfferBundle'),
            array('uri' => $admin->generateUrl('edit', array('id' => $id)))
        );
    }

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->add('deactivate', $this->getRouterIdParameter() . '/deactivate');
        $collection->add('activate', $this->getRouterIdParameter() . '/activate');
    }
}

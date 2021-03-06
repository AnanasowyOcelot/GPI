<?php

namespace GPI\SiteBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Knp\Menu\ItemInterface as MenuItemInterface;
use Sonata\AdminBundle\Admin\AdminInterface;
use Sonata\AdminBundle\Route\RouteCollection;

class SiteAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('name', null, array('label' => "Tytuł"))
            ->add('content', null, array('label' => "Treść"));
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('name', null, array('label' => "Tytuł"))
            ->add(
                '_action',
                'actions',
                array(
                    'actions' => array(
                        'show' => array(),
                        'edit' => array(),
                    ),
                    'label' => "Opcje"
                )
            );
    }

    protected function configureRoutes(RouteCollection $collection)
    {
        // to remove a single route
        $collection->remove('create');
        // OR remove all route except named ones
//        $collection->clearExcept(array('list', 'show'));
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name', null, array('label' => "Tytuł"))
            ->add('content', 'textarea', array('label' => "Treść", 'attr' => array('class' => 'ckeditor'))
            );
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('name', null, array('label' => "Tytuł"))
            ->add('content', 'textarea', array('label' => "Treść", 'safe' => true)
            );
    }

    protected function configureSideMenu(MenuItemInterface $menu, $action, AdminInterface $childAdmin = null)
    {
        if (!$childAdmin && !in_array($action, array('edit'))) {
            return;
        }

        $admin = $this->isChild() ? $this->getParent() : $this;

        $id = $admin->getRequest()->get('id');
        //        $auction = $this->getObject($id);

        $menu->addChild(
            $this->trans('Edycja', array(), 'SonataAuctionBundle'),
            array('uri' => $admin->generateUrl('edit', array('id' => $id)))
        );
    }


}

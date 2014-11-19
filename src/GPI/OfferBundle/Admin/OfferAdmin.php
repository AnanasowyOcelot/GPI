<?php

namespace GPI\OfferBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
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
            ->add('name')
            ->add('content')
            ->add('category')
        ;
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('name')
            ->add('category')
            ->add('contentShort')
//            ->add('numFiles')
            ->add('_action', 'actions', array(
                'actions' => array(
                    'show' => array(),
                    'edit' => array(),
                    'delete' => array(),
                )
            ))
        ;
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('name')
            ->add('content', 'textarea', array(
                'attr' => array('class' => 'ckeditor')
            ))
            ->add('category', 'sonata_type_model_list', array(), array())
            ->add('webPath', 'url', array(
                'read_only'=>true
            ))
            ->add('file', 'file');
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('name')
            ->add('content')
            ->add('category', 'sonata_type_model_list', array(), array())
            ->add('webPath', 'url');
    }

    protected function configureSideMenu(MenuItemInterface $menu, $action, AdminInterface $childAdmin = null)
    {
        if (!$childAdmin && !in_array($action, array('edit'))) {
            return;
        }

        $admin = $this->isChild() ? $this->getParent() : $this;

        $id      = $admin->getRequest()->get('id');
        $offer = $this->getObject($id);

        $menu->addChild(
            $this->trans('Edycja', array(), 'SonataOfferBundle'),
            array('uri' => $admin->generateUrl('edit', array('id' => $id)))
        );

//        $menu->addChild(
//            $this->trans('offer.sidemenu.view_categories', array(), 'SonataOfferBundle'),
//            array('uri' => $admin->generateUrl('gpi_offer.admin.offer.category.list', array('id' => $id)))
//        );

//        $menu->addChild(
//            $this->trans('product.sidemenu.view_collections', array(), 'SonataProductBundle'),
//            array('uri' => $admin->generateUrl('sonata.product.admin.product.collection.list', array('id' => $id)))
//        );
//
//        $menu->addChild(
//            $this->trans('product.sidemenu.view_deliveries', array(), 'SonataProductBundle'),
//            array('uri' => $admin->generateUrl('sonata.product.admin.delivery.list', array('id' => $id)))
//        );
//
//        if (!$offer->isVariation() && $this->getCode() == 'sonata.product.admin.product') {
//            $menu->addChild(
//                $this->trans('product.sidemenu.view_variations'),
//                array('uri' => $admin->generateUrl('sonata.product.admin.product.variation.list', array('id' => $id)))
//            );
//
//        }
    }
}

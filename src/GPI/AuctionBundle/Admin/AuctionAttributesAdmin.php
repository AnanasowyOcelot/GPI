<?php

namespace GPI\AuctionBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Knp\Menu\ItemInterface as MenuItemInterface;
use Sonata\AdminBundle\Admin\AdminInterface;

class AuctionAttributesAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('auctionAttributes', null, array('label' => "Atrybuty"))
            ->add('category', null, array('label' => "Kategoria"));
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('auctionAttributes', null, array('label' => "Atrybuty"))
            ->add('category', null, array('label' => "Kategoria"))
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

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        $formMapper
            ->add('auctionAttributes', 'sonata_type_collection', array(
                    'label' => "Atrybuty",
                ),
                array(
                    'edit' => 'inline',
                    'inline' => 'table',
                    'sortable'  => 'id'
                )
            )
            ->add('category', null, array('label' => "Kategoria"));
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('auctionAttributes', null, array('label' => "Atrybuty"))
            ->add('category', null, array('label' => "Kategoria"));
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

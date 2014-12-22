<?php

namespace GPI\DocumentBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Knp\Menu\ItemInterface as MenuItemInterface;
use Sonata\AdminBundle\Admin\AdminInterface;

class DocumentAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('description', null, array('label' => 'Opis'))
            ->add('createdBy', null, array('label' => 'Dodano przez'));
    }

    /**
     * @param ListMapper $listMapper
     */
    protected function configureListFields(ListMapper $listMapper)
    {
        $listMapper
            ->add('id')
            ->add('description', null, array('label' => 'Opis'))
            ->add('path', null, array('label' => 'Nazwa pliku'))
            ->add('createdBy', null, array('label' => 'Dodano przez'))
            ->add(
                '_action',
                'actions',
                array(
                    'actions' => array(
                        'show' => array(),
                        //                        'edit' => array(),
                        //                        'delete' => array(),
                    ),
                    'label' => 'Opcje'
                )
            );
    }

    /**
     * @param FormMapper $formMapper
     */
    protected function configureFormFields(FormMapper $formMapper)
    {
        //        $formMapper
        //            ->add(
        //                'id',
        //                null,
        //                array(
        //                    'read_only' => true
        //                )
        //            )
        //            ->add('description', 'textarea')
        //            ->add(
        //                'WebPath',
        //                'textarea',
        //                array(
        //                    'read_only' => true
        //                )
        //            )
        //            ->add(
        //                'createdBy',
        //                null,
        //                array(
        //                    'read_only' => true,
        //                    'disabled' => true,
        //                )
        //            );
    }

    /**
     * @param ShowMapper $showMapper
     */
    protected function configureShowFields(ShowMapper $showMapper)
    {
        $showMapper
            ->add('id')
            ->add('description', null, array('label' => 'Opis'))
            ->add('path', null, array('label' => 'Nazwa pliku'))
            ->add('createdBy', null, array('label' => 'Dodano przez'))
            ->add('Podglad', null, array(
                'template' => 'GPIAuctionBundle:Admin:image_preview.html.twig',
                'label' => 'Podgląd'
            ));
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

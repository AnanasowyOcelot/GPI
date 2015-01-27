<?php

namespace GPI\AuctionBundle\Admin;

use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Route\RouteCollection;
use Sonata\AdminBundle\Show\ShowMapper;
use Knp\Menu\ItemInterface as MenuItemInterface;
use Sonata\AdminBundle\Admin\AdminInterface;

class AuctionAdmin extends Admin
{
    /**
     * @param DatagridMapper $datagridMapper
     */
    protected function configureDatagridFilters(DatagridMapper $datagridMapper)
    {
        $datagridMapper
            ->add('id')
            ->add('name', null, array('label' => "Tytuł"))
            ->add('content', null, array('label' => "Treść"))
            ->add('categories', null, array('label' => "Kategorie")) //TODO: to mogłoby być drzeffem
            ->add('createdBy', null, array('label' => "Dodano przez"))
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
            ->add('name', null, array('label' => "Tytuł"))
            ->add('contentShort', null, array('label' => "Treść"))
            ->add('categories', null, array('label' => "Kategorie"))
            ->add('startTime', null, array('label' => "Data wystawienia"))
            ->add('endTime', null, array('label' => "Data zakończenia"))
            ->add('isCanceled', 'boolean', array('label' => "Usunięty przez użytkownika", "sortable" => false))
            ->add('isNotDeactivated', 'boolean', array('label' => "Włączona"))
            ->add(
                '_action',
                'actions',
                array(
                    'actions' => array(
                        'show' => array(),
                        'Wyłącz' => array(
                            'template' => 'GPIAuctionBundle:Admin:list__action_deactivate.html.twig'
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
            ->add('name', null, array('label' => "Tytuł"))
            ->add('createdBy', null, array('label' => "Dodano przez"))
            ->add('content', null, array('label' => "Treść"))
            ->add('startTime', null, array('label' => "Data wystawienia"))
            ->add('endTime', null, array('label' => "Data zakończenia"))
            ->add('maxPrice', null, array('label' => "Cena maksymalna"))
            ->add('actualPrice', null, array('label' => "Aktualnie oferowana cena"))
            ->add('maxRealizationDate', null, array('label' => "Maksymalna data realizacji"))
            ->add('categories', null, array('label' => "Kategorie"))
            ->add('comments', null, array('label' => "Uwagi"))
            ->add('disableReason', null, array('label' => "Powody wyłączenia"))
            ->add('documents', null, array(
                    'label' => "Pliki",
                )
            )->add(
                'attributeValues',
                null,
                array(
                    'template' => 'GPIAuctionBundle:Admin:auction_attributes.html.twig',
//                    'by_reference' => false,
                    'label' => "Dodatkowe pola"
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
        //        $auction = $this->getObject($id);

        $menu->addChild(
            $this->trans('Edycja', array(), 'SonataAuctionBundle'),
            array('uri' => $admin->generateUrl('edit', array('id' => $id)))
        );
    }

    protected function configureRoutes(RouteCollection $collection)
    {
        $collection->add('deactivate', $this->getRouterIdParameter().'/deactivate');
        $collection->add('activate', $this->getRouterIdParameter().'/activate');
    }
}

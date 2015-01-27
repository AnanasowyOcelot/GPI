<?php

namespace GPI\AuctionBundle\Admin;

use \Application\Sonata\ClassificationBundle\Entity\Category as Category;
use GPI\CoreBundle\Model\Auction\AuctionAttributesGroup;
use Sonata\AdminBundle\Admin\Admin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Knp\Menu\ItemInterface as MenuItemInterface;
use Sonata\AdminBundle\Admin\AdminInterface;
use Functional as F;

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
        $categories = $this->getCatRepo()->findAll();
        $auctionAttrGroups = $this->getAuctionAttrGroupRepo()->findAll();
        $subjectCategoryId = $this->getSubject()->getCategory()->getId();

        $usedCatIds = F\map($auctionAttrGroups, function (AuctionAttributesGroup $aag) {
            return $aag->getCategory()->getId();
        });

        $forbiddenCatIds = F\filter($usedCatIds, function ($catId) use ($subjectCategoryId) {
            return $catId !== $subjectCategoryId;
        });

        $allowedCategories = F\filter($categories, function (Category $c) use ($forbiddenCatIds) {
            return !in_array($c->getId(), $forbiddenCatIds);
        });

        $formMapper
            ->add('auctionAttributes', 'sonata_type_collection', array(
                    'label' => "Atrybuty",
                ),
                array(
                    'edit' => 'inline',
                    'inline' => 'table',
                    'sortable' => 'id'
                )
            )
            ->add('category', null, array(
                'label' => "Kategoria",
                'choices' => $allowedCategories
            ));
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

    /**
     * @return \GPI\Sonata\ClassificationBundle\Entity\CategoryRepository
     */
    private function getCatRepo()
    {
        /** @var \GPI\Sonata\ClassificationBundle\Entity\CategoryRepository $catRepo */
        $catRepo = $this->getConfigurationPool()->getContainer()->get('gpi_sonata.category_repository');
        return $catRepo;
    }

    /**
     * @return \Doctrine\Common\Persistence\ObjectRepository
     */
    private function getAuctionAttrGroupRepo()
    {
        /** @var \Doctrine\Common\Persistence\ObjectRepository $auctionAttrGroupRepo */
        $auctionAttrGroupRepo = $this->getConfigurationPool()->getContainer()->get('doctrine.orm.entity_manager')->getRepository('GPIAuctionBundle:AuctionAttributesGroup');
        return $auctionAttrGroupRepo;
    }
}

<?php


namespace GPI\OfferBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

use Sonata\DoctrineORMAdminBundle\Datagrid\Pager;

class CategoryController extends Controller
{
    /**
     * @param null $category
     * @param int  $depth
     * @param int  $deep
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\Response
     */
    public function listSideMenuCategoriesAction($category = null, $depth = 1, $deep = 0)
    {
        $category = $category ?: $this->get('sonata.classification.manager.category')->getRootCategory();


        return $this->render('SonataProductBundle:Category:side_menu_category.html.twig', array(
          'root_category' => $category,
          'depth'         => $depth,
          'deep'          => $deep + 1
        ));
    }

}

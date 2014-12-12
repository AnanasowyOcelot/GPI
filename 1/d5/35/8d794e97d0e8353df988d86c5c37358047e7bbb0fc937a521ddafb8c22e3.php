<?php

/* SonataProductBundle:Category:side_menu_category.html.twig */
class __TwigTemplate_d5358d794e97d0e8353df988d86c5c37358047e7bbb0fc937a521ddafb8c22e3 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
<ul>
    ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["root_category"]) ? $context["root_category"] : $this->getContext($context, "root_category")), "getChildren", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 14
            echo "        <li>
            <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_catalog_index", array("category_slug" => $this->getAttribute($context["category"], "slug", array()), "category_id" => $this->getAttribute($context["category"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>

            ";
            // line 17
            if (($this->getAttribute($context["category"], "hasChildren", array()) && ((isset($context["deep"]) ? $context["deep"] : $this->getContext($context, "deep")) < (isset($context["depth"]) ? $context["depth"] : $this->getContext($context, "depth"))))) {
                // line 18
                echo "
                ";
                // line 19
                echo $this->env->getExtension('actions')->renderUri($this->env->getExtension('sonata_page')->controller("SonataProductBundle:Category:listSideMenuCategories", array("category" => $context["category"], "deep" => (isset($context["deep"]) ? $context["deep"] : $this->getContext($context, "deep")), "depth" => (isset($context["depth"]) ? $context["depth"] : $this->getContext($context, "depth")))), array());
                // line 24
                echo "
            ";
            }
            // line 26
            echo "
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 29
        echo "</ul>
";
    }

    public function getTemplateName()
    {
        return "SonataProductBundle:Category:side_menu_category.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  56 => 29,  48 => 26,  44 => 24,  42 => 19,  39 => 18,  37 => 17,  30 => 15,  27 => 14,  23 => 13,  19 => 11,);
    }
}

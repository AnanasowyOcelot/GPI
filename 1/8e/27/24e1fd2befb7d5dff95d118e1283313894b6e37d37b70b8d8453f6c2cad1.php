<?php

/* SonataBasketBundle:Basket:header_preview.html.twig */
class __TwigTemplate_8e2724e1fd2befb7d5dff95d118e1283313894b6e37d37b70b8d8453f6c2cad1 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
<div>
    ";
        // line 13
        if ($this->getAttribute((isset($context["basket"]) ? $context["basket"] : $this->getContext($context, "basket")), "hasBasketElements", array())) {
            // line 14
            echo "        ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("message_basket_elements_preview", array("price" => $this->env->getExtension('sonata_intl_number')->formatCurrency($this->getAttribute((isset($context["basket"]) ? $context["basket"] : $this->getContext($context, "basket")), "getTotal", array(0 => true), "method"), $this->getAttribute($this->getAttribute((isset($context["basket"]) ? $context["basket"] : $this->getContext($context, "basket")), "currency", array()), "label", array()), array(), array(), $this->getAttribute((isset($context["basket"]) ? $context["basket"] : $this->getContext($context, "basket")), "locale", array())), "count_item" => $this->getAttribute((isset($context["basket"]) ? $context["basket"] : $this->getContext($context, "basket")), "countBasketElements", array())), "SonataBasketBundle");
            // line 15
            echo "        <a href=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_basket_index");
            echo "\">";
            echo $this->env->getExtension('translator')->getTranslator()->trans("view_basket", array(), "SonataBasketBundle");
            echo "</a>
    ";
        } else {
            // line 17
            echo "        ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("message_no_basket_elements", array(), "SonataBasketBundle");
            // line 18
            echo "    ";
        }
        // line 19
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "SonataBasketBundle:Basket:header_preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  42 => 19,  39 => 18,  36 => 17,  28 => 15,  25 => 14,  23 => 13,  19 => 11,);
    }
}

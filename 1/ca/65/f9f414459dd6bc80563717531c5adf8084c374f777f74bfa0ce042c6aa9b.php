<?php

/* SonataClassificationBundle:CategoryAdmin:list_tab_menu.html.twig */
class __TwigTemplate_ca65f9f414459dd6bc80563717531c5adf8084c374f777f74bfa0ce042c6aa9b extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        // line 1
        echo $this->env->getExtension('knp_menu')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active"), "list");
        echo "
<p>
    ";
        // line 4
        echo "        ";
        // line 5
        echo "            ";
        // line 6
        echo "        ";
        // line 7
        echo "        ";
        // line 8
        echo "            ";
        // line 9
        echo "        ";
        // line 10
        echo "    ";
        // line 11
        echo "</p>";
    }

    public function getTemplateName()
    {
        return "SonataClassificationBundle:CategoryAdmin:list_tab_menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 11,  36 => 10,  34 => 9,  32 => 8,  30 => 7,  28 => 6,  26 => 5,  24 => 4,  19 => 1,);
    }
}

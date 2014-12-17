<?php

/* GPIAuctionBundle:Admin:list__action_deactivate.html.twig */
class __TwigTemplate_493244ae49db32375e049b39be20772cef484e2790dc8a837fb4373e1c1c2e80 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        if ($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "isDeactivated", array(), "method")) {
            // line 2
            echo "    <a class=\"btn btn-sm btn-default view_link\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "activate", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">Włącz</a>
";
        } else {
            // line 4
            echo "    <a class=\"btn btn-sm btn-default view_link\" href=\"";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "deactivate", 1 => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object"))), "method"), "html", null, true);
            echo "\">Wyłącz</a>
";
        }
    }

    public function getTemplateName()
    {
        return "GPIAuctionBundle:Admin:list__action_deactivate.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  21 => 2,  19 => 1,);
    }
}

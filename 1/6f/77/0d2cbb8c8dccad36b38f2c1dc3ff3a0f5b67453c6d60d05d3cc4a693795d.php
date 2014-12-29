<?php

/* SpyTimelineBundle:Timeline:default.html.twig */
class __TwigTemplate_6f770d2cbb8c8dccad36b38f2c1dc3ff3a0f5b67453c6d60d05d3cc4a693795d extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        echo $this->env->getExtension('timeline_render')->renderActionComponent((isset($context["timeline"]) ? $context["timeline"] : $this->getContext($context, "timeline")), "subject");
        echo "
-
";
        // line 3
        echo $this->env->getExtension('timeline_render')->renderActionComponent((isset($context["timeline"]) ? $context["timeline"] : $this->getContext($context, "timeline")), "verb");
        echo "
";
    }

    public function getTemplateName()
    {
        return "SpyTimelineBundle:Timeline:default.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 3,  19 => 1,);
    }
}

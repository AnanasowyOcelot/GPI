<?php

/* SonataCommentBundle:Block:thread_async.html.twig */
class __TwigTemplate_d4b7ee669d7b49baf2fc604da3e730d009f12daf3e5715a118ecaebfc804c4b6 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        $this->env->loadTemplate("SonataCommentBundle:Thread:async.html.twig")->display(array_merge($context, array("id" => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "id", array()))));
    }

    public function getTemplateName()
    {
        return "SonataCommentBundle:Block:thread_async.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }
}

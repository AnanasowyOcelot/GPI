<?php

/* FOSCommentBundle:Thread:comment_new.html.twig */
class __TwigTemplate_d04b63324c5e007e2a0594feb2e8852fecca0d53b8585a2722e7c85944725825 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
";
        // line 12
        $this->env->loadTemplate("FOSCommentBundle:Thread:comment_new_content.html.twig")->display($context);
    }

    public function getTemplateName()
    {
        return "FOSCommentBundle:Thread:comment_new.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 12,  19 => 11,);
    }
}

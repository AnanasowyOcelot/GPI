<?php

/* SonataDemoBundle:Block:newsletter.html.twig */
class __TwigTemplate_7c4d737ac2b9079ebaef18d9d5cb29826f12e99d3c256b6a25e27e39fc8a7598 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        echo "<div class=\"row\">
    <p>Want to stay in touch with us? Subscribe to our monthly newsletter.</p>

    <form id=\"newsletter-form\" name=\"newsletter-form\" method=\"post\" action=\"";
        // line 4
        echo $this->env->getExtension('routing')->getPath("sonata_demo_newsletter");
        echo "\" data-name=\"sonata-ajax\" data-target=\"newsletter-confirmation\" class=\"form-inline\">
        <div class=\"col-sm-6 col-sm-offset-1\">
            ";
        // line 6
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "email", array()), 'widget', array("horizontal_input_wrapper_class" => "col-lg-12"));
        echo "
        </div>

        <div class=\"col-sm-3\">
            <button class=\"btn btn-default\" type=\"submit\"><i class=\"glyphicon glyphicon-envelope\"></i>&nbsp; Subscribe</button>
        </div>

        ";
        // line 13
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
    </form>
    &nbsp;
</div>
<div id=\"newsletter-confirmation\"></div>
";
    }

    public function getTemplateName()
    {
        return "SonataDemoBundle:Block:newsletter.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 13,  29 => 6,  24 => 4,  19 => 1,);
    }
}

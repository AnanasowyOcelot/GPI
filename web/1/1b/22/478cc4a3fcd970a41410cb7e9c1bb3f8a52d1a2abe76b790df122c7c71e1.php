<?php

/* GPISiteBundle:Default:site.html.twig */
class __TwigTemplate_1b22478cc4a3fcd970a41410cb7e9c1bb3f8a52d1a2abe76b790df122c7c71e1 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        echo "<div class=\"headline\"><h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "name", array()), "html", null, true);
        echo "</h2></div>
";
        // line 2
        echo $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "content", array());
    }

    public function getTemplateName()
    {
        return "GPISiteBundle:Default:site.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  24 => 2,  19 => 1,);
    }
}

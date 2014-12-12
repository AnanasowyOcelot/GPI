<?php

/* MopaBootstrapBundle::icons.html.twig */
class __TwigTemplate_cc17e727a45ba1d3658da2bf7bb66a44c585e7dce88fcac8490b03e85796f970 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'fontawesome' => array($this, 'block_fontawesome'),
            'glyphicons' => array($this, 'block_glyphicons'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        $this->displayBlock('fontawesome', $context, $blocks);
        // line 8
        echo "
";
        // line 9
        $this->displayBlock('glyphicons', $context, $blocks);
    }

    // line 5
    public function block_fontawesome($context, array $blocks = array())
    {
        // line 6
        echo "<i class=\"icon-";
        echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
        echo (((isset($context["inverted"]) ? $context["inverted"] : $this->getContext($context, "inverted"))) ? (" inverted") : (""));
        echo "\"></i>";
    }

    // line 9
    public function block_glyphicons($context, array $blocks = array())
    {
        // line 10
        echo "<span class=\"glyphicon glyphicon-";
        echo twig_escape_filter($this->env, (isset($context["icon"]) ? $context["icon"] : $this->getContext($context, "icon")), "html", null, true);
        echo "\"";
        if (((array_key_exists("inverted", $context)) ? (_twig_default_filter((isset($context["inverted"]) ? $context["inverted"] : $this->getContext($context, "inverted")), false)) : (false))) {
            echo " style=\"color: white;\"";
        }
        echo "></span>";
    }

    // line 1
    public function geticon($__name__ = null, $__inverted__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "inverted" => $__inverted__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "<span class=\"glyphicon glyphicon-";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
            echo "\"";
            if (((array_key_exists("inverted", $context)) ? (_twig_default_filter((isset($context["inverted"]) ? $context["inverted"] : $this->getContext($context, "inverted")), false)) : (false))) {
                echo " style=\"color: white;\"";
            }
            echo "></span>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "MopaBootstrapBundle::icons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 2,  56 => 1,  46 => 10,  43 => 9,  36 => 6,  33 => 5,  29 => 9,  26 => 8,  24 => 5,  21 => 4,);
    }
}

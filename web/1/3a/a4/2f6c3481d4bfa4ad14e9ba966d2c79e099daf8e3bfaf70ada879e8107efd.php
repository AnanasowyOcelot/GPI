<?php

/* SonataUserBundle:Profile:action.html.twig */
class __TwigTemplate_3aa42f6c3481d4bfa4ad14e9ba966d2c79e099daf8e3bfaf70ada879e8107efd extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_page_breadcrumb' => array($this, 'block_sonata_page_breadcrumb'),
            'sonata_profile_menu' => array($this, 'block_sonata_profile_menu'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        echo "
";
        // line 12
        $this->displayBlock('sonata_page_breadcrumb', $context, $blocks);
        // line 20
        echo "
";
        // line 22
        echo "
<div class=\"sonata-user-show row row-fluid user-profile\">

    <div class=\"span2 col-lg-2\" style=\"padding: 8px 0;\">
        ";
        // line 26
        $this->displayBlock('sonata_profile_menu', $context, $blocks);
        // line 29
        echo "    </div>

    <div class=\"span10 col-lg-10\">
        ";
        // line 32
        $this->env->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig")->display($context);
        // line 33
        echo "
        ";
        // line 34
        $this->displayBlock('sonata_profile_content', $context, $blocks);
        // line 35
        echo "    </div>

</div>
";
    }

    // line 12
    public function block_sonata_page_breadcrumb($context, array $blocks = array())
    {
        // line 13
        echo "    ";
        if ( !array_key_exists("breadcrumb_context", $context)) {
            // line 14
            echo "        ";
            $context["breadcrumb_context"] = "user_index";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    ";
        // line 17
        echo "        ";
        // line 18
        echo "    ";
    }

    // line 26
    public function block_sonata_profile_menu($context, array $blocks = array())
    {
        // line 27
        echo "            ";
        echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => "sonata.user.block.menu"), array("current_uri" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "requestUri", array()))));
        echo "
        ";
    }

    // line 34
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        echo "";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 34,  80 => 27,  77 => 26,  73 => 18,  71 => 17,  69 => 16,  66 => 15,  63 => 14,  60 => 13,  57 => 12,  50 => 35,  48 => 34,  45 => 33,  43 => 32,  38 => 29,  36 => 26,  30 => 22,  27 => 20,  25 => 12,  22 => 11,);
    }
}

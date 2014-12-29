<?php

/* SonataClassificationBundle:CategoryAdmin:list.html.twig */
class __TwigTemplate_833c9b8e44ca493637a56cc798da6c7a6b2d711f4cd57b1c6256e40f313f9fd4 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        try {
            $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(12);

            throw $e;
        }

        $this->blocks = array(
            'tab_menu' => array($this, 'block_tab_menu'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 14
    public function block_tab_menu($context, array $blocks = array())
    {
        // line 15
        echo "    ";
        $this->env->loadTemplate("SonataClassificationBundle:CategoryAdmin:list_tab_menu.html.twig")->display(array("mode" => "list", "action" => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin"))));
    }

    public function getTemplateName()
    {
        return "SonataClassificationBundle:CategoryAdmin:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  39 => 15,  36 => 14,  11 => 12,);
    }
}

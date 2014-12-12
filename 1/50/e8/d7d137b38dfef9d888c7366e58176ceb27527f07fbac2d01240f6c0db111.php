<?php

/* ApplicationSonataProductBundle:Goodie:final_review_basket_element.html.twig */
class __TwigTemplate_50e8d7d137b38dfef9d888c7366e58176ceb27527f07fbac2d01240f6c0db111 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 18
        try {
            $this->parent = $this->env->loadTemplate("SonataProductBundle:Product:final_review_basket_element.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(18);

            throw $e;
        }

        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataProductBundle:Product:final_review_basket_element.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    public function getTemplateName()
    {
        return "ApplicationSonataProductBundle:Goodie:final_review_basket_element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 18,);
    }
}

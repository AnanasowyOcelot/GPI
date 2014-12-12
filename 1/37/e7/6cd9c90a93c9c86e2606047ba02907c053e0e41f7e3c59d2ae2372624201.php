<?php

/* ApplicationSonataProductBundle:Travel:form_basket_element.html.twig */
class __TwigTemplate_37e76cd9c90a93c9c86e2606047ba02907c053e0e41f7e3c59d2ae2372624201 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 19
        try {
            $this->parent = $this->env->loadTemplate("SonataProductBundle:Product:form_basket_element.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(19);

            throw $e;
        }

        $this->blocks = array(
            'product_variations' => array($this, 'block_product_variations'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataProductBundle:Product:form_basket_element.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 21
    public function block_product_variations($context, array $blocks = array())
    {
        // line 22
        echo "    ";
        if ( !$this->getAttribute($this->getAttribute((isset($context["basketElement"]) ? $context["basketElement"] : $this->getContext($context, "basketElement")), "product", array()), "isMaster", array())) {
            // line 23
            echo "        ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("travel.travel_days", array(), "SonataProductBundle"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["basketElement"]) ? $context["basketElement"] : $this->getContext($context, "basketElement")), "product", array()), "travelDays", array()), "html", null, true);
            echo "<br />
        ";
            // line 24
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("travel.travellers", array(), "SonataProductBundle"), "html", null, true);
            echo ": ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["basketElement"]) ? $context["basketElement"] : $this->getContext($context, "basketElement")), "product", array()), "travellers", array()), "html", null, true);
            echo "<br />
        ";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("travel.travel_date", array(), "SonataProductBundle"), "html", null, true);
            echo ": ";
            echo $this->env->getExtension('sonata_intl_datetime')->formatDate($this->getAttribute($this->getAttribute((isset($context["basketElement"]) ? $context["basketElement"] : $this->getContext($context, "basketElement")), "product", array()), "travelDate", array()));
            echo "
    ";
        }
    }

    public function getTemplateName()
    {
        return "ApplicationSonataProductBundle:Travel:form_basket_element.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 25,  49 => 24,  42 => 23,  39 => 22,  36 => 21,  11 => 19,);
    }
}

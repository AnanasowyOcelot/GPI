<?php

/* GPIOfferBundle:Mail:disable_offer.html.twig */
class __TwigTemplate_52d780241b6276747c9a1562701b7db726fef81380680f55e44a9651f80c246a extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        echo "Witaj ";
        echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : $this->getContext($context, "name")), "html", null, true);
        echo "
twoja oferta do aukcji o nazwie \"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["offer_name"]) ? $context["offer_name"] : $this->getContext($context, "offer_name")), "html", null, true);
        echo "\" została wyłączona przez administratora z powodu: ";
        echo twig_escape_filter($this->env, (isset($context["reason"]) ? $context["reason"] : $this->getContext($context, "reason")), "html", null, true);
        echo ".
W razie jakichkolwiek pytań prosimy o kontakt mailowy na adres ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["mailer_user"]) ? $context["mailer_user"] : $this->getContext($context, "mailer_user")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "GPIOfferBundle:Mail:disable_offer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  30 => 3,  24 => 2,  19 => 1,);
    }
}

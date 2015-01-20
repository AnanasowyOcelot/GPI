<?php

/* GPIOfferBundle:Mail:won_offer.html.twig */
class __TwigTemplate_c34f7c572505a49d71c36c64c94832cf8bfc15020b1aaed0d08ffef82e97682d extends Sonata\CacheBundle\Twig\TwigTemplate14
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
aukcja o nazwie \"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["offer_name"]) ? $context["offer_name"] : $this->getContext($context, "offer_name")), "html", null, true);
        echo "\" została zakończona.
Twoja oferta zwyciężyła, skontaktuj się z właścicielem aukcji pod adresem: ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["auction_owner_mail"]) ? $context["auction_owner_mail"] : $this->getContext($context, "auction_owner_mail")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "GPIOfferBundle:Mail:won_offer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  28 => 3,  24 => 2,  19 => 1,);
    }
}

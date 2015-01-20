<?php

/* GPIAuctionBundle:Mail:enable_auction.html.twig */
class __TwigTemplate_9799d07154fb5bc69a07e5ce644fa233a31f9b0b9d5f3b4e10b6c57a9765fc02 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
twoja aukcja o nazwie \"";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["auction_name"]) ? $context["auction_name"] : $this->getContext($context, "auction_name")), "html", null, true);
        echo "\" jest znowu aktywna.
W razie jakichkolwiek pytań prosimy o kontakt mailowy na adres ";
        // line 3
        echo twig_escape_filter($this->env, (isset($context["mailer_user"]) ? $context["mailer_user"] : $this->getContext($context, "mailer_user")), "html", null, true);
    }

    public function getTemplateName()
    {
        return "GPIAuctionBundle:Mail:enable_auction.html.twig";
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

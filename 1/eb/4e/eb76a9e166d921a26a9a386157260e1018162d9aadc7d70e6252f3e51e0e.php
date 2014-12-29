<?php

/* GPIOfferBundle:Offer:cancel.html.twig */
class __TwigTemplate_eb4eeb76a9e166d921a26a9a386157260e1018162d9aadc7d70e6252f3e51e0e extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("SonataUserBundle:Profile:action.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        // line 3
        echo "
    Czy napewno chcesz usunąć ofertę?
    <br/>
    <a style=\"display:inline;\" class=\"btn btn-success\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("gpi_offer_list");
        echo "\">Nie</a>
    <form style=\"display:inline;\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_offer_cancel", array("id" => $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
        <button class=\"btn btn-success\" value=\"pac\">Tak</button>
    </form>


";
    }

    public function getTemplateName()
    {
        return "GPIOfferBundle:Offer:cancel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 7,  44 => 6,  39 => 3,  36 => 2,  11 => 1,);
    }
}

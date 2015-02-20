<?php

/* GPIOfferBundle:Offer:cancel.html.twig */
class __TwigTemplate_73e24686207bf4a426aab3ec0b735cad9314def630c43b5cff28cece9b0f2a97 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
    <div class=\"well\" style=\"text-align: center\">
        Czy napewno chcesz usunąć ofertę?
        <br/>
        <br/>
        <br/>
        <a style=\"display:inline;\" class=\"btn-u btn-u-default\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("gpi_offer_list");
        echo "\">Nie</a>
        <form style=\"display:inline;\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_offer_cancel", array("id" => $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
            <button class=\"btn-u btn-u-red\" style=\"line-height: normal;\" value=\"pac\">Tak</button>
        </form>
    </div>

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
        return array (  51 => 10,  47 => 9,  39 => 3,  36 => 2,  11 => 1,);
    }
}

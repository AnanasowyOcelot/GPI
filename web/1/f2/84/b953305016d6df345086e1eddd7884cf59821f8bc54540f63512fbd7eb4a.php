<?php

/* GPIAuctionBundle:Default:cancel.html.twig */
class __TwigTemplate_f284b953305016d6df345086e1eddd7884cf59821f8bc54540f63512fbd7eb4a extends Sonata\CacheBundle\Twig\TwigTemplate14
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
    Czy napewno chcesz usunąć aukcję <strong>\"";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "name", array(), "method"), "html", null, true);
        echo "\"</strong> ?
    <br/>
    <a style=\"display:inline;\" class=\"btn btn-success\" href=\"";
        // line 6
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Nie</a>
    <form style=\"display:inline;\" action=\"";
        // line 7
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_cancel", array("id" => $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
        <button class=\"btn btn-success\" value=\"pac\">Tak</button>
    </form>


";
    }

    public function getTemplateName()
    {
        return "GPIAuctionBundle:Default:cancel.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 7,  47 => 6,  42 => 4,  39 => 3,  36 => 2,  11 => 1,);
    }
}

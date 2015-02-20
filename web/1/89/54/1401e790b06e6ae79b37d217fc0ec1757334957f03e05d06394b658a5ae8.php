<?php

/* GPIAuctionBundle:Default:cancel.html.twig */
class __TwigTemplate_89541401e790b06e6ae79b37d217fc0ec1757334957f03e05d06394b658a5ae8 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
    Czy napewno chcesz usunąć aukcję <strong>\"";
        // line 5
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "name", array(), "method"), "html", null, true);
        echo "\"</strong> ?
    <br/>
    <br/>
    <br/>
    <a style=\"display:inline;\" class=\"btn-u btn-u-default\" href=\"";
        // line 9
        echo $this->env->getExtension('routing')->getPath("fos_user_profile_show");
        echo "\">Nie</a>
    <form style=\"display:inline;\" action=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_cancel", array("id" => $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "id", array()))), "html", null, true);
        echo "\" method=\"POST\">
        <button class=\"btn-u btn-u-red\" style=\"line-height: normal;\" value=\"pac\">Tak</button>
    </form>
    </div>

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
        return array (  54 => 10,  50 => 9,  43 => 5,  39 => 3,  36 => 2,  11 => 1,);
    }
}

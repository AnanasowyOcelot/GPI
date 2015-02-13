<?php

/* GPIAuctionBundle:AddAuction:finish.html.twig */
class __TwigTemplate_107492c3f1c83680977656085f25eba9e6e89f3c26b68065756122544bdbe5cc extends Sonata\CacheBundle\Twig\TwigTemplate14
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


    <div class=\"tag-box tag-box-v3 form-page\" style=\"overflow: hidden;\">
        <div class=\"well\">
            <span class=\"label rounded label-green\" style=\"display: inline-block; width: 33%; border: 1px solid black\">&nbsp;</span>
            <span class=\"label rounded label-green\" style=\"display: inline-block; width: 33%; border: 1px solid black\">&nbsp;</span>
            <span class=\"label rounded label-green\" style=\"display: inline-block; width: 33%; border: 1px solid black\">&nbsp;</span>
        </div>

        Aukcja o tytule <strong>\"";
        // line 13
        echo twig_escape_filter($this->env, (isset($context["title"]) ? $context["title"] : $this->getContext($context, "title")), "html", null, true);
        echo "\"</strong> została dodana. Możesz ją zobaczyć <a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_details", array("id" => (isset($context["id"]) ? $context["id"] : $this->getContext($context, "id")))), "html", null, true);
        echo "\">tutaj</a>
    </div>


";
    }

    public function getTemplateName()
    {
        return "GPIAuctionBundle:AddAuction:finish.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 13,  39 => 3,  36 => 2,  11 => 1,);
    }
}

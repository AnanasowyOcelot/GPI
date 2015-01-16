<?php

/* GPIAuctionBundle:EditAuction:add_disable_reason.html.twig */
class __TwigTemplate_e04a2e44b1154649eacdea46d978cf55ab4400426cebc0ba867cf460e6e91fdd extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("SonataAdminBundle::standard_layout.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_sonata_page_content($context, array $blocks = array())
    {
        // line 7
        echo "        <div class=\"tag-box tag-box-v3 form-page\" style=\"overflow: hidden;\">
            <div class=\"headline\"><h3>Podaj powód wyłączenia aukcji</h3></div>

            <form method=\"POST\" ";
        // line 10
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo " class=\"sky-form\">
                <fieldset>
                    ";
        // line 12
        echo         $this->env->getExtension('form')->renderer->renderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'form');
        echo "
                </fieldset>
            </form>
        </div>

    ";
    }

    public function getTemplateName()
    {
        return "GPIAuctionBundle:EditAuction:add_disable_reason.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  52 => 12,  47 => 10,  42 => 7,  39 => 6,  35 => 1,  33 => 2,  11 => 1,);
    }
}

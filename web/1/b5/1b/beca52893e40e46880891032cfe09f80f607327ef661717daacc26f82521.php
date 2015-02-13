<?php

/* GPIAuctionBundle:AddAuction:prepareSubcategories.html.twig */
class __TwigTemplate_b51bbeca52893e40e46880891032cfe09f80f607327ef661717daacc26f82521 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        // line 2
        $this->env->getExtension('form')->renderer->setTheme((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), array(0 => "bootstrap_3_horizontal_layout.html.twig"));
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        // line 4
        echo "


    <div class=\"tag-box tag-box-v3 form-page\" style=\"overflow: hidden;\">
        <div class=\"well\">
            <span class=\"label rounded label-green\" style=\"display: inline-block; width: 30%; border: 1px solid black\">&nbsp;</span>
            <span class=\"label rounded label-blue\" style=\"display: inline-block; width: 30%; border: 1px solid black\">&nbsp;</span>
            <span class=\"label rounded label-light\" style=\"display: inline-block; width: 30%; border: 1px solid black\">&nbsp;</span>
        </div>
        <div class=\"headline\"><h3>Wybierz podkategorie dla aukcji</h3></div>

        <form method=\"POST\" ";
        // line 15
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'enctype');
        echo ">
            <fieldset>
                ";
        // line 18
        echo "                ";
        // line 19
        echo "                ";
        // line 20
        echo "                ";
        // line 21
        echo "                ";
        // line 22
        echo "                ";
        // line 23
        echo "                ";
        // line 24
        echo "            </fieldset>
            <hr/>
            <div style=\"display: none;\">
                ";
        // line 27
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($this->getAttribute((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), "categories", array()), 'row');
        echo "
            </div>
            <hr/>
            <fieldset>
                ";
        // line 31
        echo $this->env->getExtension('form')->renderer->searchAndRenderBlock((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")), 'rest');
        echo "
            </fieldset>
        </form>
    </div>


";
    }

    public function getTemplateName()
    {
        return "GPIAuctionBundle:AddAuction:prepareSubcategories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 31,  77 => 27,  72 => 24,  70 => 23,  68 => 22,  66 => 21,  64 => 20,  62 => 19,  60 => 18,  55 => 15,  42 => 4,  39 => 3,  35 => 1,  33 => 2,  11 => 1,);
    }
}

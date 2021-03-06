<?php

/* GPIAuctionBundle:Profile:show.html.twig */
class __TwigTemplate_898935bd8d7209c17599eb4f17e3f365d3419c7083492c78b7ce908fb1286e21 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
    <div class=\"table-responsive\">
        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th class=\"hidden-sm\">Nazwa aukcji</th>
                <th>Opis</th>
                <th>Opcje</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 14
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["auctions"]) ? $context["auctions"] : $this->getContext($context, "auctions")));
        foreach ($context['_seq'] as $context["_key"] => $context["auction"]) {
            // line 15
            echo "                <tr>
                    <td>
                        <img class=\"rounded-x\" src=\"";
            // line 17
            echo twig_escape_filter($this->env, strtr($this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('liip_imagine')->filter($this->getAttribute($context["auction"], "getMainPhoto", array(), "method"), "list_thumb")), array("media" => "web/media")), "html", null, true);
            echo "\" alt=\"\">
                    </td>
                    <td>
                        <h3 class=\"auction-name\">";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["auction"], "name", array()), "html", null, true);
            echo "</h3>

                        <p>";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["auction"], "getContentShort", array(), "method"), "html", null, true);
            echo "</p>
                        <p>Liczba ofert: ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["auction"], "getNumberOfOffers", array(), "method"), "html", null, true);
            echo "</p>
                        <small class=\"hex\">Zakończenie ";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["auction"], "getEndTime", array(), "method"), "format", array(0 => "Y-m-d H:i:s"), "method"), "html", null, true);
            echo "</small>
                    </td>
                    <td>
                        <p><a class=\"btn-u btn-u-blue\" href=\"";
            // line 27
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_details", array("id" => $this->getAttribute($context["auction"], "id", array()))), "html", null, true);
            echo "\">Szczegóły</a></p>
                        ";
            // line 28
            if ($this->getAttribute($context["auction"], "isActive", array(), "method")) {
                // line 29
                echo "                            <p><a class=\"btn-u btn-u-blue\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_edit", array("id" => $this->getAttribute($context["auction"], "id", array()))), "html", null, true);
                echo "\">Edytuj</a></p>

                            <p><a class=\"btn-u btn-u-red\" href=\"";
                // line 31
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_cancel", array("id" => $this->getAttribute($context["auction"], "id", array()))), "html", null, true);
                echo "\">Anuluj</a></p>
                        ";
            }
            // line 33
            echo "                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            </tbody>
        </table>
    </div>
";
    }

    public function getTemplateName()
    {
        return "GPIAuctionBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  110 => 36,  102 => 33,  97 => 31,  91 => 29,  89 => 28,  85 => 27,  79 => 24,  75 => 23,  71 => 22,  66 => 20,  60 => 17,  56 => 15,  52 => 14,  39 => 3,  36 => 2,  11 => 1,);
    }
}

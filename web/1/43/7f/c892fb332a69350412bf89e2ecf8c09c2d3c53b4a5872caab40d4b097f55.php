<?php

/* GPIAuctionBundle:Profile:show.html.twig */
class __TwigTemplate_437fc892fb332a69350412bf89e2ecf8c09c2d3c53b4a5872caab40d4b097f55 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
                <th>Opcje</th>
            </tr>
            </thead>
            <tbody>
            ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["auctions"]) ? $context["auctions"] : $this->getContext($context, "auctions")));
        foreach ($context['_seq'] as $context["_key"] => $context["auction"]) {
            // line 14
            echo "                <tr>
                    <td>
                        <img class=\"rounded-x\" src=\"";
            // line 16
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["auction"], "getMainPhoto", array(), "method")), "html", null, true);
            echo "\" alt=\"\">
                    </td>
                    <td>
                        <h3 class=\"auction-name\">";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["auction"], "name", array()), "html", null, true);
            echo "</h3>

                        <p>";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["auction"], "getContentShort", array(), "method"), "html", null, true);
            echo "</p>
                        <p>Liczba ofert: ";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["auction"], "getNumberOfOffers", array(), "method"), "html", null, true);
            echo "</p>
                        <small class=\"hex\">Zakończenie ";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["auction"], "getEndTime", array(), "method"), "format", array(0 => "Y-m-d H:i:s"), "method"), "html", null, true);
            echo "</small>
                    </td>
                    <td>
                        <p><a class=\"btn-u btn-u-blue\" href=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_details", array("id" => $this->getAttribute($context["auction"], "id", array()))), "html", null, true);
            echo "\">Szczegóły</a></p>
                        ";
            // line 27
            if ($this->getAttribute($context["auction"], "isActive", array(), "method")) {
                // line 28
                echo "                            <p><a class=\"btn-u btn-u-blue\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_edit", array("id" => $this->getAttribute($context["auction"], "id", array()))), "html", null, true);
                echo "\">Edytuj</a></p>

                            <p><a class=\"btn-u btn-u-red\" href=\"";
                // line 30
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_cancel", array("id" => $this->getAttribute($context["auction"], "id", array()))), "html", null, true);
                echo "\">Anuluj</a></p>
                        ";
            }
            // line 32
            echo "                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
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
        return array (  109 => 35,  101 => 32,  96 => 30,  90 => 28,  88 => 27,  84 => 26,  78 => 23,  74 => 22,  70 => 21,  65 => 19,  59 => 16,  55 => 14,  51 => 13,  39 => 3,  36 => 2,  11 => 1,);
    }
}

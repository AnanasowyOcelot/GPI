<?php

/* GPISonataBlockBundle:Block:block_core_auction.html.twig */
class __TwigTemplate_e51024d9545cb8c768d66623ba9114837255aff87b015f7a9b6beaf4582a808a extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('block', $context, $blocks);
        // line 63
        echo "



";
    }

    // line 1
    public function block_block($context, array $blocks = array())
    {
        // line 2
        echo "    <div class=\"headline\"><h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()), "html", null, true);
        echo "</h2></div>

    <form>
        <input type=\"text\" name=\"name\" value=\"";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["searchParam"]) ? $context["searchParam"] : $this->getContext($context, "searchParam")), "html", null, true);
        echo "\"/>
        <input type=\"submit\" value=\"Szukaj\"/>
    </form>

    <div class=\"block-newsletter col-sm-12 well\">
        <div class=\"count\">
            Całkowita ilość aukcji: ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "
        </div>
        ";
        // line 14
        echo "        ";
        // line 15
        echo "        ";
        // line 16
        echo "    </div>

    ";
        // line 19
        echo "    <!--Table Search v2-->
    <div class=\"table-search-v2 margin-bottom-20\">
        <div class=\"table-responsive\">
            <table class=\"table table-hover\">
                <thead>
                <tr>
                    <th></th>
                    <th class=\"hidden-sm\">Oferta</th>
                    <th>Czas zakończenia</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 31
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["auction"]) {
            // line 32
            echo "
                    <tr>
                        <td>
                            <img class=\"rounded-x\"
                                 src=\"";
            // line 36
            echo twig_escape_filter($this->env, strtr($this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('liip_imagine')->filter($this->getAttribute($context["auction"], "getMainPhoto", array(), "method"), "list_thumb")), array("media" => "web/media")), "html", null, true);
            echo "\" alt=\"\">
                        </td>
                        <td class=\"td-width\">
                            <h3>
                                <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_details", array("id" => $this->getAttribute($context["auction"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["auction"], "name", array()), "html", null, true);
            echo "</a>
                            </h3>

                            <p>";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["auction"], "getContentShort", array(), "method"), "html", null, true);
            echo "</p>
                        </td>
                        <td>
                            <h3>";
            // line 46
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["auction"], "getEndTime", array(), "method"), "format", array(0 => "Y-m-d H:i:s"), "method"), "html", null, true);
            echo "</h3>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "
                </tbody>
            </table>
        </div>
    </div>
    <!--End Table Search v2-->

    ";
        // line 58
        echo "    <div class=\"navigation\">
        ";
        // line 59
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
    </div>

";
    }

    public function getTemplateName()
    {
        return "GPISonataBlockBundle:Block:block_core_auction.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  129 => 59,  126 => 58,  117 => 50,  107 => 46,  101 => 43,  93 => 40,  86 => 36,  80 => 32,  76 => 31,  62 => 19,  58 => 16,  56 => 15,  54 => 14,  49 => 11,  40 => 5,  33 => 2,  30 => 1,  22 => 63,  20 => 1,);
    }
}

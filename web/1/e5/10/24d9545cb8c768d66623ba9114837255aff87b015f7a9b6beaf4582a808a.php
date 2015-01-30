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
        // line 117
        echo "



";
    }

    // line 1
    public function block_block($context, array $blocks = array())
    {
        // line 2
        echo "    ";
        // line 3
        echo "
    <style>
        .searchform {
            padding-top: 15px;
            padding-bottom: 15px;
            background-color: rgba(0, 0, 0, 0.9);
        }

        .lub-word {
            margin-top: 7px;
            color: #f5f5f5;
        }

        .counter {
            min-height: 20px;
            padding: 7px;
            margin-bottom: 20px;
            background-color: #F5F5F5;
            border: 1px solid #E3E3E3;
            border-radius: 4px;
            box-shadow: 0px 1px 1px rgba(0, 0, 0, 0.5);
            text-align: center;
        }
    </style>

    <div class=\"row searchform\">
        <form>
            <div class=\"col-sm-4\">
                <div class=\"input-group\">

                    <span class=\"input-group-addon\"><i class=\"glyphicon glyphicon-search\"></i></span>
                    <input type=\"text\" name=\"name\" value=\"";
        // line 34
        echo twig_escape_filter($this->env, (isset($context["searchParam"]) ? $context["searchParam"] : $this->getContext($context, "searchParam")), "html", null, true);
        echo "\" placeholder=\"wpisz tytuł aukcji\"
                           class=\"form-control\">
                </div>
            </div>
            <div class=\"col-sm-4 md-margin-bottom-10\">
                <input type=\"submit\" class=\"btn-u btn-block btn-u-dark\" value=\"SZUKAJ AUKCJI\"/>
            </div>

            <div class=\"col-sm-4\">
                <div class=\"col-sm-2\">
                    <div class=\"lub-word\">lub</div>
                </div>
                <div class=\"col-sm-10\">
                    <a type=\"button\" href=\"";
        // line 47
        echo $this->env->getExtension('routing')->getPath("gpi_auction_add");
        echo "\" class=\"btn-u btn-block btn-u-dark\">DODAJ
                        NOWĄ</a>

                </div>

            </div>
        </form>
    </div>




    <div class=\"col-sm-12 counter\">
        <div class=\"count\">
            Znaleziono aukcji: ";
        // line 61
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "getTotalItemCount", array()), "html", null, true);
        echo "
        </div>
        ";
        // line 64
        echo "        ";
        // line 65
        echo "        ";
        // line 66
        echo "    </div>

    ";
        // line 69
        echo "    <!--Table Search v2-->
    <div class=\"table-search-v2 margin-bottom-10\">
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
        // line 81
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["auction"]) {
            // line 82
            echo "
                    <tr>
                        <td>
                            <img class=\"rounded-x\"
                                 src=\"";
            // line 86
            echo twig_escape_filter($this->env, strtr($this->env->getExtension('assets')->getAssetUrl($this->env->getExtension('liip_imagine')->filter($this->getAttribute($context["auction"], "getMainPhoto", array(), "method"), "list_thumb")), array("media" => "web/media")), "html", null, true);
            echo "\"
                                 alt=\"\">
                        </td>
                        <td class=\"td-width\">
                            <h3>
                                <a href=\"";
            // line 91
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_details", array("id" => $this->getAttribute($context["auction"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["auction"], "name", array()), "html", null, true);
            echo "</a>
                            </h3>

                            <p>";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($context["auction"], "getContentShort", array(), "method"), "html", null, true);
            echo "</p>
                        </td>
                        <td>
                            <h3>";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["auction"], "getEndTime", array(), "method"), "format", array(0 => "Y-m-d H:i:s"), "method"), "html", null, true);
            echo "</h3>
                        </td>
                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        echo "
                </tbody>
            </table>
        </div>
    </div>
    <!--End Table Search v2-->


    ";
        // line 110
        echo "    <div class=\"text-center\">
        <div class=\"navigation\\\">
                ";
        // line 112
        echo $this->env->getExtension('knp_pagination')->render((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        echo "
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "GPISonataBlockBundle:Block:block_core_auction.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  184 => 112,  180 => 110,  170 => 101,  160 => 97,  154 => 94,  146 => 91,  138 => 86,  132 => 82,  128 => 81,  114 => 69,  110 => 66,  108 => 65,  106 => 64,  101 => 61,  84 => 47,  68 => 34,  35 => 3,  33 => 2,  30 => 1,  22 => 117,  20 => 1,);
    }
}

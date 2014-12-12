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
        // line 66
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
        echo "        <div";
        if ($this->getAttribute((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "isSorted", array(0 => "a.name"), "method")) {
            echo " class=\"sorted\"";
        }
        echo ">Sortuj
            po: ";
        // line 15
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Nazwa", "a.name");
        echo "  ";
        echo $this->env->getExtension('knp_pagination')->sortable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")), "Id", "a.id");
        echo "</div>
    </div>

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
                    <th>Status</th>
                    <th>Kontakt</th>
                </tr>
                </thead>
                <tbody>
                ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pagination"]) ? $context["pagination"] : $this->getContext($context, "pagination")));
        foreach ($context['_seq'] as $context["_key"] => $context["auction"]) {
            // line 33
            echo "
                    <tr>
                        <td>
                            <img class=\"rounded-x\" src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["auction"], "getMainPhoto", array(), "method"), "html", null, true);
            echo "\" alt=\"\">
                        </td>
                        <td class=\"td-width\">
                            <h3><a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_details", array("id" => $this->getAttribute($context["auction"], "id", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["auction"], "name", array()), "html", null, true);
            echo "</a>
                            </h3>

                            <p>";
            // line 42
            echo twig_escape_filter($this->env, $this->getAttribute($context["auction"], "getContentShort", array(), "method"), "html", null, true);
            echo "</p>
                            <small class=\"hex\">Zakończenie ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($context["auction"], "getEndTime", array(), "method"), "html", null, true);
            echo "</small>
                        </td>
                        <td>
                            <span class=\"label label-success\">Aktywna</span>
                        </td>
                        ";
            // line 49
            echo "                            ";
            // line 50
            echo "                        ";
            // line 51
            echo "                    </tr>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
                </tbody>
            </table>
        </div>
    </div>
    <!--End Table Search v2-->

    ";
        // line 61
        echo "    <div class=\"navigation\">
        ";
        // line 62
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
        return array (  142 => 62,  139 => 61,  130 => 53,  123 => 51,  121 => 50,  119 => 49,  111 => 43,  107 => 42,  99 => 39,  93 => 36,  88 => 33,  84 => 32,  69 => 19,  61 => 15,  54 => 14,  49 => 11,  40 => 5,  33 => 2,  30 => 1,  22 => 66,  20 => 1,);
    }
}

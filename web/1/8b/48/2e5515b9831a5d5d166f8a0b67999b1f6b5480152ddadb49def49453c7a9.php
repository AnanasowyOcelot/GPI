<?php

/* GPIAuctionBundle:Default:details.html.twig */
class __TwigTemplate_8b482e5515b9831a5d5d166f8a0b67999b1f6b5480152ddadb49def49453c7a9 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        if ((isset($context["isDeactivated"]) ? $context["isDeactivated"] : $this->getContext($context, "isDeactivated"))) {
            // line 2
            echo "    <div class=\"alert alert-danger fade in\"><strong>Aukcja została wyłączona przez administratora
            <br/>
            Powód:</strong> ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["disableReason"]) ? $context["disableReason"] : $this->getContext($context, "disableReason")), "content", array()), "html", null, true);
            echo "
    </div>
";
        } elseif ((isset($context["hasProperlyEnded"]) ? $context["hasProperlyEnded"] : $this->getContext($context, "hasProperlyEnded"))) {
            // line 7
            echo "
    <div class=\"alert alert-success fade in\">Aukcja jest zakończona.</div>

";
        } elseif ( !(isset($context["isActive"]) ? $context["isActive"] : $this->getContext($context, "isActive"))) {
            // line 11
            echo "    <div class=\"alert alert-warning fade in\">Aukcja jest nieaktywna.</div>
";
        }
        // line 13
        echo "<div class=\"row margin-bottom-60\">
    <div class=\"col-sm-8\">
        <div class=\"headline\"><h2>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "name", array()), "html", null, true);
        echo "</h2></div>
        <p>";
        // line 16
        echo $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "content", array());
        echo "</p>
        ";
        // line 17
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "comments", array())) > 0)) {
            // line 18
            echo "            <br/>
            <fieldset>
                <label>Dodatkowe uwagi:</label>
                <br/>
                ";
            // line 22
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "comments", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 23
                echo "                    <div><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "created", array()), "format", array(0 => "Y-m-d H:i:s"), "method"), "html", null, true);
                echo ":</strong> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
                echo "</div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 25
            echo "            </fieldset>
        ";
        }
        // line 27
        echo "        ";
        if (( !($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method") == $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "createdBy", array(), "method")) && $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "isActive", array(), "method"))) {
            // line 28
            echo "            ";
            if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
                // line 29
                echo "                <a class=\"btn-u\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_offer_homepage", array("auctionId" => $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "id", array()))), "html", null, true);
                echo "\">Dodaj nową
                    ofertę</a>
            ";
            } else {
                // line 32
                echo "                <a class=\"btn-u\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_offer_homepage", array("auctionId" => $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "id", array()))), "html", null, true);
                echo "\">Dodaj nową
                    ofertę<div style=\"font-size: 10px\" >(musisz być zalogowany)</div></a>

            ";
            }
            // line 36
            echo "        ";
        }
        // line 37
        echo "
    </div>
    <div class=\"col-sm-4\">
        <div class=\"headline\"><h2>Szczegóły</h2></div>
        <ul class=\"list-unstyled project-details\">
            <li><strong>Dodano przez:</strong> ";
        // line 42
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getCreatedBy", array(), "method"), "html", null, true);
        echo "</li>
            ";
        // line 43
        if ( !(null === $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "maxRealizationDate", array()))) {
            // line 44
            echo "                <li><strong>Maksymalna data realizacji
                        zlecenia: </strong> ";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "maxRealizationDate", array()), "format", array(0 => "Y-m-d"), "method"), "html", null, true);
            echo "</li>
            ";
        }
        // line 47
        echo "
            <li><strong>Czas trwania aukcji:</strong></li>
            <li><strong>Data dodania:</strong> ";
        // line 49
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getStartTime", array(), "method"), "format", array(0 => "Y-m-d H:i:s"), "method"), "html", null, true);
        echo "</li>
            <li><strong>Data zakończenia:</strong> ";
        // line 50
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getEndTime", array(), "method"), "format", array(0 => "Y-m-d H:i:s"), "method"), "html", null, true);
        echo "</li>

            <li><strong>Kategorie:</strong></li>
            ";
        // line 53
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getCategories", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 54
            echo "                <li>&nbsp;&nbsp;&nbsp;&nbsp;";
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 56
        echo "
            ";
        // line 57
        if ((($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getMaxPrice", array()) != null) && $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 58
            echo "                <li><strong>Cena maksymalna:</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getMaxPrice", array(), "method"), "html", null, true);
            echo "</li>
            ";
        }
        // line 60
        echo "
            ";
        // line 61
        if (($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getAttributeValues", array(), "method") != null)) {
            // line 62
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getAttributeValues", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 63
                echo "                    <li><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "name", array()), "html", null, true);
                echo ":</strong> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "value", array()), "html", null, true);
                echo "</li>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 65
            echo "            ";
        }
        // line 66
        echo "        </ul>
    </div>
</div>

<div class=\"fusion-portfolio wrapper-portfolio-grid cbp-3-col\">
    <div id=\"grid-container\" class=\"cbp-l-grid-gallery\">
        <ul>
            ";
        // line 73
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "documents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 74
            echo "                <li class=\"cbp-item motion\">
                    <a href=\"";
            // line 75
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["document"], "getWebPath", array(), "method")), "html", null, true);
            echo "\" target=\"_blank\" class=\"cbp-caption cbp-lightbox\">
                        <div class=\"cbp-caption-defaultWrap\">
                            <img src=\"";
            // line 77
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["document"], "getWebPath", array(), "method")), "html", null, true);
            echo "\" alt=\"\" width=\"100%\">
                        </div>
                        <div class=\"cbp-caption-activeWrap\">
                            <div class=\"cbp-l-caption-alignCenter\">
                                <div class=\"cbp-l-caption-body\">
                                    <p class=\"cbp-l-caption-desc\">";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "description", array()), "html", null, true);
            echo "</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 89
        echo "
        </ul>

    </div>
</div>


";
        // line 97
        echo "    ";
        // line 98
        echo "
    ";
        // line 100
        echo "        ";
        // line 101
        echo "        ";
        // line 102
        echo "            ";
        // line 103
        echo "            ";
        // line 104
        echo "                ";
        // line 105
        echo "            ";
        // line 106
        echo "        ";
        // line 107
        echo "            ";
        // line 108
        echo "    ";
        // line 109
        echo "    ";
        // line 110
        echo "
";
        // line 112
        echo "
<div class=\"table-responsive\">
    <table class=\"table table-hover\">
        <thead>
        <tr>
            <th class=\"hidden-sm\">Złożył</th>
            <th>Cena minimalna</th>
            <th></th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 124
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getActiveOffers", array(), "method"));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["offer"]) {
            // line 125
            echo "            ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 126
                echo "                <tr style=\"background-color: #88de73\">
            ";
            } else {
                // line 128
                echo "                <tr>
            ";
            }
            // line 130
            echo "            <td class=\"td-width\">
                ";
            // line 131
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "createdBy", array()), "html", null, true);
            echo "
            </td>
            <td class=\"td-width\">
                ";
            // line 134
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "actualPrice", array()), "html", null, true);
            echo "
            </td>
            <td class=\"td-width\">
                ";
            // line 137
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method") == $this->getAttribute($context["offer"], "createdBy", array(), "method")) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method") == $this->getAttribute($this->getAttribute($context["offer"], "getAuction", array(), "method"), "createdBy", array(), "method")))) {
                // line 138
                echo "                    <a class=\"btn-u btn-u-blue\"
                       href=\"";
                // line 139
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_offer_details", array("id" => $this->getAttribute($context["offer"], "id", array()))), "html", null, true);
                echo "\">Szczegóły</a>
                ";
            }
            // line 141
            echo "            </td>
            <td>
                        <span class=\"";
            // line 143
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offerStatus"]) ? $context["offerStatus"] : $this->getContext($context, "offerStatus")), "label", array(0 => $this->getAttribute($context["offer"], "getStatus", array(), "method")), "method"), "html", null, true);
            echo "\">
                        ";
            // line 144
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offerStatus"]) ? $context["offerStatus"] : $this->getContext($context, "offerStatus")), "name", array(0 => $this->getAttribute($context["offer"], "getStatus", array(), "method")), "method"), "html", null, true);
            echo "
                        </span>
            </td>
            </tr>
        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['offer'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 149
        echo "        </tbody>
    </table>
</div>
";
    }

    public function getTemplateName()
    {
        return "GPIAuctionBundle:Default:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  360 => 149,  341 => 144,  337 => 143,  333 => 141,  328 => 139,  325 => 138,  323 => 137,  317 => 134,  311 => 131,  308 => 130,  304 => 128,  300 => 126,  297 => 125,  280 => 124,  266 => 112,  263 => 110,  261 => 109,  259 => 108,  257 => 107,  255 => 106,  253 => 105,  251 => 104,  249 => 103,  247 => 102,  245 => 101,  243 => 100,  240 => 98,  238 => 97,  229 => 89,  216 => 82,  208 => 77,  203 => 75,  200 => 74,  196 => 73,  187 => 66,  184 => 65,  173 => 63,  168 => 62,  166 => 61,  163 => 60,  157 => 58,  155 => 57,  152 => 56,  143 => 54,  139 => 53,  133 => 50,  129 => 49,  125 => 47,  120 => 45,  117 => 44,  115 => 43,  111 => 42,  104 => 37,  101 => 36,  93 => 32,  86 => 29,  83 => 28,  80 => 27,  76 => 25,  65 => 23,  61 => 22,  55 => 18,  53 => 17,  49 => 16,  45 => 15,  41 => 13,  37 => 11,  31 => 7,  25 => 4,  21 => 2,  19 => 1,);
    }
}

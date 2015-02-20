<?php

/* GPIAuctionBundle:Default:details.html.twig */
class __TwigTemplate_e011a4560458fb8d4f74eb7436b24c7bc33048c62acc3d544e9165d78aabe3cc extends Sonata\CacheBundle\Twig\TwigTemplate14
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
                    ofertę
                    <div style=\"font-size: 10px\">(musisz być zalogowany)</div>
                </a>

            ";
            }
            // line 38
            echo "        ";
        }
        // line 39
        echo "
    </div>
    <div class=\"col-sm-4\">
        <div class=\"headline\"><h2>Szczegóły</h2></div>
        <ul class=\"list-unstyled project-details\">
            <li><strong>Dodano przez:</strong> ";
        // line 44
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getCreatedBy", array(), "method"), "html", null, true);
        echo "</li>
            ";
        // line 45
        if ( !(null === $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "maxRealizationDate", array()))) {
            // line 46
            echo "                <li><strong>Maksymalna data realizacji
                        zlecenia: </strong> ";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "maxRealizationDate", array()), "format", array(0 => "Y-m-d"), "method"), "html", null, true);
            echo "</li>
            ";
        }
        // line 49
        echo "
            <li><strong>Czas trwania aukcji:</strong></li>
            <li><strong>Data dodania:</strong> ";
        // line 51
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getStartTime", array(), "method"), "format", array(0 => "Y-m-d H:i:s"), "method"), "html", null, true);
        echo "</li>
            <li><strong>Data zakończenia:</strong> ";
        // line 52
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getEndTime", array(), "method"), "format", array(0 => "Y-m-d H:i:s"), "method"), "html", null, true);
        echo "</li>

            <li><strong>Kategorie:</strong></li>
            ";
        // line 55
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getCategories", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 56
            echo "                <li>&nbsp;&nbsp;&nbsp;&nbsp;";
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        echo "
            ";
        // line 59
        if ((($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getMaxPrice", array()) != null) && $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 60
            echo "                <li><strong>Cena maksymalna:</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getMaxPrice", array(), "method"), "html", null, true);
            echo "&nbsp;PLN</li>
            ";
        }
        // line 62
        echo "
            ";
        // line 63
        if (($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getAttributeValues", array(), "method") != null)) {
            // line 64
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getAttributeValues", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 65
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
            // line 67
            echo "            ";
        }
        // line 68
        echo "        </ul>
    </div>
</div>
<hr/>
<div class=\"fusion-portfolio wrapper-portfolio-grid cbp-4-col\">
    <div id=\"grid-container\" class=\"cbp-l-grid-gallery\">
        <ul>
            ";
        // line 75
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "documents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 76
            echo "                <li class=\"cbp-item motion\">
                    ";
            // line 77
            if ( !$this->getAttribute($context["document"], "isDownloadable", array(), "method")) {
                // line 78
                echo "                        ";
                $context["a_tag_attributes"] = "target=\"_blank\" class=\"cbp-caption cbp-lightbox\"";
                // line 79
                echo "                    ";
            } else {
                // line 80
                echo "                        ";
                $context["a_tag_attributes"] = "download";
                // line 81
                echo "                    ";
            }
            // line 82
            echo "
                    <a href=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["document"], "getWebPath", array(), "method")), "html", null, true);
            echo "\" ";
            echo (isset($context["a_tag_attributes"]) ? $context["a_tag_attributes"] : $this->getContext($context, "a_tag_attributes"));
            echo ">
                        <div class=\"cbp-caption-defaultWrap\" style=\"text-align: center;\">
                            <img src=\"";
            // line 85
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["document"], "getWebImagePath", array(), "method")), "html", null, true);
            echo "\" alt=\"\"
                                 style=\"width: auto; max-width: 100%; max-height: 100%;\">
                        </div>
                    </a>
                </li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 91
        echo "        </ul>
    </div>
</div>
<hr/>


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
        // line 108
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
            // line 109
            echo "            ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 110
                echo "                <tr style=\"background-color: #ccffc1\">
            ";
            } else {
                // line 112
                echo "                <tr>
            ";
            }
            // line 114
            echo "            <td class=\"td-width\">
                ";
            // line 115
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "createdBy", array()), "html", null, true);
            echo "
            </td>
            <td class=\"td-width\">
                ";
            // line 118
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "actualPrice", array()), "html", null, true);
            echo "&nbsp;PLN
            </td>
            <td class=\"td-width\">
                ";
            // line 121
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method") == $this->getAttribute($context["offer"], "createdBy", array(), "method")) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method") == $this->getAttribute($this->getAttribute($context["offer"], "getAuction", array(), "method"), "createdBy", array(), "method")))) {
                // line 122
                echo "                    <a class=\"btn-u btn-u-blue\"
                       href=\"";
                // line 123
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_offer_details", array("id" => $this->getAttribute($context["offer"], "id", array()))), "html", null, true);
                echo "\">Szczegóły</a>
                ";
            }
            // line 125
            echo "            </td>
            <td>
                        <span class=\"";
            // line 127
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offerStatus"]) ? $context["offerStatus"] : $this->getContext($context, "offerStatus")), "label", array(0 => $this->getAttribute($context["offer"], "getStatus", array(), "method")), "method"), "html", null, true);
            echo "\">
                        ";
            // line 128
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
        // line 133
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
        return array (  340 => 133,  321 => 128,  317 => 127,  313 => 125,  308 => 123,  305 => 122,  303 => 121,  297 => 118,  291 => 115,  288 => 114,  284 => 112,  280 => 110,  277 => 109,  260 => 108,  241 => 91,  229 => 85,  222 => 83,  219 => 82,  216 => 81,  213 => 80,  210 => 79,  207 => 78,  205 => 77,  202 => 76,  198 => 75,  189 => 68,  186 => 67,  175 => 65,  170 => 64,  168 => 63,  165 => 62,  159 => 60,  157 => 59,  154 => 58,  145 => 56,  141 => 55,  135 => 52,  131 => 51,  127 => 49,  122 => 47,  119 => 46,  117 => 45,  113 => 44,  106 => 39,  103 => 38,  93 => 32,  86 => 29,  83 => 28,  80 => 27,  76 => 25,  65 => 23,  61 => 22,  55 => 18,  53 => 17,  49 => 16,  45 => 15,  41 => 13,  37 => 11,  31 => 7,  25 => 4,  21 => 2,  19 => 1,);
    }
}

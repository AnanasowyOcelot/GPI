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
        if ( !(isset($context["isActive"]) ? $context["isActive"] : $this->getContext($context, "isActive"))) {
            // line 2
            echo "<div class=\"alert alert-warning fade in\">Aukcja jest nieaktywna.</div>
";
        }
        // line 4
        echo "<div class=\"row margin-bottom-60\">
    <div class=\"col-sm-8\">
        <div class=\"headline\"><h2>";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "name", array()), "html", null, true);
        echo "</h2></div>
        <p>";
        // line 7
        echo $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "content", array());
        echo "</p>
        ";
        // line 8
        if ((twig_length_filter($this->env, $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "comments", array())) > 0)) {
            // line 9
            echo "        <br/>
        <fieldset>
            <label>Dodatkowe uwagi:</label>
            <br/>
            ";
            // line 13
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "comments", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                // line 14
                echo "                <div><strong>";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["comment"], "created", array()), "format", array(0 => "Y-m-d H:i:s"), "method"), "html", null, true);
                echo ":</strong> ";
                echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "content", array()), "html", null, true);
                echo "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        </fieldset>
        ";
        }
        // line 18
        echo "        ";
        if (( !($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method") == $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "createdBy", array(), "method")) && $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "isActive", array(), "method"))) {
            // line 19
            echo "        <a class=\"btn-u\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_offer_homepage", array("auctionId" => $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "id", array()))), "html", null, true);
            echo "\">Dodaj nową ofertę</a>
        ";
        }
        // line 21
        echo "
    </div>
    <div class=\"col-sm-4\">
        <div class=\"headline\"><h2>Szczegóły</h2></div>
        <ul class=\"list-unstyled project-details\">
            <li><strong>Dodano przez:</strong> ";
        // line 26
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getCreatedBy", array(), "method"), "html", null, true);
        echo "</li>
            ";
        // line 27
        if ( !(null === $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "maxRealizationDate", array()))) {
            // line 28
            echo "                <li><strong>Maksymalna data realizacji zlecenia: </strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "maxRealizationDate", array()), "format", array(0 => "Y-m-d"), "method"), "html", null, true);
            echo "</li>
            ";
        }
        // line 30
        echo "            <br/>
            <br/>
            <li>Czas trwania aukcji: </li>
            <li><strong>Data dodania:</strong> ";
        // line 33
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getStartTime", array(), "method"), "format", array(0 => "Y-m-d H:i:s"), "method"), "html", null, true);
        echo "</li>
            <li><strong>Data zakończenia:</strong> ";
        // line 34
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getEndTime", array(), "method"), "format", array(0 => "Y-m-d H:i:s"), "method"), "html", null, true);
        echo "</li>
            <br/>
            <br/>
            <li><strong>Kategorie:</strong></li>
            ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getCategories", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 39
            echo "                <li>&nbsp;&nbsp;&nbsp;&nbsp;";
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 41
        echo "            <br/>
            <br/>
            ";
        // line 43
        if ((($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getMaxPrice", array()) != null) && $this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()))) {
            // line 44
            echo "                <li><strong>Cena maksymalna:</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getMaxPrice", array(), "method"), "html", null, true);
            echo "</li>
            ";
        }
        // line 46
        echo "        </ul>
    </div>
</div>


<div class=\"fusion-portfolio wrapper-portfolio-grid cbp-3-col\">
    <div id=\"grid-container\" class=\"cbp-l-grid-gallery\">
        <ul>
            ";
        // line 54
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "documents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 55
            echo "                <li class=\"cbp-item motion\">
                    <a href=\"";
            // line 56
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["document"], "getWebPath", array(), "method")), "html", null, true);
            echo "\" target=\"_blank\" class=\"cbp-caption cbp-lightbox\">
                        <div class=\"cbp-caption-defaultWrap\">
                            <img src=\"";
            // line 58
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["document"], "getWebPath", array(), "method")), "html", null, true);
            echo "\" alt=\"\" width=\"100%\">
                        </div>
                        <div class=\"cbp-caption-activeWrap\">
                            <div class=\"cbp-l-caption-alignCenter\">
                                <div class=\"cbp-l-caption-body\">
                                    <p class=\"cbp-l-caption-desc\">";
            // line 63
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
        // line 70
        echo "
        </ul>

    </div>
</div>
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
        // line 86
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
            // line 87
            echo "                ";
            if ($this->getAttribute($context["loop"], "first", array())) {
                // line 88
                echo "                <tr style=\"background-color: #88de73\">
                ";
            } else {
                // line 90
                echo "                    <tr>
                ";
            }
            // line 92
            echo "                    <td class=\"td-width\">
                        ";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "createdBy", array()), "html", null, true);
            echo "
                    </td>
                    <td class=\"td-width\">
                        ";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($context["offer"], "actualPrice", array()), "html", null, true);
            echo "
                    </td>
                    <td class=\"td-width\">
                        ";
            // line 99
            if ((($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method") == $this->getAttribute($context["offer"], "createdBy", array(), "method")) || ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method") == $this->getAttribute($this->getAttribute($context["offer"], "getAuction", array(), "method"), "createdBy", array(), "method")))) {
                // line 100
                echo "                        <a class=\"btn-u btn-u-blue\"
                           href=\"";
                // line 101
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_offer_details", array("id" => $this->getAttribute($context["offer"], "id", array()))), "html", null, true);
                echo "\">Szczegóły</a>
                        ";
            }
            // line 103
            echo "                    </td>
                    <td>
                        <span class=\"";
            // line 105
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offerStatus"]) ? $context["offerStatus"] : $this->getContext($context, "offerStatus")), "label", array(0 => $this->getAttribute($context["offer"], "getStatus", array(), "method")), "method"), "html", null, true);
            echo "\">
                        ";
            // line 106
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
        // line 111
        echo "            </tbody>
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
        return array (  274 => 111,  255 => 106,  251 => 105,  247 => 103,  242 => 101,  239 => 100,  237 => 99,  231 => 96,  225 => 93,  222 => 92,  218 => 90,  214 => 88,  211 => 87,  194 => 86,  176 => 70,  163 => 63,  155 => 58,  150 => 56,  147 => 55,  143 => 54,  133 => 46,  127 => 44,  125 => 43,  121 => 41,  112 => 39,  108 => 38,  101 => 34,  97 => 33,  92 => 30,  86 => 28,  84 => 27,  80 => 26,  73 => 21,  67 => 19,  64 => 18,  60 => 16,  49 => 14,  45 => 13,  39 => 9,  37 => 8,  33 => 7,  29 => 6,  25 => 4,  21 => 2,  19 => 1,);
    }
}

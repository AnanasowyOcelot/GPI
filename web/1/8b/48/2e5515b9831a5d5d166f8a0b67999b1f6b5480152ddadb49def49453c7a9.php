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
        echo "<div class=\"container content\">


    ";
        // line 5
        echo "    ";
        // line 6
        echo "
    ";
        // line 8
        echo "
    ";
        // line 10
        echo "
    ";
        // line 12
        echo "
    ";
        // line 14
        echo "    ";
        // line 15
        echo "    ";
        // line 16
        echo "    ";
        // line 17
        echo "    ";
        // line 18
        echo "    ";
        // line 19
        echo "</div>

<div class=\"row margin-bottom-60\">
    <div class=\"col-sm-8\">
        <div class=\"headline\"><h2>";
        // line 23
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "name", array()), "html", null, true);
        echo "</h2></div>
        <p>";
        // line 24
        echo $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "content", array());
        echo "</p>
    </div>
    <div class=\"col-sm-4\">
        <div class=\"headline\"><h2>Szczegóły</h2></div>
        <ul class=\"list-unstyled project-details\">
            <li><strong>Dodano przez:</strong> ";
        // line 29
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getCreatedBy", array(), "method"), "html", null, true);
        echo "</li>
            <li><strong>Data dodania:</strong> ";
        // line 30
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getStartTime", array(), "method"), "format", array(0 => "Y-m-d H:i:s"), "method"), "html", null, true);
        echo "</li>
            <li><strong>Data zakończenia:</strong> ";
        // line 31
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getEndTime", array(), "method"), "format", array(0 => "Y-m-d H:i:s"), "method"), "html", null, true);
        echo "</li>
            <li><strong>Kategorie:</strong></li>
            ";
        // line 33
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getCategories", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 34
            echo "                <li>&nbsp;&nbsp;&nbsp;&nbsp;";
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 36
        echo "            ";
        if (($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getMaxPrice", array()) != null)) {
            // line 37
            echo "                <li><strong>Cena maksymalna:</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getMaxPrice", array(), "method"), "html", null, true);
            echo "</li>
            ";
        }
        // line 39
        echo "
        </ul>
    </div>
</div>
<div class=\"fusion-portfolio wrapper-portfolio-grid cbp-3-col\">
    <div id=\"grid-container\" class=\"cbp-l-grid-gallery\">
        <ul>
            ";
        // line 46
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "documents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 47
            echo "            <li class=\"cbp-item motion\">
                <a href=\"\" target=\"_blank\" class=\"cbp-caption cbp-lightbox\">
                    <div class=\"cbp-caption-defaultWrap\">
                        <img src=\"/";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "getWebPath", array(), "method"), "html", null, true);
            echo "\" alt=\"\" width=\"100%\">
                    </div>
                    <div class=\"cbp-caption-activeWrap\">
                        <div class=\"cbp-l-caption-alignCenter\">
                            <div class=\"cbp-l-caption-body\">
                                ";
            // line 56
            echo "                                <p class=\"cbp-l-caption-desc\">";
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
        // line 63
        echo "
    </ul>
    </div>
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
        return array (  141 => 63,  127 => 56,  119 => 50,  114 => 47,  110 => 46,  101 => 39,  95 => 37,  92 => 36,  83 => 34,  79 => 33,  74 => 31,  70 => 30,  66 => 29,  58 => 24,  54 => 23,  48 => 19,  46 => 18,  44 => 17,  42 => 16,  40 => 15,  38 => 14,  35 => 12,  32 => 10,  29 => 8,  26 => 6,  24 => 5,  19 => 1,);
    }
}

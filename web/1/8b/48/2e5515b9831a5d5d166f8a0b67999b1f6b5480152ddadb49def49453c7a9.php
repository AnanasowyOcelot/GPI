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
        echo "<div class=\"row margin-bottom-60\">
    <div class=\"col-sm-8\">
        <div class=\"headline\"><h2>";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "name", array()), "html", null, true);
        echo "</h2></div>
        <p>";
        // line 4
        echo $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "content", array());
        echo "</p>
    </div>
    <div class=\"col-sm-4\">
        <div class=\"headline\"><h2>Szczegóły</h2></div>
        <ul class=\"list-unstyled project-details\">
            <li><strong>Dodano przez:</strong> ";
        // line 9
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getCreatedBy", array(), "method"), "html", null, true);
        echo "</li>
            <li><strong>Data dodania:</strong> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getStartTime", array(), "method"), "format", array(0 => "Y-m-d H:i:s"), "method"), "html", null, true);
        echo "</li>
            <li><strong>Data zakończenia:</strong> ";
        // line 11
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getEndTime", array(), "method"), "format", array(0 => "Y-m-d H:i:s"), "method"), "html", null, true);
        echo "</li>
            <li><strong>Kategorie:</strong></li>
            ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getCategories", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 14
            echo "                <li>&nbsp;&nbsp;&nbsp;&nbsp;";
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</li>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "            ";
        if (($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getMaxPrice", array()) != null)) {
            // line 17
            echo "                <li><strong>Cena maksymalna:</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getMaxPrice", array(), "method"), "html", null, true);
            echo "</li>
            ";
        }
        // line 19
        echo "
        </ul>
    </div>
</div>
<div class=\"fusion-portfolio wrapper-portfolio-grid cbp-3-col\">
    <div id=\"grid-container\" class=\"cbp-l-grid-gallery\">
        <ul>
            ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "documents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 27
            echo "            <li class=\"cbp-item motion\">
                <a href=\"/";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "getWebPath", array(), "method"), "html", null, true);
            echo "\" target=\"_blank\" class=\"cbp-caption cbp-lightbox\">
                    <div class=\"cbp-caption-defaultWrap\">
                        <img src=\"/";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "getWebPath", array(), "method"), "html", null, true);
            echo "\" alt=\"\" width=\"100%\">
                    </div>
                    <div class=\"cbp-caption-activeWrap\">
                        <div class=\"cbp-l-caption-alignCenter\">
                            <div class=\"cbp-l-caption-body\">
                                ";
            // line 36
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
        // line 43
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
        return array (  113 => 43,  99 => 36,  91 => 30,  86 => 28,  83 => 27,  79 => 26,  70 => 19,  64 => 17,  61 => 16,  52 => 14,  48 => 13,  43 => 11,  39 => 10,  35 => 9,  27 => 4,  23 => 3,  19 => 1,);
    }
}

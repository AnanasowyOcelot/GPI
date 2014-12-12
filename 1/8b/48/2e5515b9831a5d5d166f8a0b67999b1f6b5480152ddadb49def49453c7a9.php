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
    <div class=\"row\">
        <div class=\"col-md-3\">
            <div class=\"margin-bottom-30\">
                <div class=\"headline\"><h2>Kategoria</h2></div>
                ";
        // line 6
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getCategories", array(), "method"));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 7
            echo "                <p>";
            echo twig_escape_filter($this->env, $context["category"], "html", null, true);
            echo "</p>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "            </div>
            <div class=\"margin-bottom-30\">
                <div class=\"headline\"><h2>Dodano przez</h2></div>
                <p>";
        // line 12
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "getCreatedBy", array(), "method"), "html", null, true);
        echo "</p>
            </div>
        </div>
        <div class=\"col-md-9\">
            <div class=\"headline\"><h2>";
        // line 16
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "name", array()), "html", null, true);
        echo "</h2></div>
            <p>";
        // line 17
        echo $this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "content", array());
        echo "</p>

            <div class=\"container content\">

                <div class=\"col-md-12\">

                    <div class=\"owl-carousel-v1 owl-work-v1\">

                        <div class=\"owl-recent-works-v1\">
                            ";
        // line 26
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["auction"]) ? $context["auction"] : $this->getContext($context, "auction")), "documents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["ducument"]) {
            // line 27
            echo "

                                <div class=\"item\">
                                    <a href=\"/";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($context["ducument"], "getWebPath", array(), "method"), "html", null, true);
            echo "\" target=\"_blank\">
                                        <em class=\"overflow-hidden\">
                                            <img class=\"img-responsive\" src=\"/";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($context["ducument"], "getWebPath", array(), "method"), "html", null, true);
            echo "\" alt=\"\">
                                        </em>
                                <span>
                                    <strong>";
            // line 35
            echo twig_escape_filter($this->env, $this->getAttribute($context["ducument"], "description", array()), "html", null, true);
            echo "</strong>
                                    ";
            // line 37
            echo "                                </span>
                                    </a>
                                </div>

                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['ducument'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>";
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
        return array (  101 => 42,  91 => 37,  87 => 35,  81 => 32,  76 => 30,  71 => 27,  67 => 26,  55 => 17,  51 => 16,  44 => 12,  39 => 9,  30 => 7,  26 => 6,  19 => 1,);
    }
}

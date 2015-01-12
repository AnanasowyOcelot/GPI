<?php

/* GPIOfferBundle:Offer:details.html.twig */
class __TwigTemplate_a1abf74541fd19c05e9a41408832b623715cff7822aa08506735b36b61bad057 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        ";
        // line 4
        echo "        <p>";
        echo $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "content", array());
        echo "</p>
        <br/>
    </div>
    <div class=\"col-sm-4\">
        <div class=\"headline\"><h2>Szczegóły</h2></div>
        <ul class=\"list-unstyled project-details\">
            <li><strong>Dodano przez:</strong> ";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "getCreatedBy", array(), "method"), "html", null, true);
        echo "</li>
            ";
        // line 12
        echo "            <li><strong>Cena minimalna:</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "actualPrice", array()), "html", null, true);
        echo "</li>
            ";
        // line 13
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method") == $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "createdBy", array(), "method"))) {
            // line 14
            echo "                <li><strong>Dolny limit ceny:</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "price", array()), "html", null, true);
            echo "</li>
                ";
            // line 15
            if ( !(null === $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "bidPercent", array()))) {
                // line 16
                echo "                    <li><strong>Procent przebicia:</strong> ";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "bidPercent", array()) * 100), "html", null, true);
                echo "%</li>
                ";
            } else {
                // line 18
                echo "                    <li><strong>Procent przebicia:</strong> Nie ustalono </li>
                ";
            }
            // line 20
            echo "            ";
        }
        // line 21
        echo "        </ul>
    </div>
</div>


<div class=\"fusion-portfolio wrapper-portfolio-grid cbp-3-col\">
    <div id=\"grid-container\" class=\"cbp-l-grid-gallery\">
        <ul>
            ";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "documents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 30
            echo "                <li class=\"cbp-item motion\">
                    <a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["document"], "getWebPath", array(), "method")), "html", null, true);
            echo "\" target=\"_blank\" class=\"cbp-caption cbp-lightbox\">
                        <div class=\"cbp-caption-defaultWrap\">
                            <img src=\"";
            // line 33
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["document"], "getWebPath", array(), "method")), "html", null, true);
            echo "\" alt=\"\" width=\"100%\">
                        </div>
                        <div class=\"cbp-caption-activeWrap\">
                            <div class=\"cbp-l-caption-alignCenter\">
                                <div class=\"cbp-l-caption-body\">
                                    <p class=\"cbp-l-caption-desc\">";
            // line 38
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
        // line 45
        echo "        </ul>
    </div>
</div>";
    }

    public function getTemplateName()
    {
        return "GPIOfferBundle:Offer:details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 45,  94 => 38,  86 => 33,  81 => 31,  78 => 30,  74 => 29,  64 => 21,  61 => 20,  57 => 18,  51 => 16,  49 => 15,  44 => 14,  42 => 13,  37 => 12,  33 => 10,  23 => 4,  19 => 1,);
    }
}

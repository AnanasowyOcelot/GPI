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
        if ( !(isset($context["isActive"]) ? $context["isActive"] : $this->getContext($context, "isActive"))) {
            // line 2
            echo "    <div class=\"alert alert-warning fade in\">Aukcja jest nieaktywna.</div>
";
        }
        // line 4
        echo "<div class=\"row margin-bottom-60\">
    <div class=\"col-sm-8\">
        ";
        // line 7
        echo "        <p>";
        echo $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "content", array());
        echo "</p>
        <br/>
    </div>
    <div class=\"col-sm-4\">
        <div class=\"headline\"><h2>Szczegóły</h2></div>
        <ul class=\"list-unstyled project-details\">
            <li><strong>Dodano przez:</strong> ";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "getCreatedBy", array(), "method"), "html", null, true);
        echo "</li>
            ";
        // line 15
        echo "            <li><strong>Cena minimalna:</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "actualPrice", array()), "html", null, true);
        echo "</li>
            ";
        // line 16
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method") == $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "createdBy", array(), "method"))) {
            // line 17
            echo "                <li><strong>Dolny limit ceny:</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "price", array()), "html", null, true);
            echo "</li>
                ";
            // line 18
            if ( !(null === $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "bidPercent", array()))) {
                // line 19
                echo "                    <li><strong>Procent przebicia:</strong> ";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "bidPercent", array()) * 100), "html", null, true);
                echo "%</li>
                ";
            } else {
                // line 21
                echo "                    <li><strong>Procent przebicia:</strong> Nie ustalono </li>
                ";
            }
            // line 23
            echo "            ";
        }
        // line 24
        echo "        </ul>
    </div>
</div>


<div class=\"fusion-portfolio wrapper-portfolio-grid cbp-3-col\">
    <div id=\"grid-container\" class=\"cbp-l-grid-gallery\">
        <ul>
            ";
        // line 32
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "documents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 33
            echo "                <li class=\"cbp-item motion\">
                    <a href=\"";
            // line 34
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["document"], "getWebPath", array(), "method")), "html", null, true);
            echo "\" target=\"_blank\" class=\"cbp-caption cbp-lightbox\">
                        <div class=\"cbp-caption-defaultWrap\">
                            <img src=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["document"], "getWebPath", array(), "method")), "html", null, true);
            echo "\" alt=\"\" width=\"100%\">
                        </div>
                        <div class=\"cbp-caption-activeWrap\">
                            <div class=\"cbp-l-caption-alignCenter\">
                                <div class=\"cbp-l-caption-body\">
                                    <p class=\"cbp-l-caption-desc\">";
            // line 41
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
        // line 48
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
        return array (  113 => 48,  100 => 41,  92 => 36,  87 => 34,  84 => 33,  80 => 32,  70 => 24,  67 => 23,  63 => 21,  57 => 19,  55 => 18,  50 => 17,  48 => 16,  43 => 15,  39 => 13,  29 => 7,  25 => 4,  21 => 2,  19 => 1,);
    }
}

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
        if ((isset($context["isDeactivated"]) ? $context["isDeactivated"] : $this->getContext($context, "isDeactivated"))) {
            // line 2
            echo "    <div class=\"alert alert-danger fade in\"><strong>Oferta została wyłączona przez administratora
            <br/>
            Powód:</strong> ";
            // line 4
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["disableReason"]) ? $context["disableReason"] : $this->getContext($context, "disableReason")), "content", array()), "html", null, true);
            echo "
    </div>
";
        } elseif ( !(isset($context["isActive"]) ? $context["isActive"] : $this->getContext($context, "isActive"))) {
            // line 7
            echo "    <div class=\"alert alert-warning fade in\">Oferta jest nieaktywna.</div>
";
        }
        // line 9
        echo "<div class=\"row margin-bottom-60\">
    <div class=\"col-sm-8\">
        ";
        // line 12
        echo "        <p>";
        echo $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "content", array());
        echo "</p>
        <br/>
    </div>
    <div class=\"col-sm-4\">
        <div class=\"headline\"><h2>Szczegóły</h2></div>
        <ul class=\"list-unstyled project-details\">
            <li><strong>Dodano przez:</strong> ";
        // line 18
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "getCreatedBy", array(), "method"), "html", null, true);
        echo "</li>
            ";
        // line 20
        echo "            <li><strong>Cena minimalna:</strong> ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "actualPrice", array()), "html", null, true);
        echo "</li>
            ";
        // line 21
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method") == $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "createdBy", array(), "method"))) {
            // line 22
            echo "                <li><strong>Dolny limit ceny:</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "price", array()), "html", null, true);
            echo "</li>
                ";
            // line 23
            if ( !(null === $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "bidPercent", array()))) {
                // line 24
                echo "                    <li><strong>Procent przebicia:</strong> ";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "bidPercent", array()) * 100), "html", null, true);
                echo "%</li>
                ";
            } else {
                // line 26
                echo "                    <li><strong>Procent przebicia:</strong> Nie ustalono </li>
                ";
            }
            // line 28
            echo "            ";
        }
        // line 29
        echo "        </ul>
    </div>
</div>


<div class=\"fusion-portfolio wrapper-portfolio-grid cbp-3-col\">
    <div id=\"grid-container\" class=\"cbp-l-grid-gallery\">
        <ul>
            ";
        // line 37
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "documents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 38
            echo "                <li class=\"cbp-item motion\">
                    <a href=\"";
            // line 39
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["document"], "getWebPath", array(), "method")), "html", null, true);
            echo "\" target=\"_blank\" class=\"cbp-caption cbp-lightbox\">
                        <div class=\"cbp-caption-defaultWrap\">
                            <img src=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["document"], "getWebPath", array(), "method")), "html", null, true);
            echo "\" alt=\"\" width=\"100%\">
                        </div>
                        <div class=\"cbp-caption-activeWrap\">
                            <div class=\"cbp-l-caption-alignCenter\">
                                <div class=\"cbp-l-caption-body\">
                                    <p class=\"cbp-l-caption-desc\">";
            // line 46
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
        // line 53
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
        return array (  123 => 53,  110 => 46,  102 => 41,  97 => 39,  94 => 38,  90 => 37,  80 => 29,  77 => 28,  73 => 26,  67 => 24,  65 => 23,  60 => 22,  58 => 21,  53 => 20,  49 => 18,  39 => 12,  35 => 9,  31 => 7,  25 => 4,  21 => 2,  19 => 1,);
    }
}

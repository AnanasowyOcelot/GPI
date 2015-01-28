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
        echo "
";
        // line 2
        if ((isset($context["isDeactivated"]) ? $context["isDeactivated"] : $this->getContext($context, "isDeactivated"))) {
            // line 3
            echo "    <div class=\"alert alert-danger fade in\"><strong>Oferta została wyłączona przez administratora
            <br/>
            Powód:</strong> ";
            // line 5
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["disableReason"]) ? $context["disableReason"] : $this->getContext($context, "disableReason")), "content", array()), "html", null, true);
            echo "
    </div>
";
        } elseif ( !(isset($context["isActive"]) ? $context["isActive"] : $this->getContext($context, "isActive"))) {
            // line 8
            echo "    <div class=\"alert alert-warning fade in\">Oferta jest nieaktywna.</div>
";
        }
        // line 10
        echo "
<div class=\"row margin-bottom-60\">
    <div class=\"col-sm-8\">
        <p>";
        // line 13
        echo $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "content", array());
        echo "</p>
        <br/>
    </div>
    <div class=\"col-sm-4\">
        <div class=\"headline\"><h2>Szczegóły</h2></div>
        <ul class=\"list-unstyled project-details\">
            <li><strong>Aukcja:</strong><a class=\"active\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_details", array("id" => $this->getAttribute($this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "getAuction", array(), "method"), "id", array()))), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "getAuction", array(), "method"), "getName", array(), "method"), "html", null, true);
        echo "</a></li>
            <li><strong>Dodano przez:</strong> ";
        // line 20
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "getCreatedBy", array(), "method"), "html", null, true);
        echo "</li>
            <li><strong>Cena minimalna:</strong> ";
        // line 21
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "actualPrice", array()), "html", null, true);
        echo "</li>
            ";
        // line 22
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "getToken", array(), "method"), "getUser", array(), "method") == $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "createdBy", array(), "method"))) {
            // line 23
            echo "                <li><strong>Dolny limit ceny:</strong> ";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "price", array()), "html", null, true);
            echo "</li>
                ";
            // line 24
            if ( !(null === $this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "bidPercent", array()))) {
                // line 25
                echo "                    <li><strong>Procent przebicia:</strong> ";
                echo twig_escape_filter($this->env, ($this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "bidPercent", array()) * 100), "html", null, true);
                echo "%</li>
                ";
            } else {
                // line 27
                echo "                    <li><strong>Procent przebicia:</strong> Nie ustalono </li>
                ";
            }
            // line 29
            echo "            ";
        }
        // line 30
        echo "        </ul>
    </div>
</div>


<div class=\"fusion-portfolio wrapper-portfolio-grid cbp-3-col\">
    <div id=\"grid-container\" class=\"cbp-l-grid-gallery\">
        <ul>
            ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["offer"]) ? $context["offer"] : $this->getContext($context, "offer")), "documents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 39
            echo "                <li class=\"cbp-item motion\">
                    <a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["document"], "getWebPath", array(), "method")), "html", null, true);
            echo "\" target=\"_blank\" class=\"cbp-caption cbp-lightbox\">
                        <div class=\"cbp-caption-defaultWrap\">
                            <img src=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('liip_imagine')->filter($this->env->getExtension('assets')->getAssetUrl($this->getAttribute($context["document"], "getWebPath", array(), "method")), "details_thumb"), "html", null, true);
            echo "\" alt=\"\" width=\"100%\">
                        </div>
                        <div class=\"cbp-caption-activeWrap\">
                            <div class=\"cbp-l-caption-alignCenter\">
                                <div class=\"cbp-l-caption-body\">
                                    <p class=\"cbp-l-caption-desc\">";
            // line 47
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
        // line 54
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
        return array (  131 => 54,  118 => 47,  110 => 42,  105 => 40,  102 => 39,  98 => 38,  88 => 30,  85 => 29,  81 => 27,  75 => 25,  73 => 24,  68 => 23,  66 => 22,  62 => 21,  58 => 20,  52 => 19,  43 => 13,  38 => 10,  34 => 8,  28 => 5,  24 => 3,  22 => 2,  19 => 1,);
    }
}

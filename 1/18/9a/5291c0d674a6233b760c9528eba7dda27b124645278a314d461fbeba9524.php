<?php

/* SonataProductBundle:Product:list_variations.html.twig */
class __TwigTemplate_189a5291c0d674a6233b760c9528eba7dda27b124645278a314d461fbeba9524 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        // line 11
        echo "
<dl>
    ";
        // line 13
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["variations"]) ? $context["variations"] : $this->getContext($context, "variations")));
        foreach ($context['_seq'] as $context["_key"] => $context["variation"]) {
            // line 14
            echo "        <dt>
            <a href=\"";
            // line 15
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_product_view", array("productId" => $this->getAttribute($context["variation"], "id", array()), "slug" => $this->getAttribute($context["variation"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["variation"], "name", array()), "html", null, true);
            echo "</a>
        </dt>
        <dd>";
            // line 17
            echo $this->env->getExtension('sonata_intl_number')->formatCurrency($this->getAttribute($context["variation"], "price", array()), (isset($context["currency"]) ? $context["currency"] : $this->getContext($context, "currency")));
            echo "</dd>
        </li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 20
        echo "</dl>
";
    }

    public function getTemplateName()
    {
        return "SonataProductBundle:Product:list_variations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 20,  37 => 17,  30 => 15,  27 => 14,  23 => 13,  19 => 11,);
    }
}

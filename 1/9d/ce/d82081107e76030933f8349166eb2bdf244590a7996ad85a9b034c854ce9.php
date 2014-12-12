<?php

/* SonataProductBundle:Product:view_variations.html.twig */
class __TwigTemplate_9dced82081107e76030933f8349166eb2bdf244590a7996ad85a9b034c854ce9 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
<h2>";
        // line 12
        echo $this->env->getExtension('translator')->getTranslator()->trans("title_list_variations", array(), "SonataProductBundle");
        echo "</h2>

";
        // line 14
        if (($this->getAttribute($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "variations", array()), "count", array()) == 0)) {
            // line 15
            echo "    ";
            echo $this->env->getExtension('translator')->getTranslator()->trans("no_variations_available", array(), "SonataProductBundle");
        } else {
            // line 17
            echo "    <ul>
        ";
            // line 18
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["product"]) ? $context["product"] : $this->getContext($context, "product")), "enabledVariations", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["variation"]) {
                // line 19
                echo "            <li><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_product_view", array("productId" => $this->getAttribute($context["variation"], "id", array()), "slug" => $this->getAttribute($context["variation"], "slug", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["variation"], "name", array()), "html", null, true);
                echo "</a></li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['variation'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 21
            echo "    </ul>
";
        }
    }

    public function getTemplateName()
    {
        return "SonataProductBundle:Product:view_variations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  51 => 21,  40 => 19,  36 => 18,  33 => 17,  29 => 15,  27 => 14,  22 => 12,  19 => 11,);
    }
}

<?php

/* GPIAuctionBundle:Admin:image_preview.html.twig */
class __TwigTemplate_9588ec4098358d718e445b6b4b465ddf3734f8c551da5b1e42c04ade73c555c7 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'name' => array($this, 'block_name'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<th>";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>
    ";
        // line 3
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "documents", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["document"]) {
            // line 4
            echo "    <img style=\"width: 250px\" src=\"/";
            echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "getWebPath", array(), "method"), "html", null, true);
            echo "\" title=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["document"], "getDescription", array(), "method"), "html", null, true);
            echo "\" />
    <br/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['document'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "    ";
        // line 8
        echo "</td>
";
    }

    // line 1
    public function block_name($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array())), "method"), "html", null, true);
    }

    public function getTemplateName()
    {
        return "GPIAuctionBundle:Admin:image_preview.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  49 => 1,  44 => 8,  42 => 7,  30 => 4,  26 => 3,  20 => 1,);
    }
}

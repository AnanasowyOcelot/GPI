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
            'field' => array($this, 'block_field'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<th>";
        $this->displayBlock('name', $context, $blocks);
        echo "</th>
<td>
    <a href=\"/";
        // line 3
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getWebPath", array(), "method"), "html", null, true);
        echo "\" target=\"_blank\">
        <img style=\"width: 350px\" src=\"/";
        // line 4
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getWebPath", array()), "html", null, true);
        echo "\" title=\"";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getDescription", array(), "method"), "html", null, true);
        echo "\"/>
    </a>
    <br/>
    ";
        // line 7
        $this->displayBlock('field', $context, $blocks);
        // line 8
        echo "</td>";
    }

    // line 1
    public function block_name($context, array $blocks = array())
    {
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => $this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "label", array())), "method"), "html", null, true);
    }

    // line 7
    public function block_field($context, array $blocks = array())
    {
        echo nl2br(twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")), "html", null, true));
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
        return array (  51 => 7,  45 => 1,  41 => 8,  39 => 7,  31 => 4,  27 => 3,  21 => 1,);
    }
}

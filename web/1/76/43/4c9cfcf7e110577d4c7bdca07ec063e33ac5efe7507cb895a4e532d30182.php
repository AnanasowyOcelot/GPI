<?php

/* GPIAuctionBundle:Admin:auction_attributes.html.twig */
class __TwigTemplate_76434c9cfcf7e110577d4c7bdca07ec063e33ac5efe7507cb895a4e532d30182 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        echo "<td colspan=\"2\">
";
        // line 2
        $this->displayBlock('name', $context, $blocks);
        // line 3
        if (($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getAttributeValues", array(), "method") != null)) {
            // line 4
            echo "    <table class=\"table table-bordered\">
    ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")), "getAttributeValues", array(), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                // line 6
                echo "        <tr>
            <th>";
                // line 7
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "name", array()), "html", null, true);
                echo "</th>
            <td>";
                // line 8
                echo twig_escape_filter($this->env, $this->getAttribute($context["attribute"], "value", array()), "html", null, true);
                echo "</td>
        </tr>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 11
            echo "    </table>
";
        }
        // line 13
        echo "</td>
";
    }

    // line 2
    public function block_name($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "GPIAuctionBundle:Admin:auction_attributes.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 2,  54 => 13,  50 => 11,  41 => 8,  37 => 7,  34 => 6,  30 => 5,  27 => 4,  25 => 3,  23 => 2,  20 => 1,);
    }
}

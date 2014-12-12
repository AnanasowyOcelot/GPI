<?php

/* SonataBasketBundle:Form:fields.html.twig */
class __TwigTemplate_37304623819b267fef92a718ded9eb04e40dd54c052a6863ea4c837f3ccc46fd extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            '_sonata_basket_shipping_deliveryAddress_widget' => array($this, 'block__sonata_basket_shipping_deliveryAddress_widget'),
            '_sonata_basket_payment_billingAddress_widget' => array($this, 'block__sonata_basket_payment_billingAddress_widget'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('_sonata_basket_shipping_deliveryAddress_widget', $context, $blocks);
        // line 31
        echo "
";
        // line 32
        $this->displayBlock('_sonata_basket_payment_billingAddress_widget', $context, $blocks);
    }

    // line 1
    public function block__sonata_basket_shipping_deliveryAddress_widget($context, array $blocks = array())
    {
        // line 2
        ob_start();
        // line 3
        echo "    ";
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 4
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
        ";
            // line 5
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 6
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
            ";
                // line 7
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label');
                echo "
            <br />
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "        </div>
    ";
        } else {
            // line 12
            echo "        <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                echo " multiple=\"multiple\"";
            }
            echo ">
            ";
            // line 13
            if ( !(null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) {
                // line 14
                echo "                <option value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value"))), "html", null, true);
                echo "</option>
            ";
            }
            // line 16
            echo "            ";
            if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
                // line 17
                echo "                ";
                $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
                // line 18
                echo "                ";
                $this->displayBlock("widget_choice_options", $context, $blocks);
                echo "
                <option disabled=\"disabled\">";
                // line 19
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>
            ";
            }
            // line 21
            echo "            ";
            $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
            // line 22
            echo "            ";
            $this->displayBlock("widget_choice_options", $context, $blocks);
            echo "
        </select>
    ";
        }
        // line 25
        echo "
    ";
        // line 26
        if ((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) == 0)) {
            // line 27
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata.basket.message_no_delivery_addresses_available", array(), "SonataBasketBundle"), "html", null, true);
            echo "</p>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    // line 32
    public function block__sonata_basket_payment_billingAddress_widget($context, array $blocks = array())
    {
        // line 33
        ob_start();
        // line 34
        echo "    ";
        if ((isset($context["expanded"]) ? $context["expanded"] : $this->getContext($context, "expanded"))) {
            // line 35
            echo "        <div ";
            $this->displayBlock("widget_container_attributes", $context, $blocks);
            echo ">
        ";
            // line 36
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["form"]) ? $context["form"] : $this->getContext($context, "form")));
            foreach ($context['_seq'] as $context["_key"] => $context["child"]) {
                // line 37
                echo "            ";
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'widget');
                echo "
            ";
                // line 38
                echo $this->env->getExtension('form')->renderer->searchAndRenderBlock($context["child"], 'label');
                echo "
            <br />
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['child'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "        </div>
    ";
        } else {
            // line 43
            echo "        <select ";
            $this->displayBlock("widget_attributes", $context, $blocks);
            if ((isset($context["multiple"]) ? $context["multiple"] : $this->getContext($context, "multiple"))) {
                echo " multiple=\"multiple\"";
            }
            echo ">
            ";
            // line 44
            if ( !(null === (isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value")))) {
                // line 45
                echo "                <option value=\"\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["empty_value"]) ? $context["empty_value"] : $this->getContext($context, "empty_value"))), "html", null, true);
                echo "</option>
            ";
            }
            // line 47
            echo "            ";
            if ((twig_length_filter($this->env, (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"))) > 0)) {
                // line 48
                echo "                ";
                $context["options"] = (isset($context["preferred_choices"]) ? $context["preferred_choices"] : $this->getContext($context, "preferred_choices"));
                // line 49
                echo "                ";
                $this->displayBlock("widget_choice_options", $context, $blocks);
                echo "
                <option disabled=\"disabled\">";
                // line 50
                echo twig_escape_filter($this->env, (isset($context["separator"]) ? $context["separator"] : $this->getContext($context, "separator")), "html", null, true);
                echo "</option>
            ";
            }
            // line 52
            echo "            ";
            $context["options"] = (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"));
            // line 53
            echo "            ";
            $this->displayBlock("widget_choice_options", $context, $blocks);
            echo "
        </select>
    ";
        }
        // line 56
        echo "
    ";
        // line 57
        if ((twig_length_filter($this->env, (isset($context["choices"]) ? $context["choices"] : $this->getContext($context, "choices"))) == 0)) {
            // line 58
            echo "        <p>";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("sonata.basket.message_no_billing_addresses_available", array(), "SonataBasketBundle"), "html", null, true);
            echo "</p>
    ";
        }
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
    }

    public function getTemplateName()
    {
        return "SonataBasketBundle:Form:fields.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  203 => 58,  201 => 57,  198 => 56,  191 => 53,  188 => 52,  183 => 50,  178 => 49,  175 => 48,  172 => 47,  166 => 45,  164 => 44,  156 => 43,  152 => 41,  143 => 38,  138 => 37,  134 => 36,  129 => 35,  126 => 34,  124 => 33,  121 => 32,  112 => 27,  110 => 26,  107 => 25,  100 => 22,  97 => 21,  92 => 19,  87 => 18,  84 => 17,  81 => 16,  75 => 14,  73 => 13,  65 => 12,  61 => 10,  52 => 7,  47 => 6,  43 => 5,  38 => 4,  35 => 3,  33 => 2,  30 => 1,  26 => 32,  23 => 31,  21 => 1,);
    }
}

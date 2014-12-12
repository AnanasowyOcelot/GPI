<?php

/* SonataCustomerBundle:Addresses:list.html.twig */
class __TwigTemplate_07ad1261d1246245a797f22de1c0370246d8221bdeda2ae2af68c3e8413b0873 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        try {
            $this->parent = $this->env->loadTemplate("SonataUserBundle:Profile:action.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(1);

            throw $e;
        }

        $this->blocks = array(
            'sonata_profile_title' => array($this, 'block_sonata_profile_title'),
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
            'sonata_flash_messages' => array($this, 'block_sonata_flash_messages'),
            'sonata_profile_address_actions' => array($this, 'block_sonata_profile_address_actions'),
            'sonata_profile_address_list' => array($this, 'block_sonata_profile_address_list'),
            'sonata_profile_address_typelist' => array($this, 'block_sonata_profile_address_typelist'),
            'sonata_profile_address_table_headers' => array($this, 'block_sonata_profile_address_table_headers'),
            'sonata_profile_address_row' => array($this, 'block_sonata_profile_address_row'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Profile:action.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_sonata_profile_title($context, array $blocks = array())
    {
        echo $this->env->getExtension('translator')->getTranslator()->trans("address_list", array(), "SonataCustomerBundle");
    }

    // line 6
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        // line 7
        echo "
    ";
        // line 8
        echo "<div class='alert alert-default alert-info'>
    <strong>This is the customer addresses list template. Feel free to override it.</strong>
    <div>This file can be found in <code>{$this->getTemplateName()}</code>.</div>
</div>";        // line 9
        echo "
    ";
        // line 10
        $this->displayBlock('sonata_flash_messages', $context, $blocks);
        // line 13
        echo "
    ";
        // line 14
        $this->displayBlock('sonata_profile_address_actions', $context, $blocks);
        // line 21
        echo "
    ";
        // line 22
        $this->displayBlock('sonata_profile_address_list', $context, $blocks);
        // line 76
        echo "
";
    }

    // line 10
    public function block_sonata_flash_messages($context, array $blocks = array())
    {
        // line 11
        echo "        ";
        $this->env->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig")->display(array_merge($context, array("domain" => "SonataCustomerBundle")));
        // line 12
        echo "    ";
    }

    // line 14
    public function block_sonata_profile_address_actions($context, array $blocks = array())
    {
        // line 15
        echo "        <div class=\"panel\" style=\"height: 35px;\">
            <div class=\"pull-right btn-group\">
                <a class=\"btn btn-success\" href=\"";
        // line 17
        echo $this->env->getExtension('routing')->getUrl("sonata_customer_address_add");
        echo "\"><i class=\"glyphicon glyphicon-plus-sign icon-white\"></i>&nbsp;";
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.address.list.add", array(), "SonataCustomerBundle");
        echo "</a>
            </div>
        </div>
    ";
    }

    // line 22
    public function block_sonata_profile_address_list($context, array $blocks = array())
    {
        // line 23
        echo "
        ";
        // line 24
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["addresses"]) ? $context["addresses"] : $this->getContext($context, "addresses")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["type"] => $context["addressesByType"]) {
            // line 25
            echo "
            ";
            // line 26
            $this->displayBlock('sonata_profile_address_typelist', $context, $blocks);
            // line 73
            echo "        ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['type'], $context['addressesByType'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "
    ";
    }

    // line 26
    public function block_sonata_profile_address_typelist($context, array $blocks = array())
    {
        // line 27
        echo "                <div class=\"panel panel-default\">
                    <div class=\"panel-heading\"><h3 class=\"panel-title\">";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans((isset($context["type"]) ? $context["type"] : $this->getContext($context, "type")), array(), "SonataCustomerBundle"), "html", null, true);
        echo "</h3></div>

                    ";
        // line 30
        if ((twig_length_filter($this->env, (isset($context["addressesByType"]) ? $context["addressesByType"] : $this->getContext($context, "addressesByType"))) > 0)) {
            // line 31
            echo "                        <table class=\"table\">
                            ";
            // line 32
            $this->displayBlock('sonata_profile_address_table_headers', $context, $blocks);
            // line 38
            echo "
                            ";
            // line 39
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["addressesByType"]) ? $context["addressesByType"] : $this->getContext($context, "addressesByType")));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["address"]) {
                // line 40
                echo "                                ";
                $this->displayBlock('sonata_profile_address_row', $context, $blocks);
                // line 63
                echo "                            ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['address'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            echo "                        </table>
                    ";
        } else {
            // line 66
            echo "                        <div class=\"panel-body\">
                            ";
            // line 67
            echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.address.list.no_addresses", array(), "SonataCustomerBundle");
            // line 68
            echo "                        </div>
                    ";
        }
        // line 70
        echo "
                </div>
            ";
    }

    // line 32
    public function block_sonata_profile_address_table_headers($context, array $blocks = array())
    {
        // line 33
        echo "                                <tr>
                                    <th>";
        // line 34
        echo $this->env->getExtension('translator')->getTranslator()->trans("address_full_label", array(), "SonataCustomerBundle");
        echo "</th>
                                    <th>";
        // line 35
        echo $this->env->getExtension('translator')->getTranslator()->trans("address_actions_label", array(), "SonataCustomerBundle");
        echo "</th>
                                </tr>
                            ";
    }

    // line 40
    public function block_sonata_profile_address_row($context, array $blocks = array())
    {
        // line 41
        echo "                                <tr>
                                    <td><a href=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_customer_address_edit", array("id" => $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "id", array()))), "html", null, true);
        echo "\">";
        echo $this->env->getExtension('sonata_address')->renderAddress($this->env, (isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), true, false);
        echo "</a></td>
                                    <td style=\"width: 30%;\">
                                        <div>
                                            <form action=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_customer_address_delete", array("id" => $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "id", array()))), "html", null, true);
        echo "\" method=\"post\" onsubmit=\"return confirm('";
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.address.list.delete_confirm", array(), "SonataCustomerBundle");
        echo "');\" style=\"display:inline;\">
                                                <button type=\"submit\" class=\"btn btn-danger\">
                                                    <i class=\"glyphicon glyphicon-trash icon-white\"></i>&nbsp;";
        // line 47
        echo $this->env->getExtension('translator')->getTranslator()->trans("sonata.address.list.delete", array(), "SonataCustomerBundle");
        // line 48
        echo "                                                </button>
                                            </form>
                                            ";
        // line 50
        if ((twig_length_filter($this->env, (isset($context["addressesByType"]) ? $context["addressesByType"] : $this->getContext($context, "addressesByType"))) > 1)) {
            // line 51
            echo "                                                ";
            if ($this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "current", array())) {
                // line 52
                echo "                                                    <a style=\"display:inline;\" class=\"btn btn-default disabled\" href=\"#\"><i class=\"glyphicon glyphicon-ok icon-white\"></i>&nbsp;";
                echo $this->env->getExtension('translator')->getTranslator()->trans("address_list_default", array(), "SonataCustomerBundle");
                echo "</a>
                                                ";
            } else {
                // line 54
                echo "                                                    <form action=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("sonata_customer_address_setcurrent", array("id" => $this->getAttribute((isset($context["address"]) ? $context["address"] : $this->getContext($context, "address")), "id", array()))), "html", null, true);
                echo "\" method=\"post\" style=\"display:inline;\">
                                                        <input class=\"btn btn-primary\" type=\"submit\" value=\"";
                // line 55
                echo $this->env->getExtension('translator')->getTranslator()->trans("address_list_set_current", array(), "SonataCustomerBundle");
                echo "\" />
                                                    </form>
                                                ";
            }
            // line 58
            echo "                                            ";
        }
        // line 59
        echo "                                        </div>
                                    </td>
                                </tr>
                                ";
    }

    public function getTemplateName()
    {
        return "SonataCustomerBundle:Addresses:list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  296 => 59,  293 => 58,  287 => 55,  282 => 54,  276 => 52,  273 => 51,  271 => 50,  267 => 48,  265 => 47,  258 => 45,  250 => 42,  247 => 41,  244 => 40,  237 => 35,  233 => 34,  230 => 33,  227 => 32,  221 => 70,  217 => 68,  215 => 67,  212 => 66,  208 => 64,  194 => 63,  191 => 40,  174 => 39,  171 => 38,  169 => 32,  166 => 31,  164 => 30,  159 => 28,  156 => 27,  153 => 26,  148 => 74,  134 => 73,  132 => 26,  129 => 25,  112 => 24,  109 => 23,  106 => 22,  96 => 17,  92 => 15,  89 => 14,  85 => 12,  82 => 11,  79 => 10,  74 => 76,  72 => 22,  69 => 21,  67 => 14,  64 => 13,  62 => 10,  59 => 9,  55 => 8,  52 => 7,  49 => 6,  43 => 4,  11 => 1,);
    }
}

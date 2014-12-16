<?php

/* FOSUserBundle:Profile:show.html.twig */
class __TwigTemplate_70bdfecbc8ef3da1eff45412d7481faf1bc9e9d9212e683accb63eb0eed9754a extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        try {
            $this->parent = $this->env->loadTemplate("SonataUserBundle:Profile:action.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(12);

            throw $e;
        }

        $this->blocks = array(
            'sonata_profile_content' => array($this, 'block_sonata_profile_content'),
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

    // line 13
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        // line 14
        echo "
    <div class=\"table-responsive\">
        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th></th>
                <th class=\"hidden-sm\">Oferta</th>
                <th>Opcje</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>

            ";
        // line 27
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["auctions"]) ? $context["auctions"] : $this->getContext($context, "auctions")));
        foreach ($context['_seq'] as $context["_key"] => $context["auction"]) {
            // line 28
            echo "
                <tr>
                    <td>
                        <img class=\"rounded-x\" src=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($context["auction"], "getMainPhoto", array(), "method"), "html", null, true);
            echo "\" alt=\"\">
                    </td>
                    <td class=\"td-width\">
                        <h3>";
            // line 34
            echo twig_escape_filter($this->env, $this->getAttribute($context["auction"], "name", array()), "html", null, true);
            echo "</h3>

                        <p>";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute($context["auction"], "getContentShort", array(), "method"), "html", null, true);
            echo "</p>
                        <small class=\"hex\">Zakończenie ";
            // line 37
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["auction"], "getEndTime", array(), "method"), "format", array(0 => "Y-m-d H:i:s"), "method"), "html", null, true);
            echo "</small>
                    </td>
                    <td>
                        <p><a href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_details", array("id" => $this->getAttribute($context["auction"], "id", array()))), "html", null, true);
            echo "\">Szczegóły</a></p>

                        <p><a href=\"";
            // line 42
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_edit", array("id" => $this->getAttribute($context["auction"], "id", array()))), "html", null, true);
            echo "\">Edytuj</a></p>

                        <p><a href=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_cancel", array("id" => $this->getAttribute($context["auction"], "id", array()))), "html", null, true);
            echo "\">Anuluj</a></p>
                    </td>
                    <td>
                            <span class=\"";
            // line 47
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["statusArray"]) ? $context["statusArray"] : $this->getContext($context, "statusArray")), $this->getAttribute($context["auction"], "getStatus", array(), "method"), array(), "array"), "html", null, true);
            echo "\">
                                ";
            // line 48
            echo twig_escape_filter($this->env, $this->getAttribute($context["auction"], "getStatusText", array(), "method"), "html", null, true);
            echo "
                            </span>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "
            </tbody>
        </table>
    </div>


    <div class=\"row row-fluid\">
        ";
        // line 60
        $context["has_center"] = false;
        // line 61
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 62
            echo "            ";
            if (($this->getAttribute($context["block"], "position", array()) == "center")) {
                // line 63
                echo "                ";
                $context["has_center"] = true;
                // line 64
                echo "            ";
            }
            // line 65
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "        <div class=\"";
        if ((isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            echo "span4 col-lg-4";
        } else {
            echo "span6 col-lg-6";
        }
        echo "\">
            ";
        // line 67
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 68
            echo "                ";
            if (($this->getAttribute($context["block"], "position", array()) == "left")) {
                // line 69
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                echo "
                ";
            }
            // line 71
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 72
        echo "        </div>

        ";
        // line 74
        if ((isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            // line 75
            echo "            <div class=\"span4 col-lg-4\">
                ";
            // line 76
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 77
                echo "                    ";
                if (($this->getAttribute($context["block"], "position", array()) == "center")) {
                    // line 78
                    echo "                        ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                    echo "
                    ";
                }
                // line 80
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 81
            echo "            </div>
        ";
        }
        // line 83
        echo "
        <div class=\"";
        // line 84
        if ((isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            echo "span4 col-lg-4";
        } else {
            echo "span6 col-lg-6";
        }
        echo "\">
            ";
        // line 85
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 86
            echo "                ";
            if (($this->getAttribute($context["block"], "position", array()) == "right")) {
                // line 87
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                echo "
                ";
            }
            // line 89
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 90
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  236 => 90,  230 => 89,  224 => 87,  221 => 86,  217 => 85,  209 => 84,  206 => 83,  202 => 81,  196 => 80,  190 => 78,  187 => 77,  183 => 76,  180 => 75,  178 => 74,  174 => 72,  168 => 71,  162 => 69,  159 => 68,  155 => 67,  146 => 66,  140 => 65,  137 => 64,  134 => 63,  131 => 62,  126 => 61,  124 => 60,  115 => 53,  104 => 48,  100 => 47,  94 => 44,  89 => 42,  84 => 40,  78 => 37,  74 => 36,  69 => 34,  63 => 31,  58 => 28,  54 => 27,  39 => 14,  36 => 13,  11 => 12,);
    }
}

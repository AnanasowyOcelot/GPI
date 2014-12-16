<?php

/* SonataUserBundle:Profile:show.html.twig */
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
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_details", array("id" => $this->getAttribute($context["auction"], "id", array()))), "html", null, true);
            echo "\">Szczegóły</a></p>
                        ";
            // line 42
            if ($this->getAttribute($context["auction"], "isActive", array(), "method")) {
                // line 43
                echo "                            <p><a href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_edit", array("id" => $this->getAttribute($context["auction"], "id", array()))), "html", null, true);
                echo "\">Edytuj</a></p>

                            <p><a href=\"";
                // line 45
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_cancel", array("id" => $this->getAttribute($context["auction"], "id", array()))), "html", null, true);
                echo "\">Anuluj</a></p>
                        ";
            }
            // line 47
            echo "                    </td>
                    <td>
                            <span class=\"";
            // line 49
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auctionStatus"]) ? $context["auctionStatus"] : $this->getContext($context, "auctionStatus")), "label", array(0 => $this->getAttribute($context["auction"], "getStatus", array(), "method")), "method"), "html", null, true);
            echo "\">
                                ";
            // line 50
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auctionStatus"]) ? $context["auctionStatus"] : $this->getContext($context, "auctionStatus")), "name", array(0 => $this->getAttribute($context["auction"], "getStatus", array(), "method")), "method"), "html", null, true);
            echo "
                            </span>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['auction'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "
            </tbody>
        </table>
    </div>


    <div class=\"row row-fluid\">
        ";
        // line 62
        $context["has_center"] = false;
        // line 63
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 64
            echo "            ";
            if (($this->getAttribute($context["block"], "position", array()) == "center")) {
                // line 65
                echo "                ";
                $context["has_center"] = true;
                // line 66
                echo "            ";
            }
            // line 67
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 68
        echo "        <div class=\"";
        if ((isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            echo "span4 col-lg-4";
        } else {
            echo "span6 col-lg-6";
        }
        echo "\">
            ";
        // line 69
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 70
            echo "                ";
            if (($this->getAttribute($context["block"], "position", array()) == "left")) {
                // line 71
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                echo "
                ";
            }
            // line 73
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "        </div>

        ";
        // line 76
        if ((isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            // line 77
            echo "            <div class=\"span4 col-lg-4\">
                ";
            // line 78
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 79
                echo "                    ";
                if (($this->getAttribute($context["block"], "position", array()) == "center")) {
                    // line 80
                    echo "                        ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                    echo "
                    ";
                }
                // line 82
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 83
            echo "            </div>
        ";
        }
        // line 85
        echo "
        <div class=\"";
        // line 86
        if ((isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            echo "span4 col-lg-4";
        } else {
            echo "span6 col-lg-6";
        }
        echo "\">
            ";
        // line 87
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 88
            echo "                ";
            if (($this->getAttribute($context["block"], "position", array()) == "right")) {
                // line 89
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                echo "
                ";
            }
            // line 91
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "        </div>
    </div>
";
    }

    public function getTemplateName()
    {
        return "SonataUserBundle:Profile:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  242 => 92,  236 => 91,  230 => 89,  227 => 88,  223 => 87,  215 => 86,  212 => 85,  208 => 83,  202 => 82,  196 => 80,  193 => 79,  189 => 78,  186 => 77,  184 => 76,  180 => 74,  174 => 73,  168 => 71,  165 => 70,  161 => 69,  152 => 68,  146 => 67,  143 => 66,  140 => 65,  137 => 64,  132 => 63,  130 => 62,  121 => 55,  110 => 50,  106 => 49,  102 => 47,  97 => 45,  91 => 43,  89 => 42,  85 => 41,  78 => 37,  74 => 36,  69 => 34,  63 => 31,  58 => 28,  54 => 27,  39 => 14,  36 => 13,  11 => 12,);
    }
}

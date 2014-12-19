<?php

/* SonataUserBundle:Profile:show.html.twig */
class __TwigTemplate_70bdfecbc8ef3da1eff45412d7481faf1bc9e9d9212e683accb63eb0eed9754a extends Sonata\CacheBundle\Twig\TwigTemplate14
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

    // line 2
    public function block_sonata_profile_content($context, array $blocks = array())
    {
        // line 3
        echo "
    <div class=\"table-responsive auction-list\">
        <table class=\"table table-hover\">
            <thead>
            <tr>
                <th></th>
                <th class=\"hidden-sm\">Aukcja</th>
                <th>Opcje</th>
                <th>Status</th>
            </tr>
            </thead>
            <tbody>

            ";
        // line 16
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["auctions"]) ? $context["auctions"] : $this->getContext($context, "auctions")));
        foreach ($context['_seq'] as $context["_key"] => $context["auction"]) {
            // line 17
            echo "                <tr>
                    <td>
                        <img class=\"rounded-x\" src=\"";
            // line 19
            echo twig_escape_filter($this->env, $this->getAttribute($context["auction"], "getMainPhoto", array(), "method"), "html", null, true);
            echo "\" alt=\"\">
                    </td>
                    <td>
                        <h3 class=\"auction-name\">";
            // line 22
            echo twig_escape_filter($this->env, $this->getAttribute($context["auction"], "name", array()), "html", null, true);
            echo "</h3>

                        <p>";
            // line 24
            echo twig_escape_filter($this->env, $this->getAttribute($context["auction"], "getContentShort", array(), "method"), "html", null, true);
            echo "</p>
                        <small class=\"hex\">Zakończenie ";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["auction"], "getEndTime", array(), "method"), "format", array(0 => "Y-m-d H:i:s"), "method"), "html", null, true);
            echo "</small>
                    </td>
                    <td>
                        <p><a class=\"btn-u btn-u-blue\" href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_details", array("id" => $this->getAttribute($context["auction"], "id", array()))), "html", null, true);
            echo "\">Szczegóły</a></p>
                        ";
            // line 29
            if ($this->getAttribute($context["auction"], "isActive", array(), "method")) {
                // line 30
                echo "                            <p><a class=\"btn-u btn-u-blue\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_edit", array("id" => $this->getAttribute($context["auction"], "id", array()))), "html", null, true);
                echo "\">Edytuj</a></p>

                            <p><a class=\"btn-u btn-u-red\" href=\"";
                // line 32
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_cancel", array("id" => $this->getAttribute($context["auction"], "id", array()))), "html", null, true);
                echo "\">Anuluj</a></p>
                        ";
            }
            // line 34
            echo "                    </td>
                    <td>
                        <span class=\"";
            // line 36
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["auctionStatus"]) ? $context["auctionStatus"] : $this->getContext($context, "auctionStatus")), "label", array(0 => $this->getAttribute($context["auction"], "getStatus", array(), "method")), "method"), "html", null, true);
            echo "\">
                            ";
            // line 37
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
        // line 42
        echo "
            </tbody>
        </table>
    </div>


    <div class=\"row row-fluid\">
        ";
        // line 49
        $context["has_center"] = false;
        // line 50
        echo "        ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 51
            echo "            ";
            if (($this->getAttribute($context["block"], "position", array()) == "center")) {
                // line 52
                echo "                ";
                $context["has_center"] = true;
                // line 53
                echo "            ";
            }
            // line 54
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "        <div class=\"";
        if ((isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            echo "span4 col-lg-4";
        } else {
            echo "span6 col-lg-6";
        }
        echo "\">
            ";
        // line 56
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 57
            echo "                ";
            if (($this->getAttribute($context["block"], "position", array()) == "left")) {
                // line 58
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                echo "
                ";
            }
            // line 60
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        </div>

        ";
        // line 63
        if ((isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            // line 64
            echo "            <div class=\"span4 col-lg-4\">
                ";
            // line 65
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
            foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
                // line 66
                echo "                    ";
                if (($this->getAttribute($context["block"], "position", array()) == "center")) {
                    // line 67
                    echo "                        ";
                    echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                    echo "
                    ";
                }
                // line 69
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 70
            echo "            </div>
        ";
        }
        // line 72
        echo "
        <div class=\"";
        // line 73
        if ((isset($context["has_center"]) ? $context["has_center"] : $this->getContext($context, "has_center"))) {
            echo "span4 col-lg-4";
        } else {
            echo "span6 col-lg-6";
        }
        echo "\">
            ";
        // line 74
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["blocks"]) ? $context["blocks"] : $this->getContext($context, "blocks")));
        foreach ($context['_seq'] as $context["_key"] => $context["block"]) {
            // line 75
            echo "                ";
            if (($this->getAttribute($context["block"], "position", array()) == "right")) {
                // line 76
                echo "                    ";
                echo call_user_func_array($this->env->getFunction('sonata_block_render')->getCallable(), array(array("type" => $this->getAttribute($context["block"], "type", array()), "settings" => $this->getAttribute($context["block"], "settings", array()))));
                echo "
                ";
            }
            // line 78
            echo "            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['block'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
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
        return array (  240 => 79,  234 => 78,  228 => 76,  225 => 75,  221 => 74,  213 => 73,  210 => 72,  206 => 70,  200 => 69,  194 => 67,  191 => 66,  187 => 65,  184 => 64,  182 => 63,  178 => 61,  172 => 60,  166 => 58,  163 => 57,  159 => 56,  150 => 55,  144 => 54,  141 => 53,  138 => 52,  135 => 51,  130 => 50,  128 => 49,  119 => 42,  108 => 37,  104 => 36,  100 => 34,  95 => 32,  89 => 30,  87 => 29,  83 => 28,  77 => 25,  73 => 24,  68 => 22,  62 => 19,  58 => 17,  54 => 16,  39 => 3,  36 => 2,  11 => 1,);
    }
}

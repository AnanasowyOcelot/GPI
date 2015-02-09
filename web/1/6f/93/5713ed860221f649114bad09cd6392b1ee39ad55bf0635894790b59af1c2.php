<?php

/* GPISonataBlockBundle:Block:block_core_categories_main.html.twig */
class __TwigTemplate_6f935713ed860221f649114bad09cd6392b1ee39ad55bf0635894790b59af1c2 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'block' => array($this, 'block_block'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('block', $context, $blocks);
    }

    public function block_block($context, array $blocks = array())
    {
        // line 2
        echo "

    </div>

    <div class=\"row main-menu\" style=\"margin-left: 15px\">
        <div class=\"row col-sm-6 col-md-4\">
            <div class=\"col-sm-12\">
                <ul>
                    ";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoriesCol0"]) ? $context["categoriesCol0"] : $this->getContext($context, "categoriesCol0")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 11
            echo "                        <li><i class=\"fa fa-chevron-circle-right\"></i> <a
                                    href=\"";
            // line 12
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_auctions_by_category", array("categorySlug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>
                            ";
            // line 13
            if (($this->getAttribute((isset($context["numbersDict"]) ? $context["numbersDict"] : $this->getContext($context, "numbersDict")), $this->getAttribute($context["category"], "id", array()), array(), "array") > 0)) {
                // line 14
                echo "                                <span class=\"badge rounded badge-light\">
                                    ";
                // line 15
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["numbersDict"]) ? $context["numbersDict"] : $this->getContext($context, "numbersDict")), $this->getAttribute($context["category"], "id", array()), array(), "array"), "html", null, true);
                echo "
                                 </span>
                            ";
            }
            // line 17
            echo "</li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "                </ul>
            </div>
            <div class=\"col-sm-12\">
                <ul>
                    ";
        // line 23
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoriesCol1"]) ? $context["categoriesCol1"] : $this->getContext($context, "categoriesCol1")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 24
            echo "                        <li><i class=\"fa fa-chevron-circle-right\"></i> <a
                                    href=\"";
            // line 25
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_auctions_by_category", array("categorySlug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>
                            ";
            // line 26
            if (($this->getAttribute((isset($context["numbersDict"]) ? $context["numbersDict"] : $this->getContext($context, "numbersDict")), $this->getAttribute($context["category"], "id", array()), array(), "array") > 0)) {
                // line 27
                echo "                                <span class=\"badge rounded badge-light\">
                                    ";
                // line 28
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["numbersDict"]) ? $context["numbersDict"] : $this->getContext($context, "numbersDict")), $this->getAttribute($context["category"], "id", array()), array(), "array"), "html", null, true);
                echo "
                                 </span>
                            ";
            }
            // line 30
            echo "</li></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "                </ul>
            </div>
        </div>
        <div class=\"row col-sm-6 col-md-4\">
            <div class=\"col-sm-12\">
                <ul>
                    ";
        // line 38
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoriesCol2"]) ? $context["categoriesCol2"] : $this->getContext($context, "categoriesCol2")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 39
            echo "                        <li><i class=\"fa fa-chevron-circle-right\"></i> <a
                                    href=\"";
            // line 40
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_auctions_by_category", array("categorySlug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>
                            ";
            // line 41
            if (($this->getAttribute((isset($context["numbersDict"]) ? $context["numbersDict"] : $this->getContext($context, "numbersDict")), $this->getAttribute($context["category"], "id", array()), array(), "array") > 0)) {
                // line 42
                echo "                                <span class=\"badge rounded badge-light\">
                                    ";
                // line 43
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["numbersDict"]) ? $context["numbersDict"] : $this->getContext($context, "numbersDict")), $this->getAttribute($context["category"], "id", array()), array(), "array"), "html", null, true);
                echo "
                                 </span>
                            ";
            }
            // line 45
            echo "</li></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "                </ul>
            </div>
            <div class=\"col-sm-12\">
                <ul>
                    ";
        // line 51
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoriesCol3"]) ? $context["categoriesCol3"] : $this->getContext($context, "categoriesCol3")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 52
            echo "                        <li><i class=\"fa fa-chevron-circle-right\"></i> <a
                                    href=\"";
            // line 53
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_auctions_by_category", array("categorySlug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>
                            ";
            // line 54
            if (($this->getAttribute((isset($context["numbersDict"]) ? $context["numbersDict"] : $this->getContext($context, "numbersDict")), $this->getAttribute($context["category"], "id", array()), array(), "array") > 0)) {
                // line 55
                echo "                                <span class=\"badge rounded badge-light\">
                                    ";
                // line 56
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["numbersDict"]) ? $context["numbersDict"] : $this->getContext($context, "numbersDict")), $this->getAttribute($context["category"], "id", array()), array(), "array"), "html", null, true);
                echo "
                                 </span>
                            ";
            }
            // line 58
            echo "</li></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "                </ul>
            </div>
        </div>
        <div class=\"row col-sm-6 col-md-4\">
            <div class=\"col-sm-6\">
                <ul>
                    ";
        // line 66
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoriesCol4"]) ? $context["categoriesCol4"] : $this->getContext($context, "categoriesCol4")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 67
            echo "                        <li><i class=\"fa fa-chevron-circle-right\"></i> <a
                                    href=\"";
            // line 68
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_auctions_by_category", array("categorySlug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>
                            ";
            // line 69
            if (($this->getAttribute((isset($context["numbersDict"]) ? $context["numbersDict"] : $this->getContext($context, "numbersDict")), $this->getAttribute($context["category"], "id", array()), array(), "array") > 0)) {
                // line 70
                echo "                                <span class=\"badge rounded badge-light\">
                                    ";
                // line 71
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["numbersDict"]) ? $context["numbersDict"] : $this->getContext($context, "numbersDict")), $this->getAttribute($context["category"], "id", array()), array(), "array"), "html", null, true);
                echo "
                                 </span>
                            ";
            }
            // line 73
            echo "</li></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 75
        echo "                </ul>
            </div>
            <div class=\"col-sm-6\">
                <ul>
                    ";
        // line 79
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoriesCol5"]) ? $context["categoriesCol5"] : $this->getContext($context, "categoriesCol5")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 80
            echo "                        <li><i class=\"fa fa-chevron-circle-right\"></i> <a
                                    href=\"";
            // line 81
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_auctions_by_category", array("categorySlug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>
                            ";
            // line 82
            if (($this->getAttribute((isset($context["numbersDict"]) ? $context["numbersDict"] : $this->getContext($context, "numbersDict")), $this->getAttribute($context["category"], "id", array()), array(), "array") > 0)) {
                // line 83
                echo "                                <span class=\"badge rounded badge-light\">
                                    ";
                // line 84
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["numbersDict"]) ? $context["numbersDict"] : $this->getContext($context, "numbersDict")), $this->getAttribute($context["category"], "id", array()), array(), "array"), "html", null, true);
                echo "
                                 </span>
                            ";
            }
            // line 86
            echo "</li></li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 88
        echo "                </ul>
            </div>
        </div>
    </div>

    <style>
        .main-menu ul {
            margin: 0;
            padding: 0;
        }

        .main-menu li {
            list-style-type: none;
            position: relative;
        }

        .main-menu li {
            font-size: 15px;
        }
    </style>
";
    }

    public function getTemplateName()
    {
        return "GPISonataBlockBundle:Block:block_core_categories_main.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  256 => 88,  249 => 86,  243 => 84,  240 => 83,  238 => 82,  232 => 81,  229 => 80,  225 => 79,  219 => 75,  212 => 73,  206 => 71,  203 => 70,  201 => 69,  195 => 68,  192 => 67,  188 => 66,  180 => 60,  173 => 58,  167 => 56,  164 => 55,  162 => 54,  156 => 53,  153 => 52,  149 => 51,  143 => 47,  136 => 45,  130 => 43,  127 => 42,  125 => 41,  119 => 40,  116 => 39,  112 => 38,  104 => 32,  97 => 30,  91 => 28,  88 => 27,  86 => 26,  80 => 25,  77 => 24,  73 => 23,  67 => 19,  60 => 17,  54 => 15,  51 => 14,  49 => 13,  43 => 12,  40 => 11,  36 => 10,  26 => 2,  20 => 1,);
    }
}

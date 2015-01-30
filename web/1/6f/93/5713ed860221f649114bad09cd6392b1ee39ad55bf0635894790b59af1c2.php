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

    <div class=\"row main-menu\">
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
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 15
        echo "                </ul>
            </div>
            <div class=\"col-sm-12\">
                <ul>
                    ";
        // line 19
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoriesCol1"]) ? $context["categoriesCol1"] : $this->getContext($context, "categoriesCol1")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 20
            echo "                        <li><i class=\"fa fa-chevron-circle-right\"></i> <a
                                    href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_auctions_by_category", array("categorySlug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 24
        echo "                </ul>
            </div>
        </div>
        <div class=\"row col-sm-6 col-md-4\">
            <div class=\"col-sm-12\">
                <ul >
                    ";
        // line 30
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoriesCol2"]) ? $context["categoriesCol2"] : $this->getContext($context, "categoriesCol2")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 31
            echo "                        <li><i class=\"fa fa-chevron-circle-right\"></i> <a
                                    href=\"";
            // line 32
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_auctions_by_category", array("categorySlug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 35
        echo "                </ul>
            </div>
            <div class=\"col-sm-12\">
                <ul >
                    ";
        // line 39
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoriesCol3"]) ? $context["categoriesCol3"] : $this->getContext($context, "categoriesCol3")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 40
            echo "                        <li><i class=\"fa fa-chevron-circle-right\"></i> <a
                                    href=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_auctions_by_category", array("categorySlug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 44
        echo "                </ul>
            </div>
        </div>
        <div class=\"row col-sm-6 col-md-4\">
            <div class=\"col-sm-6\">
                <ul>
                    ";
        // line 50
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoriesCol4"]) ? $context["categoriesCol4"] : $this->getContext($context, "categoriesCol4")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 51
            echo "                        <li><i class=\"fa fa-chevron-circle-right\"></i> <a
                                    href=\"";
            // line 52
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_auctions_by_category", array("categorySlug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 55
        echo "                </ul>
            </div>
            <div class=\"col-sm-6\">
                <ul>
                    ";
        // line 59
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["categoriesCol5"]) ? $context["categoriesCol5"] : $this->getContext($context, "categoriesCol5")));
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 60
            echo "                        <li><i class=\"fa fa-chevron-circle-right\"></i> <a
                                    href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_auctions_by_category", array("categorySlug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
            echo "</a>
                        </li>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
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
        return array (  178 => 64,  167 => 61,  164 => 60,  160 => 59,  154 => 55,  143 => 52,  140 => 51,  136 => 50,  128 => 44,  117 => 41,  114 => 40,  110 => 39,  104 => 35,  93 => 32,  90 => 31,  86 => 30,  78 => 24,  67 => 21,  64 => 20,  60 => 19,  54 => 15,  43 => 12,  40 => 11,  36 => 10,  26 => 2,  20 => 1,);
    }
}

<?php

/* GPISonataBlockBundle:Block:block_core_categories.html.twig */
class __TwigTemplate_9f7ca8dca5485e260453b909de342fd6afd4f2e8f2154fba065d31b26b4c7328 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        // line 44
        echo "
";
        // line 45
        $this->displayBlock('block', $context, $blocks);
        // line 81
        echo "
";
    }

    // line 45
    public function block_block($context, array $blocks = array())
    {
        // line 46
        echo "
    ";
        // line 48
        echo "    <ul class=\"main-menu list-group sidebar-nav-v1\" id=\"sidebar-nav\">
        ";
        // line 49
        echo $this->getAttribute($this, "menu_categories", array(0 => (isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")), 1 => (isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")), 2 => (isset($context["numbersDict"]) ? $context["numbersDict"] : $this->getContext($context, "numbersDict")), 3 => (isset($context["parentSlug"]) ? $context["parentSlug"] : $this->getContext($context, "parentSlug"))), "method");
        echo "

    </ul>
    ";
        // line 53
        echo "    ";
        // line 79
        echo "
    <script type=\"application/javascript\">

    </script>

    <style>

        .main-menu li {
            width: 100%;
        }

        .main-menu .list-toggle:after {
            display: none;
        }

        .main-menu.sidebar-nav-v1 li ul a {
            border: none;
        }

        .sidebar-nav-v1 li ul, .sidebar-nav-v1 li.active ul a {

            background: #ffffff;
        }


    </style>
    ";
        echo "
";
    }

    // line 1
    public function getmenu_categories($__categories__ = null, $__slug__ = null, $__numbersDict__ = null, $__parentSlug__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "categories" => $__categories__,
            "slug" => $__slug__,
            "numbersDict" => $__numbersDict__,
            "parentSlug" => $__parentSlug__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "    ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")));
            foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
                // line 3
                echo "        ";
                $context["class"] = "";
                // line 4
                echo "        ";
                if (((($this->getAttribute($context["category"], "slug", array()) == (isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug"))) && (null === $this->getAttribute($this->getAttribute($this->getAttribute($context["category"], "entity", array()), "parent", array()), "parent", array()))) || ($this->getAttribute($context["category"], "slug", array()) == (isset($context["parentSlug"]) ? $context["parentSlug"] : $this->getContext($context, "parentSlug"))))) {
                    // line 5
                    echo "            ";
                    $context["class"] = "active accordion-toggle";
                    // line 6
                    echo "            ";
                    $context["classA"] = "";
                    // line 7
                    echo "            ";
                    $context["classUL"] = "collapse in";
                    // line 8
                    echo "            ";
                    $context["classLI"] = "list-group-item list-toggle active";
                    // line 9
                    echo "
        ";
                } else {
                    // line 11
                    echo "            ";
                    $context["class"] = "accordion-toggle collapsed";
                    // line 12
                    echo "            ";
                    $context["classA"] = "collapsed";
                    // line 13
                    echo "            ";
                    $context["classUL"] = "collapse";
                    // line 14
                    echo "            ";
                    $context["classLI"] = "list-group-item list-toggle";
                    // line 15
                    echo "
        ";
                }
                // line 17
                echo "        <li class=\"";
                echo twig_escape_filter($this->env, (isset($context["classLI"]) ? $context["classLI"] : $this->getContext($context, "classLI")), "html", null, true);
                echo "\" style=\"overflow: hidden;\">

            <a class=\"";
                // line 19
                echo twig_escape_filter($this->env, (isset($context["classA"]) ? $context["classA"] : $this->getContext($context, "classA")), "html", null, true);
                echo " \" style=\"display: inline; line-height: 34px;\"
               href=\"";
                // line 20
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_auctions_by_category", array("categorySlug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
                echo "\">
                ";
                // line 21
                if (($this->getAttribute($context["category"], "slug", array()) == (isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")))) {
                    echo "&#8226&nbsp;";
                }
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "
                ";
                // line 22
                if (($this->getAttribute((isset($context["numbersDict"]) ? $context["numbersDict"] : $this->getContext($context, "numbersDict")), $this->getAttribute($this->getAttribute($context["category"], "entity", array()), "id", array()), array(), "array") > 0)) {
                    // line 23
                    echo "                <span class=\"badge rounded badge-light\">
                    ";
                    // line 24
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["numbersDict"]) ? $context["numbersDict"] : $this->getContext($context, "numbersDict")), $this->getAttribute($this->getAttribute($context["category"], "entity", array()), "id", array()), array(), "array"), "html", null, true);
                    echo "
                </span>
                ";
                }
                // line 27
                echo "            </a>

            ";
                // line 29
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 30
                    echo "                <a class=\"";
                    echo twig_escape_filter($this->env, (isset($context["classA"]) ? $context["classA"] : $this->getContext($context, "classA")), "html", null, true);
                    echo " \" style=\"display: inline; position: absolute; right: 0;\"
                   data-toggle=\"collapse\"
                   data-parent=\"#sidebar-nav\"
                   href=\"#collapse-";
                    // line 33
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "slug", array()), "html", null, true);
                    echo "\">&raquo;
                </a>

                <ul id=\"collapse-";
                    // line 36
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "slug", array()), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, (isset($context["classUL"]) ? $context["classUL"] : $this->getContext($context, "classUL")), "html", null, true);
                    echo "\">
                  ";
                    // line 37
                    echo $this->getAttribute($this, "menu_categories", array(0 => $this->getAttribute($context["category"], "children", array()), 1 => (isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")), 2 => (isset($context["numbersDict"]) ? $context["numbersDict"] : $this->getContext($context, "numbersDict")), 3 => (isset($context["parentSlug"]) ? $context["parentSlug"] : $this->getContext($context, "parentSlug"))), "method");
                    echo "

                </ul>
            ";
                }
                // line 41
                echo "        </li>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['category'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "GPISonataBlockBundle:Block:block_core_categories.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  200 => 41,  193 => 37,  187 => 36,  181 => 33,  174 => 30,  172 => 29,  168 => 27,  162 => 24,  159 => 23,  157 => 22,  150 => 21,  146 => 20,  142 => 19,  136 => 17,  132 => 15,  129 => 14,  126 => 13,  123 => 12,  120 => 11,  116 => 9,  113 => 8,  110 => 7,  107 => 6,  104 => 5,  101 => 4,  98 => 3,  93 => 2,  79 => 1,  47 => 79,  45 => 53,  39 => 49,  36 => 48,  33 => 46,  30 => 45,  25 => 81,  23 => 45,  20 => 44,);
    }
}

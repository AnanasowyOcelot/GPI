<?php

/* GPISonataBlockBundle:Block:block_core_categories.html.twig */
class __TwigTemplate_cd2e1beb42bb9a53988824c601a3ee8b152252f49ac0bdcdb0eb70e780ec0d29 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
        // line 46
        echo "
";
        // line 47
        $this->displayBlock('block', $context, $blocks);
        // line 117
        echo "
";
    }

    // line 47
    public function block_block($context, array $blocks = array())
    {
        // line 48
        echo "    ";
        // line 49
        echo "

    ";
        // line 52
        echo "    ";
        // line 53
        echo "    ";
        // line 54
        echo "    ";
        // line 55
        echo "
    ";
        // line 57
        echo "    ";
        // line 58
        echo "
    ";
        // line 60
        echo "    ";
        // line 61
        echo "    <ul class=\"main-menu list-group sidebar-nav-v1\" id=\"sidebar-nav\">
        <!-- Typography -->
        ";
        // line 63
        echo $this->getAttribute($this, "menu_categories", array(0 => (isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")), 1 => (isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")), 2 => (isset($context["numbersDict"]) ? $context["numbersDict"] : $this->getContext($context, "numbersDict")), 3 => (isset($context["parentSlug"]) ? $context["parentSlug"] : $this->getContext($context, "parentSlug"))), "method");
        echo "
        ";
        // line 65
        echo "        ";
        // line 66
        echo "        ";
        // line 67
        echo "        ";
        // line 68
        echo "        ";
        // line 69
        echo "        ";
        // line 70
        echo "        <!-- End Typography -->

    </ul>
    ";
        // line 74
        echo "    ";
        // line 115
        echo "
    <script type=\"application/javascript\">
        //        jQuery(document).ready(function () {
        //            var mainMenu = jQuery('.main-menu');
        //            jQuery('.buttonToggle', mainMenu).click(function () {
        //                jQuery(this).closest('li').find('> ul').toggle();
        //            });
        //            jQuery('ul', mainMenu).hide();
        //            jQuery('a.active', mainMenu)
        //                    .closest('ul').show()
        //                    .closest('ul').show();
        //        });
    </script>

    <style>
        /*.main-menu .active {*/
        /*font-weight: bold;*/
        /*}*/

        /*.main-menu .buttonToggle {*/
        /*cursor: pointer;*/
        /*display: inline-block;*/
        /*}*/

        /*.main-menu ul {*/
        /*display: none;*/
        /*}*/

        .main-menu li {
            width: 100%;
        }

        .main-menu .list-toggle:after {
            display: none;
        }

        .main-menu.sidebar-nav-v1 li ul a {
            border: none;
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
                if (((($this->getAttribute($context["category"], "slug", array()) == (isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug"))) && $this->getAttribute($context["category"], "children", array())) || ($this->getAttribute($context["category"], "slug", array()) == (isset($context["parentSlug"]) ? $context["parentSlug"] : $this->getContext($context, "parentSlug"))))) {
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

            ";
                // line 20
                echo "            <a class=\"";
                echo twig_escape_filter($this->env, (isset($context["classA"]) ? $context["classA"] : $this->getContext($context, "classA")), "html", null, true);
                echo " \" style=\"display: inline; line-height: 34px;\"
               href=\"";
                // line 21
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_auctions_by_category", array("categorySlug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
                echo "\">
                ";
                // line 22
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "
                <span class=\"badge rounded badge-light\">
                    ";
                // line 24
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["numbersDict"]) ? $context["numbersDict"] : $this->getContext($context, "numbersDict")), $this->getAttribute($this->getAttribute($context["category"], "entity", array()), "id", array()), array(), "array"), "html", null, true);
                echo "
                </span>
            </a>




            ";
                // line 31
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 32
                    echo "                <a class=\"";
                    echo twig_escape_filter($this->env, (isset($context["classA"]) ? $context["classA"] : $this->getContext($context, "classA")), "html", null, true);
                    echo " \" style=\"display: inline; position: absolute; right: 0;\"
                   data-toggle=\"collapse\"
                   data-parent=\"#sidebar-nav\"
                   href=\"#collapse-";
                    // line 35
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "slug", array()), "html", null, true);
                    echo "\">&raquo;
                </a>

                <ul id=\"collapse-";
                    // line 38
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "slug", array()), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, (isset($context["classUL"]) ? $context["classUL"] : $this->getContext($context, "classUL")), "html", null, true);
                    echo "\">
                    ";
                    // line 39
                    echo $this->getAttribute($this, "menu_categories", array(0 => $this->getAttribute($context["category"], "children", array()), 1 => (isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")), 2 => (isset($context["numbersDict"]) ? $context["numbersDict"] : $this->getContext($context, "numbersDict")), 3 => (isset($context["parentSlug"]) ? $context["parentSlug"] : $this->getContext($context, "parentSlug"))), "method");
                    echo "

                </ul>
            ";
                }
                // line 43
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
        return array (  242 => 43,  235 => 39,  229 => 38,  223 => 35,  216 => 32,  214 => 31,  204 => 24,  199 => 22,  195 => 21,  190 => 20,  184 => 17,  180 => 15,  177 => 14,  174 => 13,  171 => 12,  168 => 11,  164 => 9,  161 => 8,  158 => 7,  155 => 6,  152 => 5,  149 => 4,  146 => 3,  141 => 2,  127 => 1,  80 => 115,  78 => 74,  73 => 70,  71 => 69,  69 => 68,  67 => 67,  65 => 66,  63 => 65,  59 => 63,  55 => 61,  53 => 60,  50 => 58,  48 => 57,  45 => 55,  43 => 54,  41 => 53,  39 => 52,  35 => 49,  33 => 48,  30 => 47,  25 => 117,  23 => 47,  20 => 46,);
    }
}

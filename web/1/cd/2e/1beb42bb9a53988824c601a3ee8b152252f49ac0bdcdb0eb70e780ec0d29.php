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
        // line 48
        echo "
";
        // line 49
        $this->displayBlock('block', $context, $blocks);
        // line 125
        echo "
";
    }

    // line 49
    public function block_block($context, array $blocks = array())
    {
        // line 50
        echo "    ";
        // line 51
        echo "

    ";
        // line 54
        echo "    ";
        // line 55
        echo "    ";
        // line 56
        echo "    ";
        // line 57
        echo "
    ";
        // line 59
        echo "    ";
        // line 60
        echo "
    ";
        // line 62
        echo "    ";
        // line 63
        echo "    <ul class=\"main-menu list-group sidebar-nav-v1\" id=\"sidebar-nav\">
        <!-- Typography -->
        ";
        // line 65
        echo $this->getAttribute($this, "menu_categories", array(0 => (isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")), 1 => (isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")), 2 => (isset($context["numbersDict"]) ? $context["numbersDict"] : $this->getContext($context, "numbersDict")), 3 => (isset($context["parentSlug"]) ? $context["parentSlug"] : $this->getContext($context, "parentSlug"))), "method");
        echo "
        ";
        // line 67
        echo "        ";
        // line 68
        echo "        ";
        // line 69
        echo "        ";
        // line 70
        echo "        ";
        // line 71
        echo "        ";
        // line 72
        echo "        <!-- End Typography -->

    </ul>
    ";
        // line 76
        echo "    ";
        // line 123
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
                ";
                // line 23
                if (($this->getAttribute((isset($context["numbersDict"]) ? $context["numbersDict"] : $this->getContext($context, "numbersDict")), $this->getAttribute($this->getAttribute($context["category"], "entity", array()), "id", array()), array(), "array") > 0)) {
                    // line 24
                    echo "                <span class=\"badge rounded badge-light\">
                    ";
                    // line 25
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["numbersDict"]) ? $context["numbersDict"] : $this->getContext($context, "numbersDict")), $this->getAttribute($this->getAttribute($context["category"], "entity", array()), "id", array()), array(), "array"), "html", null, true);
                    echo "
                </span>
                ";
                }
                // line 28
                echo "            </a>




            ";
                // line 33
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 34
                    echo "                <a class=\"";
                    echo twig_escape_filter($this->env, (isset($context["classA"]) ? $context["classA"] : $this->getContext($context, "classA")), "html", null, true);
                    echo " \" style=\"display: inline; position: absolute; right: 0;\"
                   data-toggle=\"collapse\"
                   data-parent=\"#sidebar-nav\"
                   href=\"#collapse-";
                    // line 37
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "slug", array()), "html", null, true);
                    echo "\">&raquo;
                </a>

                <ul id=\"collapse-";
                    // line 40
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "slug", array()), "html", null, true);
                    echo "\" class=\"";
                    echo twig_escape_filter($this->env, (isset($context["classUL"]) ? $context["classUL"] : $this->getContext($context, "classUL")), "html", null, true);
                    echo "\">
                    ";
                    // line 41
                    echo $this->getAttribute($this, "menu_categories", array(0 => $this->getAttribute($context["category"], "children", array()), 1 => (isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")), 2 => (isset($context["numbersDict"]) ? $context["numbersDict"] : $this->getContext($context, "numbersDict")), 3 => (isset($context["parentSlug"]) ? $context["parentSlug"] : $this->getContext($context, "parentSlug"))), "method");
                    echo "

                </ul>
            ";
                }
                // line 45
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
        return array (  255 => 45,  248 => 41,  242 => 40,  236 => 37,  229 => 34,  227 => 33,  220 => 28,  214 => 25,  211 => 24,  209 => 23,  205 => 22,  201 => 21,  196 => 20,  190 => 17,  186 => 15,  183 => 14,  180 => 13,  177 => 12,  174 => 11,  170 => 9,  167 => 8,  164 => 7,  161 => 6,  158 => 5,  155 => 4,  152 => 3,  147 => 2,  133 => 1,  80 => 123,  78 => 76,  73 => 72,  71 => 71,  69 => 70,  67 => 69,  65 => 68,  63 => 67,  59 => 65,  55 => 63,  53 => 62,  50 => 60,  48 => 59,  45 => 57,  43 => 56,  41 => 55,  39 => 54,  35 => 51,  33 => 50,  30 => 49,  25 => 125,  23 => 49,  20 => 48,);
    }
}

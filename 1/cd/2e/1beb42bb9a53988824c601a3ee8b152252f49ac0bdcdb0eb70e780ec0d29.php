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
        // line 19
        echo "
";
        // line 20
        $this->displayBlock('block', $context, $blocks);
    }

    public function block_block($context, array $blocks = array())
    {
        // line 21
        echo "    <div class=\"headline\"><h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()), "html", null, true);
        echo "</h2></div>


    <button type=\"button\" class=\"navbar navbar-default mega-menu navbar-toggle\" data-toggle=\"collapse\" data-target=\".main-menu\">
        <span class=\"sr-only\">Toggle navigation</span>
        <span class=\"fa fa-bars\"></span>
    </button>

    <ul class=\"main-menu collapse navbar-collapse navbar-responsive-collapse\">
        ";
        // line 30
        echo $this->getAttribute($this, "menu_categories", array(0 => (isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")), 1 => (isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug"))), "method");
        echo "
    </ul>

    ";
        // line 64
        echo "
    <script type=\"application/javascript\">
        jQuery(document).ready(function () {
            var mainMenu = jQuery('.main-menu');
            jQuery('.buttonToggle', mainMenu).click(function () {
                jQuery(this).closest('li').find('> ul').toggle();
            });
            jQuery('ul', mainMenu).hide();
            jQuery('a.active', mainMenu)
                    .closest('ul').show()
                    .closest('ul').show();
        });
    </script>

    <style>
        .main-menu .active {
            font-weight: bold;
        }
        .main-menu .buttonToggle {
            cursor: pointer;
            display: inline-block;
        }
        .main-menu ul {
            display: none;
        }
        .main-menu li {
            list-style-type: none;
            position: relative;
            left: -30px;
        }
    </style>
    ";
        echo "
";
    }

    // line 1
    public function getmenu_categories($__categories__ = null, $__slug__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "categories" => $__categories__,
            "slug" => $__slug__,
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
                echo "        <li>
            ";
                // line 4
                $context["class"] = "";
                // line 5
                echo "            ";
                if (($this->getAttribute($context["category"], "slug", array()) == (isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")))) {
                    // line 6
                    echo "                ";
                    $context["class"] = "active";
                    // line 7
                    echo "            ";
                }
                // line 8
                echo "            <a class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_auctions_by_category", array("categorySlug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>

            ";
                // line 10
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 11
                    echo "                <div class=\"buttonToggle icon-arrow-down\"></div>
                <ul>
                    ";
                    // line 13
                    echo $this->getAttribute($this, "menu_categories", array(0 => $this->getAttribute($context["category"], "children", array()), 1 => (isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug"))), "method");
                    echo "
                </ul>
            ";
                }
                // line 16
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
        return array (  138 => 16,  132 => 13,  128 => 11,  126 => 10,  116 => 8,  113 => 7,  110 => 6,  107 => 5,  105 => 4,  102 => 3,  97 => 2,  85 => 1,  48 => 64,  42 => 30,  29 => 21,  23 => 20,  20 => 19,);
    }
}

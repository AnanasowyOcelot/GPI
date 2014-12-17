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

    <ul class=\"main-menu\">
        ";
        // line 24
        echo $this->getAttribute($this, "menu_categories", array(0 => (isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")), 1 => (isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug"))), "method");
        echo "
    </ul>

    <script type=\"application/javascript\">
        jQuery(document).ready(function () {

        });
    </script>

    <style>
        .active{
            font-weight: bold;
        }
    </style>
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
                if (($this->getAttribute($context["category"], "slug", array()) != (isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")))) {
                    // line 6
                    echo "            ";
                } else {
                    // line 7
                    echo "                ";
                    $context["class"] = "active";
                    // line 8
                    echo "            ";
                }
                // line 9
                echo "            <a class=\"";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : $this->getContext($context, "class")), "html", null, true);
                echo "\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_auctions_by_category", array("categorySlug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                echo "</a>

            ";
                // line 11
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 12
                    echo "                <ul>
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
        return array (  110 => 16,  104 => 13,  101 => 12,  99 => 11,  89 => 9,  86 => 8,  83 => 7,  80 => 6,  77 => 5,  75 => 4,  72 => 3,  67 => 2,  55 => 1,  36 => 24,  29 => 21,  23 => 20,  20 => 19,);
    }
}

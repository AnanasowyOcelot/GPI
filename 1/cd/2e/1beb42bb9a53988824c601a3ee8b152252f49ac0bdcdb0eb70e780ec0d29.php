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
        // line 18
        echo "
";
        // line 19
        $this->displayBlock('block', $context, $blocks);
    }

    public function block_block($context, array $blocks = array())
    {
        // line 20
        echo "    <div class=\"headline\"><h2>";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : $this->getContext($context, "settings")), "title", array()), "html", null, true);
        echo "</h2></div>

    <ul class=\"main-menu\">
        ";
        // line 23
        echo $this->getAttribute($this, "menu_categories", array(0 => (isset($context["categories"]) ? $context["categories"] : $this->getContext($context, "categories")), 1 => (isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug"))), "method");
        echo "
    </ul>
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
                if (($this->getAttribute($context["category"], "slug", array()) != (isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug")))) {
                    // line 5
                    echo "            <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_auctions_by_cetegory", array("categorySlug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                    echo "</a>
            ";
                } else {
                    // line 7
                    echo "               <strong> <a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("gpi_auction_auctions_by_cetegory", array("categorySlug" => $this->getAttribute($context["category"], "slug", array()))), "html", null, true);
                    echo "\">";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["category"], "name", array()), "html", null, true);
                    echo "</a></strong>

            ";
                }
                // line 10
                echo "            ";
                if ($this->getAttribute($context["category"], "children", array())) {
                    // line 11
                    echo "                <ul>
                    ";
                    // line 12
                    echo $this->getAttribute($this, "menu_categories", array(0 => $this->getAttribute($context["category"], "children", array()), 1 => (isset($context["slug"]) ? $context["slug"] : $this->getContext($context, "slug"))), "method");
                    echo "
                </ul>
            ";
                }
                // line 15
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
        return array (  94 => 15,  88 => 12,  85 => 11,  82 => 10,  73 => 7,  65 => 5,  63 => 4,  60 => 3,  55 => 2,  43 => 1,  36 => 23,  29 => 20,  23 => 19,  20 => 18,);
    }
}

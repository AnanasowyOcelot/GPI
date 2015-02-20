<?php

/* SonataClassificationBundle:CategoryAdmin:tree.html.twig */
class __TwigTemplate_c31a7640291e7b49824dff273c4d596b7822b1cac4b8f88f168dabb35493d173 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 16
        try {
            $this->parent = $this->env->loadTemplate("SonataAdminBundle:CRUD:base_list.html.twig");
        } catch (Twig_Error_Loader $e) {
            $e->setTemplateFile($this->getTemplateName());
            $e->setTemplateLine(16);

            throw $e;
        }

        $this->blocks = array(
            'tab_menu' => array($this, 'block_tab_menu'),
            'list_table' => array($this, 'block_list_table'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 18
        $context["tree"] = $this;
        // line 16
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 40
    public function block_tab_menu($context, array $blocks = array())
    {
        // line 41
        echo "    ";
        $this->env->loadTemplate("SonataClassificationBundle:CategoryAdmin:list_tab_menu.html.twig")->display(array("mode" => "tree", "action" => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")), "admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin"))));
    }

    // line 48
    public function block_list_table($context, array $blocks = array())
    {
        // line 49
        echo "    <div class=\"col-xs-12 col-md-12\">
        <div class=\"box box-primary\">
            <div class=\"box-header\">
                <h1 class=\"box-title\">
                    ";
        // line 54
        echo "                    ";
        // line 55
        echo "                        ";
        // line 56
        echo "                            ";
        // line 57
        echo "                                ";
        // line 58
        echo "                            ";
        // line 59
        echo "                            ";
        // line 60
        echo "                                ";
        // line 61
        echo "                                    ";
        // line 62
        echo "                                        ";
        // line 63
        echo "                                            ";
        // line 64
        echo "                                                ";
        // line 65
        echo "                                                    ";
        // line 66
        echo "                                                ";
        // line 67
        echo "                                            ";
        // line 68
        echo "                                            ";
        // line 69
        echo "                                        ";
        // line 70
        echo "                                    ";
        // line 71
        echo "                                ";
        // line 72
        echo "                            ";
        // line 73
        echo "                        ";
        // line 74
        echo "                    ";
        // line 75
        echo "                </h1>
            </div>
            <div class=\"box-content\">
                ";
        // line 78
        echo $context["tree"]->getnavigate_child(array(0 => (isset($context["main_category"]) ? $context["main_category"] : $this->getContext($context, "main_category"))), (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), true, 0);
        echo "
            </div>
        </div>
    </div>
";
    }

    // line 19
    public function getnavigate_child($__collection__ = null, $__admin__ = null, $__root__ = null, $__depth__ = null)
    {
        $context = $this->env->mergeGlobals(array(
            "collection" => $__collection__,
            "admin" => $__admin__,
            "root" => $__root__,
            "depth" => $__depth__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 20
            echo "    <ul";
            if ((isset($context["root"]) ? $context["root"] : $this->getContext($context, "root"))) {
                echo " class=\"sonata-tree sonata-tree--toggleable js-treeview\"";
            }
            echo ">
        ";
            // line 21
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["collection"]) ? $context["collection"] : $this->getContext($context, "collection")));
            foreach ($context['_seq'] as $context["_key"] => $context["element"]) {
                // line 22
                echo "            <li class=\"sonata-ba-list-field\" objectId=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "id", array()), "html", null, true);
                echo "\" >
                <div class=\"sonata-tree__item\"";
                // line 23
                if (((isset($context["depth"]) ? $context["depth"] : $this->getContext($context, "depth")) < 2)) {
                    echo " data-treeview-toggled";
                }
                echo ">
                    ";
                // line 24
                if (($this->getAttribute($context["element"], "parent", array()) || (isset($context["root"]) ? $context["root"] : $this->getContext($context, "root")))) {
                    echo "<i class=\"fa fa-caret-right\" data-treeview-toggler></i>";
                }
                // line 25
                echo "                    <a class=\"sonata-tree__item__edit\" href=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateObjectUrl", array(0 => "edit", 1 => $context["element"]), "method"), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "name", array()), "html", null, true);
                echo "</a>
                    <i class=\"text-muted\">";
                // line 26
                echo twig_escape_filter($this->env, $this->getAttribute($context["element"], "description", array()), "html", null, true);
                echo "</i>
                    ";
                // line 28
                echo "                    ";
                if ($this->getAttribute($context["element"], "enabled", array())) {
                    echo "<span class=\"label label-success pull-right\"><i class=\"fa fa-check\"></i> ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => "active", 1 => array(), 2 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())), "method"), "html", null, true);
                    echo "</span>";
                }
                // line 29
                echo "                    ";
                if ( !$this->getAttribute($context["element"], "enabled", array())) {
                    echo "<span class=\"label label-danger pull-right\"><i class=\"fa fa-times\"> ";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "trans", array(0 => "disabled", 1 => array(), 2 => $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())), "method"), "html", null, true);
                    echo "</i></span>";
                }
                // line 30
                echo "                </div>

                ";
                // line 32
                if (twig_length_filter($this->env, $this->getAttribute($context["element"], "children", array()))) {
                    // line 33
                    echo "                    ";
                    echo $this->getAttribute($this, "navigate_child", array(0 => $this->getAttribute($context["element"], "children", array()), 1 => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), 2 => false, 3 => ((isset($context["depth"]) ? $context["depth"] : $this->getContext($context, "depth")) + 1)), "method");
                    echo "
                ";
                }
                // line 35
                echo "            </li>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['element'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "    </ul>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "SonataClassificationBundle:CategoryAdmin:tree.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  197 => 37,  190 => 35,  184 => 33,  182 => 32,  178 => 30,  171 => 29,  164 => 28,  160 => 26,  153 => 25,  149 => 24,  143 => 23,  138 => 22,  134 => 21,  127 => 20,  113 => 19,  104 => 78,  99 => 75,  97 => 74,  95 => 73,  93 => 72,  91 => 71,  89 => 70,  87 => 69,  85 => 68,  83 => 67,  81 => 66,  79 => 65,  77 => 64,  75 => 63,  73 => 62,  71 => 61,  69 => 60,  67 => 59,  65 => 58,  63 => 57,  61 => 56,  59 => 55,  57 => 54,  51 => 49,  48 => 48,  43 => 41,  40 => 40,  36 => 16,  34 => 18,  11 => 16,);
    }
}

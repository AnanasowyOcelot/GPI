<?php

/* SonataPageBundle::base_layout.html.twig */
class __TwigTemplate_7749272e467e58296f57dd0796ca230973956dbbdf6a250cf3af0a6749988360 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'sonata_page_html_tag' => array($this, 'block_sonata_page_html_tag'),
            'sonata_page_head' => array($this, 'block_sonata_page_head'),
            'sonata_page_stylesheets' => array($this, 'block_sonata_page_stylesheets'),
            'page_stylesheets' => array($this, 'block_page_stylesheets'),
            'sonata_page_javascripts' => array($this, 'block_sonata_page_javascripts'),
            'page_javascripts' => array($this, 'block_page_javascripts'),
            'sonata_page_body_tag' => array($this, 'block_sonata_page_body_tag'),
            'sonata_page_top_bar' => array($this, 'block_sonata_page_top_bar'),
            'page_top_bar' => array($this, 'block_page_top_bar'),
            'sonata_page_container' => array($this, 'block_sonata_page_container'),
            'page_container' => array($this, 'block_page_container'),
            'sonata_page_asset_footer' => array($this, 'block_sonata_page_asset_footer'),
            'page_asset_footer' => array($this, 'block_page_asset_footer'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $this->displayBlock('sonata_page_html_tag', $context, $blocks);
        // line 15
        echo "    ";
        $this->displayBlock('sonata_page_head', $context, $blocks);
        // line 44
        echo "
    ";
        // line 45
        $this->displayBlock('sonata_page_body_tag', $context, $blocks);
        // line 48
        echo "
        ";
        // line 49
        $this->displayBlock('sonata_page_top_bar', $context, $blocks);
        // line 140
        echo "
        ";
        // line 141
        $this->displayBlock('sonata_page_container', $context, $blocks);
        // line 144
        echo "
        ";
        // line 145
        $this->displayBlock('sonata_page_asset_footer', $context, $blocks);
        // line 167
        echo "
        <!-- monitoring:3e9fda56df2cdd3b039f189693ab7844fbb2d4f6 -->
    </body>
</html>
";
    }

    // line 11
    public function block_sonata_page_html_tag($context, array $blocks = array())
    {
        // line 12
        echo "<!DOCTYPE html>
<html ";
        // line 13
        echo $this->env->getExtension('sonata_seo')->getHtmlAttributes();
        echo ">
";
    }

    // line 15
    public function block_sonata_page_head($context, array $blocks = array())
    {
        // line 16
        echo "        <head ";
        echo $this->env->getExtension('sonata_seo')->getHeadAttributes();
        echo ">

            ";
        // line 18
        echo $this->env->getExtension('sonata_seo')->getTitle();
        echo "
            ";
        // line 19
        echo $this->env->getExtension('sonata_seo')->getMetadatas();
        echo "

            ";
        // line 21
        $this->displayBlock('sonata_page_stylesheets', $context, $blocks);
        // line 28
        echo "
            ";
        // line 29
        $this->displayBlock('sonata_page_javascripts', $context, $blocks);
        // line 42
        echo "        </head>
    ";
    }

    // line 21
    public function block_sonata_page_stylesheets($context, array $blocks = array())
    {
        // line 22
        echo "                ";
        $this->displayBlock('page_stylesheets', $context, $blocks);
        // line 27
        echo "            ";
    }

    // line 22
    public function block_page_stylesheets($context, array $blocks = array())
    {
        echo " ";
        // line 23
        echo "                    ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "assets", array()), "stylesheets", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 24
            echo "                        <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\"  />
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "                ";
    }

    // line 29
    public function block_sonata_page_javascripts($context, array $blocks = array())
    {
        // line 30
        echo "                ";
        $this->displayBlock('page_javascripts', $context, $blocks);
        // line 40
        echo "
            ";
    }

    // line 30
    public function block_page_javascripts($context, array $blocks = array())
    {
        echo " ";
        // line 31
        echo "                    <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
                    <!--[if lt IE 9]>
                        <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
                    <![endif]-->

                    ";
        // line 36
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "assets", array()), "javascripts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 37
            echo "                        <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($context["js"]), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 39
        echo "                ";
    }

    // line 45
    public function block_sonata_page_body_tag($context, array $blocks = array())
    {
        // line 46
        echo "        <body class=\"sonata-bc\">
    ";
    }

    // line 49
    public function block_sonata_page_top_bar($context, array $blocks = array())
    {
        // line 50
        echo "            ";
        $this->displayBlock('page_top_bar', $context, $blocks);
        // line 139
        echo "        ";
    }

    // line 50
    public function block_page_top_bar($context, array $blocks = array())
    {
        echo " ";
        // line 51
        echo "                ";
        if (($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "isEditor", array()) || (($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array())) && $this->env->getExtension('security')->isGranted("ROLE_PREVIOUS_ADMIN")))) {
            // line 52
            echo "
                    ";
            // line 53
            if (($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "isEditor", array()) && $this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "isInlineEditionOn", array()))) {
                // line 54
                echo "                        <!-- CMS specific variables -->
                        <script>
                            jQuery(document).ready(function() {
                                Sonata.Page.init({
                                    url: {
                                        block_save_position: '";
                // line 59
                echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_sonata_page_block_savePosition", array("id" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()))), "html", null, true);
                echo "',
                                        block_edit:          '";
                // line 60
                echo $this->env->getExtension('routing')->getPath("admin_sonata_page_block_edit", array("id" => "BLOCK_ID"));
                echo "'
                                    }
                                });
                            });
                        </script>
                    ";
            }
            // line 66
            echo "
                    <header class=\"sonata-bc sonata-page-top-bar navbar navbar-inverse navbar-fixed-top\" role=\"banner\">
                        <div class=\"container\">
                            <ul class=\"nav navbar-nav\">
                                ";
            // line 70
            if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array())) && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
                // line 71
                echo "                                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getPath("sonata_admin_dashboard");
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.sonata_admin_dashboard", array(), "SonataPageBundle"), "html", null, true);
                echo "</a></li>
                                ";
            }
            // line 73
            echo "
                                ";
            // line 74
            if ($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "isEditor", array())) {
                // line 75
                echo "                                    ";
                $context["sites"] = $this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "siteavailables", array());
                // line 76
                echo "
                                    ";
                // line 77
                if (((twig_length_filter($this->env, (isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites"))) > 1) && array_key_exists("site", $context))) {
                    // line 78
                    echo "                                        <li class=\"dropdown\">
                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                    // line 79
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["site"]) ? $context["site"] : $this->getContext($context, "site")), "name", array()), "html", null, true);
                    echo " <span class=\"caret\"></span></a>
                                            <ul class=\"dropdown-menu\">
                                                ";
                    // line 81
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable((isset($context["sites"]) ? $context["sites"] : $this->getContext($context, "sites")));
                    foreach ($context['_seq'] as $context["_key"] => $context["site"]) {
                        // line 82
                        echo "                                                    <li><a href=\"";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["site"], "url", array()), "html", null, true);
                        echo "\">";
                        echo twig_escape_filter($this->env, $this->getAttribute($context["site"], "name", array()), "html", null, true);
                        echo "</a></li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['site'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 84
                    echo "                                            </ul>
                                        </li>
                                    ";
                }
                // line 87
                echo "
                                    <li class=\"dropdown\">
                                        <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">Page <span class=\"caret\"></span></a>
                                        <ul class=\"dropdown-menu\">
                                            ";
                // line 91
                if (array_key_exists("page", $context)) {
                    // line 92
                    echo "                                                <li><a href=\"";
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_sonata_page_page_edit", array("id" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()))), "html", null, true);
                    echo "\" target=\"_new\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.edit_page", array(), "SonataPageBundle"), "html", null, true);
                    echo "</a></li>
                                                <li><a href=\"";
                    // line 93
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("admin_sonata_page_page_snapshot_create", array("id" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()))), "html", null, true);
                    echo "\" target=\"_new\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.create_snapshot", array(), "SonataPageBundle"), "html", null, true);
                    echo "</a></li>
                                                <li class=\"divider\"></li>
                                            ";
                }
                // line 96
                echo "
                                            <li><a href=\"";
                // line 97
                echo $this->env->getExtension('routing')->getPath("admin_sonata_page_page_list");
                echo "\" target=\"_new\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.view_all_pages", array(), "SonataPageBundle"), "html", null, true);
                echo "</a></li>

                                            ";
                // line 99
                if ((array_key_exists("error_codes", $context) && twig_length_filter($this->env, (isset($context["error_codes"]) ? $context["error_codes"] : $this->getContext($context, "error_codes"))))) {
                    // line 100
                    echo "                                                <li class=\"divider\"></li>
                                                <li><a href=\"";
                    // line 101
                    echo $this->env->getExtension('routing')->getPath("sonata_page_exceptions_list");
                    echo "\" target=\"_new\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.view_all_exceptions", array(), "SonataPageBundle"), "html", null, true);
                    echo "</a></li>
                                            ";
                }
                // line 103
                echo "                                        </ul>
                                    </li>

                                    ";
                // line 106
                if (array_key_exists("page", $context)) {
                    // line 107
                    echo "                                        <li>
                                            <a href=\"";
                    // line 108
                    echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getUrl("admin_sonata_page_page_compose", array("id" => $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "id", array()))), "html", null, true);
                    echo "\">
                                                <i class=\"fa fa-magic\"></i>
                                                ";
                    // line 110
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.compose_page", array(), "SonataPageBundle"), "html", null, true);
                    echo "
                                            </a>
                                        </li>
                                    ";
                }
                // line 114
                echo "
                                    ";
                // line 115
                if ((array_key_exists("page", $context) &&  !$this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "enabled", array()))) {
                    // line 116
                    echo "                                        <li><span style=\"padding-left: 20px; background: red;\"><strong><em>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.page_is_disabled", array(), "SonataPageBundle"), "html", null, true);
                    echo "</em></strong></span></li>
                                    ";
                }
                // line 118
                echo "
                                    ";
                // line 119
                if (($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "isInlineEditionOn", array()) && array_key_exists("page", $context))) {
                    // line 120
                    echo "                                        <li>
                                            <form class=\"form-inline\" style=\"margin: 0px\">
                                                <label class=\"checkbox inline\" for=\"page-action-enabled-edit\"><input type=\"checkbox\" id=\"page-action-enabled-edit\" />";
                    // line 122
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.show_zone", array(), "SonataPageBundle"), "html", null, true);
                    echo "</label>
                                                <input type=\"submit\" class=\"btn\" value=\"";
                    // line 123
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("btn_save_position", array(), "SonataPageBundle"), "html", null, true);
                    echo "\" id=\"page-action-save-position\" />
                                            </form>
                                        </li>
                                    ";
                }
                // line 127
                echo "                                ";
            }
            // line 128
            echo "
                                ";
            // line 129
            if ((($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()) && $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array())) && $this->env->getExtension('security')->isGranted("ROLE_PREVIOUS_ADMIN"))) {
                // line 130
                echo "                                    <li><a href=\"";
                echo $this->env->getExtension('routing')->getUrl("homepage", array("_switch_user" => "_exit"));
                echo "\">";
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("header.switch_user_exit", array(), "SonataPageBundle"), "html", null, true);
                echo "</a></li>
                                ";
            }
            // line 132
            echo "
                            </ul>
                        </div>
                    </header>

                ";
        }
        // line 138
        echo "            ";
    }

    // line 141
    public function block_sonata_page_container($context, array $blocks = array())
    {
        // line 142
        echo "            ";
        $this->displayBlock('page_container', $context, $blocks);
        echo " ";
        // line 143
        echo "        ";
    }

    // line 142
    public function block_page_container($context, array $blocks = array())
    {
    }

    // line 145
    public function block_sonata_page_asset_footer($context, array $blocks = array())
    {
        // line 146
        echo "            ";
        $this->displayBlock('page_asset_footer', $context, $blocks);
        // line 166
        echo "        ";
    }

    // line 146
    public function block_page_asset_footer($context, array $blocks = array())
    {
        echo " ";
        // line 147
        echo "                ";
        if (array_key_exists("page", $context)) {
            // line 148
            echo "                    ";
            if ( !twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "javascript", array()))) {
                // line 149
                echo "                        <script>
                            ";
                // line 150
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "javascript", array());
                echo "
                        </script>
                    ";
            }
            // line 153
            echo "                    ";
            if ( !twig_test_empty($this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "stylesheet", array()))) {
                // line 154
                echo "                        <style>
                            ";
                // line 155
                echo $this->getAttribute((isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")), "stylesheet", array());
                echo "
                        </style>
                    ";
            }
            // line 158
            echo "                ";
        }
        // line 159
        echo "                ";
        // line 163
        echo "                ";
        echo call_user_func_array($this->env->getFunction('sonata_block_include_stylesheets')->getCallable(), array("screen", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basePath", array())));
        echo "
                ";
        // line 164
        echo call_user_func_array($this->env->getFunction('sonata_block_include_javascripts')->getCallable(), array("screen", $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "basePath", array())));
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "SonataPageBundle::base_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  478 => 164,  473 => 163,  471 => 159,  468 => 158,  462 => 155,  459 => 154,  456 => 153,  450 => 150,  447 => 149,  444 => 148,  441 => 147,  437 => 146,  433 => 166,  430 => 146,  427 => 145,  422 => 142,  418 => 143,  414 => 142,  411 => 141,  407 => 138,  399 => 132,  391 => 130,  389 => 129,  386 => 128,  383 => 127,  376 => 123,  372 => 122,  368 => 120,  366 => 119,  363 => 118,  357 => 116,  355 => 115,  352 => 114,  345 => 110,  340 => 108,  337 => 107,  335 => 106,  330 => 103,  323 => 101,  320 => 100,  318 => 99,  311 => 97,  308 => 96,  300 => 93,  293 => 92,  291 => 91,  285 => 87,  280 => 84,  269 => 82,  265 => 81,  260 => 79,  257 => 78,  255 => 77,  252 => 76,  249 => 75,  247 => 74,  244 => 73,  236 => 71,  234 => 70,  228 => 66,  219 => 60,  215 => 59,  208 => 54,  206 => 53,  203 => 52,  200 => 51,  196 => 50,  192 => 139,  189 => 50,  186 => 49,  181 => 46,  178 => 45,  174 => 39,  165 => 37,  161 => 36,  154 => 31,  150 => 30,  145 => 40,  142 => 30,  139 => 29,  135 => 26,  126 => 24,  121 => 23,  117 => 22,  113 => 27,  110 => 22,  107 => 21,  102 => 42,  100 => 29,  97 => 28,  95 => 21,  90 => 19,  86 => 18,  80 => 16,  77 => 15,  71 => 13,  68 => 12,  65 => 11,  57 => 167,  55 => 145,  52 => 144,  50 => 141,  47 => 140,  45 => 49,  42 => 48,  40 => 45,  37 => 44,  34 => 15,  32 => 11,);
    }
}

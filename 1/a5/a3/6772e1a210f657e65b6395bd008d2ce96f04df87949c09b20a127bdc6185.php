<?php

/* SonataAdminBundle::standard_layout.html.twig */
class __TwigTemplate_a5a36772e1a210f657e65b6395bd008d2ce96f04df87949c09b20a127bdc6185 extends Sonata\CacheBundle\Twig\TwigTemplate14
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'html_attributes' => array($this, 'block_html_attributes'),
            'meta_tags' => array($this, 'block_meta_tags'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'javascripts' => array($this, 'block_javascripts'),
            'sonata_head_title' => array($this, 'block_sonata_head_title'),
            'body_attributes' => array($this, 'block_body_attributes'),
            'sonata_header' => array($this, 'block_sonata_header'),
            'sonata_header_noscript_warning' => array($this, 'block_sonata_header_noscript_warning'),
            'logo' => array($this, 'block_logo'),
            'sonata_nav' => array($this, 'block_sonata_nav'),
            'sonata_breadcrumb' => array($this, 'block_sonata_breadcrumb'),
            'sonata_top_nav_menu' => array($this, 'block_sonata_top_nav_menu'),
            'sonata_wrapper' => array($this, 'block_sonata_wrapper'),
            'sonata_left_side' => array($this, 'block_sonata_left_side'),
            'sonata_side_nav' => array($this, 'block_sonata_side_nav'),
            'sonata_sidebar_search' => array($this, 'block_sonata_sidebar_search'),
            'side_bar_before_nav' => array($this, 'block_side_bar_before_nav'),
            'side_bar_nav' => array($this, 'block_side_bar_nav'),
            'side_bar_after_nav' => array($this, 'block_side_bar_after_nav'),
            'sonata_page_content' => array($this, 'block_sonata_page_content'),
            'sonata_page_content_header' => array($this, 'block_sonata_page_content_header'),
            'sonata_page_content_nav' => array($this, 'block_sonata_page_content_nav'),
            'tab_menu_navbar_header' => array($this, 'block_tab_menu_navbar_header'),
            'sonata_admin_content' => array($this, 'block_sonata_admin_content'),
            'notice' => array($this, 'block_notice'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 11
        $context["_preview"] = $this->renderBlock("preview", $context, $blocks);
        // line 12
        $context["_form"] = $this->renderBlock("form", $context, $blocks);
        // line 13
        $context["_show"] = $this->renderBlock("show", $context, $blocks);
        // line 14
        $context["_list_table"] = $this->renderBlock("list_table", $context, $blocks);
        // line 15
        $context["_list_filters"] = $this->renderBlock("list_filters", $context, $blocks);
        // line 16
        $context["_tab_menu"] = $this->renderBlock("tab_menu", $context, $blocks);
        // line 17
        $context["_content"] = $this->renderBlock("content", $context, $blocks);
        // line 18
        $context["_title"] = $this->renderBlock("title", $context, $blocks);
        // line 19
        $context["_breadcrumb"] = $this->renderBlock("breadcrumb", $context, $blocks);
        // line 20
        $context["_actions"] = $this->renderBlock("actions", $context, $blocks);
        // line 21
        $context["_navbar_title"] = $this->renderBlock("navbar_title", $context, $blocks);
        // line 22
        $context["_list_filters_actions"] = $this->renderBlock("list_filters_actions", $context, $blocks);
        // line 23
        echo "
<!DOCTYPE html>
<html ";
        // line 25
        $this->displayBlock('html_attributes', $context, $blocks);
        echo ">
    <head>
        ";
        // line 27
        $this->displayBlock('meta_tags', $context, $blocks);
        // line 31
        echo "
        ";
        // line 32
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 39
        echo "
        ";
        // line 40
        $this->displayBlock('javascripts', $context, $blocks);
        // line 70
        echo "
        <title>
        ";
        // line 72
        $this->displayBlock('sonata_head_title', $context, $blocks);
        // line 92
        echo "        </title>
    </head>
    <body ";
        // line 94
        $this->displayBlock('body_attributes', $context, $blocks);
        echo ">
        ";
        // line 95
        $this->displayBlock('sonata_header', $context, $blocks);
        // line 183
        echo "
        ";
        // line 184
        $this->displayBlock('sonata_wrapper', $context, $blocks);
        // line 354
        echo "    </body>
</html>
";
    }

    // line 25
    public function block_html_attributes($context, array $blocks = array())
    {
        echo "class=\"no-js\"";
    }

    // line 27
    public function block_meta_tags($context, array $blocks = array())
    {
        // line 28
        echo "            <meta charset=\"UTF-8\">
            <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        ";
    }

    // line 32
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 33
        echo "            ";
        if (array_key_exists("admin_pool", $context)) {
            // line 34
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "stylesheets", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
                // line 35
                echo "                        <link rel=\"stylesheet\" href=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($context["stylesheet"]), "html", null, true);
                echo "\">
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 37
            echo "            ";
        }
        // line 38
        echo "        ";
    }

    // line 40
    public function block_javascripts($context, array $blocks = array())
    {
        // line 41
        echo "            <script>
                window.SONATA_CONFIG = {
                    CONFIRM_EXIT: ";
        // line 43
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "confirm_exit"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_SELECT2: ";
        // line 44
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        echo ",
                    USE_ICHECK: ";
        // line 45
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_icheck"), "method"))) {
            echo "true";
        } else {
            echo "false";
        }
        // line 46
        echo "                };
                window.SONATA_TRANSLATIONS = {
                    CONFIRM_EXIT:  '";
        // line 48
        echo twig_escape_filter($this->env, twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("confirm_exit", array(), "SonataAdminBundle"), "js"), "html", null, true);
        echo "'
               };
            </script>

            ";
        // line 52
        if (array_key_exists("admin_pool", $context)) {
            // line 53
            echo "                ";
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "javascripts", 1 => array()), "method"));
            foreach ($context['_seq'] as $context["_key"] => $context["javascript"]) {
                // line 54
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($context["javascript"]), "html", null, true);
                echo "\"></script>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['javascript'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            echo "            ";
        }
        // line 57
        echo "
            ";
        // line 59
        echo "            ";
        if ((array_key_exists("admin_pool", $context) && $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "use_select2"), "method"))) {
            // line 60
            echo "                ";
            $context["locale"] = $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "locale", array());
            // line 61
            echo "                ";
            if (((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")) == "pt")) {
                $context["locale"] = "pt_PT";
            }
            // line 62
            echo "
                ";
            // line 64
            echo "                ";
            if ((twig_slice($this->env, (isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), 0, 2) != "en")) {
                // line 65
                echo "                    <script src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl((("bundles/sonatacore/vendor/select2/select2_locale_" . strtr((isset($context["locale"]) ? $context["locale"] : $this->getContext($context, "locale")), array("_" => "-"))) . ".js")), "html", null, true);
                echo "\"></script>
                ";
            }
            // line 67
            echo "            ";
        }
        // line 68
        echo "
        ";
    }

    // line 72
    public function block_sonata_head_title($context, array $blocks = array())
    {
        // line 73
        echo "            ";
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("Admin", array(), "SonataAdminBundle"), "html", null, true);
        echo "

            ";
        // line 75
        if ( !twig_test_empty((isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title")))) {
            // line 76
            echo "                ";
            echo (isset($context["_title"]) ? $context["_title"] : $this->getContext($context, "_title"));
            echo "
            ";
        } else {
            // line 78
            echo "                ";
            if (array_key_exists("action", $context)) {
                // line 79
                echo "                    -
                    ";
                // line 80
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                    // line 81
                    echo "                        ";
                    if ( !$this->getAttribute($context["loop"], "first", array())) {
                        // line 82
                        echo "                            ";
                        if (($this->getAttribute($context["loop"], "index", array()) != 2)) {
                            // line 83
                            echo "                                &gt;
                            ";
                        }
                        // line 85
                        echo "
                            ";
                        // line 86
                        echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                        echo "
                        ";
                    }
                    // line 88
                    echo "                    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "                ";
            }
            // line 90
            echo "            ";
        }
        // line 91
        echo "        ";
    }

    // line 94
    public function block_body_attributes($context, array $blocks = array())
    {
        echo "class=\"sonata-bc skin-black fixed\"";
    }

    // line 95
    public function block_sonata_header($context, array $blocks = array())
    {
        // line 96
        echo "            <header class=\"header\">
                ";
        // line 97
        $this->displayBlock('sonata_header_noscript_warning', $context, $blocks);
        // line 104
        echo "                ";
        $this->displayBlock('logo', $context, $blocks);
        // line 118
        echo "                ";
        $this->displayBlock('sonata_nav', $context, $blocks);
        // line 181
        echo "            </header>
        ";
    }

    // line 97
    public function block_sonata_header_noscript_warning($context, array $blocks = array())
    {
        // line 98
        echo "                    <noscript>
                        <div class=\"noscript-warning\">
                            ";
        // line 100
        echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("noscript_warning", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                        </div>
                    </noscript>
                ";
    }

    // line 104
    public function block_logo($context, array $blocks = array())
    {
        // line 105
        echo "                    ";
        if (array_key_exists("admin_pool", $context)) {
            // line 106
            echo "                        ";
            ob_start();
            // line 107
            echo "                        <a class=\"logo\" href=\"";
            echo $this->env->getExtension('routing')->getPath("sonata_admin_dashboard");
            echo "\">
                            ";
            // line 108
            if ((("single_image" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
                // line 109
                echo "                                <img src=\"";
                echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "titlelogo", array())), "html", null, true);
                echo "\" alt=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title", array()), "html", null, true);
                echo "\">
                            ";
            }
            // line 111
            echo "                            ";
            if ((("single_text" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")) || ("both" == $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getOption", array(0 => "title_mode"), "method")))) {
                // line 112
                echo "                                <span>";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "title", array()), "html", null, true);
                echo "</span>
                            ";
            }
            // line 114
            echo "                        </a>
                        ";
            echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
            // line 116
            echo "                    ";
        }
        // line 117
        echo "                ";
    }

    // line 118
    public function block_sonata_nav($context, array $blocks = array())
    {
        // line 119
        echo "                    ";
        if (array_key_exists("admin_pool", $context)) {
            // line 120
            echo "                        <nav class=\"navbar navbar-static-top\" role=\"navigation\">
                            <a href=\"#\" class=\"navbar-btn sidebar-toggle\" data-toggle=\"offcanvas\" role=\"button\">
                                <span class=\"sr-only\">Toggle navigation</span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                                <span class=\"icon-bar\"></span>
                            </a>

                            <div class=\"navbar-left\">
                                ";
            // line 129
            $this->displayBlock('sonata_breadcrumb', $context, $blocks);
            // line 156
            echo "                            </div>

                            ";
            // line 158
            $this->displayBlock('sonata_top_nav_menu', $context, $blocks);
            // line 178
            echo "                        </nav>
                    ";
        }
        // line 180
        echo "                ";
    }

    // line 129
    public function block_sonata_breadcrumb($context, array $blocks = array())
    {
        // line 130
        echo "                                    <div class=\"hidden-xs\">
                                    ";
        // line 131
        if (( !twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"))) || array_key_exists("action", $context))) {
            // line 132
            echo "                                        <ol class=\"nav navbar-top-links breadcrumb\">
                                            ";
            // line 133
            if (twig_test_empty((isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb")))) {
                // line 134
                echo "                                                ";
                if (array_key_exists("action", $context)) {
                    // line 135
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "breadcrumbs", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"));
                    $context['loop'] = array(
                      'parent' => $context['_parent'],
                      'index0' => 0,
                      'index'  => 1,
                      'first'  => true,
                    );
                    if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                        $length = count($context['_seq']);
                        $context['loop']['revindex0'] = $length - 1;
                        $context['loop']['revindex'] = $length;
                        $context['loop']['length'] = $length;
                        $context['loop']['last'] = 1 === $length;
                    }
                    foreach ($context['_seq'] as $context["_key"] => $context["menu"]) {
                        // line 136
                        echo "                                                        ";
                        if ( !$this->getAttribute($context["loop"], "last", array())) {
                            // line 137
                            echo "                                                            <li>
                                                                ";
                            // line 138
                            if ( !twig_test_empty($this->getAttribute($context["menu"], "uri", array()))) {
                                // line 139
                                echo "                                                                    <a href=\"";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "uri", array()), "html", null, true);
                                echo "\">";
                                echo $this->getAttribute($context["menu"], "label", array());
                                echo "</a>
                                                                ";
                            } else {
                                // line 141
                                echo "                                                                    ";
                                echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                                echo "
                                                                ";
                            }
                            // line 143
                            echo "                                                            </li>
                                                        ";
                        } else {
                            // line 145
                            echo "                                                            <li class=\"active\"><span>";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["menu"], "label", array()), "html", null, true);
                            echo "</span></li>
                                                        ";
                        }
                        // line 147
                        echo "                                                    ";
                        ++$context['loop']['index0'];
                        ++$context['loop']['index'];
                        $context['loop']['first'] = false;
                        if (isset($context['loop']['length'])) {
                            --$context['loop']['revindex0'];
                            --$context['loop']['revindex'];
                            $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menu'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 148
                    echo "                                                ";
                }
                // line 149
                echo "                                            ";
            } else {
                // line 150
                echo "                                                ";
                echo (isset($context["_breadcrumb"]) ? $context["_breadcrumb"] : $this->getContext($context, "_breadcrumb"));
                echo "
                                            ";
            }
            // line 152
            echo "                                        </ol>
                                    ";
        }
        // line 154
        echo "                                    </div>
                                ";
    }

    // line 158
    public function block_sonata_top_nav_menu($context, array $blocks = array())
    {
        // line 159
        echo "                                <div class=\"navbar-right\">
                                    <ul class=\"nav navbar-nav\">
                                        <li class=\"dropdown\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-plus-square fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                            </a>
                                            ";
        // line 165
        $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "add_block"), "method"))->display($context);
        // line 166
        echo "                                        </li>
                                        <li class=\"dropdown user-menu\">
                                            <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" href=\"#\">
                                                <i class=\"fa fa-user fa-fw\"></i> <i class=\"fa fa-caret-down\"></i>
                                            </a>
                                            <ul class=\"dropdown-menu dropdown-user\">
                                                ";
        // line 172
        $this->env->resolveTemplate($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "getTemplate", array(0 => "user_block"), "method"))->display($context);
        // line 173
        echo "                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            ";
    }

    // line 184
    public function block_sonata_wrapper($context, array $blocks = array())
    {
        // line 185
        echo "            <div class=\"wrapper row-offcanvas row-offcanvas-left\">
                ";
        // line 186
        $this->displayBlock('sonata_left_side', $context, $blocks);
        // line 261
        echo "                <aside class=\"right-side\">
                    ";
        // line 262
        $this->displayBlock('sonata_page_content', $context, $blocks);
        // line 350
        echo "                </aside>

            </div>
        ";
    }

    // line 186
    public function block_sonata_left_side($context, array $blocks = array())
    {
        // line 187
        echo "                    <aside class=\"left-side sidebar-offcanvas\">
                        <section class=\"sidebar\">
                            ";
        // line 189
        $this->displayBlock('sonata_side_nav', $context, $blocks);
        // line 258
        echo "                        </section>
                    </aside>
                ";
    }

    // line 189
    public function block_sonata_side_nav($context, array $blocks = array())
    {
        // line 190
        echo "                                ";
        $this->displayBlock('sonata_sidebar_search', $context, $blocks);
        // line 204
        echo "
                                ";
        // line 205
        $this->displayBlock('side_bar_before_nav', $context, $blocks);
        // line 206
        echo "                                ";
        $this->displayBlock('side_bar_nav', $context, $blocks);
        // line 252
        echo "

                                ";
        // line 254
        $this->displayBlock('side_bar_after_nav', $context, $blocks);
        // line 257
        echo "                            ";
    }

    // line 190
    public function block_sonata_sidebar_search($context, array $blocks = array())
    {
        // line 191
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()) && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 192
            echo "                                        <form action=\"";
            echo $this->env->getExtension('routing')->getUrl("sonata_admin_search");
            echo "\" method=\"GET\" class=\"sidebar-form\" role=\"search\">
                                            <div class=\"input-group custom-search-form\">
                                                <input type=\"text\" name=\"q\" value=\"";
            // line 194
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "q"), "method"), "html", null, true);
            echo "\" class=\"form-control\" placeholder=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("search_placeholder", array(), "SonataAdminBundle"), "html", null, true);
            echo "\">
                                                    <span class=\"input-group-btn\">
                                                        <button class=\"btn btn-flat\" type=\"submit\">
                                                            <i class=\"fa fa-search\"></i>
                                                        </button>
                                                    </span>
                                            </div>
                                        </form>
                                    ";
        }
        // line 203
        echo "                                ";
    }

    // line 205
    public function block_side_bar_before_nav($context, array $blocks = array())
    {
        echo " ";
    }

    // line 206
    public function block_side_bar_nav($context, array $blocks = array())
    {
        // line 207
        echo "                                    ";
        if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "security", array()), "token", array()) && $this->env->getExtension('security')->isGranted("ROLE_SONATA_ADMIN"))) {
            // line 208
            echo "                                        <ul class=\"sidebar-menu\">

                                            ";
            // line 210
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin_pool"]) ? $context["admin_pool"] : $this->getContext($context, "admin_pool")), "dashboardgroups", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
                // line 211
                echo "                                                ";
                $context["display"] = (twig_test_empty($this->getAttribute($context["group"], "roles", array())) || $this->env->getExtension('security')->isGranted("ROLE_SUPER_ADMIN"));
                // line 212
                echo "                                                ";
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "roles", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
                    if ( !(isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                        // line 213
                        echo "                                                    ";
                        $context["display"] = $this->env->getExtension('security')->isGranted($context["role"]);
                        // line 214
                        echo "                                                ";
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 215
                echo "
                                                ";
                // line 217
                echo "                                                ";
                $context["item_count"] = 0;
                // line 218
                echo "                                                ";
                if ((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display"))) {
                    // line 219
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        if (((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) == 0)) {
                            // line 220
                            echo "                                                        ";
                            if (($this->getAttribute($context["admin"], "hasroute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method"))) {
                                // line 221
                                echo "                                                            ";
                                $context["item_count"] = ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) + 1);
                                // line 222
                                echo "                                                        ";
                            }
                            // line 223
                            echo "                                                    ";
                        }
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 224
                    echo "                                                ";
                }
                // line 225
                echo "
                                                ";
                // line 226
                if (((isset($context["display"]) ? $context["display"] : $this->getContext($context, "display")) && ((isset($context["item_count"]) ? $context["item_count"] : $this->getContext($context, "item_count")) > 0))) {
                    // line 227
                    echo "                                                    ";
                    $context["active"] = false;
                    // line 228
                    echo "                                                    ";
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 229
                        echo "                                                        ";
                        if ((($this->getAttribute($context["admin"], "hasroute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method")) && ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute($context["admin"], "code", array())))) {
                            // line 230
                            echo "                                                            ";
                            $context["active"] = true;
                            // line 231
                            echo "                                                        ";
                        }
                        // line 232
                        echo "                                                    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 233
                    echo "                                                    <li class=\"treeview";
                    if ((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
                        echo " active";
                    }
                    echo "\">
                                                        <a href=\"#\">
                                                            ";
                    // line 235
                    if ((($this->getAttribute($context["group"], "icon", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["group"], "icon", array()))) : (""))) {
                        echo $this->getAttribute($context["group"], "icon", array());
                    }
                    // line 236
                    echo "                                                            <span>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["group"], "label", array()), array(), $this->getAttribute($context["group"], "label_catalogue", array())), "html", null, true);
                    echo "</span>
                                                            <i class=\"fa pull-right fa-angle-left\"></i>
                                                        </a>
                                                        <ul class=\"treeview-menu";
                    // line 239
                    if ((isset($context["active"]) ? $context["active"] : $this->getContext($context, "active"))) {
                        echo " active";
                    }
                    echo "\">
                                                            ";
                    // line 240
                    $context['_parent'] = (array) $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["group"], "items", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["admin"]) {
                        // line 241
                        echo "                                                                ";
                        if (($this->getAttribute($context["admin"], "hasroute", array(0 => "list"), "method") && $this->getAttribute($context["admin"], "isGranted", array(0 => "LIST"), "method"))) {
                            // line 242
                            echo "                                                                    <li";
                            if (($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "get", array(0 => "_sonata_admin"), "method") == $this->getAttribute($context["admin"], "code", array()))) {
                                echo " class=\"active\"";
                            }
                            echo "><a href=\"";
                            echo twig_escape_filter($this->env, $this->getAttribute($context["admin"], "generateUrl", array(0 => "list"), "method"), "html", null, true);
                            echo "\"><i class=\"fa fa-angle-double-right\"></i> ";
                            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans($this->getAttribute($context["admin"], "label", array()), array(), $this->getAttribute($context["admin"], "translationdomain", array())), "html", null, true);
                            echo "</a></li>
                                                                ";
                        }
                        // line 244
                        echo "                                                            ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['admin'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 245
                    echo "                                                        </ul>
                                                    </li>
                                                ";
                }
                // line 248
                echo "                                            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 249
            echo "                                        </ul>
                                    ";
        }
        // line 251
        echo "                                ";
    }

    // line 254
    public function block_side_bar_after_nav($context, array $blocks = array())
    {
        // line 255
        echo "                                    <p class=\"text-center small\" style=\"border-top: 1px solid #444444; padding-top: 10px\"><a href=\"http://sonata-project.org\" rel=\"noreferrer\" target=\"_blank\">sonata project</a></p>
                                ";
    }

    // line 262
    public function block_sonata_page_content($context, array $blocks = array())
    {
        // line 263
        echo "                        <section class=\"content-header\">
                            ";
        // line 264
        $this->displayBlock('sonata_page_content_header', $context, $blocks);
        // line 310
        echo "                        </section>

                        <section class=\"content\">
                            ";
        // line 313
        $this->displayBlock('sonata_admin_content', $context, $blocks);
        // line 348
        echo "                        </section>
                    ";
    }

    // line 264
    public function block_sonata_page_content_header($context, array $blocks = array())
    {
        // line 265
        echo "                                ";
        $this->displayBlock('sonata_page_content_nav', $context, $blocks);
        // line 308
        echo "
                            ";
    }

    // line 265
    public function block_sonata_page_content_nav($context, array $blocks = array())
    {
        // line 266
        echo "                                    ";
        if ((( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"))) ||  !twig_test_empty((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")))) ||  !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"))))) {
            // line 267
            echo "                                        <nav class=\"navbar navbar-default\" role=\"navigation\">
                                            ";
            // line 268
            $this->displayBlock('tab_menu_navbar_header', $context, $blocks);
            // line 275
            echo "                                            <div class=\"container-fluid\">
                                                <div class=\"navbar-left\">
                                                    ";
            // line 277
            if ( !twig_test_empty((isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu")))) {
                // line 278
                echo "                                                        ";
                echo (isset($context["_tab_menu"]) ? $context["_tab_menu"] : $this->getContext($context, "_tab_menu"));
                echo "
                                                    ";
            }
            // line 280
            echo "                                                </div>

                                                ";
            // line 282
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 283
                echo "                                                    <div class=\"nav navbar-right btn-group\">
                                                        ";
                // line 284
                $context['_parent'] = (array) $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 285
                    echo "                                                            <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 287
                echo "                                                    </div>
                                                ";
            }
            // line 289
            echo "
                                                ";
            // line 290
            if ( !twig_test_empty(trim(strtr((isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions")), array("<li>" => "", "</li>" => ""))))) {
                // line 291
                echo "                                                    <ul class=\"nav navbar-nav navbar-right\">
                                                        <li class=\"dropdown sonata-actions\">
                                                            <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">";
                // line 293
                echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_actions", array(), "SonataAdminBundle"), "html", null, true);
                echo " <b class=\"caret\"></b></a>
                                                            <ul class=\"dropdown-menu\" role=\"menu\">
                                                                ";
                // line 295
                echo (isset($context["_actions"]) ? $context["_actions"] : $this->getContext($context, "_actions"));
                echo "
                                                            </ul>
                                                        </li>
                                                    </ul>
                                                ";
            }
            // line 300
            echo "
                                                ";
            // line 301
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions")))) {
                // line 302
                echo "                                                    ";
                echo (isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"));
                echo "
                                                ";
            }
            // line 304
            echo "                                            </div>
                                        </nav>
                                    ";
        }
        // line 307
        echo "                                ";
    }

    // line 268
    public function block_tab_menu_navbar_header($context, array $blocks = array())
    {
        // line 269
        echo "                                                ";
        if ( !twig_test_empty((isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title")))) {
            // line 270
            echo "                                                    <div class=\"navbar-header\">
                                                        <span class=\"navbar-brand\">";
            // line 271
            echo (isset($context["_navbar_title"]) ? $context["_navbar_title"] : $this->getContext($context, "_navbar_title"));
            echo "</span>
                                                    </div>
                                                ";
        }
        // line 274
        echo "                                            ";
    }

    // line 313
    public function block_sonata_admin_content($context, array $blocks = array())
    {
        // line 314
        echo "
                                ";
        // line 315
        $this->displayBlock('notice', $context, $blocks);
        // line 318
        echo "
                                ";
        // line 319
        if ( !twig_test_empty((isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview")))) {
            // line 320
            echo "                                    <div class=\"sonata-ba-preview\">";
            echo (isset($context["_preview"]) ? $context["_preview"] : $this->getContext($context, "_preview"));
            echo "</div>
                                ";
        }
        // line 322
        echo "
                                ";
        // line 323
        if ( !twig_test_empty((isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content")))) {
            // line 324
            echo "                                    <div class=\"sonata-ba-content\">";
            echo (isset($context["_content"]) ? $context["_content"] : $this->getContext($context, "_content"));
            echo "</div>
                                ";
        }
        // line 326
        echo "
                                ";
        // line 327
        if ( !twig_test_empty((isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show")))) {
            // line 328
            echo "                                    <div class=\"sonata-ba-show\">";
            echo (isset($context["_show"]) ? $context["_show"] : $this->getContext($context, "_show"));
            echo "</div>
                                ";
        }
        // line 330
        echo "
                                ";
        // line 331
        if ( !twig_test_empty((isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form")))) {
            // line 332
            echo "                                    <div class=\"sonata-ba-form\">";
            echo (isset($context["_form"]) ? $context["_form"] : $this->getContext($context, "_form"));
            echo "</div>
                                ";
        }
        // line 334
        echo "
                                ";
        // line 335
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))))) {
            // line 336
            echo "                                    ";
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 337
                echo "                                        <div class=\"row\">
                                            ";
                // line 338
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
                                        </div>
                                    ";
            }
            // line 341
            echo "
                                    <div class=\"row\">
                                        ";
            // line 343
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
                                    </div>

                                ";
        }
        // line 347
        echo "                            ";
    }

    // line 315
    public function block_notice($context, array $blocks = array())
    {
        // line 316
        echo "                                    ";
        $this->env->loadTemplate("SonataCoreBundle:FlashMessage:render.html.twig")->display($context);
        // line 317
        echo "                                ";
    }

    public function getTemplateName()
    {
        return "SonataAdminBundle::standard_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1086 => 317,  1083 => 316,  1080 => 315,  1076 => 347,  1069 => 343,  1065 => 341,  1059 => 338,  1056 => 337,  1053 => 336,  1051 => 335,  1048 => 334,  1042 => 332,  1040 => 331,  1037 => 330,  1031 => 328,  1029 => 327,  1026 => 326,  1020 => 324,  1018 => 323,  1015 => 322,  1009 => 320,  1007 => 319,  1004 => 318,  1002 => 315,  999 => 314,  996 => 313,  992 => 274,  986 => 271,  983 => 270,  980 => 269,  977 => 268,  973 => 307,  968 => 304,  962 => 302,  960 => 301,  957 => 300,  949 => 295,  944 => 293,  940 => 291,  938 => 290,  935 => 289,  931 => 287,  916 => 285,  912 => 284,  909 => 283,  907 => 282,  903 => 280,  897 => 278,  895 => 277,  891 => 275,  889 => 268,  886 => 267,  883 => 266,  880 => 265,  875 => 308,  872 => 265,  869 => 264,  864 => 348,  862 => 313,  857 => 310,  855 => 264,  852 => 263,  849 => 262,  844 => 255,  841 => 254,  837 => 251,  833 => 249,  827 => 248,  822 => 245,  816 => 244,  804 => 242,  801 => 241,  797 => 240,  791 => 239,  784 => 236,  780 => 235,  772 => 233,  766 => 232,  763 => 231,  760 => 230,  757 => 229,  752 => 228,  749 => 227,  747 => 226,  744 => 225,  741 => 224,  734 => 223,  731 => 222,  728 => 221,  725 => 220,  719 => 219,  716 => 218,  713 => 217,  710 => 215,  703 => 214,  700 => 213,  694 => 212,  691 => 211,  687 => 210,  683 => 208,  680 => 207,  677 => 206,  671 => 205,  667 => 203,  653 => 194,  647 => 192,  644 => 191,  641 => 190,  637 => 257,  635 => 254,  631 => 252,  628 => 206,  626 => 205,  623 => 204,  620 => 190,  617 => 189,  611 => 258,  609 => 189,  605 => 187,  602 => 186,  595 => 350,  593 => 262,  590 => 261,  588 => 186,  585 => 185,  582 => 184,  574 => 173,  572 => 172,  564 => 166,  562 => 165,  554 => 159,  551 => 158,  546 => 154,  542 => 152,  536 => 150,  533 => 149,  530 => 148,  516 => 147,  510 => 145,  506 => 143,  500 => 141,  492 => 139,  490 => 138,  487 => 137,  484 => 136,  466 => 135,  463 => 134,  461 => 133,  458 => 132,  456 => 131,  453 => 130,  450 => 129,  446 => 180,  442 => 178,  440 => 158,  436 => 156,  434 => 129,  423 => 120,  420 => 119,  417 => 118,  413 => 117,  410 => 116,  406 => 114,  400 => 112,  397 => 111,  389 => 109,  387 => 108,  382 => 107,  379 => 106,  376 => 105,  373 => 104,  365 => 100,  361 => 98,  358 => 97,  353 => 181,  350 => 118,  347 => 104,  345 => 97,  342 => 96,  339 => 95,  333 => 94,  329 => 91,  326 => 90,  323 => 89,  309 => 88,  304 => 86,  301 => 85,  297 => 83,  294 => 82,  291 => 81,  274 => 80,  271 => 79,  268 => 78,  262 => 76,  260 => 75,  254 => 73,  251 => 72,  246 => 68,  243 => 67,  237 => 65,  234 => 64,  231 => 62,  226 => 61,  223 => 60,  220 => 59,  217 => 57,  214 => 56,  205 => 54,  200 => 53,  198 => 52,  191 => 48,  187 => 46,  181 => 45,  173 => 44,  165 => 43,  161 => 41,  158 => 40,  154 => 38,  151 => 37,  142 => 35,  137 => 34,  134 => 33,  131 => 32,  125 => 28,  122 => 27,  116 => 25,  110 => 354,  108 => 184,  105 => 183,  103 => 95,  99 => 94,  95 => 92,  93 => 72,  89 => 70,  87 => 40,  84 => 39,  82 => 32,  79 => 31,  77 => 27,  72 => 25,  68 => 23,  66 => 22,  64 => 21,  62 => 20,  60 => 19,  58 => 18,  56 => 17,  54 => 16,  52 => 15,  50 => 14,  48 => 13,  46 => 12,  44 => 11,);
    }
}

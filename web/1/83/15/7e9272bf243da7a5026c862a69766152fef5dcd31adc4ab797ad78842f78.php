<?php

/* ApplicationSonataPageBundle::new_layout.html.twig */
class __TwigTemplate_83157e9272bf243da7a5026c862a69766152fef5dcd31adc4ab797ad78842f78 extends Sonata\CacheBundle\Twig\TwigTemplate14
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
            'sonata_page_container' => array($this, 'block_sonata_page_container'),
            'page_content' => array($this, 'block_page_content'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('sonata_page_html_tag', $context, $blocks);
        // line 10
        echo "
";
        // line 11
        $this->displayBlock('sonata_page_head', $context, $blocks);
        // line 72
        echo "
";
        // line 73
        $this->displayBlock('sonata_page_body_tag', $context, $blocks);
        // line 76
        echo "
<div class=\"wrapper\">
    <!--=== Header ===-->
    <div class=\"header\">
        <!-- Topbar -->
        <div class=\"topbar\" style=\"padding:0\">

            <div class=\"container\">
                <div class=\"row\">
                    <div class=\"col-md-3\">
                        <a class=\"navbar-brand\" href=\"/\">
                            <br/>
                            <img id=\"logo-header\" src=\"";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/img/logo-lightback.png"), "html", null, true);
        echo "\"
                                 alt=\"Logo\">
                        </a>
                    </div>
                    <div class=\"col-md-9\" style=\"height: 100px;\">
                        <div style=\"overflow: hidden;\">
                            <ul class=\"loginbar pull-right\">
                                ";
        // line 95
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 96
            echo "                                    <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("sonata_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
                                    </li>
                                    <li class=\"topbar-devider\"></li>

                                    <li>
                                        <a href=\"";
            // line 101
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
                                    </li>
                                ";
        } else {
            // line 104
            echo "                                    <li>
                                        <a href=\"";
            // line 105
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_login", array(), "SonataUserBundle"), "html", null, true);
            echo "
                                            / ";
            // line 106
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_register", array(), "SonataUserBundle"), "html", null, true);
            echo "</a></li>
                                ";
        }
        // line 108
        echo "                            </ul>
                        </div>
                        <div class=\"navbar navbar-default mega-menu\" role=\"navigation\"
                             style=\"position: absolute; bottom: 0; right: 0\">
                            <ul class=\"nav navbar-nav\">
                                <li><a href=\"/\">Strona główna</a></li>
                                <li><a href=\"";
        // line 114
        echo $this->env->getExtension('routing')->getPath("gpi_site_regulations");
        echo "\">Regulamin</a></li>
                                <li><a href=\"";
        // line 115
        echo $this->env->getExtension('routing')->getPath("gpi_site_faq");
        echo "\">FAQ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <!-- End Topbar -->

        <!-- Navbar -->

        <!-- End Navbar -->
    </div>
    <!--=== End Header ===-->

    <!--=== Breadcrumbs ===-->
    <div class=\"breadcrumbs\">

    </div>
    <!--/breadcrumbs-->
    <!--=== End Breadcrumbs ===-->

    ";
        // line 140
        $this->displayBlock('sonata_page_container', $context, $blocks);
        // line 183
        echo "
    <!--=== Footer Version 1 ===-->
    <div class=\"footer-v1\" style=\"padding: 10px 0px;\">
        <div class=\"footer\" style=\"padding: 10px 0px;\">
            <div class=\"container\">
                <div class=\"row\">
                    <!-- About -->
                    <div class=\"col-md-3 md-margin-bottom-40\">
                        <a href=\"index.html\"><img id=\"logo-footer\" class=\"footer-logo\"
                                                  src=\"";
        // line 192
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/img/logo-darkback.png"), "html", null, true);
        echo "\" alt=\"\"></a>

                        <p>Nowatorski serwis \"aukcyjno-ogłoszeniowy\" o&nbsp;tematyce inżynierskiej.<br/><br/>
                            Zleceniodawca określa ile może
                            zapłacić za&nbsp;projekt,
                            a&nbsp;Ofertujący wie ile wynosi
                            najniższa oferta.</p>
                    </div>
                    <!--/col-md-3-->
                    <!-- End About -->

                    <div class=\"col-md-3 md-margin-bottom-40\">

                    </div>

                    <!-- Link List -->
                    <div class=\"col-md-3 md-margin-bottom-40\">
                        <div class=\"headline\"><h2>Przydatne linki</h2></div>
                        <ul class=\"list-unstyled link-list\">
                            <li><a href=\"";
        // line 211
        echo $this->env->getExtension('routing')->getPath("gpi_site_regulations");
        echo "\">Regulamin</a><i class=\"fa fa-angle-right\"></i></li>
                            <li><a href=\"";
        // line 212
        echo $this->env->getExtension('routing')->getPath("gpi_site_faq");
        echo "\">FAQ</a><i class=\"fa fa-angle-right\"></i></li>
                        </ul>
                    </div>
                    <!--/col-md-3-->
                    <!-- End Link List -->

                    <!-- Address -->
                    <div class=\"col-md-3 map-img md-margin-bottom-40\">
                        <div class=\"headline\"><h2>Kontakt</h2></div>
                        <address class=\"md-margin-bottom-40\">
                            25, Lorem Lis Street, Orange <br>
                            California, US <br>
                            Phone: 800 123 3456 <br>
                            Fax: 800 123 3456 <br>
                            Email: <a href=\"mailto:kontakt@gpi.pl\" class=\"\">kontakt@gpi.pl</a>
                        </address>
                    </div>
                    <!--/col-md-3-->
                    <!-- End Address -->
                </div>
            </div>
        </div>
    </div>
            <!--/footer-->


        <!--/copyright-->
    </div>
    <!--=== End Footer Version 1 ===-->
</div>
<!--/wrapper-->

<!-- JS Global Compulsory -->
<script type=\"text/javascript\" src=\"";
        // line 245
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/jquery/jquery-migrate.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 246
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- JS Implementing Plugins -->
<script type=\"text/javascript\" src=\"";
        // line 248
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/back-to-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 250
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/flexslider/jquery.flexslider-min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 252
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/owl-carousel/owl-carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<!-- JS Customization -->
<script type=\"text/javascript\" src=\"";
        // line 254
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/custom.js"), "html", null, true);
        echo "\"></script>
<!-- JS Page Level -->
<script type=\"text/javascript\" src=\"";
        // line 256
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/app.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 257
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/plugins/owl-recent-works.js"), "html", null, true);
        echo "\"></script>
";
        // line 260
        echo "<script type=\"text/javascript\">
    jQuery(document).ready(function () {
        App.init();
        App.initSliders();
        OwlRecentWorks.initOwlRecentWorksV2();
    });
</script>

<!-- JS Implementing Plugins -->
<script type=\"text/javascript\" src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/back-to-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"), "html", null, true);
        echo "\"></script>
<!-- JS Customization -->
<script type=\"text/javascript\" src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/custom.js"), "html", null, true);
        echo "\"></script>
<!-- JS Page Level -->
<script type=\"text/javascript\" src=\"";
        // line 275
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/app.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 276
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/plugins/cube-portfolio.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    jQuery(document).ready(function () {
        App.init();
    });
</script>


<!--[if lt IE 9]>
<script type=\"text/javascript\" src=\"";
        // line 285
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/respond.js"), "html", null, true);
        echo "\"></script>
<
script
type = \"text/javascript\"
src = \"";
        // line 289
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(" / bundles / gpilayout / plugins / html5shiv.js
"), "html", null, true);
        // line 290
        echo "\" ></script>
<script type=\"text/javascript\" src=\"";
        // line 291
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/plugins/placeholder-IE-fixes.js"), "html", null, true);
        echo "\"></script>
<![endif]-->

</body>
</html> ";
    }

    // line 1
    public function block_sonata_page_html_tag($context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<!--[if IE 8]>
<html lang=\"en\" class=\"ie8\"> <![endif]-->
<!--[if IE 9]>
<html lang=\"en\" class=\"ie9\"> <![endif]-->
<!--[if !IE]><!-->
<html lang=\"en\"> <!--<![endif]-->
";
    }

    // line 11
    public function block_sonata_page_head($context, array $blocks = array())
    {
        // line 12
        echo "    <head ";
        echo $this->env->getExtension('sonata_seo')->getHeadAttributes();
        echo ">
        <title>Giełda Projektów Inżynierskich</title>
        ";
        // line 14
        echo $this->env->getExtension('sonata_seo')->getTitle();
        echo "
        ";
        // line 15
        echo $this->env->getExtension('sonata_seo')->getMetadatas();
        echo "

        <!-- Meta -->
        <meta http-equiv=\"content-type\" content=\"text/html\" charset=\"utf-8\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <meta name=\"description\" content=\"\"/>
        <meta name=\"author\" content=\"\"/>

        <!-- Favicon -->
        <link rel=\"shortcut icon\" href=\"favicon.ico\"/>

        <!-- CSS Global Compulsory -->
        <link rel=\"stylesheet\" href=\"";
        // line 27
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/bootstrap/css/bootstrap.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 28
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/css/style.css"), "html", null, true);
        echo "\">

        <!-- CSS Implementing Plugins -->
        <link rel=\"stylesheet\" href=\"";
        // line 31
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/line-icons/line-icons.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 32
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/font-awesome/css/font-awesome.min.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/flexslider/flexslider.css"), "html", null, true);
        echo "\">
        ";
        // line 35
        echo "        ";
        // line 36
        echo "        <link rel=\"stylesheet\"
              href=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/sky-forms/version-2.0.1/css/custom-sky-forms.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\"
              href=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.css"), "html", null, true);
        echo "\">


        <!-- CSS Theme -->
        <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/css/theme-colors/default.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/css/pages/page_job.css"), "html", null, true);
        echo "\">

        <!-- CSS Customization -->
        <link rel=\"stylesheet\" href=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/css/custom.css"), "html", null, true);
        echo "\">

        ";
        // line 49
        $this->displayBlock('sonata_page_stylesheets', $context, $blocks);
        // line 56
        echo "
        ";
        // line 57
        $this->displayBlock('sonata_page_javascripts', $context, $blocks);
        // line 69
        echo "
    </head>
";
    }

    // line 49
    public function block_sonata_page_stylesheets($context, array $blocks = array())
    {
        // line 50
        echo "            ";
        $this->displayBlock('page_stylesheets', $context, $blocks);
        // line 55
        echo "        ";
    }

    // line 50
    public function block_page_stylesheets($context, array $blocks = array())
    {
        echo " ";
        // line 51
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "assets", array()), "stylesheets", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 52
            echo "                    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\"/>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        echo "            ";
    }

    // line 57
    public function block_sonata_page_javascripts($context, array $blocks = array())
    {
        // line 58
        echo "            ";
        $this->displayBlock('page_javascripts', $context, $blocks);
        // line 68
        echo "        ";
    }

    // line 58
    public function block_page_javascripts($context, array $blocks = array())
    {
        echo " ";
        // line 59
        echo "                <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
                <!--[if lt IE 9]>
                <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
                <![endif]-->

                ";
        // line 64
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "assets", array()), "javascripts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 65
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($context["js"]), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 67
        echo "            ";
    }

    // line 73
    public function block_sonata_page_body_tag($context, array $blocks = array())
    {
        // line 74
        echo "<body>
";
    }

    // line 140
    public function block_sonata_page_container($context, array $blocks = array())
    {
        // line 141
        echo "        <!--=== Content Part ===-->

        <div class=\"container content\" style=\"padding-top: 0\">
            ";
        // line 144
        $this->displayBlock('page_content', $context, $blocks);
        // line 179
        echo "
        </div><!--/container-->
        <!--=== End Content Part ===-->
    ";
    }

    // line 144
    public function block_page_content($context, array $blocks = array())
    {
        // line 145
        echo "                ";
        if (array_key_exists("content", $context)) {
            // line 146
            echo "                    ";
            echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
            echo "
                ";
        } else {
            // line 148
            echo "                    ";
            $context["content"] = $this->renderBlock("content", $context, $blocks);
            // line 149
            echo "                    ";
            if ((twig_length_filter($this->env, (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"))) > 0)) {
                // line 150
                echo "                        ";
                echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
                echo "
                    ";
            } elseif (array_key_exists("page", $context)) {
                // line 152
                echo "                        ";
                echo $this->env->getExtension('sonata_page')->renderContainer("content", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
                echo "
                    ";
            }
            // line 154
            echo "                ";
        }
        // line 155
        echo "                ";
        if (array_key_exists("page", $context)) {
            // line 156
            echo "
                    <div class=\"row\">


                        <div class=\"col-md-4\">
                            ";
            // line 161
            echo $this->env->getExtension('sonata_page')->renderContainer("left_col", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
            echo "
                            <!-- About Us -->
                            <div class=\"margin-bottom-30\">

                            </div>

                        </div>
                        <!--/col-md-3-->

                        <div class=\"col-md-8\">
                            ";
            // line 171
            echo $this->env->getExtension('sonata_page')->renderContainer("right_col", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
            echo "

                        </div>
                        <!--/col-md-9-->
                    </div><!--/row-->
                ";
        }
        // line 177
        echo "
            ";
    }

    public function getTemplateName()
    {
        return "ApplicationSonataPageBundle::new_layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  584 => 177,  575 => 171,  562 => 161,  555 => 156,  552 => 155,  549 => 154,  543 => 152,  537 => 150,  534 => 149,  531 => 148,  525 => 146,  522 => 145,  519 => 144,  512 => 179,  510 => 144,  505 => 141,  502 => 140,  497 => 74,  494 => 73,  490 => 67,  481 => 65,  477 => 64,  470 => 59,  466 => 58,  462 => 68,  459 => 58,  456 => 57,  452 => 54,  443 => 52,  438 => 51,  434 => 50,  430 => 55,  427 => 50,  424 => 49,  418 => 69,  416 => 57,  413 => 56,  411 => 49,  406 => 47,  400 => 44,  396 => 43,  389 => 39,  384 => 37,  381 => 36,  379 => 35,  375 => 33,  371 => 32,  367 => 31,  361 => 28,  357 => 27,  342 => 15,  338 => 14,  332 => 12,  329 => 11,  318 => 2,  315 => 1,  306 => 291,  303 => 290,  300 => 289,  293 => 285,  281 => 276,  277 => 275,  272 => 273,  267 => 271,  262 => 269,  251 => 260,  247 => 257,  243 => 256,  238 => 254,  233 => 252,  228 => 250,  223 => 248,  218 => 246,  214 => 245,  178 => 212,  174 => 211,  152 => 192,  141 => 183,  139 => 140,  111 => 115,  107 => 114,  99 => 108,  94 => 106,  88 => 105,  85 => 104,  77 => 101,  66 => 96,  64 => 95,  54 => 88,  40 => 76,  38 => 73,  35 => 72,  33 => 11,  30 => 10,  28 => 1,);
    }
}

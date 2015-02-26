<?php

/* ApplicationSonataPageBundle::main_page.html.twig */
class __TwigTemplate_0c30fffc232b5bb6e9e8da42c472ec616dfa21393a5aecb36a192a9737006b5c extends Sonata\CacheBundle\Twig\TwigTemplate14
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

    <div class=\"topbar\" style=\"padding:0; min-width: 400px\">

        <div class=\"container\">
            <div class=\"row\" style=\"position: relative;\">
                <div class=\"col-md-3 col-xs-12\">
                    <a class=\"navbar-brand\" href=\"/\">
                        <br/>
                        <img id=\"logo-header\" src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/img/logo-lightback.png"), "html", null, true);
        echo "\"
                             alt=\"Logo\">
                    </a>
                </div>
                <div class=\"col-md-9 col-xs-12\" style=\"position: static; height: 35px; overflow: hidden;\">
                    &nbsp;
                </div>

                <div style=\"overflow: hidden; position: absolute; right: 5px; top: 0; \">
                    <ul class=\"loginbar pull-right\">
                        ";
        // line 99
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 100
            echo "                            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("sonata_user_profile_show");
            echo "\"><i
                                            class=\"fa fa-user\"></i>&nbsp; ";
            // line 101
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a>
                            </li>
                            <li class=\"topbar-devider\"></li>

                            <li>
                                <a href=\"";
            // line 106
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\"><i class=\"fa fa-sign-out\"></i>&nbsp;";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "
                                </a>
                            </li>
                        ";
        } else {
            // line 110
            echo "                            <li>
                                <a href=\"";
            // line 111
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\"><i
                                            class=\"fa fa-sign-in\"></i>&nbsp;";
            // line 112
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_login", array(), "SonataUserBundle"), "html", null, true);
            echo "
                                    / ";
            // line 113
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_register", array(), "SonataUserBundle"), "html", null, true);
            echo "</a></li>
                        ";
        }
        // line 115
        echo "                    </ul>
                </div>

                <div class=\"navbar navbar-default mega-menu\" role=\"navigation\"
                     style=\"position: absolute; right: 0; bottom: 0;\">
                    <ul class=\"nav navbar-nav\">
                        <li style=\"display: inline-block\"><a href=\"/\">Strona główna</a></li>
                        <li style=\"display: inline-block\"><a href=\"";
        // line 122
        echo $this->env->getExtension('routing')->getPath("gpi_site_regulations");
        echo "\">Regulamin</a></li>
                        <li style=\"display: inline-block\"><a href=\"";
        // line 123
        echo $this->env->getExtension('routing')->getPath("gpi_site_faq");
        echo "\">FAQ</a></li>
                    </ul>
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
        // line 147
        $this->displayBlock('sonata_page_container', $context, $blocks);
        // line 203
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
        // line 212
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
        // line 231
        echo $this->env->getExtension('routing')->getPath("gpi_site_regulations");
        echo "\">Regulamin</a><i
                                    class=\"fa fa-angle-right\"></i></li>
                        <li><a href=\"";
        // line 233
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
                        Marek Laszuk \"RUSKÓW\" <br>
                        ul. Wiejska 10 <br>
                        08-200 Łosice, Polska <br>
                        Telefon: +48 (083) 359 06 13  <br>
                        Fax: +48 (083) 359 06 13 <br>
                        Email: <a href=\"mailto:gpi@projektyinzynierskie.pl\" class=\"\">gpi@projektyinzynierskie.pl</a>
                    </address>
                </div>
                <!--/col-md-3-->
                <!-- End Address -->
            </div>
        </div>
    </div>
</div>
<!--=== End Footer Version 1 ===-->
</div>
<!--/wrapper-->

<!-- JS Global Compulsory -->
<script type=\"text/javascript\" src=\"";
        // line 262
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/jquery/jquery-migrate.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 263
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- JS Implementing Plugins -->
<script type=\"text/javascript\" src=\"";
        // line 265
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/back-to-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 267
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/flexslider/jquery.flexslider-min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 269
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/owl-carousel/owl-carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<!-- JS Customization -->
<script type=\"text/javascript\" src=\"";
        // line 271
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/custom.js"), "html", null, true);
        echo "\"></script>
<!-- JS Page Level -->
<script type=\"text/javascript\" src=\"";
        // line 273
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/app.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 274
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/plugins/owl-recent-works.js"), "html", null, true);
        echo "\"></script>
";
        // line 277
        echo "<script type=\"text/javascript\">
    jQuery(document).ready(function () {
        App.init();
        App.initSliders();
        OwlRecentWorks.initOwlRecentWorksV2();
    });
</script>

<!-- JS Implementing Plugins -->
<script type=\"text/javascript\" src=\"";
        // line 286
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/back-to-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 288
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"), "html", null, true);
        echo "\"></script>
<!-- JS Customization -->
<script type=\"text/javascript\" src=\"";
        // line 290
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/custom.js"), "html", null, true);
        echo "\"></script>
<!-- JS Page Level -->
<script type=\"text/javascript\" src=\"";
        // line 292
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/app.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 293
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/plugins/cube-portfolio.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    jQuery(document).ready(function () {
        App.init();
    });
</script>


<!--[if lt IE 9]>
<script type=\"text/javascript\" src=\"";
        // line 302
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/respond.js"), "html", null, true);
        echo "\"></script>
<
script
type = \"text/javascript\"
src = \"";
        // line 306
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(" / bundles / gpilayout / plugins / html5shiv.js
"), "html", null, true);
        // line 307
        echo "\" ></script>
<script type=\"text/javascript\" src=\"";
        // line 308
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

    // line 147
    public function block_sonata_page_container($context, array $blocks = array())
    {
        // line 148
        echo "    <!--=== Content Part ===-->

    <div class=\"container content\" style=\"padding-top: 0\">
        <div class=\"service-block service-block-dark-blue\" style=\"\">
            <h2 class=\"heading-md\" style=\"margin-top: 0;\"><i class=\"icon-2x color-light icon-line icon-bulb\"></i>
                Czym jest Giełda Projektów Inżynierskich?</h2>

            <p>Nowatorski serwis \"aukcyjno-ogłoszeniowy\" o&nbsp;tematyce inżynierskiej.<br/>
                <span class=\"label rounded label-primary\"><strong>Zleceniodawca</strong></span> określa ile może
                zapłacić za&nbsp;projekt,
                a&nbsp;<span class=\"label rounded label-primary\"><strong>Ofertujący</strong></span> wie ile wynosi
                najniższa oferta.<br/>
                Takie podejście daje możliwość Ofertującym bycia konkurencyjnym,
                a&nbsp;Zleceniodawcy pewność, że nie przepłacił za projekt.</p>
        </div>

        ";
        // line 164
        $this->displayBlock('page_content', $context, $blocks);
        // line 199
        echo "
    </div><!--/container-->
    <!--=== End Content Part ===-->
";
    }

    // line 164
    public function block_page_content($context, array $blocks = array())
    {
        // line 165
        echo "            ";
        if (array_key_exists("content", $context)) {
            // line 166
            echo "                ";
            echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
            echo "
            ";
        } else {
            // line 168
            echo "                ";
            $context["content"] = $this->renderBlock("content", $context, $blocks);
            // line 169
            echo "                ";
            if ((twig_length_filter($this->env, (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"))) > 0)) {
                // line 170
                echo "                    ";
                echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
                echo "
                ";
            } elseif (array_key_exists("page", $context)) {
                // line 172
                echo "                    ";
                echo $this->env->getExtension('sonata_page')->renderContainer("content", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
                echo "
                ";
            }
            // line 174
            echo "            ";
        }
        // line 175
        echo "            ";
        if (array_key_exists("page", $context)) {
            // line 176
            echo "
                <div class=\"row\">


                    <div class=\"col-md-12\">
                        ";
            // line 181
            echo $this->env->getExtension('sonata_page')->renderContainer("left_col", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
            echo "
                        <!-- About Us -->
                        <div class=\"margin-bottom-30\">

                        </div>

                    </div>
                    <!--/col-md-3-->

                    <div class=\"col-md-12\">
                        ";
            // line 191
            echo $this->env->getExtension('sonata_page')->renderContainer("right_col", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
            echo "

                    </div>
                    <!--/col-md-9-->
                </div><!--/row-->
            ";
        }
        // line 197
        echo "
        ";
    }

    public function getTemplateName()
    {
        return "ApplicationSonataPageBundle::main_page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  603 => 197,  594 => 191,  581 => 181,  574 => 176,  571 => 175,  568 => 174,  562 => 172,  556 => 170,  553 => 169,  550 => 168,  544 => 166,  541 => 165,  538 => 164,  531 => 199,  529 => 164,  511 => 148,  508 => 147,  503 => 74,  500 => 73,  496 => 67,  487 => 65,  483 => 64,  476 => 59,  472 => 58,  468 => 68,  465 => 58,  462 => 57,  458 => 54,  449 => 52,  444 => 51,  440 => 50,  436 => 55,  433 => 50,  430 => 49,  424 => 69,  422 => 57,  419 => 56,  417 => 49,  412 => 47,  406 => 44,  402 => 43,  395 => 39,  390 => 37,  387 => 36,  385 => 35,  381 => 33,  377 => 32,  373 => 31,  367 => 28,  363 => 27,  348 => 15,  344 => 14,  338 => 12,  335 => 11,  324 => 2,  321 => 1,  312 => 308,  309 => 307,  306 => 306,  299 => 302,  287 => 293,  283 => 292,  278 => 290,  273 => 288,  268 => 286,  257 => 277,  253 => 274,  249 => 273,  244 => 271,  239 => 269,  234 => 267,  229 => 265,  224 => 263,  220 => 262,  188 => 233,  183 => 231,  161 => 212,  150 => 203,  148 => 147,  121 => 123,  117 => 122,  108 => 115,  103 => 113,  99 => 112,  95 => 111,  92 => 110,  83 => 106,  75 => 101,  70 => 100,  68 => 99,  55 => 89,  40 => 76,  38 => 73,  35 => 72,  33 => 11,  30 => 10,  28 => 1,);
    }
}

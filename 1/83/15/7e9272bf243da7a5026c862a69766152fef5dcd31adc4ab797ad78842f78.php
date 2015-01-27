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
        // line 71
        echo "
";
        // line 72
        $this->displayBlock('sonata_page_body_tag', $context, $blocks);
        // line 75
        echo "
<div class=\"wrapper\">
<!--=== Header ===-->
<div class=\"header\">
    <!-- Topbar -->
    <div class=\"topbar\">

        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-3\">
                    <a class=\"navbar-brand\" href=\"/\">
                        <br/>
                        <img id=\"logo-header\" src=\"";
        // line 87
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/img/logo1-default.png"), "html", null, true);
        echo "\" alt=\"Logo\">
                    </a>
                </div>
                <div class=\"col-md-9\">
                    <div style=\"overflow: hidden;\">
                        <!-- Topbar Navigation -->
                        <ul class=\"loginbar pull-right\">
                            ";
        // line 94
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 95
            echo "                                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("sonata_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>
                                <li class=\"topbar-devider\"></li>

                                <li>
                                    <a href=\"";
            // line 99
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
                                </li>
                            ";
        } else {
            // line 102
            echo "                                <li>
                                    <a href=\"";
            // line 103
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_login", array(), "SonataUserBundle"), "html", null, true);
            echo "
                                        / ";
            // line 104
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_register", array(), "SonataUserBundle"), "html", null, true);
            echo "</a></li>
                            ";
        }
        // line 106
        echo "
                        </ul>
                        <!-- End Topbar Navigation -->
                    </div>
                    <div class=\"row\">
                        <div class=\"col-md-10\">
                            <div class=\"visible-md\" style=\"text-align: center; font-size: 11px; color: #818181\">
                                Nowatorski serwis \"aukcyjno-ogłoszeniowy\" o tematyce inżynierskiej.<br/>
                                Zleceniodawca określa ile może zapłacić za projekt, a Ofertujący wie ile wynosi
                                najniższa
                                oferta.<br/>
                                Takie podejście daje możliwość Ofertującym bycia konkurencyjnym,<br/>
                                a Zleceniodawcy pewność, że nie przepłacił za projekt.
                            </div>

                            <div class=\"visible-lg\" style=\"text-align: center; color: #818181\">
                                Nowatorski serwis \"aukcyjno-ogłoszeniowy\" o tematyce inżynierskiej.<br/>
                                Zleceniodawca określa ile może zapłacić za projekt, a Ofertujący wie ile wynosi
                                najniższa
                                oferta.<br/>
                                Takie podejście daje możliwość Ofertującym bycia konkurencyjnym,<br/>
                                a Zleceniodawcy pewność, że nie przepłacił za projekt.
                            </div>
                        </div>
                    </div>


                    ";
        // line 134
        echo "
                    ";
        // line 136
        echo "

                </div>
            </div>
        </div>
    </div>
    <!-- End Topbar -->

    <!-- Navbar -->
    <div class=\"navbar navbar-default mega-menu\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\".navbar-responsive-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"fa fa-bars\"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse navbar-responsive-collapse\">
                <ul class=\"nav navbar-nav\">
                    <!-- Home -->
                    <li>
                        <a href=\"/\">Strona główna</a>
                    </li>
                    <!-- End Home -->

                    <!-- Privacy Policy -->
                    <li><a href=\"";
        // line 165
        echo $this->env->getExtension('routing')->getPath("gpi_site_regulations");
        echo "\">Regulamin</a></li>
                    <!-- End Privacy Policy -->

                    <!-- FAQs Pages -->
                    <li><a href=\"";
        // line 169
        echo $this->env->getExtension('routing')->getPath("gpi_site_faq");
        echo "\">FAQ</a></li>
                    <!-- End FAQs Pages -->
                    <!-- Search Block -->
                    ";
        // line 173
        echo "                    ";
        // line 174
        echo "
                    ";
        // line 176
        echo "                    ";
        // line 177
        echo "                    ";
        // line 178
        echo "                    ";
        // line 179
        echo "                    ";
        // line 180
        echo "                    ";
        // line 181
        echo "                    ";
        // line 182
        echo "                    ";
        // line 183
        echo "                    ";
        // line 184
        echo "                    <!-- End Search Block -->
                </ul>
            </div>
            <!--/navbar-collapse-->
        </div>
    </div>
    <!-- End Navbar -->
</div>
<!--=== End Header ===-->

<!--=== Breadcrumbs ===-->
<div class=\"breadcrumbs\">
    ";
        // line 197
        echo "    ";
        // line 198
        echo "    ";
        // line 199
        echo "    ";
        // line 200
        echo "    ";
        // line 201
        echo "    ";
        // line 202
        echo "    ";
        // line 203
        echo "    ";
        // line 204
        echo "</div>
<!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

";
        // line 208
        $this->displayBlock('sonata_page_container', $context, $blocks);
        // line 464
        echo "
<!--=== Footer Version 1 ===-->
<div class=\"footer-v1\">
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">

                <!-- Address -->
                <div class=\"col-md-3 map-img md-margin-bottom-40\">
                    <div><h2>Kontakt</h2></div>
                    <address class=\"md-margin-bottom-40\">
                        25, Lorem Lis Street, Orange <br/>
                        California, US <br/>
                        Phone: 800 123 3456 <br/>
                        Email: <a href=\"mailto:info@anybiz.com\" class=\"\">info@anybiz.com</a>
                    </address>
                </div>
                <!--/col-md-3-->
                ";
        // line 483
        echo "            ";
        // line 484
        echo "        </div>
    </div>
    <!--/footer-->

    <div class=\"copyright\">
        <div class=\"container\">
                           <!-- Social Links -->
                <div class=\"col-md-6\">
                    <ul class=\"footer-socials list-inline\">
                        <li>
                            <a href=\"#\" class=\"tooltips\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\"
                               data-original-title=\"Facebook\">
                                <i class=\"fa fa-facebook\"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Social Links -->
            </div>
        </div>
    </div>
    <!--/copyright-->
</div>
<!--=== End Footer Version 1 ===-->
</div>
<!--/wrapper-->

<!-- JS Global Compulsory -->
<script type=\"text/javascript\" src=\"";
        // line 512
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/jquery/jquery-migrate.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 513
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- JS Implementing Plugins -->
<script type=\"text/javascript\" src=\"";
        // line 515
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/back-to-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 517
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/flexslider/jquery.flexslider-min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 519
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/owl-carousel/owl-carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<!-- JS Customization -->
<script type=\"text/javascript\" src=\"";
        // line 521
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/custom.js"), "html", null, true);
        echo "\"></script>
<!-- JS Page Level -->
<script type=\"text/javascript\" src=\"";
        // line 523
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/app.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 524
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/plugins/owl-recent-works.js"), "html", null, true);
        echo "\"></script>
";
        // line 527
        echo "<script type=\"text/javascript\">
    jQuery(document).ready(function () {
        App.init();
        App.initSliders();
        OwlRecentWorks.initOwlRecentWorksV2();
    });
</script>

<!-- JS Implementing Plugins -->
<script type=\"text/javascript\" src=\"";
        // line 536
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/back-to-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 538
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"), "html", null, true);
        echo "\"></script>
<!-- JS Customization -->
<script type=\"text/javascript\" src=\"";
        // line 540
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/custom.js"), "html", null, true);
        echo "\"></script>
<!-- JS Page Level -->
<script type=\"text/javascript\" src=\"";
        // line 542
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/app.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 543
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/plugins/cube-portfolio.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    jQuery(document).ready(function () {
        App.init();
    });
</script>


<!--[if lt IE 9]>
<script type=\"text/javascript\" src=\"";
        // line 552
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/respond.js"), "html", null, true);
        echo "\"></script>
<
script
type = \"text/javascript\"
src = \"";
        // line 556
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(" / bundles / gpilayout / plugins / html5shiv.js
"), "html", null, true);
        // line 557
        echo "\" ></script>
<script type=\"text/javascript\" src=\"";
        // line 558
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
        echo "              ";
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

        <!-- CSS Customization -->
        <link rel=\"stylesheet\" href=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/css/custom.css"), "html", null, true);
        echo "\">

        ";
        // line 48
        $this->displayBlock('sonata_page_stylesheets', $context, $blocks);
        // line 55
        echo "
        ";
        // line 56
        $this->displayBlock('sonata_page_javascripts', $context, $blocks);
        // line 68
        echo "
    </head>
";
    }

    // line 48
    public function block_sonata_page_stylesheets($context, array $blocks = array())
    {
        // line 49
        echo "            ";
        $this->displayBlock('page_stylesheets', $context, $blocks);
        // line 54
        echo "        ";
    }

    // line 49
    public function block_page_stylesheets($context, array $blocks = array())
    {
        echo " ";
        // line 50
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "assets", array()), "stylesheets", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 51
            echo "                    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\"/>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "            ";
    }

    // line 56
    public function block_sonata_page_javascripts($context, array $blocks = array())
    {
        // line 57
        echo "            ";
        $this->displayBlock('page_javascripts', $context, $blocks);
        // line 67
        echo "        ";
    }

    // line 57
    public function block_page_javascripts($context, array $blocks = array())
    {
        echo " ";
        // line 58
        echo "                <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
                <!--[if lt IE 9]>
                <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
                <![endif]-->

                ";
        // line 63
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "assets", array()), "javascripts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 64
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($context["js"]), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 66
        echo "            ";
    }

    // line 72
    public function block_sonata_page_body_tag($context, array $blocks = array())
    {
        // line 73
        echo "<body>
";
    }

    // line 208
    public function block_sonata_page_container($context, array $blocks = array())
    {
        // line 209
        echo "    <!--=== Content Part ===-->

    <div class=\"container content\">
    ";
        // line 212
        $this->displayBlock('page_content', $context, $blocks);
        // line 448
        echo "    <!-- Our Clients -->
    ";
        // line 450
        echo "    ";
        // line 451
        echo "    ";
        // line 452
        echo "    ";
        // line 453
        echo "    ";
        // line 454
        echo "    ";
        // line 455
        echo "    ";
        // line 456
        echo "    ";
        // line 457
        echo "    ";
        // line 458
        echo "    ";
        // line 459
        echo "    ";
        // line 460
        echo "    <!-- End Our Clients -->
    </div><!--/container-->
    <!--=== End Content Part ===-->
";
    }

    // line 212
    public function block_page_content($context, array $blocks = array())
    {
        // line 213
        echo "        ";
        if (array_key_exists("content", $context)) {
            // line 214
            echo "            ";
            echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
            echo "
        ";
        } else {
            // line 216
            echo "            ";
            $context["content"] = $this->renderBlock("content", $context, $blocks);
            // line 217
            echo "            ";
            if ((twig_length_filter($this->env, (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"))) > 0)) {
                // line 218
                echo "                ";
                echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
                echo "
            ";
            } elseif (array_key_exists("page", $context)) {
                // line 220
                echo "                ";
                echo $this->env->getExtension('sonata_page')->renderContainer("content", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
                echo "
            ";
            }
            // line 222
            echo "        ";
        }
        // line 223
        echo "        ";
        if (array_key_exists("page", $context)) {
            // line 224
            echo "
            <div class=\"row\">


            <div class=\"col-md-3\">
                ";
            // line 229
            echo $this->env->getExtension('sonata_page')->renderContainer("left_col", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
            echo "
                <!-- About Us -->
                <div class=\"margin-bottom-30\">
                    ";
            // line 233
            echo "                    ";
            // line 234
            echo "                    ";
            // line 235
            echo "                    ";
            // line 236
            echo "                    ";
            // line 237
            echo "                    ";
            // line 238
            echo "                    ";
            // line 239
            echo "                    ";
            // line 240
            echo "                </div>

                ";
            // line 243
            echo "                ";
            // line 244
            echo "                ";
            // line 245
            echo "                ";
            // line 246
            echo "                ";
            // line 247
            echo "                ";
            // line 248
            echo "                ";
            // line 249
            echo "                ";
            // line 250
            echo "                ";
            // line 251
            echo "                ";
            // line 252
            echo "                ";
            // line 253
            echo "                ";
            // line 254
            echo "                ";
            // line 255
            echo "                ";
            // line 256
            echo "                ";
            // line 257
            echo "                ";
            // line 258
            echo "                ";
            // line 259
            echo "                ";
            // line 260
            echo "                ";
            // line 261
            echo "                ";
            // line 262
            echo "                ";
            // line 263
            echo "                ";
            // line 264
            echo "
                <!-- Contact Us -->
                ";
            // line 267
            echo "                ";
            // line 268
            echo "                ";
            // line 269
            echo "                ";
            // line 270
            echo "                ";
            // line 271
            echo "                ";
            // line 272
            echo "                ";
            // line 273
            echo "                ";
            // line 274
            echo "                ";
            // line 275
            echo "                ";
            // line 276
            echo "            </div>
            <!--/col-md-3-->

            <div class=\"col-md-9\">
                ";
            // line 280
            echo $this->env->getExtension('sonata_page')->renderContainer("right_col", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
            echo "
                <!-- Our Services -->
                ";
            // line 283
            echo "                ";
            // line 284
            echo "                ";
            // line 285
            echo "                ";
            // line 286
            echo "                ";
            // line 287
            echo "                ";
            // line 288
            echo "                ";
            // line 289
            echo "                ";
            // line 290
            echo "                ";
            // line 291
            echo "                ";
            // line 292
            echo "                ";
            // line 293
            echo "                ";
            // line 294
            echo "                ";
            // line 295
            echo "                ";
            // line 296
            echo "                ";
            // line 297
            echo "                ";
            // line 298
            echo "                ";
            // line 299
            echo "                ";
            // line 300
            echo "                ";
            // line 301
            echo "                ";
            // line 302
            echo "                ";
            // line 303
            echo "                ";
            // line 304
            echo "                ";
            // line 305
            echo "                ";
            // line 306
            echo "
                <!-- Blockquotes -->
                ";
            // line 309
            echo "                ";
            // line 310
            echo "                ";
            // line 311
            echo "                ";
            // line 312
            echo "                ";
            // line 313
            echo "                ";
            // line 314
            echo "                ";
            // line 315
            echo "                <!-- End Blockquotes -->

                <!-- Recent Works -->
                ";
            // line 319
            echo "                ";
            // line 320
            echo "                ";
            // line 321
            echo "                ";
            // line 322
            echo "                ";
            // line 323
            echo "                ";
            // line 324
            echo "                ";
            // line 325
            echo "                ";
            // line 326
            echo "                ";
            // line 327
            echo "
                ";
            // line 329
            echo "                ";
            // line 330
            echo "                ";
            // line 331
            echo "                ";
            // line 332
            echo "                ";
            // line 333
            echo "                ";
            // line 334
            echo "                ";
            // line 335
            echo "                ";
            // line 336
            echo "                ";
            // line 337
            echo "                ";
            // line 338
            echo "                ";
            // line 339
            echo "                ";
            // line 340
            echo "                ";
            // line 341
            echo "                ";
            // line 342
            echo "                ";
            // line 343
            echo "                ";
            // line 344
            echo "                ";
            // line 345
            echo "                ";
            // line 346
            echo "                ";
            // line 347
            echo "                ";
            // line 348
            echo "                ";
            // line 349
            echo "                ";
            // line 350
            echo "                ";
            // line 351
            echo "                ";
            // line 352
            echo "                ";
            // line 353
            echo "                ";
            // line 354
            echo "                ";
            // line 355
            echo "                ";
            // line 356
            echo "                ";
            // line 357
            echo "                ";
            // line 358
            echo "                ";
            // line 359
            echo "                ";
            // line 360
            echo "                ";
            // line 361
            echo "                ";
            // line 362
            echo "                ";
            // line 363
            echo "                ";
            // line 364
            echo "                ";
            // line 365
            echo "                ";
            // line 366
            echo "                ";
            // line 367
            echo "                ";
            // line 368
            echo "                ";
            // line 369
            echo "                ";
            // line 370
            echo "                ";
            // line 371
            echo "                ";
            // line 372
            echo "                ";
            // line 373
            echo "                ";
            // line 374
            echo "                ";
            // line 375
            echo "                ";
            // line 376
            echo "                ";
            // line 377
            echo "                ";
            // line 378
            echo "                ";
            // line 379
            echo "                ";
            // line 380
            echo "                ";
            // line 381
            echo "                ";
            // line 382
            echo "                ";
            // line 383
            echo "                ";
            // line 384
            echo "                ";
            // line 385
            echo "                ";
            // line 386
            echo "                ";
            // line 387
            echo "                ";
            // line 388
            echo "                ";
            // line 389
            echo "                ";
            // line 390
            echo "                ";
            // line 391
            echo "                ";
            // line 392
            echo "                ";
            // line 393
            echo "                ";
            // line 394
            echo "                ";
            // line 395
            echo "                ";
            // line 396
            echo "                ";
            // line 397
            echo "                ";
            // line 398
            echo "                ";
            // line 399
            echo "                ";
            // line 400
            echo "                ";
            // line 401
            echo "                ";
            // line 402
            echo "                ";
            // line 403
            echo "                ";
            // line 404
            echo "                ";
            // line 405
            echo "                ";
            // line 406
            echo "                ";
            // line 407
            echo "                ";
            // line 408
            echo "                ";
            // line 409
            echo "                ";
            // line 410
            echo "                ";
            // line 411
            echo "                ";
            // line 412
            echo "                ";
            // line 413
            echo "                ";
            // line 414
            echo "                ";
            // line 415
            echo "                ";
            // line 416
            echo "                ";
            // line 417
            echo "                ";
            // line 418
            echo "                ";
            // line 419
            echo "                ";
            // line 420
            echo "                ";
            // line 421
            echo "                ";
            // line 422
            echo "                ";
            // line 423
            echo "                ";
            // line 424
            echo "                ";
            // line 425
            echo "                ";
            // line 426
            echo "                ";
            // line 427
            echo "                ";
            // line 428
            echo "                ";
            // line 429
            echo "                ";
            // line 430
            echo "                ";
            // line 431
            echo "                ";
            // line 432
            echo "                ";
            // line 433
            echo "                ";
            // line 434
            echo "                ";
            // line 435
            echo "                ";
            // line 436
            echo "                ";
            // line 437
            echo "                ";
            // line 438
            echo "                ";
            // line 439
            echo "                ";
            // line 440
            echo "                ";
            // line 441
            echo "                <!-- End Recent Works -->
            </div>
            <!--/col-md-9-->
            </div><!--/row-->
        ";
        }
        // line 446
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
        return array (  1066 => 446,  1059 => 441,  1057 => 440,  1055 => 439,  1053 => 438,  1051 => 437,  1049 => 436,  1047 => 435,  1045 => 434,  1043 => 433,  1041 => 432,  1039 => 431,  1037 => 430,  1035 => 429,  1033 => 428,  1031 => 427,  1029 => 426,  1027 => 425,  1025 => 424,  1023 => 423,  1021 => 422,  1019 => 421,  1017 => 420,  1015 => 419,  1013 => 418,  1011 => 417,  1009 => 416,  1007 => 415,  1005 => 414,  1003 => 413,  1001 => 412,  999 => 411,  997 => 410,  995 => 409,  993 => 408,  991 => 407,  989 => 406,  987 => 405,  985 => 404,  983 => 403,  981 => 402,  979 => 401,  977 => 400,  975 => 399,  973 => 398,  971 => 397,  969 => 396,  967 => 395,  965 => 394,  963 => 393,  961 => 392,  959 => 391,  957 => 390,  955 => 389,  953 => 388,  951 => 387,  949 => 386,  947 => 385,  945 => 384,  943 => 383,  941 => 382,  939 => 381,  937 => 380,  935 => 379,  933 => 378,  931 => 377,  929 => 376,  927 => 375,  925 => 374,  923 => 373,  921 => 372,  919 => 371,  917 => 370,  915 => 369,  913 => 368,  911 => 367,  909 => 366,  907 => 365,  905 => 364,  903 => 363,  901 => 362,  899 => 361,  897 => 360,  895 => 359,  893 => 358,  891 => 357,  889 => 356,  887 => 355,  885 => 354,  883 => 353,  881 => 352,  879 => 351,  877 => 350,  875 => 349,  873 => 348,  871 => 347,  869 => 346,  867 => 345,  865 => 344,  863 => 343,  861 => 342,  859 => 341,  857 => 340,  855 => 339,  853 => 338,  851 => 337,  849 => 336,  847 => 335,  845 => 334,  843 => 333,  841 => 332,  839 => 331,  837 => 330,  835 => 329,  832 => 327,  830 => 326,  828 => 325,  826 => 324,  824 => 323,  822 => 322,  820 => 321,  818 => 320,  816 => 319,  811 => 315,  809 => 314,  807 => 313,  805 => 312,  803 => 311,  801 => 310,  799 => 309,  795 => 306,  793 => 305,  791 => 304,  789 => 303,  787 => 302,  785 => 301,  783 => 300,  781 => 299,  779 => 298,  777 => 297,  775 => 296,  773 => 295,  771 => 294,  769 => 293,  767 => 292,  765 => 291,  763 => 290,  761 => 289,  759 => 288,  757 => 287,  755 => 286,  753 => 285,  751 => 284,  749 => 283,  744 => 280,  738 => 276,  736 => 275,  734 => 274,  732 => 273,  730 => 272,  728 => 271,  726 => 270,  724 => 269,  722 => 268,  720 => 267,  716 => 264,  714 => 263,  712 => 262,  710 => 261,  708 => 260,  706 => 259,  704 => 258,  702 => 257,  700 => 256,  698 => 255,  696 => 254,  694 => 253,  692 => 252,  690 => 251,  688 => 250,  686 => 249,  684 => 248,  682 => 247,  680 => 246,  678 => 245,  676 => 244,  674 => 243,  670 => 240,  668 => 239,  666 => 238,  664 => 237,  662 => 236,  660 => 235,  658 => 234,  656 => 233,  650 => 229,  643 => 224,  640 => 223,  637 => 222,  631 => 220,  625 => 218,  622 => 217,  619 => 216,  613 => 214,  610 => 213,  607 => 212,  600 => 460,  598 => 459,  596 => 458,  594 => 457,  592 => 456,  590 => 455,  588 => 454,  586 => 453,  584 => 452,  582 => 451,  580 => 450,  577 => 448,  575 => 212,  570 => 209,  567 => 208,  562 => 73,  559 => 72,  555 => 66,  546 => 64,  542 => 63,  535 => 58,  531 => 57,  527 => 67,  524 => 57,  521 => 56,  517 => 53,  508 => 51,  503 => 50,  499 => 49,  495 => 54,  492 => 49,  489 => 48,  483 => 68,  481 => 56,  478 => 55,  476 => 48,  471 => 46,  465 => 43,  458 => 39,  453 => 37,  450 => 36,  448 => 35,  444 => 33,  440 => 32,  436 => 31,  430 => 28,  426 => 27,  411 => 15,  407 => 14,  401 => 12,  398 => 11,  387 => 2,  384 => 1,  375 => 558,  372 => 557,  369 => 556,  362 => 552,  350 => 543,  346 => 542,  341 => 540,  336 => 538,  331 => 536,  320 => 527,  316 => 524,  312 => 523,  307 => 521,  302 => 519,  297 => 517,  292 => 515,  287 => 513,  283 => 512,  253 => 484,  251 => 483,  231 => 464,  229 => 208,  223 => 204,  221 => 203,  219 => 202,  217 => 201,  215 => 200,  213 => 199,  211 => 198,  209 => 197,  195 => 184,  193 => 183,  191 => 182,  189 => 181,  187 => 180,  185 => 179,  183 => 178,  181 => 177,  179 => 176,  176 => 174,  174 => 173,  168 => 169,  161 => 165,  130 => 136,  127 => 134,  98 => 106,  93 => 104,  87 => 103,  84 => 102,  76 => 99,  66 => 95,  64 => 94,  54 => 87,  40 => 75,  38 => 72,  35 => 71,  33 => 11,  30 => 10,  28 => 1,);
    }
}

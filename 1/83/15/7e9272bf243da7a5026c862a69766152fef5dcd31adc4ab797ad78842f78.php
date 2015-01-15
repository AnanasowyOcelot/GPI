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
        // line 560
        echo "
<!--=== Footer Version 1 ===-->
<div class=\"footer-v1\">
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- About -->
                ";
        // line 568
        echo "                ";
        // line 569
        echo "                ";
        // line 570
        echo "                ";
        // line 571
        echo "                ";
        // line 572
        echo "                <!-- End About -->

                <!-- Latest -->
                ";
        // line 576
        echo "                ";
        // line 577
        echo "                ";
        // line 578
        echo "                ";
        // line 579
        echo "                ";
        // line 580
        echo "                ";
        // line 581
        echo "                ";
        // line 582
        echo "                ";
        // line 583
        echo "                ";
        // line 584
        echo "                ";
        // line 585
        echo "                ";
        // line 586
        echo "                ";
        // line 587
        echo "                ";
        // line 588
        echo "                ";
        // line 589
        echo "                ";
        // line 590
        echo "                ";
        // line 591
        echo "                ";
        // line 592
        echo "                ";
        // line 593
        echo "                ";
        // line 594
        echo "                <!-- End Latest -->

                <!-- Link List -->
                ";
        // line 598
        echo "                ";
        // line 599
        echo "                ";
        // line 600
        echo "                ";
        // line 601
        echo "                ";
        // line 602
        echo "                ";
        // line 603
        echo "                ";
        // line 604
        echo "                ";
        // line 605
        echo "                ";
        // line 606
        echo "                ";
        // line 607
        echo "                <!--/col-md-3-->
                <!-- End Link List -->

                <!-- Address -->
                <div class=\"col-md-3 map-img md-margin-bottom-40\">
                    <div class=\"headline\"><h2>Contact Us</h2></div>
                    <address class=\"md-margin-bottom-40\">
                        25, Lorem Lis Street, Orange <br/>
                        California, US <br/>
                        Phone: 800 123 3456 <br/>
                        Fax: 800 123 3456 <br/>
                        Email: <a href=\"mailto:info@anybiz.com\" class=\"\">info@anybiz.com</a>
                    </address>
                </div>
                <!--/col-md-3-->
                <!-- End Address -->
            </div>
        </div>
    </div>
    <!--/footer-->

    <div class=\"copyright\">
        <div class=\"container\">
            <div class=\"row\">
                <div class=\"col-md-6\">
                    <p>
                        2014 &copy; All Rights Reserved.
                        <a href=\"#\">Privacy Policy</a> | <a href=\"#\">Terms of Service</a>
                    </p>
                </div>

                <!-- Social Links -->
                <div class=\"col-md-6\">
                    <ul class=\"footer-socials list-inline\">
                        <li>
                            <a href=\"#\" class=\"tooltips\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\"
                               data-original-title=\"Facebook\">
                                <i class=\"fa fa-facebook\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"tooltips\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\"
                               data-original-title=\"Skype\">
                                <i class=\"fa fa-skype\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"tooltips\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\"
                               data-original-title=\"Google Plus\">
                                <i class=\"fa fa-google-plus\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"tooltips\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\"
                               data-original-title=\"Linkedin\">
                                <i class=\"fa fa-linkedin\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"tooltips\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\"
                               data-original-title=\"Pinterest\">
                                <i class=\"fa fa-pinterest\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"tooltips\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\"
                               data-original-title=\"Twitter\">
                                <i class=\"fa fa-twitter\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"tooltips\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\"
                               data-original-title=\"Dribbble\">
                                <i class=\"fa fa-dribbble\"></i>
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
        // line 696
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/jquery/jquery-migrate.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 697
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- JS Implementing Plugins -->
<script type=\"text/javascript\" src=\"";
        // line 699
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/back-to-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 701
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/flexslider/jquery.flexslider-min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 703
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/owl-carousel/owl-carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<!-- JS Customization -->
<script type=\"text/javascript\" src=\"";
        // line 705
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/custom.js"), "html", null, true);
        echo "\"></script>
<!-- JS Page Level -->
<script type=\"text/javascript\" src=\"";
        // line 707
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/app.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 708
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/plugins/owl-recent-works.js"), "html", null, true);
        echo "\"></script>
";
        // line 711
        echo "<script type=\"text/javascript\">
    jQuery(document).ready(function () {
        App.init();
        App.initSliders();
        OwlRecentWorks.initOwlRecentWorksV2();
    });
</script>

<!-- JS Implementing Plugins -->
<script type=\"text/javascript\" src=\"";
        // line 720
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/back-to-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 722
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"), "html", null, true);
        echo "\"></script>
<!-- JS Customization -->
<script type=\"text/javascript\" src=\"";
        // line 724
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/custom.js"), "html", null, true);
        echo "\"></script>
<!-- JS Page Level -->
<script type=\"text/javascript\" src=\"";
        // line 726
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/app.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 727
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/plugins/cube-portfolio.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    jQuery(document).ready(function () {
        App.init();
    });
</script>


<!--[if lt IE 9]>
<script type=\"text/javascript\" src=\"";
        // line 736
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/respond.js"), "html", null, true);
        echo "\"></script>
<
script
type = \"text/javascript\"
src = \"";
        // line 740
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(" / bundles / gpilayout / plugins / html5shiv.js
"), "html", null, true);
        // line 741
        echo "\" ></script>
<script type=\"text/javascript\" src=\"";
        // line 742
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
        <link rel=\"stylesheet\"
              href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/owl-carousel/owl-carousel/owl.carousel.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\"
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
        echo "    ";
        // line 461
        echo "    ";
        // line 462
        echo "    ";
        // line 463
        echo "    ";
        // line 464
        echo "    ";
        // line 465
        echo "    ";
        // line 466
        echo "    ";
        // line 467
        echo "    ";
        // line 468
        echo "    ";
        // line 469
        echo "    ";
        // line 470
        echo "    ";
        // line 471
        echo "    ";
        // line 472
        echo "    ";
        // line 473
        echo "    ";
        // line 474
        echo "    ";
        // line 475
        echo "    ";
        // line 476
        echo "    ";
        // line 477
        echo "    ";
        // line 478
        echo "    ";
        // line 479
        echo "    ";
        // line 480
        echo "    ";
        // line 481
        echo "    ";
        // line 482
        echo "    ";
        // line 483
        echo "    ";
        // line 484
        echo "    ";
        // line 485
        echo "    ";
        // line 486
        echo "    ";
        // line 487
        echo "    ";
        // line 488
        echo "    ";
        // line 489
        echo "    ";
        // line 490
        echo "    ";
        // line 491
        echo "    ";
        // line 492
        echo "    ";
        // line 493
        echo "    ";
        // line 494
        echo "    ";
        // line 495
        echo "    ";
        // line 496
        echo "    ";
        // line 497
        echo "    ";
        // line 498
        echo "    ";
        // line 499
        echo "    ";
        // line 500
        echo "    ";
        // line 501
        echo "    ";
        // line 502
        echo "    ";
        // line 503
        echo "    ";
        // line 504
        echo "    ";
        // line 505
        echo "    ";
        // line 506
        echo "    ";
        // line 507
        echo "    ";
        // line 508
        echo "    ";
        // line 509
        echo "    ";
        // line 510
        echo "    ";
        // line 511
        echo "    ";
        // line 512
        echo "    ";
        // line 513
        echo "    ";
        // line 514
        echo "    ";
        // line 515
        echo "    ";
        // line 516
        echo "    ";
        // line 517
        echo "    ";
        // line 518
        echo "    ";
        // line 519
        echo "    ";
        // line 520
        echo "    ";
        // line 521
        echo "    ";
        // line 522
        echo "    ";
        // line 523
        echo "    ";
        // line 524
        echo "    ";
        // line 525
        echo "    ";
        // line 526
        echo "    ";
        // line 527
        echo "    ";
        // line 528
        echo "    ";
        // line 529
        echo "    ";
        // line 530
        echo "    ";
        // line 531
        echo "    ";
        // line 532
        echo "    ";
        // line 533
        echo "    ";
        // line 534
        echo "    ";
        // line 535
        echo "    ";
        // line 536
        echo "    ";
        // line 537
        echo "    ";
        // line 538
        echo "    ";
        // line 539
        echo "    ";
        // line 540
        echo "    ";
        // line 541
        echo "    ";
        // line 542
        echo "    ";
        // line 543
        echo "    ";
        // line 544
        echo "    ";
        // line 545
        echo "    ";
        // line 546
        echo "    ";
        // line 547
        echo "    ";
        // line 548
        echo "    ";
        // line 549
        echo "    ";
        // line 550
        echo "    ";
        // line 551
        echo "    ";
        // line 552
        echo "    ";
        // line 553
        echo "    ";
        // line 554
        echo "    ";
        // line 555
        echo "    ";
        // line 556
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
        return array (  1379 => 446,  1372 => 441,  1370 => 440,  1368 => 439,  1366 => 438,  1364 => 437,  1362 => 436,  1360 => 435,  1358 => 434,  1356 => 433,  1354 => 432,  1352 => 431,  1350 => 430,  1348 => 429,  1346 => 428,  1344 => 427,  1342 => 426,  1340 => 425,  1338 => 424,  1336 => 423,  1334 => 422,  1332 => 421,  1330 => 420,  1328 => 419,  1326 => 418,  1324 => 417,  1322 => 416,  1320 => 415,  1318 => 414,  1316 => 413,  1314 => 412,  1312 => 411,  1310 => 410,  1308 => 409,  1306 => 408,  1304 => 407,  1302 => 406,  1300 => 405,  1298 => 404,  1296 => 403,  1294 => 402,  1292 => 401,  1290 => 400,  1288 => 399,  1286 => 398,  1284 => 397,  1282 => 396,  1280 => 395,  1278 => 394,  1276 => 393,  1274 => 392,  1272 => 391,  1270 => 390,  1268 => 389,  1266 => 388,  1264 => 387,  1262 => 386,  1260 => 385,  1258 => 384,  1256 => 383,  1254 => 382,  1252 => 381,  1250 => 380,  1248 => 379,  1246 => 378,  1244 => 377,  1242 => 376,  1240 => 375,  1238 => 374,  1236 => 373,  1234 => 372,  1232 => 371,  1230 => 370,  1228 => 369,  1226 => 368,  1224 => 367,  1222 => 366,  1220 => 365,  1218 => 364,  1216 => 363,  1214 => 362,  1212 => 361,  1210 => 360,  1208 => 359,  1206 => 358,  1204 => 357,  1202 => 356,  1200 => 355,  1198 => 354,  1196 => 353,  1194 => 352,  1192 => 351,  1190 => 350,  1188 => 349,  1186 => 348,  1184 => 347,  1182 => 346,  1180 => 345,  1178 => 344,  1176 => 343,  1174 => 342,  1172 => 341,  1170 => 340,  1168 => 339,  1166 => 338,  1164 => 337,  1162 => 336,  1160 => 335,  1158 => 334,  1156 => 333,  1154 => 332,  1152 => 331,  1150 => 330,  1148 => 329,  1145 => 327,  1143 => 326,  1141 => 325,  1139 => 324,  1137 => 323,  1135 => 322,  1133 => 321,  1131 => 320,  1129 => 319,  1124 => 315,  1122 => 314,  1120 => 313,  1118 => 312,  1116 => 311,  1114 => 310,  1112 => 309,  1108 => 306,  1106 => 305,  1104 => 304,  1102 => 303,  1100 => 302,  1098 => 301,  1096 => 300,  1094 => 299,  1092 => 298,  1090 => 297,  1088 => 296,  1086 => 295,  1084 => 294,  1082 => 293,  1080 => 292,  1078 => 291,  1076 => 290,  1074 => 289,  1072 => 288,  1070 => 287,  1068 => 286,  1066 => 285,  1064 => 284,  1062 => 283,  1057 => 280,  1051 => 276,  1049 => 275,  1047 => 274,  1045 => 273,  1043 => 272,  1041 => 271,  1039 => 270,  1037 => 269,  1035 => 268,  1033 => 267,  1029 => 264,  1027 => 263,  1025 => 262,  1023 => 261,  1021 => 260,  1019 => 259,  1017 => 258,  1015 => 257,  1013 => 256,  1011 => 255,  1009 => 254,  1007 => 253,  1005 => 252,  1003 => 251,  1001 => 250,  999 => 249,  997 => 248,  995 => 247,  993 => 246,  991 => 245,  989 => 244,  987 => 243,  983 => 240,  981 => 239,  979 => 238,  977 => 237,  975 => 236,  973 => 235,  971 => 234,  969 => 233,  963 => 229,  956 => 224,  953 => 223,  950 => 222,  944 => 220,  938 => 218,  935 => 217,  932 => 216,  926 => 214,  923 => 213,  920 => 212,  913 => 556,  911 => 555,  909 => 554,  907 => 553,  905 => 552,  903 => 551,  901 => 550,  899 => 549,  897 => 548,  895 => 547,  893 => 546,  891 => 545,  889 => 544,  887 => 543,  885 => 542,  883 => 541,  881 => 540,  879 => 539,  877 => 538,  875 => 537,  873 => 536,  871 => 535,  869 => 534,  867 => 533,  865 => 532,  863 => 531,  861 => 530,  859 => 529,  857 => 528,  855 => 527,  853 => 526,  851 => 525,  849 => 524,  847 => 523,  845 => 522,  843 => 521,  841 => 520,  839 => 519,  837 => 518,  835 => 517,  833 => 516,  831 => 515,  829 => 514,  827 => 513,  825 => 512,  823 => 511,  821 => 510,  819 => 509,  817 => 508,  815 => 507,  813 => 506,  811 => 505,  809 => 504,  807 => 503,  805 => 502,  803 => 501,  801 => 500,  799 => 499,  797 => 498,  795 => 497,  793 => 496,  791 => 495,  789 => 494,  787 => 493,  785 => 492,  783 => 491,  781 => 490,  779 => 489,  777 => 488,  775 => 487,  773 => 486,  771 => 485,  769 => 484,  767 => 483,  765 => 482,  763 => 481,  761 => 480,  759 => 479,  757 => 478,  755 => 477,  753 => 476,  751 => 475,  749 => 474,  747 => 473,  745 => 472,  743 => 471,  741 => 470,  739 => 469,  737 => 468,  735 => 467,  733 => 466,  731 => 465,  729 => 464,  727 => 463,  725 => 462,  723 => 461,  721 => 460,  719 => 459,  717 => 458,  715 => 457,  713 => 456,  711 => 455,  709 => 454,  707 => 453,  705 => 452,  703 => 451,  701 => 450,  698 => 448,  696 => 212,  691 => 209,  688 => 208,  683 => 73,  680 => 72,  676 => 66,  667 => 64,  663 => 63,  656 => 58,  652 => 57,  648 => 67,  645 => 57,  642 => 56,  638 => 53,  629 => 51,  624 => 50,  620 => 49,  616 => 54,  613 => 49,  610 => 48,  604 => 68,  602 => 56,  599 => 55,  597 => 48,  592 => 46,  586 => 43,  579 => 39,  574 => 37,  569 => 35,  564 => 33,  560 => 32,  556 => 31,  550 => 28,  546 => 27,  531 => 15,  527 => 14,  521 => 12,  518 => 11,  507 => 2,  504 => 1,  495 => 742,  492 => 741,  489 => 740,  482 => 736,  470 => 727,  466 => 726,  461 => 724,  456 => 722,  451 => 720,  440 => 711,  436 => 708,  432 => 707,  427 => 705,  422 => 703,  417 => 701,  412 => 699,  407 => 697,  403 => 696,  312 => 607,  310 => 606,  308 => 605,  306 => 604,  304 => 603,  302 => 602,  300 => 601,  298 => 600,  296 => 599,  294 => 598,  289 => 594,  287 => 593,  285 => 592,  283 => 591,  281 => 590,  279 => 589,  277 => 588,  275 => 587,  273 => 586,  271 => 585,  269 => 584,  267 => 583,  265 => 582,  263 => 581,  261 => 580,  259 => 579,  257 => 578,  255 => 577,  253 => 576,  248 => 572,  246 => 571,  244 => 570,  242 => 569,  240 => 568,  231 => 560,  229 => 208,  223 => 204,  221 => 203,  219 => 202,  217 => 201,  215 => 200,  213 => 199,  211 => 198,  209 => 197,  195 => 184,  193 => 183,  191 => 182,  189 => 181,  187 => 180,  185 => 179,  183 => 178,  181 => 177,  179 => 176,  176 => 174,  174 => 173,  168 => 169,  161 => 165,  130 => 136,  127 => 134,  98 => 106,  93 => 104,  87 => 103,  84 => 102,  76 => 99,  66 => 95,  64 => 94,  54 => 87,  40 => 75,  38 => 72,  35 => 71,  33 => 11,  30 => 10,  28 => 1,);
    }
}

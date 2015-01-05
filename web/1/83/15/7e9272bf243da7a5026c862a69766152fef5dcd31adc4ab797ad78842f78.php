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
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('sonata_page_body_tag', $context, $blocks);
        // line 71
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
        // line 83
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/img/logo1-default.png"), "html", null, true);
        echo "\" alt=\"Logo\">
                    </a>
                </div>
                <div class=\"col-md-9\">
                    <div style=\"overflow: hidden;\">
                        <!-- Topbar Navigation -->
                        <ul class=\"loginbar pull-right\">
                            ";
        // line 90
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 91
            echo "                                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("sonata_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>
                                <li class=\"topbar-devider\"></li>

                                <li>
                                    <a href=\"";
            // line 95
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
                                </li>
                            ";
        } else {
            // line 98
            echo "                                <li>
                                    <a href=\"";
            // line 99
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_login", array(), "SonataUserBundle"), "html", null, true);
            echo "
                                        / ";
            // line 100
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_register", array(), "SonataUserBundle"), "html", null, true);
            echo "</a></li>
                            ";
        }
        // line 102
        echo "
                        </ul>
                        <!-- End Topbar Navigation -->
                    </div>

                    <div class=\"visible-md\" style=\"text-align: center; font-size: 11px; color: #818181\">
                        Nowatorski serwis \"aukcyjno-ogłoszeniowy\" o tematyce inżynierskiej.<br/>
                        Zleceniodawca określa ile może zapłacić za projekt, a Ofertujący wie ile wynosi najniższa
                        oferta.<br/>
                        Takie podejście daje możliwość Ofertującym bycia konkurencyjnym,<br/>
                        a Zleceniodawcy pewność, że nie przepłacił za projekt.
                    </div>
                    <div class=\"visible-lg\" style=\"text-align: center; color: #818181\">
                        Nowatorski serwis \"aukcyjno-ogłoszeniowy\" o tematyce inżynierskiej.<br/>
                        Zleceniodawca określa ile może zapłacić za projekt, a Ofertujący wie ile wynosi najniższa
                        oferta.<br/>
                        Takie podejście daje możliwość Ofertującym bycia konkurencyjnym,<br/>
                        a Zleceniodawcy pewność, że nie przepłacił za projekt.
                    </div>
                </div>
            </div>


            ";
        // line 126
        echo "
            ";
        // line 128
        echo "

        </div>
    </div>
    <!-- End Topbar -->

    <!-- Navbar -->
    <div class=\"navbar navbar-default\" role=\"navigation\">
        <div class=\"container\">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class=\"navbar-header\">
                <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\"
                        data-target=\".navbar-responsive-collapse\">
                    <span class=\"sr-only\">Toggle navigation</span>
                    <span class=\"fa fa-bars\"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class=\"collapse navbar-collapse navbar-responsive-collapse\">
                <ul class=\"nav navbar-nav\">
                    <!-- Home -->
                    <li>
                        <a href=\"/\">Home</a>
                    </li>
                    <!-- End Home -->

                    <!-- FAQs Pages -->
                    <li><a href=\"faq.html\">FAQ</a></li>
                    <!-- End FAQs Pages -->

                    <!-- Privacy Policy -->
                    <li><a href=\"page_privacy.html\">Privacy Policy</a></li>
                    <!-- End Privacy Policy -->

                    <!-- Terms Of Service -->
                    <li><a href=\"page_terms.html\">Terms Of Service</a></li>
                    <!-- End Terms Of Service -->

                    <!-- Search Block -->
                    ";
        // line 169
        echo "                        ";
        // line 170
        echo "
                        ";
        // line 172
        echo "                            ";
        // line 173
        echo "                                ";
        // line 174
        echo "                                ";
        // line 175
        echo "                                    ";
        // line 176
        echo "                                ";
        // line 177
        echo "                            ";
        // line 178
        echo "                        ";
        // line 179
        echo "                    ";
        // line 180
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
        // line 193
        echo "    ";
        // line 194
        echo "    ";
        // line 195
        echo "    ";
        // line 196
        echo "    ";
        // line 197
        echo "    ";
        // line 198
        echo "    ";
        // line 199
        echo "    ";
        // line 200
        echo "</div>
<!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

";
        // line 204
        $this->displayBlock('sonata_page_container', $context, $blocks);
        // line 556
        echo "
<!--=== Footer Version 1 ===-->
<div class=\"footer-v1\">
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- About -->
                ";
        // line 564
        echo "                ";
        // line 565
        echo "                ";
        // line 566
        echo "                ";
        // line 567
        echo "                ";
        // line 568
        echo "                <!-- End About -->

                <!-- Latest -->
                ";
        // line 572
        echo "                ";
        // line 573
        echo "                ";
        // line 574
        echo "                ";
        // line 575
        echo "                ";
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
        echo "                <!-- End Latest -->

                <!-- Link List -->
                ";
        // line 594
        echo "                ";
        // line 595
        echo "                ";
        // line 596
        echo "                ";
        // line 597
        echo "                ";
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
        // line 692
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 693
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/jquery/jquery-migrate.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 694
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- JS Implementing Plugins -->
<script type=\"text/javascript\" src=\"";
        // line 696
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/back-to-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 697
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/flexslider/jquery.flexslider-min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 698
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/owl-carousel/owl-carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<!-- JS Customization -->
<script type=\"text/javascript\" src=\"";
        // line 700
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/custom.js"), "html", null, true);
        echo "\"></script>
<!-- JS Page Level -->
<script type=\"text/javascript\" src=\"";
        // line 702
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/app.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 703
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/plugins/owl-recent-works.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    jQuery(document).ready(function () {
        App.init();
        App.initSliders();
        OwlRecentWorks.initOwlRecentWorksV2();
    });
</script>

<!-- JS Implementing Plugins -->
<script type=\"text/javascript\" src=\"";
        // line 713
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/back-to-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 714
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"), "html", null, true);
        echo "\"></script>
<!-- JS Customization -->
<script type=\"text/javascript\" src=\"";
        // line 716
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/custom.js"), "html", null, true);
        echo "\"></script>
<!-- JS Page Level -->
<script type=\"text/javascript\" src=\"";
        // line 718
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/app.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 719
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/plugins/cube-portfolio.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    jQuery(document).ready(function () {
        App.init();
    });
</script>


<!--[if lt IE 9]>
<script type=\"text/javascript\" src=\"";
        // line 728
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/respond.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 729
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/html5shiv.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 730
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
        <meta http-equiv=\"content-type\" content=\"text/html\" charset=\"utf-8\" />
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />
        <meta name=\"description\" content=\"\" />
        <meta name=\"author\" content=\"\" />

        <!-- Favicon -->
        <link rel=\"shortcut icon\" href=\"favicon.ico\" />

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
        <link rel=\"stylesheet\" href=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/owl-carousel/owl-carousel/owl.carousel.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/sky-forms/version-2.0.1/css/custom-sky-forms.css"), "html", null, true);
        echo "\">
        <link rel=\"stylesheet\" href=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.css"), "html", null, true);
        echo "\">


        <!-- CSS Theme -->
        <link rel=\"stylesheet\" href=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/css/theme-colors/default.css"), "html", null, true);
        echo "\">

        <!-- CSS Customization -->
        <link rel=\"stylesheet\" href=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/css/custom.css"), "html", null, true);
        echo "\">

        ";
        // line 45
        $this->displayBlock('sonata_page_stylesheets', $context, $blocks);
        // line 52
        echo "
        ";
        // line 53
        $this->displayBlock('sonata_page_javascripts', $context, $blocks);
        // line 65
        echo "    </head>
";
    }

    // line 45
    public function block_sonata_page_stylesheets($context, array $blocks = array())
    {
        // line 46
        echo "            ";
        $this->displayBlock('page_stylesheets', $context, $blocks);
        // line 51
        echo "        ";
    }

    // line 46
    public function block_page_stylesheets($context, array $blocks = array())
    {
        echo " ";
        // line 47
        echo "                ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "assets", array()), "stylesheets", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 48
            echo "                    <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\"/>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 50
        echo "            ";
    }

    // line 53
    public function block_sonata_page_javascripts($context, array $blocks = array())
    {
        // line 54
        echo "            ";
        $this->displayBlock('page_javascripts', $context, $blocks);
        // line 64
        echo "        ";
    }

    // line 54
    public function block_page_javascripts($context, array $blocks = array())
    {
        echo " ";
        // line 55
        echo "                <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
                <!--[if lt IE 9]>
                <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
                <![endif]-->

                ";
        // line 60
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "assets", array()), "javascripts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 61
            echo "                    <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($context["js"]), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 63
        echo "            ";
    }

    // line 68
    public function block_sonata_page_body_tag($context, array $blocks = array())
    {
        // line 69
        echo "<body>
";
    }

    // line 204
    public function block_sonata_page_container($context, array $blocks = array())
    {
        // line 205
        echo "    <!--=== Content Part ===-->

    <div class=\"container content\">
    ";
        // line 208
        $this->displayBlock('page_content', $context, $blocks);
        // line 444
        echo "    <!-- Our Clients -->
    ";
        // line 446
        echo "    ";
        // line 447
        echo "    ";
        // line 448
        echo "    ";
        // line 449
        echo "    ";
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
        echo "    <!-- End Our Clients -->
    </div><!--/container-->
    <!--=== End Content Part ===-->
";
    }

    // line 208
    public function block_page_content($context, array $blocks = array())
    {
        // line 209
        echo "        ";
        if (array_key_exists("content", $context)) {
            // line 210
            echo "            ";
            echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
            echo "
        ";
        } else {
            // line 212
            echo "            ";
            $context["content"] = $this->renderBlock("content", $context, $blocks);
            // line 213
            echo "            ";
            if ((twig_length_filter($this->env, (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"))) > 0)) {
                // line 214
                echo "                ";
                echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
                echo "
            ";
            } elseif (array_key_exists("page", $context)) {
                // line 216
                echo "                ";
                echo $this->env->getExtension('sonata_page')->renderContainer("content", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
                echo "
            ";
            }
            // line 218
            echo "        ";
        }
        // line 219
        echo "        ";
        if (array_key_exists("page", $context)) {
            // line 220
            echo "
            <div class=\"row\">


            <div class=\"col-md-3\">
                ";
            // line 225
            echo $this->env->getExtension('sonata_page')->renderContainer("left_col", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
            echo "
                <!-- About Us -->
                <div class=\"margin-bottom-30\">
                    ";
            // line 229
            echo "                    ";
            // line 230
            echo "                    ";
            // line 231
            echo "                    ";
            // line 232
            echo "                    ";
            // line 233
            echo "                    ";
            // line 234
            echo "                    ";
            // line 235
            echo "                    ";
            // line 236
            echo "                </div>

                ";
            // line 239
            echo "                ";
            // line 240
            echo "                ";
            // line 241
            echo "                ";
            // line 242
            echo "                ";
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
            echo "
                <!-- Contact Us -->
                ";
            // line 263
            echo "                ";
            // line 264
            echo "                ";
            // line 265
            echo "                ";
            // line 266
            echo "                ";
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
            echo "            </div>
            <!--/col-md-3-->

            <div class=\"col-md-9\">
                ";
            // line 276
            echo $this->env->getExtension('sonata_page')->renderContainer("right_col", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
            echo "
                <!-- Our Services -->
                ";
            // line 279
            echo "                ";
            // line 280
            echo "                ";
            // line 281
            echo "                ";
            // line 282
            echo "                ";
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
            echo "
                <!-- Blockquotes -->
                ";
            // line 305
            echo "                ";
            // line 306
            echo "                ";
            // line 307
            echo "                ";
            // line 308
            echo "                ";
            // line 309
            echo "                ";
            // line 310
            echo "                ";
            // line 311
            echo "                <!-- End Blockquotes -->

                <!-- Recent Works -->
                ";
            // line 315
            echo "                ";
            // line 316
            echo "                ";
            // line 317
            echo "                ";
            // line 318
            echo "                ";
            // line 319
            echo "                ";
            // line 320
            echo "                ";
            // line 321
            echo "                ";
            // line 322
            echo "                ";
            // line 323
            echo "
                ";
            // line 325
            echo "                ";
            // line 326
            echo "                ";
            // line 327
            echo "                ";
            // line 328
            echo "                ";
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
            echo "                <!-- End Recent Works -->
            </div>
            <!--/col-md-9-->
            </div><!--/row-->
        ";
        }
        // line 442
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
        return array (  1363 => 442,  1356 => 437,  1354 => 436,  1352 => 435,  1350 => 434,  1348 => 433,  1346 => 432,  1344 => 431,  1342 => 430,  1340 => 429,  1338 => 428,  1336 => 427,  1334 => 426,  1332 => 425,  1330 => 424,  1328 => 423,  1326 => 422,  1324 => 421,  1322 => 420,  1320 => 419,  1318 => 418,  1316 => 417,  1314 => 416,  1312 => 415,  1310 => 414,  1308 => 413,  1306 => 412,  1304 => 411,  1302 => 410,  1300 => 409,  1298 => 408,  1296 => 407,  1294 => 406,  1292 => 405,  1290 => 404,  1288 => 403,  1286 => 402,  1284 => 401,  1282 => 400,  1280 => 399,  1278 => 398,  1276 => 397,  1274 => 396,  1272 => 395,  1270 => 394,  1268 => 393,  1266 => 392,  1264 => 391,  1262 => 390,  1260 => 389,  1258 => 388,  1256 => 387,  1254 => 386,  1252 => 385,  1250 => 384,  1248 => 383,  1246 => 382,  1244 => 381,  1242 => 380,  1240 => 379,  1238 => 378,  1236 => 377,  1234 => 376,  1232 => 375,  1230 => 374,  1228 => 373,  1226 => 372,  1224 => 371,  1222 => 370,  1220 => 369,  1218 => 368,  1216 => 367,  1214 => 366,  1212 => 365,  1210 => 364,  1208 => 363,  1206 => 362,  1204 => 361,  1202 => 360,  1200 => 359,  1198 => 358,  1196 => 357,  1194 => 356,  1192 => 355,  1190 => 354,  1188 => 353,  1186 => 352,  1184 => 351,  1182 => 350,  1180 => 349,  1178 => 348,  1176 => 347,  1174 => 346,  1172 => 345,  1170 => 344,  1168 => 343,  1166 => 342,  1164 => 341,  1162 => 340,  1160 => 339,  1158 => 338,  1156 => 337,  1154 => 336,  1152 => 335,  1150 => 334,  1148 => 333,  1146 => 332,  1144 => 331,  1142 => 330,  1140 => 329,  1138 => 328,  1136 => 327,  1134 => 326,  1132 => 325,  1129 => 323,  1127 => 322,  1125 => 321,  1123 => 320,  1121 => 319,  1119 => 318,  1117 => 317,  1115 => 316,  1113 => 315,  1108 => 311,  1106 => 310,  1104 => 309,  1102 => 308,  1100 => 307,  1098 => 306,  1096 => 305,  1092 => 302,  1090 => 301,  1088 => 300,  1086 => 299,  1084 => 298,  1082 => 297,  1080 => 296,  1078 => 295,  1076 => 294,  1074 => 293,  1072 => 292,  1070 => 291,  1068 => 290,  1066 => 289,  1064 => 288,  1062 => 287,  1060 => 286,  1058 => 285,  1056 => 284,  1054 => 283,  1052 => 282,  1050 => 281,  1048 => 280,  1046 => 279,  1041 => 276,  1035 => 272,  1033 => 271,  1031 => 270,  1029 => 269,  1027 => 268,  1025 => 267,  1023 => 266,  1021 => 265,  1019 => 264,  1017 => 263,  1013 => 260,  1011 => 259,  1009 => 258,  1007 => 257,  1005 => 256,  1003 => 255,  1001 => 254,  999 => 253,  997 => 252,  995 => 251,  993 => 250,  991 => 249,  989 => 248,  987 => 247,  985 => 246,  983 => 245,  981 => 244,  979 => 243,  977 => 242,  975 => 241,  973 => 240,  971 => 239,  967 => 236,  965 => 235,  963 => 234,  961 => 233,  959 => 232,  957 => 231,  955 => 230,  953 => 229,  947 => 225,  940 => 220,  937 => 219,  934 => 218,  928 => 216,  922 => 214,  919 => 213,  916 => 212,  910 => 210,  907 => 209,  904 => 208,  897 => 552,  895 => 551,  893 => 550,  891 => 549,  889 => 548,  887 => 547,  885 => 546,  883 => 545,  881 => 544,  879 => 543,  877 => 542,  875 => 541,  873 => 540,  871 => 539,  869 => 538,  867 => 537,  865 => 536,  863 => 535,  861 => 534,  859 => 533,  857 => 532,  855 => 531,  853 => 530,  851 => 529,  849 => 528,  847 => 527,  845 => 526,  843 => 525,  841 => 524,  839 => 523,  837 => 522,  835 => 521,  833 => 520,  831 => 519,  829 => 518,  827 => 517,  825 => 516,  823 => 515,  821 => 514,  819 => 513,  817 => 512,  815 => 511,  813 => 510,  811 => 509,  809 => 508,  807 => 507,  805 => 506,  803 => 505,  801 => 504,  799 => 503,  797 => 502,  795 => 501,  793 => 500,  791 => 499,  789 => 498,  787 => 497,  785 => 496,  783 => 495,  781 => 494,  779 => 493,  777 => 492,  775 => 491,  773 => 490,  771 => 489,  769 => 488,  767 => 487,  765 => 486,  763 => 485,  761 => 484,  759 => 483,  757 => 482,  755 => 481,  753 => 480,  751 => 479,  749 => 478,  747 => 477,  745 => 476,  743 => 475,  741 => 474,  739 => 473,  737 => 472,  735 => 471,  733 => 470,  731 => 469,  729 => 468,  727 => 467,  725 => 466,  723 => 465,  721 => 464,  719 => 463,  717 => 462,  715 => 461,  713 => 460,  711 => 459,  709 => 458,  707 => 457,  705 => 456,  703 => 455,  701 => 454,  699 => 453,  697 => 452,  695 => 451,  693 => 450,  691 => 449,  689 => 448,  687 => 447,  685 => 446,  682 => 444,  680 => 208,  675 => 205,  672 => 204,  667 => 69,  664 => 68,  660 => 63,  651 => 61,  647 => 60,  640 => 55,  636 => 54,  632 => 64,  629 => 54,  626 => 53,  622 => 50,  613 => 48,  608 => 47,  604 => 46,  600 => 51,  597 => 46,  594 => 45,  589 => 65,  587 => 53,  584 => 52,  582 => 45,  577 => 43,  571 => 40,  564 => 36,  560 => 35,  556 => 34,  552 => 33,  548 => 32,  544 => 31,  538 => 28,  534 => 27,  519 => 15,  515 => 14,  509 => 12,  506 => 11,  495 => 2,  492 => 1,  483 => 730,  479 => 729,  475 => 728,  463 => 719,  459 => 718,  454 => 716,  449 => 714,  445 => 713,  432 => 703,  428 => 702,  423 => 700,  418 => 698,  414 => 697,  410 => 696,  405 => 694,  401 => 693,  397 => 692,  306 => 603,  304 => 602,  302 => 601,  300 => 600,  298 => 599,  296 => 598,  294 => 597,  292 => 596,  290 => 595,  288 => 594,  283 => 590,  281 => 589,  279 => 588,  277 => 587,  275 => 586,  273 => 585,  271 => 584,  269 => 583,  267 => 582,  265 => 581,  263 => 580,  261 => 579,  259 => 578,  257 => 577,  255 => 576,  253 => 575,  251 => 574,  249 => 573,  247 => 572,  242 => 568,  240 => 567,  238 => 566,  236 => 565,  234 => 564,  225 => 556,  223 => 204,  217 => 200,  215 => 199,  213 => 198,  211 => 197,  209 => 196,  207 => 195,  205 => 194,  203 => 193,  189 => 180,  187 => 179,  185 => 178,  183 => 177,  181 => 176,  179 => 175,  177 => 174,  175 => 173,  173 => 172,  170 => 170,  168 => 169,  126 => 128,  123 => 126,  98 => 102,  93 => 100,  87 => 99,  84 => 98,  76 => 95,  66 => 91,  64 => 90,  54 => 83,  40 => 71,  38 => 68,  35 => 67,  33 => 11,  30 => 10,  28 => 1,);
    }
}

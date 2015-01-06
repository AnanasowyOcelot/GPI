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
        // line 70
        echo "
";
        // line 71
        $this->displayBlock('sonata_page_body_tag', $context, $blocks);
        // line 74
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
        // line 86
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/img/logo1-default.png"), "html", null, true);
        echo "\" alt=\"Logo\">
                    </a>
                </div>
                <div class=\"col-md-9\">
                    <div style=\"overflow: hidden;\">
                        <!-- Topbar Navigation -->
                        <ul class=\"loginbar pull-right\">
                            ";
        // line 93
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 94
            echo "                                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("sonata_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>
                                <li class=\"topbar-devider\"></li>

                                <li>
                                    <a href=\"";
            // line 98
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
                                </li>
                            ";
        } else {
            // line 101
            echo "                                <li>
                                    <a href=\"";
            // line 102
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_login", array(), "SonataUserBundle"), "html", null, true);
            echo "
                                        / ";
            // line 103
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_register", array(), "SonataUserBundle"), "html", null, true);
            echo "</a></li>
                            ";
        }
        // line 105
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
        // line 133
        echo "
                    ";
        // line 135
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
        // line 164
        echo $this->env->getExtension('routing')->getPath("gpi_site_regulations");
        echo "\">Regulamin</a></li>
                    <!-- End Privacy Policy -->

                    <!-- FAQs Pages -->
                    <li><a href=\"";
        // line 168
        echo $this->env->getExtension('routing')->getPath("gpi_site_faq");
        echo "\">FAQ</a></li>
                    <!-- End FAQs Pages -->
                    <!-- Search Block -->
                    ";
        // line 172
        echo "                    ";
        // line 173
        echo "
                    ";
        // line 175
        echo "                    ";
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
        // line 196
        echo "    ";
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
        echo "</div>
<!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

";
        // line 207
        $this->displayBlock('sonata_page_container', $context, $blocks);
        // line 559
        echo "
<!--=== Footer Version 1 ===-->
<div class=\"footer-v1\">
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- About -->
                ";
        // line 567
        echo "                ";
        // line 568
        echo "                ";
        // line 569
        echo "                ";
        // line 570
        echo "                ";
        // line 571
        echo "                <!-- End About -->

                <!-- Latest -->
                ";
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
        echo "                ";
        // line 591
        echo "                ";
        // line 592
        echo "                ";
        // line 593
        echo "                <!-- End Latest -->

                <!-- Link List -->
                ";
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
        echo "                ";
        // line 604
        echo "                ";
        // line 605
        echo "                ";
        // line 606
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
        // line 695
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
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
<script type=\"text/javascript\">
    jQuery(document).ready(function () {
        App.init();
        App.initSliders();
        OwlRecentWorks.initOwlRecentWorksV2();
    });
</script>

<!-- JS Implementing Plugins -->
<script type=\"text/javascript\" src=\"";
        // line 718
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/back-to-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 720
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"), "html", null, true);
        echo "\"></script>
<!-- JS Customization -->
<script type=\"text/javascript\" src=\"";
        // line 722
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/custom.js"), "html", null, true);
        echo "\"></script>
<!-- JS Page Level -->
<script type=\"text/javascript\" src=\"";
        // line 724
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/app.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 725
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/plugins/cube-portfolio.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    jQuery(document).ready(function () {
        App.init();
    });
</script>


<!--[if lt IE 9]>
<script type=\"text/javascript\" src=\"";
        // line 734
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/respond.js"), "html", null, true);
        echo "\"></script>
<
script
type = \"text/javascript\"
src = \"";
        // line 738
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(" / bundles / gpilayout / plugins / html5shiv.js
"), "html", null, true);
        // line 739
        echo "\" ></script>
<script type=\"text/javascript\" src=\"";
        // line 740
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
        echo "    </head>
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

    // line 71
    public function block_sonata_page_body_tag($context, array $blocks = array())
    {
        // line 72
        echo "<body>
";
    }

    // line 207
    public function block_sonata_page_container($context, array $blocks = array())
    {
        // line 208
        echo "    <!--=== Content Part ===-->

    <div class=\"container content\">
    ";
        // line 211
        $this->displayBlock('page_content', $context, $blocks);
        // line 447
        echo "    <!-- Our Clients -->
    ";
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
        echo "    ";
        // line 553
        echo "    ";
        // line 554
        echo "    ";
        // line 555
        echo "    <!-- End Our Clients -->
    </div><!--/container-->
    <!--=== End Content Part ===-->
";
    }

    // line 211
    public function block_page_content($context, array $blocks = array())
    {
        // line 212
        echo "        ";
        if (array_key_exists("content", $context)) {
            // line 213
            echo "            ";
            echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
            echo "
        ";
        } else {
            // line 215
            echo "            ";
            $context["content"] = $this->renderBlock("content", $context, $blocks);
            // line 216
            echo "            ";
            if ((twig_length_filter($this->env, (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"))) > 0)) {
                // line 217
                echo "                ";
                echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
                echo "
            ";
            } elseif (array_key_exists("page", $context)) {
                // line 219
                echo "                ";
                echo $this->env->getExtension('sonata_page')->renderContainer("content", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
                echo "
            ";
            }
            // line 221
            echo "        ";
        }
        // line 222
        echo "        ";
        if (array_key_exists("page", $context)) {
            // line 223
            echo "
            <div class=\"row\">


            <div class=\"col-md-3\">
                ";
            // line 228
            echo $this->env->getExtension('sonata_page')->renderContainer("left_col", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
            echo "
                <!-- About Us -->
                <div class=\"margin-bottom-30\">
                    ";
            // line 232
            echo "                    ";
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
            echo "                </div>

                ";
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
            echo "                ";
            // line 261
            echo "                ";
            // line 262
            echo "                ";
            // line 263
            echo "
                <!-- Contact Us -->
                ";
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
            echo "                ";
            // line 273
            echo "                ";
            // line 274
            echo "                ";
            // line 275
            echo "            </div>
            <!--/col-md-3-->

            <div class=\"col-md-9\">
                ";
            // line 279
            echo $this->env->getExtension('sonata_page')->renderContainer("right_col", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
            echo "
                <!-- Our Services -->
                ";
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
            echo "                ";
            // line 303
            echo "                ";
            // line 304
            echo "                ";
            // line 305
            echo "
                <!-- Blockquotes -->
                ";
            // line 308
            echo "                ";
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
            echo "                <!-- End Blockquotes -->

                <!-- Recent Works -->
                ";
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
            echo "                ";
            // line 324
            echo "                ";
            // line 325
            echo "                ";
            // line 326
            echo "
                ";
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
            echo "                ";
            // line 438
            echo "                ";
            // line 439
            echo "                ";
            // line 440
            echo "                <!-- End Recent Works -->
            </div>
            <!--/col-md-9-->
            </div><!--/row-->
        ";
        }
        // line 445
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
        return array (  1380 => 445,  1373 => 440,  1371 => 439,  1369 => 438,  1367 => 437,  1365 => 436,  1363 => 435,  1361 => 434,  1359 => 433,  1357 => 432,  1355 => 431,  1353 => 430,  1351 => 429,  1349 => 428,  1347 => 427,  1345 => 426,  1343 => 425,  1341 => 424,  1339 => 423,  1337 => 422,  1335 => 421,  1333 => 420,  1331 => 419,  1329 => 418,  1327 => 417,  1325 => 416,  1323 => 415,  1321 => 414,  1319 => 413,  1317 => 412,  1315 => 411,  1313 => 410,  1311 => 409,  1309 => 408,  1307 => 407,  1305 => 406,  1303 => 405,  1301 => 404,  1299 => 403,  1297 => 402,  1295 => 401,  1293 => 400,  1291 => 399,  1289 => 398,  1287 => 397,  1285 => 396,  1283 => 395,  1281 => 394,  1279 => 393,  1277 => 392,  1275 => 391,  1273 => 390,  1271 => 389,  1269 => 388,  1267 => 387,  1265 => 386,  1263 => 385,  1261 => 384,  1259 => 383,  1257 => 382,  1255 => 381,  1253 => 380,  1251 => 379,  1249 => 378,  1247 => 377,  1245 => 376,  1243 => 375,  1241 => 374,  1239 => 373,  1237 => 372,  1235 => 371,  1233 => 370,  1231 => 369,  1229 => 368,  1227 => 367,  1225 => 366,  1223 => 365,  1221 => 364,  1219 => 363,  1217 => 362,  1215 => 361,  1213 => 360,  1211 => 359,  1209 => 358,  1207 => 357,  1205 => 356,  1203 => 355,  1201 => 354,  1199 => 353,  1197 => 352,  1195 => 351,  1193 => 350,  1191 => 349,  1189 => 348,  1187 => 347,  1185 => 346,  1183 => 345,  1181 => 344,  1179 => 343,  1177 => 342,  1175 => 341,  1173 => 340,  1171 => 339,  1169 => 338,  1167 => 337,  1165 => 336,  1163 => 335,  1161 => 334,  1159 => 333,  1157 => 332,  1155 => 331,  1153 => 330,  1151 => 329,  1149 => 328,  1146 => 326,  1144 => 325,  1142 => 324,  1140 => 323,  1138 => 322,  1136 => 321,  1134 => 320,  1132 => 319,  1130 => 318,  1125 => 314,  1123 => 313,  1121 => 312,  1119 => 311,  1117 => 310,  1115 => 309,  1113 => 308,  1109 => 305,  1107 => 304,  1105 => 303,  1103 => 302,  1101 => 301,  1099 => 300,  1097 => 299,  1095 => 298,  1093 => 297,  1091 => 296,  1089 => 295,  1087 => 294,  1085 => 293,  1083 => 292,  1081 => 291,  1079 => 290,  1077 => 289,  1075 => 288,  1073 => 287,  1071 => 286,  1069 => 285,  1067 => 284,  1065 => 283,  1063 => 282,  1058 => 279,  1052 => 275,  1050 => 274,  1048 => 273,  1046 => 272,  1044 => 271,  1042 => 270,  1040 => 269,  1038 => 268,  1036 => 267,  1034 => 266,  1030 => 263,  1028 => 262,  1026 => 261,  1024 => 260,  1022 => 259,  1020 => 258,  1018 => 257,  1016 => 256,  1014 => 255,  1012 => 254,  1010 => 253,  1008 => 252,  1006 => 251,  1004 => 250,  1002 => 249,  1000 => 248,  998 => 247,  996 => 246,  994 => 245,  992 => 244,  990 => 243,  988 => 242,  984 => 239,  982 => 238,  980 => 237,  978 => 236,  976 => 235,  974 => 234,  972 => 233,  970 => 232,  964 => 228,  957 => 223,  954 => 222,  951 => 221,  945 => 219,  939 => 217,  936 => 216,  933 => 215,  927 => 213,  924 => 212,  921 => 211,  914 => 555,  912 => 554,  910 => 553,  908 => 552,  906 => 551,  904 => 550,  902 => 549,  900 => 548,  898 => 547,  896 => 546,  894 => 545,  892 => 544,  890 => 543,  888 => 542,  886 => 541,  884 => 540,  882 => 539,  880 => 538,  878 => 537,  876 => 536,  874 => 535,  872 => 534,  870 => 533,  868 => 532,  866 => 531,  864 => 530,  862 => 529,  860 => 528,  858 => 527,  856 => 526,  854 => 525,  852 => 524,  850 => 523,  848 => 522,  846 => 521,  844 => 520,  842 => 519,  840 => 518,  838 => 517,  836 => 516,  834 => 515,  832 => 514,  830 => 513,  828 => 512,  826 => 511,  824 => 510,  822 => 509,  820 => 508,  818 => 507,  816 => 506,  814 => 505,  812 => 504,  810 => 503,  808 => 502,  806 => 501,  804 => 500,  802 => 499,  800 => 498,  798 => 497,  796 => 496,  794 => 495,  792 => 494,  790 => 493,  788 => 492,  786 => 491,  784 => 490,  782 => 489,  780 => 488,  778 => 487,  776 => 486,  774 => 485,  772 => 484,  770 => 483,  768 => 482,  766 => 481,  764 => 480,  762 => 479,  760 => 478,  758 => 477,  756 => 476,  754 => 475,  752 => 474,  750 => 473,  748 => 472,  746 => 471,  744 => 470,  742 => 469,  740 => 468,  738 => 467,  736 => 466,  734 => 465,  732 => 464,  730 => 463,  728 => 462,  726 => 461,  724 => 460,  722 => 459,  720 => 458,  718 => 457,  716 => 456,  714 => 455,  712 => 454,  710 => 453,  708 => 452,  706 => 451,  704 => 450,  702 => 449,  699 => 447,  697 => 211,  692 => 208,  689 => 207,  684 => 72,  681 => 71,  677 => 66,  668 => 64,  664 => 63,  657 => 58,  653 => 57,  649 => 67,  646 => 57,  643 => 56,  639 => 53,  630 => 51,  625 => 50,  621 => 49,  617 => 54,  614 => 49,  611 => 48,  606 => 68,  604 => 56,  601 => 55,  599 => 48,  594 => 46,  588 => 43,  581 => 39,  576 => 37,  571 => 35,  566 => 33,  562 => 32,  558 => 31,  552 => 28,  548 => 27,  533 => 15,  529 => 14,  523 => 12,  520 => 11,  509 => 2,  506 => 1,  497 => 740,  494 => 739,  491 => 738,  484 => 734,  472 => 725,  468 => 724,  463 => 722,  458 => 720,  453 => 718,  440 => 708,  436 => 707,  431 => 705,  426 => 703,  421 => 701,  416 => 699,  411 => 697,  407 => 696,  403 => 695,  312 => 606,  310 => 605,  308 => 604,  306 => 603,  304 => 602,  302 => 601,  300 => 600,  298 => 599,  296 => 598,  294 => 597,  289 => 593,  287 => 592,  285 => 591,  283 => 590,  281 => 589,  279 => 588,  277 => 587,  275 => 586,  273 => 585,  271 => 584,  269 => 583,  267 => 582,  265 => 581,  263 => 580,  261 => 579,  259 => 578,  257 => 577,  255 => 576,  253 => 575,  248 => 571,  246 => 570,  244 => 569,  242 => 568,  240 => 567,  231 => 559,  229 => 207,  223 => 203,  221 => 202,  219 => 201,  217 => 200,  215 => 199,  213 => 198,  211 => 197,  209 => 196,  195 => 183,  193 => 182,  191 => 181,  189 => 180,  187 => 179,  185 => 178,  183 => 177,  181 => 176,  179 => 175,  176 => 173,  174 => 172,  168 => 168,  161 => 164,  130 => 135,  127 => 133,  98 => 105,  93 => 103,  87 => 102,  84 => 101,  76 => 98,  66 => 94,  64 => 93,  54 => 86,  40 => 74,  38 => 71,  35 => 70,  33 => 11,  30 => 10,  28 => 1,);
    }
}

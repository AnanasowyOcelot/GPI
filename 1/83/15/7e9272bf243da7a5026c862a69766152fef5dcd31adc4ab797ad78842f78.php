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
                        <a href=\"/\">Home</a>
                    </li>
                    <!-- End Home -->

                    <!-- FAQs Pages -->
                    <li><a href=\"";
        // line 164
        echo $this->env->getExtension('routing')->getPath("gpi_site_faq");
        echo "\">FAQ</a></li>
                    <!-- End FAQs Pages -->

                    <!-- Privacy Policy -->
                    <li><a href=\"";
        // line 168
        echo $this->env->getExtension('routing')->getPath("gpi_site_regulations");
        echo "\">Regulamin</a></li>
                    <!-- End Privacy Policy -->

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
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 697
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/jquery/jquery-migrate.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 698
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- JS Implementing Plugins -->
<script type=\"text/javascript\" src=\"";
        // line 700
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/back-to-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 702
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/flexslider/jquery.flexslider-min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 704
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/owl-carousel/owl-carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<!-- JS Customization -->
<script type=\"text/javascript\" src=\"";
        // line 706
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/custom.js"), "html", null, true);
        echo "\"></script>
<!-- JS Page Level -->
<script type=\"text/javascript\" src=\"";
        // line 708
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/app.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 709
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
        // line 719
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/back-to-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 721
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"), "html", null, true);
        echo "\"></script>
<!-- JS Customization -->
<script type=\"text/javascript\" src=\"";
        // line 723
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/custom.js"), "html", null, true);
        echo "\"></script>
<!-- JS Page Level -->
<script type=\"text/javascript\" src=\"";
        // line 725
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/app.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 726
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/plugins/cube-portfolio.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    jQuery(document).ready(function () {
        App.init();
    });
</script>


<!--[if lt IE 9]>
<script type=\"text/javascript\" src=\"";
        // line 735
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/respond.js"), "html", null, true);
        echo "\"></script>
<
script
type = \"text/javascript\"
src = \"";
        // line 739
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(" / bundles / gpilayout / plugins / html5shiv.js
"), "html", null, true);
        // line 740
        echo "\" ></script>
<script type=\"text/javascript\" src=\"";
        // line 741
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
        return array (  1381 => 446,  1374 => 441,  1372 => 440,  1370 => 439,  1368 => 438,  1366 => 437,  1364 => 436,  1362 => 435,  1360 => 434,  1358 => 433,  1356 => 432,  1354 => 431,  1352 => 430,  1350 => 429,  1348 => 428,  1346 => 427,  1344 => 426,  1342 => 425,  1340 => 424,  1338 => 423,  1336 => 422,  1334 => 421,  1332 => 420,  1330 => 419,  1328 => 418,  1326 => 417,  1324 => 416,  1322 => 415,  1320 => 414,  1318 => 413,  1316 => 412,  1314 => 411,  1312 => 410,  1310 => 409,  1308 => 408,  1306 => 407,  1304 => 406,  1302 => 405,  1300 => 404,  1298 => 403,  1296 => 402,  1294 => 401,  1292 => 400,  1290 => 399,  1288 => 398,  1286 => 397,  1284 => 396,  1282 => 395,  1280 => 394,  1278 => 393,  1276 => 392,  1274 => 391,  1272 => 390,  1270 => 389,  1268 => 388,  1266 => 387,  1264 => 386,  1262 => 385,  1260 => 384,  1258 => 383,  1256 => 382,  1254 => 381,  1252 => 380,  1250 => 379,  1248 => 378,  1246 => 377,  1244 => 376,  1242 => 375,  1240 => 374,  1238 => 373,  1236 => 372,  1234 => 371,  1232 => 370,  1230 => 369,  1228 => 368,  1226 => 367,  1224 => 366,  1222 => 365,  1220 => 364,  1218 => 363,  1216 => 362,  1214 => 361,  1212 => 360,  1210 => 359,  1208 => 358,  1206 => 357,  1204 => 356,  1202 => 355,  1200 => 354,  1198 => 353,  1196 => 352,  1194 => 351,  1192 => 350,  1190 => 349,  1188 => 348,  1186 => 347,  1184 => 346,  1182 => 345,  1180 => 344,  1178 => 343,  1176 => 342,  1174 => 341,  1172 => 340,  1170 => 339,  1168 => 338,  1166 => 337,  1164 => 336,  1162 => 335,  1160 => 334,  1158 => 333,  1156 => 332,  1154 => 331,  1152 => 330,  1150 => 329,  1147 => 327,  1145 => 326,  1143 => 325,  1141 => 324,  1139 => 323,  1137 => 322,  1135 => 321,  1133 => 320,  1131 => 319,  1126 => 315,  1124 => 314,  1122 => 313,  1120 => 312,  1118 => 311,  1116 => 310,  1114 => 309,  1110 => 306,  1108 => 305,  1106 => 304,  1104 => 303,  1102 => 302,  1100 => 301,  1098 => 300,  1096 => 299,  1094 => 298,  1092 => 297,  1090 => 296,  1088 => 295,  1086 => 294,  1084 => 293,  1082 => 292,  1080 => 291,  1078 => 290,  1076 => 289,  1074 => 288,  1072 => 287,  1070 => 286,  1068 => 285,  1066 => 284,  1064 => 283,  1059 => 280,  1053 => 276,  1051 => 275,  1049 => 274,  1047 => 273,  1045 => 272,  1043 => 271,  1041 => 270,  1039 => 269,  1037 => 268,  1035 => 267,  1031 => 264,  1029 => 263,  1027 => 262,  1025 => 261,  1023 => 260,  1021 => 259,  1019 => 258,  1017 => 257,  1015 => 256,  1013 => 255,  1011 => 254,  1009 => 253,  1007 => 252,  1005 => 251,  1003 => 250,  1001 => 249,  999 => 248,  997 => 247,  995 => 246,  993 => 245,  991 => 244,  989 => 243,  985 => 240,  983 => 239,  981 => 238,  979 => 237,  977 => 236,  975 => 235,  973 => 234,  971 => 233,  965 => 229,  958 => 224,  955 => 223,  952 => 222,  946 => 220,  940 => 218,  937 => 217,  934 => 216,  928 => 214,  925 => 213,  922 => 212,  915 => 556,  913 => 555,  911 => 554,  909 => 553,  907 => 552,  905 => 551,  903 => 550,  901 => 549,  899 => 548,  897 => 547,  895 => 546,  893 => 545,  891 => 544,  889 => 543,  887 => 542,  885 => 541,  883 => 540,  881 => 539,  879 => 538,  877 => 537,  875 => 536,  873 => 535,  871 => 534,  869 => 533,  867 => 532,  865 => 531,  863 => 530,  861 => 529,  859 => 528,  857 => 527,  855 => 526,  853 => 525,  851 => 524,  849 => 523,  847 => 522,  845 => 521,  843 => 520,  841 => 519,  839 => 518,  837 => 517,  835 => 516,  833 => 515,  831 => 514,  829 => 513,  827 => 512,  825 => 511,  823 => 510,  821 => 509,  819 => 508,  817 => 507,  815 => 506,  813 => 505,  811 => 504,  809 => 503,  807 => 502,  805 => 501,  803 => 500,  801 => 499,  799 => 498,  797 => 497,  795 => 496,  793 => 495,  791 => 494,  789 => 493,  787 => 492,  785 => 491,  783 => 490,  781 => 489,  779 => 488,  777 => 487,  775 => 486,  773 => 485,  771 => 484,  769 => 483,  767 => 482,  765 => 481,  763 => 480,  761 => 479,  759 => 478,  757 => 477,  755 => 476,  753 => 475,  751 => 474,  749 => 473,  747 => 472,  745 => 471,  743 => 470,  741 => 469,  739 => 468,  737 => 467,  735 => 466,  733 => 465,  731 => 464,  729 => 463,  727 => 462,  725 => 461,  723 => 460,  721 => 459,  719 => 458,  717 => 457,  715 => 456,  713 => 455,  711 => 454,  709 => 453,  707 => 452,  705 => 451,  703 => 450,  700 => 448,  698 => 212,  693 => 209,  690 => 208,  685 => 72,  682 => 71,  678 => 66,  669 => 64,  665 => 63,  658 => 58,  654 => 57,  650 => 67,  647 => 57,  644 => 56,  640 => 53,  631 => 51,  626 => 50,  622 => 49,  618 => 54,  615 => 49,  612 => 48,  607 => 68,  605 => 56,  602 => 55,  600 => 48,  595 => 46,  589 => 43,  582 => 39,  577 => 37,  572 => 35,  567 => 33,  563 => 32,  559 => 31,  553 => 28,  549 => 27,  534 => 15,  530 => 14,  524 => 12,  521 => 11,  510 => 2,  507 => 1,  498 => 741,  495 => 740,  492 => 739,  485 => 735,  473 => 726,  469 => 725,  464 => 723,  459 => 721,  454 => 719,  441 => 709,  437 => 708,  432 => 706,  427 => 704,  422 => 702,  417 => 700,  412 => 698,  408 => 697,  404 => 696,  313 => 607,  311 => 606,  309 => 605,  307 => 604,  305 => 603,  303 => 602,  301 => 601,  299 => 600,  297 => 599,  295 => 598,  290 => 594,  288 => 593,  286 => 592,  284 => 591,  282 => 590,  280 => 589,  278 => 588,  276 => 587,  274 => 586,  272 => 585,  270 => 584,  268 => 583,  266 => 582,  264 => 581,  262 => 580,  260 => 579,  258 => 578,  256 => 577,  254 => 576,  249 => 572,  247 => 571,  245 => 570,  243 => 569,  241 => 568,  232 => 560,  230 => 208,  224 => 204,  222 => 203,  220 => 202,  218 => 201,  216 => 200,  214 => 199,  212 => 198,  210 => 197,  196 => 184,  194 => 183,  192 => 182,  190 => 181,  188 => 180,  186 => 179,  184 => 178,  182 => 177,  180 => 176,  177 => 174,  175 => 173,  168 => 168,  161 => 164,  130 => 135,  127 => 133,  98 => 105,  93 => 103,  87 => 102,  84 => 101,  76 => 98,  66 => 94,  64 => 93,  54 => 86,  40 => 74,  38 => 71,  35 => 70,  33 => 11,  30 => 10,  28 => 1,);
    }
}

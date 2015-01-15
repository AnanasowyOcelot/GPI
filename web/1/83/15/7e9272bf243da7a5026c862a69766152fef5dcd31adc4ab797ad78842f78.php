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
        // line 622
        echo "            ";
        // line 623
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
        // line 651
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/jquery/jquery-migrate.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 652
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- JS Implementing Plugins -->
<script type=\"text/javascript\" src=\"";
        // line 654
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/back-to-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 656
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/flexslider/jquery.flexslider-min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 658
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/owl-carousel/owl-carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<!-- JS Customization -->
<script type=\"text/javascript\" src=\"";
        // line 660
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/custom.js"), "html", null, true);
        echo "\"></script>
<!-- JS Page Level -->
<script type=\"text/javascript\" src=\"";
        // line 662
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/app.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 663
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/plugins/owl-recent-works.js"), "html", null, true);
        echo "\"></script>
";
        // line 666
        echo "<script type=\"text/javascript\">
    jQuery(document).ready(function () {
        App.init();
        App.initSliders();
        OwlRecentWorks.initOwlRecentWorksV2();
    });
</script>

<!-- JS Implementing Plugins -->
<script type=\"text/javascript\" src=\"";
        // line 675
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/back-to-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\"
        src=\"";
        // line 677
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"), "html", null, true);
        echo "\"></script>
<!-- JS Customization -->
<script type=\"text/javascript\" src=\"";
        // line 679
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/custom.js"), "html", null, true);
        echo "\"></script>
<!-- JS Page Level -->
<script type=\"text/javascript\" src=\"";
        // line 681
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/app.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 682
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/plugins/cube-portfolio.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    jQuery(document).ready(function () {
        App.init();
    });
</script>


<!--[if lt IE 9]>
<script type=\"text/javascript\" src=\"";
        // line 691
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/respond.js"), "html", null, true);
        echo "\"></script>
<
script
type = \"text/javascript\"
src = \"";
        // line 695
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl(" / bundles / gpilayout / plugins / html5shiv.js
"), "html", null, true);
        // line 696
        echo "\" ></script>
<script type=\"text/javascript\" src=\"";
        // line 697
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
        return array (  1336 => 446,  1329 => 441,  1327 => 440,  1325 => 439,  1323 => 438,  1321 => 437,  1319 => 436,  1317 => 435,  1315 => 434,  1313 => 433,  1311 => 432,  1309 => 431,  1307 => 430,  1305 => 429,  1303 => 428,  1301 => 427,  1299 => 426,  1297 => 425,  1295 => 424,  1293 => 423,  1291 => 422,  1289 => 421,  1287 => 420,  1285 => 419,  1283 => 418,  1281 => 417,  1279 => 416,  1277 => 415,  1275 => 414,  1273 => 413,  1271 => 412,  1269 => 411,  1267 => 410,  1265 => 409,  1263 => 408,  1261 => 407,  1259 => 406,  1257 => 405,  1255 => 404,  1253 => 403,  1251 => 402,  1249 => 401,  1247 => 400,  1245 => 399,  1243 => 398,  1241 => 397,  1239 => 396,  1237 => 395,  1235 => 394,  1233 => 393,  1231 => 392,  1229 => 391,  1227 => 390,  1225 => 389,  1223 => 388,  1221 => 387,  1219 => 386,  1217 => 385,  1215 => 384,  1213 => 383,  1211 => 382,  1209 => 381,  1207 => 380,  1205 => 379,  1203 => 378,  1201 => 377,  1199 => 376,  1197 => 375,  1195 => 374,  1193 => 373,  1191 => 372,  1189 => 371,  1187 => 370,  1185 => 369,  1183 => 368,  1181 => 367,  1179 => 366,  1177 => 365,  1175 => 364,  1173 => 363,  1171 => 362,  1169 => 361,  1167 => 360,  1165 => 359,  1163 => 358,  1161 => 357,  1159 => 356,  1157 => 355,  1155 => 354,  1153 => 353,  1151 => 352,  1149 => 351,  1147 => 350,  1145 => 349,  1143 => 348,  1141 => 347,  1139 => 346,  1137 => 345,  1135 => 344,  1133 => 343,  1131 => 342,  1129 => 341,  1127 => 340,  1125 => 339,  1123 => 338,  1121 => 337,  1119 => 336,  1117 => 335,  1115 => 334,  1113 => 333,  1111 => 332,  1109 => 331,  1107 => 330,  1105 => 329,  1102 => 327,  1100 => 326,  1098 => 325,  1096 => 324,  1094 => 323,  1092 => 322,  1090 => 321,  1088 => 320,  1086 => 319,  1081 => 315,  1079 => 314,  1077 => 313,  1075 => 312,  1073 => 311,  1071 => 310,  1069 => 309,  1065 => 306,  1063 => 305,  1061 => 304,  1059 => 303,  1057 => 302,  1055 => 301,  1053 => 300,  1051 => 299,  1049 => 298,  1047 => 297,  1045 => 296,  1043 => 295,  1041 => 294,  1039 => 293,  1037 => 292,  1035 => 291,  1033 => 290,  1031 => 289,  1029 => 288,  1027 => 287,  1025 => 286,  1023 => 285,  1021 => 284,  1019 => 283,  1014 => 280,  1008 => 276,  1006 => 275,  1004 => 274,  1002 => 273,  1000 => 272,  998 => 271,  996 => 270,  994 => 269,  992 => 268,  990 => 267,  986 => 264,  984 => 263,  982 => 262,  980 => 261,  978 => 260,  976 => 259,  974 => 258,  972 => 257,  970 => 256,  968 => 255,  966 => 254,  964 => 253,  962 => 252,  960 => 251,  958 => 250,  956 => 249,  954 => 248,  952 => 247,  950 => 246,  948 => 245,  946 => 244,  944 => 243,  940 => 240,  938 => 239,  936 => 238,  934 => 237,  932 => 236,  930 => 235,  928 => 234,  926 => 233,  920 => 229,  913 => 224,  910 => 223,  907 => 222,  901 => 220,  895 => 218,  892 => 217,  889 => 216,  883 => 214,  880 => 213,  877 => 212,  870 => 556,  868 => 555,  866 => 554,  864 => 553,  862 => 552,  860 => 551,  858 => 550,  856 => 549,  854 => 548,  852 => 547,  850 => 546,  848 => 545,  846 => 544,  844 => 543,  842 => 542,  840 => 541,  838 => 540,  836 => 539,  834 => 538,  832 => 537,  830 => 536,  828 => 535,  826 => 534,  824 => 533,  822 => 532,  820 => 531,  818 => 530,  816 => 529,  814 => 528,  812 => 527,  810 => 526,  808 => 525,  806 => 524,  804 => 523,  802 => 522,  800 => 521,  798 => 520,  796 => 519,  794 => 518,  792 => 517,  790 => 516,  788 => 515,  786 => 514,  784 => 513,  782 => 512,  780 => 511,  778 => 510,  776 => 509,  774 => 508,  772 => 507,  770 => 506,  768 => 505,  766 => 504,  764 => 503,  762 => 502,  760 => 501,  758 => 500,  756 => 499,  754 => 498,  752 => 497,  750 => 496,  748 => 495,  746 => 494,  744 => 493,  742 => 492,  740 => 491,  738 => 490,  736 => 489,  734 => 488,  732 => 487,  730 => 486,  728 => 485,  726 => 484,  724 => 483,  722 => 482,  720 => 481,  718 => 480,  716 => 479,  714 => 478,  712 => 477,  710 => 476,  708 => 475,  706 => 474,  704 => 473,  702 => 472,  700 => 471,  698 => 470,  696 => 469,  694 => 468,  692 => 467,  690 => 466,  688 => 465,  686 => 464,  684 => 463,  682 => 462,  680 => 461,  678 => 460,  676 => 459,  674 => 458,  672 => 457,  670 => 456,  668 => 455,  666 => 454,  664 => 453,  662 => 452,  660 => 451,  658 => 450,  655 => 448,  653 => 212,  648 => 209,  645 => 208,  640 => 73,  637 => 72,  633 => 66,  624 => 64,  620 => 63,  613 => 58,  609 => 57,  605 => 67,  602 => 57,  599 => 56,  595 => 53,  586 => 51,  581 => 50,  577 => 49,  573 => 54,  570 => 49,  567 => 48,  561 => 68,  559 => 56,  556 => 55,  554 => 48,  549 => 46,  543 => 43,  536 => 39,  531 => 37,  526 => 35,  521 => 33,  517 => 32,  513 => 31,  507 => 28,  503 => 27,  488 => 15,  484 => 14,  478 => 12,  475 => 11,  464 => 2,  461 => 1,  452 => 697,  449 => 696,  446 => 695,  439 => 691,  427 => 682,  423 => 681,  418 => 679,  413 => 677,  408 => 675,  397 => 666,  393 => 663,  389 => 662,  384 => 660,  379 => 658,  374 => 656,  369 => 654,  364 => 652,  360 => 651,  330 => 623,  328 => 622,  312 => 607,  310 => 606,  308 => 605,  306 => 604,  304 => 603,  302 => 602,  300 => 601,  298 => 600,  296 => 599,  294 => 598,  289 => 594,  287 => 593,  285 => 592,  283 => 591,  281 => 590,  279 => 589,  277 => 588,  275 => 587,  273 => 586,  271 => 585,  269 => 584,  267 => 583,  265 => 582,  263 => 581,  261 => 580,  259 => 579,  257 => 578,  255 => 577,  253 => 576,  248 => 572,  246 => 571,  244 => 570,  242 => 569,  240 => 568,  231 => 560,  229 => 208,  223 => 204,  221 => 203,  219 => 202,  217 => 201,  215 => 200,  213 => 199,  211 => 198,  209 => 197,  195 => 184,  193 => 183,  191 => 182,  189 => 181,  187 => 180,  185 => 179,  183 => 178,  181 => 177,  179 => 176,  176 => 174,  174 => 173,  168 => 169,  161 => 165,  130 => 136,  127 => 134,  98 => 106,  93 => 104,  87 => 103,  84 => 102,  76 => 99,  66 => 95,  64 => 94,  54 => 87,  40 => 75,  38 => 72,  35 => 71,  33 => 11,  30 => 10,  28 => 1,);
    }
}

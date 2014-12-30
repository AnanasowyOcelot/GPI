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
        <!-- Topbar Navigation -->
        <ul class=\"loginbar pull-right\">
            ";
        // line 81
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 82
            echo "                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("sonata_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>
                <li class=\"topbar-devider\"></li>

                <li>
                    <a href=\"";
            // line 86
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a>
                </li>
            ";
        } else {
            // line 89
            echo "                <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_login", array(), "SonataUserBundle"), "html", null, true);
            echo "
                        / ";
            // line 90
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_register", array(), "SonataUserBundle"), "html", null, true);
            echo "</a></li>
            ";
        }
        // line 92
        echo "
        </ul>
        <!-- End Topbar Navigation -->
        ";
        // line 96
        echo "
        ";
        // line 98
        echo "

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
    <a class=\"navbar-brand\" href=\"/\">
        <img id=\"logo-header\" src=\"";
        // line 114
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/img/logo1-default.png"), "html", null, true);
        echo "\" alt=\"Logo\">
    </a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class=\"collapse navbar-collapse navbar-responsive-collapse\">
<ul class=\"nav navbar-nav\">
<!-- Home -->
";
        // line 125
        echo "<!-- End Home -->

";
        // line 144
        echo "
";
        // line 158
        echo "
";
        // line 170
        echo "
";
        // line 222
        echo "
";
        // line 231
        echo "
";
        // line 235
        echo "
";
        // line 248
        echo "
";
        // line 252
        echo "
";
        // line 262
        echo "
";
        // line 266
        echo "
";
        // line 276
        echo "
";
        // line 280
        echo "
";
        // line 292
        echo "
";
        // line 304
        echo "
";
        // line 308
        echo "
";
        // line 319
        echo "
";
        // line 323
        echo "
";
        // line 327
        echo "
";
        // line 357
        echo "
";
        // line 371
        echo "
";
        // line 382
        echo "
";
        // line 394
        echo "
";
        // line 399
        echo "
";
        // line 401
        echo "
";
        // line 403
        echo "
";
        // line 409
        echo "
";
        // line 422
        echo "
";
        // line 440
        echo "
";
        // line 451
        echo "
";
        // line 467
        echo "
";
        // line 481
        echo "
";
        // line 490
        echo "
";
        // line 497
        echo "
";
        // line 502
        echo "
";
        // line 504
        echo "
";
        // line 506
        echo "
";
        // line 508
        echo "
";
        // line 532
        echo "
";
        // line 538
        echo "
";
        // line 540
        echo "
";
        // line 542
        echo "
";
        // line 557
        echo "
";
        // line 577
        echo "
";
        // line 592
        echo "
";
        // line 607
        echo "</div>
<!--/navbar-collapse-->
</div>
</div>
<!-- End Navbar -->
</div>
<!--=== End Header ===-->

<!--=== Breadcrumbs ===-->
<div class=\"breadcrumbs\">
    ";
        // line 618
        echo "    ";
        // line 619
        echo "    ";
        // line 620
        echo "    ";
        // line 621
        echo "    ";
        // line 622
        echo "    ";
        // line 623
        echo "    ";
        // line 624
        echo "    ";
        // line 625
        echo "</div>
<!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

";
        // line 629
        $this->displayBlock('sonata_page_container', $context, $blocks);
        // line 981
        echo "
<!--=== Footer Version 1 ===-->
<div class=\"footer-v1\">
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- About -->
                ";
        // line 989
        echo "                ";
        // line 990
        echo "                ";
        // line 991
        echo "                ";
        // line 992
        echo "                ";
        // line 993
        echo "                <!-- End About -->

                <!-- Latest -->
                ";
        // line 997
        echo "                ";
        // line 998
        echo "                ";
        // line 999
        echo "                ";
        // line 1000
        echo "                ";
        // line 1001
        echo "                ";
        // line 1002
        echo "                ";
        // line 1003
        echo "                ";
        // line 1004
        echo "                ";
        // line 1005
        echo "                ";
        // line 1006
        echo "                ";
        // line 1007
        echo "                ";
        // line 1008
        echo "                ";
        // line 1009
        echo "                ";
        // line 1010
        echo "                ";
        // line 1011
        echo "                ";
        // line 1012
        echo "                ";
        // line 1013
        echo "                ";
        // line 1014
        echo "                ";
        // line 1015
        echo "                <!-- End Latest -->

                <!-- Link List -->
                ";
        // line 1019
        echo "                ";
        // line 1020
        echo "                ";
        // line 1021
        echo "                ";
        // line 1022
        echo "                ";
        // line 1023
        echo "                ";
        // line 1024
        echo "                ";
        // line 1025
        echo "                ";
        // line 1026
        echo "                ";
        // line 1027
        echo "                ";
        // line 1028
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
        // line 1117
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/jquery/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 1118
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/jquery/jquery-migrate.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 1119
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/bootstrap/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<!-- JS Implementing Plugins -->
<script type=\"text/javascript\" src=\"";
        // line 1121
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/back-to-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 1122
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/flexslider/jquery.flexslider-min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 1123
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/owl-carousel/owl-carousel/owl.carousel.js"), "html", null, true);
        echo "\"></script>
<!-- JS Customization -->
<script type=\"text/javascript\" src=\"";
        // line 1125
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/custom.js"), "html", null, true);
        echo "\"></script>
<!-- JS Page Level -->
<script type=\"text/javascript\" src=\"";
        // line 1127
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/app.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 1128
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
        // line 1138
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/back-to-top.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 1139
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js"), "html", null, true);
        echo "\"></script>
<!-- JS Customization -->
<script type=\"text/javascript\" src=\"";
        // line 1141
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/custom.js"), "html", null, true);
        echo "\"></script>
<!-- JS Page Level -->
<script type=\"text/javascript\" src=\"";
        // line 1143
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/app.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 1144
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/js/plugins/cube-portfolio.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
    jQuery(document).ready(function () {
        App.init();
    });
</script>


<!--[if lt IE 9]>
<script type=\"text/javascript\" src=\"";
        // line 1153
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/respond.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 1154
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("/bundles/gpilayout/plugins/html5shiv.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 1155
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

    // line 629
    public function block_sonata_page_container($context, array $blocks = array())
    {
        // line 630
        echo "    <!--=== Content Part ===-->

    <div class=\"container content\">
    ";
        // line 633
        $this->displayBlock('page_content', $context, $blocks);
        // line 869
        echo "    <!-- Our Clients -->
    ";
        // line 871
        echo "    ";
        // line 872
        echo "    ";
        // line 873
        echo "    ";
        // line 874
        echo "    ";
        // line 875
        echo "    ";
        // line 876
        echo "    ";
        // line 877
        echo "    ";
        // line 878
        echo "    ";
        // line 879
        echo "    ";
        // line 880
        echo "    ";
        // line 881
        echo "    ";
        // line 882
        echo "    ";
        // line 883
        echo "    ";
        // line 884
        echo "    ";
        // line 885
        echo "    ";
        // line 886
        echo "    ";
        // line 887
        echo "    ";
        // line 888
        echo "    ";
        // line 889
        echo "    ";
        // line 890
        echo "    ";
        // line 891
        echo "    ";
        // line 892
        echo "    ";
        // line 893
        echo "    ";
        // line 894
        echo "    ";
        // line 895
        echo "    ";
        // line 896
        echo "    ";
        // line 897
        echo "    ";
        // line 898
        echo "    ";
        // line 899
        echo "    ";
        // line 900
        echo "    ";
        // line 901
        echo "    ";
        // line 902
        echo "    ";
        // line 903
        echo "    ";
        // line 904
        echo "    ";
        // line 905
        echo "    ";
        // line 906
        echo "    ";
        // line 907
        echo "    ";
        // line 908
        echo "    ";
        // line 909
        echo "    ";
        // line 910
        echo "    ";
        // line 911
        echo "    ";
        // line 912
        echo "    ";
        // line 913
        echo "    ";
        // line 914
        echo "    ";
        // line 915
        echo "    ";
        // line 916
        echo "    ";
        // line 917
        echo "    ";
        // line 918
        echo "    ";
        // line 919
        echo "    ";
        // line 920
        echo "    ";
        // line 921
        echo "    ";
        // line 922
        echo "    ";
        // line 923
        echo "    ";
        // line 924
        echo "    ";
        // line 925
        echo "    ";
        // line 926
        echo "    ";
        // line 927
        echo "    ";
        // line 928
        echo "    ";
        // line 929
        echo "    ";
        // line 930
        echo "    ";
        // line 931
        echo "    ";
        // line 932
        echo "    ";
        // line 933
        echo "    ";
        // line 934
        echo "    ";
        // line 935
        echo "    ";
        // line 936
        echo "    ";
        // line 937
        echo "    ";
        // line 938
        echo "    ";
        // line 939
        echo "    ";
        // line 940
        echo "    ";
        // line 941
        echo "    ";
        // line 942
        echo "    ";
        // line 943
        echo "    ";
        // line 944
        echo "    ";
        // line 945
        echo "    ";
        // line 946
        echo "    ";
        // line 947
        echo "    ";
        // line 948
        echo "    ";
        // line 949
        echo "    ";
        // line 950
        echo "    ";
        // line 951
        echo "    ";
        // line 952
        echo "    ";
        // line 953
        echo "    ";
        // line 954
        echo "    ";
        // line 955
        echo "    ";
        // line 956
        echo "    ";
        // line 957
        echo "    ";
        // line 958
        echo "    ";
        // line 959
        echo "    ";
        // line 960
        echo "    ";
        // line 961
        echo "    ";
        // line 962
        echo "    ";
        // line 963
        echo "    ";
        // line 964
        echo "    ";
        // line 965
        echo "    ";
        // line 966
        echo "    ";
        // line 967
        echo "    ";
        // line 968
        echo "    ";
        // line 969
        echo "    ";
        // line 970
        echo "    ";
        // line 971
        echo "    ";
        // line 972
        echo "    ";
        // line 973
        echo "    ";
        // line 974
        echo "    ";
        // line 975
        echo "    ";
        // line 976
        echo "    ";
        // line 977
        echo "    <!-- End Our Clients -->
    </div><!--/container-->
    <!--=== End Content Part ===-->
";
    }

    // line 633
    public function block_page_content($context, array $blocks = array())
    {
        // line 634
        echo "        ";
        if (array_key_exists("content", $context)) {
            // line 635
            echo "            ";
            echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
            echo "
        ";
        } else {
            // line 637
            echo "            ";
            $context["content"] = $this->renderBlock("content", $context, $blocks);
            // line 638
            echo "            ";
            if ((twig_length_filter($this->env, (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"))) > 0)) {
                // line 639
                echo "                ";
                echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
                echo "
            ";
            } elseif (array_key_exists("page", $context)) {
                // line 641
                echo "                ";
                echo $this->env->getExtension('sonata_page')->renderContainer("content", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
                echo "
            ";
            }
            // line 643
            echo "        ";
        }
        // line 644
        echo "        ";
        if (array_key_exists("page", $context)) {
            // line 645
            echo "
            <div class=\"row\">


            <div class=\"col-md-3\">
                ";
            // line 650
            echo $this->env->getExtension('sonata_page')->renderContainer("left_col", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
            echo "
                <!-- About Us -->
                <div class=\"margin-bottom-30\">
                    ";
            // line 654
            echo "                    ";
            // line 655
            echo "                    ";
            // line 656
            echo "                    ";
            // line 657
            echo "                    ";
            // line 658
            echo "                    ";
            // line 659
            echo "                    ";
            // line 660
            echo "                    ";
            // line 661
            echo "                </div>

                ";
            // line 664
            echo "                ";
            // line 665
            echo "                ";
            // line 666
            echo "                ";
            // line 667
            echo "                ";
            // line 668
            echo "                ";
            // line 669
            echo "                ";
            // line 670
            echo "                ";
            // line 671
            echo "                ";
            // line 672
            echo "                ";
            // line 673
            echo "                ";
            // line 674
            echo "                ";
            // line 675
            echo "                ";
            // line 676
            echo "                ";
            // line 677
            echo "                ";
            // line 678
            echo "                ";
            // line 679
            echo "                ";
            // line 680
            echo "                ";
            // line 681
            echo "                ";
            // line 682
            echo "                ";
            // line 683
            echo "                ";
            // line 684
            echo "                ";
            // line 685
            echo "
                <!-- Contact Us -->
                ";
            // line 688
            echo "                ";
            // line 689
            echo "                ";
            // line 690
            echo "                ";
            // line 691
            echo "                ";
            // line 692
            echo "                ";
            // line 693
            echo "                ";
            // line 694
            echo "                ";
            // line 695
            echo "                ";
            // line 696
            echo "                ";
            // line 697
            echo "            </div>
            <!--/col-md-3-->

            <div class=\"col-md-9\">
                ";
            // line 701
            echo $this->env->getExtension('sonata_page')->renderContainer("right_col", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
            echo "
                <!-- Our Services -->
                ";
            // line 704
            echo "                ";
            // line 705
            echo "                ";
            // line 706
            echo "                ";
            // line 707
            echo "                ";
            // line 708
            echo "                ";
            // line 709
            echo "                ";
            // line 710
            echo "                ";
            // line 711
            echo "                ";
            // line 712
            echo "                ";
            // line 713
            echo "                ";
            // line 714
            echo "                ";
            // line 715
            echo "                ";
            // line 716
            echo "                ";
            // line 717
            echo "                ";
            // line 718
            echo "                ";
            // line 719
            echo "                ";
            // line 720
            echo "                ";
            // line 721
            echo "                ";
            // line 722
            echo "                ";
            // line 723
            echo "                ";
            // line 724
            echo "                ";
            // line 725
            echo "                ";
            // line 726
            echo "                ";
            // line 727
            echo "
                <!-- Blockquotes -->
                ";
            // line 730
            echo "                ";
            // line 731
            echo "                ";
            // line 732
            echo "                ";
            // line 733
            echo "                ";
            // line 734
            echo "                ";
            // line 735
            echo "                ";
            // line 736
            echo "                <!-- End Blockquotes -->

                <!-- Recent Works -->
                ";
            // line 740
            echo "                ";
            // line 741
            echo "                ";
            // line 742
            echo "                ";
            // line 743
            echo "                ";
            // line 744
            echo "                ";
            // line 745
            echo "                ";
            // line 746
            echo "                ";
            // line 747
            echo "                ";
            // line 748
            echo "
                ";
            // line 750
            echo "                ";
            // line 751
            echo "                ";
            // line 752
            echo "                ";
            // line 753
            echo "                ";
            // line 754
            echo "                ";
            // line 755
            echo "                ";
            // line 756
            echo "                ";
            // line 757
            echo "                ";
            // line 758
            echo "                ";
            // line 759
            echo "                ";
            // line 760
            echo "                ";
            // line 761
            echo "                ";
            // line 762
            echo "                ";
            // line 763
            echo "                ";
            // line 764
            echo "                ";
            // line 765
            echo "                ";
            // line 766
            echo "                ";
            // line 767
            echo "                ";
            // line 768
            echo "                ";
            // line 769
            echo "                ";
            // line 770
            echo "                ";
            // line 771
            echo "                ";
            // line 772
            echo "                ";
            // line 773
            echo "                ";
            // line 774
            echo "                ";
            // line 775
            echo "                ";
            // line 776
            echo "                ";
            // line 777
            echo "                ";
            // line 778
            echo "                ";
            // line 779
            echo "                ";
            // line 780
            echo "                ";
            // line 781
            echo "                ";
            // line 782
            echo "                ";
            // line 783
            echo "                ";
            // line 784
            echo "                ";
            // line 785
            echo "                ";
            // line 786
            echo "                ";
            // line 787
            echo "                ";
            // line 788
            echo "                ";
            // line 789
            echo "                ";
            // line 790
            echo "                ";
            // line 791
            echo "                ";
            // line 792
            echo "                ";
            // line 793
            echo "                ";
            // line 794
            echo "                ";
            // line 795
            echo "                ";
            // line 796
            echo "                ";
            // line 797
            echo "                ";
            // line 798
            echo "                ";
            // line 799
            echo "                ";
            // line 800
            echo "                ";
            // line 801
            echo "                ";
            // line 802
            echo "                ";
            // line 803
            echo "                ";
            // line 804
            echo "                ";
            // line 805
            echo "                ";
            // line 806
            echo "                ";
            // line 807
            echo "                ";
            // line 808
            echo "                ";
            // line 809
            echo "                ";
            // line 810
            echo "                ";
            // line 811
            echo "                ";
            // line 812
            echo "                ";
            // line 813
            echo "                ";
            // line 814
            echo "                ";
            // line 815
            echo "                ";
            // line 816
            echo "                ";
            // line 817
            echo "                ";
            // line 818
            echo "                ";
            // line 819
            echo "                ";
            // line 820
            echo "                ";
            // line 821
            echo "                ";
            // line 822
            echo "                ";
            // line 823
            echo "                ";
            // line 824
            echo "                ";
            // line 825
            echo "                ";
            // line 826
            echo "                ";
            // line 827
            echo "                ";
            // line 828
            echo "                ";
            // line 829
            echo "                ";
            // line 830
            echo "                ";
            // line 831
            echo "                ";
            // line 832
            echo "                ";
            // line 833
            echo "                ";
            // line 834
            echo "                ";
            // line 835
            echo "                ";
            // line 836
            echo "                ";
            // line 837
            echo "                ";
            // line 838
            echo "                ";
            // line 839
            echo "                ";
            // line 840
            echo "                ";
            // line 841
            echo "                ";
            // line 842
            echo "                ";
            // line 843
            echo "                ";
            // line 844
            echo "                ";
            // line 845
            echo "                ";
            // line 846
            echo "                ";
            // line 847
            echo "                ";
            // line 848
            echo "                ";
            // line 849
            echo "                ";
            // line 850
            echo "                ";
            // line 851
            echo "                ";
            // line 852
            echo "                ";
            // line 853
            echo "                ";
            // line 854
            echo "                ";
            // line 855
            echo "                ";
            // line 856
            echo "                ";
            // line 857
            echo "                ";
            // line 858
            echo "                ";
            // line 859
            echo "                ";
            // line 860
            echo "                ";
            // line 861
            echo "                ";
            // line 862
            echo "                <!-- End Recent Works -->
            </div>
            <!--/col-md-9-->
            </div><!--/row-->
        ";
        }
        // line 867
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
        return array (  1429 => 867,  1422 => 862,  1420 => 861,  1418 => 860,  1416 => 859,  1414 => 858,  1412 => 857,  1410 => 856,  1408 => 855,  1406 => 854,  1404 => 853,  1402 => 852,  1400 => 851,  1398 => 850,  1396 => 849,  1394 => 848,  1392 => 847,  1390 => 846,  1388 => 845,  1386 => 844,  1384 => 843,  1382 => 842,  1380 => 841,  1378 => 840,  1376 => 839,  1374 => 838,  1372 => 837,  1370 => 836,  1368 => 835,  1366 => 834,  1364 => 833,  1362 => 832,  1360 => 831,  1358 => 830,  1356 => 829,  1354 => 828,  1352 => 827,  1350 => 826,  1348 => 825,  1346 => 824,  1344 => 823,  1342 => 822,  1340 => 821,  1338 => 820,  1336 => 819,  1334 => 818,  1332 => 817,  1330 => 816,  1328 => 815,  1326 => 814,  1324 => 813,  1322 => 812,  1320 => 811,  1318 => 810,  1316 => 809,  1314 => 808,  1312 => 807,  1310 => 806,  1308 => 805,  1306 => 804,  1304 => 803,  1302 => 802,  1300 => 801,  1298 => 800,  1296 => 799,  1294 => 798,  1292 => 797,  1290 => 796,  1288 => 795,  1286 => 794,  1284 => 793,  1282 => 792,  1280 => 791,  1278 => 790,  1276 => 789,  1274 => 788,  1272 => 787,  1270 => 786,  1268 => 785,  1266 => 784,  1264 => 783,  1262 => 782,  1260 => 781,  1258 => 780,  1256 => 779,  1254 => 778,  1252 => 777,  1250 => 776,  1248 => 775,  1246 => 774,  1244 => 773,  1242 => 772,  1240 => 771,  1238 => 770,  1236 => 769,  1234 => 768,  1232 => 767,  1230 => 766,  1228 => 765,  1226 => 764,  1224 => 763,  1222 => 762,  1220 => 761,  1218 => 760,  1216 => 759,  1214 => 758,  1212 => 757,  1210 => 756,  1208 => 755,  1206 => 754,  1204 => 753,  1202 => 752,  1200 => 751,  1198 => 750,  1195 => 748,  1193 => 747,  1191 => 746,  1189 => 745,  1187 => 744,  1185 => 743,  1183 => 742,  1181 => 741,  1179 => 740,  1174 => 736,  1172 => 735,  1170 => 734,  1168 => 733,  1166 => 732,  1164 => 731,  1162 => 730,  1158 => 727,  1156 => 726,  1154 => 725,  1152 => 724,  1150 => 723,  1148 => 722,  1146 => 721,  1144 => 720,  1142 => 719,  1140 => 718,  1138 => 717,  1136 => 716,  1134 => 715,  1132 => 714,  1130 => 713,  1128 => 712,  1126 => 711,  1124 => 710,  1122 => 709,  1120 => 708,  1118 => 707,  1116 => 706,  1114 => 705,  1112 => 704,  1107 => 701,  1101 => 697,  1099 => 696,  1097 => 695,  1095 => 694,  1093 => 693,  1091 => 692,  1089 => 691,  1087 => 690,  1085 => 689,  1083 => 688,  1079 => 685,  1077 => 684,  1075 => 683,  1073 => 682,  1071 => 681,  1069 => 680,  1067 => 679,  1065 => 678,  1063 => 677,  1061 => 676,  1059 => 675,  1057 => 674,  1055 => 673,  1053 => 672,  1051 => 671,  1049 => 670,  1047 => 669,  1045 => 668,  1043 => 667,  1041 => 666,  1039 => 665,  1037 => 664,  1033 => 661,  1031 => 660,  1029 => 659,  1027 => 658,  1025 => 657,  1023 => 656,  1021 => 655,  1019 => 654,  1013 => 650,  1006 => 645,  1003 => 644,  1000 => 643,  994 => 641,  988 => 639,  985 => 638,  982 => 637,  976 => 635,  973 => 634,  970 => 633,  963 => 977,  961 => 976,  959 => 975,  957 => 974,  955 => 973,  953 => 972,  951 => 971,  949 => 970,  947 => 969,  945 => 968,  943 => 967,  941 => 966,  939 => 965,  937 => 964,  935 => 963,  933 => 962,  931 => 961,  929 => 960,  927 => 959,  925 => 958,  923 => 957,  921 => 956,  919 => 955,  917 => 954,  915 => 953,  913 => 952,  911 => 951,  909 => 950,  907 => 949,  905 => 948,  903 => 947,  901 => 946,  899 => 945,  897 => 944,  895 => 943,  893 => 942,  891 => 941,  889 => 940,  887 => 939,  885 => 938,  883 => 937,  881 => 936,  879 => 935,  877 => 934,  875 => 933,  873 => 932,  871 => 931,  869 => 930,  867 => 929,  865 => 928,  863 => 927,  861 => 926,  859 => 925,  857 => 924,  855 => 923,  853 => 922,  851 => 921,  849 => 920,  847 => 919,  845 => 918,  843 => 917,  841 => 916,  839 => 915,  837 => 914,  835 => 913,  833 => 912,  831 => 911,  829 => 910,  827 => 909,  825 => 908,  823 => 907,  821 => 906,  819 => 905,  817 => 904,  815 => 903,  813 => 902,  811 => 901,  809 => 900,  807 => 899,  805 => 898,  803 => 897,  801 => 896,  799 => 895,  797 => 894,  795 => 893,  793 => 892,  791 => 891,  789 => 890,  787 => 889,  785 => 888,  783 => 887,  781 => 886,  779 => 885,  777 => 884,  775 => 883,  773 => 882,  771 => 881,  769 => 880,  767 => 879,  765 => 878,  763 => 877,  761 => 876,  759 => 875,  757 => 874,  755 => 873,  753 => 872,  751 => 871,  748 => 869,  746 => 633,  741 => 630,  738 => 629,  733 => 69,  730 => 68,  726 => 63,  717 => 61,  713 => 60,  706 => 55,  702 => 54,  698 => 64,  695 => 54,  692 => 53,  688 => 50,  679 => 48,  674 => 47,  670 => 46,  666 => 51,  663 => 46,  660 => 45,  655 => 65,  653 => 53,  650 => 52,  648 => 45,  643 => 43,  637 => 40,  630 => 36,  626 => 35,  622 => 34,  618 => 33,  614 => 32,  610 => 31,  604 => 28,  600 => 27,  585 => 15,  581 => 14,  575 => 12,  572 => 11,  561 => 2,  558 => 1,  549 => 1155,  545 => 1154,  541 => 1153,  529 => 1144,  525 => 1143,  520 => 1141,  515 => 1139,  511 => 1138,  498 => 1128,  494 => 1127,  489 => 1125,  484 => 1123,  480 => 1122,  476 => 1121,  471 => 1119,  467 => 1118,  463 => 1117,  372 => 1028,  370 => 1027,  368 => 1026,  366 => 1025,  364 => 1024,  362 => 1023,  360 => 1022,  358 => 1021,  356 => 1020,  354 => 1019,  349 => 1015,  347 => 1014,  345 => 1013,  343 => 1012,  341 => 1011,  339 => 1010,  337 => 1009,  335 => 1008,  333 => 1007,  331 => 1006,  329 => 1005,  327 => 1004,  325 => 1003,  323 => 1002,  321 => 1001,  319 => 1000,  317 => 999,  315 => 998,  313 => 997,  308 => 993,  306 => 992,  304 => 991,  302 => 990,  300 => 989,  291 => 981,  289 => 629,  283 => 625,  281 => 624,  279 => 623,  277 => 622,  275 => 621,  273 => 620,  271 => 619,  269 => 618,  257 => 607,  254 => 592,  251 => 577,  248 => 557,  245 => 542,  242 => 540,  239 => 538,  236 => 532,  233 => 508,  230 => 506,  227 => 504,  224 => 502,  221 => 497,  218 => 490,  215 => 481,  212 => 467,  209 => 451,  206 => 440,  203 => 422,  200 => 409,  197 => 403,  194 => 401,  191 => 399,  188 => 394,  185 => 382,  182 => 371,  179 => 357,  176 => 327,  173 => 323,  170 => 319,  167 => 308,  164 => 304,  161 => 292,  158 => 280,  155 => 276,  152 => 266,  149 => 262,  146 => 252,  143 => 248,  140 => 235,  137 => 231,  134 => 222,  131 => 170,  128 => 158,  125 => 144,  121 => 125,  110 => 114,  92 => 98,  89 => 96,  84 => 92,  79 => 90,  72 => 89,  64 => 86,  54 => 82,  52 => 81,  40 => 71,  38 => 68,  35 => 67,  33 => 11,  30 => 10,  28 => 1,);
    }
}

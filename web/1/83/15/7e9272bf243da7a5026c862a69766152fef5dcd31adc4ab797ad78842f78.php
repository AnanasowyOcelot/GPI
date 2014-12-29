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
        // line 7
        echo "
";
        // line 8
        $this->displayBlock('sonata_page_head', $context, $blocks);
        // line 65
        echo "
";
        // line 66
        $this->displayBlock('sonata_page_body_tag', $context, $blocks);
        // line 69
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
        // line 79
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 80
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("sonata_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>
                <li class=\"topbar-devider\"></li>

                <li><a href=\"";
            // line 83
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a></li>
            ";
        } else {
            // line 85
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_login", array(), "SonataUserBundle"), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_register", array(), "SonataUserBundle"), "html", null, true);
            echo "</a></li>
            ";
        }
        // line 87
        echo "
        </ul>
        <!-- End Topbar Navigation -->
        ";
        // line 91
        echo "
        ";
        // line 93
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
        <img id=\"logo-header\" src=\"/bundles/gpilayout/img/logo1-default.png\" alt=\"Logo\">
    </a>
</div>

<!-- Collect the nav links, forms, and other content for toggling -->
<div class=\"collapse navbar-collapse navbar-responsive-collapse\">
<ul class=\"nav navbar-nav\">
<!-- Home -->
";
        // line 118
        echo "    ";
        // line 120
        echo "<!-- End Home -->

";
        // line 125
        echo "    ";
        // line 130
        echo "    ";
        // line 131
        echo "    ";
        // line 132
        echo "        ";
        // line 133
        echo "        ";
        // line 134
        echo "        ";
        // line 135
        echo "        ";
        // line 136
        echo "    ";
        // line 139
        echo "
";
        // line 142
        echo "    ";
        // line 143
        echo "        ";
        // line 144
        echo "        ";
        // line 145
        echo "        ";
        // line 146
        echo "        ";
        // line 147
        echo "        ";
        // line 148
        echo "        ";
        // line 149
        echo "        ";
        // line 150
        echo "    ";
        // line 153
        echo "
";
        // line 156
        echo "    ";
        // line 157
        echo "    ";
        // line 158
        echo "        ";
        // line 159
        echo "        ";
        // line 160
        echo "        ";
        // line 161
        echo "        ";
        // line 162
        echo "    ";
        // line 165
        echo "
";
        // line 168
        echo "    ";
        // line 169
        echo "    ";
        // line 170
        echo "        ";
        // line 171
        echo "            ";
        // line 172
        echo "            ";
        // line 173
        echo "                ";
        // line 174
        echo "                ";
        // line 175
        echo "                ";
        // line 176
        echo "                ";
        // line 177
        echo "                ";
        // line 178
        echo "                ";
        // line 179
        echo "                ";
        // line 180
        echo "                ";
        // line 181
        echo "                ";
        // line 182
        echo "                ";
        // line 183
        echo "            ";
        // line 184
        echo "        ";
        // line 185
        echo "        ";
        // line 186
        echo "            ";
        // line 187
        echo "            ";
        // line 188
        echo "                ";
        // line 189
        echo "                ";
        // line 190
        echo "                ";
        // line 191
        echo "                ";
        // line 192
        echo "                ";
        // line 193
        echo "                ";
        // line 194
        echo "                ";
        // line 195
        echo "                ";
        // line 196
        echo "                ";
        // line 197
        echo "                ";
        // line 198
        echo "            ";
        // line 199
        echo "        ";
        // line 200
        echo "        ";
        // line 201
        echo "            ";
        // line 202
        echo "            ";
        // line 203
        echo "                ";
        // line 204
        echo "                ";
        // line 205
        echo "                ";
        // line 206
        echo "                ";
        // line 207
        echo "                ";
        // line 208
        echo "                ";
        // line 209
        echo "                ";
        // line 210
        echo "                ";
        // line 211
        echo "                ";
        // line 212
        echo "                ";
        // line 213
        echo "            ";
        // line 214
        echo "        ";
        // line 215
        echo "    ";
        // line 217
        echo "
";
        // line 219
        echo "    ";
        // line 220
        echo "    ";
        // line 221
        echo "        ";
        // line 222
        echo "        ";
        // line 223
        echo "    ";
        // line 226
        echo "
";
        // line 230
        echo "
";
        // line 233
        echo "    ";
        // line 234
        echo "    ";
        // line 235
        echo "        ";
        // line 236
        echo "        ";
        // line 237
        echo "        ";
        // line 238
        echo "        ";
        // line 239
        echo "        ";
        // line 240
        echo "    ";
        // line 243
        echo "
";
        // line 247
        echo "
";
        // line 250
        echo "    ";
        // line 251
        echo "    ";
        // line 252
        echo "        ";
        // line 253
        echo "        ";
        // line 254
        echo "    ";
        // line 257
        echo "
";
        // line 261
        echo "
";
        // line 264
        echo "    ";
        // line 265
        echo "    ";
        // line 266
        echo "        ";
        // line 267
        echo "        ";
        // line 268
        echo "    ";
        // line 271
        echo "
";
        // line 275
        echo "
";
        // line 278
        echo "    ";
        // line 279
        echo "    ";
        // line 280
        echo "        ";
        // line 281
        echo "        ";
        // line 282
        echo "        ";
        // line 283
        echo "        ";
        // line 284
        echo "    ";
        // line 287
        echo "
";
        // line 290
        echo "    ";
        // line 291
        echo "    ";
        // line 292
        echo "        ";
        // line 293
        echo "        ";
        // line 294
        echo "        ";
        // line 295
        echo "        ";
        // line 296
        echo "    ";
        // line 299
        echo "
";
        // line 303
        echo "
";
        // line 306
        echo "    ";
        // line 307
        echo "    ";
        // line 308
        echo "        ";
        // line 309
        echo "        ";
        // line 310
        echo "        ";
        // line 311
        echo "    ";
        // line 314
        echo "
";
        // line 318
        echo "
";
        // line 322
        echo "
";
        // line 325
        echo "    ";
        // line 326
        echo "    ";
        // line 327
        echo "        ";
        // line 328
        echo "        ";
        // line 329
        echo "            ";
        // line 330
        echo "            ";
        // line 331
        echo "                ";
        // line 332
        echo "                ";
        // line 333
        echo "                ";
        // line 334
        echo "                ";
        // line 335
        echo "            ";
        // line 336
        echo "        ";
        // line 337
        echo "        ";
        // line 338
        echo "        ";
        // line 339
        echo "            ";
        // line 340
        echo "            ";
        // line 341
        echo "                ";
        // line 342
        echo "                ";
        // line 343
        echo "                ";
        // line 344
        echo "            ";
        // line 345
        echo "        ";
        // line 346
        echo "    ";
        // line 352
        echo "
";
        // line 355
        echo "    ";
        // line 356
        echo "        ";
        // line 357
        echo "    ";
        // line 358
        echo "    ";
        // line 359
        echo "        ";
        // line 360
        echo "            ";
        // line 361
        echo "                ";
        // line 362
        echo "                    ";
        // line 363
        echo "                        ";
        // line 364
        echo "                            ";
        // line 365
        echo "                                ";
        // line 366
        echo "
                                ";
        // line 368
        echo "                                ";
        // line 369
        echo "                                ";
        // line 370
        echo "                                ";
        // line 371
        echo "                                ";
        // line 372
        echo "                                ";
        // line 373
        echo "                                ";
        // line 374
        echo "                                ";
        // line 375
        echo "                                ";
        // line 376
        echo "                                ";
        // line 377
        echo "
                                ";
        // line 379
        echo "                                ";
        // line 380
        echo "                                ";
        // line 381
        echo "                                ";
        // line 382
        echo "                                ";
        // line 383
        echo "                                ";
        // line 384
        echo "                            ";
        // line 385
        echo "                        ";
        // line 386
        echo "                        ";
        // line 387
        echo "                            ";
        // line 388
        echo "                                ";
        // line 389
        echo "
                                ";
        // line 391
        echo "                                ";
        // line 392
        echo "                                ";
        // line 393
        echo "                                ";
        // line 394
        echo "
                                ";
        // line 396
        echo "
                                ";
        // line 398
        echo "
                                ";
        // line 400
        echo "                                ";
        // line 401
        echo "                                ";
        // line 402
        echo "                                ";
        // line 403
        echo "                                ";
        // line 404
        echo "
                                ";
        // line 406
        echo "                                ";
        // line 407
        echo "                                ";
        // line 408
        echo "                                ";
        // line 409
        echo "                                ";
        // line 410
        echo "                                ";
        // line 411
        echo "                                ";
        // line 412
        echo "                            ";
        // line 413
        echo "                        ";
        // line 414
        echo "                        ";
        // line 415
        echo "                            ";
        // line 416
        echo "                                ";
        // line 417
        echo "
                                ";
        // line 419
        echo "                                ";
        // line 420
        echo "                                ";
        // line 421
        echo "                                ";
        // line 422
        echo "                                ";
        // line 423
        echo "                                ";
        // line 424
        echo "                                ";
        // line 425
        echo "                                ";
        // line 426
        echo "                                ";
        // line 427
        echo "                                ";
        // line 428
        echo "                                ";
        // line 429
        echo "                                ";
        // line 430
        echo "                            ";
        // line 431
        echo "                        ";
        // line 432
        echo "                        ";
        // line 433
        echo "                            ";
        // line 434
        echo "                                ";
        // line 435
        echo "
                                ";
        // line 437
        echo "                                ";
        // line 438
        echo "                                ";
        // line 439
        echo "                                ";
        // line 440
        echo "                                ";
        // line 441
        echo "                                ";
        // line 442
        echo "                                ";
        // line 443
        echo "                                ";
        // line 444
        echo "                                ";
        // line 445
        echo "                                ";
        // line 446
        echo "
                                ";
        // line 448
        echo "                                ";
        // line 449
        echo "                                ";
        // line 450
        echo "                                ";
        // line 451
        echo "                                ";
        // line 452
        echo "                                ";
        // line 453
        echo "                            ";
        // line 454
        echo "                        ";
        // line 455
        echo "                    ";
        // line 456
        echo "                ";
        // line 457
        echo "            ";
        // line 458
        echo "        ";
        // line 459
        echo "    ";
        // line 462
        echo "
";
        // line 465
        echo "    ";
        // line 466
        echo "        ";
        // line 467
        echo "    ";
        // line 468
        echo "    ";
        // line 469
        echo "        ";
        // line 470
        echo "            ";
        // line 471
        echo "                ";
        // line 472
        echo "                    ";
        // line 473
        echo "                        ";
        // line 474
        echo "                            ";
        // line 475
        echo "                                ";
        // line 476
        echo "
                                ";
        // line 478
        echo "                                ";
        // line 479
        echo "                                ";
        // line 480
        echo "                                ";
        // line 481
        echo "                                ";
        // line 482
        echo "                                ";
        // line 483
        echo "                                ";
        // line 484
        echo "                                ";
        // line 485
        echo "
                                ";
        // line 487
        echo "                            ";
        // line 488
        echo "                        ";
        // line 489
        echo "                        ";
        // line 490
        echo "                            ";
        // line 491
        echo "                                ";
        // line 492
        echo "
                                ";
        // line 494
        echo "                                ";
        // line 495
        echo "                                ";
        // line 496
        echo "                                ";
        // line 497
        echo "
                                ";
        // line 499
        echo "
                                ";
        // line 501
        echo "
                                ";
        // line 503
        echo "
                                ";
        // line 505
        echo "                                ";
        // line 506
        echo "                                ";
        // line 507
        echo "                                ";
        // line 508
        echo "                                ";
        // line 509
        echo "                            ";
        // line 510
        echo "                        ";
        // line 511
        echo "                        ";
        // line 512
        echo "                            ";
        // line 513
        echo "                                ";
        // line 514
        echo "                                ";
        // line 515
        echo "                                ";
        // line 516
        echo "                                ";
        // line 517
        echo "                                ";
        // line 518
        echo "                                ";
        // line 519
        echo "                                ";
        // line 520
        echo "                                ";
        // line 521
        echo "                                ";
        // line 522
        echo "                            ";
        // line 523
        echo "                        ";
        // line 524
        echo "                        ";
        // line 525
        echo "                            ";
        // line 526
        echo "                                ";
        // line 527
        echo "
                                ";
        // line 529
        echo "                                ";
        // line 530
        echo "                                ";
        // line 531
        echo "                                ";
        // line 532
        echo "                                ";
        // line 533
        echo "
                                ";
        // line 535
        echo "
                                ";
        // line 537
        echo "
                                ";
        // line 539
        echo "                                ";
        // line 540
        echo "                                ";
        // line 541
        echo "                                ";
        // line 542
        echo "                                ";
        // line 543
        echo "                            ";
        // line 544
        echo "                        ";
        // line 545
        echo "                    ";
        // line 546
        echo "                ";
        // line 547
        echo "            ";
        // line 548
        echo "        ";
        // line 549
        echo "    ";
        // line 552
        echo "
";
        // line 555
        echo "    ";
        // line 556
        echo "        ";
        // line 557
        echo "    ";
        // line 558
        echo "    ";
        // line 559
        echo "        ";
        // line 560
        echo "        ";
        // line 561
        echo "        ";
        // line 562
        echo "        ";
        // line 563
        echo "        ";
        // line 564
        echo "        ";
        // line 565
        echo "        ";
        // line 566
        echo "        ";
        // line 567
        echo "        ";
        // line 568
        echo "        ";
        // line 569
        echo "    ";
        // line 572
        echo "
";
        // line 575
        echo "    ";
        // line 576
        echo "        ";
        // line 577
        echo "    ";
        // line 578
        echo "    ";
        // line 579
        echo "        ";
        // line 580
        echo "        ";
        // line 581
        echo "        ";
        // line 582
        echo "        ";
        // line 583
        echo "        ";
        // line 584
        echo "    ";
        // line 587
        echo "
";
        // line 590
        echo "    ";
        // line 591
        echo "    ";
        // line 592
        echo "        ";
        // line 593
        echo "            ";
        // line 594
        echo "                                    ";
        // line 595
        echo "                                        ";
        // line 596
        echo "                                    ";
        // line 597
        echo "        ";
        // line 598
        echo "    ";
        // line 602
        echo "</div><!--/navbar-collapse-->
</div>
</div>
<!-- End Navbar -->
</div>
<!--=== End Header ===-->

<!--=== Breadcrumbs ===-->
<div class=\"breadcrumbs\">
    ";
        // line 612
        echo "        ";
        // line 613
        echo "        ";
        // line 614
        echo "            ";
        // line 615
        echo "            ";
        // line 616
        echo "            ";
        // line 617
        echo "        ";
        // line 618
        echo "    ";
        // line 619
        echo "</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

";
        // line 622
        $this->displayBlock('sonata_page_container', $context, $blocks);
        // line 972
        echo "
<!--=== Footer Version 1 ===-->
<div class=\"footer-v1\">
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- About -->
                ";
        // line 980
        echo "                    ";
        // line 981
        echo "                    ";
        // line 982
        echo "                    ";
        // line 983
        echo "                ";
        // line 984
        echo "                <!-- End About -->

                <!-- Latest -->
                ";
        // line 988
        echo "                    ";
        // line 989
        echo "                        ";
        // line 990
        echo "                        ";
        // line 991
        echo "                            ";
        // line 992
        echo "                                ";
        // line 993
        echo "                                ";
        // line 994
        echo "                            ";
        // line 995
        echo "                            ";
        // line 996
        echo "                                ";
        // line 997
        echo "                                ";
        // line 998
        echo "                            ";
        // line 999
        echo "                            ";
        // line 1000
        echo "                                ";
        // line 1001
        echo "                                ";
        // line 1002
        echo "                            ";
        // line 1003
        echo "                        ";
        // line 1004
        echo "                    ";
        // line 1005
        echo "                ";
        // line 1006
        echo "                <!-- End Latest -->

                <!-- Link List -->
                ";
        // line 1010
        echo "                    ";
        // line 1011
        echo "                    ";
        // line 1012
        echo "                        ";
        // line 1013
        echo "                        ";
        // line 1014
        echo "                        ";
        // line 1015
        echo "                        ";
        // line 1016
        echo "                        ";
        // line 1017
        echo "                    ";
        // line 1018
        echo "                ";
        // line 1019
        echo "                <!--/col-md-3-->
                <!-- End Link List -->

                <!-- Address -->
                <div class=\"col-md-3 map-img md-margin-bottom-40\">
                    <div class=\"headline\"><h2>Contact Us</h2></div>
                    <address class=\"md-margin-bottom-40\">
                        25, Lorem Lis Street, Orange <br />
                        California, US <br />
                        Phone: 800 123 3456 <br />
                        Fax: 800 123 3456 <br />
                        Email: <a href=\"mailto:info@anybiz.com\" class=\"\">info@anybiz.com</a>
                    </address>
                </div><!--/col-md-3-->
                <!-- End Address -->
            </div>
        </div>
    </div><!--/footer-->

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
                            <a href=\"#\" class=\"tooltips\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Facebook\">
                                <i class=\"fa fa-facebook\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"tooltips\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Skype\">
                                <i class=\"fa fa-skype\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"tooltips\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Google Plus\">
                                <i class=\"fa fa-google-plus\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"tooltips\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Linkedin\">
                                <i class=\"fa fa-linkedin\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"tooltips\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Pinterest\">
                                <i class=\"fa fa-pinterest\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"tooltips\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Twitter\">
                                <i class=\"fa fa-twitter\"></i>
                            </a>
                        </li>
                        <li>
                            <a href=\"#\" class=\"tooltips\" data-toggle=\"tooltip\" data-placement=\"top\" title=\"\" data-original-title=\"Dribbble\">
                                <i class=\"fa fa-dribbble\"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- End Social Links -->
            </div>
        </div>
    </div><!--/copyright-->
</div>
<!--=== End Footer Version 1 ===-->
</div><!--/wrapper-->

<!-- JS Global Compulsory -->
<script type=\"text/javascript\" src=\"/bundles/gpilayout/plugins/jquery/jquery.min.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/gpilayout/plugins/jquery/jquery-migrate.min.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/gpilayout/plugins/bootstrap/js/bootstrap.min.js\"></script>
<!-- JS Implementing Plugins -->
<script type=\"text/javascript\" src=\"/bundles/gpilayout/plugins/back-to-top.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/gpilayout/plugins/flexslider/jquery.flexslider-min.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/gpilayout/plugins/owl-carousel/owl-carousel/owl.carousel.js\"></script>
<!-- JS Customization -->
<script type=\"text/javascript\" src=\"/bundles/gpilayout/js/custom.js\"></script>
<!-- JS Page Level -->
<script type=\"text/javascript\" src=\"/bundles/gpilayout/js/app.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/gpilayout/js/plugins/owl-recent-works.js\"></script>
<script type=\"text/javascript\">
    jQuery(document).ready(function() {
        App.init();
        App.initSliders();
        OwlRecentWorks.initOwlRecentWorksV2();
    });
</script>

<!-- JS Implementing Plugins -->
<script type=\"text/javascript\" src=\"/bundles/gpilayout/plugins/back-to-top.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/gpilayout/plugins/cube-portfolio/cubeportfolio/js/jquery.cubeportfolio.min.js\"></script>
<!-- JS Customization -->
<script type=\"text/javascript\" src=\"/bundles/gpilayout/js/custom.js\"></script>
<!-- JS Page Level -->
<script type=\"text/javascript\" src=\"/bundles/gpilayout/js/app.js\"></script>
<script type=\"text/javascript\" src=\"/bundles/gpilayout/js/plugins/cube-portfolio.js\"></script>
<script type=\"text/javascript\">
    jQuery(document).ready(function() {
        App.init();
    });
</script>


<!--[if lt IE 9]>
<script src=\"/bundles/gpilayout/plugins/respond.js\"></script>
<script src=\"/bundles/gpilayout/plugins/html5shiv.js\"></script>
<script src=\"/bundles/gpilayout/js/plugins/placeholder-IE-fixes.js\"></script>
<![endif]-->

</body>
</html> ";
    }

    // line 1
    public function block_sonata_page_html_tag($context, array $blocks = array())
    {
        // line 2
        echo "<!DOCTYPE html>
<!--[if IE 8]> <html lang=\"en\" class=\"ie8\"> <![endif]-->
<!--[if IE 9]> <html lang=\"en\" class=\"ie9\"> <![endif]-->
<!--[if !IE]><!--> <html lang=\"en\"> <!--<![endif]-->
";
    }

    // line 8
    public function block_sonata_page_head($context, array $blocks = array())
    {
        // line 9
        echo "<head ";
        echo $this->env->getExtension('sonata_seo')->getHeadAttributes();
        echo ">
    <title>Giełda Projektów Inżynierskich</title>
    ";
        // line 11
        echo $this->env->getExtension('sonata_seo')->getTitle();
        echo "
    ";
        // line 12
        echo $this->env->getExtension('sonata_seo')->getMetadatas();
        echo "

    <!-- Meta -->
    <meta charset=\"utf-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <meta name=\"description\" content=\"\">
    <meta name=\"author\" content=\"\">

    <!-- Favicon -->
    <link rel=\"shortcut icon\" href=\"favicon.ico\">

    <!-- CSS Global Compulsory -->
    <link rel=\"stylesheet\" href=\"/bundles/gpilayout/plugins/bootstrap/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/bundles/gpilayout/css/style.css\">

    <!-- CSS Implementing Plugins -->
    <link rel=\"stylesheet\" href=\"/bundles/gpilayout/plugins/line-icons/line-icons.css\">
    <link rel=\"stylesheet\" href=\"/bundles/gpilayout/plugins/font-awesome/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"/bundles/gpilayout/plugins/flexslider/flexslider.css\">
    <link rel=\"stylesheet\" href=\"/bundles/gpilayout/plugins/owl-carousel/owl-carousel/owl.carousel.css\">
    <link rel=\"stylesheet\" href=\"/bundles/gpilayout/plugins/sky-forms/version-2.0.1/css/custom-sky-forms.css\">
    <link rel=\"stylesheet\" href=\"/bundles/gpilayout/plugins/cube-portfolio/cubeportfolio/css/cubeportfolio.css\">



    <!-- CSS Theme -->
    <link rel=\"stylesheet\" href=\"/bundles/gpilayout/css/theme-colors/default.css\">

    <!-- CSS Customization -->
    <link rel=\"stylesheet\" href=\"/bundles/gpilayout/css/custom.css\">

    ";
        // line 43
        $this->displayBlock('sonata_page_stylesheets', $context, $blocks);
        // line 50
        echo "
    ";
        // line 51
        $this->displayBlock('sonata_page_javascripts', $context, $blocks);
        // line 63
        echo "</head>
";
    }

    // line 43
    public function block_sonata_page_stylesheets($context, array $blocks = array())
    {
        // line 44
        echo "        ";
        $this->displayBlock('page_stylesheets', $context, $blocks);
        // line 49
        echo "    ";
    }

    // line 44
    public function block_page_stylesheets($context, array $blocks = array())
    {
        echo " ";
        // line 45
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "assets", array()), "stylesheets", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 46
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\"/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 48
        echo "        ";
    }

    // line 51
    public function block_sonata_page_javascripts($context, array $blocks = array())
    {
        // line 52
        echo "        ";
        $this->displayBlock('page_javascripts', $context, $blocks);
        // line 62
        echo "    ";
    }

    // line 52
    public function block_page_javascripts($context, array $blocks = array())
    {
        echo " ";
        // line 53
        echo "            <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
            <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
            <![endif]-->

            ";
        // line 58
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "assets", array()), "javascripts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 59
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($context["js"]), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 61
        echo "        ";
    }

    // line 66
    public function block_sonata_page_body_tag($context, array $blocks = array())
    {
        // line 67
        echo "<body>
";
    }

    // line 622
    public function block_sonata_page_container($context, array $blocks = array())
    {
        // line 623
        echo "<!--=== Content Part ===-->

<div class=\"container content\">
";
        // line 626
        $this->displayBlock('page_content', $context, $blocks);
        // line 860
        echo "<!-- Our Clients -->
";
        // line 862
        echo "    ";
        // line 863
        echo "    ";
        // line 864
        echo "        ";
        // line 865
        echo "            ";
        // line 866
        echo "                ";
        // line 867
        echo "                ";
        // line 868
        echo "            ";
        // line 869
        echo "        ";
        // line 870
        echo "        ";
        // line 871
        echo "            ";
        // line 872
        echo "                ";
        // line 873
        echo "                ";
        // line 874
        echo "            ";
        // line 875
        echo "        ";
        // line 876
        echo "        ";
        // line 877
        echo "            ";
        // line 878
        echo "                ";
        // line 879
        echo "                ";
        // line 880
        echo "            ";
        // line 881
        echo "        ";
        // line 882
        echo "        ";
        // line 883
        echo "            ";
        // line 884
        echo "                ";
        // line 885
        echo "                ";
        // line 886
        echo "            ";
        // line 887
        echo "        ";
        // line 888
        echo "        ";
        // line 889
        echo "            ";
        // line 890
        echo "                ";
        // line 891
        echo "                ";
        // line 892
        echo "            ";
        // line 893
        echo "        ";
        // line 894
        echo "        ";
        // line 895
        echo "            ";
        // line 896
        echo "                ";
        // line 897
        echo "                ";
        // line 898
        echo "            ";
        // line 899
        echo "        ";
        // line 900
        echo "        ";
        // line 901
        echo "            ";
        // line 902
        echo "                ";
        // line 903
        echo "                ";
        // line 904
        echo "            ";
        // line 905
        echo "        ";
        // line 906
        echo "        ";
        // line 907
        echo "            ";
        // line 908
        echo "                ";
        // line 909
        echo "                ";
        // line 910
        echo "            ";
        // line 911
        echo "        ";
        // line 912
        echo "        ";
        // line 913
        echo "            ";
        // line 914
        echo "                ";
        // line 915
        echo "                ";
        // line 916
        echo "            ";
        // line 917
        echo "        ";
        // line 918
        echo "        ";
        // line 919
        echo "            ";
        // line 920
        echo "                ";
        // line 921
        echo "                ";
        // line 922
        echo "            ";
        // line 923
        echo "        ";
        // line 924
        echo "        ";
        // line 925
        echo "            ";
        // line 926
        echo "                ";
        // line 927
        echo "                ";
        // line 928
        echo "            ";
        // line 929
        echo "        ";
        // line 930
        echo "        ";
        // line 931
        echo "            ";
        // line 932
        echo "                ";
        // line 933
        echo "                ";
        // line 934
        echo "            ";
        // line 935
        echo "        ";
        // line 936
        echo "        ";
        // line 937
        echo "            ";
        // line 938
        echo "                ";
        // line 939
        echo "                ";
        // line 940
        echo "            ";
        // line 941
        echo "        ";
        // line 942
        echo "        ";
        // line 943
        echo "            ";
        // line 944
        echo "                ";
        // line 945
        echo "                ";
        // line 946
        echo "            ";
        // line 947
        echo "        ";
        // line 948
        echo "        ";
        // line 949
        echo "            ";
        // line 950
        echo "                ";
        // line 951
        echo "                ";
        // line 952
        echo "            ";
        // line 953
        echo "        ";
        // line 954
        echo "        ";
        // line 955
        echo "            ";
        // line 956
        echo "                ";
        // line 957
        echo "                ";
        // line 958
        echo "            ";
        // line 959
        echo "        ";
        // line 960
        echo "        ";
        // line 961
        echo "            ";
        // line 962
        echo "                ";
        // line 963
        echo "                ";
        // line 964
        echo "            ";
        // line 965
        echo "        ";
        // line 966
        echo "    ";
        // line 968
        echo "<!-- End Our Clients -->
</div><!--/container-->
<!--=== End Content Part ===-->
";
    }

    // line 626
    public function block_page_content($context, array $blocks = array())
    {
        // line 627
        echo "    ";
        if (array_key_exists("content", $context)) {
            // line 628
            echo "        ";
            echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
            echo "
    ";
        } else {
            // line 630
            echo "        ";
            $context["content"] = $this->renderBlock("content", $context, $blocks);
            // line 631
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"))) > 0)) {
                // line 632
                echo "            ";
                echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
                echo "
        ";
            } elseif (array_key_exists("page", $context)) {
                // line 634
                echo "            ";
                echo $this->env->getExtension('sonata_page')->renderContainer("content", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
                echo "
        ";
            }
            // line 636
            echo "    ";
        }
        // line 637
        echo "    ";
        if (array_key_exists("page", $context)) {
            // line 638
            echo "
        <div class=\"row\">


        <div class=\"col-md-3\">
            ";
            // line 643
            echo $this->env->getExtension('sonata_page')->renderContainer("left_col", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
            echo "
            <!-- About Us -->
            <div class=\"margin-bottom-30\">
                ";
            // line 647
            echo "                ";
            // line 648
            echo "                ";
            // line 649
            echo "                ";
            // line 650
            echo "                ";
            // line 651
            echo "                ";
            // line 652
            echo "                ";
            // line 653
            echo "                ";
            // line 654
            echo "            </div>

            ";
            // line 657
            echo "            ";
            // line 658
            echo "            ";
            // line 659
            echo "            ";
            // line 660
            echo "            ";
            // line 661
            echo "            ";
            // line 662
            echo "            ";
            // line 663
            echo "            ";
            // line 664
            echo "            ";
            // line 665
            echo "            ";
            // line 666
            echo "            ";
            // line 667
            echo "            ";
            // line 668
            echo "            ";
            // line 669
            echo "            ";
            // line 670
            echo "            ";
            // line 671
            echo "            ";
            // line 672
            echo "            ";
            // line 673
            echo "            ";
            // line 674
            echo "            ";
            // line 675
            echo "            ";
            // line 676
            echo "            ";
            // line 677
            echo "            ";
            // line 678
            echo "
            <!-- Contact Us -->
            ";
            // line 681
            echo "                ";
            // line 682
            echo "                ";
            // line 683
            echo "                ";
            // line 684
            echo "                ";
            // line 685
            echo "                ";
            // line 686
            echo "                ";
            // line 687
            echo "                ";
            // line 688
            echo "                ";
            // line 689
            echo "            ";
            // line 690
            echo "        </div><!--/col-md-3-->

        <div class=\"col-md-9\">
            ";
            // line 693
            echo $this->env->getExtension('sonata_page')->renderContainer("right_col", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
            echo "
            <!-- Our Services -->
            ";
            // line 696
            echo "            ";
            // line 697
            echo "            ";
            // line 698
            echo "            ";
            // line 699
            echo "            ";
            // line 700
            echo "            ";
            // line 701
            echo "            ";
            // line 702
            echo "            ";
            // line 703
            echo "            ";
            // line 704
            echo "            ";
            // line 705
            echo "            ";
            // line 706
            echo "            ";
            // line 707
            echo "            ";
            // line 708
            echo "            ";
            // line 709
            echo "            ";
            // line 710
            echo "            ";
            // line 711
            echo "            ";
            // line 712
            echo "            ";
            // line 713
            echo "            ";
            // line 714
            echo "            ";
            // line 715
            echo "            ";
            // line 716
            echo "            ";
            // line 717
            echo "            ";
            // line 718
            echo "            ";
            // line 719
            echo "
            <!-- Blockquotes -->
            ";
            // line 722
            echo "            ";
            // line 723
            echo "            ";
            // line 724
            echo "            ";
            // line 725
            echo "            ";
            // line 726
            echo "            ";
            // line 727
            echo "            ";
            // line 728
            echo "            <!-- End Blockquotes -->

            <!-- Recent Works -->
            ";
            // line 732
            echo "            ";
            // line 733
            echo "            ";
            // line 734
            echo "            ";
            // line 735
            echo "            ";
            // line 736
            echo "            ";
            // line 737
            echo "            ";
            // line 738
            echo "            ";
            // line 739
            echo "            ";
            // line 740
            echo "
            ";
            // line 742
            echo "            ";
            // line 743
            echo "            ";
            // line 744
            echo "            ";
            // line 745
            echo "            ";
            // line 746
            echo "            ";
            // line 747
            echo "            ";
            // line 748
            echo "            ";
            // line 749
            echo "            ";
            // line 750
            echo "            ";
            // line 751
            echo "            ";
            // line 752
            echo "            ";
            // line 753
            echo "            ";
            // line 754
            echo "            ";
            // line 755
            echo "            ";
            // line 756
            echo "            ";
            // line 757
            echo "            ";
            // line 758
            echo "            ";
            // line 759
            echo "            ";
            // line 760
            echo "            ";
            // line 761
            echo "            ";
            // line 762
            echo "            ";
            // line 763
            echo "            ";
            // line 764
            echo "            ";
            // line 765
            echo "            ";
            // line 766
            echo "            ";
            // line 767
            echo "            ";
            // line 768
            echo "            ";
            // line 769
            echo "            ";
            // line 770
            echo "            ";
            // line 771
            echo "            ";
            // line 772
            echo "            ";
            // line 773
            echo "            ";
            // line 774
            echo "            ";
            // line 775
            echo "            ";
            // line 776
            echo "            ";
            // line 777
            echo "            ";
            // line 778
            echo "            ";
            // line 779
            echo "            ";
            // line 780
            echo "            ";
            // line 781
            echo "            ";
            // line 782
            echo "            ";
            // line 783
            echo "            ";
            // line 784
            echo "            ";
            // line 785
            echo "            ";
            // line 786
            echo "            ";
            // line 787
            echo "            ";
            // line 788
            echo "            ";
            // line 789
            echo "            ";
            // line 790
            echo "            ";
            // line 791
            echo "            ";
            // line 792
            echo "            ";
            // line 793
            echo "            ";
            // line 794
            echo "            ";
            // line 795
            echo "            ";
            // line 796
            echo "            ";
            // line 797
            echo "            ";
            // line 798
            echo "            ";
            // line 799
            echo "            ";
            // line 800
            echo "            ";
            // line 801
            echo "            ";
            // line 802
            echo "            ";
            // line 803
            echo "            ";
            // line 804
            echo "            ";
            // line 805
            echo "            ";
            // line 806
            echo "            ";
            // line 807
            echo "            ";
            // line 808
            echo "            ";
            // line 809
            echo "            ";
            // line 810
            echo "            ";
            // line 811
            echo "            ";
            // line 812
            echo "            ";
            // line 813
            echo "            ";
            // line 814
            echo "            ";
            // line 815
            echo "            ";
            // line 816
            echo "            ";
            // line 817
            echo "            ";
            // line 818
            echo "            ";
            // line 819
            echo "            ";
            // line 820
            echo "            ";
            // line 821
            echo "            ";
            // line 822
            echo "            ";
            // line 823
            echo "            ";
            // line 824
            echo "            ";
            // line 825
            echo "            ";
            // line 826
            echo "            ";
            // line 827
            echo "            ";
            // line 828
            echo "            ";
            // line 829
            echo "            ";
            // line 830
            echo "            ";
            // line 831
            echo "            ";
            // line 832
            echo "            ";
            // line 833
            echo "            ";
            // line 834
            echo "            ";
            // line 835
            echo "            ";
            // line 836
            echo "            ";
            // line 837
            echo "            ";
            // line 838
            echo "            ";
            // line 839
            echo "            ";
            // line 840
            echo "            ";
            // line 841
            echo "            ";
            // line 842
            echo "            ";
            // line 843
            echo "            ";
            // line 844
            echo "            ";
            // line 845
            echo "            ";
            // line 846
            echo "            ";
            // line 847
            echo "            ";
            // line 848
            echo "            ";
            // line 849
            echo "            ";
            // line 850
            echo "            ";
            // line 851
            echo "            ";
            // line 852
            echo "            ";
            // line 853
            echo "            ";
            // line 854
            echo "            <!-- End Recent Works -->
        </div><!--/col-md-9-->
        </div><!--/row-->
    ";
        }
        // line 858
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
        return array (  1962 => 858,  1956 => 854,  1954 => 853,  1952 => 852,  1950 => 851,  1948 => 850,  1946 => 849,  1944 => 848,  1942 => 847,  1940 => 846,  1938 => 845,  1936 => 844,  1934 => 843,  1932 => 842,  1930 => 841,  1928 => 840,  1926 => 839,  1924 => 838,  1922 => 837,  1920 => 836,  1918 => 835,  1916 => 834,  1914 => 833,  1912 => 832,  1910 => 831,  1908 => 830,  1906 => 829,  1904 => 828,  1902 => 827,  1900 => 826,  1898 => 825,  1896 => 824,  1894 => 823,  1892 => 822,  1890 => 821,  1888 => 820,  1886 => 819,  1884 => 818,  1882 => 817,  1880 => 816,  1878 => 815,  1876 => 814,  1874 => 813,  1872 => 812,  1870 => 811,  1868 => 810,  1866 => 809,  1864 => 808,  1862 => 807,  1860 => 806,  1858 => 805,  1856 => 804,  1854 => 803,  1852 => 802,  1850 => 801,  1848 => 800,  1846 => 799,  1844 => 798,  1842 => 797,  1840 => 796,  1838 => 795,  1836 => 794,  1834 => 793,  1832 => 792,  1830 => 791,  1828 => 790,  1826 => 789,  1824 => 788,  1822 => 787,  1820 => 786,  1818 => 785,  1816 => 784,  1814 => 783,  1812 => 782,  1810 => 781,  1808 => 780,  1806 => 779,  1804 => 778,  1802 => 777,  1800 => 776,  1798 => 775,  1796 => 774,  1794 => 773,  1792 => 772,  1790 => 771,  1788 => 770,  1786 => 769,  1784 => 768,  1782 => 767,  1780 => 766,  1778 => 765,  1776 => 764,  1774 => 763,  1772 => 762,  1770 => 761,  1768 => 760,  1766 => 759,  1764 => 758,  1762 => 757,  1760 => 756,  1758 => 755,  1756 => 754,  1754 => 753,  1752 => 752,  1750 => 751,  1748 => 750,  1746 => 749,  1744 => 748,  1742 => 747,  1740 => 746,  1738 => 745,  1736 => 744,  1734 => 743,  1732 => 742,  1729 => 740,  1727 => 739,  1725 => 738,  1723 => 737,  1721 => 736,  1719 => 735,  1717 => 734,  1715 => 733,  1713 => 732,  1708 => 728,  1706 => 727,  1704 => 726,  1702 => 725,  1700 => 724,  1698 => 723,  1696 => 722,  1692 => 719,  1690 => 718,  1688 => 717,  1686 => 716,  1684 => 715,  1682 => 714,  1680 => 713,  1678 => 712,  1676 => 711,  1674 => 710,  1672 => 709,  1670 => 708,  1668 => 707,  1666 => 706,  1664 => 705,  1662 => 704,  1660 => 703,  1658 => 702,  1656 => 701,  1654 => 700,  1652 => 699,  1650 => 698,  1648 => 697,  1646 => 696,  1641 => 693,  1636 => 690,  1634 => 689,  1632 => 688,  1630 => 687,  1628 => 686,  1626 => 685,  1624 => 684,  1622 => 683,  1620 => 682,  1618 => 681,  1614 => 678,  1612 => 677,  1610 => 676,  1608 => 675,  1606 => 674,  1604 => 673,  1602 => 672,  1600 => 671,  1598 => 670,  1596 => 669,  1594 => 668,  1592 => 667,  1590 => 666,  1588 => 665,  1586 => 664,  1584 => 663,  1582 => 662,  1580 => 661,  1578 => 660,  1576 => 659,  1574 => 658,  1572 => 657,  1568 => 654,  1566 => 653,  1564 => 652,  1562 => 651,  1560 => 650,  1558 => 649,  1556 => 648,  1554 => 647,  1548 => 643,  1541 => 638,  1538 => 637,  1535 => 636,  1529 => 634,  1523 => 632,  1520 => 631,  1517 => 630,  1511 => 628,  1508 => 627,  1505 => 626,  1498 => 968,  1496 => 966,  1494 => 965,  1492 => 964,  1490 => 963,  1488 => 962,  1486 => 961,  1484 => 960,  1482 => 959,  1480 => 958,  1478 => 957,  1476 => 956,  1474 => 955,  1472 => 954,  1470 => 953,  1468 => 952,  1466 => 951,  1464 => 950,  1462 => 949,  1460 => 948,  1458 => 947,  1456 => 946,  1454 => 945,  1452 => 944,  1450 => 943,  1448 => 942,  1446 => 941,  1444 => 940,  1442 => 939,  1440 => 938,  1438 => 937,  1436 => 936,  1434 => 935,  1432 => 934,  1430 => 933,  1428 => 932,  1426 => 931,  1424 => 930,  1422 => 929,  1420 => 928,  1418 => 927,  1416 => 926,  1414 => 925,  1412 => 924,  1410 => 923,  1408 => 922,  1406 => 921,  1404 => 920,  1402 => 919,  1400 => 918,  1398 => 917,  1396 => 916,  1394 => 915,  1392 => 914,  1390 => 913,  1388 => 912,  1386 => 911,  1384 => 910,  1382 => 909,  1380 => 908,  1378 => 907,  1376 => 906,  1374 => 905,  1372 => 904,  1370 => 903,  1368 => 902,  1366 => 901,  1364 => 900,  1362 => 899,  1360 => 898,  1358 => 897,  1356 => 896,  1354 => 895,  1352 => 894,  1350 => 893,  1348 => 892,  1346 => 891,  1344 => 890,  1342 => 889,  1340 => 888,  1338 => 887,  1336 => 886,  1334 => 885,  1332 => 884,  1330 => 883,  1328 => 882,  1326 => 881,  1324 => 880,  1322 => 879,  1320 => 878,  1318 => 877,  1316 => 876,  1314 => 875,  1312 => 874,  1310 => 873,  1308 => 872,  1306 => 871,  1304 => 870,  1302 => 869,  1300 => 868,  1298 => 867,  1296 => 866,  1294 => 865,  1292 => 864,  1290 => 863,  1288 => 862,  1285 => 860,  1283 => 626,  1278 => 623,  1275 => 622,  1270 => 67,  1267 => 66,  1263 => 61,  1254 => 59,  1250 => 58,  1243 => 53,  1239 => 52,  1235 => 62,  1232 => 52,  1229 => 51,  1225 => 48,  1216 => 46,  1211 => 45,  1207 => 44,  1203 => 49,  1200 => 44,  1197 => 43,  1192 => 63,  1190 => 51,  1187 => 50,  1185 => 43,  1151 => 12,  1147 => 11,  1141 => 9,  1138 => 8,  1130 => 2,  1127 => 1,  1003 => 1019,  1001 => 1018,  999 => 1017,  997 => 1016,  995 => 1015,  993 => 1014,  991 => 1013,  989 => 1012,  987 => 1011,  985 => 1010,  980 => 1006,  978 => 1005,  976 => 1004,  974 => 1003,  972 => 1002,  970 => 1001,  968 => 1000,  966 => 999,  964 => 998,  962 => 997,  960 => 996,  958 => 995,  956 => 994,  954 => 993,  952 => 992,  950 => 991,  948 => 990,  946 => 989,  944 => 988,  939 => 984,  937 => 983,  935 => 982,  933 => 981,  931 => 980,  922 => 972,  920 => 622,  915 => 619,  913 => 618,  911 => 617,  909 => 616,  907 => 615,  905 => 614,  903 => 613,  901 => 612,  890 => 602,  888 => 598,  886 => 597,  884 => 596,  882 => 595,  880 => 594,  878 => 593,  876 => 592,  874 => 591,  872 => 590,  869 => 587,  867 => 584,  865 => 583,  863 => 582,  861 => 581,  859 => 580,  857 => 579,  855 => 578,  853 => 577,  851 => 576,  849 => 575,  846 => 572,  844 => 569,  842 => 568,  840 => 567,  838 => 566,  836 => 565,  834 => 564,  832 => 563,  830 => 562,  828 => 561,  826 => 560,  824 => 559,  822 => 558,  820 => 557,  818 => 556,  816 => 555,  813 => 552,  811 => 549,  809 => 548,  807 => 547,  805 => 546,  803 => 545,  801 => 544,  799 => 543,  797 => 542,  795 => 541,  793 => 540,  791 => 539,  788 => 537,  785 => 535,  782 => 533,  780 => 532,  778 => 531,  776 => 530,  774 => 529,  771 => 527,  769 => 526,  767 => 525,  765 => 524,  763 => 523,  761 => 522,  759 => 521,  757 => 520,  755 => 519,  753 => 518,  751 => 517,  749 => 516,  747 => 515,  745 => 514,  743 => 513,  741 => 512,  739 => 511,  737 => 510,  735 => 509,  733 => 508,  731 => 507,  729 => 506,  727 => 505,  724 => 503,  721 => 501,  718 => 499,  715 => 497,  713 => 496,  711 => 495,  709 => 494,  706 => 492,  704 => 491,  702 => 490,  700 => 489,  698 => 488,  696 => 487,  693 => 485,  691 => 484,  689 => 483,  687 => 482,  685 => 481,  683 => 480,  681 => 479,  679 => 478,  676 => 476,  674 => 475,  672 => 474,  670 => 473,  668 => 472,  666 => 471,  664 => 470,  662 => 469,  660 => 468,  658 => 467,  656 => 466,  654 => 465,  651 => 462,  649 => 459,  647 => 458,  645 => 457,  643 => 456,  641 => 455,  639 => 454,  637 => 453,  635 => 452,  633 => 451,  631 => 450,  629 => 449,  627 => 448,  624 => 446,  622 => 445,  620 => 444,  618 => 443,  616 => 442,  614 => 441,  612 => 440,  610 => 439,  608 => 438,  606 => 437,  603 => 435,  601 => 434,  599 => 433,  597 => 432,  595 => 431,  593 => 430,  591 => 429,  589 => 428,  587 => 427,  585 => 426,  583 => 425,  581 => 424,  579 => 423,  577 => 422,  575 => 421,  573 => 420,  571 => 419,  568 => 417,  566 => 416,  564 => 415,  562 => 414,  560 => 413,  558 => 412,  556 => 411,  554 => 410,  552 => 409,  550 => 408,  548 => 407,  546 => 406,  543 => 404,  541 => 403,  539 => 402,  537 => 401,  535 => 400,  532 => 398,  529 => 396,  526 => 394,  524 => 393,  522 => 392,  520 => 391,  517 => 389,  515 => 388,  513 => 387,  511 => 386,  509 => 385,  507 => 384,  505 => 383,  503 => 382,  501 => 381,  499 => 380,  497 => 379,  494 => 377,  492 => 376,  490 => 375,  488 => 374,  486 => 373,  484 => 372,  482 => 371,  480 => 370,  478 => 369,  476 => 368,  473 => 366,  471 => 365,  469 => 364,  467 => 363,  465 => 362,  463 => 361,  461 => 360,  459 => 359,  457 => 358,  455 => 357,  453 => 356,  451 => 355,  448 => 352,  446 => 346,  444 => 345,  442 => 344,  440 => 343,  438 => 342,  436 => 341,  434 => 340,  432 => 339,  430 => 338,  428 => 337,  426 => 336,  424 => 335,  422 => 334,  420 => 333,  418 => 332,  416 => 331,  414 => 330,  412 => 329,  410 => 328,  408 => 327,  406 => 326,  404 => 325,  401 => 322,  398 => 318,  395 => 314,  393 => 311,  391 => 310,  389 => 309,  387 => 308,  385 => 307,  383 => 306,  380 => 303,  377 => 299,  375 => 296,  373 => 295,  371 => 294,  369 => 293,  367 => 292,  365 => 291,  363 => 290,  360 => 287,  358 => 284,  356 => 283,  354 => 282,  352 => 281,  350 => 280,  348 => 279,  346 => 278,  343 => 275,  340 => 271,  338 => 268,  336 => 267,  334 => 266,  332 => 265,  330 => 264,  327 => 261,  324 => 257,  322 => 254,  320 => 253,  318 => 252,  316 => 251,  314 => 250,  311 => 247,  308 => 243,  306 => 240,  304 => 239,  302 => 238,  300 => 237,  298 => 236,  296 => 235,  294 => 234,  292 => 233,  289 => 230,  286 => 226,  284 => 223,  282 => 222,  280 => 221,  278 => 220,  276 => 219,  273 => 217,  271 => 215,  269 => 214,  267 => 213,  265 => 212,  263 => 211,  261 => 210,  259 => 209,  257 => 208,  255 => 207,  253 => 206,  251 => 205,  249 => 204,  247 => 203,  245 => 202,  243 => 201,  241 => 200,  239 => 199,  237 => 198,  235 => 197,  233 => 196,  231 => 195,  229 => 194,  227 => 193,  225 => 192,  223 => 191,  221 => 190,  219 => 189,  217 => 188,  215 => 187,  213 => 186,  211 => 185,  209 => 184,  207 => 183,  205 => 182,  203 => 181,  201 => 180,  199 => 179,  197 => 178,  195 => 177,  193 => 176,  191 => 175,  189 => 174,  187 => 173,  185 => 172,  183 => 171,  181 => 170,  179 => 169,  177 => 168,  174 => 165,  172 => 162,  170 => 161,  168 => 160,  166 => 159,  164 => 158,  162 => 157,  160 => 156,  157 => 153,  155 => 150,  153 => 149,  151 => 148,  149 => 147,  147 => 146,  145 => 145,  143 => 144,  141 => 143,  139 => 142,  136 => 139,  134 => 136,  132 => 135,  130 => 134,  128 => 133,  126 => 132,  124 => 131,  122 => 130,  120 => 125,  116 => 120,  114 => 118,  88 => 93,  85 => 91,  80 => 87,  70 => 85,  63 => 83,  54 => 80,  52 => 79,  40 => 69,  38 => 66,  35 => 65,  33 => 8,  30 => 7,  28 => 1,);
    }
}

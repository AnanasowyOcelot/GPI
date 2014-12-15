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
            <li>
                <i class=\"fa fa-globe\"></i>
                <a>Languages</a>
                <ul class=\"languages\">
                    <li class=\"active\">
                        <a href=\"#\">English <i class=\"fa fa-check\"></i></a>
                    </li>
                    <li><a href=\"#\">Spanish</a></li>
                    <li><a href=\"#\">Russian</a></li>
                    <li><a href=\"#\">German</a></li>
                </ul>
            </li>
            <li class=\"topbar-devider\"></li>
            <li><a href=\"page_faq.html\">Help</a></li>
            <li class=\"topbar-devider\"></li>

            ";
        // line 95
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 96
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("sonata_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>
                <li class=\"topbar-devider\"></li>

                <li><a href=\"";
            // line 99
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a></li>
            ";
        } else {
            // line 101
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_login", array(), "SonataUserBundle"), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_register", array(), "SonataUserBundle"), "html", null, true);
            echo "</a></li>
            ";
        }
        // line 103
        echo "
        </ul>
        <!-- End Topbar Navigation -->
        ";
        // line 107
        echo "
        ";
        // line 109
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
<li>
    <a href=\"/\" class=\"dropdown-toggle\" >Home</a>
</li>
<!-- End Home -->

";
        // line 141
        echo "    ";
        // line 146
        echo "    ";
        // line 147
        echo "    ";
        // line 148
        echo "        ";
        // line 149
        echo "        ";
        // line 150
        echo "        ";
        // line 151
        echo "        ";
        // line 152
        echo "    ";
        // line 155
        echo "
";
        // line 158
        echo "    ";
        // line 159
        echo "    ";
        // line 160
        echo "        ";
        // line 161
        echo "        ";
        // line 162
        echo "        ";
        // line 163
        echo "        ";
        // line 164
        echo "        ";
        // line 165
        echo "        ";
        // line 166
        echo "        ";
        // line 167
        echo "    ";
        // line 170
        echo "
";
        // line 173
        echo "    ";
        // line 174
        echo "    ";
        // line 175
        echo "        ";
        // line 176
        echo "        ";
        // line 177
        echo "        ";
        // line 178
        echo "        ";
        // line 179
        echo "    ";
        // line 182
        echo "
";
        // line 185
        echo "    ";
        // line 186
        echo "    ";
        // line 187
        echo "        ";
        // line 188
        echo "            ";
        // line 189
        echo "            ";
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
        echo "                ";
        // line 199
        echo "                ";
        // line 200
        echo "            ";
        // line 201
        echo "        ";
        // line 202
        echo "        ";
        // line 203
        echo "            ";
        // line 204
        echo "            ";
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
        echo "                ";
        // line 214
        echo "                ";
        // line 215
        echo "            ";
        // line 216
        echo "        ";
        // line 217
        echo "        ";
        // line 218
        echo "            ";
        // line 219
        echo "            ";
        // line 220
        echo "                ";
        // line 221
        echo "                ";
        // line 222
        echo "                ";
        // line 223
        echo "                ";
        // line 224
        echo "                ";
        // line 225
        echo "                ";
        // line 226
        echo "                ";
        // line 227
        echo "                ";
        // line 228
        echo "                ";
        // line 229
        echo "                ";
        // line 230
        echo "            ";
        // line 231
        echo "        ";
        // line 232
        echo "    ";
        // line 234
        echo "
";
        // line 236
        echo "    ";
        // line 237
        echo "    ";
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
        echo "        ";
        // line 255
        echo "        ";
        // line 256
        echo "        ";
        // line 257
        echo "    ";
        // line 260
        echo "
";
        // line 264
        echo "
";
        // line 267
        echo "    ";
        // line 268
        echo "    ";
        // line 269
        echo "        ";
        // line 270
        echo "        ";
        // line 271
        echo "    ";
        // line 274
        echo "
";
        // line 278
        echo "
";
        // line 281
        echo "    ";
        // line 282
        echo "    ";
        // line 283
        echo "        ";
        // line 284
        echo "        ";
        // line 285
        echo "    ";
        // line 288
        echo "
";
        // line 292
        echo "
";
        // line 295
        echo "    ";
        // line 296
        echo "    ";
        // line 297
        echo "        ";
        // line 298
        echo "        ";
        // line 299
        echo "        ";
        // line 300
        echo "        ";
        // line 301
        echo "    ";
        // line 304
        echo "
";
        // line 307
        echo "    ";
        // line 308
        echo "    ";
        // line 309
        echo "        ";
        // line 310
        echo "        ";
        // line 311
        echo "        ";
        // line 312
        echo "        ";
        // line 313
        echo "    ";
        // line 316
        echo "
";
        // line 320
        echo "
";
        // line 323
        echo "    ";
        // line 324
        echo "    ";
        // line 325
        echo "        ";
        // line 326
        echo "        ";
        // line 327
        echo "        ";
        // line 328
        echo "    ";
        // line 331
        echo "
";
        // line 335
        echo "
";
        // line 339
        echo "
";
        // line 342
        echo "    ";
        // line 343
        echo "    ";
        // line 344
        echo "        ";
        // line 345
        echo "        ";
        // line 346
        echo "            ";
        // line 347
        echo "            ";
        // line 348
        echo "                ";
        // line 349
        echo "                ";
        // line 350
        echo "                ";
        // line 351
        echo "                ";
        // line 352
        echo "            ";
        // line 353
        echo "        ";
        // line 354
        echo "        ";
        // line 355
        echo "        ";
        // line 356
        echo "            ";
        // line 357
        echo "            ";
        // line 358
        echo "                ";
        // line 359
        echo "                ";
        // line 360
        echo "                ";
        // line 361
        echo "            ";
        // line 362
        echo "        ";
        // line 363
        echo "    ";
        // line 369
        echo "
";
        // line 372
        echo "    ";
        // line 373
        echo "        ";
        // line 374
        echo "    ";
        // line 375
        echo "    ";
        // line 376
        echo "        ";
        // line 377
        echo "            ";
        // line 378
        echo "                ";
        // line 379
        echo "                    ";
        // line 380
        echo "                        ";
        // line 381
        echo "                            ";
        // line 382
        echo "                                ";
        // line 383
        echo "
                                ";
        // line 385
        echo "                                ";
        // line 386
        echo "                                ";
        // line 387
        echo "                                ";
        // line 388
        echo "                                ";
        // line 389
        echo "                                ";
        // line 390
        echo "                                ";
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
        echo "                                ";
        // line 397
        echo "                                ";
        // line 398
        echo "                                ";
        // line 399
        echo "                                ";
        // line 400
        echo "                                ";
        // line 401
        echo "                            ";
        // line 402
        echo "                        ";
        // line 403
        echo "                        ";
        // line 404
        echo "                            ";
        // line 405
        echo "                                ";
        // line 406
        echo "
                                ";
        // line 408
        echo "                                ";
        // line 409
        echo "                                ";
        // line 410
        echo "                                ";
        // line 411
        echo "
                                ";
        // line 413
        echo "
                                ";
        // line 415
        echo "
                                ";
        // line 417
        echo "                                ";
        // line 418
        echo "                                ";
        // line 419
        echo "                                ";
        // line 420
        echo "                                ";
        // line 421
        echo "
                                ";
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
        echo "                            ";
        // line 430
        echo "                        ";
        // line 431
        echo "                        ";
        // line 432
        echo "                            ";
        // line 433
        echo "                                ";
        // line 434
        echo "
                                ";
        // line 436
        echo "                                ";
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
        echo "                                ";
        // line 447
        echo "                            ";
        // line 448
        echo "                        ";
        // line 449
        echo "                        ";
        // line 450
        echo "                            ";
        // line 451
        echo "                                ";
        // line 452
        echo "
                                ";
        // line 454
        echo "                                ";
        // line 455
        echo "                                ";
        // line 456
        echo "                                ";
        // line 457
        echo "                                ";
        // line 458
        echo "                                ";
        // line 459
        echo "                                ";
        // line 460
        echo "                                ";
        // line 461
        echo "                                ";
        // line 462
        echo "                                ";
        // line 463
        echo "
                                ";
        // line 465
        echo "                                ";
        // line 466
        echo "                                ";
        // line 467
        echo "                                ";
        // line 468
        echo "                                ";
        // line 469
        echo "                                ";
        // line 470
        echo "                            ";
        // line 471
        echo "                        ";
        // line 472
        echo "                    ";
        // line 473
        echo "                ";
        // line 474
        echo "            ";
        // line 475
        echo "        ";
        // line 476
        echo "    ";
        // line 479
        echo "
";
        // line 482
        echo "    ";
        // line 483
        echo "        ";
        // line 484
        echo "    ";
        // line 485
        echo "    ";
        // line 486
        echo "        ";
        // line 487
        echo "            ";
        // line 488
        echo "                ";
        // line 489
        echo "                    ";
        // line 490
        echo "                        ";
        // line 491
        echo "                            ";
        // line 492
        echo "                                ";
        // line 493
        echo "
                                ";
        // line 495
        echo "                                ";
        // line 496
        echo "                                ";
        // line 497
        echo "                                ";
        // line 498
        echo "                                ";
        // line 499
        echo "                                ";
        // line 500
        echo "                                ";
        // line 501
        echo "                                ";
        // line 502
        echo "
                                ";
        // line 504
        echo "                            ";
        // line 505
        echo "                        ";
        // line 506
        echo "                        ";
        // line 507
        echo "                            ";
        // line 508
        echo "                                ";
        // line 509
        echo "
                                ";
        // line 511
        echo "                                ";
        // line 512
        echo "                                ";
        // line 513
        echo "                                ";
        // line 514
        echo "
                                ";
        // line 516
        echo "
                                ";
        // line 518
        echo "
                                ";
        // line 520
        echo "
                                ";
        // line 522
        echo "                                ";
        // line 523
        echo "                                ";
        // line 524
        echo "                                ";
        // line 525
        echo "                                ";
        // line 526
        echo "                            ";
        // line 527
        echo "                        ";
        // line 528
        echo "                        ";
        // line 529
        echo "                            ";
        // line 530
        echo "                                ";
        // line 531
        echo "                                ";
        // line 532
        echo "                                ";
        // line 533
        echo "                                ";
        // line 534
        echo "                                ";
        // line 535
        echo "                                ";
        // line 536
        echo "                                ";
        // line 537
        echo "                                ";
        // line 538
        echo "                                ";
        // line 539
        echo "                            ";
        // line 540
        echo "                        ";
        // line 541
        echo "                        ";
        // line 542
        echo "                            ";
        // line 543
        echo "                                ";
        // line 544
        echo "
                                ";
        // line 546
        echo "                                ";
        // line 547
        echo "                                ";
        // line 548
        echo "                                ";
        // line 549
        echo "                                ";
        // line 550
        echo "
                                ";
        // line 552
        echo "
                                ";
        // line 554
        echo "
                                ";
        // line 556
        echo "                                ";
        // line 557
        echo "                                ";
        // line 558
        echo "                                ";
        // line 559
        echo "                                ";
        // line 560
        echo "                            ";
        // line 561
        echo "                        ";
        // line 562
        echo "                    ";
        // line 563
        echo "                ";
        // line 564
        echo "            ";
        // line 565
        echo "        ";
        // line 566
        echo "    ";
        // line 569
        echo "
";
        // line 572
        echo "    ";
        // line 573
        echo "        ";
        // line 574
        echo "    ";
        // line 575
        echo "    ";
        // line 576
        echo "        ";
        // line 577
        echo "        ";
        // line 578
        echo "        ";
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
        echo "        ";
        // line 585
        echo "        ";
        // line 586
        echo "    ";
        // line 589
        echo "
";
        // line 592
        echo "    ";
        // line 593
        echo "        ";
        // line 594
        echo "    ";
        // line 595
        echo "    ";
        // line 596
        echo "        ";
        // line 597
        echo "        ";
        // line 598
        echo "        ";
        // line 599
        echo "        ";
        // line 600
        echo "        ";
        // line 601
        echo "    ";
        // line 604
        echo "
";
        // line 607
        echo "    ";
        // line 608
        echo "    ";
        // line 609
        echo "        ";
        // line 610
        echo "            ";
        // line 611
        echo "                                    ";
        // line 612
        echo "                                        ";
        // line 613
        echo "                                    ";
        // line 614
        echo "        ";
        // line 615
        echo "    ";
        // line 619
        echo "</div><!--/navbar-collapse-->
</div>
</div>
<!-- End Navbar -->
</div>
<!--=== End Header ===-->

<!--=== Breadcrumbs ===-->
<div class=\"breadcrumbs\">
    ";
        // line 629
        echo "        ";
        // line 630
        echo "        ";
        // line 631
        echo "            ";
        // line 632
        echo "            ";
        // line 633
        echo "            ";
        // line 634
        echo "        ";
        // line 635
        echo "    ";
        // line 636
        echo "</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

";
        // line 639
        $this->displayBlock('sonata_page_container', $context, $blocks);
        // line 989
        echo "
<!--=== Footer Version 1 ===-->
<div class=\"footer-v1\">
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- About -->
                ";
        // line 997
        echo "                    ";
        // line 998
        echo "                    ";
        // line 999
        echo "                    ";
        // line 1000
        echo "                ";
        // line 1001
        echo "                <!-- End About -->

                <!-- Latest -->
                ";
        // line 1005
        echo "                    ";
        // line 1006
        echo "                        ";
        // line 1007
        echo "                        ";
        // line 1008
        echo "                            ";
        // line 1009
        echo "                                ";
        // line 1010
        echo "                                ";
        // line 1011
        echo "                            ";
        // line 1012
        echo "                            ";
        // line 1013
        echo "                                ";
        // line 1014
        echo "                                ";
        // line 1015
        echo "                            ";
        // line 1016
        echo "                            ";
        // line 1017
        echo "                                ";
        // line 1018
        echo "                                ";
        // line 1019
        echo "                            ";
        // line 1020
        echo "                        ";
        // line 1021
        echo "                    ";
        // line 1022
        echo "                ";
        // line 1023
        echo "                <!-- End Latest -->

                <!-- Link List -->
                ";
        // line 1027
        echo "                    ";
        // line 1028
        echo "                    ";
        // line 1029
        echo "                        ";
        // line 1030
        echo "                        ";
        // line 1031
        echo "                        ";
        // line 1032
        echo "                        ";
        // line 1033
        echo "                        ";
        // line 1034
        echo "                    ";
        // line 1035
        echo "                ";
        // line 1036
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
    <title>Unify | Welcome...</title>
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

    // line 639
    public function block_sonata_page_container($context, array $blocks = array())
    {
        // line 640
        echo "<!--=== Content Part ===-->

<div class=\"container content\">
";
        // line 643
        $this->displayBlock('page_content', $context, $blocks);
        // line 877
        echo "<!-- Our Clients -->
";
        // line 879
        echo "    ";
        // line 880
        echo "    ";
        // line 881
        echo "        ";
        // line 882
        echo "            ";
        // line 883
        echo "                ";
        // line 884
        echo "                ";
        // line 885
        echo "            ";
        // line 886
        echo "        ";
        // line 887
        echo "        ";
        // line 888
        echo "            ";
        // line 889
        echo "                ";
        // line 890
        echo "                ";
        // line 891
        echo "            ";
        // line 892
        echo "        ";
        // line 893
        echo "        ";
        // line 894
        echo "            ";
        // line 895
        echo "                ";
        // line 896
        echo "                ";
        // line 897
        echo "            ";
        // line 898
        echo "        ";
        // line 899
        echo "        ";
        // line 900
        echo "            ";
        // line 901
        echo "                ";
        // line 902
        echo "                ";
        // line 903
        echo "            ";
        // line 904
        echo "        ";
        // line 905
        echo "        ";
        // line 906
        echo "            ";
        // line 907
        echo "                ";
        // line 908
        echo "                ";
        // line 909
        echo "            ";
        // line 910
        echo "        ";
        // line 911
        echo "        ";
        // line 912
        echo "            ";
        // line 913
        echo "                ";
        // line 914
        echo "                ";
        // line 915
        echo "            ";
        // line 916
        echo "        ";
        // line 917
        echo "        ";
        // line 918
        echo "            ";
        // line 919
        echo "                ";
        // line 920
        echo "                ";
        // line 921
        echo "            ";
        // line 922
        echo "        ";
        // line 923
        echo "        ";
        // line 924
        echo "            ";
        // line 925
        echo "                ";
        // line 926
        echo "                ";
        // line 927
        echo "            ";
        // line 928
        echo "        ";
        // line 929
        echo "        ";
        // line 930
        echo "            ";
        // line 931
        echo "                ";
        // line 932
        echo "                ";
        // line 933
        echo "            ";
        // line 934
        echo "        ";
        // line 935
        echo "        ";
        // line 936
        echo "            ";
        // line 937
        echo "                ";
        // line 938
        echo "                ";
        // line 939
        echo "            ";
        // line 940
        echo "        ";
        // line 941
        echo "        ";
        // line 942
        echo "            ";
        // line 943
        echo "                ";
        // line 944
        echo "                ";
        // line 945
        echo "            ";
        // line 946
        echo "        ";
        // line 947
        echo "        ";
        // line 948
        echo "            ";
        // line 949
        echo "                ";
        // line 950
        echo "                ";
        // line 951
        echo "            ";
        // line 952
        echo "        ";
        // line 953
        echo "        ";
        // line 954
        echo "            ";
        // line 955
        echo "                ";
        // line 956
        echo "                ";
        // line 957
        echo "            ";
        // line 958
        echo "        ";
        // line 959
        echo "        ";
        // line 960
        echo "            ";
        // line 961
        echo "                ";
        // line 962
        echo "                ";
        // line 963
        echo "            ";
        // line 964
        echo "        ";
        // line 965
        echo "        ";
        // line 966
        echo "            ";
        // line 967
        echo "                ";
        // line 968
        echo "                ";
        // line 969
        echo "            ";
        // line 970
        echo "        ";
        // line 971
        echo "        ";
        // line 972
        echo "            ";
        // line 973
        echo "                ";
        // line 974
        echo "                ";
        // line 975
        echo "            ";
        // line 976
        echo "        ";
        // line 977
        echo "        ";
        // line 978
        echo "            ";
        // line 979
        echo "                ";
        // line 980
        echo "                ";
        // line 981
        echo "            ";
        // line 982
        echo "        ";
        // line 983
        echo "    ";
        // line 985
        echo "<!-- End Our Clients -->
</div><!--/container-->
<!--=== End Content Part ===-->
";
    }

    // line 643
    public function block_page_content($context, array $blocks = array())
    {
        // line 644
        echo "    ";
        if (array_key_exists("content", $context)) {
            // line 645
            echo "        ";
            echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
            echo "
    ";
        } else {
            // line 647
            echo "        ";
            $context["content"] = $this->renderBlock("content", $context, $blocks);
            // line 648
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"))) > 0)) {
                // line 649
                echo "            ";
                echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
                echo "
        ";
            } elseif (array_key_exists("page", $context)) {
                // line 651
                echo "            ";
                echo $this->env->getExtension('sonata_page')->renderContainer("content", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
                echo "
        ";
            }
            // line 653
            echo "    ";
        }
        // line 654
        echo "    ";
        if (array_key_exists("page", $context)) {
            // line 655
            echo "
        <div class=\"row\">


        <div class=\"col-md-3\">
            ";
            // line 660
            echo $this->env->getExtension('sonata_page')->renderContainer("left_col", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
            echo "
            <!-- About Us -->
            <div class=\"margin-bottom-30\">
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
            echo "            </div>

            ";
            // line 674
            echo "            ";
            // line 675
            echo "            ";
            // line 676
            echo "            ";
            // line 677
            echo "            ";
            // line 678
            echo "            ";
            // line 679
            echo "            ";
            // line 680
            echo "            ";
            // line 681
            echo "            ";
            // line 682
            echo "            ";
            // line 683
            echo "            ";
            // line 684
            echo "            ";
            // line 685
            echo "            ";
            // line 686
            echo "            ";
            // line 687
            echo "            ";
            // line 688
            echo "            ";
            // line 689
            echo "            ";
            // line 690
            echo "            ";
            // line 691
            echo "            ";
            // line 692
            echo "            ";
            // line 693
            echo "            ";
            // line 694
            echo "            ";
            // line 695
            echo "
            <!-- Contact Us -->
            ";
            // line 698
            echo "                ";
            // line 699
            echo "                ";
            // line 700
            echo "                ";
            // line 701
            echo "                ";
            // line 702
            echo "                ";
            // line 703
            echo "                ";
            // line 704
            echo "                ";
            // line 705
            echo "                ";
            // line 706
            echo "            ";
            // line 707
            echo "        </div><!--/col-md-3-->

        <div class=\"col-md-9\">
            ";
            // line 710
            echo $this->env->getExtension('sonata_page')->renderContainer("right_col", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
            echo "
            <!-- Our Services -->
            ";
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
            echo "            ";
            // line 720
            echo "            ";
            // line 721
            echo "            ";
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
            echo "            ";
            // line 729
            echo "            ";
            // line 730
            echo "            ";
            // line 731
            echo "            ";
            // line 732
            echo "            ";
            // line 733
            echo "            ";
            // line 734
            echo "            ";
            // line 735
            echo "            ";
            // line 736
            echo "
            <!-- Blockquotes -->
            ";
            // line 739
            echo "            ";
            // line 740
            echo "            ";
            // line 741
            echo "            ";
            // line 742
            echo "            ";
            // line 743
            echo "            ";
            // line 744
            echo "            ";
            // line 745
            echo "            <!-- End Blockquotes -->

            <!-- Recent Works -->
            ";
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
            echo "
            ";
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
            echo "            ";
            // line 855
            echo "            ";
            // line 856
            echo "            ";
            // line 857
            echo "            ";
            // line 858
            echo "            ";
            // line 859
            echo "            ";
            // line 860
            echo "            ";
            // line 861
            echo "            ";
            // line 862
            echo "            ";
            // line 863
            echo "            ";
            // line 864
            echo "            ";
            // line 865
            echo "            ";
            // line 866
            echo "            ";
            // line 867
            echo "            ";
            // line 868
            echo "            ";
            // line 869
            echo "            ";
            // line 870
            echo "            ";
            // line 871
            echo "            <!-- End Recent Works -->
        </div><!--/col-md-9-->
        </div><!--/row-->
    ";
        }
        // line 875
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
        return array (  1979 => 875,  1973 => 871,  1971 => 870,  1969 => 869,  1967 => 868,  1965 => 867,  1963 => 866,  1961 => 865,  1959 => 864,  1957 => 863,  1955 => 862,  1953 => 861,  1951 => 860,  1949 => 859,  1947 => 858,  1945 => 857,  1943 => 856,  1941 => 855,  1939 => 854,  1937 => 853,  1935 => 852,  1933 => 851,  1931 => 850,  1929 => 849,  1927 => 848,  1925 => 847,  1923 => 846,  1921 => 845,  1919 => 844,  1917 => 843,  1915 => 842,  1913 => 841,  1911 => 840,  1909 => 839,  1907 => 838,  1905 => 837,  1903 => 836,  1901 => 835,  1899 => 834,  1897 => 833,  1895 => 832,  1893 => 831,  1891 => 830,  1889 => 829,  1887 => 828,  1885 => 827,  1883 => 826,  1881 => 825,  1879 => 824,  1877 => 823,  1875 => 822,  1873 => 821,  1871 => 820,  1869 => 819,  1867 => 818,  1865 => 817,  1863 => 816,  1861 => 815,  1859 => 814,  1857 => 813,  1855 => 812,  1853 => 811,  1851 => 810,  1849 => 809,  1847 => 808,  1845 => 807,  1843 => 806,  1841 => 805,  1839 => 804,  1837 => 803,  1835 => 802,  1833 => 801,  1831 => 800,  1829 => 799,  1827 => 798,  1825 => 797,  1823 => 796,  1821 => 795,  1819 => 794,  1817 => 793,  1815 => 792,  1813 => 791,  1811 => 790,  1809 => 789,  1807 => 788,  1805 => 787,  1803 => 786,  1801 => 785,  1799 => 784,  1797 => 783,  1795 => 782,  1793 => 781,  1791 => 780,  1789 => 779,  1787 => 778,  1785 => 777,  1783 => 776,  1781 => 775,  1779 => 774,  1777 => 773,  1775 => 772,  1773 => 771,  1771 => 770,  1769 => 769,  1767 => 768,  1765 => 767,  1763 => 766,  1761 => 765,  1759 => 764,  1757 => 763,  1755 => 762,  1753 => 761,  1751 => 760,  1749 => 759,  1746 => 757,  1744 => 756,  1742 => 755,  1740 => 754,  1738 => 753,  1736 => 752,  1734 => 751,  1732 => 750,  1730 => 749,  1725 => 745,  1723 => 744,  1721 => 743,  1719 => 742,  1717 => 741,  1715 => 740,  1713 => 739,  1709 => 736,  1707 => 735,  1705 => 734,  1703 => 733,  1701 => 732,  1699 => 731,  1697 => 730,  1695 => 729,  1693 => 728,  1691 => 727,  1689 => 726,  1687 => 725,  1685 => 724,  1683 => 723,  1681 => 722,  1679 => 721,  1677 => 720,  1675 => 719,  1673 => 718,  1671 => 717,  1669 => 716,  1667 => 715,  1665 => 714,  1663 => 713,  1658 => 710,  1653 => 707,  1651 => 706,  1649 => 705,  1647 => 704,  1645 => 703,  1643 => 702,  1641 => 701,  1639 => 700,  1637 => 699,  1635 => 698,  1631 => 695,  1629 => 694,  1627 => 693,  1625 => 692,  1623 => 691,  1621 => 690,  1619 => 689,  1617 => 688,  1615 => 687,  1613 => 686,  1611 => 685,  1609 => 684,  1607 => 683,  1605 => 682,  1603 => 681,  1601 => 680,  1599 => 679,  1597 => 678,  1595 => 677,  1593 => 676,  1591 => 675,  1589 => 674,  1585 => 671,  1583 => 670,  1581 => 669,  1579 => 668,  1577 => 667,  1575 => 666,  1573 => 665,  1571 => 664,  1565 => 660,  1558 => 655,  1555 => 654,  1552 => 653,  1546 => 651,  1540 => 649,  1537 => 648,  1534 => 647,  1528 => 645,  1525 => 644,  1522 => 643,  1515 => 985,  1513 => 983,  1511 => 982,  1509 => 981,  1507 => 980,  1505 => 979,  1503 => 978,  1501 => 977,  1499 => 976,  1497 => 975,  1495 => 974,  1493 => 973,  1491 => 972,  1489 => 971,  1487 => 970,  1485 => 969,  1483 => 968,  1481 => 967,  1479 => 966,  1477 => 965,  1475 => 964,  1473 => 963,  1471 => 962,  1469 => 961,  1467 => 960,  1465 => 959,  1463 => 958,  1461 => 957,  1459 => 956,  1457 => 955,  1455 => 954,  1453 => 953,  1451 => 952,  1449 => 951,  1447 => 950,  1445 => 949,  1443 => 948,  1441 => 947,  1439 => 946,  1437 => 945,  1435 => 944,  1433 => 943,  1431 => 942,  1429 => 941,  1427 => 940,  1425 => 939,  1423 => 938,  1421 => 937,  1419 => 936,  1417 => 935,  1415 => 934,  1413 => 933,  1411 => 932,  1409 => 931,  1407 => 930,  1405 => 929,  1403 => 928,  1401 => 927,  1399 => 926,  1397 => 925,  1395 => 924,  1393 => 923,  1391 => 922,  1389 => 921,  1387 => 920,  1385 => 919,  1383 => 918,  1381 => 917,  1379 => 916,  1377 => 915,  1375 => 914,  1373 => 913,  1371 => 912,  1369 => 911,  1367 => 910,  1365 => 909,  1363 => 908,  1361 => 907,  1359 => 906,  1357 => 905,  1355 => 904,  1353 => 903,  1351 => 902,  1349 => 901,  1347 => 900,  1345 => 899,  1343 => 898,  1341 => 897,  1339 => 896,  1337 => 895,  1335 => 894,  1333 => 893,  1331 => 892,  1329 => 891,  1327 => 890,  1325 => 889,  1323 => 888,  1321 => 887,  1319 => 886,  1317 => 885,  1315 => 884,  1313 => 883,  1311 => 882,  1309 => 881,  1307 => 880,  1305 => 879,  1302 => 877,  1300 => 643,  1295 => 640,  1292 => 639,  1287 => 67,  1284 => 66,  1280 => 61,  1271 => 59,  1267 => 58,  1260 => 53,  1256 => 52,  1252 => 62,  1249 => 52,  1246 => 51,  1242 => 48,  1233 => 46,  1228 => 45,  1224 => 44,  1220 => 49,  1217 => 44,  1214 => 43,  1209 => 63,  1207 => 51,  1204 => 50,  1202 => 43,  1168 => 12,  1164 => 11,  1158 => 9,  1155 => 8,  1147 => 2,  1144 => 1,  1020 => 1036,  1018 => 1035,  1016 => 1034,  1014 => 1033,  1012 => 1032,  1010 => 1031,  1008 => 1030,  1006 => 1029,  1004 => 1028,  1002 => 1027,  997 => 1023,  995 => 1022,  993 => 1021,  991 => 1020,  989 => 1019,  987 => 1018,  985 => 1017,  983 => 1016,  981 => 1015,  979 => 1014,  977 => 1013,  975 => 1012,  973 => 1011,  971 => 1010,  969 => 1009,  967 => 1008,  965 => 1007,  963 => 1006,  961 => 1005,  956 => 1001,  954 => 1000,  952 => 999,  950 => 998,  948 => 997,  939 => 989,  937 => 639,  932 => 636,  930 => 635,  928 => 634,  926 => 633,  924 => 632,  922 => 631,  920 => 630,  918 => 629,  907 => 619,  905 => 615,  903 => 614,  901 => 613,  899 => 612,  897 => 611,  895 => 610,  893 => 609,  891 => 608,  889 => 607,  886 => 604,  884 => 601,  882 => 600,  880 => 599,  878 => 598,  876 => 597,  874 => 596,  872 => 595,  870 => 594,  868 => 593,  866 => 592,  863 => 589,  861 => 586,  859 => 585,  857 => 584,  855 => 583,  853 => 582,  851 => 581,  849 => 580,  847 => 579,  845 => 578,  843 => 577,  841 => 576,  839 => 575,  837 => 574,  835 => 573,  833 => 572,  830 => 569,  828 => 566,  826 => 565,  824 => 564,  822 => 563,  820 => 562,  818 => 561,  816 => 560,  814 => 559,  812 => 558,  810 => 557,  808 => 556,  805 => 554,  802 => 552,  799 => 550,  797 => 549,  795 => 548,  793 => 547,  791 => 546,  788 => 544,  786 => 543,  784 => 542,  782 => 541,  780 => 540,  778 => 539,  776 => 538,  774 => 537,  772 => 536,  770 => 535,  768 => 534,  766 => 533,  764 => 532,  762 => 531,  760 => 530,  758 => 529,  756 => 528,  754 => 527,  752 => 526,  750 => 525,  748 => 524,  746 => 523,  744 => 522,  741 => 520,  738 => 518,  735 => 516,  732 => 514,  730 => 513,  728 => 512,  726 => 511,  723 => 509,  721 => 508,  719 => 507,  717 => 506,  715 => 505,  713 => 504,  710 => 502,  708 => 501,  706 => 500,  704 => 499,  702 => 498,  700 => 497,  698 => 496,  696 => 495,  693 => 493,  691 => 492,  689 => 491,  687 => 490,  685 => 489,  683 => 488,  681 => 487,  679 => 486,  677 => 485,  675 => 484,  673 => 483,  671 => 482,  668 => 479,  666 => 476,  664 => 475,  662 => 474,  660 => 473,  658 => 472,  656 => 471,  654 => 470,  652 => 469,  650 => 468,  648 => 467,  646 => 466,  644 => 465,  641 => 463,  639 => 462,  637 => 461,  635 => 460,  633 => 459,  631 => 458,  629 => 457,  627 => 456,  625 => 455,  623 => 454,  620 => 452,  618 => 451,  616 => 450,  614 => 449,  612 => 448,  610 => 447,  608 => 446,  606 => 445,  604 => 444,  602 => 443,  600 => 442,  598 => 441,  596 => 440,  594 => 439,  592 => 438,  590 => 437,  588 => 436,  585 => 434,  583 => 433,  581 => 432,  579 => 431,  577 => 430,  575 => 429,  573 => 428,  571 => 427,  569 => 426,  567 => 425,  565 => 424,  563 => 423,  560 => 421,  558 => 420,  556 => 419,  554 => 418,  552 => 417,  549 => 415,  546 => 413,  543 => 411,  541 => 410,  539 => 409,  537 => 408,  534 => 406,  532 => 405,  530 => 404,  528 => 403,  526 => 402,  524 => 401,  522 => 400,  520 => 399,  518 => 398,  516 => 397,  514 => 396,  511 => 394,  509 => 393,  507 => 392,  505 => 391,  503 => 390,  501 => 389,  499 => 388,  497 => 387,  495 => 386,  493 => 385,  490 => 383,  488 => 382,  486 => 381,  484 => 380,  482 => 379,  480 => 378,  478 => 377,  476 => 376,  474 => 375,  472 => 374,  470 => 373,  468 => 372,  465 => 369,  463 => 363,  461 => 362,  459 => 361,  457 => 360,  455 => 359,  453 => 358,  451 => 357,  449 => 356,  447 => 355,  445 => 354,  443 => 353,  441 => 352,  439 => 351,  437 => 350,  435 => 349,  433 => 348,  431 => 347,  429 => 346,  427 => 345,  425 => 344,  423 => 343,  421 => 342,  418 => 339,  415 => 335,  412 => 331,  410 => 328,  408 => 327,  406 => 326,  404 => 325,  402 => 324,  400 => 323,  397 => 320,  394 => 316,  392 => 313,  390 => 312,  388 => 311,  386 => 310,  384 => 309,  382 => 308,  380 => 307,  377 => 304,  375 => 301,  373 => 300,  371 => 299,  369 => 298,  367 => 297,  365 => 296,  363 => 295,  360 => 292,  357 => 288,  355 => 285,  353 => 284,  351 => 283,  349 => 282,  347 => 281,  344 => 278,  341 => 274,  339 => 271,  337 => 270,  335 => 269,  333 => 268,  331 => 267,  328 => 264,  325 => 260,  323 => 257,  321 => 256,  319 => 255,  317 => 254,  315 => 253,  313 => 252,  311 => 251,  309 => 250,  306 => 247,  303 => 243,  301 => 240,  299 => 239,  297 => 238,  295 => 237,  293 => 236,  290 => 234,  288 => 232,  286 => 231,  284 => 230,  282 => 229,  280 => 228,  278 => 227,  276 => 226,  274 => 225,  272 => 224,  270 => 223,  268 => 222,  266 => 221,  264 => 220,  262 => 219,  260 => 218,  258 => 217,  256 => 216,  254 => 215,  252 => 214,  250 => 213,  248 => 212,  246 => 211,  244 => 210,  242 => 209,  240 => 208,  238 => 207,  236 => 206,  234 => 205,  232 => 204,  230 => 203,  228 => 202,  226 => 201,  224 => 200,  222 => 199,  220 => 198,  218 => 197,  216 => 196,  214 => 195,  212 => 194,  210 => 193,  208 => 192,  206 => 191,  204 => 190,  202 => 189,  200 => 188,  198 => 187,  196 => 186,  194 => 185,  191 => 182,  189 => 179,  187 => 178,  185 => 177,  183 => 176,  181 => 175,  179 => 174,  177 => 173,  174 => 170,  172 => 167,  170 => 166,  168 => 165,  166 => 164,  164 => 163,  162 => 162,  160 => 161,  158 => 160,  156 => 159,  154 => 158,  151 => 155,  149 => 152,  147 => 151,  145 => 150,  143 => 149,  141 => 148,  139 => 147,  137 => 146,  135 => 141,  104 => 109,  101 => 107,  96 => 103,  86 => 101,  79 => 99,  70 => 96,  68 => 95,  40 => 69,  38 => 66,  35 => 65,  33 => 8,  30 => 7,  28 => 1,);
    }
}

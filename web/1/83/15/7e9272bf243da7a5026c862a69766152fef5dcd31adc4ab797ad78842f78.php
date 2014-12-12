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
        // line 64
        echo "
";
        // line 65
        $this->displayBlock('sonata_page_body_tag', $context, $blocks);
        // line 68
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
        // line 94
        if ($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array())) {
            // line 95
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("sonata_user_profile_show");
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array()), "html", null, true);
            echo "</a></li>
                <li class=\"topbar-devider\"></li>

                <li><a href=\"";
            // line 98
            echo $this->env->getExtension('routing')->getPath("fos_user_security_logout");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_logout", array(), "SonataUserBundle"), "html", null, true);
            echo "</a></li>
            ";
        } else {
            // line 100
            echo "            <li><a href=\"";
            echo $this->env->getExtension('routing')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_login", array(), "SonataUserBundle"), "html", null, true);
            echo " / ";
            echo twig_escape_filter($this->env, $this->env->getExtension('translator')->trans("link_register", array(), "SonataUserBundle"), "html", null, true);
            echo "</a></li>
            ";
        }
        // line 102
        echo "
        </ul>
        <!-- End Topbar Navigation -->
        ";
        // line 106
        echo "
        ";
        // line 108
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
        // line 140
        echo "    ";
        // line 145
        echo "    ";
        // line 146
        echo "    ";
        // line 147
        echo "        ";
        // line 148
        echo "        ";
        // line 149
        echo "        ";
        // line 150
        echo "        ";
        // line 151
        echo "    ";
        // line 154
        echo "
";
        // line 157
        echo "    ";
        // line 158
        echo "    ";
        // line 159
        echo "        ";
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
        echo "    ";
        // line 169
        echo "
";
        // line 172
        echo "    ";
        // line 173
        echo "    ";
        // line 174
        echo "        ";
        // line 175
        echo "        ";
        // line 176
        echo "        ";
        // line 177
        echo "        ";
        // line 178
        echo "    ";
        // line 181
        echo "
";
        // line 184
        echo "    ";
        // line 185
        echo "    ";
        // line 186
        echo "        ";
        // line 187
        echo "            ";
        // line 188
        echo "            ";
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
        echo "                ";
        // line 199
        echo "            ";
        // line 200
        echo "        ";
        // line 201
        echo "        ";
        // line 202
        echo "            ";
        // line 203
        echo "            ";
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
        echo "                ";
        // line 214
        echo "            ";
        // line 215
        echo "        ";
        // line 216
        echo "        ";
        // line 217
        echo "            ";
        // line 218
        echo "            ";
        // line 219
        echo "                ";
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
        echo "            ";
        // line 230
        echo "        ";
        // line 231
        echo "    ";
        // line 233
        echo "
";
        // line 235
        echo "    ";
        // line 236
        echo "    ";
        // line 237
        echo "        ";
        // line 238
        echo "        ";
        // line 239
        echo "    ";
        // line 242
        echo "
";
        // line 246
        echo "
";
        // line 249
        echo "    ";
        // line 250
        echo "    ";
        // line 251
        echo "        ";
        // line 252
        echo "        ";
        // line 253
        echo "        ";
        // line 254
        echo "        ";
        // line 255
        echo "        ";
        // line 256
        echo "    ";
        // line 259
        echo "
";
        // line 263
        echo "
";
        // line 266
        echo "    ";
        // line 267
        echo "    ";
        // line 268
        echo "        ";
        // line 269
        echo "        ";
        // line 270
        echo "    ";
        // line 273
        echo "
";
        // line 277
        echo "
";
        // line 280
        echo "    ";
        // line 281
        echo "    ";
        // line 282
        echo "        ";
        // line 283
        echo "        ";
        // line 284
        echo "    ";
        // line 287
        echo "
";
        // line 291
        echo "
";
        // line 294
        echo "    ";
        // line 295
        echo "    ";
        // line 296
        echo "        ";
        // line 297
        echo "        ";
        // line 298
        echo "        ";
        // line 299
        echo "        ";
        // line 300
        echo "    ";
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
        echo "        ";
        // line 312
        echo "    ";
        // line 315
        echo "
";
        // line 319
        echo "
";
        // line 322
        echo "    ";
        // line 323
        echo "    ";
        // line 324
        echo "        ";
        // line 325
        echo "        ";
        // line 326
        echo "        ";
        // line 327
        echo "    ";
        // line 330
        echo "
";
        // line 334
        echo "
";
        // line 338
        echo "
";
        // line 341
        echo "    ";
        // line 342
        echo "    ";
        // line 343
        echo "        ";
        // line 344
        echo "        ";
        // line 345
        echo "            ";
        // line 346
        echo "            ";
        // line 347
        echo "                ";
        // line 348
        echo "                ";
        // line 349
        echo "                ";
        // line 350
        echo "                ";
        // line 351
        echo "            ";
        // line 352
        echo "        ";
        // line 353
        echo "        ";
        // line 354
        echo "        ";
        // line 355
        echo "            ";
        // line 356
        echo "            ";
        // line 357
        echo "                ";
        // line 358
        echo "                ";
        // line 359
        echo "                ";
        // line 360
        echo "            ";
        // line 361
        echo "        ";
        // line 362
        echo "    ";
        // line 368
        echo "
";
        // line 371
        echo "    ";
        // line 372
        echo "        ";
        // line 373
        echo "    ";
        // line 374
        echo "    ";
        // line 375
        echo "        ";
        // line 376
        echo "            ";
        // line 377
        echo "                ";
        // line 378
        echo "                    ";
        // line 379
        echo "                        ";
        // line 380
        echo "                            ";
        // line 381
        echo "                                ";
        // line 382
        echo "
                                ";
        // line 384
        echo "                                ";
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
        echo "
                                ";
        // line 395
        echo "                                ";
        // line 396
        echo "                                ";
        // line 397
        echo "                                ";
        // line 398
        echo "                                ";
        // line 399
        echo "                                ";
        // line 400
        echo "                            ";
        // line 401
        echo "                        ";
        // line 402
        echo "                        ";
        // line 403
        echo "                            ";
        // line 404
        echo "                                ";
        // line 405
        echo "
                                ";
        // line 407
        echo "                                ";
        // line 408
        echo "                                ";
        // line 409
        echo "                                ";
        // line 410
        echo "
                                ";
        // line 412
        echo "
                                ";
        // line 414
        echo "
                                ";
        // line 416
        echo "                                ";
        // line 417
        echo "                                ";
        // line 418
        echo "                                ";
        // line 419
        echo "                                ";
        // line 420
        echo "
                                ";
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
        echo "                            ";
        // line 429
        echo "                        ";
        // line 430
        echo "                        ";
        // line 431
        echo "                            ";
        // line 432
        echo "                                ";
        // line 433
        echo "
                                ";
        // line 435
        echo "                                ";
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
        echo "                            ";
        // line 447
        echo "                        ";
        // line 448
        echo "                        ";
        // line 449
        echo "                            ";
        // line 450
        echo "                                ";
        // line 451
        echo "
                                ";
        // line 453
        echo "                                ";
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
        echo "
                                ";
        // line 464
        echo "                                ";
        // line 465
        echo "                                ";
        // line 466
        echo "                                ";
        // line 467
        echo "                                ";
        // line 468
        echo "                                ";
        // line 469
        echo "                            ";
        // line 470
        echo "                        ";
        // line 471
        echo "                    ";
        // line 472
        echo "                ";
        // line 473
        echo "            ";
        // line 474
        echo "        ";
        // line 475
        echo "    ";
        // line 478
        echo "
";
        // line 481
        echo "    ";
        // line 482
        echo "        ";
        // line 483
        echo "    ";
        // line 484
        echo "    ";
        // line 485
        echo "        ";
        // line 486
        echo "            ";
        // line 487
        echo "                ";
        // line 488
        echo "                    ";
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
        echo "                                ";
        // line 498
        echo "                                ";
        // line 499
        echo "                                ";
        // line 500
        echo "                                ";
        // line 501
        echo "
                                ";
        // line 503
        echo "                            ";
        // line 504
        echo "                        ";
        // line 505
        echo "                        ";
        // line 506
        echo "                            ";
        // line 507
        echo "                                ";
        // line 508
        echo "
                                ";
        // line 510
        echo "                                ";
        // line 511
        echo "                                ";
        // line 512
        echo "                                ";
        // line 513
        echo "
                                ";
        // line 515
        echo "
                                ";
        // line 517
        echo "
                                ";
        // line 519
        echo "
                                ";
        // line 521
        echo "                                ";
        // line 522
        echo "                                ";
        // line 523
        echo "                                ";
        // line 524
        echo "                                ";
        // line 525
        echo "                            ";
        // line 526
        echo "                        ";
        // line 527
        echo "                        ";
        // line 528
        echo "                            ";
        // line 529
        echo "                                ";
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
        echo "                            ";
        // line 539
        echo "                        ";
        // line 540
        echo "                        ";
        // line 541
        echo "                            ";
        // line 542
        echo "                                ";
        // line 543
        echo "
                                ";
        // line 545
        echo "                                ";
        // line 546
        echo "                                ";
        // line 547
        echo "                                ";
        // line 548
        echo "                                ";
        // line 549
        echo "
                                ";
        // line 551
        echo "
                                ";
        // line 553
        echo "
                                ";
        // line 555
        echo "                                ";
        // line 556
        echo "                                ";
        // line 557
        echo "                                ";
        // line 558
        echo "                                ";
        // line 559
        echo "                            ";
        // line 560
        echo "                        ";
        // line 561
        echo "                    ";
        // line 562
        echo "                ";
        // line 563
        echo "            ";
        // line 564
        echo "        ";
        // line 565
        echo "    ";
        // line 568
        echo "
";
        // line 571
        echo "    ";
        // line 572
        echo "        ";
        // line 573
        echo "    ";
        // line 574
        echo "    ";
        // line 575
        echo "        ";
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
        echo "    ";
        // line 588
        echo "
";
        // line 591
        echo "    ";
        // line 592
        echo "        ";
        // line 593
        echo "    ";
        // line 594
        echo "    ";
        // line 595
        echo "        ";
        // line 596
        echo "        ";
        // line 597
        echo "        ";
        // line 598
        echo "        ";
        // line 599
        echo "        ";
        // line 600
        echo "    ";
        // line 603
        echo "
";
        // line 606
        echo "    ";
        // line 607
        echo "    ";
        // line 608
        echo "        ";
        // line 609
        echo "            ";
        // line 610
        echo "                                    ";
        // line 611
        echo "                                        ";
        // line 612
        echo "                                    ";
        // line 613
        echo "        ";
        // line 614
        echo "    ";
        // line 618
        echo "</div><!--/navbar-collapse-->
</div>
</div>
<!-- End Navbar -->
</div>
<!--=== End Header ===-->

<!--=== Breadcrumbs ===-->
<div class=\"breadcrumbs\">
    ";
        // line 628
        echo "        ";
        // line 629
        echo "        ";
        // line 630
        echo "            ";
        // line 631
        echo "            ";
        // line 632
        echo "            ";
        // line 633
        echo "        ";
        // line 634
        echo "    ";
        // line 635
        echo "</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

";
        // line 638
        $this->displayBlock('sonata_page_container', $context, $blocks);
        // line 988
        echo "
<!--=== Footer Version 1 ===-->
<div class=\"footer-v1\">
    <div class=\"footer\">
        <div class=\"container\">
            <div class=\"row\">
                <!-- About -->
                ";
        // line 996
        echo "                    ";
        // line 997
        echo "                    ";
        // line 998
        echo "                    ";
        // line 999
        echo "                ";
        // line 1000
        echo "                <!-- End About -->

                <!-- Latest -->
                ";
        // line 1004
        echo "                    ";
        // line 1005
        echo "                        ";
        // line 1006
        echo "                        ";
        // line 1007
        echo "                            ";
        // line 1008
        echo "                                ";
        // line 1009
        echo "                                ";
        // line 1010
        echo "                            ";
        // line 1011
        echo "                            ";
        // line 1012
        echo "                                ";
        // line 1013
        echo "                                ";
        // line 1014
        echo "                            ";
        // line 1015
        echo "                            ";
        // line 1016
        echo "                                ";
        // line 1017
        echo "                                ";
        // line 1018
        echo "                            ";
        // line 1019
        echo "                        ";
        // line 1020
        echo "                    ";
        // line 1021
        echo "                ";
        // line 1022
        echo "                <!-- End Latest -->

                <!-- Link List -->
                ";
        // line 1026
        echo "                    ";
        // line 1027
        echo "                    ";
        // line 1028
        echo "                        ";
        // line 1029
        echo "                        ";
        // line 1030
        echo "                        ";
        // line 1031
        echo "                        ";
        // line 1032
        echo "                        ";
        // line 1033
        echo "                    ";
        // line 1034
        echo "                ";
        // line 1035
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



    <!-- CSS Theme -->
    <link rel=\"stylesheet\" href=\"/bundles/gpilayout/css/theme-colors/default.css\">

    <!-- CSS Customization -->
    <link rel=\"stylesheet\" href=\"/bundles/gpilayout/css/custom.css\">

    ";
        // line 42
        $this->displayBlock('sonata_page_stylesheets', $context, $blocks);
        // line 49
        echo "
    ";
        // line 50
        $this->displayBlock('sonata_page_javascripts', $context, $blocks);
        // line 62
        echo "</head>
";
    }

    // line 42
    public function block_sonata_page_stylesheets($context, array $blocks = array())
    {
        // line 43
        echo "        ";
        $this->displayBlock('page_stylesheets', $context, $blocks);
        // line 48
        echo "    ";
    }

    // line 43
    public function block_page_stylesheets($context, array $blocks = array())
    {
        echo " ";
        // line 44
        echo "            ";
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "assets", array()), "stylesheets", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["stylesheet"]) {
            // line 45
            echo "                <link rel=\"stylesheet\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($context["stylesheet"]), "html", null, true);
            echo "\" type=\"text/css\" media=\"all\"/>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['stylesheet'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 47
        echo "        ";
    }

    // line 50
    public function block_sonata_page_javascripts($context, array $blocks = array())
    {
        // line 51
        echo "        ";
        $this->displayBlock('page_javascripts', $context, $blocks);
        // line 61
        echo "    ";
    }

    // line 51
    public function block_page_javascripts($context, array $blocks = array())
    {
        echo " ";
        // line 52
        echo "            <!-- Le HTML5 shim, for IE6-8 support of HTML elements -->
            <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
            <![endif]-->

            ";
        // line 57
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["sonata_page"]) ? $context["sonata_page"] : $this->getContext($context, "sonata_page")), "assets", array()), "javascripts", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 58
            echo "                <script src=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl($context["js"]), "html", null, true);
            echo "\" type=\"text/javascript\"></script>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 60
        echo "        ";
    }

    // line 65
    public function block_sonata_page_body_tag($context, array $blocks = array())
    {
        // line 66
        echo "<body>
";
    }

    // line 638
    public function block_sonata_page_container($context, array $blocks = array())
    {
        // line 639
        echo "<!--=== Content Part ===-->

<div class=\"container content\">
";
        // line 642
        $this->displayBlock('page_content', $context, $blocks);
        // line 876
        echo "<!-- Our Clients -->
";
        // line 878
        echo "    ";
        // line 879
        echo "    ";
        // line 880
        echo "        ";
        // line 881
        echo "            ";
        // line 882
        echo "                ";
        // line 883
        echo "                ";
        // line 884
        echo "            ";
        // line 885
        echo "        ";
        // line 886
        echo "        ";
        // line 887
        echo "            ";
        // line 888
        echo "                ";
        // line 889
        echo "                ";
        // line 890
        echo "            ";
        // line 891
        echo "        ";
        // line 892
        echo "        ";
        // line 893
        echo "            ";
        // line 894
        echo "                ";
        // line 895
        echo "                ";
        // line 896
        echo "            ";
        // line 897
        echo "        ";
        // line 898
        echo "        ";
        // line 899
        echo "            ";
        // line 900
        echo "                ";
        // line 901
        echo "                ";
        // line 902
        echo "            ";
        // line 903
        echo "        ";
        // line 904
        echo "        ";
        // line 905
        echo "            ";
        // line 906
        echo "                ";
        // line 907
        echo "                ";
        // line 908
        echo "            ";
        // line 909
        echo "        ";
        // line 910
        echo "        ";
        // line 911
        echo "            ";
        // line 912
        echo "                ";
        // line 913
        echo "                ";
        // line 914
        echo "            ";
        // line 915
        echo "        ";
        // line 916
        echo "        ";
        // line 917
        echo "            ";
        // line 918
        echo "                ";
        // line 919
        echo "                ";
        // line 920
        echo "            ";
        // line 921
        echo "        ";
        // line 922
        echo "        ";
        // line 923
        echo "            ";
        // line 924
        echo "                ";
        // line 925
        echo "                ";
        // line 926
        echo "            ";
        // line 927
        echo "        ";
        // line 928
        echo "        ";
        // line 929
        echo "            ";
        // line 930
        echo "                ";
        // line 931
        echo "                ";
        // line 932
        echo "            ";
        // line 933
        echo "        ";
        // line 934
        echo "        ";
        // line 935
        echo "            ";
        // line 936
        echo "                ";
        // line 937
        echo "                ";
        // line 938
        echo "            ";
        // line 939
        echo "        ";
        // line 940
        echo "        ";
        // line 941
        echo "            ";
        // line 942
        echo "                ";
        // line 943
        echo "                ";
        // line 944
        echo "            ";
        // line 945
        echo "        ";
        // line 946
        echo "        ";
        // line 947
        echo "            ";
        // line 948
        echo "                ";
        // line 949
        echo "                ";
        // line 950
        echo "            ";
        // line 951
        echo "        ";
        // line 952
        echo "        ";
        // line 953
        echo "            ";
        // line 954
        echo "                ";
        // line 955
        echo "                ";
        // line 956
        echo "            ";
        // line 957
        echo "        ";
        // line 958
        echo "        ";
        // line 959
        echo "            ";
        // line 960
        echo "                ";
        // line 961
        echo "                ";
        // line 962
        echo "            ";
        // line 963
        echo "        ";
        // line 964
        echo "        ";
        // line 965
        echo "            ";
        // line 966
        echo "                ";
        // line 967
        echo "                ";
        // line 968
        echo "            ";
        // line 969
        echo "        ";
        // line 970
        echo "        ";
        // line 971
        echo "            ";
        // line 972
        echo "                ";
        // line 973
        echo "                ";
        // line 974
        echo "            ";
        // line 975
        echo "        ";
        // line 976
        echo "        ";
        // line 977
        echo "            ";
        // line 978
        echo "                ";
        // line 979
        echo "                ";
        // line 980
        echo "            ";
        // line 981
        echo "        ";
        // line 982
        echo "    ";
        // line 984
        echo "<!-- End Our Clients -->
</div><!--/container-->
<!--=== End Content Part ===-->
";
    }

    // line 642
    public function block_page_content($context, array $blocks = array())
    {
        // line 643
        echo "    ";
        if (array_key_exists("content", $context)) {
            // line 644
            echo "        ";
            echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
            echo "
    ";
        } else {
            // line 646
            echo "        ";
            $context["content"] = $this->renderBlock("content", $context, $blocks);
            // line 647
            echo "        ";
            if ((twig_length_filter($this->env, (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"))) > 0)) {
                // line 648
                echo "            ";
                echo (isset($context["content"]) ? $context["content"] : $this->getContext($context, "content"));
                echo "
        ";
            } elseif (array_key_exists("page", $context)) {
                // line 650
                echo "            ";
                echo $this->env->getExtension('sonata_page')->renderContainer("content", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
                echo "
        ";
            }
            // line 652
            echo "    ";
        }
        // line 653
        echo "    ";
        if (array_key_exists("page", $context)) {
            // line 654
            echo "
        <div class=\"row\">


        <div class=\"col-md-3\">
            ";
            // line 659
            echo $this->env->getExtension('sonata_page')->renderContainer("left_col", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
            echo "
            <!-- About Us -->
            <div class=\"margin-bottom-30\">
                ";
            // line 663
            echo "                ";
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
            echo "            </div>

            ";
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
            echo "
            <!-- Contact Us -->
            ";
            // line 697
            echo "                ";
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
            echo "            ";
            // line 706
            echo "        </div><!--/col-md-3-->

        <div class=\"col-md-9\">
            ";
            // line 709
            echo $this->env->getExtension('sonata_page')->renderContainer("right_col", (isset($context["page"]) ? $context["page"] : $this->getContext($context, "page")));
            echo "
            <!-- Our Services -->
            ";
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
            echo "
            <!-- Blockquotes -->
            ";
            // line 738
            echo "            ";
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
            echo "            <!-- End Blockquotes -->

            <!-- Recent Works -->
            ";
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
            echo "
            ";
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
            echo "            <!-- End Recent Works -->
        </div><!--/col-md-9-->
        </div><!--/row-->
    ";
        }
        // line 874
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
        return array (  1962 => 874,  1956 => 870,  1954 => 869,  1952 => 868,  1950 => 867,  1948 => 866,  1946 => 865,  1944 => 864,  1942 => 863,  1940 => 862,  1938 => 861,  1936 => 860,  1934 => 859,  1932 => 858,  1930 => 857,  1928 => 856,  1926 => 855,  1924 => 854,  1922 => 853,  1920 => 852,  1918 => 851,  1916 => 850,  1914 => 849,  1912 => 848,  1910 => 847,  1908 => 846,  1906 => 845,  1904 => 844,  1902 => 843,  1900 => 842,  1898 => 841,  1896 => 840,  1894 => 839,  1892 => 838,  1890 => 837,  1888 => 836,  1886 => 835,  1884 => 834,  1882 => 833,  1880 => 832,  1878 => 831,  1876 => 830,  1874 => 829,  1872 => 828,  1870 => 827,  1868 => 826,  1866 => 825,  1864 => 824,  1862 => 823,  1860 => 822,  1858 => 821,  1856 => 820,  1854 => 819,  1852 => 818,  1850 => 817,  1848 => 816,  1846 => 815,  1844 => 814,  1842 => 813,  1840 => 812,  1838 => 811,  1836 => 810,  1834 => 809,  1832 => 808,  1830 => 807,  1828 => 806,  1826 => 805,  1824 => 804,  1822 => 803,  1820 => 802,  1818 => 801,  1816 => 800,  1814 => 799,  1812 => 798,  1810 => 797,  1808 => 796,  1806 => 795,  1804 => 794,  1802 => 793,  1800 => 792,  1798 => 791,  1796 => 790,  1794 => 789,  1792 => 788,  1790 => 787,  1788 => 786,  1786 => 785,  1784 => 784,  1782 => 783,  1780 => 782,  1778 => 781,  1776 => 780,  1774 => 779,  1772 => 778,  1770 => 777,  1768 => 776,  1766 => 775,  1764 => 774,  1762 => 773,  1760 => 772,  1758 => 771,  1756 => 770,  1754 => 769,  1752 => 768,  1750 => 767,  1748 => 766,  1746 => 765,  1744 => 764,  1742 => 763,  1740 => 762,  1738 => 761,  1736 => 760,  1734 => 759,  1732 => 758,  1729 => 756,  1727 => 755,  1725 => 754,  1723 => 753,  1721 => 752,  1719 => 751,  1717 => 750,  1715 => 749,  1713 => 748,  1708 => 744,  1706 => 743,  1704 => 742,  1702 => 741,  1700 => 740,  1698 => 739,  1696 => 738,  1692 => 735,  1690 => 734,  1688 => 733,  1686 => 732,  1684 => 731,  1682 => 730,  1680 => 729,  1678 => 728,  1676 => 727,  1674 => 726,  1672 => 725,  1670 => 724,  1668 => 723,  1666 => 722,  1664 => 721,  1662 => 720,  1660 => 719,  1658 => 718,  1656 => 717,  1654 => 716,  1652 => 715,  1650 => 714,  1648 => 713,  1646 => 712,  1641 => 709,  1636 => 706,  1634 => 705,  1632 => 704,  1630 => 703,  1628 => 702,  1626 => 701,  1624 => 700,  1622 => 699,  1620 => 698,  1618 => 697,  1614 => 694,  1612 => 693,  1610 => 692,  1608 => 691,  1606 => 690,  1604 => 689,  1602 => 688,  1600 => 687,  1598 => 686,  1596 => 685,  1594 => 684,  1592 => 683,  1590 => 682,  1588 => 681,  1586 => 680,  1584 => 679,  1582 => 678,  1580 => 677,  1578 => 676,  1576 => 675,  1574 => 674,  1572 => 673,  1568 => 670,  1566 => 669,  1564 => 668,  1562 => 667,  1560 => 666,  1558 => 665,  1556 => 664,  1554 => 663,  1548 => 659,  1541 => 654,  1538 => 653,  1535 => 652,  1529 => 650,  1523 => 648,  1520 => 647,  1517 => 646,  1511 => 644,  1508 => 643,  1505 => 642,  1498 => 984,  1496 => 982,  1494 => 981,  1492 => 980,  1490 => 979,  1488 => 978,  1486 => 977,  1484 => 976,  1482 => 975,  1480 => 974,  1478 => 973,  1476 => 972,  1474 => 971,  1472 => 970,  1470 => 969,  1468 => 968,  1466 => 967,  1464 => 966,  1462 => 965,  1460 => 964,  1458 => 963,  1456 => 962,  1454 => 961,  1452 => 960,  1450 => 959,  1448 => 958,  1446 => 957,  1444 => 956,  1442 => 955,  1440 => 954,  1438 => 953,  1436 => 952,  1434 => 951,  1432 => 950,  1430 => 949,  1428 => 948,  1426 => 947,  1424 => 946,  1422 => 945,  1420 => 944,  1418 => 943,  1416 => 942,  1414 => 941,  1412 => 940,  1410 => 939,  1408 => 938,  1406 => 937,  1404 => 936,  1402 => 935,  1400 => 934,  1398 => 933,  1396 => 932,  1394 => 931,  1392 => 930,  1390 => 929,  1388 => 928,  1386 => 927,  1384 => 926,  1382 => 925,  1380 => 924,  1378 => 923,  1376 => 922,  1374 => 921,  1372 => 920,  1370 => 919,  1368 => 918,  1366 => 917,  1364 => 916,  1362 => 915,  1360 => 914,  1358 => 913,  1356 => 912,  1354 => 911,  1352 => 910,  1350 => 909,  1348 => 908,  1346 => 907,  1344 => 906,  1342 => 905,  1340 => 904,  1338 => 903,  1336 => 902,  1334 => 901,  1332 => 900,  1330 => 899,  1328 => 898,  1326 => 897,  1324 => 896,  1322 => 895,  1320 => 894,  1318 => 893,  1316 => 892,  1314 => 891,  1312 => 890,  1310 => 889,  1308 => 888,  1306 => 887,  1304 => 886,  1302 => 885,  1300 => 884,  1298 => 883,  1296 => 882,  1294 => 881,  1292 => 880,  1290 => 879,  1288 => 878,  1285 => 876,  1283 => 642,  1278 => 639,  1275 => 638,  1270 => 66,  1267 => 65,  1263 => 60,  1254 => 58,  1250 => 57,  1243 => 52,  1239 => 51,  1235 => 61,  1232 => 51,  1229 => 50,  1225 => 47,  1216 => 45,  1211 => 44,  1207 => 43,  1203 => 48,  1200 => 43,  1197 => 42,  1192 => 62,  1190 => 50,  1187 => 49,  1185 => 42,  1152 => 12,  1148 => 11,  1142 => 9,  1139 => 8,  1131 => 2,  1128 => 1,  1020 => 1035,  1018 => 1034,  1016 => 1033,  1014 => 1032,  1012 => 1031,  1010 => 1030,  1008 => 1029,  1006 => 1028,  1004 => 1027,  1002 => 1026,  997 => 1022,  995 => 1021,  993 => 1020,  991 => 1019,  989 => 1018,  987 => 1017,  985 => 1016,  983 => 1015,  981 => 1014,  979 => 1013,  977 => 1012,  975 => 1011,  973 => 1010,  971 => 1009,  969 => 1008,  967 => 1007,  965 => 1006,  963 => 1005,  961 => 1004,  956 => 1000,  954 => 999,  952 => 998,  950 => 997,  948 => 996,  939 => 988,  937 => 638,  932 => 635,  930 => 634,  928 => 633,  926 => 632,  924 => 631,  922 => 630,  920 => 629,  918 => 628,  907 => 618,  905 => 614,  903 => 613,  901 => 612,  899 => 611,  897 => 610,  895 => 609,  893 => 608,  891 => 607,  889 => 606,  886 => 603,  884 => 600,  882 => 599,  880 => 598,  878 => 597,  876 => 596,  874 => 595,  872 => 594,  870 => 593,  868 => 592,  866 => 591,  863 => 588,  861 => 585,  859 => 584,  857 => 583,  855 => 582,  853 => 581,  851 => 580,  849 => 579,  847 => 578,  845 => 577,  843 => 576,  841 => 575,  839 => 574,  837 => 573,  835 => 572,  833 => 571,  830 => 568,  828 => 565,  826 => 564,  824 => 563,  822 => 562,  820 => 561,  818 => 560,  816 => 559,  814 => 558,  812 => 557,  810 => 556,  808 => 555,  805 => 553,  802 => 551,  799 => 549,  797 => 548,  795 => 547,  793 => 546,  791 => 545,  788 => 543,  786 => 542,  784 => 541,  782 => 540,  780 => 539,  778 => 538,  776 => 537,  774 => 536,  772 => 535,  770 => 534,  768 => 533,  766 => 532,  764 => 531,  762 => 530,  760 => 529,  758 => 528,  756 => 527,  754 => 526,  752 => 525,  750 => 524,  748 => 523,  746 => 522,  744 => 521,  741 => 519,  738 => 517,  735 => 515,  732 => 513,  730 => 512,  728 => 511,  726 => 510,  723 => 508,  721 => 507,  719 => 506,  717 => 505,  715 => 504,  713 => 503,  710 => 501,  708 => 500,  706 => 499,  704 => 498,  702 => 497,  700 => 496,  698 => 495,  696 => 494,  693 => 492,  691 => 491,  689 => 490,  687 => 489,  685 => 488,  683 => 487,  681 => 486,  679 => 485,  677 => 484,  675 => 483,  673 => 482,  671 => 481,  668 => 478,  666 => 475,  664 => 474,  662 => 473,  660 => 472,  658 => 471,  656 => 470,  654 => 469,  652 => 468,  650 => 467,  648 => 466,  646 => 465,  644 => 464,  641 => 462,  639 => 461,  637 => 460,  635 => 459,  633 => 458,  631 => 457,  629 => 456,  627 => 455,  625 => 454,  623 => 453,  620 => 451,  618 => 450,  616 => 449,  614 => 448,  612 => 447,  610 => 446,  608 => 445,  606 => 444,  604 => 443,  602 => 442,  600 => 441,  598 => 440,  596 => 439,  594 => 438,  592 => 437,  590 => 436,  588 => 435,  585 => 433,  583 => 432,  581 => 431,  579 => 430,  577 => 429,  575 => 428,  573 => 427,  571 => 426,  569 => 425,  567 => 424,  565 => 423,  563 => 422,  560 => 420,  558 => 419,  556 => 418,  554 => 417,  552 => 416,  549 => 414,  546 => 412,  543 => 410,  541 => 409,  539 => 408,  537 => 407,  534 => 405,  532 => 404,  530 => 403,  528 => 402,  526 => 401,  524 => 400,  522 => 399,  520 => 398,  518 => 397,  516 => 396,  514 => 395,  511 => 393,  509 => 392,  507 => 391,  505 => 390,  503 => 389,  501 => 388,  499 => 387,  497 => 386,  495 => 385,  493 => 384,  490 => 382,  488 => 381,  486 => 380,  484 => 379,  482 => 378,  480 => 377,  478 => 376,  476 => 375,  474 => 374,  472 => 373,  470 => 372,  468 => 371,  465 => 368,  463 => 362,  461 => 361,  459 => 360,  457 => 359,  455 => 358,  453 => 357,  451 => 356,  449 => 355,  447 => 354,  445 => 353,  443 => 352,  441 => 351,  439 => 350,  437 => 349,  435 => 348,  433 => 347,  431 => 346,  429 => 345,  427 => 344,  425 => 343,  423 => 342,  421 => 341,  418 => 338,  415 => 334,  412 => 330,  410 => 327,  408 => 326,  406 => 325,  404 => 324,  402 => 323,  400 => 322,  397 => 319,  394 => 315,  392 => 312,  390 => 311,  388 => 310,  386 => 309,  384 => 308,  382 => 307,  380 => 306,  377 => 303,  375 => 300,  373 => 299,  371 => 298,  369 => 297,  367 => 296,  365 => 295,  363 => 294,  360 => 291,  357 => 287,  355 => 284,  353 => 283,  351 => 282,  349 => 281,  347 => 280,  344 => 277,  341 => 273,  339 => 270,  337 => 269,  335 => 268,  333 => 267,  331 => 266,  328 => 263,  325 => 259,  323 => 256,  321 => 255,  319 => 254,  317 => 253,  315 => 252,  313 => 251,  311 => 250,  309 => 249,  306 => 246,  303 => 242,  301 => 239,  299 => 238,  297 => 237,  295 => 236,  293 => 235,  290 => 233,  288 => 231,  286 => 230,  284 => 229,  282 => 228,  280 => 227,  278 => 226,  276 => 225,  274 => 224,  272 => 223,  270 => 222,  268 => 221,  266 => 220,  264 => 219,  262 => 218,  260 => 217,  258 => 216,  256 => 215,  254 => 214,  252 => 213,  250 => 212,  248 => 211,  246 => 210,  244 => 209,  242 => 208,  240 => 207,  238 => 206,  236 => 205,  234 => 204,  232 => 203,  230 => 202,  228 => 201,  226 => 200,  224 => 199,  222 => 198,  220 => 197,  218 => 196,  216 => 195,  214 => 194,  212 => 193,  210 => 192,  208 => 191,  206 => 190,  204 => 189,  202 => 188,  200 => 187,  198 => 186,  196 => 185,  194 => 184,  191 => 181,  189 => 178,  187 => 177,  185 => 176,  183 => 175,  181 => 174,  179 => 173,  177 => 172,  174 => 169,  172 => 166,  170 => 165,  168 => 164,  166 => 163,  164 => 162,  162 => 161,  160 => 160,  158 => 159,  156 => 158,  154 => 157,  151 => 154,  149 => 151,  147 => 150,  145 => 149,  143 => 148,  141 => 147,  139 => 146,  137 => 145,  135 => 140,  104 => 108,  101 => 106,  96 => 102,  86 => 100,  79 => 98,  70 => 95,  68 => 94,  40 => 68,  38 => 65,  35 => 64,  33 => 8,  30 => 7,  28 => 1,);
    }
}

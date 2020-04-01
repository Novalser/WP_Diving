<?php get_header(); ?>


<!--========== SLIDER ==========-->
<div class="promo-block">
    <div class="container">

        <?php foreach (getMainText() as $post) : ?>
            <div class="margin-b-40">
                <h1 class="promo-block-title"> <?php echo $post->post_title; ?></h1>
                <p class="promo-block-text"><?php echo $post->post_content; ?></p>
            </div>
            <a class="js_popup-youtube btn-theme btn-theme-md btn-white-bg text-uppercase" rel="nofollow" href="http://daiving/wp-content/uploads/2020/04/video.webm" title="Intro Video"><i class="btn-icon icon-control-play"></i> Watch Intro Video


            </a>
        <?php endforeach; ?>
    </div>
</div>
<!--========== SLIDER ==========-->

<!--========== PAGE LAYOUT ==========-->
<!-- Products -->
<div id="products">
    <div class="container content-lg">
        <div class="row text-center margin-b-40">
            <div class="col-sm-6 col-sm-offset-3">
                <h2> Diving, Snorkelling and Boat Trips</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipiscing elit sed tempor incididunt ut laboret dolore magna aliqua enim minim veniam exercitation</p>
            </div>
        </div>
        <!--// end row -->

        <div class="row">
            <!-- Latest Products -->
            <?php foreach (get_pages() as $page) {

                $a_count += 1;

                if ($a_count != 1) { ?>

                    <div class="col-sm-4 sm-margin-b-50">
                        <div class="margin-b-20">
                            <img class="img-responsive wow fadeIn" src="<?php echo get_template_directory_uri(); ?>/img/thai/04.jpg" alt="Latest Products Image" data-wow-duration=".3" data-wow-delay=".1s">
                        </div>

                        <h4><a href="#"><?php echo $page->post_title; ?></a> <span class="text-uppercase margin-l-20">Management</span></h4>
                        <p><?php echo $page->post_content; ?></p>
                        <a class="link" href="<?php echo $page->guid; ?>">Read More</a>

                    </div>

                <?php } ?>
            <?php } ?>



            <!--// end row -->
        </div>

        <div class="container-full-width">
            <div class="row row-space-2">
                <div class="col-sm-6 sm-margin-b-4">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/thai/07.jpg" alt="Image">
                </div>
                <div class="col-sm-6">
                    <img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/thai/08.jpg" alt="Image">
                </div>
            </div>
            <!--// end row -->
        </div>
    </div>
    <!-- End Products -->

    <!-- Service -->
    <div id="service">
        <div class="bg-color-sky-light" data-auto-height="true">
            <div class="content-lg container">
                <div class="row row-space-2 margin-b-4">
                    <div class="col-sm-4 sm-margin-b-4">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-chemistry"></i>
                            </div>
                            <div class="service-info">
                                <h3>Art Of Coding</h3>
                                <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-4">
                        <div class="service bg-color-base wow fadeInDown" data-height="height" data-wow-duration=".3" data-wow-delay=".1s">
                            <div class="service-element">
                                <i class="service-icon color-white icon-screen-tablet"></i>
                            </div>
                            <div class="service-info">
                                <h3 class="color-white">Responsive Design</h3>
                                <p class="color-white margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-badge"></i>
                            </div>
                            <div class="service-info">
                                <h3>Feature Reach</h3>
                                <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                </div>
                <!--// end row -->

                <div class="row row-space-2">
                    <div class="col-sm-4 sm-margin-b-4">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-notebook"></i>
                            </div>
                            <div class="service-info">
                                <h3>Useful Documentation</h3>
                                <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                    <div class="col-sm-4 sm-margin-b-4">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-speedometer"></i>
                            </div>
                            <div class="service-info">
                                <h3>Fast Delivery</h3>
                                <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="service" data-height="height">
                            <div class="service-element">
                                <i class="service-icon icon-badge"></i>
                            </div>
                            <div class="service-info">
                                <h3>Free Plugins</h3>
                                <p class="margin-b-5">Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                            </div>
                            <a href="#" class="content-wrapper-link"></a>
                        </div>
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
    </div>
    <!-- End Service -->

    <!-- Promo Banner -->
    <div class="promo-banner">
        <div class="container-sm content-lg">
            <h2 class="promo-banner-title">Displaying the Result</h2>
            <p class="promo-banner-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo.</p>
        </div>
    </div>
    <!-- End Promo Banner -->

    <!-- Work -->
    <div id="work">
        <div class="content-md container">
            <!-- Masonry Grid -->
            <div class="masonry-grid row row-space-2">
                <div class="masonry-grid-sizer col-xs-6 col-sm-6 col-md-1"></div>
                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-8 margin-b-4">
                    <!-- Work -->
                    <div class="work work-popup-trigger">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/thai/01.jpg" alt="Portfolio Image">
                        </div>
                        <div class="work-popup-overlay">
                            <div class="work-popup-content">
                                <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                <div class="margin-b-30">
                                    <h3 class="margin-b-5">Art Of Coding</h3>
                                    <span>Clean &amp; Minimalistic Design</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                            <ul class="list-inline work-popup-tag">
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p class="margin-b-5"><strong>Project Leader:</strong> John Doe</p>
                                            <p class="margin-b-5"><strong>Designer:</strong> Alisa Keys</p>
                                            <p class="margin-b-5"><strong>Developer:</strong> Mark Doe</p>
                                            <p class="margin-b-5"><strong>Customer:</strong> Keenthemes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Work -->
                </div>
                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 margin-b-4">
                    <!-- Work -->
                    <div class="work work-popup-trigger">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/thai/02.jpg" alt="Portfolio Image">
                        </div>
                        <div class="work-popup-overlay">
                            <div class="work-popup-content">
                                <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                <div class="margin-b-30">
                                    <h3 class="margin-b-5">Art Of Coding</h3>
                                    <span>Clean &amp; Minimalistic Design</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                            <ul class="list-inline work-popup-tag">
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p class="margin-b-5"><strong>Project Leader:</strong> John Doe</p>
                                            <p class="margin-b-5"><strong>Designer:</strong> Alisa Keys</p>
                                            <p class="margin-b-5"><strong>Developer:</strong> Mark Doe</p>
                                            <p class="margin-b-5"><strong>Customer:</strong> Keenthemes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Work -->
                </div>
                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-4">
                    <!-- Work -->
                    <div class="work work-popup-trigger">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/thai/05.jpg" alt="Portfolio Image">
                        </div>
                        <div class="work-popup-overlay">
                            <div class="work-popup-content">
                                <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                <div class="margin-b-30">
                                    <h3 class="margin-b-5">Art Of Coding</h3>
                                    <span>Clean &amp; Minimalistic Design</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                            <ul class="list-inline work-popup-tag">
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p class="margin-b-5"><strong>Project Leader:</strong> John Doe</p>
                                            <p class="margin-b-5"><strong>Designer:</strong> Alisa Keys</p>
                                            <p class="margin-b-5"><strong>Developer:</strong> Mark Doe</p>
                                            <p class="margin-b-5"><strong>Customer:</strong> Keenthemes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Work -->
                </div>
                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4 md-margin-b-4">
                    <!-- Work -->
                    <div class="work work-popup-trigger">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/thai/03.jpg" alt="Portfolio Image">
                        </div>
                        <div class="work-popup-overlay">
                            <div class="work-popup-content">
                                <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                <div class="margin-b-30">
                                    <h3 class="margin-b-5">Art Of Coding</h3>
                                    <span>Clean &amp; Minimalistic Design</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                            <ul class="list-inline work-popup-tag">
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p class="margin-b-5"><strong>Project Leader:</strong> John Doe</p>
                                            <p class="margin-b-5"><strong>Designer:</strong> Alisa Keys</p>
                                            <p class="margin-b-5"><strong>Developer:</strong> Mark Doe</p>
                                            <p class="margin-b-5"><strong>Customer:</strong> Keenthemes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Work -->
                </div>
                <div class="masonry-grid-item col-xs-12 col-sm-6 col-md-4">
                    <!-- Work -->
                    <div class="work work-popup-trigger">
                        <div class="work-overlay">
                            <img class="full-width img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/thai/04.jpg" alt="Portfolio Image">
                        </div>
                        <div class="work-popup-overlay">
                            <div class="work-popup-content">
                                <a href="javascript:void(0);" class="work-popup-close">Hide</a>
                                <div class="margin-b-30">
                                    <h3 class="margin-b-5">Art Of Coding</h3>
                                    <span>Clean &amp; Minimalistic Design</span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-8 work-popup-content-divider sm-margin-b-20">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud.</p>
                                            <ul class="list-inline work-popup-tag">
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Design,</a></li>
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Coding,</a></li>
                                                <li class="work-popup-tag-item"><a class="work-popup-tag-link" href="#">Portfolio</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-sm-4">
                                        <div class="margin-t-10 sm-margin-t-0">
                                            <p class="margin-b-5"><strong>Project Leader:</strong> John Doe</p>
                                            <p class="margin-b-5"><strong>Designer:</strong> Alisa Keys</p>
                                            <p class="margin-b-5"><strong>Developer:</strong> Mark Doe</p>
                                            <p class="margin-b-5"><strong>Customer:</strong> Keenthemes</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End Work -->
                </div>
            </div>
            <!-- End Masonry Grid -->
        </div>
    </div>
    <!-- End Work -->

    <!-- Pricing -->
    <div id="pricing">
        <div class="bg-color-sky-light">
            <div class="content-lg container">
                <div class="row row-space-2">
                    <div class="col-sm-4 sm-margin-b-4">



                        <h2 class="promo-banner-title1"></h2>





                        <div class="pricing">
                            <div class="margin-b-30">
                                <i class="pricing-icon icon-chemistry"></i>
                                <h3>Starter Kit <span> - $</span> 49</h3>
                                <p>Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                            </div>
                            <ul class="list-unstyled pricing-list margin-b-50">
                                <li class="pricing-list-item">Basic Features</li>
                                <li class="pricing-list-item">Up to 5 products</li>
                                <li class="pricing-list-item">50 Users Panels</li>
                            </ul>
                            <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                        </div>
                        <!-- End Pricing -->
                    </div>
                    <div class="col-sm-4 sm-margin-b-4">
                        <!-- Pricing -->
                        <div class="pricing pricing-active">
                            <div class="margin-b-30">
                                <i class="pricing-icon icon-badge"></i>
                                <h3>Professional <span> - $</span> 149</h3>
                                <p>Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                            </div>
                            <ul class="list-unstyled pricing-list margin-b-50">
                                <li class="pricing-list-item">Basic Features</li>
                                <li class="pricing-list-item">Up to 100 products</li>
                                <li class="pricing-list-item">100 Users Panels</li>
                            </ul>
                            <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                        </div>
                        <!-- End Pricing -->
                    </div>
                    <div class="col-sm-4">
                        <!-- Pricing -->
                        <div class="pricing">
                            <div class="margin-b-30">
                                <i class="pricing-icon icon-shield"></i>
                                <h3>Advanced <span> - $</span> 249</h3>
                                <p>Lorem ipsum dolor amet consectetur ut consequat siad esqudiat dolor</p>
                            </div>
                            <ul class="list-unstyled pricing-list margin-b-50">
                                <li class="pricing-list-item">Extended Features</li>
                                <li class="pricing-list-item">Unlimited products</li>
                                <li class="pricing-list-item">Unlimited Users Panels</li>
                            </ul>
                            <a href="pricing.html" class="btn-theme btn-theme-sm btn-default-bg text-uppercase">Choose</a>
                        </div>
                        <!-- End Pricing -->
                    </div>
                </div>
                <!--// end row -->
            </div>
        </div>
    </div>
    <!-- End Pricing -->

    <!-- Testimonials -->
    <div class="content-md container">




        <div class="row">
            <div class="col-sm-9">
                <h2>Reviews</h2>

                <!-- Swiper Testimonials -->
                <div class="swiper-slider swiper-testimonials">
                    <!-- Swiper Wrapper -->

                    <div class="swiper-wrapper">
                        <?php foreach (getReview() as $post) : ?>
                            <div class="swiper-slide">
                                <blockquote class="blockquote">
                                    <div class="margin-b-20">
                                        <?php echo $post->post_title; ?>
                                    </div>
                                    <div class="margin-b-20">
                                        <?php echo $post->post_content; ?>
                                    </div>
                                    <p><span class="fweight-700 color-link">Joh Milner</span>, Metronic Customer</p>
                                </blockquote>
                            </div>

                            <!-- End Swiper Wrapper -->
                        <?php endforeach; ?>
                        <!-- Pagination -->
                        <div class="swiper-testimonials-pagination"></div>


                    </div>
                    <!-- End Swiper Testimonials -->
                </div>
            </div>
            <!--// end row -->

        </div>
        <!-- End Testimonials -->

        <!-- Contact -->
        <div id="contact">
            <!-- Google Map -->

            <!-- End Google Map -->
        </div>
        <!-- End Contact -->
        <!--========== END PAGE LAYOUT ==========-->




        <?php get_footer(); ?>





        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->






        <!-- PAGE LEVEL PLUGINS -->



        <!-- PAGE LEVEL SCRIPTS -->




        </body>
        <!-- END BODY -->

        </html>
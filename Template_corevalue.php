
<!--    核心價值-->
<div class="container bg-1">

    <div class="row" style="padding: 70px;">
        <div class="col-md-7">
            <!-- TT-HEDING -->
            <div class="tt-heding type-2">
                <h4 class="tt-heding-title c-h4 txt-uppercase"><span>核心價值</span></h4>
                <div class="tt-heding-desc">Short About Us</div>
            </div>


            <!-- TT-ACCORDION -->
            <div class="tt-accordion type-1">
                <?php
                $latest_cat_post = new WP_Query(array('category_name' => 'value', 'posts_per_page' => 5));
                if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                        ?>
                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                        <div class="tt-accordion-panel">
                            <div class="tt-accordion-title">
                                <?php the_title(); ?><div class="tt-accordion-icon"></div>
                            </div>
                            <div class="tt-accordion-body">
                                <div class="tt-commercial">
                                    <div class="row">
                                        <div class="col-sm-4">
                                            <a class="tt-commercial-img custom-hover" href="#">
                                                <img class="img-responsive" src="<?php echo $image[0] ?>" height="166" width="200" alt="">
                                            </a>
                                        </div>
                                        <div class="col-sm-8 aboutguanyu" style="position: relative;top: -25px;">
                                            <div class="simple-text size-3 color-3">
                                                <p><?php the_content(); ?></p>
                                            </div>
                                        </div>
                                    </div>                                        
                                </div>
                            </div>
                        </div>
                        <?php
                    endwhile;
                endif;
                ?>

            </div>

        </div>
        <div class="col-md-5">
            <!-- TT-HEDING -->
            <div class="tt-heding type-2">
                <h4 class="tt-heding-title c-h4 txt-uppercase"><span>What controller says</span></h4>
                <div class="tt-heding-desc">Some Golden Words</div>
            </div>
            <div class="empty-space marg-lg-b40 marg-sm-b30"></div>  

            <!-- TT-TESTIMONAL-SLIDER -->
            <div class="tt-testimonal-slider slider-wth-thumbs">
                <div class="swiper-container thumbnails-preview" data-autoplay="0" data-loop="1" data-speed="500" data-center="0" data-slides-per-view="1">
                    <div class="swiper-wrapper clearfix">
                        <div class="swiper-slide active" data-val="0">
                            <div class="tt-testimonal-slider-wrapper">
                                <div class="simple-text size-4">
                                    <p>"Education is a admirable thing, but it is well to remember from time to time that nothing worth knowing can be taught." </p>       
                                </div>
                                <div class="tt-testimonal-slider-name">- Francis LEE</div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-val="1">
                            <div class="tt-testimonal-slider-wrapper">
                                <div class="simple-text size-4">
                                    <p>"Every successful person has a start. Be brave to start, and keep trying to find it

                                        The way to work."</p>       
                                </div>
                                <div class="tt-testimonal-slider-name">- Sammi Cheung</div>
                            </div>                                    
                        </div>
                        <!--                                <div class="swiper-slide" data-val="2">
                                                            <div class="tt-testimonal-slider-wrapper">
                                                                <div class="simple-text size-4">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis no strud exercitation ullamco laboris nisi ut aliquip ex ea commodo.  incididunt ut labore</p>       
                                                                </div>
                                                                <div class="tt-testimonal-slider-name">- Michale John</div>
                                                            </div>                                    
                                                        </div>
                                                        <div class="swiper-slide" data-val="3">
                                                            <div class="tt-testimonal-slider-wrapper">
                                                                <div class="simple-text size-4">
                                                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis no strud exercitation ullamco laboris nisi ut aliquip ex ea commodo.  incididunt ut labore</p>       
                                                                </div>
                                                                <div class="tt-testimonal-slider-name">- Michale John</div>
                                                            </div>                                    
                                                        </div>-->
                    </div>
                    <div class="pagination"></div>
                </div>
                <div class="swiper-container thumbnails" data-autoplay="0" 
                     data-loop="0" data-speed="500" data-center="1" 
                     data-slides-per-view="responsive"  data-xs-slides="1" 
                     data-sm-slides="3" data-md-slides="3" data-lg-slides="3" 
                     data-add-slides="3">
                    <div class="swiper-wrapper clearfix">
                        <div class="swiper-slide current active" data-val="0">
                            <div class="tt-testimonal-slider-nav">
                                <div class="tt-testimonal-slider-user">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/testimonal/li.png" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide" data-val="1">
                            <div class="tt-testimonal-slider-nav">
                                <div class="tt-testimonal-slider-user">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/testimonal/zhang.jpg" alt="">
                                </div>
                            </div>                                                               
                        </div>
                        <div class="swiper-slide" data-val="2" style="display: none">
                            <div class="tt-testimonal-slider-nav">
                                <div class="tt-testimonal-slider-user">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/testimonal/li.png" alt="">
                                </div>
                            </div>                                                               
                        </div>
                        <div class="swiper-slide" data-val="3" style="display: none">
                            <div class="tt-testimonal-slider-nav">
                                <div class="tt-testimonal-slider-user">
                                    <img src="<?php bloginfo('template_directory'); ?>/assets/img/testimonal/zhang.jpg" alt="">
                                </div>
                            </div>                                                               
                        </div>                                                                  
                    </div>
                    <div class="pagination type-1 visible-xs-block"></div>
                </div>
            </div>                    
        </div>
    </div>

</div>
<!--    核心價值結束-->
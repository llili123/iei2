<?php
/*
 * Template Name:zhengce
 */
?>
<?php
/*
 * Template Name:history
 */
?>
<?php get_header(); ?>
<div class="tt-search-popup">
    <div class="tt-search-popup-vertical">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 col-sm-12 col-sm-offset-0 col-xs-12 col-xs-offset-0">
                    <form>
                        <h3 class="tt-search-popup-title">Search</h3>
                        <div class="tt-search-popup-field">
                            <input type="text" placeholder="Enter keyword" class="input" required>
                            <div class="tt-search-popup-devider"></div>
                            <div class="tt-search-popup-submit">
                                <i class="fa fa-search"></i>
                                <input type="submit" value="">
                            </div>    
                        </div>
                        <a href="#" class="close"><span>+</span></a>
                    </form> 
                </div> 
            </div>
        </div>
    </div>
</div>    
<div class="tt-header-margin"></div>

<div id="content-wrapper">

    <!-- TT-TOPHEADING -->
    <div class="tt-topheading background-block" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/heading/heading.jpg);">
        <div class="container">
            <h2 class="tt-topheading-title c-h3"><span>政策解讀</span></h2>
            <ul class="tt-breadcrumbs">
                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>首頁</a></li>
                <li><span>政策解讀</span></li>
            </ul>
        </div>
    </div>        
    <div class="empty-space marg-lg-b70 marg-sm-b50 marg-xs-b30"></div>

    <div class="container">
        <?php
        $latest_cat_post = new WP_Query(array('category_name' => 'policy'));
        if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                ?>
                <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                <div class="tt-event-2 clearfix">
                    <div class="tt-event-2-img-cell">
                        <a class="custom-hover" href="<?php the_permalink(); ?>">
                            <img src="<?php echo $image[0]; ?>" style="width: 254px;"/>
                        </a>                    
                    </div>
                    <div class="tt-event-2-date-cell">
                        <span><?php the_time('y'); ?> </span>    
                        <?php the_time('m-d'); ?> 
                    </div>
                    <div class="tt-event-2-info-cell">
                        <a class="tt-event-2-title c-h5" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                        <div class="simple-text size-4 color-3">
                            <p><?php the_excerpt(); ?></p>
                        </div>
                        <!--                        <div class="tt-event-2-label">
                                                    <span><i class="stroke-icon icon-Timer"></i><?php the_time('G:i:s') ?></span>
                                                    <span><i class="stroke-icon icon-Pointer"></i>address</span>
                                                </div>-->
                    </div>
                </div>
                <?php
            endwhile;
        endif;
        ?>
        <div class="empty-space marg-lg-b95 marg-md-b120 marg-sm-b100 marg-xs-b60"></div>
    </div>
</div>
<?php get_footer(); ?>


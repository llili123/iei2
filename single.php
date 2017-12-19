<?php
/*
 * Template Name:history
 */
?>
<?php get_header(); ?>
<div id="content-wrapper">

    <!-- TT-TOPHEADING -->
    <?php while (have_posts()) : the_post(); ?>
        <div class="tt-topheading background-block tt-topheadingsingle" style="background-image:url(<?php bloginfo('template_directory'); ?>/assets/img/heading/heading.jpg);"
            >
            <div class="container">
                <h2 class="tt-topheading-title c-h3"  ><span><?php the_title();?></span></h2>
            </div>
        </div>    
    <?php endwhile; ?>    
    <div class="empty-space marg-lg-b70 marg-sm-b50 marg-xs-b30" ></div>
    <div class="container singlecontent">
        <div class="tt-event-2 clearfix singlepad">
            <?php while (have_posts()) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; ?>
        </div>
        <div class="empty-space marg-lg-b95 marg-md-b120 marg-sm-b100 marg-xs-b60"></div>
    </div>
</div>
<?php get_footer(); ?>


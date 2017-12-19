   <!--教師-->
    <div class="">
        <div class="container">
            <div class="empty-space marg-lg-b90 marg-sm-b50 marg-xs-b30"></div>
            <!-- TT-HEDING -->
            <div class="tt-heding type-2">
                <h4 class="tt-heding-title c-h4 txt-uppercase"><span>團隊成員</span></h4>
                <div class="tt-heding-desc">Learn form best</div>
            </div>
            <div class="empty-space marg-lg-b50 marg-sm-b30"></div> 
            <!-- TT-TEACHER -->
            <div class="row">
                <?php
                $latest_cat_post = new WP_Query(array('category_name' => 'team'));
                if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                        ?>
                        <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                        <div class="col-sm-6 col-md-3">
                            <div class="tt-teacher">
                                <div class="tt-teacher-img">
                                    <div class="tt-teacher-pic">
                                        <img class="img-responsive" src="<?php echo $image[0]; ?>" height="170" width="249" alt="">
                                    </div>
                                </div>
                                <div class="tt-teacher-info">
                                    <a class="tt-teacher-title" href="#"><?php the_title(); ?></a>
                                    <div class="tt-teacher-cat"><?php the_excerpt(); ?></div>
                                    <div class="simple-text size-3 color-4">
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="empty-space marg-sm-b30"></div> 
                        </div>
                        <?php
                    endwhile;
                endif;
                ?>
            </div>
            <div class="empty-space marg-lg-b85 marg-sm-b50 marg-xs-b30"></div>
            <div class="empty-space marg-lg-b85 marg-sm-b50 marg-xs-b50"></div>                
        </div>
    </div>
    <!--教師結束-->
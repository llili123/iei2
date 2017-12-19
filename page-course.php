<?php
/*
 * Template Name:course
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
    <div class="tt-topheading background-block" style="background-image:url(<?php bloginfo('template_directory') ?>/assets/img/heading/heading.jpg);">
        <div class="container">
            <h2 class="tt-topheading-title c-h3"><span>課程服務</span></h2>
            <ul class="tt-breadcrumbs">
                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>首頁</a></li>
                <li><span>課程服務</span></li>
                
            </ul>
        </div>
    </div>        

    <div class="bg-1 tt-sidebar-right tt-overflow">
        <div class="container">
            <div class="row">
                <div class="col-md-9 ">
                    <div class="tt-two-colors pright20">
                        <div class="empty-space marg-lg-b90 marg-sm-b50 marg-xs-b30"></div>
                        <div class="tt-searchbar-top">
                            <form>
                                <div class="tt-searchbar-form">
                                    <input type="text" required="" placeholder="Search Our Courses">
                                    <div class="tt-searchbar-submit">
                                        <i class="stroke-icon icon-Search"></i>
                                        <input type="submit" value="">
                                    </div>
                                </div>
                            </form>
                            <a class="tt-searchbar-view active" href="#" data-view="grid"><i class="fa fa-th-large" aria-hidden="true"></i></a>
                            <a class="tt-searchbar-view" href="#" data-view="list"><i class="fa fa-list" aria-hidden="true"></i></a>
                        </div>
                        <div class="tt-seachbar-content clearfix allcourse" data-view="grid">
                            <div>
                            <?php
                            $latest_cat_post = new WP_Query(array('category_name' => 'course'));
                            if ($latest_cat_post->have_posts()) : while ($latest_cat_post->have_posts()) : $latest_cat_post->the_post();
                                    ?>
                                    <?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'single-post-thumbnail'); ?>
                                    <div class="tt-seachbar-entry <?php $tag=get_the_tags();if($tag){$tag=$tag[0];echo $tag->name;} ?> <?php $tag=get_the_tags();if($tag){$tag=$tag[1];echo $tag->name;} ?>">
                                        <div class="tt-cours type-2">
                                            <a class="tt-cours-img custom-hover" href="<?php the_permalink();?>">
                                                <img class="img-responsive" src="<?php echo $image[0]; ?>" height="260" width="270" alt="">

                                            </a>
                                            <div class="tt-cours-info">
                                                <div class="tt-cours-cat"><?php the_title(); ?></div>
                                                <a class="tt-cours-title c-h6" href="<?php the_permalink();?>"><?php the_excerpt(); ?></a>
                                                <div class="simple-text size-4">
                                                </div>
                                            </div>
                                            <div class="tt-cours-bottom clearfix">
                                                <div class="tt-cours-left">
                                                    <a class="tt-cours-count" href="<?php the_permalink();?>">read more</a>
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
                        <div class="empty-space marg-lg-b135 marg-md-b120 marg-sm-b50 marg-xs-b30"></div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="pleft20">
                        <div class="empty-space marg-lg-b90 marg-sm-b50 marg-xs-b30"></div>

                        <!-- TT-HEDING -->
                        <div class="tt-heding type-3">
                            <h5 class="tt-heding-title c-h5 txt-uppercase"><span><small>主題培訓</small></span></h5>
                        </div>
                        <div class="empty-space marg-lg-b10"></div>

                        <!-- TT-SLIST -->
                        <ul class="tt-slist">
                            <li><a href="#" id="side1">少兒培訓班</a></li>
                            <li><a href="#" id="side2">藝術類主題培訓</a></li>
                            <li><a href="#" id="side3">成人社交培訓</a></li>

                        </ul>
                        <div class="empty-space marg-lg-b40 marg-xs-b30"></div>
                        <!-- TT-HEDING -->
                        <div class="tt-heding type-3">
                            <h5 class="tt-heding-title c-h5 txt-uppercase"><span><small>藝考課程</small></span></h5>
                        </div>
                        <div class="empty-space marg-lg-b10"></div>

                        <!-- TT-SLIST -->
                        <ul class="tt-slist">
                            <li><a href="#" id="side4">小升初藝考</a></li>
                            <li><a href="#" id="side5">高中藝考</a></li>
                            <li><a href="#" id="side6">海外藝考</a></li>

                        </ul>
                        <div class="empty-space marg-lg-b40 marg-xs-b30"></div>
                        <!-- TT-HEDING -->
                        <div class="tt-heding type-3">
                            <h5 class="tt-heding-title c-h5 txt-uppercase"><span><small>國際游學</small></span></h5>
                        </div>
                        <div class="empty-space marg-lg-b10"></div>

                        <!-- TT-SLIST -->
                        <ul class="tt-slist">
                            <li><a href="#" id="side7">文化交流團</a></li>
                            <li><a href="#" id="side8">主題研學</a></li>
                            <li><a href="#" id="side9">綜合競賽</a></li>
                            <li><a href="#" id="side11">企業實習</a></li>
                            <li><a href="#" id="side12">冬夏令營</a></li>

                        </ul>
                        <div class="empty-space marg-lg-b40 marg-xs-b30"></div>
                        <!-- TT-HEDING -->
                        <div class="tt-heding type-3">
                            <h5 class="tt-heding-title c-h5 txt-uppercase"><span><small>升學移民</small></span></h5>
                        </div>
                        <div class="empty-space marg-lg-b10"></div>

                        <!-- TT-SLIST -->
                        <ul class="tt-slist">
                            <li><a href="#" id="side12">香港</a></li>
                            <li><a href="#" id="side13">加拿大</a></li>
                            <li><a href="#" id="side14">歐美</a></li>

                        </ul>
                        <div class="empty-space marg-lg-b40 marg-xs-b30"></div>
                        <!-- TT-HEDING -->
                        <div class="tt-heding type-3">
                            <h5 class="tt-heding-title c-h5 txt-uppercase"><span><small>學歷教育</small></span></h5>
                        </div>
                        <div class="empty-space marg-lg-b10"></div>

                        <!-- TT-SLIST -->
                        <ul class="tt-slist">
                            <li><a href="#" id="side15">美國浸會2+2</a></li>
                            <li><a href="#" id="side16">喬治華盛頓2+2</a></li>
                            <li><a href="#" id="side17">體育大學2+2</a></li>
                            <li><a href="#" id="side18">海外遠程綫上學位</a></li>
                        </ul>
                        <div class="empty-space marg-lg-b40 marg-xs-b30"></div>
                        <!-- TT-HEDING -->
                        <div class="tt-heding type-3">
                            <h5 class="tt-heding-title c-h5 txt-uppercase"><span><small>大師班</small></span></h5>
                        </div>
                        <div class="empty-space marg-lg-b10"></div>

                        <!-- TT-SLIST -->
                        <ul class="tt-slist">
                            <li><a href="#" id="side19">戲曲大師班</a></li>
                            <li><a href="#" id="side20">舞蹈大師班</a></li>
                            <li><a href="#" id="side21">戲曲大師班</a></li>

                        </ul>
                        <div class="empty-space marg-lg-b40 marg-xs-b30"></div>

                        <!-- TT-HEDING -->
                        <div class="tt-heding type-3">
                            <h5 class="tt-heding-title c-h5 txt-uppercase"><span><small>最新課程</small></span></h5>
                        </div>
                        <div class="empty-space marg-lg-b15"></div>

                        <!-- TT-SCOURS -->
                        <ul class="tt-scours-wrapper">
                            <li>
                                <div class="tt-scours clearfix">
                                    <a class="tt-scours-img custom-hover" href="#">
                                        <img class="img-responsive" src="img/scours/scours.jpg" height="75" width="75" alt="">
                                    </a>
                                    <div class="tt-scours-info">
                                        <a class="tt-scours-title" href="#">藝考3+雅思項目1</a>
                                        <div class="tt-scours-price">$399</div>
                                    </div>
                                </div> 
                            </li>
                            <li>
                                <div class="tt-scours clearfix">
                                    <a class="tt-scours-img custom-hover" href="#">
                                        <img class="img-responsive" src="img/scours/scours.jpg" height="75" width="75" alt="">
                                    </a>
                                    <div class="tt-scours-info">
                                        <a class="tt-scours-title" href="#">How to design a logo for begnerers course</a>
                                        <div class="tt-scours-price">$399</div>
                                    </div>
                                </div>                                 
                            </li>
                            <li>
                                <div class="tt-scours clearfix">
                                    <a class="tt-scours-img custom-hover" href="#">
                                        <img class="img-responsive" src="img/scours/scours.jpg" height="75" width="75" alt="">
                                    </a>
                                    <div class="tt-scours-info">
                                        <a class="tt-scours-title" href="#">How to design a logo for begnerers course</a>
                                        <div class="tt-scours-price">$399</div>
                                    </div>
                                </div>                                 
                            </li>

                        </ul>
                        <div class="empty-space marg-lg-b40"></div>

                        <!-- TT-HEDING -->
                        <div class="tt-heding type-3">
                            <h5 class="tt-heding-title c-h5 txt-uppercase"><span><small>tag clouds</small></span></h5>
                        </div>
                        <div class="empty-space marg-lg-b10"></div>

                        <!-- TT-CLOUD -->
                        <ul class="tt-cloud-wrapper">
                            <li><a class="tt-cloud" href="#">戲曲</a></li>
                            <li><a class="tt-cloud" href="#">舞蹈</a></li>
                            <li><a class="tt-cloud" href="#">留學</a></li>
                            <li><a class="tt-cloud" href="#">移民</a></li>
                            <li><a class="tt-cloud" href="#">升學</a></li>
                            <li><a class="tt-cloud" href="#">遊學</a></li>
                            <li><a class="tt-cloud" href="#">戲劇</a></li>
                            <li><a class="tt-cloud" href="#">藝考</a></li>
                            <li><a class="tt-cloud" href="#">幼教</a></li>
                        </ul>

                        <div class="empty-space marg-sm-b80 marg-xs-b60"></div> 
                    </div>                    
                </div>
            </div>
            <br/><br/>
        </div>                
    </div>
</div>


<?php get_footer(); ?>



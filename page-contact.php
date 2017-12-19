<?php
/*
 * Template Name:contact
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
            <h2 class="tt-topheading-title c-h3"><span>聯繫我們</span></h2>
            <ul class="tt-breadcrumbs">
                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>首頁</a></li>
                <li><span>聯繫我們</span></li>
            </ul>
        </div>
    </div>        
    <div class="empty-space marg-lg-b85 marg-sm-b50 marg-xs-b30"></div>
    <div class="container">
        <!-- TT-HEDING -->
        <div class="tt-heding type-2">
            <h4 class="tt-heding-title c-h4 txt-uppercase"><span>取得聯繫</span></h4>
            <div class="tt-heding-desc">We Are Available</div>
        </div>
        <div class="empty-space marg-lg-b25"></div>

        <div class="simple-text size-4">
            <p>如果您對我們感興趣，歡迎撥打我們的電話或發送電子郵件和我們取得聯繫</p>
        </div>
        <div class="empty-space marg-lg-b50 marg-sm-b30"></div>

        <!-- TT-CONTACT -->
        <div class="tt-contact-wrapper">
            <div class="row">
                <div class="col-sm-5">
                    <div class="tt-contact clearfix">
                        <div class="tt-contact-img"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <div class="tt-contact-info">
                            <p><strong>（北京）</strong>海淀區中關村丹棱街18號創富大廈19層</p>
                            <p><strong>（香港）</strong>銅鑼灣摩利臣山道84-86號1樓</p>  
                        </div>
                    </div>
                    <div class="empty-space marg-xs-b30"></div>
                </div>



                <div class="col-sm-4">
                    <div class="tt-contact clearfix">
                        <div class="tt-contact-img"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <div class="tt-contact-info">
                            <p><a href="tel:18005622487">（86）010-5356 7027</a></p>
                            <p><a href="tel:32155468975">（86）186 0134 7010</a></p>
                        </div>
                    </div>                          
                </div>
                <div class="col-sm-3">
                    <div class="tt-contact clearfix">
                        <div class="tt-contact-img"><i class="fa fa-envelope-o" aria-hidden="true"></i></div>
                        <div class="tt-contact-info">
                            <p><a href="info@caci.hk">info@caci.hk</a></p>

                        </div>
                    </div> 
                    <div class="empty-space marg-xs-b30"></div>                      
                </div>
            </div>
        </div>
        <div class="empty-space marg-lg-b50 marg-sm-b30"></div>
        <!--地圖-->
        <div class="row">
            <div class="col-sm-12">
                <iframe src=" <?php bloginfo('template_directory'); ?>/map.html" scrolling="no" style="width:100%;height:300px;border: 
                        2px solid #f8d24b"></iframe>
            </div>
        </div>
        <div class="empty-space marg-lg-b50 marg-sm-b30"></div>
        <div class="row">
            <div class="col-sm-12">
                <iframe src=" <?php bloginfo('template_directory'); ?>/map1.html" scrolling="no" style="width:100%;height:300px;border: 
                        2px solid #f8d24b"></iframe>
            </div>
        </div>
        <!--地圖結束-->
        <div class="empty-space marg-lg-b135 marg-md-b120 marg-sm-b100 marg-xs-b60"></div>
    </div>

</div>
<?php get_footer(); ?>
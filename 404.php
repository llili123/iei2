<?php get_header();?>
    <div class="tt-search-popup">
        <div class="tt-search-overlay"></div>
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
                <h2 class="tt-topheading-title c-h3"><span>404 Error Page</span></h2>
                <ul class="tt-breadcrumbs">
                    <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>首頁</a></li>
                    <li><span>404 Error Page</span></li>
                </ul>
            </div>
        </div>        
        <div class="empty-space marg-lg-b70 marg-sm-b50 marg-xs-b30"></div>

        <div class="container">

            <!-- TT-EVENTS -->
            <div class="row">
                <div class="col-sm-5">
                    <img class="tt-notfound-img img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/404/notfound.png" height="455" width="508" alt="">
                </div>
                <div class="col-sm-7">
                    <div class="empty-space marg-lg-b100 marg-md-b50 marg-sm-b40 marg-xs-b30"></div>
                    <div class="tt-notfound-info">
                        <h1 class="tt-notfound-title c-h1"><span>404:</span> PAGE NOT FOUND</h1>
                        <div class="simple-text size-6 color-4">
                            <p><i>We’re sorry but we can’t seem to find the page you requested. This might be because you have typed the web address incorrectly.</i></p>
                        </div>
                        <a class="c-btn type-1 color-2" href="http://yiwen-iei.com/"><span>submit now<i class="fa fa-arrow-right" aria-hidden="true"></i></span></a>
                    </div>
                </div>
            </div>


            <div class="empty-space marg-lg-b95 marg-md-b120 marg-sm-b100 marg-xs-b60"></div>
        </div>
 
    </div>

<?php get_footer();?>
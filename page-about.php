<?php
/*
 * Template Name:about
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
            <h2 class="tt-topheading-title c-h3"><span>關於我們</span></h2>
            <ul class="tt-breadcrumbs">
                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i>首頁</a></li>
                <li><span>關於我們</span></li>
            </ul>
        </div>
    </div>        
    <div class="empty-space marg-lg-b85 marg-sm-b50 marg-xs-b30"></div>

    <div class="container">

        <div class="row bg-1 aboutmision" >
            <div class="col-sm-4">
                <div class="tt-simple-image">
                    <a class="tt-simple-image custom-hover" href="#">
                        <img class="img-responsive" src="<?php bloginfo('template_directory'); ?>/assets/img/simple-image/simple_1.jpg" height="585" width="399" alt="">
                    </a>                        
                </div>
                <div class="empty-space marg-xs-b30"></div>
            </div>
            <div class="col-sm-8">
                <div class="pleft40">

                    <!-- TT-HEDING -->
                    <div class="tt-heding type-2">
                        <h4 class="tt-heding-title c-h4 txt-uppercase"><span>Our Mission</span></h4>
                        <div class="tt-heding-desc">About Us</div>
                    </div>
                    <div class="empty-space marg-lg-b25"></div>
                    <div class="simple-text size-4 style-2">
                        <p>We have professionals experienced in overseas studies services, immigration industry and the education field around the globe,  including Australia, Canada, Hong Kong, Macau, Taiwan and Singapore . 

Pioneer of All-inclusive Interntional Education Industry, with rich experience in delivering language training, overseas studies and overseas internship, international study tours, working abroad and immigration services. 

For years, our mission has been to cultivate intetnational artists with global vision. We offer services in different areas,  including early childhood education, art exam training, vocational training, academic courses, international study tours and overseas studies.</p>
                        <h5><small>集團簡介</small></h5>
                        <p>由“藝文創薈(北京)文化傳播有限公司”及“國際教育互動集團”共同創立，由來自加拿大、香港、臺灣、澳門、澳大利亞、新加坡等不同地區，具有海外留學、移民、教育背景的專業人士共同發起成立，國際教育全產業鏈的先行者，擁有外語教育、國際遊學、國際學校、出國留學和工作、出國移民等多領域的豐富經驗，致力於培養具有全球性視野的國際化藝術人才，課程服務涉及包括專題遊學、早教幼教、藝考培訓、職業培養、學歷課程、海外升學等多個不同範疇。</p>
                    </div>
                    <div class="empty-space marg-lg-b35"></div>

                    <div class="tt-devider"></div>
                    <div class="empty-space marg-lg-b20"></div>
                    <div class="simple-text txt-pt-serif color-8">
                        <p><i> “Do not train a child to learn by force or harshness; but direct them to it by what amuses their minds, so that you may be better able to discover with accuracy the peculiar bent of the genius of each.”
                                — Plato, Greek Philosopher</i></p>
                    </div>
                    <div class="empty-space marg-lg-b20"></div>
                    <div class="tt-devider"></div>
                    <div class="empty-space marg-lg-b50 marg-sm-b30"></div>

                    <!-- TT-CUSTOM-LIST -->
                    <div class="row">
                        <div class="col-sm-6">
                            <ul class="tt-custom-list">
                                <li>International Training</li>
                                <li>We Are Global</li>
                            </ul>
                            <div class="empty-space marg-xs-b30"></div>
                        </div>
                        <div class="col-sm-6">
                            <ul class="tt-custom-list">
                                <li>Skilled Faculities</li>
                                <li>Higest Rated</li>
                            </ul>                                
                        </div>
                    </div>                                            
                </div>
            </div>
        </div>
        <div class="empty-space marg-lg-b80 marg-sm-b50 marg-xs-b30"></div>
    </div>



    <?php include 'Template_team.php' ?>
    <?php include 'Template_corevalue.php' ?>
    <br/><br/>
</div>

<?php get_footer(); ?>


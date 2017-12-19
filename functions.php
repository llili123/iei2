<?php
function twentyseventeen_setup() {
    /*
     * Make theme available for translation.
     * Translations can be filed at WordPress.org. See: https://translate.wordpress.org/projects/wp-themes/twentyseventeen
     * If you're building a theme based on Twenty Seventeen, use a find and replace
     * to change 'twentyseventeen' to the name of your theme in all the template files.
     */
    load_theme_textdomain('01');
    // Add default posts and comments RSS feed links to head.
    add_theme_support('automatic-feed-links');
    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support('title-tag');
    /*
     * Enable support for Post Thumbnails on posts and pages.
     *
     * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
     */
    add_theme_support('post-thumbnails');
    add_image_size('twentyseventeen-featured-image', 2000, 1200, true);
    add_image_size('twentyseventeen-thumbnail-avatar', 100, 100, true);
    add_theme_support('html5', array(
        'comment-form',
        'comment-list',
        'gallery',
        'caption',
    ));
    add_theme_support('post-formats', array(
        'aside',
        'image',
        'video',
        'quote',
        'link',
        'gallery',
        'audio',
    ));
    // Add theme support for Custom Logo.
    add_theme_support('custom-logo', array(
        'width' => 250,
        'height' => 250,
        'flex-width' => true,
    ));
    // Add theme support for selective refresh for widgets.
    add_theme_support('customize-selective-refresh-widgets');
    add_theme_support('starter-content', $starter_content);
}
add_action('after_setup_theme', 'twentyseventeen_setup');
/**
 * Enqueue scripts and styles.
 */
remove_filter('the_excerpt', 'wpautop');
function my_scripts() {
    wp_enqueue_style('font-awesome', get_template_directory_uri() . '/assets/font-awesome/4.6.1/css/font-awesome.min.css');
    wp_enqueue_style('stroke-gap-css', get_template_directory_uri() . ('/assets/css/stroke-gap.min.css'));
    wp_enqueue_style('googleapis-css', 'http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800');
    wp_enqueue_style('googleapis1-css', 'http://fonts.googleapis.com/css?family=Raleway:400,500,700,800');
    wp_enqueue_style('googleapis2-css', 'http://fonts.googleapis.com/css?family=PT+Serif:400,400italic');
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . ('/assets/bootstrap/3.3.6/css/bootstrap.min.css'));
    wp_enqueue_style('idangerous-css', get_template_directory_uri() . ('/assets/css/idangerous.swiper.css'));
    wp_enqueue_style('style-css', get_template_directory_uri() . ('/assets/css/style.css'));
    wp_enqueue_style('my-style-css', get_template_directory_uri() . ('/style.css'));

    // Load the html5 shiv.
    wp_enqueue_script('jquery', get_template_directory_uri() . '/assets/js/jquery-1.12.1.min.js');
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/3.3.6/js/bootstrap.min.js');
    wp_enqueue_script('idangerous-js', get_template_directory_uri() . '/assets/js/idangerous.swiper.min.js');
    wp_enqueue_script('jquery-countTo', get_template_directory_uri() . '/assets/js/jquery.countTo.js');
    wp_enqueue_script('jquery-viewportchecker', get_template_directory_uri() . '/assets/js/jquery.viewportchecker.min.js');
    wp_enqueue_script('global-js', get_template_directory_uri() . '/assets/js/global.js');
    wp_enqueue_script('my-js', get_template_directory_uri() . '/assets/js/my.js');
}
add_action('wp_enqueue_scripts', 'my_scripts');



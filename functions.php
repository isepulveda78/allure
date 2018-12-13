<?php

function wpdocs_custom_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function allure_files(){
  wp_enqueue_script('queryloader', get_theme_file_uri('/js/queryloader2.min.js'), NULL, microtime(), true);
  wp_enqueue_script('modernizr', get_theme_file_uri('/js/modernizr.js'), NULL, microtime(), true);
  wp_enqueue_script('bootstrapjs', get_theme_file_uri('/js/bootstrap.min.js'), NULL, microtime(), true);
  wp_register_script('hoverIntent',  get_theme_file_uri('/js/jquery.hoverIntent.min.js', __FILE__), array('jquery'));
  wp_enqueue_script('hoverIntent');
  wp_register_script('nicescroll',  get_theme_file_uri('/js/jquery.nicescroll.min.js', __FILE__), array('jquery'));
  wp_enqueue_script('nicescroll');
  wp_enqueue_script('waypoints', get_theme_file_uri('/js/waypoints.min.js'), NULL, microtime(), true);
  wp_enqueue_script('waypoints-sticky', get_theme_file_uri('/js/waypoints-sticky.min.js'), NULL, microtime(), true);
  wp_enqueue_script('carousel', get_theme_file_uri('/js/owl.carousel.js'), NULL, microtime(), true);
  wp_enqueue_script('wow', get_theme_file_uri('/js/wow.js'), NULL, microtime(), true);
  wp_enqueue_script('main', get_theme_file_uri('/js/main.js'), NULL, microtime(), true);
  wp_enqueue_style('custom-google-fonts', '//fonts.googleapis.com/css?family=Lato:400,300,700,900,300italic,400italic,700italic');
  wp_enqueue_style('custom-google-fonts2', '//fonts.googleapis.com/css?family=Raleway:400,200,300,500,600,700,800,900');
  wp_enqueue_style('custom-google-fonts3', '//fonts.googleapis.com/css?family=Montserrat:400,700');
  wp_enqueue_style('custom-google-fonts4', '//fonts.googleapis.com/css?family=Open+Sans:400,300italic,400italic,600italic,700italic,600,800,300,700,800italic');
  wp_enqueue_style('custom-google-fonts5', '//fonts.googleapis.com/css?family=Shadows+Into+Light');
  wp_enqueue_style('font-awesome', '//use.fontawesome.com/releases/v5.5.0/css/all.css');
  wp_enqueue_style('simple-line', '//cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css');
  wp_enqueue_style('animate', '//cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css');
  wp_enqueue_style('magnific', get_theme_file_uri('/css/magnific-popup.css'));
  wp_enqueue_style('bootstrapcss', get_theme_file_uri('/css/bootstrap.min.css'));
  wp_enqueue_style('vspacing', get_theme_file_uri('/css/vspacing.css'));
  wp_enqueue_style('blue', get_theme_file_uri('/css/colors/blue.css'));
  wp_enqueue_style('allure_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'allure_files');
?>

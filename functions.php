<?php

function allure_files(){

   wp_enqueue_style('allure_styles', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'allure_files');

function wpdocs_custom_excerpt_length( $length ) {
    return 10;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

?>

<?php
function load_style_script() {
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'bootstrap.min', get_template_directory_uri().'/css/lib/bootstrap.min.css' );
    wp_enqueue_style( 'bootstrap.min', get_template_directory_uri().'/fonts/fontawesome/css/font-awesome.min.css' );
    wp_enqueue_script( 'jquery-3.1.1', get_template_directory_uri().'/js/lib/jquery-3.1.1.js' );
    wp_enqueue_script( 'pushy.min', get_template_directory_uri().'/js/lib/menu/pushy.min.js' );
    wp_enqueue_script( 'main', get_template_directory_uri().'/js/main.js' );
}
add_action( 'wp_enqueue_scripts', 'load_style_script' );
?>

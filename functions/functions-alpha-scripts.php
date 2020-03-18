<?php

function tsum_scripts_admin() {
   wp_enqueue_style('fontawesome', 'https://use.fontawesome.com/releases/v5.8.1/css/all.css', '', '5.8.1', 'all');
}

add_action('admin_init', 'tsum_scripts_admin');


function tsum_scripts_css() {
    wp_enqueue_style( 'font-awesome-free', '//use.fontawesome.com/releases/v5.2.0/css/all.css' );
}
add_action( 'wp_enqueue_scripts', 'tsum_scripts_css' );



function tsum_scripts_js() {
    wp_register_script('custom_script', get_stylesheet_directory_uri() . '/assets/js/scripts.js', array( 'jquery' ));
    wp_enqueue_script('custom_script');
}  
add_action( 'wp_enqueue_scripts', 'tsum_scripts_js' );



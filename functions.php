<?php

add_action( 'wp_enqueue_scripts', 'powen_lite_child_enqueue' );
function powen_lite_child_enqueue() {
    wp_enqueue_style( 'powen-lite-style', get_template_directory_uri() . '/style.css');
}

////enqueue our locally supplied font awesome stylesheet
//function enqueue_our_required_stylesheets() {
//    wp_enqueue_style( 'font-awesome', get_stylesheet_directory_uri() . '/css/font-awesome.css');
//}
//add action( 'wp_enqueue_scripts', 'enqueue_our_required_stylesheets');
?>
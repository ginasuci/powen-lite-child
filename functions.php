<?php

add_action( 'wp_enqueue_scripts', 'powen_lite_child_enqueue' );
function powen_lite_child_enqueue() {
    wp_enqueue_style( 'powen-lite-style', get_template_directory_uri() . '/style.css');
}

function load_fonts() {
            wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Roboto');
            wp_enqueue_style( 'googleFonts');
        }
    
    add_action('wp_print_styles', 'load_fonts');
?>
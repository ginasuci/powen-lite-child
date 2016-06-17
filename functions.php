<?php

add_action( 'wp_enqueue_scripts', 'powen_lite_child_enqueue' );
function powen_lite_child_enqueue() {
    wp_enqueue_style( 'powen-lite-style', get_template_directory_uri() . '/style.css');
}

function load_google_fonts() {
            wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Roboto');
            wp_enqueue_style('googleFontsRoboto');
    
            wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Righteous');
            wp_enqueue_style('googleFontsRighteous');
    
            wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Cairo');
            wp_enqueue_style('googleFontsCairo');
        }
    
    add_action('wp_print_styles', 'load_google_fonts');
?>
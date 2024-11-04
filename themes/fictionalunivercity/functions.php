<?php

// Add tailwind stylesheet 
function univercity_enqueue_styles() {
    wp_enqueue_style( 'univercity_style', get_stylesheet_uri(  ) );
}

add_action('wp_enqueue_scripts', 'univercity_enqueue_styles');



// Add custom javascript
function codecraft_enqueue_scripts() {
    wp_enqueue_script( 'codecraft_navigation', get_parent_theme_file_uri( 'assets/js/navigation.js' ) );
}

add_action('wp_enqueue_scripts', 'codecraft_enqueue_scripts');
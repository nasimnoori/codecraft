<?php

// Add tailwind stylesheet 
function codecraft_enqueue_styles() {
    wp_enqueue_style( 'codecraft_style', get_parent_theme_file_uri( 'assets/css/output.css' ) );
    wp_enqueue_style( 'poppins_fonts', '//fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap' );
    wp_enqueue_style( 'lato_fonts', '//fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap'  );
}

add_action('wp_enqueue_scripts', 'codecraft_enqueue_styles');

// Add custom javascript
function codecraft_enqueue_scripts() {
    wp_enqueue_script( 'codecraft_navigation', get_parent_theme_file_uri( 'assets/js/navigation.js' ), NULL, '1.0', true );
}

add_action('wp_enqueue_scripts', 'codecraft_enqueue_scripts');



// Add Features
function codecraft_features() {
    // register_nav_menu( 'headerDevelopMenuLocation', 'Header Develop Menu Location' );
    // register_nav_menu( 'headerGrowMenuLocation', 'Header Grow Menu Location' );
    add_theme_support( 'title-tag' );
}

add_action( 'after_setup_theme', 'codecraft_features' );



function get_read_time($post_content) {
    // Average reading speed (words per minute)
    $words_per_minute = 200;

    // Strip HTML tags and count words
    $word_count = str_word_count(strip_tags($post_content));

    // Calculate read time in minutes
    $read_time = ceil($word_count / $words_per_minute);

    return $read_time;
}
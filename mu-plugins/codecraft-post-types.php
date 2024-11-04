<?php

//CodeCraft post types
function codecraft_post_types()
{
    register_post_type('service', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'taxonomies' => array('service_type'),
        'rewrite' => array('slug' => 'services'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Services',
            'add_new' => 'Add New Service',
            'add_new_item' => 'Add New Service',
            'edit_item' => 'Edit Service',
            'all_items' => 'All Services',
            'singular_name' => 'Service'
        ),
        'menu_icon' => 'dashicons-yes'
    ));

    register_post_type('work', array(
        'supports' => array('title', 'editor', 'excerpt', 'thumbnail'),
        'rewrite' => array('slug' => 'work'),
        'has_archive' => true,
        'public' => true,
        'show_in_rest' => true,
        'labels' => array(
            'name' => 'Work',
            'add_new' => 'Add New Work',
            'add_new_item' => 'Add New Work',
            'edit_item' => 'Edit Work',
            'all_items' => 'All Work',
            'singular_name' => 'Work'
        ),
        'menu_icon' => 'dashicons-archive'
    ));
}

add_action('init', 'codecraft_post_types');


//Taxonomy
function codecraft_taxonomy()
{
    register_taxonomy(
        'service_type',
        'service', // Make sure 'service' is listed here to link it with the service post type
        array(
            'labels' => array(
                'name' => 'Service Types',
                'singular_name' => 'Service Type',
            ),
            'public' => true,
            'hierarchical' => true, // This allows the taxonomy to act like categories
            'show_ui' => true, // Ensure this is set to true to display the UI in the admin
            'show_in_menu' => true,
            'show_in_rest' => true, // Enables block editor support
        )
    );
}
add_action('init', 'codecraft_taxonomy');

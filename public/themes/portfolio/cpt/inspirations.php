<?php

// Register Custom Post Type
function create_inspirations_post_type()
{
    $args = array(
        'label' => __('Inspirations', 'text_domain'),
        'description' => __('Musiques inspirantes', 'text_domain'),
        'supports' => array('title'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_rest' => true,
        'menu_position' => 8,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'menu_icon' => 'dashicons-album',
        'capability_type' => 'page',
    );
    register_post_type('inspirations', $args);
}
add_action('init', 'create_inspirations_post_type', 0);

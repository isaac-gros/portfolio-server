<?php

// Register Custom Post Type
function create_creations_post_type()
{
    $args = array(
        'label' => __('Créations', 'text_domain'),
        'description' => __('Créations diverses (hors développement web)', 'text_domain'),
        'supports' => array('title'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_rest' => true,
        'menu_position' => 6,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'menu_icon' => 'dashicons-art',
        'capability_type' => 'page',
    );
    register_post_type('creations', $args);
}
add_action('init', 'create_creations_post_type', 0);

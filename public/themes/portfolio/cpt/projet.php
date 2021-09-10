<?php

// Register Custom Post Type
function create_projets_post_type()
{
    $args = array(
        'label' => __('Projets', 'text_domain'),
        'description' => __('Liste de projets de développement web', 'text_domain'),
        'supports' => array('title'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'show_in_rest' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'menu_icon' => 'dashicons-portfolio',
        'capability_type' => 'page',
    );
    register_post_type('project', $args);
}
add_action('init', 'create_projets_post_type', 0);

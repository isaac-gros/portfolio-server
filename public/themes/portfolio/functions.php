<?php

include 'autoloader.php';

add_action('init', function () {
    remove_post_type_support('page', 'editor');
});

add_action('after_setup_theme', function () {
    add_theme_support('post-thumbnails');

    add_theme_support('title-tag');

    register_nav_menus([
        'navigation' => __('Navigation', 'wordplate'),
    ]);
});

add_action( 'admin_menu', function () {
    remove_menu_page( 'edit.php' );
});

add_filter('jpeg_quality', function () {
    return 100;
}, 10, 2);
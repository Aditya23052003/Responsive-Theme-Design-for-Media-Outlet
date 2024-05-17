<?php
function responsive_media_theme_setup() {
    // Add featured image support
    add_theme_support('post-thumbnails');
    // Register navigation menu
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'responsive-media-theme')
    ));
}

add_action('after_setup_theme', 'responsive_media_theme_setup');

// Enqueue scripts and styles
function responsive_media_theme_scripts() {
    wp_enqueue_style('responsive-media-theme-style', get_stylesheet_uri());
    wp_enqueue_script('responsive-media-theme-script', get_template_directory_uri() . '/script.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'responsive_media_theme_scripts');
?>

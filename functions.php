<?php
/**
 * MojarProject Pro Functions and Definitions
 */

function mojar_pro_setup() {
    add_theme_support('woocommerce');
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('custom-logo');
    
    register_nav_menus(array(
        'primary' => __('Primary Menu', 'mojar-pro'),
    ));
}
add_action('after_setup_theme', 'mojar_pro_setup');

function mojar_pro_scripts() {
    wp_enqueue_style('mojar-style', get_stylesheet_uri());
    wp_enqueue_script('mojar-js', get_template_directory_uri() . '/assets/js/main.js', array(), '1.0', true);
}
add_action('wp_enqueue_scripts', 'mojar_pro_scripts');

function mojar_register_cpt() {
    register_post_type('reviews', array(
        'labels' => array('name' => 'Store Reviews', 'singular_name' => 'Review'),
        'public' => true,
        'has_archive' => true,
        'menu_icon' => 'dashicons-star-filled',
        'supports' => array('title', 'editor', 'thumbnail')
    ));
}
add_action('init', 'mojar_register_cpt');

function mojar_stock_alert_shortcode($atts) {
    return '<div class="stock-alert" style="background:#ffeb3b; padding:15px; border-left:5px solid #fbc02d; text-align:center; font-family:sans-serif;">
                <strong>Notice:</strong> Items are selling fast! Order within 2 hours for same-day shipping.
            </div>';
}
add_shortcode('stock_alert', 'mojar_stock_alert_shortcode');

add_theme_support( 'wc-product-gallery-zoom' );
add_theme_support( 'wc-product-gallery-lightbox' );
add_theme_support( 'wc-product-gallery-slider' );

function mojar_add_woocommerce_support() {
    add_theme_support( 'woocommerce' );
    add_theme_support( 'wc-product-gallery-zoom' );
    add_theme_support( 'wc-product-gallery-lightbox' );
    add_theme_support( 'wc-product-gallery-slider' );
}
add_action( 'after_setup_theme', 'mojar_add_woocommerce_support' );

<?php

/**
 * Plugin Name: Display Product Slider
 * Author:      jakub
 */

// this just loads deps and registers shortcode. Then the control is passed to slider.php

// exit if accessed directly.
if (! defined('ABSPATH')) {
    exit;
}

function display_product_slider($atts)
{
    // external styles
    wp_enqueue_style(
        'animate-css',
        'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css',
        array(),
        '4.1.1'
    );

    // plugin styles
    $rel_path = 'assets/css/slider.css';
    $version = filemtime(plugin_dir_path(__FILE__) . $rel_path);
    wp_enqueue_style(
        'display-product-slider-css',
        plugin_dir_url(__FILE__) . $rel_path,
        array(),
        $version
    );

    // plugin scripts
    $rel_path = 'assets/js/slider-images.js';
    $version = filemtime(plugin_dir_path(__FILE__) . $rel_path);
    wp_enqueue_script(
        'slider-images-js',
        plugin_dir_url(__FILE__) . $rel_path,
        array(),
        $version
    );
    $rel_path = 'assets/js/slider-transforms.js';
    $version = filemtime(plugin_dir_path(__FILE__) . $rel_path);
    wp_enqueue_script(
        'slider-transforms-js',
        plugin_dir_url(__FILE__) . $rel_path,
        array(),
        $version
    );
    $rel_path = 'assets/js/slider-animations.js';
    $version = filemtime(plugin_dir_path(__FILE__) . $rel_path);
    wp_enqueue_script(
        'slider-animations-js',
        plugin_dir_url(__FILE__) . $rel_path,
        array(),
        $version
    );
    $rel_path = 'assets/js/slider-display-slides.js';
    $version = filemtime(plugin_dir_path(__FILE__) . $rel_path);
    wp_enqueue_script(
        'slider-display-slides-js',
        plugin_dir_url(__FILE__) . $rel_path,
        array(),
        $version
    );
    $rel_path = 'assets/js/slider.js';
    $version = filemtime(plugin_dir_path(__FILE__) . $rel_path);
    wp_enqueue_script(
        'display-product-slider-js',
        plugin_dir_url(__FILE__) . $rel_path,
        array(),
        $version
    );

    ob_start();

    require_once 'slider.php';

    return ob_get_clean();
}

add_shortcode("display_product_slider", "display_product_slider");

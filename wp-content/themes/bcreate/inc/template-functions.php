<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package bCreate
 */

/**
 * Required files
 */
require get_template_directory() . '/inc/functions-admin.php';

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function bcreate_body_classes($classes)
{
    // Adds a class of hfeed to non-singular pages.
    if (!is_singular()) {
        $classes[] = 'hfeed';
    }

    // Adds a class of no-sidebar when there is no sidebar present.
    if (!is_active_sidebar('sidebar-1')) {
        $classes[] = 'no-sidebar';
    }

    return $classes;
}

add_filter('body_class', 'bcreate_body_classes');

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function bcreate_pingback_header()
{
    if (is_singular() && pings_open()) {
        printf('<link rel="pingback" href="%s">', esc_url(get_bloginfo('pingback_url')));
    }
}

add_action('wp_head', 'bcreate_pingback_header');

/**
 * Enqueue scripts and styles
 */
function bcreate_enqueue_scripts()
{
    wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.css', array(), 20141119);
    wp_enqueue_style('bcreate-style', get_stylesheet_uri(), array(), _S_VERSION);
    wp_style_add_data('bcreate-style', 'rtl', 'replace');

    wp_enqueue_script('bcreate-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.min.js', array('jquery'), '20120206', true);
}

add_action('wp_enqueue_scripts', 'bcreate_enqueue_scripts');

/**
 * Add a bCreate Favicon
 */
function bcreate_add_favicon()
{
    echo '<link rel="shortcut icon" href="'. get_template_directory_uri() . '/img/favicon.ico" />';
}

add_action('wp_head', 'bcreate_add_favicon');

<?php

/*
 * @package bcreate-theme
 * ==========================
 * ADMIN PAGE
 * ==========================
 * */

function bcreate_add_admin_page()
{
    //Generate bCreate admin page
    add_menu_page('bCreate Theme Options', 'Theme Options', 'manage_options', 'bcreate_theme_options', 'bcreate_create_admin_page', get_stylesheet_directory_uri() . '/img/bcreate-logo-16x16.png', 3);

    //Generate bCreate submenu page(s)
    add_submenu_page('bcreate_theme_options', 'bCreate General Options', 'Theme Options', 'manage_options', 'bcreate_theme_options', 'bcreate_create_admin_page');
    add_submenu_page('bcreate_theme_options', 'bCreate Styling Options', 'Styling Options', 'manage_options', 'bcreate_theme_options_css', 'bcreate_create_admin_page_styling');

}

add_action('admin_menu', 'bcreate_add_admin_page');

function bcreate_custom_settings() {
    register_setting('bcreate_settings_group', 'primary_color');
    add_settings_section('bcreate_styling_options', 'Styling Settings', 'bcreate_styling_options', 'bcreate_theme_options_styling');
    add_settings_field('bcreate_styling_primary_color', 'Primary Color', 'bcreate_styling_primary_color', 'bcreate_theme_options_styling', 'bcreate_styling_options');
}

function bcreate_styling_primary_color() {
    $primary_color = esc_attr(get_option('primary_color'));
    echo '<input type="color" name="primary_color" value="' . $primary_color . '" />';
}

function bcreate_styling_options() {
    echo 'Customize styling options';
}

function bcreate_create_admin_page() {
    require_once(get_stylesheet_directory() . '/inc/admin-pages/admin-theme-options-general.php');
}

function bcreate_create_admin_page_styling() {
    require_once(get_stylesheet_directory() . '/inc/admin-pages/admin-theme-options-styling.php');
}


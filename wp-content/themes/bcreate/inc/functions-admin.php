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

function bcreate_create_admin_page()
{
    require_once(get_stylesheet_directory() . '/templates/admin-pages/admin-theme-options-general.php');
}

function bcreate_create_admin_page_styling()
{
    echo '<h1>bCreate Styling Options</h1>';
}
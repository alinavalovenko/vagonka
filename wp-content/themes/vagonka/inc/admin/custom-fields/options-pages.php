<?php
if (function_exists('acf_add_options_page') && function_exists('acf_add_options_sub_page')) {
    /**
     *acf option page from feature setting
     */
    $parent = acf_add_options_page(array(
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme_settings',
        'capability' => 'manage_options',
        'position' => 75,
        'icon_url' => 'dashicons-admin-settings',
        'redirect' => true
    ));

    acf_add_options_sub_page(array(
        'page_title' => 'Site Settings',
        'menu_title' => 'Site Settings',
        'menu_slug' => 'site_settings',
        'parent_slug' => $parent['menu_slug'],
        'capability' => 'manage_options',
        'post_id' => 'js_general_settings',
    ));

}

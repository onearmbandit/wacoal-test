<?php
/**
 * Custom Menu page creation
 *
 * @package Wacoal
 */

if (function_exists('acf_add_options_page')) {

    acf_add_options_page(
        array(
        'page_title' => 'Theme General Settings',
        'menu_title' => 'Theme Options',
        'menu_slug' => 'theme-settings',
        'capability' => 'edit_posts',
        'redirect' => true,
        )
    );

    acf_add_options_sub_page(
        array(
        'page_title' => 'Theme Header Settings',
        'menu_title' => 'Header',
        'parent_slug' => 'theme-settings',
        )
    );

    acf_add_options_sub_page(
        array(
        'page_title' => 'Theme Footer Settings',
        'menu_title' => 'Footer',
        'parent_slug' => 'theme-settings',
        )
    );

    acf_add_options_sub_page(
        array(
        'page_title' => 'Homepage Settings',
        'menu_title' => 'Homepage',
        'parent_slug' => 'theme-settings',
        )
    );
    acf_add_options_sub_page(
        array(
        'page_title' => '404 page Settings',
        'menu_title' => '404 page',
        'parent_slug' => 'theme-settings',
        )
    );

}

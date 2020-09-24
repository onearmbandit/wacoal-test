<?php
/*
Plugin Name: Test Block
Version: 4.1.6
Author: vidya
*/

function loadMyBlock()
{
				wp_enqueue_script(
        'my-test-block',
        plugin_dir_url(__FILE__) . 'test-block.js',
        array('wp-blocks', 'wp-editor'),
        true
    );
    wp_enqueue_script(
        'img/image-with-data',
        plugin_dir_url(__FILE__) . 'cem-image-with-data.js',
        array('wp-blocks', 'wp-editor', 'wp-i18n', 'wp-element', 'wp-components'),
        true
    );
    wp_enqueue_script(
        'cem/banner-data',
        plugin_dir_url(__FILE__) . 'banner-data.js',
        array('wp-blocks', 'wp-editor', 'wp-i18n', 'wp-element', 'wp-components'),
        true
    );
}

add_action('enqueue_block_editor_assets', 'loadMyBlock');

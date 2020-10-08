<?php
/**
 * Group function settings
 *
 * @package Wacoal
 */


if (function_exists('acf_add_local_field_group') ) {
    /**
     * Acf theme options File Include
     */
    foreach ( glob(THEMEPATH . '/includes/website/acf-settings/options/*.php') as $filename ) {
        include $filename;
    }

    /**
     * Acf theme block options File Include
     */
    foreach ( glob(THEMEPATH . '/includes/website/acf-settings/blocks/*.php') as $filename ) {
        include $filename;
    }

    /**
     * Block Folder File Include
     */
    foreach ( glob(THEMEPATH . '/includes/website/block/*.php') as $filename ) {
        include $filename;
    }

}

/**
 * Function creates the custom toolbar for Dek.
 *
 * @param array $toolbars list of toolbars.
 */
function content_toolbar( $toolbars )
{

    $toolbars['Content Toolbar']    = array();
    $toolbars['Content Toolbar'][1] = array( 'bold', 'italic', 'strikethrough', 'link', 'numlist', 'bullist' );

    return $toolbars;
}

add_filter('acf/fields/wysiwyg/toolbars', 'content_toolbar');


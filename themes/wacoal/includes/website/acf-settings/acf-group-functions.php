<?php
/**
 * Group function settings
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
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
 *
 * @return array $toolbars custom list.
 */
function Content_toolbar( $toolbars )
{
    $toolbars['Content Toolbar']    = array();
    $toolbars['Content Toolbar'][1] = array( 'bold', 'italic', 'strikethrough', 'link', 'numlist', 'bullist', 'alignleft','aligncenter','alignright' );

    return $toolbars;
}
add_filter('acf/fields/wysiwyg/toolbars', 'Content_toolbar');

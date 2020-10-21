<?php
/**
 * Group function settings
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
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
    foreach ( glob(THEMEPATH . '/includes/website/acf-settings/block/*.php') as $filename ) {
        include $filename;
    }

}

/**
 * Block Folder File Include
 */
foreach ( glob(THEMEPATH . '/includes/website/block/*.php') as $filename ) {
    include $filename;
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
    $toolbars['Content Toolbar'][1] = array( 'bold', 'italic', 'strikethrough', 'link', 'numlist', 'bullist' );

    return $toolbars;
}
add_filter('acf/fields/wysiwyg/toolbars', 'Content_toolbar');

/**
 * Function creates the custom toolbar for Static section.
 *
 * @param array $toolbars list of toolbars.
 *
 * @return array $toolbars custom list.
 */
function Static_Sec_toolbar( $toolbars )
{

    $toolbars['Static Section Toolbar']    = array();
    $toolbars['Static Section Toolbar'][1] = array( 'bold', 'italic', 'strikethrough', 'link', 'numlist', 'bullist', 'blockquote' );

    return $toolbars;
}
add_filter('acf/fields/wysiwyg/toolbars', 'Static_Sec_toolbar');

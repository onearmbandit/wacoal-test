<?php
/**
 * Group function settings
 *
 * @package Btemptd
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


}

/**
 * Block Folder File Include
 */
foreach ( glob(THEMEPATH . '/includes/website/block/*.php') as $filename ) {
    include $filename;
}

<?php
/**
 * Group function settings
 *
 * @package Wacoal
 */

if ( function_exists( 'acf_add_local_field_group' ) ) {
    /**
     * acf theme options File Include
     */
    foreach ( glob( THEMEPATH . '/includes/website/acf-settings/options/*.php' ) as $filename ) {
		include $filename;
    }
    /**
     * Block Folder File Include
     */
    foreach ( glob(THEMEPATH . '/includes/website/block/*.php') as $filename ) {
        include $filename;
    }
}

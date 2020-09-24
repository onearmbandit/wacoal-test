<?php
/**
 * Group function settings
 *
 * @package Wacoal
 */

if ( function_exists( 'acf_add_local_field_group' ) ) {
    foreach ( glob( THEMEPATH . '/includes/website/acf-settings/options/*.php' ) as $filename ) {
		include $filename;
	}
}

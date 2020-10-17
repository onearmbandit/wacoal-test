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

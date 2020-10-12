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
    //print_r($toolbars);

    $toolbars['Content Toolbar']    = array();
    $toolbars['Content Toolbar'][1] = array( 'bold', 'italic', 'strikethrough', 'link', 'numlist', 'bullist' );
    // $toolbars['Very Simple' ] = array();
	// $toolbars['Very Simple' ][1] = array('bold' , 'link', 'italic', 'underline');

	// Edit the "Full" toolbar and remove 'code'
	// - delet from array code from http://stackoverflow.com/questions/7225070/php-array-delete-by-value-not-key
	// if( ($key = array_search('code' , $toolbars['Full' ][2])) !== false )
	// {
	//     unset( $toolbars['Full' ][2][$key] );
	// }

	// remove the 'Basic' toolbar completely
	//unset( $toolbars['Basic' ] );

	// return $toolbars - IMPORTANT!



    return $toolbars;
}

add_filter('acf/fields/wysiwyg/toolbars', 'content_toolbar');
//add_filter( 'mce_buttons', 'jivedig_remove_tiny_mce_buttons_from_editor');
function jivedig_remove_tiny_mce_buttons_from_editor( $buttons ) {

    $remove_buttons = array(

        'blockquote',
        'hr', // horizontal line
        'alignleft',
        'aligncenter',
        'alignright',

        'unlink',
        'wp_more', // read more link
        'spellchecker',
        'dfw', // distraction free writing mode
        'wp_adv', // kitchen sink toggle (if removed, kitchen sink will always display)
    );
    foreach ( $buttons as $button_key => $button_value ) {
        if ( in_array( $button_value, $remove_buttons ) ) {
            unset( $buttons[ $button_key ] );
        }
    }
    return $buttons;
}


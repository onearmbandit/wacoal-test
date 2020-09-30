<?php
/**
 * Common Gutenberg ACF Block callback functions file.
 *
 * @package Wacoal
 */


/**
 * Undocumented function
 *
 * @param [type] $block Block.
 * @return void
 */
function wacoal_data_image_block_render_callback( $block ) {
	global $wp, $post;

    $block_fields      = get_field('data_with_image');
    $block_content      = ! empty( $block_fields['paragraph_content'] ) ? $block_fields['paragraph_content'] : '';
	$block_image        = $block_fields['image'];
    $caption            = $block_fields['image_caption'];
    $separator          = $block_fields['enable_separator'];
	$output             = '';
    $default_template   = '/template-parts/block/wacoal-data-image.php';

    include get_theme_file_path( $default_template );

}

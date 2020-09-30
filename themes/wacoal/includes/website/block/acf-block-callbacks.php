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

    $block_fields       = get_field('data_with_image');
    $block_content      = ! empty( $block_fields['paragraph_content'] ) ? $block_fields['paragraph_content'] : '';
	$block_image        = $block_fields['image'];
    $caption            = $block_fields['image_caption'];
    $separator          = $block_fields['enable_separator'];
	$output             = '';
    $default_template   = '/template-parts/block/wacoal-data-image.php';

}
function wacoal_gallery_block_render_callback( $block ) {
	global $wp, $post;

    $block_fields       = get_field('gallery');
    $output             = '';
    $default_template   = '/template-parts/block/wacoal-product-gallery.php';

}
function wacoal_gallery_carousel_render_callback( $block ) {
	global $wp, $post;

    $block_fields       = get_field('slider');
    $output             = '';
    $default_template   = '/template-parts/block/wacoal-product-carousel.php';

}
function wacoal_list_format_render_callback( $block ) {
	global $wp, $post;

    $block_fields       = get_field('lists');
    $block_heading      = ! empty( get_field('heading') ) ? get_field('heading') : '';
	$block_subheading   = ! empty( get_field('short_description') ) ? get_field('short_description') : '';

	$output             = '';
    $default_template   = '/template-parts/block/wacoal-list-format.php';

}

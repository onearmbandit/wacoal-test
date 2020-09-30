<?php
/**
 * Common Gutenberg ACF Block callback functions file.
 *
 * @package Wacoal
 */


/**
 * Callback function for image block
 *
 * @param [type] $block Block.
 * @return void
 */
function wacoal_data_image_block_render_callback( $block ) {
	global $wp, $post;

    $block_fields      = get_field('data_with_image');
    $block_content      = ! empty( $block_fields['paragraph_content'] ) ? $block_fields['paragraph_content'] : '';
    $block_image_id        = $block_fields['image'];
    $block_image_url = wp_get_attachment_image_src( $block_image_id , 'full');
    $caption            = $block_fields['image_caption'];
    $separator          = $block_fields['enable_separator'];
    $default_template   = '/template-parts/block/wacoal-data-image.php';

    include get_theme_file_path( $default_template );

}


/**
 * Callback function for testimonial block
 *
 * @param [type] $block Block.
 * @return void
 */
function wacoal_testimonial_block_render_callback( $block ) {
    global $wp, $post;

    $testimonial_image_id = get_field('image');
    $testimonial_image_url = wp_get_attachment_image_src( $testimonial_image_id , 'full');
    $testimonial_quote_text = get_field('quote_text');

    $default_template   = '/template-parts/block/wacoal-testimonial.php';

    include get_theme_file_path( $default_template );
}

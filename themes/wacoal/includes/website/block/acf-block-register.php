<?php
/**
 * Common Gutenberg ACF Block register file.
 *
 * @package Wacoal
 */

 /**
  * Undocumented function
  */
function wacoal_acf_init() {
    if ( function_exists( 'acf_register_block' ) ) {
        acf_register_block(
			array(
				'name'            => 'wacoal-data-with-image',
				'title'           => __( 'Wacoal data with image' ),
				'description'     => __( 'A custom Wacoal Image block.' ),
				'render_callback' => 'wacoal_data_image_block_render_callback',
				'category'        => 'common',
				'icon'            => 'admin-comments',
				'keywords'        => array( 'wacoal-data-image' ),
			)
        );
        acf_register_block(array(
            'name'              => 'wacoal-testimonial',
            'title'             => __('Wacoal Testimonial'),
            'description'       => __('A custom testimonial block.'),
            'render_callback'   => 'wacoal_testimonial_block_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'testimonial', 'quote' ),
        )
    );
    }
}

add_action( 'acf/init', 'wacoal_acf_init' );


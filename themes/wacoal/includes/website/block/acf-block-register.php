<?php
/**
 * Common Gutenberg ACF Block register file.
 *
 * @package Wacoal
 */

 /**
  * Undocumented function
  */
function wacoal_acf_init()
{
    if (function_exists('acf_register_block') ) {
        acf_register_block(
            array(
            'name'            => 'wacoal-data-with-image',
            'title'           => __('Wacoal data with image'),
            'description'     => __('A custom Wacoal Image block.'),
            'render_callback' => 'wacoal_data_image_block_render_callback',
            'category'        => 'common',
            'icon'            => 'admin-comments',
            'keywords'        => array( 'wacoal-data-image' ),
            )
        );
        acf_register_block(
            array(
            'name' => 'wacoal-testimonial',
            'title' => __('Wacoal Testimonial'),
            'description' => __('A custom testimonial block.'),
            'render_callback' => 'wacoal_testimonial_block_render_callback',
            'category' => 'formatting',
            'icon' => 'admin-comments',
            'keywords' => array( 'testimonial', 'quote' ),
            )
        );
        acf_register_block_type(
            array(
                'name'              => 'wacoal-product-gallery',
                'title'             => __('Wacoal Product Gallery'),
                'description'       => __('A custom product gallery block.'),
                'render_callback'   => 'wacoal_gallery_block_render_callback',
                'category'          => 'formatting',
                'icon'              => 'admin-comments',
                'keywords'          => array( 'product-gallery', 'gallery' ),
            )
        );
        acf_register_block_type(
            array(
                'name'              => 'wacoal-product-slider',
                'title'             => __('Wacoal Product Slider'),
                'description'       => __('A custom product slider block.'),
                'render_callback'   => 'wacoal_gallery_carousel_render_callback',
                'category'          => 'formatting',
                'icon'              => 'admin-comments',
                'keywords'          => array( 'product-slider', 'gallery' ),
            )
        );
        acf_register_block_type(
            array(
            'name'              => 'wacoal-list-format',
            'title'             => __('Wacoal List Format'),
            'description'       => __('A custom List format block.'),
            'render_callback'   => 'wacoal_list_format_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'list-format' ),
            )
        );
        acf_register_block(
            array(
            'name'              => 'wacoal-size-chart',
            'title'             => __('Wacoal Size Chart'),
            'description'       => __('A custom size chart block.'),
            'render_callback'   => 'wacoal_size_chart_block_render_callback',
            'category'          => 'common',
            'icon'              => 'table',
            'keywords'          => array( 'size-chart' ),
            )
        );
        acf_register_block(
            array(
            'name'              => 'wacoal-title-description',
            'title'             => __('Wacoal Title Description'),
            'description'       => __('A custom title description block.'),
            'render_callback'   => 'wacoal_title_description_render_callback',
            'category'          => 'common',
            'icon'              => 'block-editor',
            'keywords'          => array( 'title', 'description' ),
            )
        );
        acf_register_block(
            array(
            'name'              => 'wacoal-question-answer',
            'title'             => __('Wacoal Question Answer'),
            'description'       => __('A custom question answer block.'),
            'render_callback'   => 'wacoal_question_answer_render_callback',
            'category'          => 'common',
            'icon'              => 'block-editor',
            'keywords'          => array( 'question', 'answer' ),
            )
        );
        acf_register_block(
            array(
            'name'              => 'wacoal-static-link',
            'title'             => __('Wacoal static links'),
            'description'       => __('A custom text and link block.'),
            'render_callback'   => 'wacoal_static_link_render_callback',
            'category'          => 'common',
            'icon'              => 'block-editor',
            'keywords'          => array( 'text', 'link', 'image' ),
            )
        );
    }
}

add_action('acf/init', 'wacoal_acf_init');

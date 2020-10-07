<?php
/**
 * Common Gutenberg ACF Block register file.
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
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
            'icon'            => 'dashicons-admin-media',
            'keywords'        => array( 'wacoal-data-image' ),
            'example'           => array(
                'attributes' => array(
                    'mode' => 'preview',
                    'data' => array(
                      'image'   => "Your image is here",
                      'image_caption'        => "Your image_caption is here"
                    )
                )
            )
            )
        );
        acf_register_block(
            array(
            'name' => 'wacoal-quotes',
            'title' => __('Wacoal Quotes'),
            'description' => __('A custom quotes block.'),
            'render_callback' => 'wacoal_quotes_block_render_callback',
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
                'name'              => 'wacoal-image-carousel',
                'title'             => __('Wacoal Image Carousel'),
                'description'       => __('A custom image carousel block.'),
                'render_callback'   => 'wacoal_image_carousel_render_callback',
                'category'          => 'formatting',
                'icon'              => 'admin-comments',
                'keywords'          => array( 'image-carousel', 'gallery' ),
            )
        );
        acf_register_block_type(
            array(
            'name'              => 'wacoal-text-image-list-format',
            'title'             => __('Wacoal Text Image List Format'),
            'description'       => __('A custom List format block.'),
            'render_callback'   => 'wacoal_text_img_list_format_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'list-format' ),
            )
        );
        acf_register_block_type(
            array(
            'name'              => 'wacoal-text-only-list-format',
            'title'             => __('Wacoal Text Only List Format'),
            'description'       => __('A custom Text Only List format block.'),
            'render_callback'   => 'wacoal_text_only_list_format_render_callback',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'list-format' ),
            )
        );
        // acf_register_block(
        //     array(
        //     'name'              => 'wacoal-size-chart',
        //     'title'             => __('Wacoal Size Chart'),
        //     'description'       => __('A custom size chart block.'),
        //     'render_callback'   => 'wacoal_size_chart_block_render_callback',
        //     'category'          => 'common',
        //     'icon'              => 'table',
        //     'keywords'          => array( 'size-chart' ),
        //     )
        // );
        acf_register_block(
            array(
            'name'              => 'wacoal-subhead-description',
            'title'             => __('Wacoal Subhead Description'),
            'description'       => __('A custom subhead description block.'),
            'render_callback'   => 'wacoal_subhead_description_render_callback',
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
            'title'             => __('Wacoal 101 static links'),
            'description'       => __('A custom text and link block.'),
            'render_callback'   => 'wacoal_static_link_render_callback',
            'category'          => 'common',
            'icon'              => 'block-editor',
            'keywords'          => array( 'text', 'link', 'image' ),
            )
        );
        acf_register_block(
            array(
            'name'              => 'wacoal-image',
            'title'             => __('Wacoal Image'),
            'description'       => __('A custom image block.'),
            'render_callback'   => 'wacoal_image_render_callback',
            'category'          => 'common',
            'icon'              => 'block-editor',
            'keywords'          => array( 'text', 'link', 'image' ),
            )
        );
        acf_register_block(
            array(
            'name'              => 'wacoal-size-chart-table',
            'title'             => __('Wacoal Size Chart table'),
            'description'       => __('A custom size chart table block.'),
            'render_callback'   => 'wacoal_size_chart_table_block_render_callback',
            'category'          => 'common',
            'icon'              => 'admin',
            'keywords'          => array( 'size-chart' ),
            )
        );
    }
}

add_action('acf/init', 'wacoal_acf_init');


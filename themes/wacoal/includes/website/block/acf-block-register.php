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
  * Function used to register the custom acf gutenberg blocks.
  *
  * @return $array gutenberg block
  */
function Wacoal_Acf_init()
{
    if (function_exists('acf_register_block') ) {
        acf_register_block(
            array(
            'name'            => 'wacoal-data-with-image',
            'title'           => __('Wacoal data with image'),
            'description'     => __('A custom Wacoal Image block.'),
            'render_callback' => 'Wacoal_Data_Image_Block_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'welcome-widgets-menus',
            'keywords'        => array( 'wacoal-data-image' ),
            'example'         => array(
                'attributes' => array(
                    'mode'   => 'preview',
                    'data'   => array(
                    'image'  => "Your image is here",
                      'image_caption'        => "Your image_caption is here"
                    )
                )
            )
            )
        );
        acf_register_block(
            array(
            'name'            => 'wacoal-quotes',
            'title'           => __('Wacoal Quotes'),
            'description'     => __('A custom quotes block.'),
            'render_callback' => 'Wacoal_Quotes_Block_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'format-quote',
            'keywords'        => array( 'testimonial', 'quote' ),
            )
        );
        acf_register_block_type(
            array(
            'name'            => 'wacoal-product-gallery',
            'title'           => __('Wacoal Product Gallery'),
            'description'     => __('A custom product gallery block.'),
            'render_callback' => 'Wacoal_Gallery_Block_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'format-gallery',
            'keywords'        => array( 'product-gallery', 'gallery' ),
            )
        );
        acf_register_block_type(
            array(
            'name'            => 'wacoal-image-carousel',
            'title'           => __('Wacoal Image Carousel'),
            'description'     => __('A custom image carousel block.'),
            'render_callback' => 'Wacoal_Image_Carousel_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'embed-photo',
            'keywords'        => array( 'image-carousel', 'gallery' ),
            )
        );
        acf_register_block_type(
            array(
            'name'            => 'wacoal-text-image-list-format',
            'title'           => __('Wacoal Text Image List Format'),
            'description'     => __('A custom List format block.'),
            'render_callback' => 'Wacoal_Text_Img_List_Format_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'list-view',
            'keywords'        => array( 'list-format' ),
            )
        );
        acf_register_block_type(
            array(
            'name'            => 'wacoal-text-only-list-format',
            'title'           => __('Wacoal Text Only List Format'),
            'description'     => __('A custom Text Only List format block.'),
            'render_callback' => 'Wacoal_Text_Only_List_Format_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'list-view',
            'keywords'        => array( 'list-format' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'wacoal-subhead-description',
            'title'           => __('Wacoal Subhead Description'),
            'description'     => __('A custom subhead description block.'),
            'render_callback' => 'Wacoal_Subhead_Description_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'archive',
            'keywords'        => array( 'title', 'description' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'wacoal-question-answer',
            'title'           => __('Wacoal Question Answer'),
            'description'     => __('A custom question answer block.'),
            'render_callback' => 'Wacoal_Question_Answer_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'editor-help',
            'keywords'        => array( 'question', 'answer' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'wacoal-image',
            'title'           => __('Wacoal Image'),
            'description'     => __('A custom image block.'),
            'render_callback' => 'Wacoal_Image_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'format-image',
            'keywords'        => array( 'text', 'link', 'image' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'wacoal-size-chart-table',
            'title'           => __('Wacoal Size Chart table'),
            'description'     => __('A custom size chart table block.'),
            'render_callback' => 'Wacoal_Size_Chart_Table_Block_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'editor-table',
            'keywords'        => array( 'size-chart' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'wacoal-video',
            'title'           => __('Wacoal Video'),
            'description'     => __('A custom video block.'),
            'render_callback' => 'Wacoal_Video_Block_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'format-video',
            'keywords'        => array( 'video' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'wacoal-video-with-image',
            'title'           => __('Wacoal Video and Image'),
            'description'     => __('A custom video and image block.'),
            'render_callback' => 'Wacoal_Video_Image_Block_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'format-video',
            'keywords'        => array( 'video' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'wacoal-horizontal-line',
            'title'           => __('Wacoal Horizontal Line'),
            'description'     => __('A custom horizontal block.'),
            'render_callback' => 'Wacoal_Horizontal_Block_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'minus',
            'keywords'        => array( 'line' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'wacoal-para-block',
            'title'           => __('Wacoal Center Bullet Paragraph Block'),
            'description'     => __('A custom paragraph block.'),
            'render_callback' => 'Wacoal_Center_Para_Block_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'id-alt',
            'keywords'        => array( 'line' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'wacoal-reminder-block',
            'title'           => __('Wacoal Reminder Block'),
            'description'     => __('A custom reminder block.'),
            'render_callback' => 'Wacoal_Reminder_Block_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'id-alt',
            'keywords'        => array( 'line' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'wacoal-tip-block',
            'title'           => __('Wacoal Tip Block'),
            'description'     => __('A custom tip block.'),
            'render_callback' => 'Wacoal_Note_Block_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'id-alt',
            'keywords'        => array( 'line' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'wacoal-product-list-with-shop-button-block',
            'title'           => __('Wacoal Product List Block'),
            'description'     => __('A custom Product List block.'),
            'render_callback' => 'Wacoal_Product_List_Block_Render_callback',
            'category'        => 'wacoal',
            'icon'            => 'list-view',
            'keywords'        => array( 'list-format' ),
            )
        );
    }
}

add_action('acf/init', 'Wacoal_Acf_init');


<?php
/**
 * Common Gutenberg ACF Block register file.
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
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
            'name'              => 'btemptd-text-image-list-format',
            'title'             => __('List - Numbered Image + Text (Left & Right)'),
            'description'       => __('A custom Review List format block.'),
            'render_callback'   => 'Btemptd_Text_Img_List_Format_Render_callback',
            'category'          => 'btemptd',
            'icon'              => 'id-alt',
            'keywords'          => array( 'list-format' ),
            )
        );
        acf_register_block(
            array(
            'name'              => 'btemptd-image-format',
            'title'             => __('Btemptd Text Image Format'),
            'description'       => __('A custom List format block.'),
            'render_callback'   => 'Btemptd_Img_List_Format_Render_callback',
            'category'          => 'btemptd',
            'icon'              => 'id-alt',
            'keywords'          => array( 'list-format' ),
            )
        );
        acf_register_block(
            array(
            'name'              => 'btemptd-list-image-format',
            'title'             => __('Btemptd List with Image Data Format'),
            'description'       => __('A custom List Image format block.'),
            'render_callback'   => 'Btemptd_List_Image_Data_Format_Render_callback',
            'category'          => 'btemptd',
            'icon'              => 'list-view',
            'keywords'          => array( 'list-format' ),
            )
        );
        acf_register_block(
            array(
            'name'              => 'btemptd-para-format',
            'title'             => __('Subhead + Description, Body Intro Paragraph'),
            'description'       => __('A custom Paragraph format block.'),
            'render_callback'   => 'Btemptd_Para_Format_Render_callback',
            'category'          => 'btemptd',
            'icon'              => 'id-alt',
            'keywords'          => array( 'paragraph', 'content' ),
            )
        );
        acf_register_block(
            array(
            'name'              => 'btemptd-four-image-format',
            'title'             => __('Btemptd Four Image Block Format'),
            'description'       => __('A custom Four Image format block.'),
            'render_callback'   => 'Btemptd_Four_Img_Format_Render_callback',
            'category'          => 'btemptd',
            'icon'              => 'id-alt',
            'keywords'          => array( 'image', 'content' ),
            )
        );
        acf_register_block(
            array(
            'name'              => 'btemptd-button-format',
            'title'             => __('Button'),
            'description'       => __('A custom Button format block.'),
            'render_callback'   => 'Btemptd_Button_Format_Render_callback',
            'category'          => 'btemptd',
            'icon'              => 'id-alt',
            'keywords'          => array( 'button', 'content' ),
            )
        );
        acf_register_block(
            array(
            'name'              => 'btemptd-image-text-list-format',
            'title'             => __('Image + Text (Left & Right)'),
            'description'       => __('A custom List format block.'),
            'render_callback'   => 'Btemptd_Image_Text_List_Format_Render_callback',
            'category'          => 'btemptd',
            'icon'              => 'id-alt',
            'keywords'          => array( 'list', 'content' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'btemptd-customer-review-format',
            'title'           => __('Customer Review'),
            'description'     => __('A custom customer review format block.'),
            'render_callback' => 'Btemptd_Customer_Review_Render_callback',
            'category'          => 'btemptd',
            'icon'            => 'archive',
            'keywords'        => array( 'image', 'content' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'btemptd-video',
            'title'           => __('Video 5120x2700'),
            'description'     => __('A custom video block.'),
            'render_callback' => 'Btemptd_Video_Block_Render_callback',
            'category'        => 'btemptd',
            'icon'            => 'format-video',
            'keywords'        => array( 'video' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'btemptd-body-para',
            'title'           => __('Body Outro Paragraph'),
            'description'     => __('A custom Body Outro Paragraph Block'),
            'render_callback' => 'Btemptd_Body_Outro_Para_Block_Render_callback',
            'category'        => 'btemptd',
            'icon'            => 'archive',
            'keywords'        => array('list', 'content'),
            )
        );
        acf_register_block(
            array(
            'name'            => 'btemptd-image',
            'title'           => __('Banner Image'),
            'description'     => __('A custom image block.'),
            'render_callback' => 'Btemptd_Image_Render_callback',
            'category'        => 'btemptd',
            'icon'            => 'format-image',
            'keywords'        => array( 'text', 'link', 'image' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'btemptd-full-bleed-image',
            'title'           => __('Image - Full Bleed'),
            'description'     => __('A custom image block.'),
            'render_callback' => 'Btemptd_Full_Blled_Image_Render_callback',
            'category'        => 'btemptd',
            'icon'            => 'format-image',
            'keywords'        => array( 'text', 'link', 'image' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'btemptd-product-gallery',
            'title'           => __('Product Gallery'),
            'description'     => __('A custom product gallery block.'),
            'render_callback' => 'Btemptd_Gallery_Block_Render_callback',
            'category'        => 'btemptd',
            'icon'            => 'format-gallery',
            'keywords'        => array( 'product-gallery', 'gallery' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'btemptd-video-with-image',
            'title'           => __('Video - Vertical'),
            'description'     => __('A custom video and image block.'),
            'render_callback' => 'Btemptd_Video_Image_Block_Render_callback',
            'category'        => 'btemptd',
            'icon'            => 'format-video',
            'keywords'        => array( 'video' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'btemptd-data-with-image',
            'title'           => __('Image + Body'),
            'description'     => __('A custom Btemptd Image block.'),
            'render_callback' => 'Btemptd_Data_Image_Block_Render_callback',
            'category'        => 'btemptd',
            'icon'            => 'welcome-widgets-menus',
            'keywords'        => array('image' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'btemptd-text-hover-box',
            'title'           => __('Text Hover Box'),
            'description'     => __('A custom Btemptd hover block.'),
            'render_callback' => 'Btemptd_Text_Hover_Block_Render_callback',
            'category'        => 'btemptd',
            'icon'            => 'welcome-widgets-menus',
            'keywords'        => array('image' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'btemptd-image-text-image-block',
            'title'           => __('Image + Text + Image'),
            'description'     => __('A custom Btemptd text image block.'),
            'render_callback' => 'Btemptd_Img_Text_Img_Block_Render_callback',
            'category'        => 'btemptd',
            'icon'            => 'welcome-widgets-menus',
            'keywords'        => array('image' ),
            )
        );
        acf_register_block(
            array(
            'name'            => 'btemptd-image-text-subhead-list-block',
            'title'           => __('List - Image + Italics Title + Subhead + Body (Left & Right)'),
            'description'     => __('A custom Btemptd list block.'),
            'render_callback' => 'Btemptd_Img_Text_Subhead_List_Block_Render_callback',
            'category'        => 'btemptd',
            'icon'            => 'welcome-widgets-menus',
            'keywords'        => array('image' ),
            )
        );
        acf_register_block_type(
            array(
            'name'            => 'btemptd-Numbered-list-block',
            'title'           => __('Numbered Image + Text (Left & Right)'),
            'description'     => __('A custom Btemptd list block.'),
            'render_callback' => 'Btemptd_Numbered_List_Block_Render_callback',
            'category'        => 'btemptd',
            'icon'            => 'welcome-widgets-menus',
            'keywords'        => array('image' ),
            )
        );
        acf_register_block_type(
            array(
            'name'            => 'btemptd-question-a',
            'title'           => __('Questions A'),
            'description'     => __('A custom Btemptd list block.'),
            'render_callback' => 'Btemptd_Qustion_A_Block_Render_callback',
            'category'        => 'btemptd',
            'icon'            => 'welcome-widgets-menus',
            'keywords'        => array('list', 'content'),
            )
        );
        acf_register_block_type(
            array(
            'name'            => 'btemptd-question-b',
            'title'           => __('Questions B'),
            'description'     => __('A custom Btemptd list block.'),
            'render_callback' => 'Btemptd_Qustion_B_Block_Render_callback',
            'category'        => 'btemptd',
            'icon'            => 'welcome-widgets-menus',
            'keywords'        => array('list', 'content', 'image'),
            )
        );
        acf_register_block_type(
            array(
            'name'            => 'btemptd-to',
            'title'           => __('Tempt\'d To'),
            'description'     => __('A custom Btemptd list block.'),
            'render_callback' => 'Btemptd_temptd_to_Block_Render_callback',
            'category'        => 'btemptd',
            'icon'            => 'id-alt',
            'keywords'        => array('text', 'content'),
            )
        );


    }
}

add_action('acf/init', 'Wacoal_Acf_init');


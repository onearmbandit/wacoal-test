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

        acf_register_block_type(
            array(
            'name'              => 'btemptd-text-image-list-format',
            'title'             => __('Btemptd Review List Format'),
            'description'       => __('A custom Review List format block.'),
            'render_callback'   => 'Btemptd_Text_Img_List_Format_Render_callback',
            'category'          => 'btemptd',
            'icon'              => 'id-alt',
            'keywords'          => array( 'list-format' ),
            )
        );
        acf_register_block_type(
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
        acf_register_block_type(
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
        acf_register_block_type(
            array(
            'name'              => 'btemptd-para-format',
            'title'             => __('Btemptd Paragraph Block Format'),
            'description'       => __('A custom Paragraph format block.'),
            'render_callback'   => 'Btemptd_Para_Format_Render_callback',
            'category'          => 'btemptd',
            'icon'              => 'id-alt',
            'keywords'          => array( 'paragraph', 'content' ),
            )
        );
        acf_register_block_type(
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
        acf_register_block_type(
            array(
            'name'              => 'btemptd-button-format',
            'title'             => __('Btemptd Button Block Format'),
            'description'       => __('A custom Button format block.'),
            'render_callback'   => 'Btemptd_Button_Format_Render_callback',
            'category'          => 'btemptd',
            'icon'              => 'id-alt',
            'keywords'          => array( 'button', 'content' ),
            )
        );


    }
}

add_action('acf/init', 'Wacoal_Acf_init');


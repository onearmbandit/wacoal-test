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
            'description'       => __('A custom List format block.'),
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


    }
}

add_action('acf/init', 'Wacoal_Acf_init');


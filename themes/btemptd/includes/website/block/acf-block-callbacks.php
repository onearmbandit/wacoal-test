<?php
/**
 * Common Gutenberg ACF Block callback functions file.
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */



/**
 * Callback function for review list block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Btemptd_Text_Img_List_Format_Render_callback( $block )
{
    $block_lists       =  get_field('reviews');

    $shortcode_template   = '/template-parts/block/btemptd-list-format.php';

    if (! empty($block_lists) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Btemptd Reviews Lists:</u></h4>
            <span style="color:red">Empty Btemptd Reviews Lists Block</span>
            <?php
        }
    }
}
/**
 * Callback function for text image block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Btemptd_Img_List_Format_Render_callback( $block )
{

    $cta_1_text  = get_field('review_link_1');
    $cta_2_text  = get_field('review_link_2');
    $block_image_id = get_field('image');
    $block_image_array = wp_get_attachment_image_src($block_image_id, 'full');
    $block_image_alt = Btemptd_Get_Image_alt($block_image_id, 'Block Image');
    $block_image_url = Btemptd_Get_Image($block_image_array);

    $shortcode_template   = '/template-parts/block/btemptd-image-format.php';

    if (! empty($cta_1_text || $cta_2_text) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Btemptd Image Block:</u></h4>
            <span style="color:red">Empty Btemptd Image Block</span>
            <?php
        }
    }
}

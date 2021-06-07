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
    $block_lists        =  get_field('reviews');
    $shortcode_template = '/template-parts/block/btemptd-list-format.php';

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

    $review_format     = get_field('select_review_format');
    $cta_1_text        = get_field('review_link_1');
    $cta_1_link        = get_field('review_link_1_url');
    $cta_2_text        = get_field('review_link_2');
    $cta_2_link        = get_field('review_link_2_url');
    $block_image_id    = get_field('image');
    $block_image_array = wp_get_attachment_image_src($block_image_id, 'full');
    $block_image_alt   = Btemptd_Get_Image_alt($block_image_id, 'Block Image');
    $block_image_url   = Btemptd_Get_Image($block_image_array);

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

/**
 * Callback function for image list block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Btemptd_List_Image_Data_Format_Render_callback( $block )
{
    $list_type  = get_field('list_type');

    if ($list_type == 'simple_data') {

        $shortcode_template = '/template-parts/block/btemptd-image-list-format.php';
        $list_data          = get_field('content_with_title');
        $list_block_data    = $list_data['list_image_data'];
        $add_button         = $list_data['add_button'];

        if ($add_button == true) {

            $button_label = $list_data['button_label'];
            $button_url   = $list_data['button_url'];

        }
    } elseif ($list_type == 'quotes_data') {

        $shortcode_template = '/template-parts/block/btemptd-quotes-list-format.php';
        $list_data          = get_field('content_with_quotes');

    } elseif ($list_type == 'review_data') {

        $shortcode_template = '/template-parts/block/btemptd-review-list-format.php';
        $list_data          = get_field('content_with_customer_review');

    } elseif ($list_type == 'bordered_data') {

        $shortcode_template = '/template-parts/block/btemptd-bordered-list-format.php';
        $list_data          = get_field('content_with_bordered_text_and_image');

    }

    if (! empty($list_type) ) {

        include locate_template($shortcode_template);

    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Btemptd List Block:</u></h4>
            <span style="color:red">Empty Btemptd List Block</span>
            <?php
        }
    }
}

/**
 * Callback function for paragraph block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Btemptd_Para_Format_Render_callback( $block )
{
    $block_fields = get_field('group');
    $para_type    =  $block_fields['select_type'];
    $content      = $block_fields['content'];

    $shortcode_template   = '/template-parts/block/btemptd-para-block.php';

    if (! empty($para_type) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Btemptd Paragraph Block:</u></h4>
            <span style="color:red">Empty Btemptd Paragraph Block</span>
            <?php
        }
    }
}

/**
 * Callback function for four image block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Btemptd_Four_Img_Format_Render_callback( $block )
{
    $block_images    = get_field('four_images');

    $shortcode_template   = '/template-parts/block/btemptd-four-image-block.php';
    if (! empty($block_images) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Btemptd Four Image Block:</u></h4>
            <span style="color:red">Empty Btemptd Four Image Block</span>
            <?php
        }
    }
}

/**
 * Callback function for button block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Btemptd_Button_Format_Render_callback( $block )
{
    $button_fields = get_field('add_button');
    $button_label  = $button_fields['button_label'];
    $button_url    = $button_fields['button_url'];

    $shortcode_template   = '/template-parts/block/btemptd-button-block.php';

    if (! empty($button_label) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Btemptd Button Block:</u></h4>
            <span style="color:red">Empty Btemptd Button Block</span>
            <?php
        }
    }
}

/**
 * Callback function for text+image list block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Btemptd_Image_Text_List_Format_Render_callback( $block )
{
    $block_lists = get_field('list_data');

    $shortcode_template  = '/template-parts/block/btemptd-image-text-list.php';

    if ($block_lists && !empty($block_lists)) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Btemptd List Block</u></h4>
            <span style="color:red">Empty List Block</span>
            <?php
        }
    }
}

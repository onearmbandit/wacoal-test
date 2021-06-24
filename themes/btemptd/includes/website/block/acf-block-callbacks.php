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

    if (! empty($block_lists) ) {

        if (is_admin() ) {
            Btemptd_WP_Backend_edit('List - Numbered Image + Text (Left & Right)');
        } else {
            $shortcode_template = '/template-parts/block/btemptd-list-format.php';
            include locate_template($shortcode_template);
        }

    } else {
        if (is_admin() ) {
            ?>
            <h4><u>List - Numbered Image + Text (Left & Right)</u></h4>
            <span style="color:red">Empty Block</span>
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

    if (! empty($cta_1_text || $cta_2_text) ) {

        if (is_admin() ) {
            Btemptd_WP_Backend_edit('Btemptd Image Block');
        } else {
            $shortcode_template   = '/template-parts/block/btemptd-image-format.php';
            include locate_template($shortcode_template);
        }

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

        if (is_admin() ) {
            Btemptd_WP_Backend_edit('Btemptd List Block');
        } else {
            include locate_template($shortcode_template);
        }

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

    if (! empty($para_type) ) {

        if (is_admin() ) {
            Btemptd_WP_Backend_edit('Subhead + Description, Body Intro Paragraph');
        } else {
            $shortcode_template   = '/template-parts/block/btemptd-para-block.php';
            include locate_template($shortcode_template);
        }

    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Subhead + Description, Body Intro Paragraph:</u></h4>
            <span style="color:red">Empty Block</span>
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

    if (! empty($block_images) ) {

        if (is_admin() ) {
            Btemptd_WP_Backend_edit('Btemptd Four Image Block');
        } else {
            $shortcode_template   = '/template-parts/block/btemptd-four-image-block.php';
            include locate_template($shortcode_template);
        }

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

    if (! empty($button_label) ) {

        if (is_admin() ) {
            Btemptd_WP_Backend_edit('Button');
        } else {
            $shortcode_template   = '/template-parts/block/btemptd-button-block.php';
            include locate_template($shortcode_template);
        }

    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Button:</u></h4>
            <span style="color:red">Empty Block</span>
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

    if ($block_lists && !empty($block_lists)) {

        if (is_admin() ) {
            Btemptd_WP_Backend_edit('Image + Text (Left & Right)');
        } else {
            $shortcode_template  = '/template-parts/block/btemptd-image-text-list.php';
            include locate_template($shortcode_template);
        }

    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Image + Text (Left & Right)</u></h4>
            <span style="color:red">Empty Block</span>
            <?php
        }
    }
}

/**
 * Callback function for video block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Btemptd_Video_Block_Render_callback( $block )
{

    $video_fields_option = get_field('video_option');
    $video_caption       = get_field('video_caption');

    if ($video_fields_option == 'embed_video') {
        $video_field = get_field('embed_video');
    } elseif ($video_fields_option == 'video_file') {
        $video_field = get_field('select_or_add_video');
    } elseif ($video_fields_option == 'external_url') {
        $video_field = get_field('insert_external_video_url');
    }

    if (! empty($video_fields_option) ) {

        if (is_admin() ) {
            Btemptd_WP_Backend_edit('Video 5120x2700');
        } else {
            $shortcode_template  = '/template-parts/block/btemptd-video.php';
            include locate_template($shortcode_template);
        }

    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Video 5120x2700:</u></h4>
            <span style="color:red">Empty Block</span>
            <?php
        }
    }
}

/**
 * Callback function for body Outro block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Btemptd_Body_Outro_Para_Block_Render_callback( $block )
{
    $para_content   = get_field('paragraph_content');

    if ($para_content) {

        if (is_admin() ) {
            Btemptd_WP_Backend_edit('Body Outro Paragraph');
        } else {
            $shortcode_template  = '/template-parts/block/btemptd-body-outro-block.php';
            include locate_template($shortcode_template);
        }

    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Body Outro Paragraph</u></h4>
            <span style="color:red">Empty Block</span>
            <?php
        }
    }
}

/**
 * Callback function for text hover block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Btemptd_Text_Hover_Block_Render_callback( $block )
{
    $hover_box_content   = get_field('hover_box_content');

    if ($hover_box_content) {

        if (is_admin() ) {
            Btemptd_WP_Backend_edit('Text Hover Box');
        } else {
            $shortcode_template  = '/template-parts/block/btemptd-text-hover-block.php';
            include locate_template($shortcode_template);
        }

    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Text Hover Box</u></h4>
            <span style="color:red">Empty Block</span>
            <?php
        }
    }
}

/**
 * Callback function for banner image block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Btemptd_Image_Render_callback( $block )
{
    $img_type  = get_field('select_image_type');
    $img_link  = get_field('image_link');
    $new_tab   = get_field('open_in_new_tab');

    if (! empty($img_type) && $img_type ) {
        $block_image_id    = get_field('image');
        $block_image_array = wp_get_attachment_image_src($block_image_id, 'full');
        $block_image_alt   = Btemptd_Get_Image_alt($block_image_id, 'Block Image');
        $block_image_url   = Btemptd_Get_image($block_image_array);

        if (is_admin() ) {
            Btemptd_WP_Backend_edit('Banner Image');
        } else {
            $shortcode_template  = '/template-parts/block/btemptd-banner-img.php';
            include locate_template($shortcode_template);
        }

    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Banner Image</u></h4>
            <span style="color:red">Empty Block</span>
            <?php
        }
    }
}

/**
 * Callback function for banner full bleed image block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Btemptd_Full_Blled_Image_Render_callback( $block )
{
    $block_image_id    = get_field('image');

    if (! empty($block_image_id) ) {
        $block_image_array = wp_get_attachment_image_src($block_image_id, 'full');
        $block_image_alt   = Btemptd_Get_Image_alt($block_image_id, 'Block Image');
        $block_image_url   = Btemptd_Get_image($block_image_array);

        $img_link       = get_field('image_link');
        $image_caption  = get_field('image_caption');
        $new_tab        = get_field('open_in_new_tab');

        if (is_admin() ) {
            Btemptd_WP_Backend_edit('Image - Full Bleed');
        } else {
            $shortcode_template  = '/template-parts/block/btemptd-banner-full-bleed-img.php';
            include locate_template($shortcode_template);
        }

    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Image - Full Bleed</u></h4>
            <span style="color:red">Empty Block</span>
            <?php
        }
    }
}

/**
 * Callback function for banner image block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Btemptd_Gallery_Block_Render_callback( $block )
{
    $fullGallery  = get_field('gallery');

    if (! empty($fullGallery[0]['image']) && $fullGallery[0]['image'] ) {
        if (is_admin() ) {
            Btemptd_WP_Backend_edit('Product Gallery');
        } else {
            $shortcode_template  = '/template-parts/block/btemptd-product-gallery.php';
            include locate_template($shortcode_template);
        }

    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Product Gallery</u></h4>
            <span style="color:red">Empty Block</span>
            <?php
        }
    }
}

/**
 * Callback function for banner image block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Btemptd_Customer_Review_Render_callback( $block )
{
    $review_text  = get_field('review_text');

    if (! empty($review_text) && $review_text ) {
        if (is_admin() ) {
            Btemptd_WP_Backend_edit('Customer Review');
        } else {
            $shortcode_template  = '/template-parts/block/btemptd-customer-review.php';
            include locate_template($shortcode_template);
        }

    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Customer Review</u></h4>
            <span style="color:red">Empty Block</span>
            <?php
        }
    }
}

/**
 * Callback function for banner image block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Btemptd_Video_Image_Block_Render_callback( $block )
{
    $video_type    = !empty(get_field('select_video_type')) ? get_field('select_video_type') : 'video_with_image';
    $video_option  = get_field('video_option');
    $image  = get_field('image');

    if ($video_option !== 'select_option') {

        if (is_admin() ) {
            Btemptd_WP_Backend_edit('Video - Vertical');
        } else {
            $shortcode_template  = '/template-parts/block/btemptd-verticle-video-img.php';
            include locate_template($shortcode_template);
        }

    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Video - Vertical</u></h4>
            <span style="color:red">Empty Block</span>
            <?php
        }
    }
}

/**
 * Callback function for banner image block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Btemptd_Data_Image_Block_Render_callback( $block )
{
    $image_id    = get_field('image');
    $paragraph_content    = get_field('paragraph_content');

    if (! empty($image_id) && ! empty($paragraph_content) ) {

        if (is_admin() ) {
            Btemptd_WP_Backend_edit('Image + Body');
        } else {
            $shortcode_template  = '/template-parts/block/btemptd-data-image.php';
            include locate_template($shortcode_template);
        }

    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Image + Body</u></h4>
            <span style="color:red">Empty Block</span>
            <?php
        }
    }
}

/**
 * Callback function for banner image block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Btemptd_Img_Text_Subhead_List_Block_Render_callback( $block )
{
    $list_data  = get_field('list_data');

    if (! empty($list_data[0]['image']) ) {
        if (is_admin() ) {
            Btemptd_WP_Backend_edit('List - Image + Italics Title + Subhead + Body (Left & Right)');
        } else {
            $shortcode_template  = '/template-parts/block/btemptd-image-text-subhead-list.php';
            include locate_template($shortcode_template);
        }

    } else {
        if (is_admin() ) {
            ?>
            <h4><u>List - Image + Italics Title + Subhead + Body (Left & Right)</u></h4>
            <span style="color:red">Empty Block</span>
            <?php
        }
    }
}

/**
 * Callback function for banner image block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Btemptd_Numbered_List_Block_Render_callback( $block )
{
    $list_data  = get_field('list_data');

    if (! empty($list_data[0]['image']) ) {
        if (is_admin() ) {
            Btemptd_WP_Backend_edit('Numbered Image + Text (Left & Right)');
        } else {
            $shortcode_template  = '/template-parts/block/btemptd-numbered-list.php';
            include locate_template($shortcode_template);
        }
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Numbered Image + Text (Left & Right)</u></h4>
            <span style="color:red">Empty Block</span>
            <?php
        }
    }
}

/**
 * Callback function for banner image block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Btemptd_Img_Text_Img_Block_Render_callback( $block )
{
    $title  = get_field('title');
    $left_image_id  = get_field('left_image');
    $right_image_id  = get_field('right_image');

    if (! empty($title) || ! empty($left_image_id) || ! empty($right_image_id) ) {
        if (is_admin() ) {
            Btemptd_WP_Backend_edit('Image + Text + Image');
        } else {
            $shortcode_template  = '/template-parts/block/btemptd-image-text-image.php';
            include locate_template($shortcode_template);
        }
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Image + Text + Image</u></h4>
            <span style="color:red">Empty Block</span>
            <?php
        }
    }
}

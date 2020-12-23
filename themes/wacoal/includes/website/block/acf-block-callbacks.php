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
 * Callback function for image block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Wacoal_Data_Image_Block_Render_callback( $block )
{
    $block_fields       = get_field('data_with_image');
    $block_content      = ! empty($block_fields['paragraph_content']) ? $block_fields['paragraph_content'] : '';
    $block_image_id     = $block_fields['image'];
    $block_image_array  = wp_get_attachment_image_src($block_image_id, 'full');
    $block_image_alt    = Wacoal_Get_Image_alt($block_image_id, 'Block Image');
    $block_image_url    = Wacoal_Get_image($block_image_array);
    $block_image_link  = $block_fields['image_link'];
    $caption            = $block_fields['image_caption'];
    $separator          = $block_fields['enable_separator'];

    $shortcode_template = 'template-parts/block/wacoal-data-image.php';

    if (! empty($block_content) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Wacoal Text Image:</u></h4>
            <span style="color:red">Empty Wacoal Block</span>
            <?php
        }
    }
}

/**
 * Callback function for testimonial block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Wacoal_Quotes_Block_Render_callback( $block )
{
    $quotes_type  = get_field('select_quotes_type');

    if ($quotes_type == 'quotes_with_progress_bar') {

        $quotes_progress_bar_data = get_field('quotes_with_progress_bar');
        $quotes_block_title = $quotes_progress_bar_data['quotes_block_title'];
        $quotes_para_content = $quotes_progress_bar_data['quotes_block_paragraph_content'];
        $quotes_text_1 = $quotes_progress_bar_data['quotes_text_1'];
        $person_name_1 = $quotes_progress_bar_data['quote_1_person_name'];
        $progress_bar = $quotes_progress_bar_data['progress_bar'];
        $quotes_text_2 = $quotes_progress_bar_data['quotes_text_2'];
        $person_name_2 = $quotes_progress_bar_data['quote_2_person_name'];

        $shortcode_template = 'template-parts/block/wacoal-progress-bar-quotes.php';

    } elseif ($quotes_type == 'quotes_with_text') {

        $quotes_with_text_data = get_field('quotes_with_text');
        $quotes_block_title = $quotes_with_text_data['quotes_block_title'];
        $quotes_para_content = $quotes_with_text_data['quotes_block_content'];
        $quotes_text = $quotes_with_text_data['quotes_text'];
        $person_name = $quotes_with_text_data['person_name'];

        $shortcode_template = 'template-parts/block/wacoal-quotes-with-text.php';

    } else {
        $quotes_image_id    = get_field('image');
        $quotes_image_array = wp_get_attachment_image_src($quotes_image_id, 'full');
        $quotes_image_alt   = Wacoal_Get_Image_alt($quotes_image_id, 'Quote Image');
        $quotes_image_url   = Wacoal_Get_image($quotes_image_array);
        $quotes_image_link  = get_field('image_link');
        $quote_text         = get_field('quote_text');

        $shortcode_template = 'template-parts/block/wacoal-quotes.php';

    }

    if (! empty($quotes_type) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Wacoal Quotes:</u></h4>
            <span style="color:red">Empty Wacoal Quotes Block</span>
            <?php
        }
    }
}

/**
 * Callback function for gallery carousel block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Wacoal_Image_Carousel_Render_callback( $block )
{
    $slider_images     = get_field('slider');
    $shortcode_template = 'template-parts/block/wacoal-image-carousel.php';

    if (! empty($slider_images) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Slider:</u></h4>
            <span style="color:red">Empty Wacoal Image Carousel Block</span>
            <?php
        }
    }
}

/**
 * Callback function for question and answer block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Wacoal_Question_Answer_Render_callback( $block )
{

    $block_qna = get_field('question_answer');
    $block_image_id = get_field('image');
    $block_image_array = wp_get_attachment_image_src($block_image_id, 'full');
    $block_image_alt   = Wacoal_Get_Image_alt($block_image_id, 'Block Image');
    $block_image_url   = Wacoal_Get_image($block_image_array);
    $block_image_link  = get_field('image_link');
    $image_caption     = get_field('caption');

    $shortcode_template = 'template-parts/block/wacoal-question-answer.php';

    if (! empty($block_qna) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Question & Answer:</u></h4>
            <span style="color:red">Empty Wacoal Q&A Block</span>
            <?php
        }
    }
}

/**
 * Callback function for text image header list block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Wacoal_Text_Img_List_Format_Render_callback( $block )
{
    $block_lists       = get_field('lists');
    $block_heading      = ! empty(get_field('heading')) ? get_field('heading') : '';
    $block_subheading   = ! empty(get_field('short_description')) ? get_field('short_description') : '';

    $shortcode_template   = '/template-parts/block/wacoal-list-format.php';

    if (! empty($block_lists) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Wacoal Lists:</u></h4>
            <span style="color:red">Empty Wacoal Text Image Lists Block</span>
            <?php
        }
    }
}

/**
 * Callback function for text only header list block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Wacoal_Text_Only_List_Format_Render_callback($block)
{
    $block_lists = get_field('list');
    $shortcode_template = '/template-parts/block/wacoal-text-only-list-format.php';

    if (!empty($block_lists)) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin()) {
            ?>
            <h4><u>Wacoal Lists:</u></h4>
            <span style="color:red">Empty Wacoal Text Only Lists Block</span>
            <?php
        }
    }
}

/**
 * Callback function for product gallery block
 *
 * @param $block Block.
 *
 * @return void
 */
function Wacoal_Gallery_Block_Render_callback( $block )
{

    $product_fields       = get_field('gallery');
    $new_tab              = get_field('open_in_new_tab');
    $shortcode_template   = '/template-parts/block/wacoal-product-gallery.php';

    if (! empty($product_fields) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Products List:</u></h4>
            <span style="color:red">Empty Wacoal Product List Block</span>
            <?php
        }
    }

}

/**
 * Callback function for subhead with description block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Wacoal_Subhead_Description_Render_callback( $block )
{
    $subhead_text = get_field('title_or_subhead');
    $desc_text  = get_field('description');

    $shortcode_template  = '/template-parts/block/wacoal-title-desc.php';

    if (! empty($subhead_text) || ! empty($desc_text) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Subhead with Description</u></h4>
            <span style="color:red">Empty Subhead with Description Block</span>
            <?php
        }
    }
}

/**
 * Callback function for image block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Wacoal_Image_Render_callback( $block )
{
    $block_image_id     = get_field('image');
    $block_image_array  = wp_get_attachment_image_src($block_image_id, 'full');
    $block_image_alt    = Wacoal_Get_Image_alt($block_image_id, 'Block Image');
    $block_image_url    = Wacoal_Get_image($block_image_array);
    $block_image_link   = get_field('image_link');
    $caption            = get_field('image_caption');
    $shortcode_template = 'template-parts/block/wacoal-image.php';

    if (! empty($block_image_id) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Wacoal Image:</u></h4>
            <span style="color:red">Empty Wacoal Image Block</span>
            <?php
        }
    }
}

/**
 * Callback function for size chart table block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Wacoal_Size_Chart_Table_Block_Render_callback( $block )
{
    $chart_images       = get_field('size_chart');
    $shortcode_template = 'template-parts/block/wacoal-size-chart-table.php';

    if (! empty($chart_images) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Wacoal Image:</u></h4>
            <span style="color:red">Empty Wacoal Size Chart Table Block</span>
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
function Wacoal_Video_Block_Render_callback( $block )
{

    $video_fields_option = get_field('video');
    $video_caption       = get_field('video_caption');
    $shortcode_template  = '/template-parts/block/wacoal-video.php';

    if ($video_fields_option == 'embed_video') {
        $video_field = get_field('embed_video');
    } elseif ($video_fields_option == 'video_file') {
        $video_field = get_field('select_or_add_video');
    } elseif ($video_fields_option == 'external_url') {
        $video_field = get_field('insert_external_video_url');
    }

    if (! empty($video_fields_option) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Wacoal Video:</u></h4>
            <span style="color:red">Empty Wacoal Video Block</span>
            <?php
        }
    }
}

/**
 * Callback function for video with image block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Wacoal_Video_Image_Block_Render_callback( $block )
{
    $video_fields_option = get_field('video');
    $block_image_id      = get_field('add_image');
    $video_caption       = get_field('video_caption');

    if ($block_image_id && !empty($block_image_id)) {
        $block_image_array = wp_get_attachment_image_src($block_image_id, 'full');
        $block_image_alt   = Wacoal_Get_Image_alt($block_image_id, 'Block Image');
        $block_image_url   = Wacoal_Get_image($block_image_array);
        $block_image_link  = get_field('image_link');
        $image_caption     = get_field('image_caption');
    }

    if ($video_fields_option == 'embed_video') {
        $video_field = get_field('embed_video');
    } elseif ($video_fields_option == 'video_file') {
        $video_field = get_field('select_or_add_video');
    } elseif ($video_fields_option == 'external_url') {
        $video_field = get_field('insert_external_video_url');
    }

    $shortcode_template  = '/template-parts/block/wacoal-video-image.php';

    if (! empty($video_fields_option) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Wacoal Video:</u></h4>
            <span style="color:red">Empty Wacoal Video Image Block</span>
            <?php
        }
    }

}

/**
 * Callback function for horizontal line block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Wacoal_Horizontal_Block_Render_callback( $block )
{
    $shortcode_template  = '/template-parts/block/wacoal-horizontal-line.php';
    include locate_template($shortcode_template);

    if (is_admin() ) {
        ?>
            <h4><u>Wacoal Horizontal Line:</u></h4>
        <?php
    }
}

/**
 * Callback function for center paragraph block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Wacoal_Bullet_Content_Block_Render_callback( $block )
{

    $shortcode_template = '/template-parts/block/wacoal-bullet-content.php';
    $para_content       = get_field('add_text');

    if (! empty($para_content) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Wacoal Bullet Point Content:</u></h4>
            <span style="color:red">Empty Wacoal Bullet Point Content Block</span>
            <?php
        }
    }
}

/**
 * Callback function for reminder block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Wacoal_Reminder_Block_Render_callback( $block )
{

    $reminder_symbol_id         = get_field('add_reminder_symbol');
    $reminder_content_desktop   = get_field('add_reminder_text');
    $reminder_content_mobile    = get_field('reminder_text_for_mobile');
    if ($reminder_symbol_id && !empty($reminder_symbol_id)) {
        $reminder_image_array   = wp_get_attachment_image_src($reminder_symbol_id, 'full');
        $reminder_image_alt     = Wacoal_Get_Image_alt($reminder_symbol_id, 'Reminder block Image');
        $reminder_image_url     = Wacoal_Get_image($reminder_image_array);
    }

    $shortcode_template = '/template-parts/block/wacoal-reminder.php';

    if (! empty($reminder_symbol_id) || !empty($reminder_content) || !empty($reminder_content_mobile) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Wacoal Reminder:</u></h4>
            <span style="color:red">Empty Wacoal reminder Block</span>
            <?php
        }
    }
}

/**
 * Callback function for tip block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Wacoal_Note_Block_Render_callback( $block )
{

    $tip_text = get_field('add_text');

    $shortcode_template = '/template-parts/block/wacoal-tip.php';

    if ($tip_text && ! empty($tip_text) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Wacoal Note:</u></h4>
            <span style="color:red">Empty Wacoal Note Block</span>
            <?php
        }
    }
}

/**
 * Callback function for product list block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Wacoal_Product_List_Block_Render_callback( $block )
{

    $block_fields = get_field('product_list');

    $shortcode_template = '/template-parts/block/wacoal-product-list.php';

    if ($block_fields && ! empty($block_fields)) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Wacoal Product List:</u></h4>
            <span style="color:red">Empty Wacoal Product List Block</span>
            <?php
        }
    }
}

/**
 * Callback function for sibgle product block
 *
 * @param $block Block.
 *
 * @return void
 */
function Wacoal_Single_Product_Block_Render_callback( $block )
{

    $product_fields       = get_field('product');
    $new_tab              = get_field('open_in_new_tab');
    $shortcode_template   = '/template-parts/block/wacoal-single-product.php';

    if (! empty($product_fields) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Single Product</u></h4>
            <span style="color:red">Empty Wacoal Product Block</span>
            <?php
        }
    }

}

/**
 * Callback function for center paragraph block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function Wacoal_Center_Para_Render_callback( $block )
{
    $content_text  = get_field('content');

    $shortcode_template  = '/template-parts/block/wacoal-center-para.php';

    if (! empty($content_text) && $content_text ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Wacoal Center Paragraph</u></h4>
            <span style="color:red">Empty Center Paragraph Block</span>
            <?php
        }
    }
}

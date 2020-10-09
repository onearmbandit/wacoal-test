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
function wacoal_data_image_block_render_callback( $block )
{
    $block_fields       = get_field('data_with_image');
    $block_content      = ! empty($block_fields['paragraph_content']) ? $block_fields['paragraph_content'] : '';
    $block_image_id     = $block_fields['image'];
    $block_image_array  = wp_get_attachment_image_src($block_image_id, 'full');
    $block_image_alt    = wacoal_get_image_alt($block_image_id, 'Block Image');
    $block_image_url    = Wacoal_Get_image($block_image_array);
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
function wacoal_quotes_block_render_callback( $block )
{
    $quotes_image_id    = get_field('image');
    $quotes_image_array = wp_get_attachment_image_src($quotes_image_id, 'full');
    $quotes_image_alt   = wacoal_get_image_alt($quotes_image_id, 'Quote Image');
    $quotes_image_url   = Wacoal_Get_image($quotes_image_array);
    $quote_text  = get_field('quote_text');

    $shortcode_template = 'template-parts/block/wacoal-quotes.php';

    if (! empty($quote_text) ) {
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
function wacoal_image_carousel_render_callback( $block )
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
function wacoal_question_answer_render_callback( $block )
{

    $block_qna = get_field('question_answer');
    $block_image_id = get_field('image');
    $block_image_array = wp_get_attachment_image_src($block_image_id, 'full');
    $block_image_alt   = wacoal_get_image_alt($block_image_id, 'Block Image');
    $block_image_url   = Wacoal_Get_image($block_image_array);
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
function wacoal_text_img_list_format_render_callback( $block )
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
 * Callback function for text image header list block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function wacoal_text_only_list_format_render_callback( $block )
{
    $block_lists       = get_field('list');
    $shortcode_template   = '/template-parts/block/wacoal-text-only-list-format.php';

    if (! empty($block_lists) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
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
 * @param  [type] $block Block.
 * @return void
 */
function wacoal_gallery_block_render_callback( $block )
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
function wacoal_subhead_description_render_callback( $block )
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
function wacoal_image_render_callback( $block )
{
    $block_image_id     = get_field('image');
    $block_image_array  = wp_get_attachment_image_src($block_image_id, 'full');
    $block_image_alt    = wacoal_get_image_alt($block_image_id, 'Block Image');
    $block_image_url    = Wacoal_Get_image($block_image_array);
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
function wacoal_size_chart_table_block_render_callback( $block )
{
    $chart_images     = get_field('size_chart');

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
 * Callback function for size chart block
 *
 * @param  [type] $block Block.
 * @return void
 */
function wacoal_size_chart_block_render_callback( $block )
{
    global $wp, $post;

    $table_heading = get_field('table_name');
    $table = get_field('table');
    $table_data_header = $table['header'];
    $table_data = $table['body'];
    $default_template   = '/template-parts/block/wacoal-size-chart-table.php';

    include get_theme_file_path($default_template);
}

/**
 * Callback function for staic links block
 *
 * @param  [type] $block Block.
 * @return void
 */
function wacoal_static_link_render_callback( $block )
{

    $block_fields = get_field('static_section');
    $block_image_id  = $block_fields['image'];
    $block_image_url = wp_get_attachment_image_src($block_image_id, 'full');
    $shortcode_template  = '/template-parts/block/wacoal-static-links.php';

    if (! empty($block_image_id) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Wacoal 101 Static Links:</u></h4>
            <span style="color:red">Empty Wacoal 101 Static Links Block</span>
            <?php
        }
    }

}

/**
 * Callback function for video block
 *
 * @param  [type] $block Block.
 * @return void
 */
function wacoal_video_block_render_callback( $block )
{

    $video_fields_option = get_field('video');
    $video_caption = get_field('video_caption');

    if($video_fields_option == 'embed_video') {
        $video_field = get_field('embed_video');
    }
    elseif($video_fields_option == 'video_file') {
        $video_field = get_field('select_or_add_video');
    }
    elseif($video_fields_option == 'external_url') {
        $video_field = get_field('insert_external_video_url');
    }
    $shortcode_template  = '/template-parts/block/wacoal-video.php';

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
 * @param  [type] $block Block.
 * @return void
 */
function wacoal_video_image_block_render_callback( $block )
{

    $video_fields_option = get_field('video');
    $block_image_id = get_field('add_image');
    $video_caption = get_field('video_caption');

    if ($block_image_id && !empty($block_image_id)) {
        $block_image_array = wp_get_attachment_image_src($block_image_id, 'full');
        $block_image_alt = wacoal_get_image_alt($block_image_id, 'Block Image');
        $block_image_url = Wacoal_Get_image($block_image_array);
        $image_caption = get_field('image_caption');
    }

    if($video_fields_option == 'embed_video') {
        $video_field = get_field('embed_video');
    }
    elseif($video_fields_option == 'video_file') {
        $video_field = get_field('select_or_add_video');
    }
    elseif($video_fields_option == 'external_url') {
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

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
function wacoal_testimonial_block_render_callback( $block )
{
    $testimonial_image_id    = get_field('image');
    $testimonial_image_array = wp_get_attachment_image_src($testimonial_image_id, 'full');
    $testimonial_image_alt   = wacoal_get_image_alt($testimonial_image_id, 'Quote Image');
    $testimonial_image_url   = Wacoal_Get_image($testimonial_image_array);
    $testimonial_quote_text  = get_field('quote_text');

    $shortcode_template = 'template-parts/block/wacoal-testimonial.php';

    if (! empty($testimonial_quote_text) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Wacoal Testimonial:</u></h4>
            <span style="color:red">Empty Wacoal Testimonial Block</span>
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
    global $wp, $post;

    $block_fields = get_field('static_section');
    $block_image_id  = $block_fields['image'];
    $block_image_url = wp_get_attachment_image_src($block_image_id, 'full');
    $default_template  = '/template-parts/block/wacoal-static-links.php';

    include get_theme_file_path($default_template);

}

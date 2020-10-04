<?php
/**
 * Common Gutenberg ACF Block callback functions file.
 *
 * @package Wacoal
 */


/**
 * Callback function for image block
 *
 * @param  [type] $block Block.
 * @return void
 */
function wacoal_data_image_block_render_callback( $block )
{
    global $wp, $post;

    $block_fields       = get_field('data_with_image');
    $block_content      = ! empty($block_fields['paragraph_content']) ? $block_fields['paragraph_content'] : '';
    $block_image_id        = $block_fields['image'];
    $block_image_url = wp_get_attachment_image_src($block_image_id, 'full');
    $caption            = $block_fields['image_caption'];
    $separator          = $block_fields['enable_separator'];
    $default_template   = '/template-parts/block/wacoal-data-image.php';

    include get_theme_file_path($default_template);
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
 * Callback function for product gallery block
 *
 * @param  [type] $block Block.
 * @return void
 */
function wacoal_gallery_block_render_callback( $block )
{
    global $wp, $post;

    $block_fields       = get_field('gallery');

    $default_template   = '/template-parts/block/wacoal-product-gallery.php';
    include get_theme_file_path($default_template);
}

/**
 * Callback function for gallery carousel block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function wacoal_gallery_carousel_render_callback( $block )
{
    $slider_images     = get_field('slider');
    $shortcode_template = 'template-parts/block/wacoal-product-carousel.php';

    if (! empty($slider_images) ) {
        include locate_template($shortcode_template);
    } else {
        if (is_admin() ) {
            ?>
            <h4><u>Slider:</u></h4>
            <span style="color:red">Empty Wacoal Slider Block</span>
            <?php
        }
    }
}

/**
 * Callback function for list block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function wacoal_list_format_render_callback( $block )
{
    global $wp, $post;

    $block_fields       = get_field('lists');
    $block_heading      = ! empty(get_field('heading')) ? get_field('heading') : '';
    $block_subheading   = ! empty(get_field('short_description')) ? get_field('short_description') : '';

    $default_template   = '/template-parts/block/wacoal-list-format.php';
    include get_theme_file_path($default_template);
}

/**
 * Callback function for list block
 *
 * @param [type] $block Block.
 *
 * @return void
 */
function wacoal_title_description_render_callback( $block )
{
    global $wp, $post;

    $title_text = get_field('title_or_subhead');
    $desc_text  = get_field('description');

    $default_template  = '/template-parts/block/wacoal-title-desc.php';

    include get_theme_file_path($default_template);

}

/**
 * Callback function for list block
 *
 * @param  [type] $block Block.
 * @return void
 */
function wacoal_question_answer_render_callback( $block )
{
    global $wp, $post;

    $block_fields = get_field('question_answer');
    $default_template  = '/template-parts/block/wacoal-question-answer.php';

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

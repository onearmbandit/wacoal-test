<?php
/**
 * Front page
 * php version 8.0
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

Wacoal_Page_Entry_top('');

$top_banner_fields            = get_field('top_banner', 'options');
$top_desktop_banner_image_id  = $top_banner_fields['banner_image'];
$top_banner_title             = $top_banner_fields['banner_title'];
$top_banner_subtitle          = $top_banner_fields['banner_subtitle'];
$top_banner_link              = $top_banner_fields['link'];
$top_banner_newtab            = $top_banner_fields['open_in_new_tab'];
$top_desktop_banner_image_url = wp_get_attachment_image_src($top_desktop_banner_image_id, 'full');
$top_mobile_banner_image_id   = $top_banner_fields['moible_banner_image'];
$top_mobile_banner_image_url  = wp_get_attachment_image_src($top_mobile_banner_image_id, 'full');

$post_not_in      =array();

$slider_blogs_posts = Wacoal_Query_posts(
    array(
        'post_type'      => array('post'),
        'posts_per_page' => 4,
        'offset'         => 0,
        'orderby'        => 'post_date',
        'order'          => 'DESC',
        'post_status'    => 'publish'
    )
);

$slider_blog_slider = [];
foreach ( $slider_blogs_posts as $p ) {
        $post_not_in[]=$p->ID;
    }

$featured_blogs       = get_field('featured_posts', 'options');
$featured_blogs_ids   = ! empty($featured_blogs) ? array_values($featured_blogs) : array();

$featured_blogs_posts = Wacoal_Query_posts(
    array(
        'post__in'  => $featured_blogs_ids,
        'posts_per_page' => -1,
        'post_type' => array(
            'post',
        ),
    )
);

$featured_blog_slider = [];
foreach ( $featured_blogs_ids as $featured_blog_id ) {
    foreach ( $featured_blogs_posts as $p ) {
        if ($p->ID === $featured_blog_id ) {
            $featured_blog_slider[] = $p;
            $post_not_in[]=$p->ID;
        }
    }
}

$static_section = get_field('static_section', 'options');
$recent_posts = Wacoal_Query_posts(
    array(
        'post_type'      => array('post'),
        'post__not_in'   => $post_not_in,
        'posts_per_page' => 3,
        'offset'         => 0,
        'orderby'        => 'post_date',
        'order'          => 'DESC',
        'post_status'    => 'publish'
    )
);
if (is_countable($featured_blogs) && count($featured_blogs) > 0) {
    $featured_blogs_count = count($featured_blogs);
}
$exclude_post = 4 + $featured_blogs_count;

require locate_template('template-parts/front-page.php');

Wacoal_Page_Entry_bottom();

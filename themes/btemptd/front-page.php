<?php
/**
 * Front page
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

Btemptd_Page_Entry_top('');
$banner_image_id    = get_field('banner', 'option');
$banner_image_array = wp_get_attachment_image_src($banner_image_id, 'full');
$banner_image_alt   = Btemptd_Get_Image_alt($banner_image_id, 'Banner Image');
$banner_image_url   = Btemptd_Get_Image($banner_image_array);
$banner_title       = get_field('banner_title', 'option');
$banner_subtitle    = get_field('banner_subtitle', 'option');
$banner_link        = get_field('banner_link', 'option');
$open_in_new_tab    = get_field('open_in_new_tab', 'option');
$static_section     = get_field('static_section', 'option');
$featured_posts     = get_field('featured_posts', 'option');
$featured_blogs_ids   = ! empty($featured_posts) ? array_values($featured_posts) : array();

$post_not_in = array();

$slider_posts = Btemptd_Query_posts(
    array(
        'post_type'      => array('post'),
        'posts_per_page' => 4,
        'offset'         => 0,
        'orderby'        => 'post_date',
        'order'          => 'DESC',
        'post_status'    => 'publish'
    )
);

foreach ( $slider_posts as $p ) {
        $post_not_in[]=$p->ID;
}

$featured_blogs_posts = Btemptd_Query_posts(
    array(
        'post__in'  => $featured_blogs_ids,
        'posts_per_page' => -1,
        'post_type' => array(
            'post',
        ),
    )
);

$featured_blog_slider = [];
foreach ( $featured_blogs_ids as $featured_blogs_id ) {
    foreach ( $featured_blogs_posts as $p ) {
        if ($p->ID === $featured_blogs_id ) {
            $featured_blog_slider[] = $p;
            $post_not_in[]=$p->ID;
        }
    }
}

$recent_posts = Btemptd_Query_posts(
    array(
        'post_type' => array('post'),
        'post__not_in'   => $post_not_in,
        'posts_per_page' => 3,
        'offset' => 0,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_status'=>'publish'
    )
);

$exclude_post = 4 + count($featured_posts);
$total_posts  = wp_count_posts('post');
$counts       = $total_posts->publish;

require locate_template('template-parts/front-page.php');

Btemptd_Page_Entry_bottom();

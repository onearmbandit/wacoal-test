<?php
/**
 * Search page
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

Btemptd_Page_Entry_top('');

global $wp_query;

$res_found   = $wp_query->found_posts;
$search_word = get_search_query();
$post_count  = 0;
$search_data = ! empty($_SERVER) ? $_SERVER : array();

$requested_url = ! empty($search_data['REQUEST_URI']) ? esc_attr($search_data['REQUEST_URI']) : '';
$posts_search = [];

if (have_posts() ) {
    while ( have_posts() ) :
        the_post();
        $post_count++;
        $postid                 = get_the_ID();
        $primary_category     = Btemptd_Get_Primary_category($postid);
        $thumbnail_id  = get_post_thumbnail_id();
        $thumbnail_url = Btemptd_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
        $thumbnail_alt = Btemptd_Get_Image_alt($thumbnail_id, 'featured-img');

        $temp['postid']         = $postid;
        $temp['cat_name']       = $primary_category->name;
        $temp['cat_url']        = get_term_link($primary_category->term_id);
        $temp['title']          = get_the_title($postid);
        $temp['tagline']        = get_field('tagline', $postid);
        $temp['thumbnail'] = get_post_thumbnail_id();
        $temp['thumbnail_url'] = Btemptd_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
        $temp['img_alt'] = Btemptd_Get_Image_alt($thumbnail_id, 'featured-img');

        array_push($posts_search, $temp);
    endwhile;
}

$recent_posts = Btemptd_Query_posts(
    array(
        'post_type' => array('post'),
        'posts_per_page' => 3,
        'offset' => 0,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_status'=>'publish'
    )
);
$total_posts = wp_count_posts('post');
$counts= $total_posts->publish;

require locate_template('template-parts/content-search.php');

Btemptd_Page_Entry_bottom();

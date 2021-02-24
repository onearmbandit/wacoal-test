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

global $wp_query;

$res_found   = $wp_query->found_posts;
$search_word = get_search_query();
$post_count  = 0;
$search_data = ! empty($_SERVER) ? $_SERVER : array();

$requested_url = ! empty($search_data['REQUEST_URI']) ? esc_attr($search_data['REQUEST_URI']) : '';

error_log('$res_found---->'.print_r($res_found, 1));

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
        $temp['tagline']        = get_field('tagline');
        $temp['thumbnail'] = get_post_thumbnail_id();
        $temp['thumbnail_url'] = Btemptd_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
        $temp['img_alt'] = Btemptd_Get_Image_alt($thumbnail_id, 'featured-img');
        // $temp['rubric']         = get_field( 'rubric', $postid );
        // $temp['social_title']   = get_field( 'social_title', $postid );
        // $temp['featured_image'] = get_field( 'promo_image', $postid );

        array_push($posts_search, $temp);
    endwhile;
}

error_log('$posts_search---->'.print_r($posts_search, 1));

// require locate_template('template-parts/content-search.php');

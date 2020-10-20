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
$banner_url=get_field('banner', 'option');
$banner_title=get_field('banner_title', 'option');
$banner_subtitle=get_field('banner_subtitle', 'option');
$static_section=get_field('static_section', 'option');
$slider_posts=get_field('slider_posts', 'option');
$featured_posts=get_field('featured_posts', 'option');
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
$counts = wp_count_posts( $post_type = 'post' );

require locate_template('template-parts/front-page.php');

Btemptd_Page_Entry_bottom();

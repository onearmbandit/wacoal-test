<?php
/**
 * Single post to collect all data
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

wacoal_page_entry_top('');

$article_banner = get_field('banner_image');
$post_title     = get_the_title($post->ID);
$post_excerpt   = get_the_excerpt($post->ID);
$tag_line       = get_field('tag_line');

$primary_category     = Wacoal_Get_Primary_category($post->ID);
$primary_category_url = get_term_link($primary_category->term_id);

$recent_posts = Wacoal_Query_posts(
    array(
        'post_type' => array('post'),
        'post__not_in' => array($post->ID),
        'posts_per_page' => 3,
        'offset' => 0,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_status'=>'publish'
    )
);

?>

        <?php
        while ( have_posts() ) :
            the_post();
            include locate_template('template-parts/content-post.php');

        endwhile;
        ?>

<?php
wacoal_page_entry_bottom();

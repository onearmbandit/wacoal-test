<?php
/**
 * Single post to collect all data
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

Btemptd_Page_Entry_top('');

$article_banner     = get_field('banner');
$article_banner_array  = wp_get_attachment_image_src($article_banner, 'full');
$article_banner_alt    = Btemptd_Get_Image_alt($article_banner, 'Block Image');
$article_banner_url    = Btemptd_Get_Image($article_banner_array);
$post_title            = get_the_title($post->ID);
$tag_line              = get_field('tagline');
$sub_headline          = get_field('sub_headline');

$primary_category     = Btemptd_Get_Primary_category($post->ID);
$primary_category_url = get_term_link($primary_category->term_id);
?>

    <?php
    while ( have_posts() ) :
        the_post();
        include locate_template('template-parts/content-post.php');

    endwhile;
    ?>

<?php
Btemptd_Page_Entry_bottom();

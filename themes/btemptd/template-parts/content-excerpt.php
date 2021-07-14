<?php
/**
 * Template part for displaying post archives
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

?>
<?php
$thumbnail_id  = get_post_thumbnail_id();
$thumbnail_url = Btemptd_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
$thumbnail_alt = Btemptd_Get_Image_alt($thumbnail_id, 'featured-img');
$post_tagline  = get_field('tag_line');
$categories    = Btemptd_Get_Primary_category(get_the_ID());
?>
<div class="explore-blog--box box-shadow-right">
    <div class="explore-blog--image">
        <a href="<?php echo esc_url(get_permalink());?>">
            <img class="img-fluid" src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr($thumbnail_alt); ?>"/>
        </a>
    </div>

    <div class="explore-blog--content blog-pagination">
        <div class="blog-pagination-content">
        <div class="explore-blog--content__category">
            <a href="<?php echo esc_url_raw(get_term_link($current_cat_id));?>">
                <?php echo esc_attr($cat_name);?>
            </a>
        </div>
        <div class="explore-blog--content__title">
            <a href="<?php echo esc_url(get_permalink());?>">
                <?php echo esc_attr(get_the_title());?>
            </a>
        </div>
        </div>
        <div class="blog-pagination-cta">
            <a href="<?php echo esc_url(get_permalink());?>">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/category-post-arrow.svg" />
            </a>
        </div>
    </div>
</div>



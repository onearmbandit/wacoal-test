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
<div class="explore-blog--box">
    <div class="explore-blog--image">
        <img class="img-fluid" src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_url($thumbnail_alt); ?>"/>
    </div>

    <div class="explore-blog--content">
        <div class="explore-blog--content__cta">
            <a href="<?php echo esc_url(get_permalink());?>">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/cta-down-arrow.svg" />
            </a>
        </div>
        <div class="explore-blog--content__category">
            <?php echo esc_attr($cat_name);?>
        </div>
        <div class="explore-blog--content__title">
            <?php echo esc_attr(get_the_title());?>
        </div>
    </div>
</div>



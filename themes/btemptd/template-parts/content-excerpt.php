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
error_log('in page');
?>

<div class="explore-blog--box box-shadow-right">
    <?php if($thumbnail_id && !empty($thumbnail_id)) :?>
    <div class="explore-blog--image">
        <a href="<?php echo esc_url(get_permalink());?>">
            <img class="img-fluid" src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr($thumbnail_alt); ?>"/>
        </a>
    </div>
    <?php endif;?>

    <div class="explore-blog--content blog-pagination">
        <div class="blog-pagination-content">
        <div class="explore-blog--content__category">
            <a href="<?php echo esc_url_raw(get_term_link($current_cat_id));?>">
                <?php echo esc_attr($cat_name);?>
            </a>
        </div>
        <div class="explore-blog--content__title">
            <a href="<?php echo esc_url(get_permalink($slider_post->ID));?>">
                <?php echo esc_attr(Btemptd_Limit_text($feat_title, 73));?>
            </a>
        </div>
        </div>
        <div class="blog-pagination-cta">
            <a href="<?php echo esc_url(get_permalink($slider_post->ID));?>">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/category-post-arrow.svg" />
            </a>
        </div>
    </div>
</div>



<?php
/**
 * Template part for displaying explore the blog section
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

?>
<?php if(!empty($current_cat_id)) :
    $current_cat_id = $current_cat_id;
else:
    $current_cat_id = 0;
endif;
?>
<input type="hidden" name="cat" id="cat_id" value="<?php echo esc_attr($current_cat_id);?>">
<input type="hidden" name="offset" id="offset" value="0">
<input type="hidden" name="total" id="total" value="<?php echo esc_attr($counts);?>">
<section class="explore-blog explore-see-more">
    <div class="explore-blog--title">EXPLORE THE BLOG</div>

    <div class="explore-blog--bg ">
    <div class="explore-blog--wrapper">
        <?php foreach($recent_posts as $key =>$recent_post):
            $thumbnail_id  = get_post_thumbnail_id($recent_post->ID);
            $thumbnail_url = Btemptd_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
            $thumbnail_alt = Btemptd_Get_Image_alt($thumbnail_id, 'featured-img');
            $categories    = Btemptd_Get_Primary_category($recent_post->ID);
            $cat_ID        = $categories->term_id;
            ?>
            <div class="explore-blog--box ">
                <div class="explore-blog--image">
                    <a href="<?php echo esc_url(get_permalink($recent_post->ID));?>">
                        <img class="img-fluid"
                             src="<?php echo esc_url($thumbnail_url); ?>"
                             alt="<?php echo esc_attr($thumbnail_alt); ?>"/>
                    </a>
                </div>

                <div class="explore-blog--content box">
                    <div class="explore-blog--content__cta">
                        <a href="<?php echo esc_url(get_permalink($recent_post->ID));?>">
                            <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/cta-down-arrow.svg" />
                        </a>
                    </div>
                    <div class="explore-blog--content__category">
                        <a href= "<?php echo esc_url_raw(get_term_link($cat_ID));?>">
                            <?php echo esc_attr($categories->name);?>
                        </a>
                    </div>
                    <div class="explore-blog--content__title">
                        <a href="<?php echo esc_url(get_permalink($recent_post->ID));?>">
                            <?php echo esc_attr(get_the_title($recent_post->ID));?>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach;?>

    </div>
    </div>
</section>
<?php if($counts > 3) :?>
        <div class="see-more--wrapper">
            <button class="see-more-button">See More</button>
            <!-- <img class="cta-button" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/blog-down-arrow.svg" /> -->
        </div>
<?php endif;?>

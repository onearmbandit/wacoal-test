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
<?php if(!empty($current_cat_id)):
    $current_cat_id = $current_cat_id;
else:
    $current_cat_id = 0;
endif;
?>
<input type="hidden" name="cat" id="cat_id" value="<?php echo esc_attr($current_cat_id);?>">
<input type="hidden" name="offset" id="offset" value="0">
<input type="hidden" name="total" id="total" value="<?php echo esc_attr($counts->publish);?>">
<section class="explore-blog">
    <div class="explore-blog--title">EXPLORE THE BLOG</div>

    <div class="explore-blog--bg explore-see-more">
    <div class="explore-blog--wrapper">
        <?php foreach($recent_posts as $key =>$recent_post):
            $thumbnail_id = get_post_thumbnail_id($recent_post->ID);
            $thumbnail_url = Btemptd_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
            $thumbnail_alt = Btemptd_Get_Image_alt($thumbnail_id, 'featured-img');
            $categories = Btemptd_Get_Primary_category($recent_post->ID);
            ?>
            <div class="explore-blog--box ">
                <div class="explore-blog--image">
                    <img class="img-fluid" src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_url($thumbnail_alt); ?>"/>
                </div>

                <div class="explore-blog--content">
                    <div class="explore-blog--content__cta">
                        <a href="<?php echo esc_url(get_permalink($recent_post->ID));?>">
                            <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/cta-down-arrow.svg" />
                        </a>
                    </div>
                    <div class="explore-blog--content__category">
                        <?php echo esc_attr($categories->name);?>
                    </div>
                    <div class="explore-blog--content__title">
                        <?php echo esc_attr(get_the_title($recent_post->ID));?>
                    </div>
                </div>
            </div>
        <?php endforeach;?>

    </div>
    </div>
    <?php if($counts->publish > 3):?>
        <button class="more btn secondary">SEE MORE</button>
    <?php endif;?>
</section>

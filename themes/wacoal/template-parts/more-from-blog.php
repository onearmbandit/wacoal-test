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
<section class="more-from-blog">
    <div class="more-blog--title">
        MORE FROM THE BLOG
    </div>
    <div class="more-blog--wrapper">
        <?php foreach ($recent_posts as $key =>$recent_post) { ?>
            <?php
            $thumbnail_id  = get_post_thumbnail_id($recent_post->ID);
            $thumbnail_url = Wacoal_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
            $thumbnail_alt = Wacoal_Get_Image_alt($thumbnail_id, 'featured-img');
            $categories    = Wacoal_Get_Primary_category($recent_post->ID);
            $cat_ID        = $categories->term_id;
            $cat_url       = get_term_link($cat_ID);
            ?>
            <article class="blog-tile">
                <a href="<?php echo esc_url(get_permalink($recent_post->ID));?>">
                    <div class="blog-tile--image">
                        <img class="lazyload"
                            data-src="<?php echo esc_url($thumbnail_url);?>"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            alt="<?php echo esc_attr($thumbnail_alt);?>" />
                    </div>
                </a>
                <div class="blog-tile--category">
                    <?php if (! empty($categories) ) {?>
                    <a href="<?php echo esc_url_raw($cat_url);?>"> <?php echo esc_attr($categories->name); ?> </a>
                    <?php }?>
                </div>

                <a href="<?php echo esc_url(get_permalink($recent_post->ID));?>">
                    <h5 class="blog-tile--heading">
                        <?php echo esc_attr(get_the_title($recent_post->ID));?>
                    </h5>
                </a>

                <a href="<?php echo esc_url(get_permalink($recent_post->ID));?>" class="btn primary">
                    Learn More
                </a>
            </article>
        <?php } ?>
    </div>
</section>
<?php if($counts > 3) :?>
        <div class="see-more--wrapper">
            <button class="more-blog btn secondary">See More</button>
        </div>
<?php endif;?>

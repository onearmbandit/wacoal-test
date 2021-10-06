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
$i = 0;
$j = 0;
?>

<input type="hidden" name="cate_id" id="cate_id" value="<?php echo esc_attr($current_cat_id);?>">
<input type="hidden" name="cat_offset" id="cat_offset" value="0">
<input type="hidden" name="cat_total" id="cat_total" value="<?php echo esc_attr($cat_post_counts);?>">

<div class="cat-post-listing">
        <div class="category-posts category-posts-desktop">
            <?php //while (have_posts()) : the_post();
            foreach($cat_posts as $key => $cat_post):
                // $i = 1;
                // error_log('$cat_posts'.print_r($key,1));
                if($key < 6) {
                $thumbnail_id  = get_post_thumbnail_id($cat_post->ID);
                $thumbnail_url = Btemptd_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
                $thumbnail_alt = Btemptd_Get_Image_alt($thumbnail_id, 'featured-img');
                $cat_name_obj  = Btemptd_Get_Primary_category($cat_post->ID);
                $cat_ID        = $cat_name_obj->term_id;
                $feat_title    = get_the_title($cat_post->ID);
                $tagline       = get_field('tagline', $cat_post->ID);

                if ($key % 3 == 0 ) { ?>
                    <section class="explore-blog">
                        <div class="explore-blog--bg">
                            <div class="explore-blog--wrapper blog-wrapper">
                <?php }
                    include locate_template('template-parts/content-excerpt.php');
                if ($key % 3 == 2 || $cat_post_counts == ($key+1)) { ?>
                            </div>
                        </div>
                    </section>
                <?php }
                }
                    // $i++;
                endforeach;
            //endwhile; ?>
        </div>

        <div class="category-posts category-posts-mobile">
            <?php
            foreach($cat_posts as $key => $cat_post):

                $thumbnail_id  = get_post_thumbnail_id($cat_post->ID);
                $thumbnail_url = Btemptd_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
                $thumbnail_alt = Btemptd_Get_Image_alt($thumbnail_id, 'featured-img');
                $cat_name_obj  = Btemptd_Get_Primary_category($cat_post->ID);
                $cat_ID        = $cat_name_obj->term_id;
                $feat_title    = get_the_title($cat_post->ID);
                $tagline       = get_field('tagline', $cat_post->ID);

                if ($key % 2 == 0) { ?>
                    <section class="explore-blog">
                        <div class="explore-blog--bg">
                            <div class="explore-blog--wrapper blog-wrapper">
                <?php }
                if ($key % 2 == 1 || $cat_post_counts == ($key+1)) { ?>
                            </div>
                        </div>
                    </section>
                <?php }
                    $key++;
                endforeach;
                 ?>
        </div>
</div>

<?php if ($cat_post_counts > 6) {?>
    <div class="see-more--wrapper see-more-relative">
        <button class="cat-see-more-button">See More</button>
    </div>
<?php }

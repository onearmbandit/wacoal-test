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
    <?php if (! wp_is_mobile()) { ?>
        <div class="category-posts category-posts-desktop">
            <?php while (have_posts()) : the_post();
                if ($i % 3 == 0) { ?>
                    <section class="explore-blog">
                        <div class="explore-blog--bg">
                            <div class="explore-blog--wrapper blog-wrapper">
                <?php }
                    include locate_template('template-parts/content-excerpt.php');
                if ($i % 3 == 2 || $cat_post_counts == ($i+1)) { ?>
                            </div>
                        </div>
                    </section>
                <?php }
                    $i++;
            endwhile; ?>
        </div>
    <?php } else { ?>
        <div class="category-posts category-posts-mobile">
            <?php while (have_posts()) : the_post();
                if ($j % 2 == 0) { ?>
                    <section class="explore-blog">
                        <div class="explore-blog--bg">
                            <div class="explore-blog--wrapper blog-wrapper">
                <?php }
                    include locate_template('template-parts/content-excerpt.php');
                if ($j % 2 == 1 || $cat_post_counts == ($j+1)) { ?>
                            </div>
                        </div>
                    </section>
                <?php }
                    $j++;
            endwhile; ?>
        </div>
    <?php } ?>
</div>

<?php if ($cat_post_counts > 6) {?>
    <div class="see-more--wrapper see-more-relative">
        <button class="cat-see-more-button">See More</button>
    </div>
<?php }

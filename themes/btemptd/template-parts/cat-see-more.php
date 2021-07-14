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

<input type="hidden" name="cat" id="cat_id" value="<?php echo esc_attr($current_cat_id);?>">
<input type="hidden" name="offset" id="offset" value="0">
<input type="hidden" name="total" id="total" value="<?php echo esc_attr($cat_post_counts);?>">

<div class="cat-post-listing">
<?php
    $i = 0;
    $j = 0;
if ($cat_post_counts >= 3) {
    ?>
        <div class="category-posts category-posts-desktop">
    <?php while (have_posts()) : the_post();
        if ($i % 3 == 0) {
            echo '<section class="explore-blog">
                        <div class="explore-blog--bg">
                            <div class="explore-blog--wrapper blog-wrapper">';
        }
                include locate_template('template-parts/content-excerpt.php');
        if ($i % 3 == 2 || $cat_post_counts == ($i+1)) {
            echo '</div>
                        </div>
                    </section>';
        }
                $i++;
    endwhile; ?>

        </div>

            <?php
} ?>
    <div class="category-posts category-posts-mobile">
    <?php while (have_posts()) : the_post();
        if ($j % 2 == 0) {
            echo '<section class="explore-blog">
                        <div class="explore-blog--bg">
                            <div class="explore-blog--wrapper blog-wrapper">';
        }
                include locate_template('template-parts/content-excerpt.php');
        if ($j % 2 == 1 || $cat_post_counts == ($j+1)) {
            echo '</div>
                        </div>
                    </section>';
        }
                $j++;
    endwhile; ?>
    </div>
    </div>
<?php if($cat_post_counts > 6) :?>
        <div class="see-more--wrapper">
            <button class="cat-see-more-button">See More</button>
        </div>
<?php endif;

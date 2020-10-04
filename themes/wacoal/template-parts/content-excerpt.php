<?php
/**
 * Template part for displaying post archives
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

?>
<article class="blog-tile">
    <div class="blog-tile--image">
        <?php the_post_thumbnail(array(334, 220)); ?>
    </div>
    <div class="blog-tile--category">
        <?php echo esc_html(single_cat_title());?>
    </div>
    <?php
    the_title(sprintf('<h5 class="blog-tile--heading"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
    ?>

    <p class="blog-tile--para">
    <?php the_excerpt(); ?>
    </p>
    <a href="<?php echo esc_url(get_permalink());?>" class="btn primary">Learn More</a>
</article>


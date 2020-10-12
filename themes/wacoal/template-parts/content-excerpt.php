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
        <?php
        $thumbnail_id  = get_post_thumbnail_id();
        $thumbnail_url = Wacoal_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
        $thumbnail_alt = wacoal_get_image_alt($thumbnail_id, 'featured-img');
        $post_tagline  = get_field('tag_line');
        ?>
        <img class="lazyload" data-src="<?php echo esc_url($thumbnail_url);?>" alt="<?php echo esc_attr($thumbnail_alt);?>" />
    </div>
    <div class="blog-tile--category">
    <?php echo esc_attr($cat_name); ?>
    </div>
    <?php
    the_title(sprintf('<h5 class="blog-tile--heading"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>');
    ?>

    <div class="blog-tile--para">
        <?php echo wp_kses_post($post_tagline); ?>
    </div>
    <a href="<?php echo esc_url(get_permalink());?>" class="btn primary">Learn More</a>
</article>


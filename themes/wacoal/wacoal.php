<?php
/**
 * Template Name: Wacoal 101
 *  * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

wacoal_page_entry_top('');
$static_section = get_field('static_section', get_the_ID());
$related_blogs  = get_field('more_from_blog', get_the_ID());
$tagline  = get_field('tag_line', get_the_ID());
?>
<section class="banner-with-background">
<h2 class="banner-with-background--heading"><?php echo esc_attr(get_the_title()); ?></h2>
    <p class="banner-with-background--subtitle">
        <?php echo esc_html($tagline); ?>
    </p>
</section>
<section class="spacer-80"></section>
<!-- Wacoal 101 -->
<section class="wacoal-101">
    <div class="wacoal-101--wrapper">
        <div class="wacoal-101--image">
            <img src="<?php echo  esc_url($static_section['image']['url']); ?>" alt="Wacoal 101" />
        </div>
        <div class="wacoal-101--content">
            <div class="wacoal-101--content__title">
               <?php echo esc_attr($static_section['title']);?>
            </div>
            <?php foreach ($static_section['links'] as $key => $page_obj) { ?>
                <div class="wacoal-101--list">
                    <div class="wacoal-101--list__icon">
                        <img src="<?php echo  esc_url(get_theme_file_uri()); ?>/assets/images/wacol-101-arrow.svg" alt="Wacoal 101 Arrow" />
                    </div>
                    <div class="wacoal-101--list__content"><a target="_blank" href="<?php echo esc_url($page_obj['link']);?>"><?php echo esc_attr($page_obj['title']);?></a></div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>
<section class="spacer-80"></section>
<!-- More From Blog -->
<section class="more-blog">
    <div class="more-blog--title">
            <?php echo esc_html($related_blogs['headline']);?>
    </div>
    <div class="more-blog--wrapper">
        <?php foreach ($related_blogs['posts'] as  $blog) { ?>
            <?php

             $thumbnail = Wacoal_Get_image(get_the_post_thumbnail_url($blog));
            if (empty($thumbnail)) {
                $thumbnail = get_theme_file_uri().'/assets/images/blog-img-1.png';
            }
            $thumbnail_id = get_post_thumbnail_id($blog);
            $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
            $categories = get_the_terms($blog, 'category');

            ?>
            <article class="blog-tile">
                <div class="blog-tile--image">
                    <img src="<?php echo esc_url($thumbnail);?>" alt="" />
                </div>
                <div class="blog-tile--category">
                    <?php if (! empty($categories) ) {
                        echo esc_html($categories[0]->name);
                    }?>
                </div>
                <h5 class="blog-tile--heading">
                    <?php echo esc_attr(get_the_title($blog));?>
                </h5>
                <p class="blog-tile--para">
                <?php echo  wp_kses_post(get_the_excerpt($blog));?>
                </p>
                <a href="<?php echo esc_url(get_permalink($blog));?>" class="btn primary">Learn More</a>
            </article>
        <?php } ?>
    </div>
</section>
<!-- -->
<?php
wacoal_page_entry_bottom();

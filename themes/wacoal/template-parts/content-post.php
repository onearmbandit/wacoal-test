<?php
/**
 * Template part for displaying page content in post.php
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

?>

<!-- Banner section -->
<section class="article-details-banner" style="background-image:url(<?php  echo esc_url($article_banner['url']);?>);">
</section>

<!-- Title Category Short Description section -->
<section class="article-header">
    <div class="article-header--wrapper">
        <a href="<?php echo esc_url($primary_category_url); ?>"
            class="article-header--wrapper__category">
            <?php echo esc_attr($primary_category->name); ?>
        </a>
        <h2 class="article-header--wrapper__heading">
            <?php echo esc_attr($post_title); ?>
        </h2>
        <p class="article-header--wrapper__para">
            <?php echo wp_kses_post($tag_line); ?>
        </p>
        <div class="article-header--wrapper__seperator">
        </div>
    </div>
</section>

<!-- WP gutenberg block content -->
<?php the_content(); ?>

<section class="spacer-80"></section>

<!-- More From Blog -->
<section class="more-blog">
    <div class="more-blog--title">
            <?php echo esc_html('MORE FROM THE BLOG');?>
    </div>
    <div class="more-blog--wrapper">
        <?php foreach ($recent_posts as $key => $blog) { ?>
            <?php $thumbnail = get_the_post_thumbnail_url($blog->ID);
            if (empty($thumbnail)) {
                $thumbnail = get_theme_file_uri().'/assets/images/blog-img-1.png';
            }
            $thumbnail_id = get_post_thumbnail_id($blog->ID);
            $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
            $categories = get_the_terms($blog->ID, 'category');

            ?>
            <article class="blog-tile">
                <div class="blog-tile--image">
                    <img src="<?php echo  esc_url($thumbnail); ?>" alt="<?php echo  esc_attr($alt); ?>" />
                </div>
                <div class="blog-tile--category">
                    <?php if (! empty($categories) ) {
                        echo esc_html($categories[0]->name);
                    }?>
                </div>
                <h5 class="blog-tile--heading">
                    <?php echo esc_attr($blog->post_title);?>
                </h5>
                <p class="blog-tile--para">
                <?php echo  wp_kses_post($blog->post_excerpt);?>
                </p>
                <a href="<?php echo esc_url(get_permalink($blog->ID));?>" class="btn primary">Learn More</a>
            </article>
        <?php } ?>



    </div>
</section>
<!-- -->
<section class="spacer-120"></section>

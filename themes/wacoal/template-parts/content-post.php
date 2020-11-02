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
<?php if(!empty($article_banner_link)) :?>
    <a href="<?php echo esc_url($article_banner_link);?>" target="_blank";>
<?php endif;?>
    <section class="article-details-banner" style="background-image:url(<?php  echo esc_url($article_banner['url']);?>);">
    </section>
<?php if(!empty($article_banner_link)) :?>
    </a>
<?php endif;?>

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
        <div class="article-header--wrapper__para">
            <?php echo wp_kses_post($tag_line); ?>
        </div>
        <div class="article-header--wrapper__seperator">
        </div>
    </div>
</section>

<!-- WP gutenberg block content -->
<section class="page-wrapper">
    <div class="page-wrapper--content">
        <?php the_content(); ?>
    </div>
</section>

<!-- More From Blog -->
<?php if(!empty($recent_posts)) : ?>
    <section class="more-blog">
        <div class="more-blog--title">
                <?php echo esc_html('MORE FROM THE BLOG');?>
        </div>
        <div class="more-blog--wrapper">
            <?php
            foreach ($recent_posts as $key => $blog) { ?>
                <?php $thumbnail = get_the_post_thumbnail_url($blog->ID);
                if (empty($thumbnail)) {
                    $thumbnail = esc_url(THEMEURI).'/assets/images/blog-img-1.png';
                }
                $thumbnail_id = get_post_thumbnail_id($blog->ID);
                $thumbnail_url = Wacoal_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
                $thumbnail_alt = Wacoal_Get_Image_alt($thumbnail_id, 'featured-img');
                $categories = get_the_terms($blog->ID, 'category');
                $post_tagline = get_field('tag_line', $blog->ID);
                $cat_ID = $categories[0]->term_id;
                $cat_url = get_term_link($cat_ID);

                ?>
                <article class="blog-tile">
                    <div class="blog-tile--image">
                        <img class="lazyload" data-src="<?php echo  esc_url($thumbnail); ?>"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="<?php echo  esc_attr($alt); ?>" />
                    </div>
                    <div class="blog-tile--category">
                        <?php if (! empty($categories) ) { ?>
                        <a href="<?php echo esc_url_raw(get_term_link($cat_ID));?>" ><?php echo esc_html($categories[0]->name);?></a>
                        <?php }?>
                    </div>
                    <h5 class="blog-tile--heading">
                        <?php echo esc_attr($blog->post_title);?>
                    </h5>
                    <div class="blog-tile--para">
                    <?php echo  wp_kses_post($post_tagline);?>
                    </div>
                    <a href="<?php echo esc_url(get_permalink($blog->ID));?>" class="btn primary">Learn More</a>
                </article>
            <?php } ?>

        </div>
    </section>
<?php endif; ?>

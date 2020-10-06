<?php
/**
 * Front page html
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

?>
<?php if(!empty($top_banner_link)) :?>
<a href="<?php echo esc_url($top_banner_link);?>" <?php if($top_banner_newtab == true) : echo "target='_blank'";
endif;?>>
<?php endif;?>
<section class="banner-with-image"
    style="background-image:url(<?php  echo esc_attr(Wacoal_Get_image($top_banner_image_url));?>);">
        <h1 class="banner-with-image--heading">
            <?php echo esc_attr($top_banner_title);?>
        </h1>
        <p class="banner-with-image--subtitle">
            <?php echo esc_attr($top_banner_subtitle);?>
        </p>
</section>
<?php if(!empty($top_banner_link)) :?>
</a>
<?php endif;?>
<section class="spacer-80"></section>
<!-- Evergreen Articles Slider -->
<section class="evergreen-article--slider">
    <div class="swiper-container center-slide-slider">
        <div class="swiper-wrapper">
            <?php foreach ($slider_blog_slider as $key => $slider_blog) {
                $thumbnail_id = get_post_thumbnail_id($slider_blog->ID);
                $thumbnail_url = Wacoal_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
                $thumbnail_alt = wacoal_get_image_alt($thumbnail_id, 'slider-img');
                $categories = wacoal_get_primary_category($slider_blog->ID);
                ?>
                <div class="swiper-slide evergreen-article">
                    <div class="evergreen-article--content">
                        <p class="evergreen-article--content__subtitle">
                            <?php echo esc_attr($categories->name);?>
                        </p>
                        <h3 class="evergreen-article--content__title">
                            <?php echo esc_attr($slider_blog->post_title);?>
                        </h3>
                        <p class="evergreen-article--content__para">
                            <?php echo wp_kses_post($slider_blog->tag_line);?>
                        </p>
                    </div>

                    <div class="evergreen-article--image">
                        <img src="<?php echo  esc_url($thumbnail_url); ?>"
                            alt="<?php echo esc_attr($thumbnail_alt);?>" />
                    </div>
                    <div class="evergreen-article--button">
                        <a href="<?php echo esc_url(get_permalink($slider_blog->ID));?>"
                        class="btn primary">learn more</a>
                    </div>
                </div>
            <?php } ?>

        </div>

        <div class="swiper-pagination custom-swiper-pagination"></div>

        <div class="swiper-button-next swiper-buttun-background">
            <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow.svg" alt="Slider Arrow" />
        </div>
        <div class="swiper-button-prev swiper-buttun-background">
            <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow.svg" alt="Slider Arrow" />
        </div>
  </div>
</section>

<!-- -->
<section class="spacer-80"></section>
<!-- Wacoal 101 -->
<section class="wacoal-101">
    <div class="wacoal-101--wrapper">
        <div class="wacoal-101--image">
            <img src="<?php echo  esc_url($static_section['image']); ?>" alt="Wacoal 101" />
        </div>
        <div class="wacoal-101--content">
            <div class="wacoal-101--content__title">
               <?php echo esc_attr($static_section['title']);?>
            </div>
            <?php foreach ($static_section['links'] as $key => $page_obj) { ?>
                <div class="wacoal-101--list">
                    <div class="wacoal-101--list__icon">
                        <img src="<?php echo  esc_url(esc_url(THEMEURI)); ?>/assets/images/wacol-101-arrow.svg" alt="Wacoal 101 Arrow" />
                    </div>
                    <div class="wacoal-101--list__content"><a target="_blank" href="<?php echo esc_url($page_obj['link']);?>"><?php echo esc_attr($page_obj['title']);?></a></div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<section class="spacer-120"></section>
<section class="featured-article--slider">
    <div class="swiper-container featured-article">
        <div class="swiper-wrapper">
            <?php foreach ($featured_blog_slider as $key => $featured_blog) {
                $thumbnail_id = get_post_thumbnail_id($featured_blog->ID);
                $thumbnail_url = Wacoal_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
                $thumbnail_alt = wacoal_get_image_alt($thumbnail_id, 'featured-img');
                $categories = wacoal_get_primary_category($featured_blog->ID);
                ?>
                <div class="swiper-slide">
                    <article class="featured-box">
                        <div class="featured-box--content">
                            <p class="featured-box--content__subtitle">
                                <?php echo esc_attr($categories->name);?>
                            </p>
                            <h4 class="featured-box--content__title">
                                <?php echo esc_attr($featured_blog->post_title);?>
                            </h4>
                            <p class="featured-box--content__para">
                                <?php echo wp_kses_post($featured_blog->tag_line);?>
                            </p>
                            <a href="<?php echo esc_url(get_permalink($featured_blog->ID)); ?>"
                                class="btn primary">learn more</a>
                        </div>
                        <div class="featured-box--image">
                            <img src="<?php echo  esc_url($thumbnail_url); ?>"
                                alt="<?php echo esc_attr($thumbnail_alt);?>" />
                        </div>
                    </article>
                </div>
            <?php } ?>
        </div>

        <div class="swiper-pagination custom-swiper-pagination"></div>

        <div class="swiper-button-next swiper-buttun-background">
            <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow.svg" alt="Slider Arrow" />
        </div>
        <div class="swiper-button-prev swiper-buttun-background">
            <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow.svg" alt="Slider Arrow" />
        </div>
    </div>
</section>

<section class="spacer-80"></section>
<!-- More From Blog -->
<?php if(!empty($related_blogs['posts'])) :?>
    <section class="more-blog">
        <div class="more-blog--title">
                <?php echo esc_html($related_blogs['headline']);?>
        </div>
        <div class="more-blog--wrapper">
            <?php foreach ($related_blogs['posts'] as  $postId) {
                $thumbnail_id = get_post_thumbnail_id($postId);
                $thumbnail_url = Wacoal_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
                $thumbnail_alt = wacoal_get_image_alt($thumbnail_id, 'featured-img');
                $categories = wacoal_get_primary_category($postId);
                $post_tagline = get_field('tag_line', $postId);
                ?>
                <article class="blog-tile">
                    <div class="blog-tile--image">
                        <img src="<?php echo esc_url($thumbnail_url);?>" alt="<?php echo esc_attr($thumbnail_alt);?>" />
                    </div>
                    <div class="blog-tile--category">
                        <?php if (! empty($categories) ) {
                            echo esc_html($categories->name);
                        }?>
                    </div>
                    <h5 class="blog-tile--heading">
                        <?php echo esc_attr(get_the_title($postId));?>
                    </h5>
                    <p class="blog-tile--para">
                    <?php echo  wp_kses_post($post_tagline);?>
                    </p>
                    <a href="<?php echo esc_url(get_permalink($postId));?>"
                        class="btn primary">Learn More</a>
                </article>
            <?php } ?>
        </div>
    </section>

<?php endif;?>
 <!-- -->
<section class="spacer-120"></section>

<?php
/**
 * Front page html
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

?>
<?php if(!empty($top_banner_link)) :?>
<a href="<?php echo esc_url($top_banner_link);?>" <?php if($top_banner_newtab == true) : echo "target='_blank'";
endif;?>>
<?php endif;?>
<section class="banner-with-image"
    style="background-image:url(<?php  echo esc_attr(btemptd_Get_image($top_banner_image_url));?>);">
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

<!-- Evergreen Articles Slider -->
<section class="evergreen-article--slider">
    <div class="swiper-container center-slide-slider">
        <div class="swiper-wrapper">
            <?php foreach ($slider_blog_slider as $key => $slider_blog) {
                $thumbnail_id = get_post_thumbnail_id($slider_blog->ID);
                $thumbnail_url = btemptd_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
                $thumbnail_alt = btemptd_get_image_alt($thumbnail_id, 'slider-img');
                $categories = btemptd_get_primary_category($slider_blog->ID);
                $cat_ID = $categories->term_id;
                ?>
                <div class="swiper-slide evergreen-article">
                    <div class="evergreen-article--content">
                        <a href="<?php echo esc_url_raw(get_term_link($cat_ID));?>" class="evergreen-article--content__subtitle">
                            <?php echo esc_attr($categories->name);?>
                        </a>
                        <h3 class="evergreen-article--content__title">
                            <?php echo esc_attr($slider_blog->post_title);?>
                        </h3>
                        <p class="evergreen-article--content__para">
                            <?php echo wp_kses_post($slider_blog->tag_line);?>
                        </p>
                    </div>

                    <div class="evergreen-article--image">
                        <img class="lazyload" data-src="<?php echo  esc_url($thumbnail_url); ?>"
                            alt="<?php echo esc_attr($thumbnail_alt);?>" />
                    </div>
                    <div class="evergreen-article--button">
                        <a href="<?php echo esc_url(get_permalink($slider_blog->ID));?>"
                        class="btn primary big">learn more</a>
                    </div>
                </div>
            <?php } ?>

        </div>

        <div class="swiper-pagination custom-swiper-pagination"></div>

        <div class="swiper-button-next swiper-buttun-background">
            <img class="lazyload" data-src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow.svg" alt="Slider Arrow" />
        </div>
        <div class="swiper-button-prev swiper-buttun-background">
            <img class="lazyload" data-src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow.svg" alt="Slider Arrow" />
        </div>
  </div>
</section>

<!-- btemptd 101 -->
<section class="btemptd-101">
    <div class="btemptd-101--wrapper">
        <div class="btemptd-101--image">
            <img class="lazyload"
                data-src="<?php echo  esc_url($static_section['image']); ?>"
                alt="btemptd 101" />
        </div>
        <div class="btemptd-101--content">
            <div class="btemptd-101--content__title">
               <?php echo esc_attr($static_section['title']);?>
            </div>
            <?php foreach ($static_section['links'] as $key => $page_obj) { ?>
                <div class="btemptd-101--list">
                    <div class="btemptd-101--list__icon">
                        <img class="lazyload" data-src="<?php echo  esc_url(esc_url(THEMEURI)); ?>/assets/images/wacol-101-arrow.svg" alt="btemptd 101 Arrow" />
                    </div>
                    <div class="btemptd-101--list__content"><a target="_blank" href="<?php echo esc_url($page_obj['link']);?>"><?php echo esc_attr($page_obj['title']);?></a></div>
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
                $thumbnail_url = btemptd_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
                $thumbnail_alt = btemptd_get_image_alt($thumbnail_id, 'featured-img');
                $categories = btemptd_get_primary_category($featured_blog->ID);
                $cat_ID = $categories->term_id;
                ?>
                <div class="swiper-slide">
                    <article class="featured-box">
                        <div class="featured-box--content">
                            <a href="<?php echo esc_url_raw(get_term_link($cat_ID));?>" class="featured-box--content__subtitle">
                                <?php echo esc_attr($categories->name);?>
                            </a>
                            <h4 class="featured-box--content__title">
                                <?php echo esc_attr($featured_blog->post_title);?>
                            </h4>
                            <p class="featured-box--content__para">
                                <?php echo wp_kses_post($featured_blog->tag_line);?>
                            </p>
                            <a href="<?php echo esc_url(get_permalink($featured_blog->ID)); ?>"
                                class="btn primary big">learn more</a>
                        </div>
                        <div class="featured-box--image">
                            <img class="lazyload" data-src="<?php echo  esc_url($thumbnail_url); ?>"
                                alt="<?php echo esc_attr($thumbnail_alt);?>" />
                        </div>
                    </article>
                </div>
            <?php } ?>
        </div>

        <div class="swiper-pagination custom-swiper-pagination"></div>

        <div class="swiper-button-next swiper-buttun-background">
            <img class="lazyload" data-src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow.svg" alt="Slider Arrow" />
        </div>
        <div class="swiper-button-prev swiper-buttun-background">
            <img class="lazyload" data-src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow.svg" alt="Slider Arrow" />
        </div>
    </div>
</section>

<!-- More From Blog -->

<input type="hidden" name="offset" id="offset" value="0">
<section class="more-blog">
    <div class="more-blog--title">
            <?php echo esc_html("More From The Blog");?>

    </div>
    <div class="more-blog--wrapper">
        <?php foreach ($recent_posts as $key => $blog) {
            $thumbnail_id = get_post_thumbnail_id($blog->ID);
            $thumbnail_url = btemptd_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
            $thumbnail_alt = btemptd_get_image_alt($thumbnail_id, 'featured-img');
            $categories = btemptd_get_primary_category($blog->ID);
            $post_tagline = get_field('tag_line', $blog->ID);
            $cat_ID = $categories->term_id;
            ?>
            <article class="blog-tile">
                <div class="blog-tile--image">
                    <img class="lazyload" data-src="<?php echo esc_url($thumbnail_url);?>" alt="<?php echo esc_attr($thumbnail_alt);?>" />
                </div>
                <div class="blog-tile--category">
                    <?php if (! empty($categories) ) {?>
                        <a href="<?php echo esc_url_raw(get_term_link($cat_ID));?>"> <?php echo esc_attr($categories->name); ?></a>
                    <?php }?>
                </div>
                <h5 class="blog-tile--heading">
                    <?php echo esc_attr(get_the_title($blog->ID));?>
                </h5>
                <p class="blog-tile--para">
                <?php echo  wp_kses_post($post_tagline);?>
                </p>
                <a href="<?php echo esc_url(get_permalink($blog->ID));?>"
                    class="btn primary">Learn More</a>
            </article>
        <?php } ?>
    </div>
</section>

<button class="more">See More</button>

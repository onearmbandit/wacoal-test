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

<!-- Top Banner Section Start -->
<?php if(!empty($top_banner_link)) :?>
<a href="<?php echo esc_url($top_banner_link);?>"
    <?php if($top_banner_newtab == true) : echo "target='_blank'";
    endif;?>>
<?php endif;?>

<section class="banner-with-image desktop-banner"
    style="background-image:url(<?php  echo esc_attr(Wacoal_Get_image($top_desktop_banner_image_url));?>);">

    <?php if($top_banner_title && !empty($top_banner_title)) :?>
        <h1 class="banner-with-image--heading">
            <?php echo esc_attr($top_banner_title);?>
        </h1>
    <?php endif; ?>

    <?php if($top_banner_subtitle && !empty($top_banner_subtitle)) :?>
        <p class="banner-with-image--subtitle">
            <?php echo esc_attr($top_banner_subtitle);?>
        </p>
    <?php endif; ?>

</section>

<section class="banner-with-image mobile-banner"
    style="background-image:url(<?php  echo esc_attr(Wacoal_Get_image($top_mobile_banner_image_url));?>);">

    <?php if($top_banner_title && !empty($top_banner_title)) :?>
        <h1 class="banner-with-image--heading">
            <?php echo esc_attr($top_banner_title);?>
        </h1>
    <?php endif; ?>

    <?php if($top_banner_subtitle && !empty($top_banner_subtitle)) :?>
        <p class="banner-with-image--subtitle">
            <?php echo esc_attr($top_banner_subtitle);?>
        </p>
    <?php endif; ?>

</section>

<?php if(!empty($top_banner_link)) :?>
</a>
<?php endif;?>

<section class="evergreen-article--slider">
    <div class="swiper-container center-slide-slider">
        <div class="swiper-wrapper">
            <?php foreach ($slider_blog_slider as $key => $slider_blog) {
                $thumbnail_id  = get_post_thumbnail_id($slider_blog->ID);
                $thumbnail_url = Wacoal_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
                $thumbnail_alt = Wacoal_Get_Image_alt($thumbnail_id, 'slider-img');
                $categories    = Wacoal_Get_Primary_category($slider_blog->ID);
                $cat_ID        = $categories->term_id;
                ?>

                <div class="swiper-slide evergreen-article">
                    <div class="evergreen-article--content">

                        <a href="<?php echo esc_url_raw(get_term_link($cat_ID));?>"
                           class="evergreen-article--content__subtitle">
                            <?php echo esc_attr($categories->name);?>
                        </a>

                        <a href="<?php echo esc_url(get_permalink($slider_blog->ID));?>">
                            <h3 class="evergreen-article--content__title">
                                <?php echo esc_attr(Wacoal_Limit_text(Wacoal_Remove_P_tag($slider_blog->post_title), 78));?>
                            </h3>
                        </a>

                        <div class="evergreen-article--content__para">
                            <a href="<?php echo esc_url(get_permalink($slider_blog->ID));?>">
                                <?php echo wp_kses_post(Wacoal_Limit_text(Wacoal_Remove_P_tag($slider_blog->tag_line), 160));?>
                            </a>
                        </div>
                    </div>

                    <div class="evergreen-article--image">
                        <a href="<?php echo esc_url(get_permalink($slider_blog->ID));?>">
                            <img class="lazyload" data-src="<?php echo  esc_url($thumbnail_url); ?>"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            alt="<?php echo esc_attr($thumbnail_alt);?>" />
                        </a>
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
            <img class="lazyload" data-src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow.svg"
            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="Slider Arrow" />
        </div>
        <div class="swiper-button-prev swiper-buttun-background">
            <img class="lazyload" data-src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow.svg"
            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="Slider Arrow" />
        </div>
  </div>
</section>

<?php if(have_rows($static_section) || $static_section['image'] ) : ?>

<section class="wacoal-101">
    <div class="wacoal-101--wrapper">

    <?php if($static_section['image'] && !empty($static_section['image'])) :
        if(!empty($static_section['image_link'])) :?>
                <a href="<?php echo esc_url($static_section['image_link']);?>"
                <?php if($static_section['link_open_in_new_tab'] == true) : echo "target='_blank'";
                endif;?>>
        <?php endif;
        ?>
        <div class="wacoal-101--image">
            <img class="lazyload"
                data-src="<?php echo  esc_url($static_section['image']); ?>"
                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                alt="Wacoal 101" />
        </div>
        <?php
        if(!empty($static_section['image_link'])) :?>
        </a>
            <?php
        endif;
    endif;?>

       <div class="wacoal-101--content">

       <?php if($static_section['title_link'] && !empty($static_section['title_link'])) : ?>
            <a href="<?php echo esc_url($static_section['title_link']);?>"
            <?php if($static_section['link_open_in_new_tab'] == true) : echo "target='_blank'";
            endif;?>>
       <?php endif;?>
                <div class="wacoal-101--content__title">
                    <?php echo esc_attr($static_section['title']);?>
                </div>
                <?php if($static_section['title_link']) :?>
            </a>
                <?php endif; ?>

            <?php foreach ($static_section['links'] as $key => $page_obj) { ?>
                <div class="wacoal-101--list">
                    <div class="wacoal-101--list__icon">
                        <img class="lazyload"
                             data-src="<?php echo  esc_url(esc_url(THEMEURI)); ?>/assets/images/wacol-101-arrow.svg"
                             src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                             alt="Wacoal 101 Arrow" />
                    </div>
                    <div class="wacoal-101--list__content">
                        <a target="_blank"
                           href="<?php echo esc_url($page_obj['link']);?>">
                            <?php echo esc_attr($page_obj['title']);?>
                        </a>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>

<?php endif; ?>

<section class="spacer-120"></section>

<section class="featured-article--slider">
    <div class="swiper-container featured-article">
        <div class="swiper-wrapper">
            <?php foreach ($featured_blog_slider as $key => $featured_blog) {
                $thumbnail_id  = get_post_thumbnail_id($featured_blog->ID);
                $thumbnail_url = Wacoal_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
                $thumbnail_alt = Wacoal_Get_Image_alt($thumbnail_id, 'featured-img');
                $categories    = Wacoal_Get_Primary_category($featured_blog->ID);
                $cat_ID        = $categories->term_id;
                ?>
                <div class="swiper-slide">
                    <article class="featured-box">
                        <div class="featured-box--content">
                            <a href="<?php echo esc_url_raw(get_term_link($cat_ID));?>" class="featured-box--content__subtitle">
                                <?php echo esc_attr($categories->name);?>
                            </a>
                            <a href="<?php echo esc_url(get_permalink($featured_blog->ID)); ?>">
                                <h4 class="featured-box--content__title">
                                    <?php echo esc_attr(Wacoal_Limit_text(Wacoal_Remove_P_tag($featured_blog->post_title), 30));?>
                                </h4>
                            </a>
                            <div class="featured-box--content__para">
                                <a href="<?php echo esc_url(get_permalink($featured_blog->ID)); ?>">
                                    <?php echo wp_kses_post(Wacoal_Limit_text(Wacoal_Remove_P_tag($featured_blog->tag_line), 160));?>
                                </a>
                            </div>
                            <a href="<?php echo esc_url(get_permalink($featured_blog->ID)); ?>"
                                class="btn primary big">learn more</a>
                        </div>
                        <a href="<?php echo esc_url(get_permalink($featured_blog->ID)); ?>">
                            <div class="featured-box--image">
                                <img class="lazyload"
                                     data-src="<?php echo  esc_url($thumbnail_url); ?>"
                                     src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                     alt="<?php echo esc_attr($thumbnail_alt);?>" />
                            </div>
                        </a>
                    </article>
                </div>
            <?php } ?>
        </div>

        <div class="swiper-pagination custom-swiper-pagination"></div>

        <div class="swiper-button-next swiper-buttun-background">
            <img class="lazyload" data-src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow.svg"
            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="Slider Arrow" />
        </div>
        <div class="swiper-button-prev swiper-buttun-background">
            <img class="lazyload" data-src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow.svg"
            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="Slider Arrow" />
        </div>
    </div>
</section>

<?php $counts= wp_count_posts();?>
<input type="hidden" name="offset" id="offset" value="0">
<input type="hidden" name="total" id="total" value="<?php echo $counts->publish;?>">
<section class="more-blog">
    <div class="more-blog--title">
            <?php echo esc_html("More From The Blog");?>

    </div>
    <div class="more-blog--wrapper">
        <?php foreach ($recent_posts as $key => $blog) {
            $thumbnail_id = get_post_thumbnail_id($blog->ID);
            $thumbnail_url = Wacoal_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
            $thumbnail_alt = Wacoal_Get_Image_alt($thumbnail_id, 'featured-img');
            $categories = Wacoal_Get_Primary_category($blog->ID);
            $post_tagline = get_field('tag_line', $blog->ID);
            $cat_ID = $categories->term_id;
            ?>
            <article class="blog-tile">
                <a href="<?php echo esc_url(get_permalink($blog->ID));?>">
                    <div class="blog-tile--image">
                        <img class="lazyload" data-src="<?php echo esc_url($thumbnail_url);?>"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        alt="<?php echo esc_attr($thumbnail_alt);?>" />
                    </div>
                </a>
                <div class="blog-tile--category">
                    <?php if (! empty($categories) ) {?>
                        <a href="<?php echo esc_url_raw(get_term_link($cat_ID));?>"> <?php echo esc_attr($categories->name); ?></a>
                    <?php }?>
                </div>
                <h5 class="blog-tile--heading">
                    <a href="<?php echo esc_url(get_permalink($blog->ID));?>">
                        <?php echo esc_attr(get_the_title($blog->ID));?>
                    </a>
                </h5>
                <div class="blog-tile--para">
                <a href="<?php echo esc_url(get_permalink($blog->ID));?>">
                    <?php echo  wp_kses_post($post_tagline);?>
                    </a>
                </div>
                <a href="<?php echo esc_url(get_permalink($blog->ID));?>"
                    class="btn primary">Learn More</a>
            </article>
        <?php } ?>
    </div>
</section>
<?php if($counts->publish > 3) :?>
<div class="see-more--wrapper">
    <button class="more btn secondary">See More</button>
</div>
<?php endif;?>

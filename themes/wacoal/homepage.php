<?php
/**
 * Template Name: Homapage
 *  * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

Wacoal_Page_Entry_top('');

$top_banner_fields      = get_field('top_banner', 'options');
$slider_fields      = get_field('slider_posts', 'options');
$top_banner_image_id  = $top_banner_fields['banner_image'];
$top_banner_image_url = wp_get_attachment_image_src($top_banner_image_id, full);
$top_banner_title     = $top_banner_fields['banner_title'];
$top_banner_subtitle  = $top_banner_fields['banner_subtitle'];
$slider_blogs = get_field('slider_posts', 'options');
$featured_blogs = get_field('featured_posts', 'options');
$related_blogs = get_field('more_from_blog', 'options');
$static_section = get_field('static_section', 'options');
$featured_posts = get_posts(
    array(
    'numberposts' => 3,

    'offset' => 0,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_status'=>'publish'
    )
);
?>



<!-- Banner with image -->
<section class="banner-with-image">
    <h1 class="banner-with-image--heading">Under the wire</h1>
    <p class="banner-with-image--subtitle">The Wacoal Blog</p>
</section>


<!-- This sesction will create 80 pixel height gap between sections for big screens
and will change the height gap respective to screen size as for Mobile 22px, iPad 32px, iPad Pro 44px, Small Monitor 54px -->
<section class="spacer-80"></section>


<!-- Banner with background color -->
<!-- <section class="banner-with-background">
    <h1 class="banner-with-background--heading">wacoal 101</h1>
    <p class="banner-with-background--subtitle">
        Bra Education<br>
        Blurb Describing Category<br>
        LOREM IPSUM
    </p>
</section> -->


<!-- -->
<!-- <section class="spacer-80"></section> -->


<!-- Banner with background color -->
<!-- <section class="banner-with-background">
    <h1 class="banner-with-background--heading">bra'drobe</h1>
    <p class="banner-with-background--subtitle">
        Our Product Recommendtions<br>
        Blurb Describing Category<br>
        LOREM IPSUM
    </p>
</section> -->


<!-- This sesction will create 120 pixel height gap between sections for big screens
and will change the height gap respective to screen size as for Mobile 44px, iPad 48px, iPad Pro 64px, Small Monitor 80px -->
<!-- <section class="spacer-120"></section> -->


<!-- Featured Articles -->
<!-- <section class="featured-article">
    <div class="featured-article--wrapper">
        <article class="featured-box">
            <div class="featured-box--content">
                <p class="featured-box--content__subtitle">bra'drobe</p>
                <h4 class="featured-box--content__title">Featured Article Title</h4>
                <p class="featured-box--content__para">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                <a href="" class="btn primary">learn more</a>
            </div>
            <div class="featured-box--image">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/featured-article-image.png" alt="Featured Article" />
            </div>
        </article>
        <article class="featured-box">
            <div class="featured-box--content">
                <p class="featured-box--content__subtitle">bra'drobe</p>
                <h4 class="featured-box--content__title">Featured Article Title</h4>
                <p class="featured-box--content__para">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                <a href="" class="btn primary">learn more</a>
            </div>
            <div class="featured-box--image">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/featured-article-image.png" alt="Featured Article" />
            </div>
        </article>
    </div>
</section> -->


<!-- -->
<!-- <section class="spacer-120"></section> -->


<!-- Wacoal 101 -->
<!-- <section class="wacoal-101">
    <div class="wacoal-101--wrapper">
        <div class="wacoal-101--image">
            <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/wacoal-101-image.png" alt="Wacoal 101" />
        </div>
        <div class="wacoal-101--content">
            <div class="wacoal-101--content__title">
                Wacoal 101
            </div>
            <div class="wacoal-101--list">
                <div class="wacoal-101--list__icon">
                    <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/wacol-101-arrow.svg" alt="Wacoal 101 Arrow" />
                </div>
                <div class="wacoal-101--list__content">Bra Finder</div>
            </div>
            <div class="wacoal-101--list">
                <div class="wacoal-101--list__icon">
                    <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/wacol-101-arrow.svg" alt="Wacoal 101 Arrow" />
                </div>
                <div class="wacoal-101--list__content">Bra Fit Calculator</div>
            </div>
            <div class="wacoal-101--list">
                <div class="wacoal-101--list__icon">
                    <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/wacol-101-arrow.svg" alt="Wacoal 101 Arrow" />
                </div>
                <div class="wacoal-101--list__content">Breast Shape Guide</div>
            </div>
            <div class="wacoal-101--list">
                <div class="wacoal-101--list__icon">
                    <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/wacol-101-arrow.svg" alt="Wacoal 101 Arrow" />
                </div>
                <div class="wacoal-101--list__content">Size Charts</div>
            </div>
            <div class="wacoal-101--list">
                <div class="wacoal-101--list__icon">
                    <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/wacol-101-arrow.svg" alt="Wacoal 101 Arrow" />
                </div>
                <div class="wacoal-101--list__content">Ask A Bra Fit Expert</div>
            </div>
        </div>
    </div>
</section> -->


<!-- -->
<!-- <section class="spacer-80"></section> -->


<!-- More From Blog -->
<!-- <section class="more-blog">
    <div class="more-blog--title">
            More From The Blog
    </div>
    <div class="more-blog--wrapper">
        <article class="blog-tile">
            <div class="blog-tile--image">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/blog-img-1.png" alt="Blog Image" />
            </div>
            <div class="blog-tile--category">
                Category
            </div>
            <h5 class="blog-tile--heading">
                Does Your Bra Have An Expiration Date?
            </h5>
            <p class="blog-tile--para">
                Lorem ipsum dolor sit amet, consectetur adipisicing
                elit, sed do eiusmod tempor incididunt ut labore at
                dolore magna a liqua. Ut enim ad
            </p>
            <a href="" class="btn primary">Learn More</a>
        </article>

        <article class="blog-tile">
            <div class="blog-tile--image">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/blog-img-2.png" alt="Blog Image" />
            </div>
            <div class="blog-tile--category">
                Category
            </div>
            <h5 class="blog-tile--heading">
                Does Your Bra Have An Expiration Date?
            </h5>
            <p class="blog-tile--para">
                Lorem ipsum dolor sit amet, consectetur adipisicing
                elit, sed do eiusmod tempor incididunt ut labore at
                dolore magna a liqua. Ut enim ad
            </p>
            <a href="" class="btn primary">Learn More</a>
        </article>

        <article class="blog-tile">
            <div class="blog-tile--image">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/blog-img-3.png" alt="Blog Image" />
            </div>
            <div class="blog-tile--category">
                Category
            </div>
            <h5 class="blog-tile--heading">
                Does Your Bra Have An Expiration Date?
            </h5>
            <p class="blog-tile--para">
                Lorem ipsum dolor sit amet, consectetur adipisicing
                elit, sed do eiusmod tempor incididunt ut labore at
                dolore magna a liqua. Ut enim ad
            </p>
            <a href="" class="btn primary">Learn More</a>
        </article>
    </div>
</section> -->
<!-- -->
<!-- <section class="spacer-120"></section> -->

<!-- Entry page full width Slider -->
<!-- <section class="full-width-slider--wrapper">
    <div class="swiper-container full-width-slider">
        <div class="swiper-wrapper">
        <div class="swiper-slide">
            <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/full-width-slider-img-1.png" alt="Slider Image" />
        </div>
        <div class="swiper-slide">
            <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/full-width-slider-img-1.png" alt="Slider Image" />
        </div>
        <div class="swiper-slide">
            <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/full-width-slider-img-1.png" alt="Slider Image" />
        </div>
        <div class="swiper-slide">
            <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/full-width-slider-img-1.png" alt="Slider Image" />
        </div>
        </div>

        <div class="swiper-pagination custom-swiper-pagination"></div>

        <div class="swiper-button-next swiper-buttun-background">
            <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow.svg" alt="Slider Arrow" />
        </div>
        <div class="swiper-button-prev swiper-buttun-background">
            <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow.svg" alt="Slider Arrow" />
        </div>
    </div>
</section> -->

<!-- -->
<!-- <section class="spacer-120"></section> -->

<!-- Evergreen Articles Slider -->
<!-- <section class="evergreen-article--slider">
    <div class="swiper-container center-slide-slider">
        <div class="swiper-wrapper">
        <div class="swiper-slide evergreen-article">
            <div class="evergreen-article--content">
                <p class="evergreen-article--content__subtitle">bra'drobe</p>
                <h3 class="evergreen-article--content__title">evergreen article</h3>
                <p class="evergreen-article--content__para">lightweight, breathable fabrics so you can keep your cool all day (and night) long.</p>
            </div>
            <div class="evergreen-article--image">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/full-width-slider-img-1.png" alt="Slider Image" />
            </div>
            <div class="evergreen-article--button">
                <a href="" class="btn primary">learn more</a>
            </div>
        </div>
        <div class="swiper-slide evergreen-article">
            <div class="evergreen-article--content">
                <p class="evergreen-article--content__subtitle">bra'drobe</p>
                <h3 class="evergreen-article--content__title">evergreen article</h3>
                <p class="evergreen-article--content__para">lightweight, breathable fabrics so you can keep your cool all day (and night) long.</p>
            </div>
            <div class="evergreen-article--image">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/full-width-slider-img-1.png" alt="Slider Image" />
            </div>
            <div class="evergreen-article--button">
                <a href="" class="btn primary">learn more</a>
            </div>
        </div>
        <div class="swiper-slide evergreen-article">
            <div class="evergreen-article--content">
                <p class="evergreen-article--content__subtitle">bra'drobe</p>
                <h3 class="evergreen-article--content__title">evergreen article</h3>
                <p class="evergreen-article--content__para">lightweight, breathable fabrics so you can keep your cool all day (and night) long.</p>
            </div>
            <div class="evergreen-article--image">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/full-width-slider-img-1.png" alt="Slider Image" />
            </div>
            <div class="evergreen-article--button">
                <a href="" class="btn primary">learn more</a>
            </div>
        </div>
        <div class="swiper-slide evergreen-article">
            <div class="evergreen-article--content">
                <p class="evergreen-article--content__subtitle">bra'drobe</p>
                <h3 class="evergreen-article--content__title">evergreen article</h3>
                <p class="evergreen-article--content__para">lightweight, breathable fabrics so you can keep your cool all day (and night) long.</p>
            </div>
            <div class="evergreen-article--image">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/full-width-slider-img-1.png" alt="Slider Image" />
            </div>
            <div class="evergreen-article--button">
                <a href="" class="btn primary">learn more</a>
            </div>
        </div>
        <div class="swiper-slide evergreen-article">
            <div class="evergreen-article--content">
                <p class="evergreen-article--content__subtitle">bra'drobe</p>
                <h3 class="evergreen-article--content__title">evergreen article</h3>
                <p class="evergreen-article--content__para">lightweight, breathable fabrics so you can keep your cool all day (and night) long.</p>
            </div>
            <div class="evergreen-article--image">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/full-width-slider-img-1.png" alt="Slider Image" />
            </div>
            <div class="evergreen-article--button">
                <a href="" class="btn primary">learn more</a>
            </div>
        </div>
        <div class="swiper-slide evergreen-article">
            <div class="evergreen-article--content">
                <p class="evergreen-article--content__subtitle">bra'drobe</p>
                <h3 class="evergreen-article--content__title">evergreen article</h3>
                <p class="evergreen-article--content__para">lightweight, breathable fabrics so you can keep your cool all day (and night) long.</p>
            </div>
            <div class="evergreen-article--image">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/full-width-slider-img-1.png" alt="Slider Image" />
            </div>
            <div class="evergreen-article--button">
                <a href="" class="btn primary">learn more</a>
            </div>
        </div>
        </div>

        <div class="swiper-pagination custom-swiper-pagination"></div>

        <div class="swiper-button-next swiper-buttun-background">
            <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow.svg" alt="Slider Arrow" />
        </div>
        <div class="swiper-button-prev swiper-buttun-background">
            <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow.svg" alt="Slider Arrow" />
        </div>
  </div>
</section> -->

<!-- -->
<!-- <section class="spacer-120"></section> -->

<!-- Featured Artcile Slider -->
<!-- <section class="featured-article--slider">
    <div class="swiper-container featured-article">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <article class="featured-box">
                    <div class="featured-box--content">
                        <p class="featured-box--content__subtitle">bra'drobe</p>
                        <h4 class="featured-box--content__title">Featured Article Title</h4>
                        <p class="featured-box--content__para">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                        <a href="" class="btn primary">learn more</a>
                    </div>
                    <div class="featured-box--image">
                        <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/featured-article-image.png" alt="Featured Article" />
                    </div>
                </article>
            </div>

            <div class="swiper-slide">
                <article class="featured-box">
                    <div class="featured-box--content">
                        <p class="featured-box--content__subtitle">bra'drobe</p>
                        <h4 class="featured-box--content__title">Featured Article Title</h4>
                        <p class="featured-box--content__para">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                        <a href="" class="btn primary">learn more</a>
                    </div>
                    <div class="featured-box--image">
                        <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/featured-article-image.png" alt="Featured Article" />
                    </div>
                </article>
            </div>

            <div class="swiper-slide">
                <article class="featured-box">
                    <div class="featured-box--content">
                        <p class="featured-box--content__subtitle">bra'drobe</p>
                        <h4 class="featured-box--content__title">Featured Article Title</h4>
                        <p class="featured-box--content__para">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                        <a href="" class="btn primary">learn more</a>
                    </div>
                    <div class="featured-box--image">
                        <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/featured-article-image.png" alt="Featured Article" />
                    </div>
                </article>
            </div>

            <div class="swiper-slide">
                <article class="featured-box">
                    <div class="featured-box--content">
                        <p class="featured-box--content__subtitle">bra'drobe</p>
                        <h4 class="featured-box--content__title">Featured Article Title</h4>
                        <p class="featured-box--content__para">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                        <a href="" class="btn primary">learn more</a>
                    </div>
                    <div class="featured-box--image">
                        <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/featured-article-image.png" alt="Featured Article" />
                    </div>
                </article>
            </div>
        </div>

        <div class="swiper-pagination custom-swiper-pagination"></div>

        <div class="swiper-button-next swiper-buttun-background">
            <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow.svg" alt="Slider Arrow" />
        </div>
        <div class="swiper-button-prev swiper-buttun-background">
            <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow.svg" alt="Slider Arrow" />
        </div>
    </div>
</section> -->

<!-- Pagination -->
<!-- <section class="pagination">
    <div class="pagination--wrapper">
        <div class="pagination-box">
            <div class="pagination-box--btn">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/pagination-prev-icon.svg" alt="Prev Icon" />
            </div>
            <ul class="pagination-box--numbers">
                <li><a href="#" class="active">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">...</a></li>
                <li><a href="#">6</a></li>
            </ul>
            <div class="pagination-box--btn">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/pagination-next-icon.svg" alt="Next Icon" />
            </div>
        </div>
    </div>
</section> -->

<!-- -->
<section class="spacer-120"></section>

<section class="fixes-list mobile-ui">
    <div class="fixes-list--wrapper">
        <div class="fixes-list--box">
            <div class="fixes-list--boxtitle">
                ULTIMATE LIFT™
            </div>
            <div class="fixes-list--boxcontent">
                <div class="list-image">
                    <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/fixes-list.png" alt="5 Fixes" />
                </div>

                <div class="verticle-text">
                    Elevated Allure Underwire Bra
                </div>
                <div class="list-content">
                    <div>
                        Designed to lift the bustline up to one inch and give you a significant, gravity-defying boost.
                    </div>

                    <a href="#" class="btn primary">Shop Now</a>
                </div>
            </div>
        </div>

        <div class="fixes-list--box">
            <div class="fixes-list--boxtitle">
                ULTIMATE LIFT™
            </div>
            <div class="fixes-list--boxcontent">
                <div class="list-image">
                    <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/fixes-list.png" alt="5 Fixes" />
                </div>

                <div class="verticle-text">
                    Elevated Allure Underwire Bra
                </div>
                <div class="list-content">
                    <div>
                        Designed to lift the bustline up to one inch and give you a significant, gravity-defying boost.
                    </div>

                    <a href="#" class="btn primary">Shop Now</a>
                </div>
            </div>
        </div>

        <div class="fixes-list--box">
            <div class="fixes-list--boxtitle">
                ULTIMATE LIFT™
            </div>
            <div class="fixes-list--boxcontent">
                <div class="list-image">
                    <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/fixes-list.png" alt="5 Fixes" />
                </div>

                <div class="verticle-text">
                    Elevated Allure Underwire Bra
                </div>
                <div class="list-content">
                    <div>
                        Designed to lift the bustline up to one inch and give you a significant, gravity-defying boost.
                    </div>

                    <a href="#" class="btn primary">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="fixes-list desktop-ui">
    <div class="fixes-list--wrapper">
        <div class="fixes-list--box even">
            <div class="fixes-list--boxtitle">
                ULTIMATE LIFT™
            </div>
            <div class="fixes-list--boxcontent">
                <div class="verticle-text">
                    Elevated Allure Underwire Bra
                </div>
                <div class="list-image">
                    <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/fixes-list.png" alt="5 Fixes" />
                </div>
                <div class="list-content">
                    <div>
                        Designed to lift the bustline up to one inch and give you a significant, gravity-defying boost.
                    </div>

                    <a href="#" class="btn primary">Shop Now</a>
                </div>
            </div>
        </div>

        <div class="fixes-list--box odd">
            <div class="fixes-list--boxtitle">
                Back & Side Smoothing
            </div>
            <div class="fixes-list--boxcontent">
                <div class="verticle-text">
                    Ultimate Side Smoother Underwire T-Shirt Bra
                </div>

                <div class="list-content">
                    <div>
                    Smooths back bulge and minimizes indentations in the underarm area and along the sides of the body for a streamlined silhouette.
                    </div>

                    <a href="#" class="btn primary">Shop Now</a>
                </div>

                <div class="list-image">
                    <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/fixes-list.png" alt="5 Fixes" />
                </div>
            </div>
        </div>

        <div class="fixes-list--box even">
            <div class="fixes-list--boxtitle">
                ULTIMATE LIFT™
            </div>
            <div class="fixes-list--boxcontent">
                <div class="verticle-text">
                    Elevated Allure Underwire Bra
                </div>
                <div class="list-image">
                    <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/fixes-list.png" alt="5 Fixes" />
                </div>
                <div class="list-content">
                    <div>
                        Designed to lift the bustline up to one inch and give you a significant, gravity-defying boost.
                    </div>

                    <a href="#" class="btn primary">Shop Now</a>
                </div>
            </div>
        </div>

        <div class="fixes-list--box odd">
            <div class="fixes-list--boxtitle">
                Back & Side Smoothing
            </div>
            <div class="fixes-list--boxcontent">
                <div class="verticle-text">
                    Ultimate Side Smoother Underwire T-Shirt Bra
                </div>

                <div class="list-content">
                    <div>
                    Smooths back bulge and minimizes indentations in the underarm area and along the sides of the body for a streamlined silhouette.
                    </div>

                    <a href="#" class="btn primary">Shop Now</a>
                </div>

                <div class="list-image">
                    <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/fixes-list.png" alt="5 Fixes" />
                </div>
            </div>
        </div>
    </div>
</section>

<section class="spacer-120"></section>

<section class="reminder-note">
    <div class="reminder-note--wrapper">
        <div class="image">
            <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/reminder-icon.png" alt="reminder icon" />
        </div>

        <div class="content">
        ✓ <strong>Reminder:</strong> Have you gotten your breast cancer screening yet? Stay on top of your breast health with this essential checklist. Don’t wait, get started today!
        </div>
    </div>
</section>

<section class="spacer-120"></section>

<section class="reminder-note">
    <div class="reminder-note--wrapper">
        <div class="content-small">
        📱 Share your story and remember to tag us on Instagram <span>@wacoalamerica</span>. <span>#giveamoment</span>
        </div>
    </div>
</section>

<section class="spacer-120"></section>

<section class="donation">
    <div class="donation--wrapper">
        <div class="donation--wrapper-left">
            <div class="title">
                Our Donations Help Women
            </div>
            <div class="para">
                We are able to make an immediate and tangible difference in the lives of countless women on their breast cancer journeys. Here’s how your Wacoal purchases and participation have made an impact and helped us support the fight against breast cancer over the last 20 years:
            </div>
            <ul class="timeline">
                <li class="timeline-item">
                    <div class="timeline-text first-para">
                        In 2001, we introduced <a href="#">Fit for the Cure®</a> at stores nationwide and donated $2 to Komen for every complimentary bra fitting. We’ve conducted nearly 953,000 fittings and counting.
                    </div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-text">
                        In 2005, we expanded our donation to include an additional $2 for every Wacoal bra sold at a Fit for the Cure® event.
                    </div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-text">
                        In 2020, we launched <a href="#">Bras with a Cause</a> and invited everyone to take part online. We donated $2 to Susan G. Komen® for every regular-price bra purchased on our website and in stores from October 4th to 10th.
                    </div>
                </li>
                <li class="timeline-item">
                    <div class="timeline-text">
                        To date, we’ve donated nearly $5.8 million to Susan G. Komen® to support national and local breast cancer community programs.
                    </div>
                </li>
            </ul>

            <div class="title">
                Raise Awareness Together
            </div>
            <div class="para">
                In the fall of 2016, <a href="#">Susan G. Komen®</a> set a Bold Goal to reduce the current number of breast cancer deaths in the U.S. by 50% by 2026. Let’s make it happen! <a href="#">Click here</a> to learn more about Susan G. Komen® and their Bold Goal.
            </div>
        </div>
        <div class="donation--wrapper-right">
            <div class="quote">
                Being a cancer patient has had an impact on my life—physically, mentally, and emotionally. Knowing that there are organizations like yours out there to help means the world to me. Thank you for everything. <br>
                <span>– Komen Treatment Assistance Recipient</span>
            </div>

            <div class="quote">
            Thank you for the support. I was able to travel for my bilateral mastectomy with my family and rent a house for our stay.<br>
                <span>– Komen Treatment Assistance Recipient</span>
            </div>

            <div class="quote">
            I am so grateful for this help. I am widowed and have several health issues. These funds cover the entire cost of my sleeve and glove. What a blessing you have been, not only for me but for many people.<br>
                <span>– Komen Treatment Assistance Recipient</span>
            </div>
        </div>
    </div>
</section>


<!-- <section class="seasonless-style">
    <div class="seasonless-style--wrapper">
        <div class="box">
            <div class="box--left">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/bt-img.png" alt="" />
            </div>
            <div class="box--right">
                <div class="title">Suit Yourself</div>
                <div class="para">
                    This b.charming Bodysuit is pure romance. Featuring on-trend eyelet-inspired lace, we love how a bodysuit can add an element of sexy surprise under any look—especially once it’s sweater weather. It’s sleek and clings to the body, making it a great choice as a first layer.
                </div>
            </div>
        </div>
    </div>
</section> -->

<?php
Wacoal_Page_Entry_bottom();

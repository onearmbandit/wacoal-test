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
<section class="banner-with-background">
    <h1 class="banner-with-background--heading">wacoal 101</h1>
    <p class="banner-with-background--subtitle">
        Bra Education<br>
        Blurb Describing Category<br>
        LOREM IPSUM
    </p>
</section>


<!-- -->
<section class="spacer-80"></section>


<!-- Banner with background color -->
<section class="banner-with-background">
    <h1 class="banner-with-background--heading">bra'drobe</h1>
    <p class="banner-with-background--subtitle">
        Our Product Recommendtions<br>
        Blurb Describing Category<br>
        LOREM IPSUM
    </p>
</section>


<!-- This sesction will create 120 pixel height gap between sections for big screens
and will change the height gap respective to screen size as for Mobile 44px, iPad 48px, iPad Pro 64px, Small Monitor 80px -->
<section class="spacer-120"></section>


<!-- Featured Articles -->
<section class="featured-article">
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
</section>


<!-- -->
<section class="spacer-120"></section>


<!-- Wacoal 101 -->
<section class="wacoal-101">
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
</section>


<!-- -->
<section class="spacer-80"></section>


<!-- More From Blog -->
<section class="more-blog">
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
</section>
<!-- -->
<section class="spacer-120"></section>

<!-- Entry page full width Slider -->
<section class="full-width-slider--wrapper">
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
</section>

<!-- -->
<section class="spacer-120"></section>

<!-- Evergreen Articles Slider -->
<section class="evergreen-article--slider">
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
</section>

<!-- -->
<section class="spacer-120"></section>

<!-- Featured Artcile Slider -->
<section class="featured-article--slider">
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
</section>

<!-- Pagination -->
<section class="pagination">
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
</section>

<!-- -->
<section class="spacer-120"></section>


<?php
Wacoal_Page_Entry_bottom();

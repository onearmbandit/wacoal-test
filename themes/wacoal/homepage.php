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

wacoal_page_entry_top('');

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

<!-- Header -->
<!-- <header class="header-section">
    <img class="header-section--logo" src="<?php //echo  get_theme_file_uri(); ?>/assets/images/wacoal-logo.svg" alt="Wacoal" />
</header>
<nav class="header-navigation">
    <ul class="header-navigation--ul">
        <li class="header-navigation--list"><a href="" class="header-navigation--link">WACOAL 101</a></li>
        <li class="header-navigation--list"><a href="" class="header-navigation--link">STYLE GUIDE</a></li>
        <li class="header-navigation--list"><a href="" class="header-navigation--link">BRA TRENDS: TIPS & HOW TO’S</a></li>
        <li class="header-navigation--list"><a href="" class="header-navigation--link">BRA’DROBE</a></li>
    </ul>
</nav> -->

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
                <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/featured-article-image.png" alt="Featured Article" />
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
                <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/featured-article-image.png" alt="Featured Article" />
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
            <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/wacoal-101-image.png" alt="Wacoal 101" />
        </div>
        <div class="wacoal-101--content">
            <div class="wacoal-101--content__title">
                Wacoal 101
            </div>
            <div class="wacoal-101--list">
                <div class="wacoal-101--list__icon">
                    <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/wacol-101-arrow.svg" alt="Wacoal 101 Arrow" />
                </div>
                <div class="wacoal-101--list__content">Bra Finder</div>
            </div>
            <div class="wacoal-101--list">
                <div class="wacoal-101--list__icon">
                    <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/wacol-101-arrow.svg" alt="Wacoal 101 Arrow" />
                </div>
                <div class="wacoal-101--list__content">Bra Fit Calculator</div>
            </div>
            <div class="wacoal-101--list">
                <div class="wacoal-101--list__icon">
                    <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/wacol-101-arrow.svg" alt="Wacoal 101 Arrow" />
                </div>
                <div class="wacoal-101--list__content">Breast Shape Guide</div>
            </div>
            <div class="wacoal-101--list">
                <div class="wacoal-101--list__icon">
                    <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/wacol-101-arrow.svg" alt="Wacoal 101 Arrow" />
                </div>
                <div class="wacoal-101--list__content">Size Charts</div>
            </div>
            <div class="wacoal-101--list">
                <div class="wacoal-101--list__icon">
                    <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/wacol-101-arrow.svg" alt="Wacoal 101 Arrow" />
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
                <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/blog-img-1.png" alt="Blog Image" />
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
                <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/blog-img-2.png" alt="Blog Image" />
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
                <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/blog-img-3.png" alt="Blog Image" />
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
            <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/full-width-slider-img-1.png" alt="Slider Image" />
        </div>
        <div class="swiper-slide">
            <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/full-width-slider-img-1.png" alt="Slider Image" />
        </div>
        <div class="swiper-slide">
            <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/full-width-slider-img-1.png" alt="Slider Image" />
        </div>
        <div class="swiper-slide">
            <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/full-width-slider-img-1.png" alt="Slider Image" />
        </div>
        </div>

        <div class="swiper-pagination custom-swiper-pagination"></div>

        <div class="swiper-button-next swiper-buttun-background">
            <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/swiper-arrow.svg" alt="Slider Arrow" />
        </div>
        <div class="swiper-button-prev swiper-buttun-background">
            <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/swiper-arrow.svg" alt="Slider Arrow" />
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
                <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/full-width-slider-img-1.png" alt="Slider Image" />
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
                <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/full-width-slider-img-1.png" alt="Slider Image" />
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
                <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/full-width-slider-img-1.png" alt="Slider Image" />
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
                <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/full-width-slider-img-1.png" alt="Slider Image" />
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
                <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/full-width-slider-img-1.png" alt="Slider Image" />
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
                <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/full-width-slider-img-1.png" alt="Slider Image" />
            </div>
            <div class="evergreen-article--button">
                <a href="" class="btn primary">learn more</a>
            </div>
        </div>
        </div>

        <div class="swiper-pagination custom-swiper-pagination"></div>

        <div class="swiper-button-next swiper-buttun-background">
            <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/swiper-arrow.svg" alt="Slider Arrow" />
        </div>
        <div class="swiper-button-prev swiper-buttun-background">
            <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/swiper-arrow.svg" alt="Slider Arrow" />
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
                        <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/featured-article-image.png" alt="Featured Article" />
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
                        <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/featured-article-image.png" alt="Featured Article" />
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
                        <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/featured-article-image.png" alt="Featured Article" />
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
                        <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/featured-article-image.png" alt="Featured Article" />
                    </div>
                </article>
            </div>
        </div>

        <div class="swiper-pagination custom-swiper-pagination"></div>

        <div class="swiper-button-next swiper-buttun-background">
            <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/swiper-arrow.svg" alt="Slider Arrow" />
        </div>
        <div class="swiper-button-prev swiper-buttun-background">
            <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/swiper-arrow.svg" alt="Slider Arrow" />
        </div>
    </div>
</section>

<!-- Static Footer -->
<!-- <footer class="footer-section">
    <div class="footer-wrapper">
        <div class="footer-wrapper--left">
            <div class="footer-links">
                <div class="footer-links--title">
                    Shop
                </div>
                <ul class="footer-links--ul">
                    <li class="footer-links--ul__list">
                        <a href="" class="footer-links--ul__link">New Arrivals</a>
                    </li>
                    <li class="footer-links--ul__list">
                        <a href="" class="footer-links--ul__link">Bras</a>
                    </li>
                    <li class="footer-links--ul__list">
                        <a href="" class="footer-links--ul__link">dd+</a>
                    </li>
                    <li class="footer-links--ul__list">
                        <a href="" class="footer-links--ul__link">Plus Size</a>
                    </li>
                    <li class="footer-links--ul__list">
                        <a href="" class="footer-links--ul__link">Panties</a>
                    </li>
                    <li class="footer-links--ul__list">
                        <a href="" class="footer-links--ul__link">Shape Wear</a>
                    </li>
                    <li class="footer-links--ul__list">
                        <a href="" class="footer-links--ul__link">Lingerie</a>
                    </li>
                    <li class="footer-links--ul__list">
                        <a href="" class="footer-links--ul__link">Last Chance</a>
                    </li>
                </ul>
            </div>
            <div class="footer-links">
                <div class="footer-links--title">
                    Wacoal America
                </div>
                <ul class="footer-links--ul">
                    <li class="footer-links--ul__list">
                        <a href="" class="footer-links--ul__link">About Us</a>
                    </li>
                    <li class="footer-links--ul__list">
                        <a href="" class="footer-links--ul__link">Email sign up</a>
                    </li>
                    <li class="footer-links--ul__list">
                        <a href="" class="footer-links--ul__link">Fit for the cure</a>
                    </li>
                    <li class="footer-links--ul__list">
                        <a href="" class="footer-links--ul__link">Wacoal stores</a>
                    </li>
                    <li class="footer-links--ul__list">
                        <a href="" class="footer-links--ul__link">Store Locator</a>
                    </li>
                    <li class="footer-links--ul__list">
                        <a href="" class="footer-links--ul__link">Wacoal Canada</a>
                    </li>
                    <li class="footer-links--ul__list">
                        <a href="" class="footer-links--ul__link">Careers</a>
                    </li>
                </ul>
            </div>
            <div class="footer-links">
                <div class="footer-links--title">
                Customer Support
                </div>
                <ul class="footer-links--ul">
                    <li class="footer-links--ul__list">
                        <a href="" class="footer-links--ul__link">Shipping & Return</a>
                    </li>
                    <li class="footer-links--ul__list">
                        <a href="" class="footer-links--ul__link">FAQ</a>
                    </li>
                    <li class="footer-links--ul__list">
                        <a href="" class="footer-links--ul__link">Contact us</a>
                    </li>
                    <li class="footer-links--ul__list">
                        <a href="" class="footer-links--ul__link">E-gift cards</a>
                    </li>
                    <li class="footer-links--ul__list">
                        <a href="" class="footer-links--ul__link">Order Status</a>
                    </li>
                </ul>
            </div>
            <div class="footer-links">
                <div class="footer-links--title">
                    Bra Education
                </div>
                <ul class="footer-links--ul">
                    <li class="footer-links--ul__list">
                        <a href="" class="footer-links--ul__link">Bra Finder</a>
                    </li>
                    <li class="footer-links--ul__list">
                        <a href="" class="footer-links--ul__link">Bra fir calculator</a>
                        <a href="" class="footer-links--ul__link">Bra fit calculator</a>
                    </li>
                    <li class="footer-links--ul__list">
                        <a href="" class="footer-links--ul__link">Fit Consultants</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-wrapper--right">
            <div class="footer-images">
                <img class="footer-images--img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/footer-img-1.png" alt="Wacoal Image 1" />
                <img class="footer-images--img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/footer-img-2.png" alt="Wacoal Image 2" />
                <img class="footer-images--img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/footer-img-3.png" alt="Wacoal Image 3" />
                <img class="footer-images--img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/footer-img-4.png" alt="Wacoal Image 4" />
            </div>
            <div class="footer-social">
                <a href="" class="footer-social--icon">
                    <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/facebook-icon.svg" alt="Wacoal Facebook" />
                </a>
                <a href="" class="footer-social--icon">
                    <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/twitter-icon.svg" alt="Wacoal Twitter" />
                </a>
                <a href="" class="footer-social--icon">
                    <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/youtube-icon.svg" alt="Wacoal Youtube" />
                </a>
                <a href="" class="footer-social--icon">
                    <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/instagram-icon.svg" alt="Wacoal Instagram" />
                </a>
            </div>
        </div>
    </div>
    <div class="footer-wrapper">
        <div class="footer-wrapper--copyright">
            ©2020 Wacoal. All Rights Reserved. Terms of Use. Privacy Policy. Site Map
        </div>
    </div>
</footer> -->

<?php
wacoal_page_entry_bottom();

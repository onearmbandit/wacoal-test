<?php
/**
 * Template Name: Homapage
 *  * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

Btemptd_Page_Entry_top('');
?>

<header class="header-section">
    <a href="#">
        <img class="header-section--logo" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/bt-logo.png" alt="btempt'd logo">
    </a>
    <a class="shop-btemptd-btn shop-btemptd-btn-desktop" href="https://www.wacoal-america.com/" target="_blank">
        Shop b.tempt'd &gt;    </a>
    <a class="shop-btemptd-btn shop-btemptd-btn-mobile" href="https://www.wacoal-america.com/" target="_blank">
        Shop &gt;    </a>
</header>

    <nav class="header-navigation">
        <div class="header-navigation-mobile">
            <div class="mobile-nav">Blogs <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/mobile-nav-arrow.svg" alt="Mobile Navigation"></div>
        </div>
        <ul class="header-navigation--ul">
            <li class="header-navigation--list">
                <a href="#" class="header-navigation--link">WACOAL 101</a>
            </li>
            <li class="header-navigation--list">
                <a href="#" class="header-navigation--link">STYLE GUIDE</a>
            </li>
            <li class="header-navigation--list">
                <a href="#" class="header-navigation--link">Bra Trends: Tips &amp; How To’s</a>
            </li>
            <li class="header-navigation--list">
                <a href="#" class="header-navigation--link">BRA’DROBE</a>
            </li>
        </ul>
    </nav>

<!-- Banner with background color -->
<section class="banner-with-background">
    <h1 class="banner-with-background--heading">category</h1>
    <p class="banner-with-background--subtitle">
        Category description blurb<br>
        Blurb Describing<br>
        LOREM IPSUM
    </p>
</section>

<!-- Banner with image -->
<section class="banner-with-image">
    <div class="banner-with-image--content">
        <h1 class="banner-with-image--heading">B.TEMPT’D BLOG</h1>
        <p class="banner-with-image--subtitle">The B.TEMPT’D BLOG</p>
    </div>
    <div class="banner-with-image--image" style="background-image: url('<?php echo  esc_url(THEMEURI); ?>/assets/images/slider-image.png');">
    </div>
</section>


<!-- full width section -->
<section class="full-width-section">
    <div class="full-width-section--wrapper">
        <div class="full-width-section--image box-shadow-right">
            <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/img-1.png" />
        </div>
        <div class="full-width-section--content">
            <div class="content-title">
                ask a fit expert
            </div>
            <div class="quote">
                Why does my bra ride up in the back?
            </div>
            <div class="arrow">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/red-arrow-right.svg" />
            </div>
        </div>
    </div>

    <div class="full-width-section--wrapper even">
        <div class="full-width-section--image box-shadow-left">
            <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/img-1.png" />
        </div>
        <div class="full-width-section--content">
            <div class="arrow">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/red-arrow-left.svg" />
            </div>
            <div class="content-title">
                ask a fit expert
            </div>
            <div class="quote">
                Why does my bra ride up in the back?
            </div>
        </div>
    </div>

    <div class="full-width-section--wrapper">
        <div class="full-width-section--image box-shadow-right">
            <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/img-1.png" />
        </div>
        <div class="full-width-section--content">
            <div class="content-title">
                bra finder
            </div>
            <div class="quote">
                Why does my bra ride up in the back?
            </div>
            <div class="arrow">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/red-arrow-right.svg" />
            </div>
        </div>
    </div>
</section>

<!-- size chart section -->
<!-- <section class="size-chart">
    <div class="size-chart--wrapper">
        <div class="size-chart--left box-shadow-right">
            <div class="size-chart--image">
                <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/bras-size-chart.png" />
            </div>
            <div class="size-chart--content">
                Bras
            </div>
        </div>
        <div class="size-chart--middle box-shadow">
            <div class="cta left">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/red-arrow-left.svg" />
            </div>
            <div class="cta right">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/red-arrow-right.svg" />
            </div>
            <div class="size-chart--middle__content">
                size chart
            </div>
        </div>
        <div class="size-chart--right box-shadow-right">
            <div class="size-chart--image">
                <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/panties-size-chart.png" />
            </div>
            <div class="size-chart--content">
                Panties
            </div>
        </div>
    </div>
</section> -->


<!-- Explore the Blog -->
<section class="explore-blog">
    <div class="explore-blog--title">Explore the blog</div>

    <div class="explore-blog--bg">
    <div class="explore-blog--wrapper">
        <div class="explore-blog--box">
            <div class="explore-blog--image">
                <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/blog-img-1.png" />
            </div>

            <div class="explore-blog--content">
                <div class="explore-blog--content__cta">
                    <a>
                        <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/cta-down-arrow.svg" />
                    </a>
                </div>
                <div class="explore-blog--content__category">
                    category
                </div>
                <div class="explore-blog--content__title">
                    Featured Article Title Lorem Ipsum
                </div>
            </div>
        </div>

        <div class="explore-blog--box">
            <div class="explore-blog--image">
                <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/blog-img-2.png" />
            </div>

            <div class="explore-blog--content">
                <div class="explore-blog--content__cta">
                    <a>
                        <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/cta-down-arrow.svg" />
                    </a>
                </div>
                <div class="explore-blog--content__category">
                    category
                </div>
                <div class="explore-blog--content__title">
                    Featured Article Title Lorem Ipsum
                </div>
            </div>
        </div>

        <div class="explore-blog--box">
            <div class="explore-blog--image">
                <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/blog-img-3.png" />
            </div>

            <div class="explore-blog--content">
                <div class="explore-blog--content__cta">
                    <a>
                        <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/cta-down-arrow.svg" />
                    </a>
                </div>
                <div class="explore-blog--content__category">
                    category
                </div>
                <div class="explore-blog--content__title">
                    Featured Article Title Lorem Ipsum
                </div>
            </div>
        </div>
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
<!-- Explore the Blog -->
<!-- <section class="explore-blog blog-multiple">
    <div class="explore-blog--bg">
    <div class="explore-blog--wrapper">
        <div class="explore-blog--box">
            <div class="explore-blog--image">
                <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/blog-img-1.png" />
            </div>

            <div class="explore-blog--content">
                <div class="explore-blog--content__cta">
                    <a>
                        <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/cta-down-arrow.svg" />
                    </a>
                </div>
                <div class="explore-blog--content__category">
                    category
                </div>
                <div class="explore-blog--content__title">
                    Featured Article Title Lorem Ipsum
                </div>
            </div>
        </div>

        <div class="explore-blog--box">
            <div class="explore-blog--image">
                <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/blog-img-2.png" />
            </div>

            <div class="explore-blog--content">
                <div class="explore-blog--content__cta">
                    <a>
                        <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/cta-down-arrow.svg" />
                    </a>
                </div>
                <div class="explore-blog--content__category">
                    category
                </div>
                <div class="explore-blog--content__title">
                    Featured Article Title Lorem Ipsum
                </div>
            </div>
        </div>

        <div class="explore-blog--box">
            <div class="explore-blog--image">
                <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/blog-img-3.png" />
            </div>

            <div class="explore-blog--content">
                <div class="explore-blog--content__cta">
                    <a>
                        <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/cta-down-arrow.svg" />
                    </a>
                </div>
                <div class="explore-blog--content__category">
                    category
                </div>
                <div class="explore-blog--content__title">
                    Featured Article Title Lorem Ipsum
                </div>
            </div>
        </div>
    </div>
    </div>


</section>

<section class="explore-blog blog-multiple">
    <div class="explore-blog--bg">
    <div class="explore-blog--wrapper">
        <div class="explore-blog--box">
            <div class="explore-blog--image">
                <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/blog-img-1.png" />
            </div>

            <div class="explore-blog--content">
                <div class="explore-blog--content__cta">
                    <a>
                        <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/cta-down-arrow.svg" />
                    </a>
                </div>
                <div class="explore-blog--content__category">
                    category
                </div>
                <div class="explore-blog--content__title">
                    Featured Article Title Lorem Ipsum
                </div>
            </div>
        </div>

        <div class="explore-blog--box">
            <div class="explore-blog--image">
                <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/blog-img-2.png" />
            </div>

            <div class="explore-blog--content">
                <div class="explore-blog--content__cta">
                    <a>
                        <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/cta-down-arrow.svg" />
                    </a>
                </div>
                <div class="explore-blog--content__category">
                    category
                </div>
                <div class="explore-blog--content__title">
                    Featured Article Title Lorem Ipsum
                </div>
            </div>
        </div>

        <div class="explore-blog--box">
            <div class="explore-blog--image">
                <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/blog-img-3.png" />
            </div>

            <div class="explore-blog--content">
                <div class="explore-blog--content__cta">
                    <a>
                        <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/cta-down-arrow.svg" />
                    </a>
                </div>
                <div class="explore-blog--content__category">
                    category
                </div>
                <div class="explore-blog--content__title">
                    Featured Article Title Lorem Ipsum
                </div>
            </div>
        </div>
    </div>
    </div>
</section> -->


<!-- featured article -->
<section class="featured-articles">
    <div class="featured-articles--wrapper">
        <div class="swiper-container featured-articles-slider">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="swiper-slide--image">
                        <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/featured-article-img-1.png" alt="Slider Image" />
                    </div>

                    <div class="swiper-slide--content">
                        <div class="swiper-slide--content__category">
                            category
                        </div>
                        <div class="swiper-slide--content__title">
                            FEATURED ARTICLE
                        </div>
                        <div class="swiper-slide--content__para">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad… minim veniam, quis nostrud
                        </div>
                        <div class="swiper-slide--content__cta">
                            <a>
                                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/cta-big-right.svg" />
                            </a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="swiper-slide--image">
                        <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/featured-article-img-2.png" alt="Slider Image" />
                    </div>

                    <div class="swiper-slide--content">
                        <div class="swiper-slide--content__category">
                            category
                        </div>
                        <div class="swiper-slide--content__title">
                            FEATURED ARTICLE
                        </div>
                        <div class="swiper-slide--content__para">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad… minim veniam, quis nostrud
                        </div>
                        <div class="swiper-slide--content__cta">
                            <a>
                                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/cta-big-right.svg" />
                            </a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="swiper-slide--image">
                        <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/featured-article-img-2.png" alt="Slider Image" />
                    </div>

                    <div class="swiper-slide--content">
                        <div class="swiper-slide--content__category">
                            category
                        </div>
                        <div class="swiper-slide--content__title">
                            FEATURED ARTICLE
                        </div>
                        <div class="swiper-slide--content__para">
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad… minim veniam, quis nostrud
                        </div>
                        <div class="swiper-slide--content__cta">
                            <a>
                                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/cta-big-right.svg" />
                            </a>
                        </div>
                    </div>
                </div>
            </div>


            <div class="swiper-button--wrapper">
                <div class="swiper-button--wrapper-inner">
                    <div class="swiper-button-next button-transparent">
                        <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow-right.svg" alt="Slider Arrow" />
                    </div>
                    <div class="swiper-button-prev button-transparent">
                        <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow-left.svg" alt="Slider Arrow" />
                    </div>
                    <div class="swiper-pagination custom-swiper-pagination"></div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php
Btemptd_Page_Entry_bottom();

<?php
/**
 * Template Name: Article Detail page
 * php version 7.4
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
<section class="article-header">
    <div class="article-header--wrapper">
        <div class="article-header--banner" style="background-image: url('<?php echo  esc_url(THEMEURI); ?>/assets/images/article-banner.png');"></div>

        <div class="article-header--category">category</div>
        <div class="article-header--title">
            take the plunge with this push up power player
        </div>
        <div class="article-header--para">
            Do you own the smartest push up bra ever made?
        </div>
    </div>
</section>

<section class="three-reason">
    <div class="three-reason--wrapper">
        <div class="three-reason--title">
            It is one of our all-time best sellers, and if it isn’t already in your bra wardrobe, here are 3 reasons why it should be:
        </div>

        <div class="reason-box odd">
            <div class="reason-box--content">
                <div  class="reason-box--content__number">1.</div>
                <div class="reason-box--content__para">
                Our design team created graduated built-in push up pads for natural looking enhancement, delivering significant lift that appears effortlessly sexy.
                </div>
            </div>

            <div class="reason-box--image">
                <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/article-img-1.png" alt="Article Image" />
            </div>
        </div>

        <div class="reason-box even">
            <div class="reason-box--content">
                <div  class="reason-box--content__number">2.</div>
                <div class="reason-box--content__para">
                Our design team created graduated built-in push up pads for natural looking enhancement, delivering significant lift that appears effortlessly sexy.
                </div>
            </div>

            <div class="reason-box--image">
                <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/article-img-1.png" alt="Article Image" />
            </div>
        </div>

        <div class="reason-box odd">
            <div class="reason-box--content">
                <div  class="reason-box--content__number">3.</div>
                <div class="reason-box--content__para">
                Our design team created graduated built-in push up pads for natural looking enhancement, delivering significant lift that appears effortlessly sexy.
                </div>
            </div>

            <div class="reason-box--image">
                <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/article-img-1.png" alt="Article Image" />
            </div>
        </div>
    </div>
</section>

<?php
Btemptd_Page_Entry_bottom();

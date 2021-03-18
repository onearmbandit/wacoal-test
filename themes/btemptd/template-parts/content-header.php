<?php
/**
 * Template part for displaying header content
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

$logo_id = get_field('header_logo', 'options');
$logo_image_array = wp_get_attachment_image_src($logo_id, 'full');
$logo_image_alt = Btemptd_Get_Image_alt($logo_id, "btempt'd logo");
$logo_image_url = Btemptd_Get_Image($logo_image_array);
?>
<header class="header-section">
    <a href="<?php echo esc_url(home_url());?>">
        <img class="header-section--logo" src="<?php echo esc_url($logo_image_url);?> " alt="<?php echo wp_kses_post($logo_image_alt);?>">
    </a>
    <!-- <a class="shop-btemptd-btn shop-btemptd-btn-desktop" href="<?php echo esc_url(get_field('header_button_link', 'options'));?>" target="_blank">
    <?php echo esc_html(get_field('header_button_text', 'options'));?>   </a>
    <a class="shop-btemptd-btn shop-btemptd-btn-mobile" href="<?php echo esc_url(get_field('header_button_link', 'options'));?>" target="_blank">
    <?php echo esc_html(get_field('mobile_header_button_text', 'options'));?></a> -->

    <div class="header-search">
        <!-- <div class="search-icon"></div> -->
        <form class="es-form js-search-form" action="<?php echo esc_url(home_url('/')); ?>" method="get">
            <div class="header-search--inner">
                <input id="search-results-form-q"
                    name="s"
                    class="search-input js-search-input"
                    value="<?php echo get_search_query(); ?>"
                    placeholder="Search"
                    type="search">
                <button class="search-btn"></button>
            </div>
        </form>
    </div>
</header>
<nav class="header-navigation">
    <div class="header-navigation-mobile">
        <div class="mobile-nav">
            <img class="open-state" src="<?php echo  esc_url(esc_url(THEMEURI)); ?>/assets/images/hamburger.svg"
                 alt="Mobile Navigation" />

            <img class="close-state" src="<?php echo  esc_url(esc_url(THEMEURI)); ?>/assets/images/hamburger-close.svg"
                 alt="Mobile Navigation" />
        </div>
    </div>
    <?php $args=array(
        'theme_location' => 'primary',
        'menu' =>'Header Menu',
        'container' => false ,
        'items_wrap' => '<ul id="%1$s" class="header-navigation--ul">%3$s</ul>',

    );
                                                wp_nav_menu($args); ?>
</nav>

                </div>

<?php
/**
 * Template part for displaying header content
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

$logo = get_field( 'header_logo', 'options' );
?>

<header class="header-section">
    <a href="<?php echo esc_url(home_url());?>">
        <img class="header-section--logo"
             src="<?php echo esc_url($logo);?>"
             alt="Wacoal logo"/>
    </a>
    <a class="shop-wacoal-btn shop-wacoal-btn-desktop"
       href="<?php echo esc_url(get_field('header_button_link_', 'options'));?>"
       target="_blank">
        <?php echo esc_html(get_field('header_button_text', 'options'));?>
    </a>
    <a class="shop-wacoal-btn shop-wacoal-btn-mobile"
       href="<?php echo esc_url(get_field('header_button_link_', 'options'));?>"
       target="_blank">
        <?php echo esc_html(get_field('mob_header_button_text', 'options'));?>
    </a>
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
        'menu'           =>'Header',
        'container'      => false ,
        'items_wrap'     => '<ul id="%1$s" class="header-navigation--ul">%3$s</ul>',

    );
    wp_nav_menu($args); ?>
</nav>

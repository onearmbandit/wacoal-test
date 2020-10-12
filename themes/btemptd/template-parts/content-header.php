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
$logo = get_field( 'header_logo', 'options' );
?>

<header class="header-section">
    <a href="<?php echo esc_url(home_url());?>">
        <img class="header-section--logo lazyload" data-src="<?php echo esc_url($logo);?>" alt="btemptd" />
    </a>
    <a class="shop-btemptd-btn" href="<?php echo esc_url(get_field('header_button_link_', 'options'));?>" target="_blank">
        <?php echo esc_html(get_field('header_button_text', 'options'));?>
    </a>
</header>

<nav class="header-navigation">
    <div class="header-navigation-mobile">
        <div class="mobile-nav">Blogs <img src="<?php echo  esc_url(esc_url(THEMEURI)); ?>/assets/images/mobile-nav-arrow.svg" alt="Mobile Navigation" /></div>
    </div>
    <?php $args=array(
        'theme_location' => 'primary',
        'menu' =>'Header',
        'container' => false ,
        'items_wrap' => '<ul id="%1$s" class="header-navigation--ul">%3$s</ul>',

    );
    wp_nav_menu($args); ?>
</nav>

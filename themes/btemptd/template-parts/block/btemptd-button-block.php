<?php
/**
 * Btemptd button template
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */
?>

<div class="shop-button">
    <a class="shop-now-button" href="<?php echo esc_url($button_url); ?>" target="_blank">
        <?php echo esc_attr($button_label); ?>
    <img class="cta-button" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/blog-down-arrow.svg" /></a>
</div>

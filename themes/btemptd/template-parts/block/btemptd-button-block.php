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

<a class="shop-now-button" href="<?php echo esc_url($button_url);?>" target="_blank">
        <?php echo wp_kses_post($button_label);?>
</a>

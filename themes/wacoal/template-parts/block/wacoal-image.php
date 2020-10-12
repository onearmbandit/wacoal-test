<?php
/**
 * Wacoal image template
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

?>

    <div class="full-width--image">
            <figure>
                <?php if($block_image_id && !empty($block_image_id)) {
                    ?>
                <img class="lazyload" data-src="<?php echo esc_url($block_image_url); ?>"
                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="<?php echo wp_kses_post($block_image_alt); ?>" />
                    <?php
                }
                if ($caption && !empty($caption)) {
                    ?>
                <figcaption><?php echo wp_kses_post(wacoal_remove_p_tag($caption)); ?></figcaption>
                    <?php
                }
                ?>
            </figure>
    </div>


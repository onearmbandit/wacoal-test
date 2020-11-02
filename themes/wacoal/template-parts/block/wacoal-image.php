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
                    if(!empty($block_image_link)) :?>
                        <a href="<?php echo esc_url($block_image_link);?>" target="_blank";>
                    <?php endif;
                    ?>
                <img class="lazyload" data-src="<?php echo esc_url($block_image_url); ?>"
                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="<?php echo wp_kses_post($block_image_alt); ?>" />
                    <?php
                    if(!empty($block_image_link)) :?>
                        </a>
                    <?php endif;
                }
                if ($caption && !empty($caption)) {
                    ?>
                <figcaption><?php echo wp_kses_post(Wacoal_Remove_P_tag($caption)); ?></figcaption>
                    <?php
                }
                ?>
            </figure>
    </div>


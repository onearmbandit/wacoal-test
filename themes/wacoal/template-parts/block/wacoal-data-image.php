<?php
/**
 * Wacoal block image
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

?>

<section class="article-questions odd-sequence">
    <div class="article-questions--wrapper">
        <div class="article-questions--content">
            <?php echo wp_kses_post($block_content); ?>
        </div>

        <div class="article-questions--image">
            <figure>
                <img class="lazyload" data-src="<?php echo esc_url($block_image_url); ?>"
                    alt="<?php echo wp_kses_post($caption); ?>" />
                <figcaption><?php echo wp_kses_post($caption); ?></figcaption>
            </figure>
        </div>
    </div>
</section>

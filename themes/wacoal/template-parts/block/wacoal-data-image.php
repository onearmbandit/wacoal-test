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
    <div class="article-questions--wrapper desktop-article--wrapper">
        <div class="article-questions--content">
            <?php echo wp_kses_post($block_content); ?>
        </div>

        <div class="article-questions--image">
            <figure>
            <?php if(!empty($block_image_link)) :?>
                <a href="<?php echo esc_url($block_image_link);?>" target="_blank";>
            <?php endif;?>
                    <img class="lazyload"
                         data-src="<?php echo esc_url($block_image_url); ?>"
                         src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                         alt="<?php echo wp_kses_post($caption); ?>" />
                <?php if(!empty($block_image_link)) :?>
                </a>
                <?php endif;?>
                <figcaption><?php echo wp_kses_post($caption); ?></figcaption>
            </figure>
        </div>
    </div>

    <div class="article-questions--wrapper mobile-article--wrapper">
        <div class="article-questions--content">
            <figure>
                <img class="lazyload"
                     data-src="<?php echo esc_url($block_image_url); ?>"
                     src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                     alt="<?php echo wp_kses_post($caption); ?>" />
                <figcaption><?php echo wp_kses_post($caption); ?></figcaption>
            </figure>
            <?php echo wp_kses_post($block_content);?>
        </div>
    </div>
</section>

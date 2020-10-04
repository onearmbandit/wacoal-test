<?php
/**
 * Wacoal block tesimonial
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

?>

<!-- Product Quotes -->
<section class="product-quote">
    <div class="product-quote--wrapper">
        <div class="product-quote--image">
            <img src="<?php echo esc_url($testimonial_image_url); ?>" alt="Quote Image" />
        </div>
        <div class="product-quote--content">
            <?php echo wp_kses_post($testimonial_quote_text)?>
        </div>
    </div>
</section>

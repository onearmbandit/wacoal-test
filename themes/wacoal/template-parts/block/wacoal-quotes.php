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
        <?php
        if ($quotes_image_id && !empty($quotes_image_id)) {
            ?>
        <div class="product-quote--image">
            <?php if(!empty($quotes_image_link)) :?>
                <a href="<?php echo esc_url($quotes_image_link);?>" target="_blank";>
            <?php endif;?>
                <img class="lazyload"
                     data-src="<?php echo esc_url($quotes_image_url); ?>"
                     src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                     alt="<?php echo wp_kses_post($quotes_image_alt)?>" />
                <?php if(!empty($quotes_image_link)) :?>
                </a>
                <?php endif;?>
        </div>
            <?php
        }
        if ($quote_text && !empty($quote_text)) {
            ?>
        <div class="product-quote--content">
            <div class="content">
                <?php echo wp_kses_post($quote_text)?>
            </div>
        </div>
            <?php
        }
        ?>
    </div>
</section>

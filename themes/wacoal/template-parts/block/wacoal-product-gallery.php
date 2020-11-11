<?php
/**
 * Wacoal products list block
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

if ($product_fields && !empty($product_fields)) {
    ?>

<!-- Product Gallery -->
<section class="product-gallery">
    <div class="product-gallery--wrapper">
        <?php
        foreach ($product_fields as $product) {
            $product_image_id     = $product['image'];
            $product_image_array  = wp_get_attachment_image_src($product_image_id, 'full');
            $product_image_alt    = Wacoal_Get_Image_alt($product_image_id, 'Product Image');
            $product_image_url    = Wacoal_Get_image($product_image_array);
            $product_name         = $product['name'];
            $product_size         = $product['size'];
            $product_link         = $product['product_link'];

            ?>
        <div class="product-gallery--box">

            <?php
            if ($product_image_id && !empty($product_image_id)) {
                ?>
                <a href= "<?php echo esc_url($product_link);?>" <?php if($new_tab == true) : ?> target="_blank" <?php
               endif;?>>
            <div class="product-gallery--box__image">
                <img class="lazyload"
                     data-src="<?php echo  esc_url($product_image_url); ?>"
                     src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                     alt="<?php echo wp_kses_post($product_image_alt); ?>" />
            </div>
                </a>
                <?php
            }
            if ($product_name && !empty($product_name)) {
                ?>

            <a href= "<?php echo esc_url($product_link);?>" <?php if($new_tab == true) : ?> target="_blank" <?php
           endif;?>>
            <div class="product-gallery--box__title">
                <?php echo wp_kses_post($product_name);?>
            </div>
            </a>
                <?php
            }
            if ($product_size && !empty($product_size)) {
                ?>

            <div class="product-gallery--box__size">
                <?php echo wp_kses_post($product_size);?>
            </div>
                <?php
            }
            ?>

        </div>
            <?php
        }
        ?>

    </div>
</section>
    <?php
}
?>

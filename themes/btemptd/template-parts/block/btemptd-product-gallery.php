<?php
/**
 * Btemptd Product Gallery
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */
?>

<section class="product-gallery">
    <div class="product-gallery--wrapper">

        <?php foreach ($fullGallery as $key => $gallery) {
            $image_array = wp_get_attachment_image_src($gallery['image'], 'full');
            $image_alt   = Btemptd_Get_Image_alt($image_array, 'Block Image');
            $image_url   = Btemptd_Get_image($image_array);

            $size = $gallery['size'];
            $name = $gallery['name'];
            $link = $gallery['product_link'];
            $new_tab = $gallery['open_link_in_new_tab'] === true ? '_blank' : '_self';
            ?>
        <div class="product-gallery--box">
            <div class="product-gallery--box__image">
                <a href="<?php echo esc_url($link); ?>"
                    target="<?php echo esc_attr($new_tab)?>">
                    <img src="<?php echo esc_url($image_url); ?>"
                        alt="<?php echo esc_attr($image_alt); ?>" />
                </a>
            </div>
            <div class="product-gallery--box__title">
                <a href="<?php echo esc_url($link); ?>"
                    target="<?php echo esc_attr($new_tab)?>">
                    <?php echo esc_attr($name); ?>
                </a>
            </div>
            <div class="product-gallery--box__size">
                <?php echo esc_attr($size); ?>
            </div>
        </div>
        <?php } ?>

    </div>
</section>


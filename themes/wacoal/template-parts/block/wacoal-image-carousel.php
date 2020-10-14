<?php
/**
 * Wacoal Image Carousel
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

if (is_admin() ) {
    $fisrt_img = wp_get_attachment_image_src($slider_images[0]['image'], 'full');
    ?>
    <h4><u>Wacoal Slider:</u></h4>
    <img src="<?php echo esc_url(Wacoal_Get_image($fisrt_img, 300)); ?>">
    <?php
} else { ?>
    <!-- Article Details / Product Slider -->
    <section class="full-width-slider--wrapper">
        <div class="swiper-container article-details-slider">
            <div class="swiper-wrapper">
                <?php foreach ($slider_images as $key => $image) {

                    $image_id     = $image['image'];
                    $image_array  = wp_get_attachment_image_src($image_id, 'full');
                    $image_alt    = Wacoal_Get_Image_alt($image_id, 'Carousel Image');
                    $image_url    = Wacoal_Get_image($image_array);

                    $mob_image_id     = $image['mobile_image'];
                    $mob_image_array  = wp_get_attachment_image_src($mob_image_id, 'full');
                    $mob_image_alt    = Wacoal_Get_Image_alt($mob_image_id, 'Mobile Carousel Image');
                    $mob_image_url    = Wacoal_Get_image($mob_image_array);

                    ?>
                    <div class="swiper-slide">
                        <img class="lazyload article-swiper-image--desktop" data-src="<?php echo esc_url($image_url); ?>"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="<?php echo wp_kses_post($image_alt);?>" />
                        <img class="lazyload article-swiper-image--mobile" data-src="<?php echo esc_url($mob_image_url); ?>"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="<?php echo wp_kses_post($mob_image_alt);?>" />
                    </div>
                <?php } ?>
            </div>

            <div class="swiper-pagination custom-swiper-pagination"></div>
            <div class="swiper-button-next swiper-buttun-background">
                <img class="lazyload" data-src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow.svg"
                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="Slider Arrow" />
            </div>
            <div class="swiper-button-prev swiper-buttun-background">
                <img class="lazyload" data-src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow.svg"
                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="Slider Arrow" />
            </div>
        </div>
    </section>
<?php }

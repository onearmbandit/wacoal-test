<?php
/**
 * Wacoal Product Slider
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
                    $image_url = wp_get_attachment_image_src($image['image'], 'full');
                    ?>
                    <div class="swiper-slide">
                        <img src="<?php echo esc_url(Wacoal_Get_image($image_url, 300)); ?>"
                            alt="Slider Image" />
                    </div>
                <?php } ?>
            </div>

            <div class="swiper-pagination custom-swiper-pagination"></div>
            <div class="swiper-button-next swiper-buttun-background">
                <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/swiper-arrow.svg" alt="Slider Arrow" />
            </div>
            <div class="swiper-button-prev swiper-buttun-background">
                <img src="<?php echo  get_theme_file_uri(); ?>/assets/images/swiper-arrow.svg" alt="Slider Arrow" />
            </div>
        </div>
    </section>
<?php }

<?php
/**
 * Wacoal Product Slider
 *
 * @package Wacoal
 */

global $post;

?>

<?php if( have_rows('slider') ): ?>
    <section class="full-width-slider--wrapper">
        <div class="swiper-container full-width-slider">
            <div class="swiper-wrapper">
                <?php while( have_rows('slider') ): the_row();

                    // Get all values for this row.
                    $row = get_row();

                    // Check for image value.
                    if( $row['field_5f7481952db07'] ): ?>
                        <div class="swiper-slide">

                            <img src="<?php echo wp_get_attachment_url($row['field_5f7481952db07']); ?>" />

                        </div>


                    <?php endif; ?>
                <?php endwhile; ?>
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
<?php endif; ?>

<?php
/**
 * Btemptd Customer Review
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

$reviewer_name  = get_field('reviewer_name');
$star_rating_number  = get_field('star_rating_number');

$left_image  = get_field('left_image');
$left_image_array = wp_get_attachment_image_src($left_image, 'full');
$left_image_url   = Btemptd_Get_image($left_image_array);

$left_image_caption  = get_field('left_image_caption');
$left_image_link  = get_field('left_image_link');
$left_open_in_new_tab = get_field('left_open_in_new_tab') === true ? '_blank' : '_self';

$right_image  = get_field('right_image');
$right_image_array = wp_get_attachment_image_src($right_image, 'full');
$right_image_url   = Btemptd_Get_image($right_image_array);

$right_image_caption  = get_field('right_image_caption');
$right_image_link  = get_field('right_image_link');
$right_open_in_new_tab = get_field('right_open_in_new_tab') === true ? '_blank' : '_self';

?>

<section class="customer-review">
    <div class="customer-review--wrapper">
        <div class="image-wrapper left">
            <?php if (! empty($left_image_link)) { ?>
            <a href="<?php echo esc_url($left_image_link) ?>" target="<?php echo esc_attr($left_open_in_new_tab) ?>">
                <div class="image"
                    style="background-image:url(<?php echo  esc_url($left_image_url); ?>);">
                </div>
            </a>
            <?php } else { ?>
                <div class="image"
                    style="background-image:url(<?php echo  esc_url($left_image_url); ?>);">
                </div>
            <?php } ?>

            <div class="image-caption">
                <?php if (! empty($left_image_link)) { ?>
                    <a href="<?php echo esc_url($left_image_link) ?>" target="<?php echo esc_attr($left_open_in_new_tab) ?>">
                        <?php echo esc_attr($left_image_caption)?>
                    </a>
                <?php } else {
                    echo esc_attr($left_image_caption);
                }?>

            </div>
        </div>

        <div class="review-content">
            <div class="rating-stars">
                <?php for ($i = 1; $i<= $star_rating_number; $i++) { ?>
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/rating-star.svg"
                    alt="Rating Star"/>
                <?php } ?>
            </div>
            <div class="rating-content">
                <?php echo wp_kses_post($review_text)?>
            </div>
            <div class="customer-name">
                – <?php echo esc_attr($reviewer_name)?>
            </div>
        </div>

        <div class="image-wrapper right">
            <?php if (! empty($right_image_link)) { ?>
                <a href="<?php echo esc_url($right_image_link) ?>" target="<?php echo esc_attr($right_open_in_new_tab) ?>">
                    <div class="image"
                        style="background-image:url(<?php echo  esc_url($right_image_url); ?>);">
                    </div>
                </a>
            <?php } else { ?>
                <div class="image"
                    style="background-image:url(<?php echo  esc_url($right_image_url); ?>);">
                </div>
            <?php } ?>

            <div class="image-caption">
                <?php if (! empty($right_image_link)) { ?>
                    <a href="<?php echo esc_url($right_image_link) ?>" target="<?php echo esc_attr($right_open_in_new_tab) ?>">
                        <?php echo esc_attr($right_image_caption)?>
                    </a>
                <?php } else {
                        echo esc_attr($right_image_caption);
                } ?>
            </div>
        </div>
    </div>
</section>

<?php
/**
 * Btemptd Image Text Image Template
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

$description  = get_field('description');

$left_image_array = wp_get_attachment_image_src($left_image_id, 'full');
$left_image_alt   = Btemptd_Get_Image_alt($left_image_id, 'Left Image');
$left_image_url   = Btemptd_Get_image($left_image_array);
$left_image_caption  = get_field('left_image_caption');
$left_image_link  = get_field('left_image_link');
$left_new_tab = get_field('left_open_in_new_tab') === true ? '_blank' : '_self';

$right_image_array = wp_get_attachment_image_src($right_image_id, 'full');
$right_image_alt   = Btemptd_Get_Image_alt($right_image_id, 'Right Image');
$right_image_url   = Btemptd_Get_image($right_image_array);
$right_image_caption  = get_field('right_image_caption');
$right_image_link  = get_field('right_image_link');
$right_new_tab = get_field('right_open_in_new_tab') === true ? '_blank' : '_self';
?>

<section class="image-text-image">
    <div class="image-text-image--wrapper">
        <div class="image-title">
            <a href="<?php echo  esc_url($left_image_link); ?>" target="<?php echo  esc_attr($left_new_tab); ?>">
                <div class="image-bg" style="background-image:url(<?php echo  esc_url($left_image_url); ?>);">
                </div>
            </a>
            <div class="title">
                <?php echo esc_attr($left_image_caption) ?>
            </div>
        </div>
        <div class="content">
            <h2 class="title"><?php echo esc_attr($title) ?></h2>
            <div class="para">
                <?php echo wp_kses_post($description) ?>
            </div>
        </div>
        <div class="image-title">
            <a href="<?php echo  esc_url($right_image_link); ?>" target="<?php echo  esc_attr($right_new_tab); ?>">
                <div class="image-bg" style="background-image:url(<?php echo  esc_url($right_image_url); ?>);">
                </div>
            </a>
            <div class="title">
                <?php echo esc_attr($right_image_caption) ?>
            </div>
        </div>
    </div>
</section>

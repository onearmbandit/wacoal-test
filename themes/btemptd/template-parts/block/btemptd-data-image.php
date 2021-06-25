<?php
/**
 * Btemptd video template
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */


$image_array = wp_get_attachment_image_src($image_id, 'full');
$image_alt   = Btemptd_Get_Image_alt($image_id, 'Block Image');
$image_url   = Btemptd_Get_image($image_array);

$image_link  = get_field('image_link');
$new_tab = get_field('open_link_in_new_tab') === true ? '_blank' : '_self';

?>

<section class="image-medium">
    <div class="image-medium--wrapper">
        <?php if (! empty($image_link)) { ?>
            <a href="<?php echo esc_url($image_link); ?>" target="<?php echo esc_attr($new_tab); ?>">
                <div class="image-medium--image"
                    style="background-image:url(<?php echo  esc_url($image_url); ?>);">
                </div>
            </a>
        <?php } else { ?>
            <div class="image-medium--image"
                style="background-image:url(<?php echo  esc_url($image_url); ?>);">
            </div>
        <?php } ?>

        <?php if (!empty($image_caption)) { ?>
            <div class="image-caption">
                <?php echo wp_kses_post($image_caption); ?>
            </div>
        <?php } ?>

        <?php if (!empty($paragraph_content)) { ?>
            <div class="image-medium--content">
                <?php echo wp_kses_post($paragraph_content); ?>
            </div>
        <?php } ?>
    </div>
</section>


<?php
/**
 * Wacoal Medium image
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */
?>

<?php if($block_image_id && !empty($block_image_id)) :?>
<section class="image-medium">
    <div class="image-medium--wrapper">
        <div class="image-medium--image" style="background-image:url(<?php echo  esc_url($block_image_url); ?>">
        </div>

        <?php if($block_desc && !empty($block_desc)) :?>
        <div class="image-medium--content">
            <?php echo wp_kses_post(Wacoal_Remove_P_tag($block_desc));?>
        </div>
        <?php endif; ?>

    </div>
</section>
<?php endif;?>

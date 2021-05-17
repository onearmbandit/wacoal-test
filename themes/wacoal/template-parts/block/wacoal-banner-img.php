<?php
/**
 * Wacoal banner image
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */
?>

<?php if(($img_type == 'large') && ($block_image_id && !empty($block_image_id))) :?>
<section class="internal-banner">
    <div class="banner-wrapper big-banner" style="background-image:url(<?php echo  esc_url($block_image_url); ?>">
    </div>
</section>
<?php endif;?>

<?php if(($img_type == 'medium') && ($block_image_id && !empty($block_image_id))) :?>
<section class="internal-banner">
    <div class="banner-wrapper medium-banner" style="background-image:url(<?php echo  esc_url($block_image_url); ?>);">

    </div>
</section>
<?php endif;?>

<?php if(($img_type == 'small') && ($block_image_id && !empty($block_image_id))) :?>
<section class="internal-banner">
    <div class="banner-wrapper small-banner" style="background-image:url(<?php echo  esc_url($block_image_url); ?>);">

    </div>
</section>
<?php endif;?>

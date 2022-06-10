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
    <?php if(!empty($img_link)) :?>
        <a href="<?php echo esc_url($img_link);?>" <?php if($new_tab == true) : echo "target='_blank'";
       endif;?>>
    <?php endif;?>
            <div class="image-medium--image">
                <img src="<?php echo  esc_url($block_image_url); ?>"
                         alt="image-medium--image" />
            </div>
        <?php if(!empty($img_link)) :?>
        </a>
        <?php endif;?>
        <div class="image-caption">
            <?php echo wp_kses_post($image_caption); ?>
        </div>
        <?php if($block_desc && !empty($block_desc)) :?>
        <div class="image-medium--content">
            <?php echo wp_kses_post($block_desc);?>
        </div>
        <?php endif; ?>

    </div>
</section>
<?php endif;?>

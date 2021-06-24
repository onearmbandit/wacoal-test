<?php
/**
 * Btemptd banner full bleed image
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */
?>

<section class="full-bleed-image">
    <?php if(!empty($img_link)) :?>
        <a href="<?php echo esc_url($img_link);?>" <?php if($new_tab == true) : echo "target='_blank'";
       endif;?>>
    <?php endif;?>
    <div class="full-bleed-image--wrapper" style="background-image:url(<?php echo  esc_url($block_image_url); ?>);">
    </div>
    <?php if(!empty($img_link)) :?>
        </a>
    <?php endif;?>
    <?php echo  esc_attr($image_caption); ?>
</section>

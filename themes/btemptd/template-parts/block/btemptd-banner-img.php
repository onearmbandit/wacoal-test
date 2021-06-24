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
        <?php if(!empty($img_link)) :?>
            <a href="<?php echo esc_url($img_link);?>" <?php if($new_tab == true) : echo "target='_blank'";
        endif;?>>
        <?php endif;?>
        <div class="banner-wrapper big-banner" style="background-image:url(<?php echo  esc_url($block_image_url); ?>">
        </div>
        <?php if(!empty($img_link)) :?>
            </a>
        <?php endif;?>
    </section>
<?php endif;?>

<?php if(($img_type == 'medium') && ($block_image_id && !empty($block_image_id))) :?>
    <section class="internal-banner">
        <?php if(!empty($img_link)) :?>
            <a href="<?php echo esc_url($img_link);?>" <?php if($new_tab == true) : echo "target='_blank'";
        endif;?>>
        <?php endif;?>
        <div class="banner-wrapper medium-banner" style="background-image:url(<?php echo  esc_url($block_image_url); ?>);">
        </div>
            <?php if(!empty($img_link)) :?>
            </a>
            <?php endif;?>
    </section>
<?php endif;?>

<?php if(($img_type == 'small') && ($block_image_id && !empty($block_image_id))) :?>
    <section class="internal-banner">
        <?php if(!empty($img_link)) :?>
            <a href="<?php echo esc_url($img_link);?>" <?php if($new_tab == true) : echo "target='_blank'";
        endif;?>>
        <?php endif;?>
        <div class="banner-wrapper small-banner" style="background-image:url(<?php echo  esc_url($block_image_url); ?>);">
        </div>
            <?php if(!empty($img_link)) :?>
            </a>
            <?php endif;?>
    </section>
<?php endif;?>

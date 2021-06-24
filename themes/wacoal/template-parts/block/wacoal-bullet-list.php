<?php
/**
 * Html for wacoal bullet list
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */
?>

<section class="title-body-image">
    <?php if($block_image_id && !empty($block_image_id)) :?>
        <div class="image--wrapper mobile" style="background-image:url(<?php echo  esc_url($block_image_url); ?>"></div>
        <div class="image-caption mobile">
            <?php echo wp_kses_post($image_caption); ?>
        </div>
    <?php endif; ?>
    <div class="wrapper">
        <div class="title-wrapper">

        <?php if($title && !empty($title)) :?>
            <div class="title">
                <?php echo wp_kses_post($title);?>
            </div>
        <?php endif;?>

        <?php if($description && !empty($description)) :?>
            <div class="sub-title">
                <?php echo wp_kses_post($description);?>
            </div>
        <?php endif;?>

        </div>

        <div class="image-bullets">
            <?php if($block_image_id && !empty($block_image_id)) :
                if(!empty($img_link)) :?>
                <a href="<?php echo esc_url($img_link);?>" <?php if($new_tab == true) : echo "target='_blank'";
               endif;?>>
                <?php endif;?>
                <div class="image--wrapper" style="background-image:url(<?php echo  esc_url($block_image_url); ?>">
                </div>
                <?php if(!empty($img_link)) :?>
                </a>
                <?php endif;
            endif; ?>

            <?php if($bullet_points && !empty($bullet_points)) :?>
                <div class="bullets--wrapper">
                    <?php echo Wacoal_Remove_P_tag(wp_kses_post($bullet_points));?>

                    <?php if (!empty($button_label) && !empty($button_link)) {?>
                    <div class="button-wrapper">
                        <a href="<?php echo esc_url($button_link); ?>" class="btn primary dark" target="_blank">
                            <?php echo esc_attr($button_label); ?>
                        </a>
                    </div>
                    <?php } ?>
                </div>
            <?php endif;?>
        </div>
        <div class="image-caption desktop">
            <?php echo wp_kses_post($image_caption); ?>
        </div>
    </div>
</section>

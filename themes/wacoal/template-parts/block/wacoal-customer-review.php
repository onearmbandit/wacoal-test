<?php
/**
 * Html for customer review block
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */
?>

<section class="customer-review">
    <div class="customer-review--wrapper">
        <div class="image-wrapper left">
        <?php if($left_image_id && !empty($left_image_id)) :
            if(!empty($left_image_link)) :?>
        <a href="<?php echo esc_url($left_image_link);?>" <?php if($left_new_tab == true) : echo "target='_blank'";
       endif;?>>
            <?php endif;?>
            <div class="image" style="background-image:url(<?php echo  esc_url($left_image_url); ?>">
            </div>
            <?php if(!empty($left_image_link)) :?>
        </a>
            <?php endif;
        endif;?>

        <?php if($left_image_caption && !empty($left_image_caption)) :?>
            <div class="image-caption">
                <?php echo Wacoal_Remove_P_tag(wp_kses_post($left_image_caption));?>
            </div>
        <?php endif;?>

        </div>

        <div class="review-content">
            <div class="rating-stars">
            <?php for ($x = 0; $x < $star_rating_number; $x++) { ?>
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/rating-star.svg" alt="Rating Star"/>
            <?php }?>
            </div>

            <?php if($review_text && !empty($review_text)) :?>
            <div class="rating-content">
                <?php echo Wacoal_Remove_P_tag(wp_kses_post($review_text));?>
            </div>
            <?php endif;?>

            <?php if($reviewer_name && !empty($reviewer_name)) :?>
            <div class="customer-name">
                – <?php echo wp_kses_post($reviewer_name);?>
            </div>
            <?php endif;?>

        </div>

        <div class="image-wrapper right">
        <?php if($right_image_id && !empty($right_image_id)) :
            if(!empty($right_image_link)) :?>
        <a href="<?php echo esc_url($right_image_link);?>" <?php if($right_new_tab == true) : echo "target='_blank'";
       endif;?>>
            <?php endif;?>
            <div class="image" style="background-image:url(<?php echo  esc_url($right_image_url); ?>">
            </div>
            <?php if(!empty($right_image_link)) :?>
        </a>
            <?php endif;
        endif;?>

        <?php if($right_image_caption && !empty($right_image_caption)) :?>
            <div class="image-caption">
                <?php echo Wacoal_Remove_P_tag(wp_kses_post($right_image_caption));?>
            </div>
        <?php endif;?>
        </div>
    </div>
</section>

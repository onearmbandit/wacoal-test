<?php
/**
 * Btemptd review template
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

if($list_data && !empty($list_data)) :
    ?>
<section class="image-content image-content-gif">
    <div class="image-content--wrapper">
        <?php
        foreach ($list_data as $key => $list) {
            $list_image_id = $list['add_image'];
            $list_image_array = wp_get_attachment_image_src($list_image_id, 'full');
            $list_image_alt = Btemptd_Get_Image_alt($list_image_id, 'List Image');
            $list_image_url = Btemptd_Get_Image($list_image_array);
            $list_img_url = $list['image_link'];
            $list_title = $list['title'];
            $list_desc = $list['description'];
            $cust_review = $list['customer_review_text'];
            $cust_name = $list['reviewer_name'];
            $show_rating = $list['show_ratings'];
            $star_rating = $list['star_rating'];
            $add_button = $list['add_button'];
            if ($add_button == true) {
                $button_label = $list['button_label'];
                $button_url = $list['button_url'];
            }
            if ($key % 2 == 0) {
                ?>
        <div class="odd">
                <?php if ($list_image_id && !empty($list_image_id)) : ?>
            <div class="image-content--image">
                    <?php if ($list_img_url && !empty($list_img_url)) :?>

                <a href="<?php echo esc_url($list_img_url); ?>" target='_blank'>

                    <?php endif; ?>
                <img class="img-fluid"
                     src="<?php echo  esc_url($list_image_url); ?>"
                     alt="<?php echo wp_kses_post($list_image_alt); ?>" />
                     <?php if ($list_img_url && !empty($list_img_url)) :?>

                     </a>

                     <?php endif; ?>
            </div>
                <?php endif; ?>
            <div class="image-content--content">
                    <div class="content-inner">
                        <?php if ($list_title && !empty($list_title)) :?>
                        <div class="image-content--content__headtwo">
                            <?php echo wp_kses_post($list_title); ?>
                        </div>
                        <?php endif; ?>
                        <!-- <div class="image-content--content__title">
                            @chicdisheveled slips her crop top on first thing in the morning…
                        </div> -->
                        <?php if ($list_desc && !empty($list_desc)) :?>
                        <div class="image-content--content__para">
                            <?php echo wp_kses_post(Btemptd_Remove_ptag($list_desc)); ?>
                        </div>
                            <?php
                        endif;
                        if($cust_review && !empty($cust_review)) :
                            ?>
                        <div class="image-content--content__para">
                            <?php echo wp_kses_post(Btemptd_Remove_ptag($cust_review)); ?>
                        </div>
                        <?php endif;?>
                        <?php if ($cust_name && !empty($cust_name)) :
                            ?>
                        <div class="image-content--content__tag">
                            <?php echo wp_kses_post($cust_name); ?>
                        </div>
                        <?php endif;
                        if ($show_rating == true) :?>
                        <div class="image-content--content__star">
                            <?php for ($x = 0; $x < $star_rating; $x++) { ?>
                            <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/star-icon.svg"/>
                            <?php } ?>
                        </div>
                            <?php
                        endif;
                        if (($add_button == true) && !empty($button_label) && !empty($button_url)) :?>
                            <div class="shop-button">
                                <a class="shop-now-button" href="<?php echo esc_url($button_url); ?>" target="_blank">
                                    <?php echo esc_attr($button_label); ?>
                                    <img class="cta-button" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/blog-down-arrow.svg" /></a>
                            </div>
                        <?php endif; ?>
                    </div>
            </div>
        </div>
                <?php
            } else {
                ?>

        <div class="even">
                <?php if ($list_image_id && !empty($list_image_id)) : ?>
            <div class="image-content--image">
                    <?php if ($list_img_url && !empty($list_img_url)) :?>

                    <a href="<?php echo esc_url($list_img_url); ?>" target='_blank'>

                    <?php endif; ?>
                <img class="img-fluid"
                     src="<?php echo  esc_url($list_image_url); ?>"
                     alt="<?php echo wp_kses_post($list_image_alt); ?>" />
                     <?php if ($list_img_url && !empty($list_img_url)) :?>

                    </a>

                     <?php endif; ?>
            </div>
                <?php endif; ?>
            <div class="image-content--content">
                <div class="content-inner">
                    <?php if ($list_title && !empty($list_title)) :?>
                        <div class="image-content--content__headtwo">
                            <?php echo wp_kses_post($list_title); ?>
                        </div>
                    <?php endif; ?>
                    <?php if ($list_desc && !empty($list_desc)) :?>
                        <div class="image-content--content__para">
                            <?php echo wp_kses_post(Btemptd_Remove_ptag($list_desc)); ?>
                        </div>
                        <?php
                    endif;
                    if($cust_review && !empty($cust_review)) :
                        ?>
                        <div class="image-content--content__para">
                            <?php echo wp_kses_post(Btemptd_Remove_ptag($cust_review)); ?>
                        </div>
                    <?php endif;?>
                    <?php if ($cust_name && !empty($cust_name)) :
                        ?>
                    <div class="image-content--content__tag">
                        <?php echo wp_kses_post($cust_name); ?>
                    </div>
                    <?php endif;
                    if ($show_rating == true) :?>
                        <div class="image-content--content__star">
                            <?php for ($x = 0; $x < $star_rating; $x++) { ?>
                            <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/star-icon.svg"/>
                            <?php } ?>
                        </div>
                            <?php
                    endif;?>
                    <?php if ($add_button == true && !empty($button_label) && !empty($button_url)) :?>
                        <div class="shop-button">
                            <a class="shop-now-button" href="<?php echo esc_url($button_url); ?>" target="_blank">
                            <?php echo esc_attr($button_label); ?>
                            <img class="cta-button" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/blog-down-arrow.svg" /></a>
                        </div>
                    <?php endif; ?>
            </div>
        </div>
    </div>
                            <?php
            }
        }?>

</section>
    <?php
endif;
?>

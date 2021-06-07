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

<section class="seasonless-style">
    <div class="seasonless-style--wrapper">
        <?php
        foreach ($list_data as $key => $list) {
            $list_image_id = $list['image'];
            $list_image_array = wp_get_attachment_image_src($list_image_id, 'full');
            $list_image_alt = Btemptd_Get_Image_alt($list_image_id, 'List Image');
            $list_image_url = Btemptd_Get_Image($list_image_array);
            $list_img_link = $list['image_link'];
            $list_title = $list['title'];
            $list_desc = $list['description'];
            $add_button = $list['add_button'];
            if ($add_button == true) {
                $button_label = $list['button_label'];
                $button_url = $list['button_url'];
            }
            if ($key % 2 == 0) {
                ?>
        <div class="box odd">
                <?php if ($list_image_id && !empty($list_image_id)) : ?>
            <div class="box--left">

                    <?php if ($list_img_link && !empty($list_img_link)) :?>
                <a href="<?php echo esc_url($list_img_link); ?>" target='_blank'>
                    <?php endif; ?>
                <img src="<?php echo  esc_url($list_image_url); ?>"
                     alt="<?php echo wp_kses_post($list_image_alt); ?>" />
                     <?php if ($list_img_link && !empty($list_img_link)) :?>
                </a>
                     <?php endif; ?>

                     <div class="image-caption">
                        LACE KISS BRALETTE LOREM IPSUM SED DOLOR
                     </div>
            </div>
                <?php endif; ?>
            <div class="box--right">
                <?php if ($list_title && !empty($list_title)) :?>
                <div class="title">
                    <?php echo wp_kses_post($list_title); ?>
                </div>
                <?php endif; ?>
                <?php if ($list_desc && !empty($list_desc)) :?>
                <div class="para">
                    <?php echo wp_kses_post(Btemptd_Remove_ptag($list_desc)); ?>
                </div>
                    <?php
                endif; ?>
            </div>
        </div>
                <?php
            } else {
                ?>

        <div class="box even">
                <?php if ($list_image_id && !empty($list_image_id)) : ?>
            <div class="box--left">
                    <?php if ($list_img_link && !empty($list_img_link)) :?>

                <a href="<?php echo esc_url($list_img_link); ?>" target='_blank'>

                    <?php endif; ?>
                <img src="<?php echo  esc_url($list_image_url); ?>"
                    alt="<?php echo wp_kses_post($list_image_alt); ?>" />
                    <?php if ($list_img_link && !empty($list_img_link)) :?>

                </a>

                    <?php endif; ?>

                    <div class="image-caption">
                        LACE KISS BRALETTE LOREM IPSUM SED DOLOR
                     </div>
            </div>
                <?php endif; ?>
            <div class="box--right">
                <?php if ($list_title && !empty($list_title)) :?>
                    <div class="title">
                        <?php echo wp_kses_post($list_title); ?>
                    </div>
                <?php endif; ?>
                <?php if ($list_desc && !empty($list_desc)) :?>
                <div class="para">
                    <?php echo wp_kses_post(Btemptd_Remove_ptag($list_desc)); ?>
                </div>
                    <?php
                endif; ?>
        </div>
    </div>
                            <?php
            }
        }?>

</section>
    <?php
endif;
?>

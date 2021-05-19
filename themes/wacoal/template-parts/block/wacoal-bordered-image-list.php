<?php
/**
 * Html for subhead with description
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */
?>

<?php if ($block_lists && !empty($block_lists)) { ?>
<section class="block-bordered-image">
    <div class="block-bordered-image--wrapper">
    <?php foreach ($block_lists as $key => $list) {
        $title              = $list['title'];
        $list_img_id        = $list['image'];
        $list_image_caption = $list['image_caption'];
        $img_link           = $list['image_link'];
        $new_tab            = $list['open_in_new_tab'];
        $btn_label          = $list['button_label'];
        $btn_link           = $list['button_link'];

        if (! empty($list_img_id) && $list_img_id ) {
            $list_image_array = wp_get_attachment_image_src($list_img_id, 'full');
            $list_image_alt   = Wacoal_Get_Image_alt($list_img_id, 'Block Image');
            $list_image_url   = Wacoal_Get_image($list_image_array);
        }

        if ($key % 2 == 0) {
            ?>
        <div class="block-bordered-image--inner">
            <div class="image-wrapper">
                <?php if($list_img_id && !empty($list_img_id)) :?>
                    <?php if(!empty($img_link)) :?>
                        <a href="<?php echo esc_url($img_link);?>" <?php if($new_tab == true) : echo "target='_blank'";
                       endif;?>>
                    <?php endif;?>
                    <div class="image" style="background-image:url(<?php echo  esc_url($list_image_url); ?>"></div>
                <?php endif;?>
                <?php if(!empty($img_link)) :?>
                    </a>
                <?php endif;?>

                <?php if($list_image_caption && !empty($list_image_caption)) :?>
                    <div class="image-caption">
                        <?php echo Wacoal_Remove_P_tag(wp_kses_post($list_image_caption));?>
                    </div>
                <?php endif;?>
            </div>
            <div class="content">

            <?php if($title && !empty($title)) :?>
                <h2><?php echo wp_kses_post($title);?></h2>
            <?php endif;?>

            <?php if($btn_label && !empty($btn_label)) :?>
                <a href="<?php echo esc_url($btn_link);?>" class="btn primary dark"
                <?php if($new_tab == true) : echo "target='_blank'";
                endif;?>>
                    <?php echo wp_kses_post($btn_label);?>
                </a>
            <?php endif;?>
            </div>
        </div>
            <?php
        } elseif ($key % 2 == 1) {
            ?>

        <div class="block-bordered-image--inner">
            <div class="image-wrapper">
            <?php if($list_img_id && !empty($list_img_id)) :?>
                <?php if(!empty($img_link)) :?>
                    <a href="<?php echo esc_url($img_link);?>" <?php if($new_tab == true) : echo "target='_blank'";
                   endif;?>>
                <?php endif;?>
                <div class="image" style="background-image:url(<?php echo  esc_url($list_image_url); ?>"></div>
                <?php if(!empty($img_link)) :?>
                    </a>
                <?php endif;?>
            <?php endif;?>

            <?php if($list_image_caption && !empty($list_image_caption)) :?>
                <div class="image-caption">
                    <?php echo Wacoal_Remove_P_tag(wp_kses_post($list_image_caption));?>
                </div>
            <?php endif;?>

            </div>
            <div class="content">
            <?php if($title && !empty($title)) :?>
                <h2><?php echo wp_kses_post($title);?></h2>
            <?php endif;?>

            <?php if($btn_label && !empty($btn_label)) :?>
                <a href="<?php echo esc_url($btn_link);?>" class="btn primary dark"
                <?php if($new_tab == true) : echo "target='_blank'";
                endif;?>>
                    <?php echo wp_kses_post($btn_label);?>
                </a>
            <?php endif;?>

            </div>
        </div>
        <?php }
    }?>
    </div>
</section>
<?php } ?>

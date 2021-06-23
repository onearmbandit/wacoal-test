<?php
/**
 * Wacoal text + image block
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */
?>

<?php
if ($block_lists && !empty($block_lists)) {
    ?>
<section class="list-text-image desktop">
    <?php foreach ($block_lists as $key => $list) {
        $list_position      = !empty($list['image_position']) ? $list['image_position'] : 'left';
        $block_image_id     = $list['image'];
        $img_link           = $list['image_link'];
        $new_tab            = $list['open_in_new_tab'];
        $list_image_caption = $list['image_caption'];
        $list_title         = $list['title'];
        $list_subtitle      = $list['subtitle'];
        $list_desc          = $list['description'];
        $btn_label          = $list['button_label'];
        $btn_link           = $list['button_link'];

        if ($block_image_id && !empty($block_image_id)) {
            $block_image_array = wp_get_attachment_image_src($block_image_id, 'full');
            $block_image_alt   = Wacoal_Get_Image_alt($block_image_id, 'Block Image');
            $block_image_url   = Wacoal_Get_image($block_image_array);
        }

        if ($list_position == 'left') {
            ?>
    <div class="list-text-image--wrapper img-left desktop">
        <div class="list-text-image--inner">

            <?php
            if ($block_image_id && !empty($block_image_id)) {
                $img_url = $block_image_url;
                $img_class = '';
            } else {
                $img_url = '';
                $img_class = 'no-bg-img';
            }
            if(!empty($img_link)) :?>
                <a href="<?php echo esc_url($img_link);?>" <?php if($new_tab == true) : echo "target='_blank'";
               endif;?>>
            <?php endif;?>
                <div class="list-text-image--img <?php echo esc_attr($img_class); ?>"
                    style="background-image:url(<?php echo esc_url($img_url); ?>">
                </div>
            <?php if(!empty($img_link)) :?>
            </a>
            <?php endif; ?>


            <div class="list-text-image--content">

            <?php if ($list_title && !empty($list_title)) :?>
                <h2 class="title">
                    <?php echo Wacoal_Remove_P_tag(wp_kses_post($list_title)); ?>
                </h2>
            <?php endif; ?>

            <?php if ($list_subtitle && !empty($list_subtitle)) :?>
                <div class="sub-title">
                    <?php echo wp_kses_post($list_subtitle); ?>
                </div>
            <?php endif; ?>

            <?php if ($list_desc && !empty($list_desc)) :?>
                <div class="content">
                <?php echo wp_kses_post($list_desc); ?>
                </div>
            <?php endif; ?>

            <?php if($btn_label && !empty($btn_label)) :?>
                <div class="content-btn">
                    <a href="<?php echo esc_url($btn_link);?>" class="btn primary dark" <?php if($new_tab == true) : echo "target='_blank'";
                   endif;?>>
                    <?php echo esc_attr($btn_label);?></a>
                </div>
            <?php endif;?>
            </div>
        </div>

            <?php if ($list_image_caption && !empty($list_image_caption)) :?>
            <div class="image-name">
                <?php echo wp_kses_post($list_image_caption); ?>
            </div>
            <?php endif; ?>
    </div>
            <?php
        } elseif ($list_position == 'right') {?>
    <div class="list-text-image--wrapper img-right desktop">
        <div class="list-text-image--inner">
            <?php
            if ($block_image_id && !empty($block_image_id)) {
                $img_url = $block_image_url;
                $img_class = '';
            } else {
                $img_url = '';
                $img_class = 'no-bg-img';
            }
            if(!empty($img_link)) :?>
                <a href="<?php echo esc_url($img_link);?>" <?php if($new_tab == true) : echo "target='_blank'";
               endif;?>>
            <?php endif;?>
                <div class="list-text-image--img <?php echo esc_url($img_link);?>"
                    style="background-image:url(<?php echo esc_url($img_url); ?>">
                </div>
                <?php if(!empty($img_link)) :?>
                </a>
                <?php endif; ?>

            <div class="list-text-image--content">

            <?php if ($list_title && !empty($list_title)) :?>
                <h2 class="title">
                    <?php echo Wacoal_Remove_P_tag(wp_kses_post($list_title));?>
                </h2>
            <?php endif;?>

            <?php if ($list_subtitle && !empty($list_subtitle)) :?>
                <div class="sub-title">
                    <?php echo wp_kses_post($list_subtitle);?>
                </div>
            <?php endif;?>

            <?php if ($list_desc && !empty($list_desc)) :?>
                <div class="content">
                    <?php echo wp_kses_post($list_desc);?>
                </div>
            <?php endif;?>

            <?php if($btn_label && !empty($btn_label)) :?>
                <div class="content-btn">
                    <a href="<?php echo esc_url($btn_link);?>" class="btn primary dark" <?php if($new_tab == true) : echo "target='_blank'";
                   endif;?>>
                    <?php echo esc_attr($btn_label);?></a>
                </div>
            <?php endif;?>

            </div>
        </div>
            <?php if ($list_image_caption && !empty($list_image_caption)) :?>
            <div class="image-name">
                <?php echo wp_kses_post($list_image_caption);?>
            </div>
            <?php endif;?>
    </div>
        <?php }
    }?>
</section>

<section class="list-text-image mobile">
    <?php foreach ($block_lists as $key => $mob_list) {
        $mob_block_image_id     = $mob_list['image'];
        $mob_img_link           = $mob_list['image_link'];
        $mob_list_image_caption = $mob_list['image_caption'];
        $mob_list_title         = $mob_list['title'];
        $mob_list_subtitle      = $mob_list['subtitle'];
        $mob_list_desc          = $mob_list['description'];
        $mob_btn_label              = $mob_list['button_label'];
        $mob_btn_link               = $mob_list['button_link'];

        if ($mob_block_image_id && !empty($mob_block_image_id)) {
            $mob_block_image_array = wp_get_attachment_image_src($mob_block_image_id, 'full');
            $mob_block_image_alt   = Wacoal_Get_Image_alt($mob_block_image_id, 'Block Image');
            $mob_block_image_url   = Wacoal_Get_image($mob_block_image_array);
        }
        ?>
    <div class="list-text-image--wrapper mobile">
        <div class="list-text-image--inner">
            <div class="list-text-image--content">

            <?php if ($mob_list_title && !empty($mob_list_title)) :?>
                <h2 class="title">
                    <?php echo Wacoal_Remove_P_tag(wp_kses_post($mob_list_title));?>
                </h2>
            <?php endif;?>

            <?php if ($mob_list_subtitle && !empty($mob_list_subtitle)) :?>
                <div class="sub-title">
                    <?php echo wp_kses_post($mob_list_subtitle);?>
                </div>
            <?php endif;?>

            </div>

            <?php if ($mob_block_image_id && !empty($mob_block_image_id)) :
                if(!empty($mob_img_link)) :?>
            <a href="<?php echo esc_url($mob_img_link);?>" >
                <?php endif;?>
            <div class="list-text-image--img" style="background-image:url(<?php echo esc_url($mob_block_image_url); ?>">
            </div>
                <?php if(!empty($mob_img_link)) :?>
            </a>
                <?php endif;
            endif;?>

            <?php if ($mob_list_image_caption && !empty($mob_list_image_caption)) :?>
            <div class="image-name">
                <?php echo wp_kses_post($mob_list_image_caption); ?>
            </div>
            <?php endif; ?>

            <?php if ($mob_list_desc || $mob_btn_label) :?>
                <div class="list-text-image--content">
                <?php if($mob_list_desc) :?>
                    <div class="content">
                        <?php echo wp_kses_post($mob_list_desc);?>
                    </div>
                <?php endif;?>

                    <?php if($mob_btn_label) :?>
                    <div class="content-btn">
                        <a href="<?php echo esc_url($mob_btn_link);?>" class="btn primary dark"><?php echo esc_attr($mob_btn_label);?></a>
                    </div>
                    <?php endif;?>
                </div>
            <?php endif;?>

        </div>
    </div>
    <?php }?>
</section>
            <?php
}
?>

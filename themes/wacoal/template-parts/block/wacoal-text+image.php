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
<section class="list-text-image">
    <?php foreach ($block_lists as $key => $list) {
        $block_image_id     = $list['image'];
        $img_link           = $list['image_link'];
        $new_tab            = $list['open_in_new_tab'];
        $list_image_caption = $list['image_caption'];
        $list_title         = $list['title'];
        $list_subtitle      = $list['subtitle'];
        $list_desc          = $list['description'];

        if ($block_image_id && !empty($block_image_id)) {
            $block_image_array = wp_get_attachment_image_src($block_image_id, 'full');
            $block_image_alt   = Wacoal_Get_Image_alt($block_image_id, 'Block Image');
            $block_image_url   = Wacoal_Get_image($block_image_array);
        }

        if ($key % 2 == 0) {
            ?>
    <div class="list-text-image--wrapper">
        <div class="list-text-image--inner">

            <?php if ($block_image_id && !empty($block_image_id)) :
                if(!empty($img_link)) :?>
                    <a href="<?php echo esc_url($img_link);?>" <?php if($new_tab == true) : echo "target='_blank'";
                   endif;?>>
                <?php endif;?>
            <div class="list-text-image--img" style="background-image:url(<?php echo esc_url($block_image_url); ?>">
            </div>
                <?php if(!empty($img_link)) :?>
                </a>
                <?php endif;
            endif; ?>


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

            </div>
        </div>

            <?php if ($list_image_caption && !empty($list_image_caption)) :?>
            <div class="image-name">
                <?php echo wp_kses_post($list_image_caption); ?>
            </div>
            <?php endif; ?>
    </div>
            <?php
        } elseif ($key % 2 == 1) {?>
    <div class="list-text-image--wrapper">
        <div class="list-text-image--inner">
            <?php if ($block_image_id && !empty($block_image_id)) :
                if(!empty($img_link)) :?>
            <a href="<?php echo esc_url($img_link);?>" <?php if($new_tab == true) : echo "target='_blank'";
           endif;?>>
                <?php endif;?>
            <div class="list-text-image--img" style="background-image:url(<?php echo esc_url($block_image_url); ?>">
            </div>
                <?php if(!empty($img_link)) :?>
            </a>
                <?php endif;
            endif;?>

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
            <?php
}
?>

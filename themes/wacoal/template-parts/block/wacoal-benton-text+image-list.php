<?php
/**
 * Html for benton text + image list block
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */
?>

<?php if ($block_lists && !empty($block_lists)) {
    ?>
<section class="benton-text-block">
    <div class="benton-text-block--wrapper">
    <?php foreach ($block_lists as $key => $list) {
        $list_img_id        = $list['image'];
        $list_image_caption = $list['image_caption'];
        $img_link           = $list['image_link'];
        $new_tab            = $list['open_in_new_tab'];
        $list_desc          = $list['description'];

        if (! empty($list_img_id) && $list_img_id ) {
            $list_image_array = wp_get_attachment_image_src($list_img_id, 'full');
            $list_image_alt   = Wacoal_Get_Image_alt($list_img_id, 'Block Image');
            $list_image_url   = Wacoal_Get_image($list_image_array);
        }

        if ($key % 2 == 0) {
            ?>
        <div class="benton-text-block--inner">
            <div class="image-wrapper">

            <?php if($list_img_id && !empty($list_img_id)) :
                if(!empty($img_link)) :?>
                <a href="<?php echo esc_url($img_link);?>" <?php if($new_tab == true) : echo "target='_blank'";
               endif;?>>
                <?php endif;?>
                <div class="image" style="background-image:url(<?php echo  esc_url($list_image_url); ?>">
                </div>
                <?php if(!empty($img_link)) :?>
                    </a>
                <?php endif;
            endif;?>

            <?php if($list_image_caption && !empty($list_image_caption)) :?>
                <div class="image-caption">
                    <?php echo Wacoal_Remove_P_tag(wp_kses_post($list_image_caption));?>
                </div>
            <?php endif;?>

            </div>

            <?php if($list_desc && !empty($list_desc)) :?>
                <div class="content-wrapper">
                    <?php echo Wacoal_Remove_P_tag(wp_kses_post($list_desc));?>
                </div>
            <?php endif;?>
        </div>
            <?php
        } elseif ($key % 2 == 1) {
            ?>
        <div class="benton-text-block--inner">
            <div class="image-wrapper">

            <?php if($list_img_id && !empty($list_img_id)) :
                if(!empty($img_link)) :?>
                <a href="<?php echo esc_url($img_link);?>" <?php if($new_tab == true) : echo "target='_blank'";
               endif;?>>
                <?php endif;?>
                <div class="image" style="background-image:url(<?php echo  esc_url($list_image_url); ?>">
                </div>
                <?php if(!empty($img_link)) :?>
                    </a>
                <?php endif;
            endif;?>

            <?php if($list_image_caption && !empty($list_image_caption)) :?>
                <div class="image-caption">
                    <?php echo Wacoal_Remove_P_tag(wp_kses_post($list_image_caption));?>
                </div>
            <?php endif;?>

            </div>

            <?php if($list_desc && !empty($list_desc)) :?>
                <div class="content-wrapper">
                    <?php echo Wacoal_Remove_P_tag(wp_kses_post($list_desc));?>
                </div>
            <?php endif;?>

        </div>
        <?php }
    }?>
    </div>
</section>
<?php } ?>

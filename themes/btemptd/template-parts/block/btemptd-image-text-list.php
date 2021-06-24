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

<?php if($block_lists && !empty($block_lists)) :?>
<section class="list-text-image">
    <?php foreach ($block_lists as $key => $list) {
        $list_image_position    = !empty($list['image_position']) ? $list['image_position'] : 'left';
        $list_title             = $list['title'];
        $list_desc              = $list['description'];
        $list_img_id            = $list['image'];
        $list_image_caption     = $list['image_caption'];
        $img_link               = $list['image_link'];
        $new_tab                = $list['open_link_in_new_tab'];
        $button_label           = $list['button_label'];
        $button_link            = $list['button_link'];

        if (! empty($list_img_id) && $list_img_id ) {
            $list_image_array = wp_get_attachment_image_src($list_img_id, 'full');
            $list_image_alt   = Btemptd_Get_Image_alt($list_img_id, 'Block Image');
            $list_image_url   = Btemptd_Get_image($list_image_array);
        }

        if ($list_image_position == 'left') {
            ?>
            <div class="list-text-image--wrapper img-left">
                <div class="list-text-image--inner">

                    <?php if($list_img_id && !empty($list_img_id)) :
                        if(!empty($img_link)) :?>
                            <a href="<?php echo esc_url($img_link);?>" <?php if($new_tab == true) : echo "target='_blank'";
                           endif;?>>
                        <?php endif;?>
                    <div class="list-text-image--img" style="background-image:url(<?php echo esc_url($list_image_url); ?>)">
                    </div>
                        <?php if(!empty($img_link)) :?>
                            </a>
                        <?php endif;
                    endif;?>

                    <?php if($list_image_caption && !empty($list_image_caption)) :?>
                    <div class="image-name mobile">
                        <?php echo wp_kses_post($list_image_caption);?>
                    </div>
                    <?php endif;?>

                    <div class="list-text-image--content">

                    <?php if($list_title && !empty($list_title)) :?>
                        <h2 class="title">
                            <?php echo wp_kses_post($list_title);?>
                        </h2>
                    <?php endif;?>

                    <?php if($list_desc && !empty($list_desc)) :?>
                        <div class="content">
                            <?php echo wp_kses_post($list_desc);?>
                        </div>
                    <?php endif;?>

                    </div>
                </div>

                    <?php if($list_image_caption && !empty($list_image_caption)) :?>
                    <div class="image-name desktop">
                        <?php echo wp_kses_post($list_image_caption);?>
                    </div>
                    <?php endif;?>
            </div>
        <?php } elseif ($list_image_position == 'right') {
            ?>
            <div class="list-text-image--wrapper img-right">
                <div class="list-text-image--inner">

                    <?php if($list_img_id && !empty($list_img_id)) :
                        if(!empty($img_link)) :?>
                            <a href="<?php echo esc_url($img_link);?>" <?php if($new_tab == true) : echo "target='_blank'";
                           endif;?>>
                        <?php endif;?>
                    <div class="list-text-image--img" style="background-image:url(<?php echo esc_url($list_image_url);?>)">
                    </div>
                        <?php if(!empty($img_link)) :?>
                            </a>
                        <?php endif;
                    endif;?>

                    <?php if($list_image_caption && !empty($list_image_caption)) :?>
                    <div class="image-name mobile">
                        <?php echo wp_kses_post($list_image_caption);?>
                    </div>
                    <?php endif;?>

                    <div class="list-text-image--content">

                    <?php if($list_title && !empty($list_title)) :?>
                        <h2 class="title">
                            <?php echo wp_kses_post($list_title);?>
                        </h2>
                    <?php endif;?>

                    <?php if($list_desc && !empty($list_desc)) :?>
                        <div class="content">
                            <?php echo wp_kses_post($list_desc);?>
                        </div>
                    <?php endif;?>

                    </div>
                </div>

                    <?php if($list_image_caption && !empty($list_image_caption)) :?>
                    <div class="image-name desktop">
                        <?php echo wp_kses_post($list_image_caption);?>
                    </div>
                    <?php endif;?>

            </div>
        <?php }
    }?>
</section>
<?php endif;?>

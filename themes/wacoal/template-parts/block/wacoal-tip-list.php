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
<section class="text-image-tip desktop">
    <?php foreach ($block_lists as $key => $list) {
            $image_position     = !empty($list['image_position']) ? $list['image_position'] : 'left';
            $title              = $list['title'];
            $subtitle           = $list['subtitle'];
            $bullet_points      = $list['bullet_points'];
            $tip_title          = $list['tip_title'];
            $tip_content        = $list['tip_content'];
            $list_img_id        = $list['image'];
            $img_link           = $list['image_link'];
            $new_tab            = $list['open_in_new_tab'];

        if (! empty($list_img_id) && $list_img_id ) {
            $list_image_array = wp_get_attachment_image_src($list_img_id, 'full');
            $list_image_alt   = Wacoal_Get_Image_alt($list_img_id, 'Block Image');
            $list_image_url   = Wacoal_Get_image($list_image_array);
        }

        if ($image_position == 'left') {
            ?>
            <div class="text-image-tip--wrapper img-left">

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

                <div class="content">

                    <?php if($title && !empty($title)) :?>
                <h2 class="head">
                        <?php echo wp_kses_post($title);?>
                </h2>
                    <?php endif;?>

                    <?php if($subtitle && !empty($subtitle)) :?>
                    <div class="sub-head">
                        <?php echo wp_kses_post($subtitle);?>
                    </div>
                    <?php endif;?>

                    <?php if($bullet_points && !empty($bullet_points)) :
                        echo Wacoal_Remove_P_tag(wp_kses_post($bullet_points));
                    endif;?>

                    <div class="tip">
                    <?php if($tip_title && !empty($tip_title)) :?>
                        <div class="title">
                            <?php echo wp_kses_post($tip_title);?>
                        </div>
                    <?php endif;?>

                    <?php if($tip_content && !empty($tip_content)) :?>
                        <div class="tip-content">
                            <?php echo wp_kses_post($tip_content);?>
                        </div>
                    <?php endif;?>

                    </div>
                </div>
            </div>
            <?php
        } elseif ($image_position == 'right') {
            ?>
            <div class="text-image-tip--wrapper img-right">

                    <?php if($list_img_id && !empty($list_img_id)) :
                        if(!empty($img_link)) :?>
                    <a href="<?php echo esc_url($img_link);?>" <?php if($new_tab == true) : echo "target='_blank'";
                   endif;?>>
                        <?php endif;?>
                <div class="image" style="background-image:url(<?php echo esc_url($list_image_url); ?>">
                </div>
                        <?php if(!empty($img_link)) :?>
                </a>
                        <?php endif;
                    endif;?>

                <div class="content">
                    <?php if($title && !empty($title)) :?>
                        <h2 class="head">
                            <?php echo wp_kses_post($title);?>
                        </h2>
                    <?php endif;?>

                    <?php if($subtitle && !empty($subtitle)) :?>
                    <div class="sub-head">
                        <?php echo wp_kses_post($subtitle);?>
                    </div>
                    <?php endif;?>

                    <?php if($bullet_points && !empty($bullet_points)) :
                        echo Wacoal_Remove_P_tag(wp_kses_post($bullet_points));
                    endif;?>

                    <div class="tip">

                    <?php if($tip_title && !empty($tip_title)) :?>
                        <div class="title">
                            <?php echo wp_kses_post($tip_title);?>
                        </div>
                    <?php endif;?>

                    <?php if($tip_content && !empty($tip_content)) :?>
                        <div class="tip-content">
                            <?php echo wp_kses_post($tip_content);?>
                        </div>
                    <?php endif;?>

                    </div>
                </div>
            </div>
        <?php }
    }?>
</section>
<?php } ?>

<?php if ($block_lists && !empty($block_lists)) { ?>
<section class="text-image-tip mobile">
    <?php foreach ($block_lists as $key => $list) {
            $image_position     = !empty($list['image_position']) ? $list['image_position'] : 'left';
            $title              = $list['title'];
            $subtitle           = $list['subtitle'];
            $bullet_points      = $list['bullet_points'];
            $tip_title          = $list['tip_title'];
            $tip_content        = $list['tip_content'];
            $list_img_id        = $list['image'];
            $img_link           = $list['image_link'];
            $new_tab            = $list['open_in_new_tab'];

        if (! empty($list_img_id) && $list_img_id ) {
            $list_image_array = wp_get_attachment_image_src($list_img_id, 'full');
            $list_image_alt   = Wacoal_Get_Image_alt($list_img_id, 'Block Image');
            $list_image_url   = Wacoal_Get_image($list_image_array);
        }

        if ($image_position == 'left') { ?>
            <div class="text-image-tip--wrapper img-left">

                <div class="content">

                    <?php if($title && !empty($title)) :?>
                        <h2 class="head">
                            <?php echo wp_kses_post($title);?>
                        </h2>
                    <?php endif;?>

                    <?php if($subtitle && !empty($subtitle)) :?>
                        <div class="sub-head">
                            <?php echo wp_kses_post($subtitle);?>
                        </div>
                    <?php endif;?>

                </div>

                    <?php if($list_img_id && !empty($list_img_id)) :
                        if(!empty($img_link)) :?>
                            <a href="<?php echo esc_url($img_link);?>">
                        <?php endif;?>
                        <div class="image" style="background-image:url(<?php echo  esc_url($list_image_url); ?>">
                        </div>
                        <?php if(!empty($img_link)) :?>
                            </a>
                        <?php endif;
                    endif;?>

                <div class="content">
                    <?php if($bullet_points && !empty($bullet_points)) :
                        echo Wacoal_Remove_P_tag(wp_kses_post($bullet_points));
                    endif;?>

                    <div class="tip">

                    <?php if($tip_title && !empty($tip_title)) :?>
                        <div class="title">
                            <?php echo wp_kses_post($tip_title);?>
                        </div>
                    <?php endif;?>

                    <?php if($tip_content && !empty($tip_content)) :?>
                        <div class="tip-content">
                            <?php echo wp_kses_post($tip_content);?>
                        </div>
                    <?php endif;?>

                    </div>
                </div>
            </div>
            <?php
        } elseif ($image_position == 'right') { ?>
            <div class="text-image-tip--wrapper img-right">
                <div class="content">

                    <?php if($title && !empty($title)) :?>
                        <h2 class="head">
                            <?php echo wp_kses_post($title);?>
                        </h2>
                    <?php endif;?>

                    <?php if($subtitle && !empty($subtitle)) :?>
                        <div class="sub-head">
                            <?php echo wp_kses_post($subtitle);?>
                        </div>
                    <?php endif;?>

                </div>

                    <?php if($list_img_id && !empty($list_img_id)) :
                        if(!empty($img_link)) :?>
                            <a href="<?php echo esc_url($img_link);?>">
                        <?php endif;?>
                        <div class="image" style="background-image:url(<?php echo  esc_url($list_image_url); ?>">
                        </div>
                        <?php if(!empty($img_link)) :?>
                            </a>
                        <?php endif;
                    endif;?>

                <div class="content">
                    <?php if($bullet_points && !empty($bullet_points)) :
                        echo Wacoal_Remove_P_tag(wp_kses_post($bullet_points));
                    endif;?>

                    <div class="tip">
                    <?php if($tip_title && !empty($tip_title)) :?>
                        <div class="title">
                            <?php echo wp_kses_post($tip_title);?>
                        </div>
                    <?php endif;?>

                    <?php if($tip_content && !empty($tip_content)) :?>
                        <div class="tip-content">
                            <?php echo wp_kses_post($tip_content);?>
                        </div>
                    <?php endif;?>
                    </div>
                </div>
            </div>
        <?php }
    }?>
</section>
<?php } ?>

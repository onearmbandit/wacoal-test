<?php
/**
 * Btemptd list template
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

if ($list_type == 'simple_data') :
    ?>
<section class="image-content">
    <div class="image-content--wrapper">
    <?php
    foreach ($list_block_data as $key => $list) {
        $list_image_id = $list['image'];
        $list_image_array = wp_get_attachment_image_src($list_image_id, 'full');
        $list_image_alt = Btemptd_Get_Image_alt($list_image_id, 'List Block Image');
        $list_image_url = Btemptd_Get_Image($list_image_array);
        $list_title = $list['title'];
        $list_desc = $list['description'];
        $list_block_link = $list['block_link'];

        if ($key % 2 == 0) {
            ?>
        <div class="odd">
            <?php if ($list_image_id && !empty($list_image_id)) :

                if($list_block_link && !empty($list_block_link)) :?>
                    <a href="<?php echo esc_url($list_block_link);?>" target='_blank'>
                <?php endif;?>

                <div class="image-content--image">
                    <img class="img-fluid" src="<?php echo  esc_url($list_image_url); ?>"
                        alt="<?php echo wp_kses_post($list_image_alt); ?>" />
                </div>
                <?php if($list_block_link && !empty($list_block_link)) :?>
                    </a>
                <?php endif;
            endif; ?>
            <div class="image-content--content box-shadow-right">
                <?php if ($list_title && !empty($list_title)) :?>
                <div class="image-content--content__head">
                    <?php echo wp_kses_post($list_title); ?>
                </div>
                <?php endif;
                if ($list_desc && !empty($list_desc)) :
                    ?>
                <div class="image-content--content__para">
                    <?php echo wp_kses_post($list_desc); ?>
                </div>
                    <?php
                endif; ?>
            </div>
        </div>
            <?php
        } else {
            ?>
        <div class="even">
            <?php if ($list_image_id && !empty($list_image_id)) :
                if($list_block_link && !empty($list_block_link)) :?>
                    <a href="<?php echo esc_url($list_block_link);?>" target='_blank'>
                <?php endif;?>
            <div class="image-content--image">
                <img class="img-fluid" src="<?php echo esc_url($list_image_url); ?>"
                alt="<?php echo wp_kses_post($list_image_alt); ?>" />
            </div>
                <?php if($list_block_link && !empty($list_block_link)) :?>
                    </a>
                <?php endif;
            endif; ?>
            <div class="image-content--content box-shadow-right">
            <?php if ($list_title && !empty($list_title)) :?>
            <div class="image-content--content__head">
                <?php echo wp_kses_post($list_title); ?>
            </div>
            <?php endif;
            if ($list_desc && !empty($list_desc)) :
                ?>
            <div class="image-content--content__para">
                <?php echo wp_kses_post($list_desc); ?>
            </div>
                <?php
            endif; ?>
            </div>
        </div>
            <?php
        }
    }?>
        <?php if ($add_button) :?>
    <div class="see-more--wrapper">
        <a class="shop-now-button" href="<?php echo esc_url($button_url);?>" target="_blank">
            <img class="cta-button" src="<?php echo esc_url(THEMEURI); ?>/assets/images/blog-down-arrow.svg" />
                <?php echo wp_kses_post($button_label);?>
        </a>
    </div>
        <?php endif;?>
    </div>
</section>
<?php endif; ?>

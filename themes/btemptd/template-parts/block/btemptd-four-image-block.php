<?php
/**
 * Btemptd four image block template
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

if(!empty($block_images) && $block_images ) :
    ?>

<section class="four-image">
    <div class="four-image--wrapper">
        <?php
        foreach ($block_images as $img) {

            $block_image_id    = $img['add_image'];
            $block_image_array = wp_get_attachment_image_src($block_image_id, 'full');
            $block_image_alt   = Btemptd_Get_Image_alt($block_image_id, 'Block Image');
            $block_image_url   = Btemptd_Get_Image($block_image_array);
            $block_image_link  = $img['image_link'];

            ?>
        <div class="four-image--wrapper__box">
            <?php if(!empty($block_image_link)) :?>
        <a href="<?php echo esc_url($block_image_link);?>" target="_blank">
            <?php endif;?>
            <img src="<?php echo esc_url($block_image_url);?>" />
            <?php if(!empty($block_image_link)) :?>
            </a>
            <?php endif;?>

        </div>
            <?php
        }
        ?>

    </div>
</section>

    <?php
endif;
?>

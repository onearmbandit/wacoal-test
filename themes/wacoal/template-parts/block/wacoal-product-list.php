<?php
/**
 * Wacoal products list block
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

if ($block_fields && !empty($block_fields)) :
    ?>

<section class="fixes-list desktop-ui">
    <div class="fixes-list--wrapper">
    <?php
    foreach ($block_fields as $key => $list) {
        $prod_title = $list['title'];
        $prod_image_id = $list['product_image'];
        $prod_image_array = wp_get_attachment_image_src($prod_image_id, 'full');
        $prod_image_alt = Wacoal_Get_Image_alt($prod_image_id, 'Block Image');
        $prod_image_url = Wacoal_Get_image($prod_image_array);
        $prod_link = $list['product_image_link'];
        $prod_name = $list['product_name'];
        $prod_desc = $list['product_description'];
        $button_label = $list['button_label'];
        $button_link = $list['button_link'];

        if ($key % 2 == 0) {
            ?>
        <div class="fixes-list--box even">

            <?php if ($prod_title && !empty($prod_title)) :?>
            <div class="fixes-list--boxtitle">
                <?php echo wp_kses_post($prod_title); ?>
            </div>
            <?php endif; ?>

            <div class="fixes-list--boxcontent">

            <?php if ($prod_name && !empty($prod_name)) : ?>
                <div class="verticle-text">
                    <?php echo wp_kses_post($prod_name); ?>
                </div>
            <?php endif; ?>

            <?php if ($prod_image_id && !empty($prod_image_id)) : ?>
                <div class="list-image">

                <?php if($button_link && !empty($button_link)) :?>
                    <a href="<?php echo esc_url($button_link);?>" target='_blank'>
                <?php endif;?>
                    <img class="lazyload"
                         data-src="<?php echo  esc_url($prod_image_url); ?>"
                         src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                         alt="<?php echo wp_kses_post($prod_image_alt); ?>" />
                </div>
                <?php if($button_link && !empty($button_link)) :?>
                    </a>
                <?php endif;
            endif; ?>

                <div class="list-content">

                <?php if ($prod_desc && !empty($prod_desc)) : ?>
                    <div>
                        <?php echo wp_kses_post(Wacoal_Remove_P_tag($prod_desc)); ?>
                    </div>
                <?php endif; ?>

                <?php if ($button_label && !empty($button_label)) :?>
                    <a href="<?php echo esc_url($button_link); ?>"
                       class="btn primary"
                       target="_blank">
                        <?php echo wp_kses_post($button_label); ?>
                    </a>
                <?php endif; ?>

                </div>
            </div>
        </div>
            <?php
        } elseif ($key % 2 == 1) { ?>

        <div class="fixes-list--box odd">

            <?php if ($prod_title && !empty($prod_title)) :?>
            <div class="fixes-list--boxtitle">
                <?php echo wp_kses_post($prod_title); ?>
            </div>
            <?php endif; ?>

            <div class="fixes-list--boxcontent">

                <?php if ($prod_name && !empty($prod_name)) : ?>
                <div class="verticle-text">
                    <?php echo wp_kses_post($prod_name); ?>
                </div>
                <?php endif; ?>

                <div class="list-content">

                <?php if ($prod_desc && !empty($prod_desc)) : ?>
                    <div>
                        <?php echo wp_kses_post(Wacoal_Remove_P_tag($prod_desc)); ?>
                    </div>
                <?php endif; ?>

                <?php if ($button_label && !empty($button_label)) :?>
                    <a href="<?php echo esc_url($button_link); ?>"
                       class="btn primary"
                       target="_blank">
                        <?php echo wp_kses_post($button_label); ?>
                    </a>
                <?php endif; ?>

                </div>

                <?php if ($prod_image_id && !empty($prod_image_id)) : ?>
                <div class="list-image">

                    <?php if($button_link && !empty($button_link)) :?>
                    <a href="<?php echo esc_url($button_link);?>" target='_blank'>
                    <?php endif;?>
                    <img class="lazyload"
                         data-src="<?php echo  esc_url($prod_image_url); ?>"
                         src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                         alt="<?php echo wp_kses_post($prod_image_alt); ?>" />
                </div>
                    <?php if($button_link && !empty($button_link)) :?>
                    </a>
                    <?php endif;
                endif; ?>

            </div>
        </div>
            <?php
        }
    }?>

    </div>
</section>

<section class="fixes-list mobile-ui">
    <div class="fixes-list--wrapper">
    <?php
    foreach ($block_fields as $key => $list) {
        $prod_title = $list['title'];
        $prod_image_id = $list['product_image'];
        $prod_image_array = wp_get_attachment_image_src($prod_image_id, 'full');
        $prod_image_alt = Wacoal_Get_Image_alt($prod_image_id, 'Block Image');
        $prod_image_url = Wacoal_Get_image($prod_image_array);
        $prod_link = $list['product_image_link'];
        $prod_name = $list['product_name'];
        $prod_desc = $list['product_description'];
        $button_label = $list['button_label'];
        $button_link = $list['button_link'];
        ?>
        <div class="fixes-list--box">

            <?php if ($prod_title && !empty($prod_title)) :?>
            <div class="fixes-list--boxtitle">
                <?php echo wp_kses_post($prod_title); ?>
            </div>
            <?php endif; ?>

            <div class="fixes-list--boxcontent">

                <div class="list-image">

                    <?php if($button_link && !empty($button_link)) :?>
                    <a href="<?php echo esc_url($button_link);?>" target='_blank'>
                    <?php endif;?>
                    <img class="lazyload"
                         data-src="<?php echo  esc_url($prod_image_url); ?>"
                         src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                         alt="<?php echo wp_kses_post($prod_image_alt); ?>" />
                </div>

                <?php if ($prod_name && !empty($prod_name)) : ?>
                <div class="verticle-text">
                    <?php echo wp_kses_post($prod_name); ?>
                </div>
                <?php endif; ?>

                <div class="list-content">
                <?php if ($prod_desc && !empty($prod_desc)) : ?>
                    <div>
                        <?php echo wp_kses_post(Wacoal_Remove_P_tag($prod_desc)); ?>
                    </div>
                <?php endif; ?>

                <?php if ($button_label && !empty($button_label)) :?>
                    <a href="<?php echo esc_url($button_link); ?>"
                       class="btn primary">
                        <?php echo wp_kses_post($button_label); ?>
                    </a>
                <?php endif; ?>
                </div>
            </div>
        </div>

            <?php
    }
    ?>

    </div>
</section>
    <?php
endif;
?>

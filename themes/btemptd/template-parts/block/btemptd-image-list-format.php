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
    <section class="image-text-hover">
        <?php
        foreach ($list_block_data as $key => $list) {
            $list_image_position    = !empty($list['image_position']) ? $list['image_position'] : 'left';
            $list_image_id          = $list['image'];
            $list_image_array       = wp_get_attachment_image_src($list_image_id, 'full');
            $list_image_url         = Btemptd_Get_Image($list_image_array);
            $list_img_caption       = $list['image_caption'];
            $list_title             = $list['title'];
            $list_desc              = $list['description'];
            $list_block_link        = $list['block_link'];

            $block_class = '';
            if ($list_image_position == 'left') {
                $block_class = 'img-left';
            } elseif ($list_image_position == 'right') {
                $block_class = 'img-right';
            }
            ?>

                <div class="image-text-hover--wrapper <?php echo esc_attr($block_class); ?>">
                    <div class="image-wrapper">

                        <?php if (!empty($list_block_link)) {?>
                            <a href="<?php echo esc_url($list_block_link);?>" target='_blank'>
                                <div class="image-bg" style="background-image: url(<?php echo esc_url($list_image_url) ?>);"></div>
                            </a>
                        <?php } else { ?>
                            <div class="image-bg" style="background-image: url(<?php echo esc_url($list_image_url) ?>);"></div>
                        <?php } ?>

                            <div class="image-caption">
                            <?php echo esc_attr($list_img_caption); ?>
                        </div>
                    </div>

                    <div class="content-wrapper">
                        <div class="content">
                            <?php if($list_title && !empty($list_title)) :?>
                            <h2 class="title">
                                <?php echo esc_attr($list_title); ?>
                            </h2>
                            <?php endif;
                            if($list_desc && !empty($list_desc)) :?>
                            <div class="para">
                                <?php echo wp_kses_post($list_desc); ?>
                            </div>
                            <?php endif;?>
                        </div>
                    </div>
                </div>

        <?php } ?>
    </section>

    <?php if ($add_button && !empty($button_label) && !empty($button_url)) {?>
        <section class="button-block">
            <div class="button-block--wrapper">
                <a href="<?php echo esc_url($button_url); ?>" target="_blank" class="block-btn">
                    <?php echo esc_attr($button_label);?>
                </a>
            </div>
        </section>
    <?php } ?>

<?php endif; ?>

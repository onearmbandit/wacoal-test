<?php
/**
 * Btemptd Numbered List Template
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

?>

<section class="list-number-tip">

    <?php foreach ($list_data as $key => $list) {
        $image_array = wp_get_attachment_image_src($list['image'], 'full');
        $image_url   = Btemptd_Get_image($image_array);
        $image_caption  = $list['image_caption'];
        $image_link  = $list['image_link'];
        $new_tab = $list['open_link_in_new_tab'] === true ? '_blank' : '_self';

        $image_position  = !empty($list['image_position']) ? $list['image_position'] : 'left';
        $title  = $list['title'];
        $description  = $list['description'];
        $order_value  = $list['order_value'];
        $button_label  = $list['button_label'];
        $button_url  = $list['button_url'];
        $tip_title  = $list['tip_title'];
        $tip_content  = $list['tip_content'];

        $sec_class = '';
        if ($image_position == 'left') {
            $sec_class = 'img-left';
        } elseif ($image_position == 'right') {
            $sec_class = 'img-right';
        }

        $title_class = '';
        if (empty($order_value)) {
            $title_class = 'no-number-title';
        }

        ?>
        <div class="list-number-tip--wrapper <?php echo esc_attr($sec_class); ?>">
            <div class="image-title">
                <?php if (! empty($image_link)) { ?>
                    <a href="<?php echo esc_url($image_link); ?>" target="<?php echo esc_attr($new_tab); ?>" >
                        <div class="image-block" style="background-image:url(<?php echo  esc_url($image_url); ?>);">
                        </div>
                    </a>
                <?php } else { ?>
                    <div class="image-block" style="background-image:url(<?php echo  esc_url($image_url); ?>);">
                    </div>
                <?php } ?>

                <div class="image-name">
                    <?php echo esc_attr($image_caption); ?>
                </div>
            </div>

            <div class="content">
                <?php if (!empty($order_value)) { ?>
                    <div class="number-wrapper">
                        <div class="number-inner">
                            <?php echo esc_attr($order_value); ?>
                        </div>
                    </div>
                <?php } ?>

                <div class="content-inner">
                    <h3 class="title <?php echo esc_attr($title_class); ?>"><?php echo wp_kses_post($title); ?></h3>
                    <div class="para">
                        <?php echo wp_kses_post($description); ?>
                    </div>

                    <?php if (!empty($button_url) && !empty($button_label)) { ?>
                        <a href="<?php echo esc_url($button_url); ?>" class="btn secondary" target="_blank">
                            <?php echo esc_attr($button_label); ?>
                        </a>
                    <?php } ?>

                    <div class="tip">
                        <div class="tip-title">
                            <?php echo wp_kses_post($tip_title); ?>
                        </div>
                        <div class="tip-content">
                            <?php echo wp_kses_post($tip_content); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>

</section>

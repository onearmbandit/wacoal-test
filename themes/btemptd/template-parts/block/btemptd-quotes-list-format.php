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

?>

<section class="image-quote-button">

    <?php
    foreach ($list_data as $key => $list) {
            $list_image_position    = !empty($list['image_position']) ? $list['image_position'] : 'left';
            $list_image_id          = $list['image'];
            $list_image_array       = wp_get_attachment_image_src($list_image_id, 'full');
            $list_image_url         = Btemptd_Get_Image($list_image_array);
            $list_quotes_text       = $list['quotes_text'];
            $list_name              = $list['name'];
            $add_button             = $list['add_button'];

        if ($add_button == true) {
            $button_label = $list['button_text'];
            $button_url = $list['button_url'];
        }

        $block_class = '';
        if ($list_image_position == 'left') {
            $block_class = 'img-left';
        } elseif ($list_image_position == 'right') {
            $block_class = 'img-right';
        }

        ?>
            <div class="image-quote-button--wrapper <?php echo esc_attr($block_class); ?>">
                <div class="image-wrapper" style="background-image: url(<?php echo esc_url($list_image_url) ?>);">
                </div>
                <div class="content-wrapper">
                    <div class="content-wrapper--inner">
                    <div class="quote-left">
                        <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/quote-left.svg" alt="left quote image">
                    </div>

                    <div class="content-inner">
                        <div class="content-inner--title">
                            <?php echo wp_kses_post($list_quotes_text) ?>
                        </div>
                        <div class="content-inner--tag">
                            <?php echo esc_attr($list_name) ?>
                        </div>

                        <?php if ($add_button && !empty($button_label) && !empty($button_url)) {?>
                            <div class="shop-button">
                                <a class="shop-now-button" href="<?php echo esc_url($button_url); ?>" target="_blank">
                                    <?php echo esc_attr($button_label);?>
                                </a>
                            </div>
                        <?php } ?>

                    </div>

                    <div class="quote-right">
                        <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/quote-right.svg" alt="right quote image">
                    </div>
                    </div>
                </div>
            </div>

    <?php } ?>
</section>

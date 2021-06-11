<?php
/**
 * Btemptd Image Text Subhead List Template
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

?>

<section class="italics-title">

    <?php foreach ($list_data as $key => $list) {
            $title = $list['title'];
            $subtitlte = $list['subtitlte'];
            $description = $list['description'];

            $image_id = $list['image'];
            $image_array = wp_get_attachment_image_src($image_id, 'full');
            $image_url   = Btemptd_Get_image($image_array);

            $image_caption = $list['image_caption'];
            $image_link = $list['image_link'];
            $new_tab = $list['open_link_in_new_tab'] === true ? '_blank' : '_self';
        ?>

    <div class="italics-title--wrapper">
        <div class="left-box">
            <div>
                <h3 class="title">
                    <?php echo esc_attr($title); ?>
                </h3>
                <div class="sub-title">
                    <?php echo esc_attr($subtitlte); ?>
                </div>

                <div class="content">
                    <?php echo wp_kses_post($description); ?>
                </div>
            </div>
        </div>

        <div class="right-box">
            <?php if (! empty($image_link)) { ?>
            <a href="<?php echo esc_url($image_link) ?>"
                    target="<?php echo esc_attr($new_tab) ?>" >
                <div class="image-wrapper" style="background-image:url(<?php echo esc_url($image_url); ?>);">
                </div>
            </a>
            <?php } else { ?>
                <div class="image-wrapper" style="background-image:url(<?php echo esc_url($image_url); ?>);">
                </div>
            <?php } ?>
            <div class="image-title">
                <?php echo wp_kses_post($image_caption); ?>
            </div>
        </div>
    </div>

    <?php } ?>
</section>

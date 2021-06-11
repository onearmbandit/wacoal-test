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

<section class="list-text-image">

    <?php foreach ($list_data as $key => $list) {
            $title = $list['title'];
            $subtitlte = $list['subtitlte'];
            $description = $list['description'];

            $image_id = $list['image'];
            $image_array = wp_get_attachment_image_src($image_id, 'full');
            $image_alt   = Btemptd_Get_Image_alt($image_id, 'Block Image');
            $image_url   = Btemptd_Get_image($image_array);

            $image_caption = $list['image_caption'];
            $image_link = $list['image_link'];
            $new_tab = $list['open_link_in_new_tab'] === true ? '_blank' : '_self';
        ?>
        <div class="list-text-image--wrapper">
            <div class="list-text-image--inner">

                <?php if (! empty($image_link)) { ?>
                    <a href="<?php echo esc_url($image_link) ?>"
                        target="<?php echo esc_attr($new_tab) ?>" >
                        <div class="list-text-image--img" style="background-image:url(<?php echo esc_url($image_url); ?>)"></div>
                    </a>
                <?php } else { ?>
                        <div class="list-text-image--img" style="background-image:url(<?php echo esc_url($image_url); ?>)"></div>
                <?php } ?>

                <div class="image-name mobile">
                    <?php echo wp_kses_post($image_caption); ?>
                </div>
                <div class="list-text-image--content">
                    <h2 class="title"><?php echo esc_attr($title); ?></h2>
                    <h4 class="subtitle"><?php echo esc_attr($subtitlte); ?></h4>
                    <div class="content">
                        <?php echo wp_kses_post($description); ?>
                    </div>
                </div>
            </div>
            <div class="image-name desktop">
                <?php echo wp_kses_post($image_caption); ?>
            </div>
        </div>

    <?php } ?>

</section>

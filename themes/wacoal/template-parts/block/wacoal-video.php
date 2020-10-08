<?php
/**
 * Wacoal video template
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

if ($block_image_id && !empty($block_image_id)) {
    ?>

<section class="video-image--wrapper">
        <div class="video-image--wrapper__left">
           <?php
            if ($video_fields_option == 'embed_video') {
                echo $video_field;
            }
            elseif($video_fields_option == 'video_file') {
                $video_url = wp_get_attachment_url($video_field);
                ?>
        <video controls autoplay>
          <source src="<?php echo esc_url($video_url)?>" type="video/mp4">
        </video>
                <?php
            }
            ?>
            <div class="video-caption">
            <?php echo wp_kses_post($video_caption);?>
            </div>
        </div>

        <div class="video-image--wrapper__right">
            <figure>
                <img class="lazyload" data-src="<?php echo esc_url($block_image_url); ?>"
                    alt="<?php echo wp_kses_post($block_image_alt); ?>" />
                <figcaption><?php echo wp_kses_post($image_caption); ?></figcaption>
            </figure>
        </div>

</section>

    <?php
} else {
    if ($video_fields_option == 'embed_video') {
        echo $video_field;
    } elseif ($video_fields_option == 'video_file') {
        $video_url = wp_get_attachment_url($video_field); ?>
        <section class="video-full-width">
<video controls autoplay>
  <source src="<?php echo esc_url($video_url)?>" type="video/mp4">
</video>
<div class="video-caption">
        <?php echo wp_kses_post($video_caption);?>
</div>
        </section>
        <?php
    }
}
?>

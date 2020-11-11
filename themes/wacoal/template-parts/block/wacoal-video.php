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

?>
<section class="video-full-width">
    <div class="video-full-width--wrapper">
    <?php
    if ($video_fields_option == 'embed_video') {
        echo $video_field; // phpcs:ignore
    } elseif ($video_fields_option == 'video_file') {
        $video_url = wp_get_attachment_url($video_field); ?>

            <video controls>
                <source src="<?php echo esc_url($video_url)?>" type="video/mp4">
            </video>
        <?php
    } elseif ($video_fields_option == 'external_url') { ?>
            <video controls>
                <source src="<?php echo esc_url($video_field)?>" type="video/mp4">
            </video>
        <?php
    }
    ?> </div>
    <?php
    if ($video_caption && !empty($video_caption)) {
        ?>
        <div class="video-caption">
                <?php echo wp_kses_post(Wacoal_Remove_P_tag($video_caption)); ?>
        </div>
        <?php
    }
    ?>
</section>

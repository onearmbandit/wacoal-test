<?php
/**
 * Wacoal video image template
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */
?>

<section class="video-image--wrapper">
    <div class="video-image--wrapper__left">
        <?php
        if ($video_fields_option == 'embed_video') {
            echo $video_field; // phpcs:ignore
        } elseif ($video_fields_option == 'video_file') {
            $video_url = wp_get_attachment_url($video_field);
            ?>
    <video controls>
        <source src="<?php echo esc_url($video_url)?>" type="video/mp4">
    </video>
            <?php
        } elseif ($video_fields_option == 'external_url') {
            ?>
        <video controls>
        <source src="<?php echo esc_url($video_field)?>" type="video/mp4">
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
        <?php if(!empty($block_image_link)) :?>
            <a href="<?php echo esc_url($block_image_link);?>" target="_blank";>
        <?php endif;?>
                <img class="lazyload"
                        data-src="<?php echo esc_url($block_image_url); ?>"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        alt="<?php echo wp_kses_post($block_image_alt); ?>" />
            <?php if(!empty($block_image_link)) :?>
            </a>
            <?php endif;?>
            <figcaption><?php echo wp_kses_post($image_caption); ?></figcaption>
        </figure>
    </div>

</section>

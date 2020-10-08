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

<section class="article-questions odd-sequence">
    <div class="article-questions--wrapper">
        <div class="article-questions--content">
           <?php
            if ($video_fields_option == 'embed_video') {
                echo $video_field;
            }
            elseif($video_fields_option == 'insert_url') {
                ?>
        <video controls autoplay>
          <source src="<?php echo esc_url($video_field)?>" type="video/mp4">
        </video>
                <?php
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
        </div>

        <div class="article-questions--image">
            <figure>
                <img class="lazyload" data-src="<?php echo esc_url($block_image_url); ?>"
                    alt="<?php echo wp_kses_post($caption); ?>" />
                <figcaption><?php echo wp_kses_post($caption); ?></figcaption>
            </figure>
        </div>
    </div>
</section>

    <?php
} else {
    if ($video_fields_option == 'embed_video') {
        echo $video_field;
    } elseif ($video_fields_option == 'insert_url') {
        ?>
        <div>
<video controls autoplay>
  <source src="<?php echo esc_url($video_field)?>" type="video/mp4">
</video>
    </div>
        <?php
    } elseif ($video_fields_option == 'video_file') {
        $video_url = wp_get_attachment_url($video_field); ?>
        <div>
<video controls autoplay>
  <source src="<?php echo esc_url($video_url)?>" type="video/mp4">
</video>
    </div>
        <?php
    }
}
?>

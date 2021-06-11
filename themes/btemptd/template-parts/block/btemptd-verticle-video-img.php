<?php
/**
 * Btemptd Verticle Video and Image
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

 $video = '';

switch ($video_option) {
case 'video_file':
    $video_file = get_field('video_file');
    $video_url = wp_get_attachment_url($video_file);
    $video = '<video controls>
                <source src="'.esc_url($video_url).'" type="video/mp4">
            </video>';
    break;

case 'embed_video':
    $embed_url = get_field('embed_video');
    $video = $embed_url;
    break;

case 'external_url':
    $external_url = get_field('external_url');
    $video = '<video controls>
                <source src="'. esc_url($external_url) .'" type="video/mp4">
            </video>';
    break;

default:
    break;
}

$video_caption  = get_field('video_caption');


$image_array = wp_get_attachment_image_src($image, 'full');
$image_alt   = Btemptd_Get_Image_alt($image, 'Block Image');
$image_url   = Btemptd_Get_image($image_array);

$image_caption  = get_field('image_caption');
$image_link  = get_field('image_link');
$new_tab = get_field('open_link_in_new_tab') === true ? '_blank' : '_self';

?>

<section class="video-image--wrapper">
    <div class="video-image--wrapper__left">

        <?php echo $video ?>

        <div class="video-caption">
            <?php echo wp_kses_post($video_caption); ?>
        </div>
    </div>

    <div class="video-image--wrapper__right">
        <figure>
            <?php if (! empty($image_link)) { ?>
            <a href="<?php echo esc_url($image_link); ?>"
                target="<?php echo esc_attr($new_tab); ?>">
                    <img src="<?php echo esc_url($image_url); ?>"
                        alt="<?php echo esc_attr($image_alt); ?>">
            </a>
            <?php } else { ?>
                <img src="<?php echo esc_url($image_url); ?>"
                    alt="<?php echo esc_attr($image_alt); ?>">
            <?php } ?>
            <figcaption><?php echo wp_kses_post($image_caption); ?></figcaption>
        </figure>
    </div>
</section>

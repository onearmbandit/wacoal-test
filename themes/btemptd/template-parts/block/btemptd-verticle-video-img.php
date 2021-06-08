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
    break;

case 'embed_video':
    $embed_url = get_field('embed_video');
    $video = '<iframe loading="lazy" title="【SOGO新竹店】WACOAL GoodFit神奇內著"
                    width="640" height="360"
                    src="'.esc_url($embed_url).'"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen="">
                </iframe>';
    break;

case 'external_url':
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

        <!-- <iframe loading="lazy" title="【SOGO新竹店】WACOAL GoodFit神奇內著"
            width="640" height="360"
            src="https://www.youtube.com/embed/4QCxwSEuHYg?feature=oembed"
            frameborder="0"
            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
            allowfullscreen="">
        </iframe> -->

        <?php echo $video ?>

        <div class="video-caption">
            <p><?php echo wp_kses_post($video_caption); ?></p>
        </div>
    </div>

    <div class="video-image--wrapper__right">
        <figure>
            <a href="<?php echo esc_url($image_link); ?>"
                target="<?php echo esc_attr($new_tab); ?>">
                    <img src="<?php echo esc_url($image_url); ?>"
                        alt="<?php echo esc_attr($image_alt); ?>">
            </a>
            <figcaption><?php echo wp_kses_post($image_caption); ?></figcaption>
        </figure>
    </div>
</section>

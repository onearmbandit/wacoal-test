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

$reviewer_name  = get_field('reviewer_name');
$star_rating_number  = get_field('star_rating_number');

$right_open_in_new_tab = get_field('right_open_in_new_tab') === true ? '_blank' : '_self';

?>

<section class="video-image--wrapper">
    <div class="video-image--wrapper__left">
        <iframe loading="lazy" title="【SOGO新竹店】WACOAL GoodFit神奇內著" width="640" height="360" src="https://www.youtube.com/embed/4QCxwSEuHYg?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe>        <div class="video-caption">
        <p>VIDEO CAPTION – Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
    </div>

    <div class="video-image--wrapper__right">
        <figure>
            <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/article-img-2.png" alt="Block Image">
            <figcaption>Lorem ipsum dolor sit amet</figcaption>
        </figure>
    </div>
</section>

<?php
/**
 * Front page html
 *
 * @package Wacoal
 */

?>

<div class="container">
    <div class="row" style="background-image:url( <?php echo esc_url($top_banner_image_url[0]); ?> ); background-size:cover; height:250px; width:100%;">
        <div class="col-lg-12">
            <div class="intro-text">
            <h2><?php echo esc_attr($top_banner_title); ?></h2>
            <span class="skills"><?php echo esc_attr($top_banner_subtitle); ?></span>
            </div>
        </div>
    </div>
</div>


<div class="swiper-container">
    <div class="swiper-wrapper">
        <div class="swiper-slide">Slide 1</div>
        <div class="swiper-slide">Slide 2</div>
        <div class="swiper-slide">Slide 3</div>
        <div class="swiper-slide">Slide 4</div>
        <div class="swiper-slide">Slide 5</div>
        <div class="swiper-slide">Slide 6</div>
        <div class="swiper-slide">Slide 7</div>
        <div class="swiper-slide">Slide 8</div>
        <div class="swiper-slide">Slide 9</div>
        <div class="swiper-slide">Slide 10</div>
    </div>
    <!-- Add Pagination -->
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</div>

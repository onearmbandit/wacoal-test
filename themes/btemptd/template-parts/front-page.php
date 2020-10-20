<?php
/**
 * Front page html
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

?>
<section class="banner-with-image">
    <div class="banner-with-image--content">
        <h1 class="banner-with-image--heading"><?php echo esc_attr($banner_title);?></h1>
        <p class="banner-with-image--subtitle"><?php echo esc_attr($banner_subtitle);?></p>
    </div>
    <div class="banner-with-image--image" style="background-image: url(<?php  echo esc_attr($banner_url);?>);">
    </div>
</section>
<!-- full width section -->
<section class="full-width-section">
    <?php foreach($static_section['faq'] as $section_key=> $section ): ?>
        <?php if($section_key % 2 == 0):?>
            <div class="full-width-section--wrapper">
                <div class="full-width-section--image box-shadow-right">
                    <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/img-1.png" />
                </div>
                <div class="full-width-section--content">
                    <div class="content-title">
                        <?php echo esc_attr($section['title']);?>
                    </div>
                    <div class="quote">
                        <?php echo esc_attr($section['question']);?>
                    </div>
                    <div class="arrow">
                        <a href=""><img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/red-arrow-right.svg" /></a>
                    </div>
                </div>
            </div>
        <?php else:?>
            <div class="full-width-section--wrapper even">
                <div class="full-width-section--image box-shadow-left">
                    <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/img-1.png" />
                </div>
                <div class="full-width-section--content">
                    <div class="arrow">
                       <a href=""> <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/red-arrow-left.svg" /></a>
                    </div>
                    <div class="content-title">
                        <?php echo esc_attr($section['title']);?>
                    </div>
                    <div class="quote">
                        <?php echo esc_attr($section['question']);?>
                    </div>
                </div>
            </div>
        <?php endif;?>
    <?php endforeach; ?>

</section>

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
    <div class="banner-with-image--image" style="background-image: url(<?php  echo esc_url($banner_image_url);?>);">
    </div>
</section>
<!-- full width section -->
<?php if(!empty($static_section['faq'])): ?>
<section class="full-width-section">
    <?php foreach($static_section['faq'] as $section_key=> $section ): ?>
        <?php if($section_key % 2 == 0):?>
            <?php $image_attributes = wp_get_attachment_image_src($section['image']);
            $image=Btemptd_Get_image($image_attributes);

            ?>
            <div class="full-width-section--wrapper">
                <div class="full-width-section--image box-shadow-right">
                    <img class="img-fluid" src="<?php echo  esc_url($image); ?>" />
                </div>
                <div class="full-width-section--content">
                    <div class="content-title">
                        <?php echo esc_attr(Btemptd_Remove_ptag($section['title']));?>
                    </div>
                    <div class="quote">
                        <?php echo esc_attr(Btemptd_Remove_ptag($section['question']));?>
                    </div>
                    <div class="arrow">
                        <a href="<?php echo esc_url($section['link']);?>" target="_blank"><img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/red-arrow-right.svg" /></a>
                    </div>
                </div>
            </div>
        <?php else:?>
            <?php $image_attributes = wp_get_attachment_image_src($section['image']);
            $image=Btemptd_Get_image($image_attributes);

            ?>
            <div class="full-width-section--wrapper even">
                <div class="full-width-section--image box-shadow-left">
                    <img class="img-fluid" src="<?php echo  esc_url($image); ?>" />
                </div>
                <div class="full-width-section--content">
                    <div class="arrow">
                       <a href="<?php echo esc_url($section['link']);?>" target="_blank"> <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/red-arrow-left.svg" /></a>
                    </div>
                    <div class="content-title">
                        <?php echo esc_attr(Btemptd_Remove_ptag($section['title']));?>
                    </div>
                    <div class="quote">
                        <?php echo esc_attr(Btemptd_Remove_ptag($section['question']));?>
                    </div>
                </div>
            </div>
        <?php endif;?>
    <?php endforeach; ?>

</section>
<?php endif;?>

<!-- featured article -->
<?php if(!empty($featured_posts)):?>
<section class="featured-articles">
    <div class="featured-articles--wrapper">
        <div class="swiper-container featured-articles-slider">
            <div class="swiper-wrapper">
                <?php foreach($featured_posts as $featured_post): ?>
                <?php
                    $thumbnail_id  = get_post_thumbnail_id($featured_post);
                    $thumbnail_url = Btemptd_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
                    $thumbnail_alt = Btemptd_Get_Image_alt($thumbnail_id, 'featured-img');

                ?>
                <div class="swiper-slide">
                    <div class="swiper-slide--image">
                    <img class="lazyload img-fluid" data-src="<?php echo  esc_url($thumbnail_url); ?>"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="<?php echo esc_attr($thumbnail_alt);?>" />

                    </div>

                    <div class="swiper-slide--content">
                        <div class="swiper-slide--content__category">
                            <?php $cat=Btemptd_Get_Primary_category($featured_post) ;?>
                            <?php echo esc_attr($cat->name);?>
                        </div>
                        <div class="swiper-slide--content__title">
                           <?php echo esc_attr(get_the_title($featured_post));?>
                        </div>
                        <div class="swiper-slide--content__para">
                            <?php echo esc_attr(get_field('tagline',$featured_post));?>
                        </div>
                        <div class="swiper-slide--content__cta">
                            <a href="<?php echo esc_url(get_permalink($featured_post));?>">
                                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/cta-big-right.svg" />
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>



            </div>

            <div class="swiper-pagination custom-swiper-pagination"></div>

            <div class="swiper-button-next button-transparent">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow.svg" alt="Slider Arrow" />
            </div>
            <div class="swiper-button-prev button-transparent">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow.svg" alt="Slider Arrow" />
            </div>
        </div>
    </div>
</section>
<div class="spacer-80"></div>
<?php endif;?>

<?php if(!empty($slider_posts)):?>
<section class="featured-articles">
    <div class="featured-articles--wrapper">
        <div class="swiper-container featured-articles-slider">
            <div class="swiper-wrapper">
                <?php foreach($slider_posts as $slider_post): ?>
                <?php
                    $thumbnail_id  = get_post_thumbnail_id($slider_post);
                    $thumbnail_url = Btemptd_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
                    $thumbnail_alt = Btemptd_Get_Image_alt($thumbnail_id, 'featured-img');

                ?>
                <div class="swiper-slide">
                    <div class="swiper-slide--image">
                    <img class="lazyload img-fluid" data-src="<?php echo  esc_url($thumbnail_url); ?>"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="<?php echo esc_attr($thumbnail_alt);?>" />

                    </div>

                    <div class="swiper-slide--content">
                        <div class="swiper-slide--content__category">
                            <?php $cat=Btemptd_Get_Primary_category($slider_post) ;?>
                            <?php echo esc_attr($cat->name);?>
                        </div>
                        <div class="swiper-slide--content__title">
                           <?php echo esc_attr(get_the_title($slider_post));?>
                        </div>
                        <div class="swiper-slide--content__para">
                        <?php echo esc_attr(get_field('tagline',$slider_post));?>
                        </div>
                        <div class="swiper-slide--content__cta">
                            <a href="<?php echo esc_url(get_permalink($slider_post));?>">
                                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/cta-big-right.svg" />
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>



            </div>

            <div class="swiper-pagination custom-swiper-pagination"></div>

            <div class="swiper-button-next button-transparent">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow.svg" alt="Slider Arrow" />
            </div>
            <div class="swiper-button-prev button-transparent">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow.svg" alt="Slider Arrow" />
            </div>
        </div>
    </div>
</section>
<div class="spacer-80"></div>
<?php endif;?>


<!-- Entry page full width Slider -->

<?php if(!empty($recent_posts)):?>
    <?php require locate_template('template-parts/explore-page.php');?>
<?php endif;?>


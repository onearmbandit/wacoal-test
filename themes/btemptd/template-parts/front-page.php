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
<?php if(!empty($banner_link)) :?>
<a href="<?php echo esc_url($banner_link);?>" <?php if($open_in_new_tab == true) : echo "target='_blank'";
endif;?>>
<?php endif;?>
<section class="banner-with-image">
    <div class="banner-with-image--content">
        <div>
        <h1 class="banner-with-image--heading"><?php echo esc_attr($banner_title);?></h1>
        <p class="banner-with-image--subtitle"><?php echo esc_attr($banner_subtitle);?></p>
        </div>
    </div>
    <div class="banner-with-image--image" style="background-image: url(<?php  echo esc_url($banner_image_url);?>);">
    </div>
</section>
<?php if(!empty($banner_link)) :?>
</a>
<?php endif;?>
<!-- full width section -->
<?php if(!empty($static_section['faq'])) : ?>
<section class="full-width-section">
    <?php foreach($static_section['faq'] as $section_key=> $section ): ?>
        <?php if($section_key % 2 == 0) :?>
            <?php $image_attributes = wp_get_attachment_image_src($section['image']);
            $image=Btemptd_Get_image($image_attributes);

            ?>
            <div class="full-width-section--wrapper">
                <div class="full-width-section--image box-shadow-right">
                    <img class="img-fluid" src="<?php echo  esc_url($image); ?>" />
                </div>
                <div class="full-width-section--content desktop">
                    <div class="content-title">
                        <?php echo esc_attr(Btemptd_Remove_ptag($section['title']));?>
                    </div>
                    <div class="quote quote-icon">
                        <?php echo wp_kses_post(Btemptd_Remove_ptag($section['question']));?>
                    </div>
                    <div class="arrow">
                        <a href="<?php echo esc_url($section['link']);?>" target="_blank"><img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/red-arrow-right.svg" /></a>
                    </div>
                </div>

                <div class="full-width-section--content mobile">
                    <div class="">
                        <div class="content-title">
                            <?php echo esc_attr(Btemptd_Remove_ptag($section['title']));?>
                        </div>
                        <div class="quote quote-icon">
                            <?php echo wp_kses_post(Btemptd_Remove_ptag($section['question']));?>
                        </div>
                    </div>
                    <div class="arrow">
                        <a href="<?php echo esc_url($section['link']);?>" target="_blank"><img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/red-arrow-right.svg" /></a>
                    </div>
                </div>
            </div>
        <?php else:?>
            <?php
                $image_attributes = wp_get_attachment_image_src($section['image']);
                $image=Btemptd_Get_image($image_attributes);
            ?>
            <div class="full-width-section--wrapper even">
                <div class="full-width-section--image box-shadow-left">
                    <img class="img-fluid" src="<?php echo  esc_url($image); ?>" />
                </div>
                <div class="full-width-section--content desktop">
                    <div class="arrow">
                       <a href="<?php echo esc_url($section['link']);?>" target="_blank"> <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/red-arrow-left.svg" /></a>
                    </div>
                    <div class="content-title">
                        <?php echo esc_attr(Btemptd_Remove_ptag($section['title']));?>
                    </div>
                    <div class="quote">
                        <?php echo wp_kses_post(Btemptd_Remove_ptag($section['question']));?>
                    </div>
                </div>

                <div class="full-width-section--content mobile">
                    <div class="arrow">
                       <a href="<?php echo esc_url($section['link']);?>" target="_blank"> <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/red-arrow-left.svg" /></a>
                    </div>
                    <div>
                        <div class="content-title">
                            <?php echo esc_attr(Btemptd_Remove_ptag($section['title']));?>
                        </div>
                        <div class="quote">
                            <?php echo wp_kses_post(Btemptd_Remove_ptag($section['question']));?>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif;?>
    <?php endforeach; ?>

</section>
<?php endif;?>

<!-- featured article -->
<?php if(!empty($featured_posts)) :?>
<section class="featured-articles desktop">
    <div class="featured-articles--wrapper box-shadow-right">
        <div class="swiper-container featured-articles-slider">
            <div class="swiper-wrapper">
                <?php foreach($featured_posts as $featured_post): ?>
                    <?php
                    $thumbnail_id  = get_post_thumbnail_id($featured_post);
                    $thumbnail_url = Btemptd_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
                    $thumbnail_alt = Btemptd_Get_Image_alt($thumbnail_id, 'featured-img');
                    $cat_name      = Btemptd_Get_Primary_category($featured_post);
                    $cat_ID        = $cat_name->term_id;
                    ?>
                <div class="swiper-slide">
                    <div class="swiper-slide--image">
                        <a href="<?php echo esc_url(get_permalink($featured_post));?>">
                            <img class="lazyload img-fluid" data-src="<?php echo  esc_url($thumbnail_url); ?>"
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                alt="<?php echo esc_attr($thumbnail_alt);?>" />
                        </a>
                    </div>

                    <div class="swiper-slide--content">
                        <div class="swiper-slide--content__category">
                            <a href="<?php echo esc_url_raw(get_term_link($cat_ID));?>">
                                <?php echo esc_attr($cat_name->name);?>
                            </a>
                        </div>
                        <div class="swiper-slide--content__title">
                            <a href="<?php echo esc_url(get_permalink($featured_post));?>">
                                <?php echo esc_attr(get_the_title($featured_post));?>
                            </a>
                        </div>
                        <div class="swiper-slide--content__para">
                            <?php echo wp_kses_post(Btemptd_Remove_ptag(get_field('tagline', $featured_post)));?>
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

            <div class="swiper-button--wrapper">
                <div class="swiper-button--wrapper-inner">
            <div class="swiper-pagination custom-swiper-pagination"></div>

            <div class="swiper-button-next button-transparent">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow-right.svg" alt="Slider Arrow" />
            </div>
            <div class="swiper-button-prev button-transparent">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow-left.svg" alt="Slider Arrow" />
            </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php endif;?>

<?php if(!empty($slider_posts)) :?>
<section class="featured-articles desktop even">
    <div class="featured-articles--wrapper box-shadow-left">
        <div class="swiper-container featured-articles-slider">
            <div class="swiper-wrapper">
                <?php foreach($slider_posts as $slider_post): ?>
                    <?php
                    $thumbnail_id  = get_post_thumbnail_id($slider_post);
                    $thumbnail_url = Btemptd_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
                    $thumbnail_alt = Btemptd_Get_Image_alt($thumbnail_id, 'featured-img');
                    $cat_name      = Btemptd_Get_Primary_category($slider_post);
                    $cat_ID        = $cat_name->term_id;
                    ?>
                <div class="swiper-slide">
                    <div class="swiper-slide--image">
                        <a href ="<?php echo esc_url(get_permalink($slider_post));?>" >
                            <img class="lazyload img-fluid" data-src="<?php echo  esc_url($thumbnail_url); ?>"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            alt="<?php echo esc_attr($thumbnail_alt);?>" />
                        </a>
                    </div>

                    <div class="swiper-slide--content">
                        <div class="swiper-slide--content__category">
                            <a href= "<?php echo esc_url_raw(get_term_link($cat_ID));?>">
                                <?php echo esc_attr($cat_name->name);?>
                            </a>
                        </div>
                        <div class="swiper-slide--content__title">
                            <a href="<?php echo esc_url(get_permalink($slider_post));?>">
                                <?php echo esc_attr(get_the_title($slider_post));?>
                            </a>
                        </div>
                        <div class="swiper-slide--content__para">
                        <?php echo esc_attr(Btemptd_Remove_ptag(get_field('tagline', $slider_post)));?>
                        </div>
                        <div class="swiper-slide--content__cta">
                            <a href="<?php echo esc_url(get_permalink($slider_post));?>">
                                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/red-arrow-left.svg" />
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>

            </div>

            <div class="swiper-button--wrapper">
                <div class="swiper-button--wrapper-inner">
            <div class="swiper-pagination custom-swiper-pagination"></div>

            <div class="swiper-button-next button-transparent">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow-right.svg" alt="Slider Arrow" />
            </div>
            <div class="swiper-button-prev button-transparent">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow-left.svg" alt="Slider Arrow" />
            </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif;?>

<?php if(!empty($slider_posts)) :?>
<section class="featured-articles-mobile">
    <div class="featured-articles-mobile--wrapper">
        <div class="swiper-container featured-articles-slider-mo">
            <div class="swiper-wrapper">
                <?php foreach($slider_posts as $slider_post): ?>
                    <?php
                    $thumbnail_id  = get_post_thumbnail_id($slider_post);
                    $thumbnail_url = Btemptd_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
                    $thumbnail_alt = Btemptd_Get_Image_alt($thumbnail_id, 'featured-img');

                    ?>
                <div class="swiper-slide">
                    <div class="swiper-slide--content">
                        <div class="swiper-slide--content__category">
                            <?php $cat_name=Btemptd_Get_Primary_category($slider_post);?>
                            <?php echo esc_attr($cat_name->name);?>
                        </div>
                        <div class="swiper-slide--content__title">
                           <?php echo esc_attr(get_the_title($slider_post));?>
                        </div>
                    </div>
                    <div class="swiper-slide--image">
                    <img class="lazyload img-fluid" data-src="<?php echo  esc_url($thumbnail_url); ?>"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="<?php echo esc_attr($thumbnail_alt);?>" />

                    </div>

                    <div class="swiper-slide--content">
                        <div class="swiper-slide--content__para">
                        <?php echo esc_attr(Btemptd_Remove_ptag(get_field('tagline', $slider_post)));?>
                        </div>
                        <div class="swiper-slide--content__cta">
                            <a href="<?php echo esc_url(get_permalink($slider_post));?>">
                                Read more
                            </a>
                        </div>
                    </div>
                </div>
                <?php endforeach;?>

            </div>

            <div class="swiper-button--wrapper">
                <div class="swiper-button--wrapper-inner">
            <div class="swiper-pagination custom-swiper-pagination"></div>

            <div class="swiper-button-next button-transparent">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow-right.svg" alt="Slider Arrow" />
            </div>
            <div class="swiper-button-prev button-transparent">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow-left.svg" alt="Slider Arrow" />
            </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php endif;?>

<?php if(!empty($recent_posts)) :?>
    <?php include locate_template('template-parts/explore-page.php');?>
<?php endif;


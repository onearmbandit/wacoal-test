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
<a href="<?php echo esc_url($banner_link);?>"
    <?php if($open_in_new_tab == true) : echo "target='_blank'";
    endif;?>>
<?php endif;
if(!empty($banner_image_id) || !empty($banner_title) || !empty($banner_subtitle)) :
    ?>
<section class="banner-with-image">
    <div class="banner-with-image--content">
    <?php if(!empty($banner_title) || !empty($banner_subtitle)) :?>
        <div>
        <?php if(!empty($banner_title)) :?>
            <h1 class="banner-with-image--heading">
                <?php echo esc_attr($banner_title);?>
            </h1>
        <?php endif;
        if(!empty($banner_subtitle)) :
            ?>
            <p class="banner-with-image--subtitle">
                <?php echo esc_attr($banner_subtitle);?>
            </p>
        <?php endif;?>
        </div>
    <?php endif;?>
    </div>
    <div class="banner-with-image--image"
         style="background-image: url(<?php  echo esc_url($banner_image_url);?>);">
    </div>
</section>
        <?php
endif;
if(!empty($banner_link)) :?>
</a>
<?php endif;?>

<!-- full width section -->
<?php if(!empty($static_section['faq'])) : ?>
<section class="full-width-section">
    <?php foreach($static_section['faq'] as $section_key=> $section ): ?>
        <?php if($section_key % 2 == 0) :?>
            <?php
            $image_attributes = wp_get_attachment_image_src($section['image']);
            $image_url        = Btemptd_Get_image($image_attributes);
            ?>
            <div class="full-width-section--wrapper">
                <?php if($section['image'] && !empty($section['image'])) :?>
                <div class="full-width-section--image box-shadow-right">
                    <img class="img-fluid"
                         src="<?php echo  esc_url($image_url); ?>" />
                </div>
                <?php endif;?>
                <div class="full-width-section--content desktop">
                    <?php if($section['title'] && !empty($section['title'])) :?>
                        <div class="content-title">
                            <?php echo esc_attr(Btemptd_Remove_ptag($section['title']));?>
                        </div>
                        <?php
                    endif;
                    if($section['question'] && !empty($section['question'])) :
                        ?>
                    <div class="quote quote-icon">
                        <?php echo wp_kses_post(Btemptd_Remove_ptag($section['question']));?>
                    </div>
                        <?php
                    endif;
                    if($section['link'] && !empty($section['link'])) :
                        ?>
                    <div class="arrow">
                        <a href="<?php echo esc_url($section['link']);?>"
                           target="_blank">
                           <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/red-arrow-right.svg" />
                        </a>
                    </div>
                    <?php endif;?>
                </div>

                <div class="full-width-section--content mobile">
                    <div class="">
                    <?php if($section['title'] && !empty($section['title'])) :?>
                        <div class="content-title">
                            <?php echo esc_attr(Btemptd_Remove_ptag($section['title']));?>
                        </div>
                    <?php endif;
                    if($section['question'] && !empty($section['question'])) :
                        ?>
                        <div class="quote quote-icon">
                            <?php echo wp_kses_post(Btemptd_Remove_ptag($section['question']));?>
                        </div>
                    <?php endif;?>
                    </div>
                    <?php if($section['link'] && !empty($section['link'])) : ?>
                    <div class="arrow">
                        <a href="<?php echo esc_url($section['link']);?>"
                           target="_blank">
                            <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/red-arrow-right.svg" />
                        </a>
                    </div>
                    <?php endif;?>
                </div>
            </div>
        <?php else:?>
            <?php
                $image_attributes = wp_get_attachment_image_src($section['image']);
                $image_url            =Btemptd_Get_image($image_attributes);
            ?>
            <div class="full-width-section--wrapper even">
            <?php if($section['image'] && !empty($section['image'])) :?>
                <div class="full-width-section--image box-shadow-left">
                    <img class="img-fluid" src="<?php echo  esc_url($image_url); ?>" />
                </div>
            <?php endif;?>
                <div class="full-width-section--content desktop">
                    <?php if($section['link'] && !empty($section['link'])) :?>
                    <div class="arrow">
                       <a href="<?php echo esc_url($section['link']);?>"
                          target="_blank">
                          <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/red-arrow-left.svg" />
                        </a>
                    </div>
                    <?php endif;
                    if($section['title'] && !empty($section['title'])) :?>
                    <div class="content-title">
                        <?php echo esc_attr(Btemptd_Remove_ptag($section['title']));?>
                    </div>
                    <?php endif;
                    if($section['question'] && !empty($section['question'])) :
                        ?>
                    <div class="quote">
                        <?php echo wp_kses_post(Btemptd_Remove_ptag($section['question']));?>
                    </div>
                    <?php endif;?>
                </div>

                <div class="full-width-section--content mobile">
                <?php if($section['link'] && !empty($section['link'])) :?>
                    <div class="arrow">
                       <a href="<?php echo esc_url($section['link']);?>"
                          target="_blank">
                            <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/red-arrow-left.svg" />
                       </a>
                    </div>
                <?php endif;?>
                    <div>
                        <?php  if($section['title'] && !empty($section['title'])) :?>
                        <div class="content-title">
                            <?php echo esc_attr(Btemptd_Remove_ptag($section['title']));?>
                        </div>
                        <?php endif;
                        if($section['question'] && !empty($section['question'])) :
                            ?>
                        <div class="quote">
                            <?php echo wp_kses_post(Btemptd_Remove_ptag($section['question']));?>
                        </div>
                        <?php endif;?>
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


<?php if(!empty($featured_posts)) :?>
<section class="featured-articles-mobile">
    <div class="featured-articles-mobile--wrapper">
        <div class="swiper-container featured-articles-slider-mo">
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
                    </div>
                    <div class="swiper-slide--image">
                        <a href="<?php echo esc_url(get_permalink($featured_post));?>">
                            <img class="lazyload img-fluid" data-src="<?php echo  esc_url($thumbnail_url); ?>"
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                alt="<?php echo esc_attr($thumbnail_alt);?>" />
                        </a>
                    </div>

                    <div class="swiper-slide--content">

                        <div class="swiper-slide--content__para">
                            <?php echo wp_kses_post(Btemptd_Remove_ptag(get_field('tagline', $featured_post)));?>
                        </div>
                        <div class="swiper-slide--content__cta">
                            <a href="<?php echo esc_url(get_permalink($featured_post));?>">
                                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/blog-down-arrow.svg" />
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
                    $cat_name      = Btemptd_Get_Primary_category($slider_post);
                    $cat_ID        = $cat_name->term_id;

                    ?>
                <div class="swiper-slide">
                    <div class="swiper-slide--content">
                        <div class="swiper-slide--content__category">
                            <a href="<?php echo esc_url_raw(get_term_link($cat_ID));?>">
                                <?php echo esc_attr($cat_name->name);?>
                            </a>
                        </div>
                        <div class="swiper-slide--content__title">
                            <a href="<?php echo esc_url(get_permalink($slider_post));?>">
                                <?php echo esc_attr(get_the_title($slider_post));?>
                            </a>
                        </div>
                    </div>
                    <div class="swiper-slide--image">
                        <a href="<?php echo esc_url(get_permalink($slider_post));?>">
                            <img class="lazyload img-fluid"
                                data-src="<?php echo  esc_url($thumbnail_url); ?>"
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                alt="<?php echo esc_attr($thumbnail_alt);?>" />
                        </a>
                    </div>

                    <div class="swiper-slide--content">
                        <div class="swiper-slide--content__para">
                        <?php echo esc_attr(Btemptd_Remove_ptag(get_field('tagline', $slider_post)));?>
                        </div>
                        <div class="swiper-slide--content__cta">
                            <a href="<?php echo esc_url(get_permalink($slider_post));?>">
                                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/blog-down-arrow.svg" />
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
<?php endif; ?>

<!-- <section class="image-content">
    <div class="image-content--wrapper">
        <div class="odd">
            <div class="image-content--image">
                <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/featured-article-img-2.png" alt="Article Image" />
            </div>
            <div class="image-content--content box-shadow-right">
                <div class="image-content--content__head">
                    Comfort
                </div>
                <div class="image-content--content__para">
                    With bodily changes happening fast and furiously, comfort is key. Her first bra should be soft, stretchy and perhaps wire-free, making her transition into wearing a bra feel a bit less overwhelming.
                </div>
            </div>
        </div>

        <div class="even">
            <div class="image-content--image">
                <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/featured-article-img-2.png" alt="Article Image" />
            </div>
            <div class="image-content--content box-shadow-right">
            <div class="image-content--content__head">
                Convertibility
            </div>
            <div class="image-content--content__para">
                Many tweens wear clothing that’s more casual— such as tank tops with skinny straps that might expose bare shoulders. We suggest bras with a J-hook on the back straps for the choice of converting the bra into a racerback style.
            </div>
            </div>
        </div>
    </div>
</section> -->

<!-- <section class="image-content image-content-gif">
    <div class="image-content--wrapper">
        <div class="odd">
            <div class="image-content--image">
                <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/featured-article-img-2.png" alt="Article Image" />
            </div>
            <div class="image-content--content">
                    <div class="quote-left">
                        <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/quote-left.svg" alt="Image" />
                    </div>
                    <div class="content-inner">
                        <div class="image-content--content__title">
                        It’s so soft and comfortable I almost forget I’m wearing it!
                        </div>
                        <div class="image-content--content__tag">
                            –@ericaluoo
                        </div>
                        <div class="shop-button">
                            <a class="see-more-button">Shop Now <img class="cta-button" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/blog-down-arrow.svg" /></a>
                        </div>
                    </div>
                    <div class="quote-right">
                        <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/quote-right.svg" alt="Image" />
                    </div>
            </div>
        </div>

        <div class="even">
            <div class="image-content--image">
                <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/featured-article-img-2.png" alt="Article Image" />
            </div>
            <div class="image-content--content">
                    <div class="quote-left">
                        <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/quote-left.svg" alt="Image" />
                    </div>
                    <div class="content-inner">
                        <div class="image-content--content__title">
                            When a bra-less kinda girl finally finds her bra-match…SO GOOD.
                        </div>
                        <div class="image-content--content__tag">
                            –@ericaluoo
                        </div>
                        <div class="shop-button">
                            <a class="see-more-button">Shop Now <img class="cta-button" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/blog-down-arrow.svg" /></a>
                        </div>
                    </div>
                    <div class="quote-right">
                        <img class="img-fluid" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/quote-right.svg" alt="Image" />
                    </div>
            </div>
        </div>
    </div>
</section> -->

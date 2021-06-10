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
                <?php
                if($section['image'] && !empty($section['image'])) :
                    if($section['link'] && !empty($section['link'])) :
                        ?>
                    <a href="<?php echo esc_url($section['link']);?>"
                       target="_blank">
                    <?php endif; ?>
                <div class="full-width-section--image box-shadow-right">
                    <img class="img-fluid"
                         src="<?php echo  esc_url($image_url); ?>" />
                </div>
                    <?php if($section['link'] && !empty($section['link'])) : ?>
                </a>
                        <?php
                    endif;
                endif;?>
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
                    <div class="content-mobile">
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
                $image_url        = Btemptd_Get_image($image_attributes);
            ?>
            <div class="full-width-section--wrapper even">
            <?php
            if($section['image'] && !empty($section['image'])) :
                if($section['link'] && !empty($section['link'])) :
                    ?>
                    <a href="<?php echo esc_url($section['link']);?>"
                       target="_blank">
                <?php endif;
                ?>
                <div class="full-width-section--image box-shadow-left">
                    <img class="img-fluid"
                         src="<?php echo  esc_url($image_url); ?>" />
                </div>
                <?php  if($section['link'] && !empty($section['link'])) : ?>
               </a>
                    <?php
                endif;
            endif;?>
                <div class="full-width-section--content desktop">
                    <?php if($section['link'] && !empty($section['link'])) :?>
                    <div class="arrow">
                       <a href="<?php echo esc_url($section['link']);?>"
                          target="_blank">
                          <img src="<?php echo esc_url(THEMEURI); ?>/assets/images/red-arrow-left.svg" />
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
                    <div class="content-mobile">
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
                            <a href="<?php echo esc_url(get_permalink($featured_post)); ?>">
                                <?php echo wp_kses_post(Btemptd_Remove_ptag(get_field('tagline', $featured_post)));?>
                            </a>
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
                        <a href="<?php echo esc_url(get_permalink($slider_post)); ?>">
                            <?php echo esc_attr(Btemptd_Remove_ptag(get_field('tagline', $slider_post)));?>
                        </a>
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
                        <a href="<?php echo esc_url(get_permalink($featured_post)); ?>">
                            <?php echo wp_kses_post(Btemptd_Remove_ptag(get_field('tagline', $featured_post)));?>
                        </a>
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
                        <a href="<?php echo esc_url(get_permalink($slider_post)); ?>">
                            <?php echo esc_attr(Btemptd_Remove_ptag(get_field('tagline', $slider_post)));?>
                        </a>
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

<section class="list-text-image">
    <div class="list-text-image--wrapper">
        <div class="list-text-image--inner">
            <div class="list-text-image--img" style="background-image:url(<?php echo  esc_url(THEMEURI); ?>/assets/images/article-img-1.png)">

            </div>
            <div class="image-name mobile">Body Base® Shorty Panty</div>
            <div class="list-text-image--content">
                <h2 class="title">the strapless:</h2>

                <div class="content">
                    <strong>Future Foundation Backless Strapless Bra</strong> is the innovation that every dress demands. Skinny straps, no straps, open back, low back- even the trickiest styles are simple to wear when you have this in your arsenal. And, there is something subtly sexy about the hook-and-eye closure sitting just above the small of the back. Added bonus? Power mesh and light boning shape and support!
                </div>
            </div>
        </div>
        <div class="image-name desktop">Body Base® Shorty Panty</div>
    </div>
    <div class="list-text-image--wrapper">
        <div class="list-text-image--inner">
            <div class="list-text-image--img" style="background-image:url(<?php echo  esc_url(THEMEURI); ?>/assets/images/article-img-1.png)">

            </div>
            <div class="image-name mobile">Body Base® Shorty Panty</div>
            <div class="list-text-image--content">
                <h2 class="title">The push up:</h2>

                <div class="content">
                    <strong>b. wow’d Push Up Bra</strong> takes a basic V-neck t-shirt and makes it anything but. This smooth finish style has a deep plunge and flirty animal print lining (sure, nobody sees it when it’s on your body, but you know it is there!) Wear it with a crisp, fitted button down and consider leaving one more button open than usual for a look that transforms a daytime staple into a nighttime stunner.
                </div>
            </div>
        </div>
        <div class="image-name desktop">Body Base® Shorty Panty</div>
    </div>
</section>


<!-- Customer Review -->
<section class="customer-review">
    <div class="customer-review--wrapper">
        <div class="image-wrapper left">
            <div class="image" style="background-image:url(<?php echo  esc_url(THEMEURI); ?>/assets/images/article-img-2.png);">

            </div>
            <div class="image-caption">
                @alexiscastello
            </div>
        </div>

        <div class="review-content">
            <div class="rating-stars">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/rating-star.svg" alt="Rating Star"/>
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/rating-star.svg" alt="Rating Star"/>
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/rating-star.svg" alt="Rating Star"/>
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/rating-star.svg" alt="Rating Star"/>
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/rating-star.svg" alt="Rating Star"/>
            </div>
            <div class="rating-content">
                The best new bra I’ve bought in years!! I absolutely love this bra! The wider band on the sides provides the best smoothing effect and the fit is perfect! The fabric and fit make it the most comfortable bra I’ve had in a long time! I am so happy with this bra I can’t wait to order more!
            </div>
            <div class="customer-name">
                – CUSTOMER REVIEW
            </div>
        </div>

        <div class="image-wrapper right">
            <div class="image" style="background-image:url(<?php echo  esc_url(THEMEURI); ?>/assets/images/article-img-2.png);">

            </div>
            <div class="image-caption">
                @alexiscastello
            </div>
        </div>
    </div>
</section>

<!-- full video -->
<section class="video-full-width">
    <div class="video-full-width--wrapper">
    <iframe loading="lazy" title="【SOGO新竹店】WACOAL GoodFit神奇內著" width="640" height="360" src="https://www.youtube.com/embed/4QCxwSEuHYg?feature=oembed" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen=""></iframe> </div>
    <div class="video-caption">
        <p>VIDEO CAPTION – Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ultrices sagittis orci a scelerisque purus Lorem ipsum dolor sit amet, consecte Lorem ipsum dolor sit amet, consecte</p>
    </div>
</section>

<!-- Body Outro Paragraph -->
<section class="body-outro-para">
    <div class="body-outro-para--wrapper">
        <div class="content">
            How many of these bras do you own, and which is first on your “must buy” wish list? Drop a note in the comments, we would love to hear from you!
        </div>
    </div>
</section>

<!-- full bleed image -->
<section class="full-bleed-image">
    <div class="full-bleed-image--wrapper" style="background-image:url(<?php echo  esc_url(THEMEURI); ?>/assets/images/article-img-2.png);">

    </div>
</section>

<!-- inline banner image large -->
<section class="internal-banner">
    <div class="banner-wrapper big-banner" style="background-image:url(<?php echo  esc_url(THEMEURI); ?>/assets/images/article-img-2.png);">
    </div>
</section>

<!-- inline banner image medium -->
<section class="internal-banner">
    <div class="banner-wrapper medium-banner" style="background-image:url(<?php echo  esc_url(THEMEURI); ?>/assets/images/article-img-2.png);">
    </div>
</section>

<!-- inline banner image small -->
<section class="internal-banner">
    <div class="banner-wrapper small-banner" style="background-image:url(<?php echo  esc_url(THEMEURI); ?>/assets/images/article-img-2.png);">
    </div>
</section>

<section class="product-gallery">
    <div class="product-gallery--wrapper">
        <div class="product-gallery--box">
            <div class="product-gallery--box__image">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/article-img-2.png" alt="Product" />
            </div>
            <div class="product-gallery--box__title">
                product name caption
            </div>
            <div class="product-gallery--box__size">
                Sizing caption
            </div>
        </div>

        <div class="product-gallery--box">
            <div class="product-gallery--box__image">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/article-img-2.png" alt="Product" />
            </div>
            <div class="product-gallery--box__title">
                product name caption
            </div>
            <div class="product-gallery--box__size">
                Sizing caption
            </div>
        </div>

        <div class="product-gallery--box">
            <div class="product-gallery--box__image">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/article-img-2.png" alt="Product" />
            </div>
            <div class="product-gallery--box__title">
                product name caption
            </div>
            <div class="product-gallery--box__size">
                Sizing caption
            </div>
        </div>

        <div class="product-gallery--box">
            <div class="product-gallery--box__image">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/article-img-2.png" alt="Product" />
            </div>
            <div class="product-gallery--box__title">
                product name caption
            </div>
            <div class="product-gallery--box__size">
                Sizing caption
            </div>
        </div>
    </div>
</section>

<!-- Video image -->
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

<!-- image body -->
<section class="image-medium">
    <div class="image-medium--wrapper">
        <div class="image-medium--image" style="background-image:url(<?php echo  esc_url(THEMEURI); ?>/assets/images/article-img-2.png);">
        </div>

        <div class="image-medium--content">
            <p>“Historically, underwear implies function first—while the word lingerie evokes more of an aesthetic purpose. The idea that intimates have to be one or the other is something our design team challenges every time we sit around the table to create—there really is no reason that women can’t have both!”</p>
        </div>
    </div>
</section>

<!-- text hover box -->
<section class="text-hover-box">
    <div class="text-hover-box--wrapper">
        <div class="container">
            It is one of our all-time best sellers, and if it isn’t already in your bra wardrobe, here are 3 reasons why it should be:
        </div>
    </div>
</section>


<!-- "List - Image + Italics Title + Subhead + Body RIGHT
List - Image + Italics Title + Subhead + Body LEFT" -->
<section class="italics-title">
    <div class="italics-title--wrapper">
        <div class="left-box">
            <div>
            <h3 class="title">Featherlight Find:</h3>

            <div class="sub-title">
                b. bare hipster, thong, and cheeky
            </div>

            <div class="content">
                Lightweight, clean-cut, and smartly constructed, b. bare is a smarter option than actually, well, being bare! Check out the customer favorite “cheeky” style for a cute peek of cheek, the thong is a great moderate coverage option, and the hipster is always a hit.
            </div>
            </div>
        </div>

        <div class="right-box">
                <div class="image-wrapper" style="background-image:url(<?php echo  esc_url(THEMEURI); ?>/assets/images/article-img-2.png);">

                </div>
                <div class="image-title">
                    lace kiss bralette
                </div>
        </div>
    </div>

    <div class="italics-title--wrapper">
        <div class="left-box">
            <div>
            <h3 class="title">No-Pinch Perfection:</h3>

            <div class="sub-title">
                Comfort Intended hipster and thong
            </div>

            <div class="content">
                Stay-in-place panties without any elastic to potentially pinch around the waistline?! Yup, it’s a thing. The hipster and thong styles in this collection are so soft, stretchy, and seamless; you may forget you have them on at all!
            </div>
            </div>
        </div>

        <div class="right-box">
                <div class="image-wrapper" style="background-image:url(<?php echo  esc_url(THEMEURI); ?>/assets/images/article-img-2.png);">

                </div>
                <div class="image-title">
                    lace kiss bralette
                </div>
        </div>
    </div>
</section>

<!-- button block -->
<section class="button-block">
    <div class="button-block--wrapper">
            <a href="" class="block-btn">SHOP OUR BEST SELLERS HERE!</a>
    </div>
</section>

<?php if(!empty($recent_posts)) :?>
    <?php include locate_template('template-parts/explore-page.php');?>
<?php endif; ?>

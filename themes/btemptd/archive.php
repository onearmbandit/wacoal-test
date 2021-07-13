<?php
/**
 * Single category template
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

Btemptd_Page_Entry_top('');

$current_cat_data = get_queried_object();
$current_cat_id   = $current_cat_data->term_id;
$cat_name         = $current_cat_data->name;

?>

<section class="banner-with-background">
    <h2 class="banner-with-background--heading"><?php echo esc_attr($cat_name);?></h2>

    <div class="banner-with-background--subtitle">
        <?php echo category_description(); ?>
    </div>

</section>

<?php
$template= get_field('template', 'category_'.$current_cat_id);
if ($template == 'simple') :

    $static_section = get_field('static_section', 'category_'.$current_cat_id);

    ?>
    <?php if(!empty($static_section['faq'])) : ?>
<section class="full-width-section">
        <?php foreach($static_section['faq'] as $section_key=> $section ): ?>
            <?php if($section_key % 2 == 0) :?>
                <?php $image_attributes = wp_get_attachment_image_src($section['image']);
                $image=Btemptd_Get_image($image_attributes);

                ?>
            <div class="full-width-section--wrapper">
                <?php
                if($section['url'] && !empty($section['url'])) :
                    ?>
                    <a href="<?php echo esc_url($section['url']);?>" target="_blank">
                <?php endif; ?>
                <div class="full-width-section--image box-shadow-right">
                    <img class="img-fluid" src="<?php echo  esc_url($image); ?>" />
                </div>
                <?php if($section['url'] && !empty($section['url'])) : ?>
                </a>
                    <?php
                endif;?>
                <div class="full-width-section--content desktop">
                    <div class="content-title">
                        <?php echo esc_attr(Btemptd_Remove_ptag($section['title']));?>
                    </div>
                    <div class="quote quote-icon">
                        <?php echo wp_kses_post(Btemptd_Remove_ptag($section['question']));?>
                    </div>
                    <div class="arrow">
                        <a href="<?php echo esc_url($section['url']);?>" target="_blank"><img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/red-arrow-right.svg" /></a>
                    </div>
                </div>

                <div class="full-width-section--content mobile">
                    <div class="content-mobile">
                        <div class="content-title">
                            <?php echo esc_attr(Btemptd_Remove_ptag($section['title']));?>
                        </div>
                        <div class="quote quote-icon">
                            <?php echo wp_kses_post(Btemptd_Remove_ptag($section['question']));?>
                        </div>
                    </div>
                    <div class="arrow">
                        <a href="<?php echo esc_url($section['url']);?>" target="_blank"><img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/red-arrow-right.svg" /></a>
                    </div>
                </div>
            </div>
        <?php else:?>
            <?php $image_attributes = wp_get_attachment_image_src($section['image']);
            $image=Btemptd_Get_image($image_attributes);

            ?>
            <div class="full-width-section--wrapper even">
            <?php
            if($section['url'] && !empty($section['url'])) :
                ?>
                    <a href="<?php echo esc_url($section['url']);?>" target="_blank">
            <?php endif; ?>
                <div class="full-width-section--image box-shadow-left">
                    <img class="img-fluid" src="<?php echo  esc_url($image); ?>" />
                </div>
                <?php if($section['url'] && !empty($section['url'])) :
                    ?>
                </a>
                <?php endif; ?>
                <div class="full-width-section--content desktop">
                    <div class="arrow">
                       <a href="<?php echo esc_url($section['url']);?>" target="_blank"> <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/red-arrow-left.svg" /></a>
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
                       <a href="<?php echo esc_url($section['url']);?>" target="_blank"> <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/red-arrow-left.svg" /></a>
                    </div>
                    <div class="content-mobile">
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
<?php endif;?>
    <?php
    $featured_posts= get_field('featured_posts', 'category_'.$current_cat_id);
    $slider_posts= get_field('slider_posts', 'category_'.$current_cat_id);
    ?>
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
                    $cat_name_obj = Btemptd_Get_Primary_category($featured_post);
                    $cat_ID        = $cat_name_obj->term_id;
                    //print_r($cat_name_object);
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
                                <?php echo esc_attr($cat_name_obj->name);?>
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
                            <a class="btn primary" href="<?php echo esc_url(get_permalink($featured_post));?>">
                                Learn More
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
                    $cat_name_obj      = Btemptd_Get_Primary_category($slider_post);
                    $cat_ID        = $cat_name_obj->term_id;
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
                                <?php echo esc_attr($cat_name_obj->name);?>
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
                            <a class="btn primary" href="<?php echo esc_url(get_permalink($slider_post));?>">
                                Learn More
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
<section class="featured-articles-mobile-one">
    <div class="featured-articles-mobile--wrapper">
        <div class="swiper-container featured-articles-slider-mo">
            <div class="swiper-wrapper">
                <?php foreach($featured_posts as $featured_post): ?>
                    <?php
                    $thumbnail_id  = get_post_thumbnail_id($featured_post);
                    $thumbnail_url = Btemptd_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
                    $thumbnail_alt = Btemptd_Get_Image_alt($thumbnail_id, 'featured-img');
                    $cat_name_obj      = Btemptd_Get_Primary_category($featured_post);
                    $cat_ID        = $cat_name_obj->term_id;
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
                                <?php echo esc_attr($cat_name_obj->name);?>
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
                            <a class="btn primary" href="<?php echo esc_url(get_permalink($featured_post));?>">
                                Learn more
                            </a>
                        </div>

                        <div class="swiper-button-next button-transparent">
                            <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow-right.svg" alt="Slider Arrow" />
                        </div>
                        <div class="swiper-button-prev button-transparent">
                            <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow-left.svg" alt="Slider Arrow" />
                        </div>
                    </div>
                </div>
                <?php endforeach;?>

            </div>

            <div class="swiper-pagination custom-swiper-pagination"></div>

        </div>
    </div>
</section>

    <?php endif;?>

    <?php if(!empty($slider_posts)) :?>
<section class="featured-articles-mobile-two">
    <div class="featured-articles-mobile--wrapper">
        <div class="swiper-container featured-articles-slider-mo">
            <div class="swiper-wrapper">
                    <?php foreach($slider_posts as $slider_post): ?>
                        <?php
                        $thumbnail_id  = get_post_thumbnail_id($slider_post);
                        $thumbnail_url = Btemptd_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
                        $thumbnail_alt = Btemptd_Get_Image_alt($thumbnail_id, 'featured-img');
                        $cat_name_obj      = Btemptd_Get_Primary_category($slider_post);
                        $cat_ID        = $cat_name_obj->term_id;

                        ?>
                <div class="swiper-slide">
                    <div class="swiper-slide--image">
                        <a href="<?php echo esc_url(get_permalink($slider_post));?>">
                            <img class="lazyload img-fluid"
                                data-src="<?php echo  esc_url($thumbnail_url); ?>"
                                src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                alt="<?php echo esc_attr($thumbnail_alt);?>" />
                        </a>

                        <div class="swiper-button-next button-transparent">
                            <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow-right.svg" alt="Slider Arrow" />
                        </div>
                        <div class="swiper-button-prev button-transparent">
                            <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow-left.svg" alt="Slider Arrow" />
                        </div>
                    </div>

                    <div class="swiper-slide--content">
                        <div class="swiper-slide--content__category">
                            <a href="<?php echo esc_url_raw(get_term_link($cat_ID));?>">
                                <?php echo esc_attr($cat_name_obj->name);?>
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
                            <a class="btn primary" href="<?php echo esc_url(get_permalink($slider_post));?>">
                                Learn more
                            </a>
                        </div>
                    </div>
                </div>
                    <?php endforeach;?>
            </div>
            <div class="swiper-pagination custom-swiper-pagination"></div>
        </div>
    </div>
</section>
    <?php endif;?>

    <div id="post-listing">

    <?php
    if (have_posts()) {
        $i = 0;
        if ($wp_query->post_count >= 3) {
            ?>
        <div class="category-posts category-posts-desktop">
            <?php while (have_posts()) : the_post();
                if ($i % 3 == 0) {
                    echo '<section class="explore-blog">
                            <div class="explore-blog--bg">
                                <div class="explore-blog--wrapper blog-wrapper">';
                }
                include locate_template('template-parts/content-excerpt.php');
                if ($i % 3 == 2 || $wp_query->post_count == ($i+1)) {
                    echo '</div>
                        </div>
                    </section>';
                }
                $i++;
            endwhile; ?>

        </div>

            <?php
        } else { ?>
        <div class="category-posts category-posts-desktop">
            <?php
            echo '<section class="explore-blog"><div class="explore-blog--bg"><div class="explore-blog--wrapper blog-wrapper">';
            while (have_posts()) : the_post();
                include locate_template('template-parts/content-excerpt.php');
            endwhile;
             echo '</div></div></section>'; ?>
        </div>

        <?php }
    }
    Btemptd_Paging_nav();
    ?>
    </div>

    <!-- category post mobile view -->
    <div class="category-posts category-posts-mobile">
        <section class="explore-blog">
            <div class="explore-blog--bg">
                <div class="explore-blog--wrapper blog-wrapper">
                    <div class="explore-blog--box box-shadow-right">
                        <div class="explore-blog--image">
                            <a href="http://localhost:8000/the-crop-top-style-insiders-wear-to-do-all-the-things/">
                                <img class="img-fluid" src="http://localhost:8000/wp-content/uploads/2020/11/Article-10_ArticlePreviewImage_1920_893x630.png" alt="http://featured-img">
                            </a>
                        </div>

                        <div class="explore-blog--content blog-pagination">
                            <div class="blog-pagination-content">
                            <div class="explore-blog--content__category">
                                <a href="http://localhost:8000/category/bra-trends/">
                                    Bra Trends            </a>
                            </div>
                            <div class="explore-blog--content__title">
                                <a href="http://localhost:8000/the-crop-top-style-insiders-wear-to-do-all-the-things/">
                                    The Crop Top Style Insiders Wear To Do All The Things.            </a>
                            </div>
                            </div>
                            <div class="blog-pagination-cta">
                                <a href="http://localhost:8000/the-crop-top-style-insiders-wear-to-do-all-the-things/">
                                    <img src="http://localhost:8000/wp-content/themes/btemptd/assets/images/category-post-arrow.svg">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="explore-blog--box box-shadow-right">
                        <div class="explore-blog--image">
                            <a href="http://localhost:8000/the-crop-top-style-insiders-wear-to-do-all-the-things/">
                                <img class="img-fluid" src="http://localhost:8000/wp-content/uploads/2020/11/Article-10_ArticlePreviewImage_1920_893x630.png" alt="http://featured-img">
                            </a>
                        </div>

                        <div class="explore-blog--content blog-pagination">
                            <div class="blog-pagination-content">
                            <div class="explore-blog--content__category">
                                <a href="http://localhost:8000/category/bra-trends/">
                                    Bra Trends            </a>
                            </div>
                            <div class="explore-blog--content__title">
                                <a href="http://localhost:8000/the-crop-top-style-insiders-wear-to-do-all-the-things/">
                                    The Crop Top Style Insiders Wear To Do All The Things.            </a>
                            </div>
                            </div>
                            <div class="blog-pagination-cta">
                                <a href="http://localhost:8000/the-crop-top-style-insiders-wear-to-do-all-the-things/">
                                    <img src="http://localhost:8000/wp-content/themes/btemptd/assets/images/category-post-arrow.svg">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="explore-blog">
            <div class="explore-blog--bg">
                <div class="explore-blog--wrapper blog-wrapper">
                    <div class="explore-blog--box box-shadow-right">
                        <div class="explore-blog--image">
                            <a href="http://localhost:8000/the-crop-top-style-insiders-wear-to-do-all-the-things/">
                                <img class="img-fluid" src="http://localhost:8000/wp-content/uploads/2020/11/Article-10_ArticlePreviewImage_1920_893x630.png" alt="http://featured-img">
                            </a>
                        </div>

                        <div class="explore-blog--content blog-pagination">
                            <div class="blog-pagination-content">
                            <div class="explore-blog--content__category">
                                <a href="http://localhost:8000/category/bra-trends/">
                                    Bra Trends            </a>
                            </div>
                            <div class="explore-blog--content__title">
                                <a href="http://localhost:8000/the-crop-top-style-insiders-wear-to-do-all-the-things/">
                                    The Crop Top Style Insiders Wear To Do All The Things.            </a>
                            </div>
                            </div>
                            <div class="blog-pagination-cta">
                                <a href="http://localhost:8000/the-crop-top-style-insiders-wear-to-do-all-the-things/">
                                    <img src="http://localhost:8000/wp-content/themes/btemptd/assets/images/category-post-arrow.svg">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="explore-blog--box box-shadow-right">
                        <div class="explore-blog--image">
                            <a href="http://localhost:8000/the-crop-top-style-insiders-wear-to-do-all-the-things/">
                                <img class="img-fluid" src="http://localhost:8000/wp-content/uploads/2020/11/Article-10_ArticlePreviewImage_1920_893x630.png" alt="http://featured-img">
                            </a>
                        </div>

                        <div class="explore-blog--content blog-pagination">
                            <div class="blog-pagination-content">
                            <div class="explore-blog--content__category">
                                <a href="http://localhost:8000/category/bra-trends/">
                                    Bra Trends            </a>
                            </div>
                            <div class="explore-blog--content__title">
                                <a href="http://localhost:8000/the-crop-top-style-insiders-wear-to-do-all-the-things/">
                                    The Crop Top Style Insiders Wear To Do All The Things.            </a>
                            </div>
                            </div>
                            <div class="blog-pagination-cta">
                                <a href="http://localhost:8000/the-crop-top-style-insiders-wear-to-do-all-the-things/">
                                    <img src="http://localhost:8000/wp-content/themes/btemptd/assets/images/category-post-arrow.svg">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="explore-blog">
            <div class="explore-blog--bg">
                <div class="explore-blog--wrapper blog-wrapper">
                    <div class="explore-blog--box box-shadow-right">
                        <div class="explore-blog--image">
                            <a href="http://localhost:8000/the-crop-top-style-insiders-wear-to-do-all-the-things/">
                                <img class="img-fluid" src="http://localhost:8000/wp-content/uploads/2020/11/Article-10_ArticlePreviewImage_1920_893x630.png" alt="http://featured-img">
                            </a>
                        </div>

                        <div class="explore-blog--content blog-pagination">
                            <div class="blog-pagination-content">
                            <div class="explore-blog--content__category">
                                <a href="http://localhost:8000/category/bra-trends/">
                                    Bra Trends            </a>
                            </div>
                            <div class="explore-blog--content__title">
                                <a href="http://localhost:8000/the-crop-top-style-insiders-wear-to-do-all-the-things/">
                                    The Crop Top Style Insiders Wear To Do All The Things.            </a>
                            </div>
                            </div>
                            <div class="blog-pagination-cta">
                                <a href="http://localhost:8000/the-crop-top-style-insiders-wear-to-do-all-the-things/">
                                    <img src="http://localhost:8000/wp-content/themes/btemptd/assets/images/category-post-arrow.svg">
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="explore-blog--box box-shadow-right">
                        <div class="explore-blog--image">
                            <a href="http://localhost:8000/the-crop-top-style-insiders-wear-to-do-all-the-things/">
                                <img class="img-fluid" src="http://localhost:8000/wp-content/uploads/2020/11/Article-10_ArticlePreviewImage_1920_893x630.png" alt="http://featured-img">
                            </a>
                        </div>

                        <div class="explore-blog--content blog-pagination">
                            <div class="blog-pagination-content">
                            <div class="explore-blog--content__category">
                                <a href="http://localhost:8000/category/bra-trends/">
                                    Bra Trends            </a>
                            </div>
                            <div class="explore-blog--content__title">
                                <a href="http://localhost:8000/the-crop-top-style-insiders-wear-to-do-all-the-things/">
                                    The Crop Top Style Insiders Wear To Do All The Things.            </a>
                            </div>
                            </div>
                            <div class="blog-pagination-cta">
                                <a href="http://localhost:8000/the-crop-top-style-insiders-wear-to-do-all-the-things/">
                                    <img src="http://localhost:8000/wp-content/themes/btemptd/assets/images/category-post-arrow.svg">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
<?php


$recent_posts = Btemptd_Query_posts(
    array(
        'post_type' => array('post'),
        'category__not_in' => $current_cat_id,
        'posts_per_page' => 3,
        'offset' => 0,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_status'=>'publish'
    )
);

$current_args = array(
    'post_type' => 'post',
    'category__not_in' => $current_cat_id,
    'posts_per_page' => -1,
    'offset' => 0,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_status'=>'publish'
);
$output_the_query = new WP_Query($current_args);
$counts= $output_the_query->post_count;

if(!empty($recent_posts)) :
    include locate_template('template-parts/explore-page.php');

endif;

Btemptd_Page_Entry_bottom();

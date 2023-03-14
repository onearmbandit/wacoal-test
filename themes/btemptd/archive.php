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

$featured_posts = get_field('featured_posts', 'category_'.$current_cat_id);
$slider_posts   = Btemptd_Query_posts(
    array(
        'post_type'      => array('post'),
        'cat'            => $current_cat_id,
        'posts_per_page' => 4,
        'offset'         => 0,
        'orderby'        => 'post_date',
        'order'          => 'DESC',
        'post_status'    => 'publish'
    )
);

?>
<section class="banner-with-background">
    <h1 class="banner-with-background--heading"><?php echo esc_attr($cat_name);?></h1>

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
                                <a href="<?php echo esc_url($section['url']);?>" target="_blank"><img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/arrow-right.svg" /></a>
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
                                <a href="<?php echo esc_url($section['url']);?>" target="_blank"><img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/arrow-right.svg" /></a>
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
                            <a href="<?php echo esc_url($section['url']);?>" target="_blank"> <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/arrow-left.svg" /></a>
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
                            <a href="<?php echo esc_url($section['url']);?>" target="_blank"> <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/arrow-left.svg" /></a>
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

<?php if(!empty($featured_posts)) :?>
    <section class="featured-articles desktop">
        <div class="featured-articles--wrapper box-shadow-right">
            <div class="swiper-container featured-articles-slider-blog">
                <div class="swiper-wrapper">
                    <?php foreach($featured_posts as $featured_post): ?>
                        <?php
                        $thumbnail_id  = get_post_thumbnail_id($featured_post);
                        $thumbnail_url = Btemptd_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
                        $thumbnail_alt = Btemptd_Get_Image_alt($thumbnail_id, 'featured-img');
                        $cat_name_obj = Btemptd_Get_Primary_category($featured_post);
                        $cat_ID        = $cat_name_obj->term_id;
                        $feat_title    = get_the_title($featured_post);
                        $tagline      = get_field('tagline', $featured_post);
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
                                    <?php echo esc_attr(Btemptd_Limit_text($feat_title, 73));?>
                                </a>
                            </div>

                            <?php if($tagline && !empty($tagline)):?>
                            <div class="swiper-slide--content__para">
                                <a href="<?php echo esc_url(get_permalink($featured_post)); ?>">
                                    <?php echo wp_kses_post(Btemptd_Limit_text(Btemptd_Remove_ptag($tagline), 111));?>
                                </a>
                            </div>
                            <?php endif;?>

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
                <div class="pause-btn-blog">
                    <img class="play-pause-blog" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/pause-button.png" />
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
                        $thumbnail_id  = get_post_thumbnail_id($slider_post->ID);
                        $thumbnail_url = Btemptd_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
                        $thumbnail_alt = Btemptd_Get_Image_alt($thumbnail_id, 'featured-img');
                        $cat_name_obj  = Btemptd_Get_Primary_category($slider_post->ID);
                        $cat_ID        = $cat_name_obj->term_id;
                        $feat_title    = get_the_title($slider_post->ID);
                        $tagline       = get_field('tagline', $slider_post->ID);
                        ?>
                    <div class="swiper-slide">
                        <div class="swiper-slide--image">
                            <a href ="<?php echo esc_url(get_permalink($slider_post->ID));?>" >
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
                                <a href="<?php echo esc_url(get_permalink($slider_post->ID));?>">
                                    <?php echo esc_attr(Btemptd_Limit_text($feat_title, 73));?>
                                </a>
                            </div>

                            <?php if($tagline && !empty($tagline)):?>
                            <div class="swiper-slide--content__para">
                                <a href="<?php echo esc_url(get_permalink($slider_post->ID)); ?>">
                                    <?php echo wp_kses_post(Btemptd_Limit_text(Btemptd_Remove_ptag($tagline), 111));?>
                                </a>
                            </div>
                            <?php endif;?>

                            <div class="swiper-slide--content__cta">
                                <a class="btn primary" href="<?php echo esc_url(get_permalink($slider_post->ID));?>">
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
                <div class="pause-btn">
                    <img class="play-pause" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/pause-button.png" />
                </div>
            </div>
        </div>
    </section>

<?php endif;?>

<?php if(!empty($featured_posts)) :?>
    <section class="featured-articles-mobile-one">
        <div class="featured-articles-mobile--wrapper">
            <div class="swiper-container featured-articles-slider-one">
                <div class="swiper-wrapper">
                    <?php foreach($featured_posts as $featured_post): ?>
                        <?php
                        $thumbnail_id  = get_post_thumbnail_id($featured_post);
                        $thumbnail_url = Btemptd_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
                        $thumbnail_alt = Btemptd_Get_Image_alt($thumbnail_id, 'featured-img');
                        $cat_name_obj      = Btemptd_Get_Primary_category($featured_post);
                        $cat_ID        = $cat_name_obj->term_id;
                        $feat_title = get_the_title($featured_post);
                        $tagline   = get_field('tagline', $featured_post);
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
                                    <?php echo esc_attr(Btemptd_Limit_text($feat_title, 73));?>
                                </a>
                            </div>

                            <?php if($tagline && !empty($tagline)) :?>
                            <div class="swiper-slide--content__para">
                                <a href="<?php echo esc_url(get_permalink($featured_post)); ?>">
                                    <?php echo wp_kses_post(Btemptd_Limit_text(Btemptd_Remove_ptag($tagline), 111));?>
                                </a>
                            </div>
                            <?php endif;?>

                            <div class="swiper-slide--content__cta">
                                <a class="btn primary" href="<?php echo esc_url(get_permalink($featured_post));?>">
                                    Learn more
                                </a>
                            </div>

                            <div class="swiper-button-next swiper-button-next-one button-transparent">
                                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow-right.svg" alt="Slider Arrow" />
                            </div>
                            <div class="swiper-button-prev swiper-button-prev-one button-transparent">
                                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow-left.svg" alt="Slider Arrow" />
                            </div>
                        </div>
                    </div>
                    <?php endforeach;?>

                </div>

                <div class="swiper-pagination custom-swiper-pagination"></div>
                <div class="pause-btn-blog-mobile">
                    <img class="play-pause-blog-mobile" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/pause-button.png" />
                </div>
            </div>
        </div>
    </section>
<?php endif;?>

<?php if(!empty($slider_posts)) :?>
    <section class="featured-articles-mobile-two">
        <div class="featured-articles-mobile--wrapper">
            <div class="swiper-container featured-articles-slider-two">
                <div class="swiper-wrapper">
                        <?php foreach($slider_posts as $slider_post): ?>
                            <?php
                            $thumbnail_id  = get_post_thumbnail_id($slider_post->ID);
                            $thumbnail_url = Btemptd_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
                            $thumbnail_alt = Btemptd_Get_Image_alt($thumbnail_id, 'featured-img');
                            $cat_name_obj  = Btemptd_Get_Primary_category($slider_post->ID);
                            $cat_ID        = $cat_name_obj->term_id;
                            $slider_post_title = get_the_title($slider_post->ID);
                            $tagline  = get_field('tagline', $slider_post->ID);

                            ?>
                    <div class="swiper-slide">
                        <div class="swiper-slide--image">
                            <a href="<?php echo esc_url(get_permalink($slider_post->ID));?>">
                                <img class="lazyload img-fluid"
                                    data-src="<?php echo  esc_url($thumbnail_url); ?>"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                                    alt="<?php echo esc_attr($thumbnail_alt);?>" />
                            </a>

                            <div class="swiper-button-next swiper-button-next-two button-transparent">
                                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/swiper-arrow-right.svg" alt="Slider Arrow" />
                            </div>
                            <div class="swiper-button-prev swiper-button-prev-two button-transparent">
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
                                <a href="<?php echo esc_url(get_permalink($slider_post->ID));?>">
                                    <?php echo esc_attr(Btemptd_Limit_text($slider_post_title, 73));?>
                                </a>
                            </div>

                            <?php if($tagline && !empty($tagline)) :?>
                            <div class="swiper-slide--content__para">
                                <a href="<?php echo esc_url(get_permalink($slider_post->ID)); ?>">
                                    <?php echo wp_kses_post(Btemptd_Remove_ptag(Btemptd_Limit_text($tagline, 111)));?>
                                </a>
                            </div>
                            <?php endif;?>

                            <div class="swiper-slide--content__cta">
                                <a class="btn primary" href="<?php echo esc_url(get_permalink($slider_post->ID));?>">
                                    Learn more
                                </a>
                            </div>
                        </div>
                    </div>
                        <?php endforeach;?>
                </div>
                <div class="swiper-pagination custom-swiper-pagination"></div>
                <div class="pause-btn-mobile">
                    <img class="play-pause-mobile" src="<?php echo  esc_url(THEMEURI); ?>/assets/images/pause-button.png" />
                </div>
            </div>
        </div>
    </section>
<?php endif;?>

<?php
$posts_to_exclude = [];
foreach ( $featured_posts as $featured_post ) {
    $posts_to_exclude[]    = $featured_post;
}

foreach ( $slider_posts as $slider_post ) {
    array_push($posts_to_exclude, $slider_post->ID);
}

$cat_posts = Btemptd_Query_posts(
    array(
        'post_type' => 'post',
        'cat'=> $current_cat_id,
        'post__not_in' => $posts_to_exclude,
        'posts_per_page' => -1,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_status'=>'publish'
    )
);

$cat_post_counts= count($cat_posts);;

if (!empty($cat_post_counts)) {
    include locate_template('template-parts/cat-see-more.php');
};

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

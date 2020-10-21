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

<?php if($current_cat_id && !empty($current_cat_id)) : ?>
    <h1 class="banner-with-background--heading"><?php echo esc_attr($cat_name);?></h1>
<?php endif;?>

<?php if(category_description() && !empty(category_description())) :?>
    <p class="banner-with-background--subtitle">
        <?php echo category_description(); ?>
    </p>
<?php endif;?>

</section>

<?php
$template= get_field('template', 'category_'.$current_cat_id);
if ($template == 'simple') :

    $faq_section = get_field('static_section', 'category_'.$current_cat_id);


    ?>

<section class="full-width-section">
    <?php
    foreach ($faq_section['faq'] as $key => $page_obj) {
        $faq_image_id = $page_obj['image'];
        $faq_image_array = wp_get_attachment_image_src($faq_image_id, 'full');
        $faq_image_alt = Btemptd_Get_Image_alt($faq_image_id, 'Block Image');
        $faq_image_url = Btemptd_Get_Image($faq_image_array);
        $faq_title = $page_obj['title'];
        $faq_ques = $page_obj['question'];

        if ($key % 2 == 0) {
            ?>
    <div class="full-width-section--wrapper">

            <?php if ($faq_image_id && !empty($faq_image_id)) :?>
        <div class="full-width-section--image box-shadow-right">
            <img class="img-fluid" src="<?php echo  esc_url($faq_image_url)?>" />
        </div>
            <?php endif; ?>

        <div class="full-width-section--content">

            <?php if ($faq_title && !empty($faq_title)) :?>
            <div class="content-title">
                <?php echo wp_kses_post($faq_title); ?>
            </div>
            <?php endif; ?>

            <?php if ($faq_ques && !empty($faq_ques)) :?>
            <div class="quote">
                <?php echo wp_kses_post($faq_ques); ?>
            </div>
            <?php endif; ?>

            <div class="arrow">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/red-arrow-right.svg" />
            </div>
        </div>
    </div>
            <?php
        } else {?>

    <div class="full-width-section--wrapper even">

            <?php if ($faq_image_id && !empty($faq_image_id)) :?>
                <div class="full-width-section--image box-shadow-left">
                    <img class="img-fluid" src="<?php echo  esc_url($faq_image_url)?>" />
                </div>
            <?php endif; ?>

        <div class="full-width-section--content">
            <div class="arrow">
                <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/red-arrow-left.svg" />
            </div>

            <?php if ($faq_title && !empty($faq_title)) :?>
            <div class="content-title">
                <?php echo wp_kses_post($faq_title); ?>
            </div>
            <?php endif; ?>

            <?php if ($faq_ques && !empty($faq_ques)) :?>
            <div class="quote">
                <?php echo wp_kses_post($faq_ques); ?>
            </div>
            <?php endif; ?>

        </div>
    </div>

        <?php }
    }
    ?>

</section>
<?php else:?>
    <?php
    $featured_posts= get_field('featured_posts', 'category_'.$current_cat_id);
    $slider_posts= get_field('slider_posts', 'category_'.$current_cat_id);
    ?>
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
    <div class="spacer-80"></div>
    <?php endif;?>

    <?php if(!empty($slider_posts)):?>
    <section class="featured-articles even">
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
    <div id="post-listing">
    <?php if (have_posts()) { ?>

        <div class="category-posts">
        <?php $i=0;?>
        <?php while ( have_posts() ) : the_post();
            if ($i%3 == 0 || $i==0) {
                echo '<section class="explore-blog"><div class="explore-blog--bg"><div class="explore-blog--wrapper">';
            }
            include locate_template('template-parts/content-excerpt.php');

            if ($i%3 == 2 || $i == 2) {
                echo '</div></div></section>';
            }
            $i++;
        endwhile;?>

        </div>

    <?php } ?>

            <?php Btemptd_Paging_nav();?>
    </div>
<?php endif; ?>
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
$args = array(

    'post_type' => 'post',
    'category__not_in' => $current_cat_id,
    'posts_per_page' => -1,
    'offset' => 0,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_status'=>'publish'
  );
$the_query = new WP_Query( $args );
$arr['publish']=$the_query->found_posts;
$counts= array();
$counts= (object)$arr;
if(!empty($recent_posts)):
    require locate_template('template-parts/explore-page.php');

endif;

Btemptd_Page_Entry_bottom();

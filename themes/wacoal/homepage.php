<?php
/**
* Template Name: Homapage
*
*/
wacoal_page_entry_top('');
$top_banner_fields      = get_field( 'top_banner', 'options' );
$slider_fields      = get_field( 'slider_posts', 'options' );
$top_banner_image_id  = $top_banner_fields['banner_image'];
$top_banner_image_url = wp_get_attachment_image_src( $top_banner_image_id , full);
$top_banner_title     = $top_banner_fields['banner_title'];
$top_banner_subtitle  = $top_banner_fields['banner_subtitle'];
$slider_blogs = get_field( 'slider_posts', 'options' );
$featured_blogs = get_field( 'featured_posts', 'options' );
$related_blogs = get_field( 'more_from_blog', 'options' );
$static_section = get_field( 'static_section', 'options' );
$featured_posts = get_posts(
    array(
    'numberposts' => 3,

    'offset' => 0,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_status'=>'publish'
    )
);
?>

<section class="banner-with-image" style="background-image:url(<?php  echo esc_attr($top_banner_image_url[0]);?>);">
    <h1 class="banner-with-image--heading"><?php echo esc_attr($top_banner_title);?></h1>
    <p class="banner-with-image--subtitle"><?php echo esc_attr($top_banner_subtitle);?></p>
</section>


<!-- This sesction will create 80 pixel height gap between sections for big screens
and will change the height gap respective to screen size as for Mobile 22px, iPad 32px, iPad Pro 44px, Small Monitor 54px -->
<section class="spacer-80"></section>


<!-- Banner with background color -->
<!-- <section class="banner-with-background">
    <h2 class="banner-with-background--heading">wacoal 101</h2>
    <p class="banner-with-background--subtitle">
        Bra Education<br>
        Blurb Describing Category<br>
        LOREM IPSUM
    </p>
</section> -->


<!-- -->
<!-- <section class="spacer-80"></section> -->


<!-- Banner with background color -->
<!-- <section class="banner-with-background">
    <h2 class="banner-with-background--heading">bra'drobe</h2>
    <p class="banner-with-background--subtitle">
        Our Product Recommendtions<br>
        Blurb Describing Category<br>
        LOREM IPSUM
    </p>
</section> -->


<!-- This sesction will create 120 pixel height gap between sections for big screens
and will change the height gap respective to screen size as for Mobile 44px, iPad 48px, iPad Pro 64px, Small Monitor 80px -->
<!-- <section class="spacer-120"></section> -->


<!-- Featured Articles -->
<section class="featured-article swiper-container">
    <div class="featured-article--wrapper swiper-wrapper">
        <?php foreach ($featured_blogs as $key => $blog) { ?>
            <?php $thumbnail = get_the_post_thumbnail_url($blog->ID);
            if(empty($thumbnail)){
                $thumbnail = get_theme_file_uri().'/assets/images/blog-img-1.png';
            }
            $thumbnail_id = get_post_thumbnail_id( $blog->ID );
            $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
            $categories = get_the_terms( $blog->ID, 'category' );

            ?>
            <article class="featured-box swiper-slide">
                <div class="featured-box--content">
                    <p class="featured-box--content__subtitle"><?php echo esc_attr($categories[0]->name);?></p>
                    <h4 class="featured-box--content__title"><?php echo esc_attr($blog->post_title);?></h4>
                    <p class="featured-box--content__para"><?php echo wp_kses_post($blog->post_excerpt);?></p>
                    <a href="<?php echo esc_url(get_permalink($blog->ID));?>" class="btn primary">learn more</a>
                </div>
                <div class="featured-box--image">
                    <img src="<?php echo  esc_url($thumbnail); ?>" alt="<?php echo esc_attr($alt);?>" />
                </div>
            </article>
        <?php } ?>

        <!-- <article class="featured-box swiper-slide">
            <div class="featured-box--content">
                <p class="featured-box--content__subtitle">bra'drobe</p>
                <h4 class="featured-box--content__title">Featured Article Title</h4>
                <p class="featured-box--content__para">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                <a href="" class="btn primary">learn more</a>
            </div>
            <div class="featured-box--image">
                <img src="" alt="Featured Article" />
            </div>
        </article> -->
    </div>
    <div class="swiper-pagination"></div>
    <!-- Add Arrows -->
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
</section>


<!-- -->
<section class="spacer-120"></section>


<!-- Wacoal 101 -->
<section class="wacoal-101">
    <div class="wacoal-101--wrapper">
        <div class="wacoal-101--image">
            <img src="<?php echo  esc_url($static_section['image']); ?>" alt="Wacoal 101" />
        </div>
        <div class="wacoal-101--content">
            <div class="wacoal-101--content__title">
               <?php echo esc_attr($static_section['title']);?>
            </div>
            <?php foreach ($static_section['links'] as $key => $page_obj) { ?>
                <div class="wacoal-101--list">
                    <div class="wacoal-101--list__icon">
                        <img src="<?php echo  esc_url(get_theme_file_uri()); ?>/assets/images/wacol-101-arrow.svg" alt="Wacoal 101 Arrow" />
                    </div>
                    <div class="wacoal-101--list__content"><a href="<?php echo esc_url($page_obj['link']);?>"><?php echo esc_attr($page_obj['title']);?></a></div>
                </div>
            <?php } ?>




        </div>
    </div>
</section>


<!-- -->
<section class="spacer-80"></section>



<!-- More From Blog -->

<section class="more-blog">
    <div class="more-blog--title">
            <?php echo esc_html('MORE FROM THE BLOG');?>
    </div>
    <div class="more-blog--wrapper">
        <?php foreach ($featured_posts as $key => $blog) { ?>
            <?php $thumbnail = get_the_post_thumbnail_url($blog->ID);
            if(empty($thumbnail)){
                $thumbnail = get_theme_file_uri().'/assets/images/blog-img-1.png';
            }
            $thumbnail_id = get_post_thumbnail_id( $blog->ID );
            $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
            $categories = get_the_terms( $blog->ID, 'category' );

            ?>
            <article class="blog-tile">
                <div class="blog-tile--image">
                    <img src="<?php echo  esc_url($thumbnail); ?>" alt="<?php echo  esc_attr($alt); ?>" />
                </div>
                <div class="blog-tile--category">
                    <?php if ( ! empty( $categories ) ) {
                        echo esc_html( $categories[0]->name );
                    }?>
                </div>
                <h5 class="blog-tile--heading">
                    <?php echo esc_attr($blog->post_title);?>
                </h5>
                <p class="blog-tile--para">
                <?php echo  wp_kses_post($blog->post_excerpt);?>
                </p>
                <a href="<?php echo esc_url(get_permalink($blog->ID));?>" class="btn primary">Learn More</a>
            </article>
        <?php } ?>



    </div>
</section>
<!-- -->
<section class="spacer-120"></section>


<?php
wacoal_page_entry_bottom();

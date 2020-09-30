<?php
$related_blogs = get_field( 'more_from_blog', 'options' );
$banner=get_field('banner_image');
$recent_posts = get_posts(
    array(
    'numberposts' => 3,
    'offset' => 0,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_status'=>'publish'
    )
);
?>
<section class="banner-with-image" style="background-image:url(<?php  echo esc_url($banner['url']);?>);">

</section>
<!-- This sesction will create 80 pixel height gap between sections for big screens
and will change the height gap respective to screen size as for Mobile 22px, iPad 32px, iPad Pro 44px, Small Monitor 54px -->
<section class="spacer-80"></section>

<!-- More From Blog -->
<section class="more-blog">
    <div class="more-blog--title">
            <?php echo esc_html('MORE FROM THE BLOG');?>
    </div>
    <div class="more-blog--wrapper">
        <?php foreach ($recent_posts as $key => $blog) { ?>
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

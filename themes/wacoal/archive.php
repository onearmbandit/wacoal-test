<?php
wacoal_page_entry_top('');
$related_blogs = get_field( 'more_from_blog', 'options' );
?>

<div id="primary" class="content-area1111">
    <main id="main" class="site-main">

        <?php //if (have_posts()) : ?>

        <!-- <header class="page-header"> -->
            <?php
                // the_archive_title('<h1 class="page-title">', '</h1>');
                // the_archive_description('<div class="archive-description">', '</div>');
                ?>
        <!-- </header>.page-header -->

        <?php
            /* Start the Loop */
           // while (have_posts()) :
             //   the_post();

                /*
     * Include the Post-Type-specific template for the content.
     * If you want to override this in a child theme, then include a file
     * called content-___.php (where ___ is the Post Type name) and that will be used instead.
     */
               // get_template_part('template-parts/content', get_post_type());

            //endwhile;

            //the_posts_navigation();

//        else :

  //          get_template_part('template-parts/content', 'none');
//
    //    endif;
    $current_cat_data = get_the_category();
    $cat_id = $current_cat_data[0]->cat_ID;
    $cat_name = $current_cat_data[0]->name;
    // var_dump($current_cat_data);

    $featured_posts = get_posts(array(
        'numberposts' => 2,
        'cat' => $cat_id,
        'offset' => 0,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_status'=>'publish'
    ));
    // error_log('cat-->'.print_r($featured_posts,1));
        ?>

<!-- Banner with background color -->
<section class="banner-with-background">
    <?php //the_archive_title( '<h2 class="banner-with-background--heading">', '</h2>' ); ?>
    <h2 class="banner-with-background--heading"><?php echo esc_attr($cat_name); ?></h2>
    <p class="banner-with-background--subtitle">
        <!-- Our Product Recommendtions<br>
        Blurb Describing Category<br>
        LOREM IPSUM -->
        <?php echo category_description(); ?>
    </p>
</section>

<!-- This sesction will create 120 pixel height gap between sections for big screens
and will change the height gap respective to screen size as for Mobile 44px, iPad 48px, iPad Pro 64px, Small Monitor 80px -->
<section class="spacer-120"></section>

<!-- Featured Articles -->
<section class="featured-article">
    <div class="featured-article--wrapper">
        <?php
        foreach( $featured_posts as $featured_post ) {
            $featured_post_id = $featured_post->ID;
            $featured_post_title = get_the_title( $featured_post_id );
            $featured_post_excerpt = get_the_excerpt( $featured_post_id );
            $featured_image = get_the_post_thumbnail_url( $featured_post_id );
            // echo 'id'.$featured_image;
        ?>
        <article class="featured-box">
            <div class="featured-box--content">
                <p class="featured-box--content__subtitle"><?php echo esc_attr( $cat_name ); ?></p>
                <h4 class="featured-box--content__title"><?php echo esc_attr( $featured_post_title ); ?></h4>
                <p class="featured-box--content__para"><?php echo ( $featured_post_excerpt ); ?></p>
                <a href="<?php echo esc_url(get_permalink($featured_post_id)); ?>" class="btn primary">learn more</a>
            </div>
            <div class="featured-box--image">
                <img src="<?php echo esc_url( $featured_image ); ?>" alt="Featured Article" />
            </div>
        </article>
        <?php
            }
        ?>
        <!-- <article class="featured-box">
            <div class="featured-box--content">
                <p class="featured-box--content__subtitle">bra'drobe</p>
                <h4 class="featured-box--content__title">Featured Article Title</h4>
                <p class="featured-box--content__para">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem</p>
                <a href="" class="btn primary">learn more</a>
            </div>
            <div class="featured-box--image">
                <img src="<?php //echo  get_theme_file_uri(); ?>/assets/images/featured-article-image.png" alt="Featured Article" />
            </div>
        </article> -->
    </div>
</section>


<!-- -->
<section class="spacer-80"></section>

<!-- More From Blog -->
<section class="more-blog">
    <div class="more-blog--title">
            <?php echo $related_blogs['headline'];?>
    </div>
    <div class="more-blog--wrapper">
        <?php foreach ($related_blogs['posts'] as $key => $post) { ?>
            <?php $thumbnail = get_the_post_thumbnail_url($post->ID);
            if(empty($thumbnail)){
                $thumbnail = get_theme_file_uri().'/assets/images/blog-img-1.png';
            }
            $thumbnail_id = get_post_thumbnail_id( $post->ID );
            $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
            $categories = get_the_terms( $post->ID, 'category' );

            ?>
            <article class="blog-tile">
                <div class="blog-tile--image">
                    <img src="<?php echo  $thumbnail; ?>" alt="<?php echo  $alt; ?>" />
                </div>
                <div class="blog-tile--category">
                    <?php if ( ! empty( $categories ) ) {
                        echo esc_html( $categories[0]->name );
                    }?>
                </div>
                <h5 class="blog-tile--heading">
                    <?php echo $post->post_title;?>
                </h5>
                <p class="blog-tile--para">
                <?php echo $post->post_excerpt;?>
                </p>
                <a href="<?php echo get_permalink($post->ID);?>" class="btn primary">Learn More</a>
            </article>
        <?php } ?>



    </div>
</section>

<!-- -->
<section class="spacer-120"></section>

    </main><!-- #main -->
</div><!-- #primary -->

<?php
wacoal_page_entry_bottom();

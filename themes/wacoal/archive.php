<?php
/**
 * Single category template
 *
 * @package Wacoal
 */
wacoal_page_entry_top('');
$related_blogs = get_field( 'more_from_blog', 'options' );
?>

<div id="primary" class="content-area1111">
    <main id="main" class="site-main">
<?php
$current_cat_data = get_the_category();
$current_cat_id   = $current_cat_data[0]->cat_ID;
$cat_name         = $current_cat_data[0]->name;

$featured_posts = get_posts(
    array(
    'numberposts' => 2,
    'cat' => $current_cat_id,
    'offset' => 0,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_status'=>'publish'
    )
);
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

<!-- Banner with background color -->
<section class="banner-with-background">
<h2 class="banner-with-background--heading"><?php echo esc_attr($cat_name); ?></h2>
    <p class="banner-with-background--subtitle">
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
            $featured_post_id      = $featured_post->ID;
            $featured_post_title   = get_the_title( $featured_post_id );
            $featured_post_excerpt = get_the_excerpt( $featured_post_id );
            $featured_image        = get_the_post_thumbnail_url( $featured_post_id );
            ?>
        <article class="featured-box">
            <div class="featured-box--content">
                <p class="featured-box--content__subtitle"><?php echo esc_attr( $cat_name ); ?></p>
                <h4 class="featured-box--content__title"><?php echo esc_attr( $featured_post_title ); ?></h4>
                <p class="featured-box--content__para"><?php echo wp_kses_post( $featured_post_excerpt ); ?></p>
                <a href="<?php echo esc_url( get_permalink( $featured_post_id ) ); ?>" class="btn primary">learn more</a>
            </div>
            <div class="featured-box--image">
                <img src="<?php echo esc_url( $featured_image ); ?>" alt="Featured Article" />
            </div>
        </article>
            <?php
        }
        ?>
    </div>
</section>

<!-- -->
<section class="spacer-80"></section>
<?php if(have_posts()){ ?>
    <div class="more-blog--wrapper">
    <?php while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'excerpt' );
    endwhile;?>
    </div>

<?php } ?>
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

    </main><!-- #main -->
</div><!-- #primary -->

<?php
wacoal_page_entry_bottom();

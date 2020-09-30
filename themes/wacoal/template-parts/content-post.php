<?php
$related_blogs = get_field( 'more_from_blog', 'options' );
$banner=get_field('banner_image');
$title = get_the_title( $post->ID );
$post_excerpt = get_the_excerpt( $post->ID );
$tag_line = get_field('tag_line');

/**
 * Function to get primary category of the story
 * Primary category used when rubric value is empty
 */
$wacoal_category_list = wp_get_post_terms( $post->ID, 'category', [ 'fields' => 'all' ] );
foreach ( $wacoal_category_list as $wacoal_primary_cat ) {

	if ( get_post_meta( $post->ID, '_yoast_wpseo_primary_category', true ) == $wacoal_primary_cat->term_id ) {
		$parent_cat_id    = $wacoal_primary_cat->parent;
		$parent_cat_url   = get_term_link( $parent_cat_id );
		$primary_cat_url  = get_term_link( $wacoal_primary_cat->term_id );
        $primary_cat_name = $wacoal_primary_cat->name;

	}
}

$parent_cat = get_term( $parent_cat_id, 'category' );

if ( 0 == $parent_cat_id ) {
	$parent_cat_name = $primary_cat_name;
	$parent_cat_url  = $primary_cat_url;
} else {
	$parent_cat_name = $parent_cat->name;
}
?>

<!-- Top banner section-->
<section class="banner-with-image" style="background-image:url(<?php  echo $banner['url'];?>);">
</section>

<!-- Solutions section -->
<div>
    <a href="<?php echo esc_url( $parent_cat_url ); ?>">
        <?php echo esc_attr( $parent_cat_name ); ?>
    </a>
    <h2><?php echo esc_attr($title); ?></h2>
    <span><?php echo wp_kses_post($post_excerpt); ?></span></br>
    <span><?php echo wp_kses_post($tag_line); ?></span>
</div>

<?php
// wp_reset_postdata();

    the_content();

// if ( have_posts() ) : while ( have_posts() ) : the_post();
//   the_content();
// endwhile;
// endif;
?>


<!-- This sesction will create 80 pixel height gap between sections for big screens
and will change the height gap respective to screen size as for Mobile 22px, iPad 32px, iPad Pro 44px, Small Monitor 54px -->
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

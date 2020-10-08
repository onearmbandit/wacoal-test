<?php
wacoal_page_entry_top('');
$recent_posts = Wacoal_Query_posts(
    array(
        'post_type' => array('post'),
        'post__not_in' => array($post->ID),
        'posts_per_page' => 3,
        'offset' => 0,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_status'=>'publish'
    )
);
$description=get_field('description', 'options');

?>
<!-- Banner section -->
<section class="banner-without-background" >
    <div class="banner-without-background--subtitle">
        <?php echo wp_kses_post($description);?>
    </div>
</section>

<section class="spacer-80"></section>
<!-- More From Blog -->
<section class="more-blog">
    <div class="more-blog--title">
            <?php echo esc_html('MORE FROM THE BLOG');?>
    </div>
    <div class="more-blog--wrapper">
        <?php
        foreach ($recent_posts as $key => $blog) { ?>
            <?php $thumbnail = get_the_post_thumbnail_url($blog->ID);
            if (empty($thumbnail)) {
                $thumbnail = esc_url(THEMEURI).'/assets/images/blog-img-1.png';
            }
            $thumbnail_id = get_post_thumbnail_id($blog->ID);
            $alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
            $categories = get_the_terms($blog->ID, 'category');
            $post_tagline = get_field('tag_line', $blog);
            $cat_ID = $categories[0]->term_id;
            $cat_url = get_term_link($cat_ID);

            ?>
            <article class="blog-tile">
                <div class="blog-tile--image">
                    <img class="lazyload" data-src="<?php echo  esc_url($thumbnail); ?>" alt="<?php echo  esc_attr($alt); ?>" />
                </div>
                <div class="blog-tile--category">
                    <?php if (! empty($categories) ) { ?>
                       <a href="<?php echo esc_url_raw(get_term_link($cat_ID));?>" ><?php echo esc_html($categories[0]->name);?></a>
                    <?php }?>
                </div>
                <h5 class="blog-tile--heading">
                    <?php echo esc_attr($blog->post_title);?>
                </h5>
                <p class="blog-tile--para">
                <?php echo  wp_kses_post($post_tagline);?>
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

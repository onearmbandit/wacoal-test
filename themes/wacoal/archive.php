<?php
/**
 * Single category template
 *
 * @package Wacoal
 */
wacoal_page_entry_top('');
$current_cat_data = get_queried_object();
$current_cat_id   = $current_cat_data->term_id;
$cat_name         = $current_cat_data->name;
?>

<div id="primary" class="content-area1111">
    <main id="main" class="site-main">


<!-- Banner with background color -->
<section class="banner-with-background">
    <h2 class="banner-with-background--heading"><?php echo esc_attr($cat_name);?></h2>
    <p class="banner-with-background--subtitle">
        <?php echo category_description(); ?>
    </p>
</section>

<!-- This sesction will create 120 pixel height gap between sections for big screens
and will change the height gap respective to screen size as for Mobile 44px, iPad 48px, iPad Pro 64px, Small Monitor 80px -->
<section class="spacer-120"></section>
<?php

$recent_posts= get_field( 'more_from_blog' ,'category_'.$current_cat_id);
$template= get_field( 'template' ,'category_'.$current_cat_id);
if($template == 'wacoal'){
    $static_section= get_field( 'static_section' ,'category_'.$current_cat_id);?>
    <!-- Wacoal 101 -->
    <section class="wacoal-101">
        <div class="wacoal-101--wrapper">
            <div class="wacoal-101--image">
                <img src="<?php echo  esc_url($static_section['image']['url']); ?>" alt="Wacoal 101" />
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
                        <div class="wacoal-101--list__content"><a target="_blank" href="<?php echo esc_url($page_obj['link']);?>"><?php echo esc_attr($page_obj['title']);?></a></div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php }
else{
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
    $posts_per_page=get_option( 'posts_per_page' );
    $category = get_category($current_cat_id);
    $count = $category->category_count;
    $page_num= $count/$posts_per_page;
?>
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
    <div id="post-listing">
    <?php if(have_posts()){ ?>
        <div class="category-posts">
        <?php $i=0;?>
        <?php while ( have_posts() ) : the_post();
            if($i%3 == 0 || $i==0){
                echo '<section class="more-blog category-blog"><div class="more-blog--wrapper">';
            }
            get_template_part( 'template-parts/content', 'excerpt' );
            if($i%3 == 2 || $i == 2){
                echo '</div></section>';
            }
            $i++;
        endwhile;?>

        </div>

    <?php } ?>
        <section class="spacer-80"></section>


            <?php wacoal_paging_nav();?>


    </div>
<?php }?>
<!-- More From Blog -->
<section class="spacer-80"></section>
<section class="more-blog">
    <div class="more-blog--title">
            <?php echo esc_html($recent_posts['headline']);?>
    </div>
    <div class="more-blog--wrapper">
        <?php foreach ($recent_posts['posts'] as  $blog) { ?>
            <?php

            $thumbnail_id = get_post_thumbnail_id($blog);
            $thumbnail_url = Wacoal_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
            $thumbnail_alt = wacoal_get_image_alt($thumbnail_id, 'featured-img');
            $categories = get_the_terms($blog, 'category');

            ?>
            <article class="blog-tile">
                <div class="blog-tile--image">
                    <img src="<?php echo esc_url($thumbnail_url);?>" alt="<?php echo esc_attr($thumbnail_alt);?>" />
                </div>
                <div class="blog-tile--category">
                    <?php if (! empty($categories) ) {
                        echo esc_html($categories[0]->name);
                    }?>
                </div>
                <h5 class="blog-tile--heading">
                    <?php echo esc_attr(get_the_title($blog));?>
                </h5>
                <p class="blog-tile--para">
                <?php echo  wp_kses_post(get_the_excerpt($blog));?>
                </p>
                <a href="<?php echo esc_url(get_permalink($blog));?>" class="btn primary">Learn More</a>
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

<?php
/**
 * Website ajax functions
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */
/**
 * Function for ajax pagination
 *
 * @return string Return the posts html.
 */
add_action( 'wp_ajax_nopriv_wacoal_ajax_pagination', 'wacoal_ajax_pagination' );
add_action( 'wp_ajax_wacoal_ajax_pagination', 'wacoal_ajax_pagination' );

function wacoal_ajax_pagination() {
    // Check for nonce security

    if(isset($_POST['nonce']) && !empty($_POST['nonce'])){
        $nonce = $_POST['nonce'];
    }
    if ( ! wp_verify_nonce( $nonce, 'ajax-nonce' ) )
        die ( 'Busted!');

    if(isset($_POST['query_vars'])){
        $query_vars = json_decode( stripslashes( $_POST['query_vars'] ), true );

        $get_cat_ID=get_term_by('slug',$query_vars['category_name'],'category');
        $cat_name         = $get_cat_ID->name;
        $featured_posts = get_posts(
            array(
            'numberposts' => 2,
            'cat' => $get_cat_ID->term_id,
            'offset' => 0,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_status'=>'publish'
            )
        );
        foreach( $featured_posts as $featured_post ) {
            $posts_to_exclude[]    = $featured_post->ID;
        }
        $query_vars['paged'] = (!empty(sanitize_text_field($_POST['page'])))? sanitize_text_field($_POST['page']) : 1;
        $query_vars['post__not_in'] = $posts_to_exclude;
    }
    $posts = new WP_Query( $query_vars );


    if( ! $posts->have_posts() ) {
        get_template_part( 'content', 'none' );
    }
    else {
        $i=0;
        while ( $posts->have_posts() ) {
            $posts->the_post();
            if($i%3 == 0 || $i==0){
                echo '<section class="more-blog category-blog"><div class="more-blog--wrapper">';
            }
            include locate_template('template-parts/content-excerpt.php');
            if($i%3 == 2 || $i == 2){
                echo '</div></section>';
            }
            $i++;
        }
    }


    die();
}

/**
 * Function for load more
 *
 * @return string Return the posts html.
 */
add_action( 'wp_ajax_nopriv_wacoal_load_more', 'wacoal_load_more' );
add_action( 'wp_ajax_wacoal_load_more', 'wacoal_load_more' );
function wacoal_load_more(){
    if(isset($_POST['nonce']) && !empty($_POST['nonce'])){
        $nonce = $_POST['nonce'];
    }
    if ( ! wp_verify_nonce( $nonce, 'ajax-nonce' ) )
        die ( 'Busted!');

    $recent_posts = Wacoal_Query_posts(
        array(
            'post_type' => array('post'),
            'posts_per_page' => 3,
            'offset' => $_POST['offset'],
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_status'=>'publish'
        )
    );


    if(!empty($recent_posts)){
    ob_start();
    ?>
        <section class="more-blog more-blog-multirow">

        <div class="more-blog--wrapper">
        <?php
            foreach ($recent_posts as $key => $blog) {
            $thumbnail_id = get_post_thumbnail_id($blog->ID);
            $thumbnail_url = Wacoal_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
            $thumbnail_alt = wacoal_get_image_alt($thumbnail_id, 'featured-img');
            $categories = wacoal_get_primary_category($blog->ID);
            $post_tagline = get_field('tag_line', $blog->ID);
            $cat_ID = $categories->term_id;
            ?>
            <article class="blog-tile">
                <div class="blog-tile--image">
                    <img class="lazyload" data-src="<?php echo esc_url($thumbnail_url);?>"
                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="<?php echo esc_attr($thumbnail_alt);?>" />
                </div>
                <div class="blog-tile--category">
                    <?php if (! empty($categories) ) {?>
                        <a href="<?php echo esc_url_raw(get_term_link($cat_ID));?>"> <?php echo esc_attr($categories->name); ?></a>
                    <?php }?>
                </div>
                <h5 class="blog-tile--heading">
                    <?php echo esc_attr(get_the_title($blog->ID));?>
                </h5>
                <div class="blog-tile--para">
                    <?php echo  wp_kses_post($post_tagline);?>
                </div>
                <a href="<?php echo esc_url(get_permalink($blog->ID));?>"
                    class="btn primary">Learn More</a>
            </article>
        <?php } ?>

        </div>
        </section>
        <?php
    $output = ob_get_contents();
    ob_end_clean();
    }else{
        $output = 0;
    }

    echo $output;
    die();
}

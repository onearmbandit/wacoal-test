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
add_action( 'wp_ajax_nopriv_wacoal_ajax_pagination', 'wacoal_ajax_pagination' );
add_action( 'wp_ajax_wacoal_ajax_pagination', 'wacoal_ajax_pagination' );

function wacoal_ajax_pagination() {
    $query_vars = json_decode( stripslashes( $_POST['query_vars'] ), true );

    $query_vars['paged'] = $_POST['page'];


    $posts = new WP_Query( $query_vars );
    $GLOBALS['wp_query'] = $posts;



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
            get_template_part( 'template-parts/content', 'excerpt' );
            if($i%3 == 2 || $i == 2){
                echo '</div></section>';
            }
            $i++;
        }
    }


    die();
}


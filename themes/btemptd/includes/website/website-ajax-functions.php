<?php
/**
 * Website ajax functions
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */
/**
 * Function for ajax pagination
 *
 * @return string Return the posts html.
 */
add_action( 'wp_ajax_nopriv_btemptd_ajax_pagination', 'btemptd_ajax_pagination' );
add_action( 'wp_ajax_btemptd_ajax_pagination', 'btemptd_ajax_pagination' );

function btemptd_ajax_pagination() {
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
    //$GLOBALS['wp_query'] = $posts;



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


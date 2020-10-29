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

function Btemptd_Ajax_pagination()
{
    // Check for nonce security

    if (isset($_POST['nonce']) && !empty($_POST['nonce'])) {
        $nonce = $_POST['nonce'];
    }
    if (! wp_verify_nonce($nonce, 'ajax-nonce') ) {
        die('Busted!');
    }

    if (isset($_POST['query_vars'])) {
        $query_vars = json_decode(stripslashes($_POST['query_vars']), true);

        $get_cat_ID=get_term_by('slug', $query_vars['category_name'], 'category');
        $cat_name         = $get_cat_ID->name;
        $cat_ID      = $get_cat_ID->term_id;
        $featured_posts= get_field('featured_posts', 'category_'.$cat_ID);
        $slider_posts= get_field('slider_posts', 'category_'.$cat_ID);

        foreach( $featured_posts as $featured_post ) {
            $posts_to_exclude[]    = $featured_post;
        }
        foreach( $slider_posts as $slider_post ) {
            array_push($posts_to_exclude, $slider_post);
        }
        $query_vars['paged'] = (!empty(sanitize_text_field($_POST['page'])))? sanitize_text_field($_POST['page']) : 1;
        $query_vars['post__not_in'] = $posts_to_exclude;

    }
    $posts = new WP_Query($query_vars);

    if (! $posts->have_posts() ) {
        get_template_part('content', 'none');
    } else {
        $i=0;
        while ( $posts->have_posts() ) {
            $posts->the_post();
            if ($i%3 == 0 || $i==0) {
                echo '<section class="explore-blog"><div class="explore-blog--bg"><div class="explore-blog--wrapper blog-wrapper">';
            }
            include locate_template('template-parts/content-excerpt.php');
            if ($i%3 == 2 || $i == 2) {
                echo '</div></div></section>';
            }
            $i++;
        }
    }


    die();
}
add_action('wp_ajax_nopriv_btemptd_ajax_pagination', 'Btemptd_Ajax_pagination');
add_action('wp_ajax_btemptd_ajax_pagination', 'Btemptd_Ajax_pagination');

/**
 * Function for load more
 *
 * @return string Return the posts html.
 */

function Btemptd_Load_more()
{

    if (isset($_POST['nonce']) && !empty($_POST['nonce'])) {
        $nonce = $_POST['nonce'];
    }
    if (!wp_verify_nonce($nonce, 'ajax-nonce')) {
        die('Busted!');
    }

    $recent_posts = Btemptd_Query_posts(
        array(
            'post_type' => array('post'),
            'post__not_in' => array($_POST['post_id']),
            'posts_per_page' => 3,
            'offset' => $_POST['offset'],
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_status'=>'publish',
            'category__not_in' => $_POST['cat_id'],
        )
    );


    if (!empty($recent_posts)) {
        ob_start();
        ?>
        <div class="explore-blog explore-see-more">
        <div class="explore-blog--bg ">
        <div class="explore-blog--wrapper">
        <?php foreach($recent_posts as $key =>$recent_post):
            $thumbnail_id  = get_post_thumbnail_id($recent_post->ID);
            $thumbnail_url = Btemptd_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
            $thumbnail_alt = Btemptd_Get_Image_alt($thumbnail_id, 'featured-img');
            $categories    = Btemptd_Get_Primary_category($recent_post->ID);
            $cat_ID        = $categories->term_id;
            ?>
            <div class="explore-blog--box">
                <div class="explore-blog--image">
                    <a href="<?php echo esc_url(get_permalink($recent_post->ID));?>">
                        <img class="img-fluid"
                             src="<?php echo esc_url($thumbnail_url); ?>"
                             alt="<?php echo esc_url($thumbnail_alt); ?>"/>
                    </a>
                </div>

                <div class="explore-blog--content">
                    <div class="explore-blog--content__cta">
                        <a href="<?php echo get_permalink($recent_post->ID);?>">
                            <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/cta-down-arrow.svg" />
                        </a>
                    </div>
                    <div class="explore-blog--content__category">
                        <a href= "<?php echo esc_url_raw(get_term_link($cat_ID));?>">
                            <?php echo esc_attr($categories->name);?>
                        </a>
                    </div>
                    <div class="explore-blog--content__title">
                        <a href="<?php echo esc_url(get_permalink($recent_post->ID));?>">
                            <?php echo esc_attr(get_the_title($recent_post->ID));?>
                        </a>
                    </div>
                </div>
            </div>
        <?php endforeach;?>

        </div>
        </div>
        </div>
        <?php
        $output = ob_get_contents();
        ob_end_clean();
    } else {
        $output = '';
    }

    echo $output;
    die();
}

add_action('wp_ajax_nopriv_btemptd_load_more', 'Btemptd_Load_more');
add_action('wp_ajax_btemptd_load_more', 'Btemptd_Load_more');

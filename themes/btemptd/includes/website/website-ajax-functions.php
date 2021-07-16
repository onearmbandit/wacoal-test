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

        foreach ( $featured_posts as $featured_post ) {
            $posts_to_exclude[]    = $featured_post;
        }

        foreach ( $slider_posts as $slider_post ) {
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
 * Function for ajax search pagination
 *
 * @return string Return the posts html.
 */
function Btemptd_Search_Ajax_pagination()
{
    // Check for nonce securityss

    if (isset($_POST['nonce']) && !empty($_POST['nonce'])) {
        $nonce = $_POST['nonce'];
    }
    if (! wp_verify_nonce($nonce, 'ajax-nonce') ) {
        die('Busted!');
    }

    if (isset($_POST['query_vars'])) {
        $query_vars = json_decode(stripslashes($_POST['query_vars']), true);

        $res_found   = $wp_query->found_posts;
        $search_word = get_search_query();
        $post_count  = 0;
        $search_data = ! empty($_SERVER) ? $_SERVER : array();

        $requested_url = ! empty($search_data['REQUEST_URI']) ? esc_attr($search_data['REQUEST_URI']) : '';

        $posts_search = [];

        if (have_posts() ) {
            while ( have_posts() ) :
                the_post();
                $post_count++;
                $postid                 = get_the_ID();
                $primary_category     = Btemptd_Get_Primary_category($postid);
                $thumbnail_id  = get_post_thumbnail_id();
                $thumbnail_url = Btemptd_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
                $thumbnail_alt = Btemptd_Get_Image_alt($thumbnail_id, 'featured-img');

                $temp['postid']         = $postid;
                $temp['cat_name']       = $primary_category->name;
                $temp['cat_url']        = get_term_link($primary_category->term_id);
                $temp['title']          = get_the_title($postid);
                $temp['tagline']        = get_field('tagline');
                $temp['thumbnail'] = get_post_thumbnail_id();
                $temp['thumbnail_url'] = Btemptd_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
                $temp['img_alt'] = Btemptd_Get_Image_alt($thumbnail_id, 'featured-img');

                array_push($posts_search, $temp);
            endwhile;
        }

        $query_vars['paged'] = (!empty(sanitize_text_field($_POST['page'])))? sanitize_text_field($_POST['page']) : 1;


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
add_action('wp_ajax_nopriv_btemptd_search_ajax_pagination', 'Btemptd_Search_Ajax_pagination');
add_action('wp_ajax_btemptd_search_ajax_pagination', 'Btemptd_Search_Ajax_pagination');


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
            'post_type'        => array('post'),
            'post__not_in'     => array($_POST['post_id']),
            'posts_per_page'   => 3,
            'offset'           => $_POST['offset'],
            'orderby'          => 'post_date',
            'order'            => 'DESC',
            'post_status'      => 'publish',
            'category__not_in' => $_POST['cat_id'],
        )
    );


    if (!empty($recent_posts)) {
        ob_start();
        ?>
        <div class="explore-blog explore-see-more">
        <div class="explore-blog--bg">
        <div class="explore-blog--wrapper">
        <?php foreach($recent_posts as $key =>$recent_post):
            $thumbnail_id  = get_post_thumbnail_id($recent_post->ID);
            $thumbnail_url = Btemptd_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
            $thumbnail_alt = Btemptd_Get_Image_alt($thumbnail_id, 'featured-img');
            $categories    = Btemptd_Get_Primary_category($recent_post->ID);
            $cat_ID        = $categories->term_id;
            ?>
            <div class="explore-blog--box">
                <?php if($thumbnail_id && !empty($thumbnail_id)) :?>
                <div class="explore-blog--image">
                    <a href="<?php echo esc_url(get_permalink($recent_post->ID));?>">
                        <img class="img-fluid"
                             src="<?php echo esc_url($thumbnail_url); ?>"
                             alt="<?php echo esc_attr($thumbnail_alt); ?>"/>
                    </a>
                </div>
                <?php endif;?>

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
                            <?php echo esc_attr(Btemptd_Limit_text(get_the_title($recent_post->ID), 70));?>
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


/**
 * Function for load more category posts
 *
 * @return string Return the posts html.
 */
function Btemptd_Cat_Posts_Load_more()
{
    if (isset($_POST['nonce']) && !empty($_POST['nonce'])) {
        $nonce = $_POST['nonce'];
    }
    if (!wp_verify_nonce($nonce, 'ajax-nonce')) {
        die('Busted!');
    }

    $cat_ID = $_POST['cat_id'];
    $offset = $_POST['offset'];

    $featured_posts= get_field('featured_posts', 'category_'.$cat_ID);
    $slider_posts= get_field('slider_posts', 'category_'.$cat_ID);

    foreach ( $featured_posts as $featured_post ) {
        $posts_to_exclude[]    = $featured_post;
    }

    foreach ( $slider_posts as $slider_post ) {
        array_push($posts_to_exclude, $slider_post);
    }

    $cat_posts = Btemptd_Query_posts(
        array(
            'post_type' => array('post'),
            'cat'=> $cat_ID,
            'post__not_in' => $posts_to_exclude,
            'offset' => $offset,
            'posts_per_page' => 6,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_status'=>'publish'
        )
    );
    $found_post_count = count($cat_posts);
    if (!empty($cat_posts)) {
        ob_start();
        ?>
            <div class="cat-post-listing">
                <?php
                $i = 0;
                $j =0;
                ?>
                <div class="category-posts category-posts-desktop">
                    <?php foreach($cat_posts as $key => $cat_post):
                        $thumbnail_id  = get_post_thumbnail_id($cat_post->ID);
                        $thumbnail_url = Btemptd_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
                        $thumbnail_alt = Btemptd_Get_Image_alt($thumbnail_id, 'featured-img');
                        $primary_category     = Btemptd_Get_Primary_category($cat_post->ID);
                        $primary_category_url = get_term_link($primary_category->term_id);

                        if ($i % 3 == 0) { ?>
                            <section class="explore-blog">
                                <div class="explore-blog--bg">
                                    <div class="explore-blog--wrapper blog-wrapper">
                        <?php } ?>
                            <div class="explore-blog--box box-shadow-right">
                                <?php if($thumbnail_id && !empty($thumbnail_id)) :?>
                                <div class="explore-blog--image">
                                    <a href="<?php echo esc_url(get_permalink($cat_post->ID));?>">
                                        <img class="img-fluid" src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr($thumbnail_alt); ?>"/>
                                    </a>
                                </div>
                                <?php endif;?>

                                <div class="explore-blog--content blog-pagination">
                                    <div class="blog-pagination-content">
                                        <div class="explore-blog--content__category">
                                            <a href="<?php echo esc_url_raw($primary_category_url);?>">
                                                <?php echo esc_attr($primary_category->name);?>
                                            </a>
                                        </div>
                                        <div class="explore-blog--content__title">
                                            <a href="<?php echo esc_url(get_permalink($cat_post->ID));?>">
                                                <?php echo esc_attr(get_the_title($cat_post->ID));?>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="blog-pagination-cta">
                                        <a href="<?php echo esc_url(get_permalink($cat_post->ID));?>">
                                            <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/category-post-arrow.svg" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php if ($i % 3 == 2 || $found_post_count == ($i+1)) { ?>
                                    </div>
                                </div>
                            </section>
                        <?php }
                        $i++;
                    endforeach; ?>
                </div>
                <div class="category-posts category-posts-mobile">
                    <?php foreach($cat_posts as $key => $cat_post):
                        $thumbnail_id  = get_post_thumbnail_id($cat_post->ID);
                        $thumbnail_url = Btemptd_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
                        $thumbnail_alt = Btemptd_Get_Image_alt($thumbnail_id, 'featured-img');
                        $primary_category     = Btemptd_Get_Primary_category($cat_post->ID);
                        $primary_category_url = get_term_link($primary_category->term_id);

                        if ($j % 2 == 0) { ?>
                            <section class="explore-blog">
                                <div class="explore-blog--bg">
                                    <div class="explore-blog--wrapper blog-wrapper">
                        <?php } ?>
                            <div class="explore-blog--box box-shadow-right">
                                <?php if($thumbnail_id && !empty($thumbnail_id)) :?>
                                <div class="explore-blog--image">
                                    <a href="<?php echo esc_url(get_permalink($cat_post->ID));?>">
                                        <img class="img-fluid" src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_attr($thumbnail_alt); ?>"/>
                                    </a>
                                </div>
                                <?php endif;?>

                                <div class="explore-blog--content blog-pagination">
                                    <div class="blog-pagination-content">
                                        <div class="explore-blog--content__category">
                                            <a href="<?php echo esc_url_raw($primary_category_url);?>">
                                                <?php echo esc_attr($primary_category->name);?>
                                            </a>
                                        </div>
                                        <div class="explore-blog--content__title">
                                            <a href="<?php echo esc_url(get_permalink($cat_post->ID));?>">
                                                <?php echo esc_attr(get_the_title($cat_post->ID));?>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="blog-pagination-cta">
                                        <a href="<?php echo esc_url(get_permalink($cat_post->ID));?>">
                                            <img src="<?php echo  esc_url(THEMEURI); ?>/assets/images/category-post-arrow.svg" />
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php if ($j % 2 == 1 || $found_post_count == ($j+1)) { ?>
                                    </div>
                                </div>
                            </section>
                        <?php }
                        $j++;
                    endforeach; ?>
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

add_action('wp_ajax_nopriv_btemptd_cat_posts_load_more', 'Btemptd_Cat_Posts_Load_more');
add_action('wp_ajax_btemptd_cat_posts_load_more', 'Btemptd_Cat_Posts_Load_more');

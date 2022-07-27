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

add_action('wp_ajax_nopriv_wacoal_ajax_pagination', 'Wacoal_Ajax_pagination');
add_action('wp_ajax_wacoal_ajax_pagination', 'Wacoal_Ajax_pagination');

/**
 * Function for ajax pagination
 *
 * @return string Return the posts html.
 */
function Wacoal_Ajax_pagination()
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
        $get_cat_ID = get_term_by('slug', $query_vars['category_name'], 'category');
        $cat_name   = $get_cat_ID->name;

        $featured_posts = get_posts(
            array(
            'numberposts' => 2,
            'cat'         => $get_cat_ID->term_id,
            'offset'      => 0,
            'orderby'     => 'post_date',
            'order'       => 'DESC',
            'post_status' => 'publish'
            )
        );

        foreach ($featured_posts as $featured_post) {
            $posts_to_exclude[] = $featured_post->ID;
        }

        $query_vars['paged']        = (!empty(sanitize_text_field($_POST['page'])))? sanitize_text_field($_POST['page']) : 1;
        $query_vars['post__not_in'] = $posts_to_exclude;
    }

    $posts = new WP_Query($query_vars);
    $cat_post_counts= $posts->post_count;

    if (! $posts->have_posts() ) {
        get_template_part('content', 'none');
    } else {
        $i=0;
        $j=0;

        echo '<div class="category-posts category-posts--desktop">';
        while ($posts->have_posts()) {
            $posts->the_post();
            if ($i % 3 == 0 ) {
                echo '<section class="more-blog category-blog"><div class="more-blog--wrapper">';
            }
            include locate_template('template-parts/content-excerpt.php');
            if ($i % 3 == 2 || $cat_post_counts == ($i+1)) {
                echo '</div></section>';
            }
            $i++;
        }
        echo '</div>';

        echo '<div class="category-posts category-posts--mobile">';
        while ($posts->have_posts()) {
            $posts->the_post();
            if ($j % 2 == 0) {
                echo '<section class="more-blog"><div class="more-blog--wrapper">';
            }
            include locate_template('template-parts/content-excerpt.php');
            if ($j % 2 == 1 || $cat_post_counts == ($j+1)) {
                echo '</div></section>';
            }
            $j++;
        }
        echo '</div>';

    }

    die();
}


/**
 * Function for ajax search pagination
 *
 * @return string Return the posts html.
 */
function Wacoal_Search_Ajax_pagination()
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
 add_action('wp_ajax_nopriv_wacoal_search_ajax_pagination', 'Wacoal_Search_Ajax_pagination');
 add_action('wp_ajax_wacoal_search_ajax_pagination', 'Wacoal_Search_Ajax_pagination');

/**
 * Function for load more.
 *
 * @return string Return the posts html.
 */
function Wacoal_Load_more()
{
    if (isset($_POST['nonce']) && !empty($_POST['nonce'])) {
        $nonce = $_POST['nonce'];
    }
    if (! wp_verify_nonce($nonce, 'ajax-nonce') ) {
        die('Busted!');
    }

    $post_not_in = array();

    $slider_blogs_posts = Wacoal_Query_posts(
        array(
            'post_type'      => array('post'),
            'posts_per_page' => 4,
            'offset'         => 0,
            'orderby'        => 'post_date',
            'order'          => 'DESC',
            'post_status'    => 'publish'
        )
    );

    foreach ( $slider_blogs_posts as $p ) {
        $post_not_in[]=$p->ID;
    }

    $featured_blogs       = get_field('featured_posts', 'options');
    $featured_blogs_ids   = ! empty($featured_blogs) ? array_values($featured_blogs) : array();

    $featured_blogs_posts = Wacoal_Query_posts(
        array(
            'post__in'  => $featured_blogs_ids,
            'posts_per_page' => -1,
            'post_type' => array(
                'post',
            ),
        )
    );

    $featured_blog_slider = [];
    foreach ( $featured_blogs_ids as $featured_blog_id ) {
        foreach ( $featured_blogs_posts as $p ) {
            if ($p->ID === $featured_blog_id ) {
                $featured_blog_slider[] = $p;
                $post_not_in[]=$p->ID;
            }
        }
    }

    $recent_posts = Wacoal_Query_posts(
        array(
            'post_type'      => array('post'),
            'post__not_in'   => $post_not_in,
            'posts_per_page' => 3,
            'offset'         => $_POST['offset'],
            'orderby'        => 'post_date',
            'order'          => 'DESC',
            'post_status'    => 'publish'
        )
    );

    if (!empty($recent_posts)) {
        ob_start();
        ?>
        <section class="more-blog more-blog-multirow">

        <div class="more-blog--wrapper">
        <?php

        foreach ($recent_posts as $key => $blog) {
            $thumbnail_id  = get_post_thumbnail_id($blog->ID);
            $thumbnail_url = Wacoal_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
            $thumbnail_alt = Wacoal_Get_Image_alt($thumbnail_id, 'featured-img');
            $categories    = Wacoal_Get_Primary_category($blog->ID);
            $post_tagline  = get_field('tag_line', $blog->ID);
            $cat_ID        = $categories->term_id;
            ?>

            <article class="blog-tile">

            <?php if($thumbnail_id && !empty($thumbnail_id)) :?>
                <a href="<?php echo esc_url(get_permalink($blog->ID));?>">
                    <div class="blog-tile--image">
                        <img class="lazyload" data-src="<?php echo esc_url($thumbnail_url);?>"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="<?php echo esc_attr($thumbnail_alt);?>" />
                    </div>
                </a>
            <?php endif;?>

                <div class="blog-tile--category">
                <?php if (! empty($categories) ) {?>
                        <a href="<?php echo esc_url_raw(get_term_link($cat_ID));?>"> <?php echo esc_attr($categories->name); ?></a>
                <?php }?>
                </div>

                <a href="<?php echo esc_url(get_permalink($blog->ID));?>">
                    <h5 class="blog-tile--heading">
                        <?php echo html_entity_decode(Wacoal_Limit_text(get_the_title($blog->ID),61));?>
                    </h5>
                </a>

                <?php if($post_tagline && !empty($post_tagline)) :?>
                <div class="blog-tile--para">
                    <a href="<?php echo esc_url(get_permalink($blog->ID));?>">
                        <?php echo  wp_kses_post($post_tagline);?>
                    </a>
                </div>
                <?php endif;?>

                <a href="<?php echo esc_url(get_permalink($blog->ID));?>"
                    class="btn primary">Learn More</a>
            </article>
        <?php } ?>

            </div>
        </section>
        <?php
        $output = ob_get_contents();
        ob_end_clean();
    } else {
        $output = 0;
    }

    echo $output;
    die();
}

add_action('wp_ajax_nopriv_wacoal_load_more', 'Wacoal_Load_more');
add_action('wp_ajax_wacoal_load_more', 'Wacoal_Load_more');

/**
 * Function for load more
 *
 * @return string Return the posts html.
 */
function Wacoal_Cat_Load_more()
{

    if (isset($_POST['nonce']) && !empty($_POST['nonce'])) {
        $nonce = $_POST['nonce'];
    }
    if (!wp_verify_nonce($nonce, 'ajax-nonce')) {
        die('Busted!');
    }

    $recent_posts = Wacoal_Query_posts(
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
        <section class="more-from-blog more-from-blog-multirow">
        <div class="more-blog--wrapper">
        <?php foreach ($recent_posts as $key =>$recent_post) { ?>
            <?php
            $thumbnail_id  = get_post_thumbnail_id($recent_post->ID);
            $thumbnail_url = Wacoal_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
            $thumbnail_alt = Wacoal_Get_Image_alt($thumbnail_id, 'featured-img');
            $categories    = Wacoal_Get_Primary_category($recent_post->ID);
            $cat_ID        = $categories->term_id;
            $cat_url       = get_term_link($cat_ID);
            ?>
            <article class="blog-tile">

            <?php if($thumbnail_id && !empty($thumbnail_id)) :?>
                <a href="<?php echo esc_url(get_permalink($recent_post->ID));?>">
                    <div class="blog-tile--image">
                        <img class="lazyload"
                            data-src="<?php echo esc_url($thumbnail_url);?>"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            alt="<?php echo esc_attr($thumbnail_alt);?>" />
                    </div>
                </a>
            <?php endif;?>

                <div class="blog-tile--category">
                    <?php if (! empty($categories) ) {?>
                    <a href="<?php echo esc_url_raw($cat_url);?>"> <?php echo esc_attr($categories->name); ?> </a>
                    <?php }?>
                </div>

                <a href="<?php echo esc_url(get_permalink($recent_post->ID));?>">
                    <h5 class="blog-tile--heading">
                        <?php echo html_entity_decode(Wacoal_Limit_text(get_the_title($recent_post->ID),61));?>
                    </h5>
                </a>

                <a href="<?php echo esc_url(get_permalink($recent_post->ID));?>" class="btn primary">
                    Learn More
                </a>
            </article>
        <?php } ?>

        </div>
        </section>
        <?php
        $output = ob_get_contents();
        ob_end_clean();
    } else {
        $output = '';
    }

    echo $output;
    die();
}

add_action('wp_ajax_nopriv_wacoal_cat_load_more', 'Wacoal_Cat_Load_more');
add_action('wp_ajax_wacoal_cat_load_more', 'Wacoal_Cat_Load_more');

/**
 * Function for search page load more.
 *
 * @return string Return the posts html.
 */
function Wacoal_Search_Load_more()
{
    if (isset($_POST['nonce']) && !empty($_POST['nonce'])) {
        $nonce = $_POST['nonce'];
    }
    if (! wp_verify_nonce($nonce, 'ajax-nonce') ) {
        die('Busted!');
    }

    $search_recent_posts = Wacoal_Query_posts(
        array(
            'post_type'      => array('post'),
            'posts_per_page' => 3,
            'offset'         => $_POST['offset'],
            'orderby'        => 'post_date',
            'order'          => 'DESC',
            'post_status'    => 'publish'
        )
    );

    if (!empty($search_recent_posts)) {
        ob_start();
        ?>
        <section class="more-blog more-blog-multirow">

        <div class="more-blog--wrapper">
        <?php

        foreach ($search_recent_posts as $key => $blog) {
            $thumbnail_id  = get_post_thumbnail_id($blog->ID);
            $thumbnail_url = Wacoal_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
            $thumbnail_alt = Wacoal_Get_Image_alt($thumbnail_id, 'featured-img');
            $categories    = Wacoal_Get_Primary_category($blog->ID);
            $post_tagline  = get_field('tag_line', $blog->ID);
            $cat_ID        = $categories->term_id;
            ?>

            <article class="blog-tile">

            <?php if($thumbnail_id && !empty($thumbnail_id)) :?>
                <a href="<?php echo esc_url(get_permalink($blog->ID));?>">
                    <div class="blog-tile--image">
                        <img class="lazyload" data-src="<?php echo esc_url($thumbnail_url);?>"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="<?php echo esc_attr($thumbnail_alt);?>" />
                    </div>
                </a>
            <?php endif;?>

                <div class="blog-tile--category">
                <?php if (! empty($categories) ) {?>
                        <a href="<?php echo esc_url_raw(get_term_link($cat_ID));?>"> <?php echo esc_attr($categories->name); ?></a>
                <?php }?>
                </div>

                <a href="<?php echo esc_url(get_permalink($blog->ID));?>">
                    <h5 class="blog-tile--heading">
                        <?php echo html_entity_decode(Wacoal_Limit_text(get_the_title($blog->ID),61));?>
                    </h5>
                </a>

                <?php if($post_tagline && !empty($post_tagline)) :?>
                <div class="blog-tile--para">
                    <a href="<?php echo esc_url(get_permalink($blog->ID));?>">
                        <?php echo  wp_kses_post($post_tagline);?>
                    </a>
                </div>
                <?php endif;?>

                <a href="<?php echo esc_url(get_permalink($blog->ID));?>"
                    class="btn primary">Learn More</a>
            </article>
        <?php } ?>

            </div>
        </section>
        <?php
        $output = ob_get_contents();
        ob_end_clean();
    } else {
        $output = 0;
    }

    echo $output;
    die();
}

add_action('wp_ajax_nopriv_wacoal_search_load_more', 'Wacoal_Search_Load_more');
add_action('wp_ajax_wacoal_search_load_more', 'Wacoal_Search_Load_more');

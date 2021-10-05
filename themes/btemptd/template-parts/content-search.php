<?php
/**
 * Template part for displaying results in search pages
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

$new_count = ceil(count($posts_search) / 8);

$recent_posts = Btemptd_Query_posts(
    array(
        'post_type' => array('post'),
        'posts_per_page' => 3,
        'offset' => 0,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_status'=>'publish'
    )
);
$total_posts    = wp_count_posts('post');
$counts         = $total_posts->publish;

?>
<div class="search-count">
<div class="search-container">
    <p><?php echo esc_attr($res_found);?> results for “<?php echo wp_kses_post($search_word);?>”</p>
</div>
</div>
<section class="search-container">

<?php if (! empty($posts_search) && count($posts_search) >= 1 ) {

    for ( $i = 0; $i < $new_count; $i++ ) {
        $current_recent_posts = array_slice($posts_search, 0, 8);
        $posts_search         = array_slice($posts_search, 8);

        foreach ( $current_recent_posts as $index => $search_posts ) :
            $postid        = $search_posts['postid'];
            $cat_name      = $search_posts['cat_name'];
            $cat_url       = $search_posts['cat_url'];
            $post_title    = $search_posts['title'];
            $tagline       = $search_posts['tagline'];
            $thumbnail     = $search_posts['thumbnail'];
            $thumbnail_url = $search_posts['thumbnail_url'];
            $img_alt       = $search_posts['img_alt'];

            ?>

    <div class="search-outer">
        <div class="search-image">
            <a href="<?php echo esc_url(get_permalink($postid));?>">
                <img src="<?php echo esc_url($thumbnail_url); ?>" />
            </a>
        </div>

        <div class="search-content">

            <?php if($cat_name && !empty($cat_name)) :?>
            <div class="category">
                <a href="<?php echo esc_url_raw($cat_url);?>">
                    <?php echo esc_attr($cat_name);?>
                </a>
            </div>
            <?php endif;?>

            <?php if($post_title && !empty($post_title)) :?>
            <div class="title">
                <a href="<?php echo esc_url(get_permalink($postid));?>">
                    <?php echo esc_attr(Btemptd_Limit_text($post_title, 70));?>
                </a>
            </div>
            <?php endif;?>

            <?php if($tagline && !empty($tagline)) :?>
            <div class="para">
                <a href="<?php echo esc_url(get_permalink($postid));?>">
                    <?php echo wp_kses_post(Btemptd_Remove_ptag($tagline));?>
                </a>
            </div>
            <?php endif;?>

        </div>
    </div>
        <?php endforeach; ?>
    <?php }
}?>

<section class="search-pagination">
<?php Btemptd_Search_Paging_nav();  ?>
</section>
</section>

<input type="hidden" name="search_offset" id="search_offset" value="0">
<input type="hidden" name="total" id="total" value="<?php echo esc_attr($counts);?>">
<section class="explore-blog explore-see-more">
    <div class="explore-blog--title">EXPLORE THE BLOG</div>

    <div class="explore-blog--bg ">
    <div class="explore-blog--wrapper">
        <?php foreach($recent_posts as $key =>$recent_post):
            $thumbnail_id  = get_post_thumbnail_id($recent_post->ID);
            $thumbnail_url = Btemptd_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
            $thumbnail_alt = Btemptd_Get_Image_alt($thumbnail_id, 'featured-img');
            $categories    = Btemptd_Get_Primary_category($recent_post->ID);
            $cat_ID        = $categories->term_id;
            ?>
            <div class="explore-blog--box ">
                <?php if($thumbnail_id && !empty($thumbnail_id)) :?>
                <div class="explore-blog--image">
                    <a href="<?php echo esc_url(get_permalink($recent_post->ID));?>">
                        <img class="img-fluid"
                             src="<?php echo esc_url($thumbnail_url); ?>"
                             alt="<?php echo esc_attr($thumbnail_alt); ?>"/>
                    </a>
                </div>
                <?php endif;?>

                <div class="explore-blog--content box">
                    <div class="explore-blog--content__cta">
                        <a href="<?php echo esc_url(get_permalink($recent_post->ID));?>">
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
</section>

<?php if($counts > 3) :?>
        <div class="see-more--wrapper">
            <button class="search-more">See More</button>
        </div>
<?php endif;?>

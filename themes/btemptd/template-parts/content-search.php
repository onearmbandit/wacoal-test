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
$total_posts = wp_count_posts('post');
$counts= $total_posts->publish;

?>
<div class="search-count">
    <p><?php echo esc_attr($res_found);?> results for “<?php echo wp_kses_post($search_word);?>”</p>
</div>
<section class="search-container">

<?php if (! empty($posts_search) && count($posts_search) >= 1 ) {

    for ( $i = 0; $i < $new_count; $i++ ) {
        $current_recent_posts = array_slice($posts_search, 0, 8);
        $posts_search         = array_slice($posts_search, 8);

        foreach ( $current_recent_posts as $index => $search_posts ) :
            $postid = $search_posts['postid'];
            $cat_name = $search_posts['cat_name'];
            $cat_url = $search_posts['cat_url'];
            $post_title = $search_posts['title'];
            $tagline = $search_posts['tagline'];
            $thumbnail = $search_posts['thumbnail'];
            $thumbnail_url = $search_posts['thumbnail_url'];
            $img_alt = $search_posts['img_alt'];

            ?>

    <div class="search-outer">
        <div class="search-image">
            <a href="<?php echo esc_url(get_permalink($postid));?>">
                <img src="<?php echo esc_url($thumbnail_url); ?>" />
            </a>
        </div>

        <div class="search-content">
            <div class="category">
                <a href="<?php echo esc_url_raw($cat_url);?>">
                    <?php echo esc_attr($cat_name);?>
                </a>
            </div>
            <div class="title">
                <a href="<?php echo esc_url(get_permalink($postid));?>">
                    <?php echo esc_attr($post_title);?>
                </a>
            </div>

            <div class="para">
                <a href="<?php echo esc_url(get_permalink($postid));?>">
                    <?php echo wp_kses_post(Btemptd_Remove_ptag($tagline));?>
                </a>
            </div>

        </div>
    </div>
        <?php endforeach; ?>
    <?php }
}?>

<?php Btemptd_Search_Paging_nav();  ?>
</section>
<?php if(!empty($recent_posts)) :?>
    <?php include locate_template('template-parts/explore-page.php');?>
<?php endif; ?>

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
?>
<div class="search-count">
    <p><?php echo esc_attr($res_found);?> results for “<?php echo wp_kses_post($search_word);?>”</p>
</div>
<section class="search-container">

<?php if (! empty($posts_search) && count($posts_search) >= 1 ) {

    for ( $i = 0; $i < $new_count; $i++ ) {
        $current_recent_posts = array_slice($posts_search, 0, 8);
        $posts_search         = array_slice($posts_search, 8);

        foreach ( $current_recent_posts as $index => $posts ) :
            $postid = $posts['postid'];
            $cat_name = $posts['cat_name'];
            $cat_url = $posts['cat_url'];
            $title = $posts['title'];
            $tagline = $posts['tagline'];
            $thumbnail = $posts['thumbnail'];
            $thumbnail_url = $posts['thumbnail_url'];
            $img_alt = $posts['img_alt'];

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
                    <?php echo esc_attr($title);?>
                </a>
            </div>

            <div class="para">
                <?php echo wp_kses_post(Btemptd_Remove_ptag($tagline));?>
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

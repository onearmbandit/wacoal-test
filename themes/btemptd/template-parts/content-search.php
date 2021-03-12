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

<section id="primary" class="search-page top__spacing--home">
    <main id="main" class="search-page__content">

<?php if (! empty($posts_search) && count($posts_search) >= 1 ) {

    for ( $i = 0; $i < $new_count; $i++ ) {
        $current_recent_posts = array_slice($posts_search, 0, 8);
        $posts_search         = array_slice($posts_search, 8);

        foreach ( $current_recent_posts as $index => $posts ) :
            $postid = $posts['postid'];
            $cat_name = $posts['cat_name'];
            $cat_url = $posts['cat_url'];
            $title = $posts['title'];
            $thumbnail = $posts['thumbnail'];
            $thumbnail_url = $posts['thumbnail_url'];
            $img_alt = $posts['img_alt'];

            ?>

    <div class="explore-blog--box box-shadow-right">
    <div class="explore-blog--image">
        <a href="<?php echo esc_url(get_permalink());?>">
            <img class="img-fluid" src="<?php echo esc_url($thumbnail_url); ?>" alt="<?php echo esc_url($img_alt); ?>"/>
        </a>
    </div>

    <div class="explore-blog--content blog-pagination">
        <div class="blog-pagination-content">
        <div class="explore-blog--content__category">
            <a href="<?php echo esc_url_raw($cat_url);?>">
                <?php echo esc_attr($cat_name);?>
            </a>
        </div>
        <div class="explore-blog--content__title">
            <a href="<?php echo esc_url(get_permalink($postid));?>">
                <?php echo esc_attr($title);?>
            </a>
        </div>
        </div>
    </div>
</div>
        <?php endforeach; ?>
    <?php }
}?>
<?php Btemp_Paging_nav(); ?>
    </main>
</section>


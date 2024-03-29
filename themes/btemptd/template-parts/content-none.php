<?php
/**
 * Template part for displaying a message that posts cannot be found
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

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
    <div class="search-container">
    <p><?php echo esc_attr($res_found);?> results for “<?php echo wp_kses_post($search_word);?>”</p>
    </div>
</div>
<div class="no-search">
    <div class="search-container">
        <h4>No posts were found.</h4>
        <p>Please try a different search term or <a href="<?php echo esc_url(home_url());?>"> go back to the homepage.</a></p>
    </div>
</div>

<?php if(!empty($recent_posts)) :?>
    <?php include locate_template('template-parts/explore-page.php');?>
<?php endif; ?>

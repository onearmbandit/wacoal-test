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

$recent_posts = Wacoal_Query_posts(
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
        <p><?php echo esc_attr($res_found);?> RESULTS FOR “<?php echo wp_kses_post($search_word);?>”</p>
    </div>
</div>
<div class="no-search">
    <div class="search-container">
        <h4>No posts were found.</h4>
       <p>Please try a different search term or <a href="<?php echo esc_url(home_url());?>"> go back to the homepage.</a></p>
    </div>
</div>

<?php $counts= wp_count_posts();?>
<input type="hidden" name="offset" id="offset" value="0">
<input type="hidden" name="total" id="total" value="<?php echo $counts->publish;?>">
<section class="more-blog">
    <div class="more-blog--title">
            <?php echo esc_html("More From The Blog");?>

    </div>
    <div class="more-blog--wrapper">
        <?php foreach ($recent_posts as $key => $blog) {
            $thumbnail_id  = get_post_thumbnail_id($blog->ID);
            $thumbnail_url = Wacoal_Get_image(wp_get_attachment_image_src($thumbnail_id, 'full'));
            $thumbnail_alt = Wacoal_Get_Image_alt($thumbnail_id, 'featured-img');
            $categories    = Wacoal_Get_Primary_category($blog->ID);
            $post_tagline  = get_field('tag_line', $blog->ID);
            $cat_ID        = $categories->term_id;
            ?>
            <article class="blog-tile">
                <a href="<?php echo esc_url(get_permalink($blog->ID));?>">
                    <div class="blog-tile--image">
                        <img class="lazyload" data-src="<?php echo esc_url($thumbnail_url);?>"
                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                        alt="<?php echo esc_attr($thumbnail_alt);?>" />
                    </div>
                </a>
                <div class="blog-tile--category">
                    <?php if (! empty($categories) ) {?>
                        <a href="<?php echo esc_url_raw(get_term_link($cat_ID));?>"> <?php echo esc_attr($categories->name); ?></a>
                    <?php }?>
                </div>
                <h5 class="blog-tile--heading">
                    <a href="<?php echo esc_url(get_permalink($blog->ID));?>">
                        <?php echo html_entity_decode(get_the_title($blog->ID));?>
                    </a>
                </h5>
                <div class="blog-tile--para">
                <a href="<?php echo esc_url(get_permalink($blog->ID));?>">
                    <?php echo  wp_kses_post($post_tagline);?>
                    </a>
                </div>
                <a href="<?php echo esc_url(get_permalink($blog->ID));?>"
                    class="btn primary">Learn More</a>
            </article>
        <?php } ?>
    </div>
</section>
<?php if($counts->publish > 3) :?>
<div class="see-more--wrapper">
    <button class="more btn secondary">See More</button>
</div>
<?php endif;?>

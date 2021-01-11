<?php
/**
 * Template Name: 404
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */
Btemptd_Page_Entry_top('');
$description=get_field('short_description', 'options');
?>

<section class="page-404" >
    <div class="page-404--wrapper">
    <?php echo wp_kses_post($description);?>
    </div>
</section>


<!-- Explore the Blog -->

<?php $recent_posts = Btemptd_Query_posts(
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

<?php if(!empty($recent_posts)):?>
    <?php require locate_template('template-parts/explore-page.php');?>
<?php endif;?>
<!-- -->
<section class="spacer-120"></section>
<?php
Btemptd_Page_Entry_bottom();

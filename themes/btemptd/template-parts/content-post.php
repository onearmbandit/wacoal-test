<?php
/**
 * Template part for displaying page content in post.php
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

?>

<section class="article-header">
    <div class="article-header--wrapper">

    <?php
    if(!empty($article_banner)) :
        if(!empty($article_banner_link)) :?>
        <a href="<?php echo esc_url($article_banner_link);?>" target="_blank";>
        <?php endif;?>
        <div class="article-header--banner" style="background-image:url(<?php  echo esc_url($article_banner_url);?>);"></div>
        <?php if(!empty($article_banner_link)) :?>
        </a>
            <?php
        endif;
    endif;
    ?>

        <div class="article-header--category">
            <a href="<?php echo esc_url($primary_category_url); ?>"
                class="article-header--wrapper__category">
                <?php echo esc_attr($primary_category->name); ?>
            </a>
        </div>

        <div class="article-header--title">
            <?php echo esc_attr($post_title); ?>
        </div>

        <div class="article-header--para">
            <?php echo wp_kses_post($tag_line); ?>
        </div>
    </div>
</section>

<section class="three-reason">
    <div class="three-reason--wrapper">

    <?php if($sub_headline && !empty($sub_headline)) :?>
        <div class="three-reason--title">
           <?php echo wp_kses_post($sub_headline); ?>
        </div>
    <?php endif; ?>

    </div>
</section>

<!-- WP gutenberg block content -->
<section class="page-wrapper">
    <div class="page-wrapper--content">
        <?php the_content(); ?>
    </div>
</section>

<?php $recent_posts = Btemptd_Query_posts(
    array(
        'post_type' => array('post'),
        'post__not_in' => array(get_the_ID()),
        'posts_per_page' => 3,
        'offset' => 0,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_status'=>'publish'
    )
);
$args = array(

    'post_type' => array('post'),
    'post__not_in' => array(get_the_ID()),
    'posts_per_page' => -1,
    'offset' => 0,
    'orderby' => 'post_date',
    'order' => 'DESC',
    'post_status'=>'publish'
  );
$the_query = new WP_Query($args);
$arr['publish']=$the_query->found_posts;
$counts= array();
$counts= (object)$arr;?>
<input type="hidden" id="hidden_post" name="hidden_post" value="<?php echo get_the_ID();?>">
<?php if(!empty($recent_posts)) :?>
    <?php include locate_template('template-parts/explore-page.php');?>
<?php endif;?>

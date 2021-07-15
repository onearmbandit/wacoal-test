<?php
/**
 * Single category template
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */
Wacoal_Page_Entry_top('');
$current_cat_data = get_queried_object();
$current_cat_id   = $current_cat_data->term_id;
$cat_name         = $current_cat_data->name;
?>

<div id="primary" class="content-area1111">
    <main id="main" class="site-main">

        <section class="banner-with-background">
            <h1 class="banner-with-background--heading"><?php echo esc_attr($cat_name);?></h1>
            <div class="banner-with-background--subtitle">
                <?php echo category_description(); ?>
            </div>
        </section>

        <?php
        $template= get_field('template', 'category_'.$current_cat_id);
        if ($template == 'wacoal') {
            $static_section= get_field('static_section', 'category_'.$current_cat_id);?>
            <section class="wacoal-101">
                <div class="wacoal-101--wrapper">
                    <div class="wacoal-101--inner-wrapper">
                    <div class="wacoal-101--image">
                        <?php
                        if(!empty($static_section['image_link'])) :?>
                            <a href="<?php echo esc_url($static_section['image_link']);?>"
                            <?php if($static_section['title_link_open_in_new_tab'] == true) : echo "target='_blank'";
                            endif;?>>
                        <?php endif;?>
                        <img class="lazyload"
                            data-src="<?php echo esc_url($static_section['image']['url']); ?>"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="
                            alt="Wacoal 101" />
                        <?php
                        if(!empty($static_section['image_link'])) :?>
                            </a>
                        <?php endif;?>
                    </div>
                    <div class="wacoal-101--content">
                    <div class="content-wrapper">
                    <?php if($static_section['title_link'] && !empty($static_section['title_link'])) : ?>
                        <a href="<?php echo esc_url($static_section['title_link']);?>"
                            <?php if($static_section['title_link_open_in_new_tab'] == true) : echo "target='_blank'";
                            endif;?>>
                    <?php endif;?>
                        <div class="wacoal-101--content__title">
                            <?php echo esc_attr($static_section['title']);?>
                        </div>
                        <?php if($static_section['title_link']) : ?>
                        </a>
                            <?php
                        endif;
                        ?>

                        <?php foreach ($static_section['links'] as $key => $page_obj) { ?>
                            <div class="wacoal-101--list">
                                <div class="wacoal-101--list__icon">
                                    <img class="lazyload" data-src="<?php echo  esc_url(esc_url(THEMEURI)); ?>/assets/images/wacol-101-arrow.svg"
                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="Wacoal 101 Arrow" />
                                </div>
                                <div class="wacoal-101--list__content"><a target="_blank" href="<?php echo esc_url($page_obj['link']);?>"><?php echo esc_attr($page_obj['title']);?></a></div>
                            </div>
                        <?php } ?>
                    </div>
                        </div>
                </div>
                </div>
            </section>
        <?php }
        $featured_posts = get_posts(
            array(
            'numberposts' => 2,
            'cat'         => $current_cat_id,
            'offset'      => 0,
            'orderby'     => 'post_date',
            'order'       => 'DESC',
            'post_status' =>'publish'
            )
        );
        $posts_per_page   = get_option('posts_per_page');
        $category         = get_category($current_cat_id);
        $count            = $category->category_count;
        $page_num         = $count/$posts_per_page;
        $posts_to_exclude = array();
        ?>

        <?php if($featured_posts && !empty($featured_posts)) :?>
        <section class="featured-article-block">
            <div class="featured-article-block--wrapper">
                <?php
                foreach ( $featured_posts as $featured_post ) {
                    $featured_post_id      = $featured_post->ID;
                    $featured_post_title   = get_the_title($featured_post_id);
                    $post_tagline          = get_field('tag_line', $featured_post_id);
                    $featured_image        = get_the_post_thumbnail_url($featured_post_id);
                    $posts_to_exclude[]    = $featured_post->ID;
                    ?>
                <article class="featured-box">
                    <div class="featured-box--content">
                        <p class="featured-box--content__subtitle">
                            <?php echo esc_attr($cat_name); ?>
                        </p>

                        <?php if($featured_post_title && !empty($featured_post_title)) :?>
                        <a href="<?php echo esc_url(get_permalink($featured_post_id)); ?>">
                            <h4 class="featured-box--content__title">
                                <?php echo esc_attr(Wacoal_Limit_text(Wacoal_Remove_P_tag($featured_post_title), 110)); ?>
                            </h4>
                        </a>
                        <?php endif;?>

                        <?php if($post_tagline && !empty($post_tagline)) :?>
                        <a href="<?php echo esc_url(get_permalink($featured_post_id)); ?>">
                            <p class="featured-box--content__para">
                                <?php echo wp_kses_post(Wacoal_Limit_text(Wacoal_Remove_P_tag($post_tagline), 145)); ?>
                            </p>
                        </a>
                        <?php endif;?>

                        <a href="<?php echo esc_url(get_permalink($featured_post_id)); ?>" class="btn primary big">learn more</a>
                    </div>

                    <?php if($featured_image && !empty($featured_image)) :?>
                    <a href="<?php echo esc_url(get_permalink($featured_post_id)); ?>">
                        <div class="featured-box--image">
                            <img class="lazyload" data-src="<?php echo esc_url($featured_image); ?>"
                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" alt="Featured Article" />
                        </div>
                    </a>
                    <?php endif;?>

                </article>
                    <?php
                }
                ?>
            </div>
        </section>
        <?php endif;?>

        <div id="post-listing">
            <?php if (have_posts()) {
                $i=0;
                $j=0;
                if (! wp_is_mobile()) { ?>
                <div class="category-posts category-posts--desktop">
                    <?php
                    while ( have_posts() ) : the_post();
                        if ($i%3 == 0 || $i==0) {
                            echo '<section class="more-blog category-blog"><div class="more-blog--wrapper">';
                        }
                        include locate_template('template-parts/content-excerpt.php');

                        if ($i%3 == 2 || $i == 2) {
                            echo '</div></section>';
                        }
                        $i++;
                    endwhile;?>
                </div>
                <?php } else { ?>
                <div class="category-posts category-posts--mobile">
                    <?php while ( have_posts() ) : the_post();
                        if ($j % 2 == 0) { ?>
                            <section class="more-blog">
                                <div class="more-blog--wrapper">
                        <?php }
                        include locate_template('template-parts/content-excerpt.php');

                        if ($j % 2 == 1) { ?>
                            </div>
                        </section>
                        <?php }
                        $j++;
                    endwhile; ?>
                </div>

                <?php }
            }?>
            <?php Wacoal_Paging_nav();?>
        </div>

        <?php
        $recent_posts = Wacoal_Query_posts(
            array(
                'post_type' => array('post'),
                'category__not_in' => $current_cat_id,
                'posts_per_page' => 3,
                'offset' => 0,
                'orderby' => 'post_date',
                'order' => 'DESC',
                'post_status'=>'publish'
            )
        );

        $current_args = array(
            'post_type' => 'post',
            'category__not_in' => $current_cat_id,
            'posts_per_page' => -1,
            'offset' => 0,
            'orderby' => 'post_date',
            'order' => 'DESC',
            'post_status'=>'publish'
        );

        $output_the_query = new WP_Query($current_args);
        $counts= $output_the_query->post_count;

        if(!empty($recent_posts)) :
            include locate_template('template-parts/more-from-blog.php');

        endif;
        ?>

    </main>
</div>

<?php
Wacoal_Page_Entry_bottom();

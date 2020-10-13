<?php
/**
 * Search template file
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

Wacoal_Page_Entry_top('');
?>

    <section id="primary" class="content-area">
        <main id="main" class="site-main">

        <?php if (have_posts() ) : ?>

            <header class="page-header">
                <h1 class="page-title">
            <?php
            /* translators: %s: search query. */
            printf(esc_html__('Search Results for: %s', 'wacoal'), '<span>' . get_search_query() . '</span>');
            ?>
                </h1>
            </header><!-- .page-header -->

            <?php
            /* Start the Loop */
            while ( have_posts() ) :
                the_post();

                /**
                 * Run the loop for the search to output the results.
                 * If you want to overload this in a child theme then include a file
                 * called content-search.php and that will be used instead.
                 */
                get_template_part('template-parts/content', 'search');

            endwhile;

            the_posts_navigation();

        else :

            get_template_part('template-parts/content', 'none');

        endif;
        ?>

        </main><!-- #main -->
    </section><!-- #primary -->

<?php
Wacoal_Page_Entry_bottom();

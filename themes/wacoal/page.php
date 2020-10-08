<?php
wacoal_page_entry_top('');
$recent_posts = Wacoal_Query_posts(
    array(
        'post_type' => array('post'),
        'post__not_in' => array($post->ID),
        'posts_per_page' => 3,
        'offset' => 0,
        'orderby' => 'post_date',
        'order' => 'DESC',
        'post_status'=>'publish'
    )
);
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();
            include locate_template('template-parts/content-page.php');


		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
wacoal_page_entry_bottom();

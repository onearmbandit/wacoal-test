<?php
/**
 * Single post to collect all data
 *
 * @package Wacoal
 */

wacoal_page_entry_top( '' );
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		while ( have_posts() ) :
			the_post();

			get_template_part( 'template-parts/content', 'post' );


		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
wacoal_page_entry_bottom();

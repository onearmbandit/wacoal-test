<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wacoal
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php

	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php
			$wacoal_comment_count = get_comments_number();
			if ( '1' === $wacoal_comment_count ) {
				printf(
					/* translators: 1: title. */
					esc_html__( 'One thought on &ldquo;%1$s&rdquo;', 'wacoal' ),
					'<span>' . get_the_title() . '</span>' // phpcs:ignore
				);
			} else {
				printf(
					/* translators: 1: comment count number, 2: title. */
					esc_html( _nx( '%1$s thought on &ldquo;%2$s&rdquo;', '%1$s thoughts on &ldquo;%2$s&rdquo;', $wacoal_comment_count, 'comments title', 'wacoal' ) ),
					number_format_i18n( $wacoal_comment_count ), // phpcs:ignore
					'<span>' . get_the_title() . '</span>' // phpcs:ignore
				);
			}
			?>
		</h2><!-- .comments-title -->

		<?php the_comments_navigation(); ?>

		<ol class="comment-list">
			<?php
			wp_list_comments( array(
				'style'      => 'ol',
				'short_ping' => true,
			) );
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_navigation();


		if ( ! comments_open() ) :
			?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'wacoal' ); ?></p>
			<?php
		endif;

	endif;

	comment_form();
	?>

</div><!-- #comments -->

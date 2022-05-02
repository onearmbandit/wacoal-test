<?php
/**
 * Btemptd: Block Patterns
 */

/**
 * Registers block patterns and categories.
 *
 * @return void
 */
function Btemptd_register_block_patterns() {
	$block_pattern_categories = array(
		'btemptd' => array( 'label' => __( 'Btemptd Patterns', 'btemptd' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @param array[] $block_pattern_categories {
	 *     An associative array of block pattern categories, keyed by category name.
	 *
	 *     @type array[] $properties {
	 *         An array of block category properties.
	 *
	 *         @type string $label A human-readable label for the pattern category.
	 *     }
	 * }
	 */

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties );
		}
	}

	$block_patterns = array(
		'subheading-description-body-intro-full',
		'subheading-description-body-intro-center-block',
		'subheading-description-body-intro-bold-content',
		'left-image-text',
		'right-image-text',
		'image-text-image',
		'button-block',
		'image-quote-button-left',
		'image-quote-button-right',
		'customer-review',
		'vertical-video-image',
		'vertical-video',
		'full-video',
		'left-image-text-colorblock',
		'right-image-text-colorblock',
		'list-left-image-text-hover-box',
		'list-right-image-text-hover-box',
		'body-outro-paragraph',
		'text-hover-box',
		'image-full-bleed',
		'product-gallery',
		'list-left-image-italic-title-subhead-body',
		'list-right-image-italic-title-subhead-body',
		'banner-large',
		'banner-medium',
		'banner-small',
		'image-body',
		'numbered-image-left-text',
		'numbered-image-right-text'
	);

	/**
	 * Filters the theme block patterns.
	 *
	 * @since Twenty Twenty-Two 1.0
	 *
	 * @param array $block_patterns List of block patterns by name.
	 */

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/includes/block-patterns/patterns/' . $block_pattern . '.php' );

		register_block_pattern(
			'btemptd/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'Btemptd_register_block_patterns', 9 );

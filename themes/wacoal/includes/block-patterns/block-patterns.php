<?php
/**
 * Wacoal: Block Patterns
 */

/**
 * Registers block patterns and categories.
 *
 * @return void
 */
function Wacoal_register_block_patterns() {
	$block_pattern_categories = array(
		'wacoal' => array( 'label' => __( 'Wacoal', 'wacoal' ) ),
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
		'footer-default',
		'footer-dark',
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
			'wacoal/' . $block_pattern,
			require $pattern_file
		);
	}
}
add_action( 'init', 'Wacoal_register_block_patterns', 9 );

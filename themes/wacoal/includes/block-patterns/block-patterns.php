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
		'wacoal' => array( 'label' => __( 'Wacoal Patterns', 'wacoal' ) ),
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
		'article-header',
		'body-intro',
		'list-text-left-image',
		'list-text-right-image',
		'customer-review',
		'video-vertical-quote',
		'video-vertical-image',
		'video-horizontal',
		'link-button',
		'conclusion-summary',
		'list-text-left-image-tip',
		'list-text-right-image-tip',
		'product-gallery',
		'quote-image',
		'quote-timeline',
		'quote-progressbar',
		'checklist',
		'list-title-body-image-bullets',
		'list-number-title-subhead-copy',
		'list-title-statement-body-left-image',
		'list-title-statement-body-right-image',
		'image-gallery-full-bleed',
		'subhead-description',
		'benton-text-left-image',
		'benton-text-right-image',
		'questions-answer-left-image',
		'questions-answer-right-image',
		'questions-answer',
		'image-full-bleed',
		'timeline',
		'list-numbered-center-text',
		'list-numbered-right-text',
		'list-numbered-left-text',
		'myth-list-numbered-left-text',
		'myth-list-numbered-right-text',
		'reminder',
		'tip',
		'list-left-image-title-button',
		'list-right-image-title-button',
		'banner-large-image',
		'banner-medium-image',
		'banner-small-image',
		'image-medium',
		'list-benton-title-button-bordered-left-image',
		'list-benton-title-button-bordered-right-image'
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

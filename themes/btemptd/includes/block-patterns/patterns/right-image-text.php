<?php
/**
 * Right Image + Text
 */
return array(
	'title'      => __( 'Right Image + Text', 'btemptd' ),
	'categories' => array( 'btemptd' ),
	'blockTypes' => array( 'core/template-part/text' ),
	'content'    => '<!-- wp:group {"tagName":"section","className":"list-text-image"} -->
	<section class="wp-block-group list-text-image"><!-- wp:columns {"verticalAlignment":"center","className":"list-text-image\u002d\u002dwrapper img-right"} -->
	<div class="wp-block-columns are-vertically-aligned-center list-text-image--wrapper img-right"><!-- wp:column {"verticalAlignment":"center","className":"ml-0"} -->
	<div class="wp-block-column is-vertically-aligned-center ml-0"><!-- wp:group {"className":"list-text-image\u002d\u002dcontent"} -->
	<div class="wp-block-group list-text-image--content"><!-- wp:heading {"className":"title"} -->
	<h2 class="title" id="image-text-left-right-left-image">Image + Text (Left &amp; Right) – Left Image</h2>
	<!-- /wp:heading -->

	<!-- wp:paragraph {"className":"content"} -->
	<p class="content">A hands-down cult favorite at Wacoal HQ, Body Base® is all about solutions—and we love it for that. It’s lightweight, smoothing, and helps clothing skim your body. Think of it as a supportive hybrid between panties and shapewear—only it’s not constricting. We truly cannot get enough of this style.</p>
	<!-- /wp:paragraph -->

	<!-- wp:buttons {"className":"button-block"} -->
	<div class="wp-block-buttons button-block"><!-- wp:button {"style":{"border":{"radius":"0px"}},"className":"block-btn"} -->
	<div class="wp-block-button block-btn"><a class="wp-block-button__link" style="border-radius:0px">SHOP NOW</a></div>
	<!-- /wp:button --></div>
	<!-- /wp:buttons --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center"} -->
	<div class="wp-block-column is-vertically-aligned-center"><!-- wp:image {"sizeSlug":"large","linkDestination":"none","className":"image-name"} -->
	<figure class="wp-block-image size-large is-resized image-name"><img src="https://btemptd.wacoal-america.com/blog/wp-content/themes/btemptd/assets/images/pattern-images/right-image-text.jpeg" alt=""/></figure>
	<!-- /wp:image -->

	<!-- wp:paragraph {"className":"image-name"} -->
	<p class="image-name">LOREM IPSUM DOLOR SIT AMET</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></section>
	<!-- /wp:group -->',
);

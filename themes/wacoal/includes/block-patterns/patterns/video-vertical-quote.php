<?php
/**
 * Video Vertical with Quote
 */
return array(
	'title'      => __( 'Video Vertical with Quote', 'wacoal' ),
	'categories' => array( 'wacoal' ),
	'blockTypes' => array( 'core/template-part/text' ),
	'content'    => '<!-- wp:group {"tagName":"section","className":"video-image\u002d\u002dwrapper"} -->
	<section class="wp-block-group"><!-- wp:columns -->
	<div class="wp-block-columns video-image--wrapper"><!-- wp:column {"className":"video-image\u002d\u002dwrapper__left"} -->
	<div class="wp-block-column video-image--wrapper__left"><!-- wp:group -->
	<div class="wp-block-group"><!-- wp:embed {"url":"https://www.youtube.com/embed/4QCxwSEuHYg","type":"rich","providerNameSlug":"embed-handler","responsive":true,"align":"center"} -->
	<figure class="wp-block-embed aligncenter is-type-rich is-provider-embed-handler wp-block-embed-embed-handler"><div class="wp-block-embed__wrapper">
	https://www.youtube.com/embed/4QCxwSEuHYg
	</div></figure>
	<!-- /wp:embed --></div>
	<!-- /wp:group -->

	<!-- wp:paragraph {"className":"video-caption"} -->
	<p class="video-caption">VIDEO CAPTION – LOREM IPSUM DOLOR SIT AMET,</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->

	<!-- wp:column {"className":"video-image\u002d\u002dwrapper__right"} -->
	<div class="wp-block-column video-image--wrapper__right"><!-- wp:group {"className":"product-quote\u002d\u002dwrapper"} -->
	<div class="wp-block-group product-quote--wrapper"><!-- wp:paragraph {"className":"product-quote\u002d\u002dcontent"} -->
	<p class="product-quote--content">Lorem ipsum dolor sit amet, consectetur adipiscing elit,</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:group --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></section>
	<!-- /wp:group -->',
);

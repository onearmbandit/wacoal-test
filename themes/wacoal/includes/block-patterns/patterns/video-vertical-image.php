<?php
/**
 * Video Vertical with image
 */
return array(
	'title'      => __( 'Video Vertical with image', 'wacoal' ),
	'categories' => array( 'text' ),
	'blockTypes' => array( 'core/template-part/text' ),
	'content'    => '<!-- wp:group {"tagName":"section","className":"video-image\u002d\u002dwrapper"} -->
	<section class="wp-block-group"><!-- wp:columns {"verticalAlignment":"center"} -->
	<div class="wp-block-columns video-image--wrapper are-vertically-aligned-center"><!-- wp:column {"verticalAlignment":"center","className":"video-image\u002d\u002dwrapper__left"} -->
	<div class="wp-block-column is-vertically-aligned-center video-image--wrapper__left"><!-- wp:embed {"url":"https://www.youtube.com/embed/4QCxwSEuHYg","type":"rich","providerNameSlug":"embed-handler","responsive":true,"align":"center","className":"wp-embed-aspect-16-9 wp-has-aspect-ratio"} -->
	<figure class="wp-block-embed aligncenter is-type-rich is-provider-embed-handler wp-block-embed-embed-handler wp-embed-aspect-16-9 wp-has-aspect-ratio"><div class="wp-block-embed__wrapper">
	https://www.youtube.com/embed/4QCxwSEuHYg
	</div></figure>
	<!-- /wp:embed -->

	<!-- wp:paragraph {"className":"video-caption"} -->
	<p class="video-caption">video-caVIDEO CAPTION – LOREM IPSUM DOLOR SIT AMET, CONSECTETUR ADIPISCING ELIT, SED DO EIUSMOD TEMPOR INCIDIDUNT UT LABORE ET DOLORE MAGNA ALIQUA.ption</p>
	<!-- /wp:paragraph --></div>
	<!-- /wp:column -->

	<!-- wp:column {"verticalAlignment":"center","className":"video-image\u002d\u002dwrapper__right"} -->
	<div class="wp-block-column is-vertically-aligned-center video-image--wrapper__right"><!-- wp:image {"align":"center","id":188,"sizeSlug":"full","linkDestination":"none"} -->
	<div class="wp-block-image"><figure class="aligncenter size-full"><img src="https://blog.wacoal-america.mark4.cetxlabs.com/wp-content/uploads/2020/10/blog-img-1.png" alt="" class="wp-image-188"/><figcaption>LOREM IPSUM DOLOR SIT AMET</figcaption></figure></div>
	<!-- /wp:image --></div>
	<!-- /wp:column --></div>
	<!-- /wp:columns --></section>
	<!-- /wp:group -->',
);

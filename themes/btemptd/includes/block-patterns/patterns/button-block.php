<?php
/**
 * Button Block
 */
return array(
	'title'      => __( 'Button Block', 'btemptd' ),
	'categories' => array( 'buttons' ),
	'blockTypes' => array( 'core/template-part/text' ),
	'content'    => '<!-- wp:group {"tagName":"section","className":"button-block"} -->
 <section class="wp-block-group button-block"><!-- wp:buttons {"className":"button-block\u002d\u002dwrapper","layout":{"type":"flex","justifyContent":"center"}} -->
 <div class="wp-block-buttons button-block--wrapper"><!-- wp:button {"style":{"border":{"radius":"0px"}},"className":"block-btn"} -->
 <div class="wp-block-button block-btn"><a class="wp-block-button__link" href="" style="border-radius:0px">Button Block</a></div>
 <!-- /wp:button --></div>
 <!-- /wp:buttons --></section>
 <!-- /wp:group -->',
);

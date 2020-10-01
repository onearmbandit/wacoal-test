<?php
/**
 * HTML for question answer block
 *
 * @package Wacoal
 */

// var_dump($block_fields);

foreach ($block_fields as $block_field ) { ?>
    <div class="featured-box--content">
        <h5 class="featured-box--content__subtitle">Q: <?php echo esc_attr($block_field['question_text']);?></h5>
        <p class="featured-box--content__title"><?php echo wp_kses_post($block_field['answer_text']);?></p>
    </div>
            <?php } ?>

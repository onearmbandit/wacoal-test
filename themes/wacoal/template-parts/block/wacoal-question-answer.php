<?php
/**
 * HTML for question answer block
 *
 * @package Wacoal
 */

// var_dump($block_fields);

foreach ($block_fields as $block_field ) { ?>
    <div class="column">
        <div class="row">
        <p class="featured-box--content__subtitle"><span style="font-weight:700;">Q:</span> <?php echo esc_attr($block_field['question_text']);?></p>
        <p class="featured-box--content__title"><?php echo wp_kses_post($block_field['answer_text']);?></p>
    </div>
    </div>
            <?php } ?>

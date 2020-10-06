<?php
/**
 * HTML for question answer block
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

if ($block_image_id && !empty($block_image_id)) {
    ?>
    <section class="article-questions even-sequence">
        <div class="article-questions--wrapper">
            <div class="article-questions--content">
                <?php foreach ($block_qna as $qna ) {  ?>
                    <div class="article-questions--que">
                        <span>Q:</span> <?php echo esc_attr($qna['question_text']);?>
                    </div>
                    <div class="article-questions--ans">
                        <?php echo wp_kses_post($qna['answer_text']);?></p>
                    </div>
                <?php } ?>
            </div>

            <div class="article-questions--image">
                <figure>
                    <img src="<?php echo esc_url($block_image_url); ?>"
                        alt="<?php echo wp_kses_post($block_image_alt); ?>" />
                    <figcaption><?php echo wp_kses_post($image_caption); ?></figcaption>
                </figure>
            </div>
        </div>
    </section>
<?php } else { ?>
    <section class="article-questions">
        <div class="article-questions--wrapper">
            <div class="article-questions--content single-column">
                <?php foreach ($block_qna as $qna ) {  ?>
                    <div class="article-questions--que">
                        <span>Q:</span> <?php echo esc_attr($qna['question_text']);?>
                    </div>
                    <div class="article-questions--ans">
                        <?php echo wp_kses_post($qna['answer_text']);?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>

<?php
/**
 * Wacoal quotes with progress bar block template.
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

?>

<section class="spacer-120"></section>

<section class="donation">
    <div class="donation--wrapper">
        <div class="donation--wrapper-left">

        <?php if($quotes_block_title && !empty($quotes_block_title)) : ?>
            <div class="title">
                <?php echo wp_kses_post($quotes_block_title); ?>
            </div>
        <?php endif; ?>

        <?php if($quotes_para_content && !empty($quotes_para_content)) : ?>
            <div class="para">
            <?php echo wp_kses_post(Wacoal_Remove_P_tag($quotes_para_content)); ?>
            </div>
        <?php endif; ?>

        <?php if($progress_bar && !empty($progress_bar)) :?>
            <ul class="timeline">
                <?php foreach ($progress_bar as $key => $bar) {
                    $progress_bar_text = $bar['progress_bar_text'];
                    ?>
                    <?php if($progress_bar_text && !empty($progress_bar_text)) : ?>
                <li class="timeline-item">
                    <div class="timeline-text first-para">
                        <?php echo wp_kses_post(Wacoal_Remove_P_tag($progress_bar_text)); ?>
                    </div>
                </li>
                    <?php endif;?>
                <?php } ?>
            </ul>
        <?php endif; ?>

        </div>
        <div class="donation--wrapper-right">
        <?php if($quotes_text_1 && !empty($quotes_text_1)) :?>
            <div class="quote">
            <?php echo wp_kses_post(Wacoal_Remove_P_tag($quotes_text_1)); ?></br>
            <?php if($person_name_1 && !empty($person_name_1)) :?>
                <span>– <?php echo wp_kses_post(Wacoal_Remove_P_tag($person_name_1)); ?></span>
            <?php endif; ?>
            </div>
        <?php endif; ?>

        <?php if($quotes_text_2 && !empty($quotes_text_2)) :?>
            <div class="quote">
            <?php echo wp_kses_post(Wacoal_Remove_P_tag($quotes_text_2)); ?></br>
            <?php if($person_name_2 && !empty($person_name_2)) :?>
                <span>– <?php echo wp_kses_post(Wacoal_Remove_P_tag($person_name_2)); ?></span>
            <?php endif; ?>
            </div>
        <?php endif; ?>

        </div>
    </div>
</section>

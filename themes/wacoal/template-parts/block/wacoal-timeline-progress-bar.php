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

<section class="donation">
    <div class="donation--wrapper">
        <div class="donation--wrapper-left only-timeline">

        <?php if($timeline_progress_bar && !empty($timeline_progress_bar)) :?>
            <ul class="timeline">
                <?php foreach ($timeline_progress_bar as $key => $bar) {
                    $progress_bar_text = $bar['progress_bar_text'];
                    ?>
                    <?php if($progress_bar_text && !empty($progress_bar_text)) : ?>
                <li class="timeline-item">
                    <div class="timeline-text first-para">
                        <?php echo wp_kses_post($progress_bar_text); ?>
                    </div>
                </li>
                    <?php endif;?>
                <?php } ?>
            </ul>
        <?php endif; ?>

        </div>
    </div>
</section>

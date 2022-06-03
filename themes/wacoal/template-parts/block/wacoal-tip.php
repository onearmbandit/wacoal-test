<?php
/**
 * Wacoal reminder block template
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

?>


<section class="reminder-note  reminder-note--center">
    <div class="reminder-note--wrapper">
        <div class="content-small">
            <?php if ($tip_title && !empty($tip_title)) { ?>
                <div class="title"><?php echo wp_kses_post($tip_title); ?></div>
            <?php } ?>
            <?php if($tip_text && !empty($tip_text)) { ?>
            <div class="content"><?php echo wp_kses_post($tip_text); ?></div>
            <?php } ?>
        </div>
    </div>
</section>


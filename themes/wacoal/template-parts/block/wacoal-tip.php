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



<?php if($tip_text && !empty($tip_text)) : ?>
<section class="reminder-note  reminder-note--center">
    <div class="reminder-note--wrapper">
        <div class="content-small">
            <div class="title">Tip:</div>
            <div><?php echo wp_kses_post($tip_text); ?></div>
        </div>
    </div>
</section>
<?php endif; ?>

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

<section class="spacer-120"></section>

<?php if($tip_text && !empty($tip_text)) : ?>
<section class="reminder-note">
    <div class="reminder-note--wrapper">
        <div class="content-small">
        <?php echo wp_kses_post(Wacoal_Remove_P_tag($tip_text)); ?>
        </div>
    </div>
</section>
<?php endif; ?>

<?php
/**
 * Html for subhead with description
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */
?>

<?php if($hover_box_content && !empty($hover_box_content)) :?>
<section class="text-hover-box">
    <div class="text-hover-box--wrapper">
        <div class="container">
            <?php echo wp_kses_post(Btemptd_Remove_ptag($hover_box_content));?>
        </div>
    </div>
</section>
<?php endif;?>

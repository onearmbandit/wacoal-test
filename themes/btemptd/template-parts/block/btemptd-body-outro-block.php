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

<?php if($para_content && !empty($para_content)) :?>
<section class="body-outro-para">
    <div class="body-outro-para--wrapper">
        <div class="content">
            <?php echo wp_kses_post($para_content);?>
        </div>
    </div>
</section>
<?php endif;?>

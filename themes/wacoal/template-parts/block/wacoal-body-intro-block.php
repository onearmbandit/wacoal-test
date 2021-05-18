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
<section class="body-intro">
    <div class="body-intro--wrapper">
        <div class="para">
            <?php echo Wacoal_Remove_P_tag(wp_kses_post($para_content));?>
        </div>
        <!-- <ul class="list">
            <li>Does your body temperature run hot even when it’s cold outside? Perhaps a bra in a cooling fabric is for you.</li>
            <li>Is smoothing for a streamlined silhouette a prerequisite? We have options.</li>
            <li>Do you want your shirts to have a better fit? A minimizer might be your new best friend</li>
        </ul> -->
    </div>
</section>
<?php endif;?>

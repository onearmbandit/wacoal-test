<?php
/**
 * Wacoal center paragraph block template
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

?>

<?php
if($para_content && !empty($para_content)) :
    ?>
<section class="article--para">
    <?php echo wp_kses_post($para_content);?>
</section>
    <?php
endif;
?>

<?php
/**
 * Btemptd paragraph template
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

if ($para_type == 'full_width') {
    ?>
     <div class="article-header--para">
        <?php echo wp_kses_post($content);?>
    </div>
<?php }
if ($para_type == 'center_width') { ?>
    <div class="article-header--para">
        <?php echo wp_kses_post($content);?>
    </div>
<?php }
?>


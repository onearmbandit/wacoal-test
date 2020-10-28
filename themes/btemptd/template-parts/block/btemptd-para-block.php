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

if ($para_type == 'full_width') :
    ?>
     <section class="article--para">
        <?php echo wp_kses_post($content);?>
    </section>
<?php endif;
if ($para_type == 'center_width') : ?>
    <section class="article--para-half">
        <?php echo wp_kses_post($content);?>
    </section>
<?php endif;
if($para_type == 'bold_content') :
    ?>
<section class="article-para-bold">
    <?php echo wp_kses_post($content);?>
</section>
    <?php
endif;
?>

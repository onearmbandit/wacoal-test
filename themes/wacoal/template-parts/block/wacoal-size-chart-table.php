<?php
/**
 * Wacoal size chart table template
 * php version 7.4
 *
 * @category Wacoal
 * @package  Wacoal
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Wacoal
 */

?>

<section class="article-questions odd-sequence" style="text-align:center;">
    <div class="">
        <?php
        foreach ($chart_images as $chart) {

            $chart_image_id     = $chart['chart_image'];
            $chart_image_array  = wp_get_attachment_image_src($chart_image_id, 'full');
            $chart_image_alt    = wacoal_get_image_alt($chart_image_id, 'Block Image');
            $chart_image_url    = Wacoal_Get_image($chart_image_array);
            ?>
        <div class="">
            <figure>
                <?php if ($chart_image_id && !empty($chart_image_id)) {
                    ?>
                <img src="<?php echo esc_url($chart_image_url); ?>"
                    alt="<?php echo wp_kses_post($chart_image_alt); ?>" />
                    <?php
                } ?>
            </figure>
        </div>
            <?php
        }
        ?>
    </div>
</section>

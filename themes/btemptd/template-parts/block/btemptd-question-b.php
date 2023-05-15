<?php
/**
 * Btemptd Questions B Template
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

if ($list_data && !empty($list_data)) {
 $list_position      = !empty($img_position) ? $img_position : 'right';
?>

<!-- Question Answer structure -->
<section class="question-set-one">
    <div class="question-set-one--wrapper image-of-question <?php  if($list_position == 'left') { echo "left-image"; }?>">
       <div class="left-column">
        <?php
        $row_index = get_row_index();
        foreach ($list_data as $list) {
            $list_header      = $list['title'];
            $list_description = $list['description'];
           ?>
                <div class="question-box">
                    <span class="number"><?php echo esc_attr($row_index); ?></span>
                    <div class="question-answer">
                        <?php if ($list_header && !empty($list_header)) { ?>
                            <h5 class="question"><?php echo wp_kses_post($list_header); ?></h5>
                        <?php }
                            if ($list_description && !empty($list_description)) {
                            ?>
                        <span class="answer">
                            <?php echo wp_kses_post($list_description); ?>
                        </span>
                            <?php
                        } ?>
                    </div>
                </div>
         <?php
           $row_index++;
         } ?>
       </div>
       <div class="right-column right-column--image">
           <?php
             $block_image_id     = $image_id;
             if ($block_image_id && !empty($block_image_id)) {
              $block_image_array = wp_get_attachment_image_src($block_image_id, 'full');

              $block_image_alt   = Btemptd_Get_Image_alt($block_image_id, 'Block Image');
              $block_image_url   = Btemptd_Get_image($block_image_array);
          }
           ?>
            <div class="question-image">
                <img src="<?php echo esc_url($block_image_url); ?>" alt=" <?php echo wp_kses_post($block_image_alt); ?>">
            </div>
        </div>
    </div>
</section>

<?php
}
?>
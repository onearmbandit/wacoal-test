<?php
/**
 * Btemptd Questions A Template
 * php version 7.4
 *
 * @category Btemptd
 * @package  Btemptd
 * @author   Cemtrexlabs <hello@cemtrexlabs.com>
 * @license  https://cemtrexlabs.com 1.0
 * @link     Btemptd
 */

if ($list_data && !empty($list_data)) {
?>
<!-- Question Answer structure -->
<section class="question-set-one">
    <div class="question-set-one--wrapper">
       <div class="left-column">
        <?php
        $rowcount = count($list_data);
        $row_index = get_row_index();
        foreach ($list_data as $list) {
            $list_header      = $list['list_title'];
            $list_description = $list['list_description'];
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

           if ($row_index == ceil($rowcount / 2)) {
                //we have reached the mid-point, let's close the first DIV
                echo "</div><div class='right-column'>";
           }
           $row_index++;
         } ?>
       </div>
    </div>
</section>
<?php
}
?>
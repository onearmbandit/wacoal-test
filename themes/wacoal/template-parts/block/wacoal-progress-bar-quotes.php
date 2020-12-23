<?php
/**
 * Wacoal quotes with progress bar block template.
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

<section class="donation">
    <div class="donation--wrapper">
        <div class="donation--wrapper-left">

        <?php if($first_para_title && !empty($first_para_title)) : ?>
            <div class="title">
            <?php echo wp_kses_post($first_para_title); ?>
            </div>
        <?php endif;?>

        <?php if($first_para_content && !empty($first_para_content)) : ?>
            <div class="para">
            <?php echo wp_kses_post(Wacoal_Remove_P_tag($first_para_content)); ?>
            </div>
        <?php endif;?>

        <?php if($progress_bar && !empty($progress_bar)) :?>
            <ul class="timeline">
                <?php foreach ($progress_bar as $key => $bar) {
                    $progress_bar_text = $bar['progress_bar_text'];
                    ?>
                    <?php if($progress_bar_text && !empty($progress_bar_text)) : ?>
                <li class="timeline-item">
                    <div class="timeline-text first-para">
                        <?php echo wp_kses_post(Wacoal_Remove_P_tag($progress_bar_text)); ?>
                    </div>
                </li>
                    <?php endif;?>
                <?php } ?>
            </ul>
        <?php endif; ?>

        <?php if($second_para_title && !empty($second_para_title)) : ?>
            <div class="title">
            <?php echo wp_kses_post($second_para_title); ?>
            </div>
        <?php endif;?>

        <?php if($second_para_content && !empty($second_para_content)) : ?>
            <div class="para">
            <?php echo wp_kses_post(Wacoal_Remove_P_tag($second_para_content)); ?>
            </div>
        <?php endif;?>

        </div>
        <div class="donation--wrapper-right">

        <?php foreach ($quotes_data as $key => $quotes) {
            $quotes_text = $quotes['quotes_text'];
            $quotes_person = $quotes['quotes_person_name'];
            ?>

            <?php if($quotes_text && !empty($quotes_text)) :?>
            <div class="quote">
                <?php echo wp_kses_post(Wacoal_Remove_P_tag($quotes_text)); ?></br>
                <?php if($quotes_person && !empty($quotes_person)) :?>
                <span>– <?php echo wp_kses_post(Wacoal_Remove_P_tag($quotes_person)); ?></span>
                <?php endif; ?>
            </div>
            <?php endif; ?>

        <?php }?>

        </div>
    </div>
</section>

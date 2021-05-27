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

<!-- <section class="spacer-120"></section> -->

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
            <?php echo wp_kses_post($first_para_content); ?>
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
                        <?php echo wp_kses_post($progress_bar_text); ?>
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
            <?php echo wp_kses_post($second_para_content); ?>
            </div>
        <?php endif;?>

        </div>
        <div class="donation--wrapper-right">

        <?php foreach ($quotes_data as $key => $quotes) {
            $quotes_type = $quotes['select_quotes_data_type'];
            if ($quotes_type == 'quotes_text') {
                $quotes_text = $quotes['quotes_text'];
                $quotes_person = $quotes['quotes_person_name'];
            }
            if ($quotes_type == 'quotes_image') {
                $image_id = $quotes['quotes_image'];
                $img_link = $quotes['image_link'];
                $new_tab = $quotes['open_link_in_new_tab'];

                if (! empty($image_id) && $image_id ) {
                    $image_array = wp_get_attachment_image_src($image_id, 'full');
                    $image_alt   = Wacoal_Get_Image_alt($image_id, 'Block Image');
                    $image_url   = Wacoal_Get_image($image_array);
                }
            }
            ?>

            <?php if($quotes_type == 'quotes_text' && !empty($quotes_text)) :?>
            <div class="quote">
                <div class="quote-wrapper">
                    <?php echo wp_kses_post($quotes_text); ?></br>
                    <?php if($quotes_person && !empty($quotes_person)) :?>
                    <span>– <?php echo wp_kses_post(Wacoal_Remove_P_tag($quotes_person)); ?></span>
                </div>
                    <?php endif; ?>
            </div>
            <?php endif; ?>
            <?php if($quotes_type == 'quotes_image' && !empty($image_id)) :?>
                <?php if(!empty($img_link)) :?>
                    <a href="<?php echo esc_url($img_link);?>" <?php if($new_tab == true) : echo "target='_blank'";
                   endif;?>>
                <?php endif;?>
            <div class="quote-image">
                <div class="quote-wrapper">
                    <img src="<?php echo  esc_url($image_url); ?>" />
                </div>
            </div>
                <?php if(!empty($img_link)) :?>
                </a>
                <?php endif;?>
            <?php endif; ?>
        <?php }?>
        </div>
    </div>
</section>

<footer class="footer-section">
    <div class="footer-wrapper">
        <div class="footer-wrapper--left">

            <?php dynamic_sidebar('footer-1');?>
            <?php dynamic_sidebar('footer-2');?>
            <?php dynamic_sidebar('footer-3');?>
            <?php dynamic_sidebar('footer-4');?>
        </div>
        <div class="footer-wrapper--right">
            <div class="footer-images">
                <iframe src="https://cdn.lightwidget.com/widgets/146a63ddcf49509fb649e7c4eef76e8c.html" scrolling="no" allowtransparency="true" class="lightwidget-widget" style="width: 100%; border: 0px; overflow: hidden; height: 81.9px;"></iframe>
            </div>
            <?php

            $copyright_value = get_field( 'copyright_text', 'options' );
            $social_share = get_field( 'social_share', 'options' );



            ?>

            <div class="footer-social">
                <?php foreach ($social_share as $key => $value){  ?>
                   <a href="<?php echo esc_url($value['link']['url']);?>" class="footer-social--icon">
                    <img src="<?php echo esc_url($value['icon']['url']);?>" alt="<?php echo esc_attr($value['icon']['alt']);?>" />
                    </a>
                <?php } ?>

            </div>
        </div>
    </div>

    <div class="footer-wrapper">
        <div class="footer-wrapper--copyright">
            <?php echo esc_html($copyright_value);?>
        </div>
    </div>
</footer>

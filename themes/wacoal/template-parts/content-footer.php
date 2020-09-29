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
                <img class="footer-images--img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/footer-img-1.png" alt="Wacoal Image 1" />
                <img class="footer-images--img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/footer-img-2.png" alt="Wacoal Image 2" />
                <img class="footer-images--img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/footer-img-3.png" alt="Wacoal Image 3" />
                <img class="footer-images--img" src="<?php echo  get_theme_file_uri(); ?>/assets/images/footer-img-4.png" alt="Wacoal Image 4" />
            </div>
            <?php

            $copyright_value = get_field( 'copyright_text', 'options' );
            $social_share = get_field( 'social_share', 'options' );



            ?>

            <div class="footer-social">
                <?php foreach ($social_share as $key => $value){  ?>
                   <a href="<?php echo $value['link']['url'];?>" class="footer-social--icon">
                    <img src="<?php echo $value['icon']['url'];?>" alt="<?php echo $value['icon']['alt'];?>" />
                    </a>
                <?php } ?>

            </div>
        </div>
    </div>

    <div class="footer-wrapper">
        <div class="footer-wrapper--copyright">
            <?php echo $copyright_value;?>
        </div>
    </div>
</footer>

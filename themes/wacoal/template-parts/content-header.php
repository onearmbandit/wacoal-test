<?php  $logo = get_field( 'header_logo', 'options' );?>
<header class="header-section">
    <a href="<?php echo esc_url(home_url());?>"><img class="header-section--logo" src="<?php echo esc_url($logo);?>" alt="Wacoal" /></a>
</header>

    <nav class="header-navigation">
    <?php $args=array(
        'theme_location' => 'primary',
        'menu' =>'Header',
        'container' => false ,
        'items_wrap' => '<ul id="%1$s" class="header-navigation--ul">%3$s</ul>',

    );
    wp_nav_menu($args); ?>

    </nav>

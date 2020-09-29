<?php  $logo = get_field( 'header_logo', 'options' );?>
<header class="header-section">
    <a href="<?php echo home_url();?>"><img class="header-section--logo" src="<?php echo $logo;?>" alt="Wacoal" /></a>
</header>

    <nav class="header-navigation">
    <?php $args=array(
        'container' => false ,
        'items_wrap' => '<ul id="%1$s" class="header-navigation--ul">%3$s</ul>',

    );
    wp_nav_menu($args); ?>

    </nav>

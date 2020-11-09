<!DOCTYPE html>

<html <?php language_attributes(); ?> class="no-js">

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <title><?php wp_title(''); ?>
    </title>
    <link rel="shortcut icon" href="<?php echo esc_url( esc_url(THEMEURI) ); ?>/assets/images/favicon.png"
        type="image/x-icon" />

    <?php if (is_singular() && pings_open(get_queried_object())) : ?>
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
    <?php endif; ?>
    <?php wp_head(); ?>

    <script>
    var $ = jQuery.noConflict();
    dataLayer = [];
    </script>
</head>

<body <?php body_class('transparent-nav'); ?>>

<?php
/**
 * Hi there, VIP dev!
 *
 * This is where you put things you'd usually put in wp-config.php. Don't worry about database settings
 * and such, we've taken care of that for you. This is just for if you need to define an API key or something
 * of that nature.
 *
 * WARNING: This file is loaded very early (immediately after `wp-config.php`), which means that most WordPress APIs,
 *   classes, and functions are not available. The code below should be limited to pure PHP.
 *
 * @see https://vip.wordpress.com/documentation/vip-go/understanding-your-vip-go-codebase/
 *
 * Happy Coding!
 *
 * - The WordPress.com VIP Team
 *
 * @package wacoal
 **/

define('WPCOM_VIP_USE_JETPACK_PHOTON', true);

// refer https://wpvip.com/documentation/setting-up-redirects-on-vip-go/#vip-go-domain-redirects-in-vip-config-php

$http_host        = $_SERVER['HTTP_HOST'];   //phpcs:ignore
$request_uri      = $_SERVER['REQUEST_URI']; //phpcs:ignore

$redirect_domains = [
    'www.wacoal-america.com'   => [
        'wacoal-america.com',
    ],
    'www.wacoal.ca'   => [
        'wacoal.ca',
    ],
];


// Safety checks for redirection:
// 1. Don't redirect for '/cache-healthcheck?' or monitoring will break
// 2. Don't redirect in WP CLI context.
foreach ( $redirect_domains as $redirect_to => $redirect_from_domains ) {
    if ('/cache-healthcheck?' !== $request_uri  // safety
        && ! ( defined('WP_CLI') && WP_CLI )  // safety
        && $redirect_to !== $http_host
        && in_array($http_host, $redirect_from_domains, true)
    ) {
        header('Location: https://' . $redirect_to . $request_uri, true, 301);
        exit;
    }
}

/*$proxy_lib = ABSPATH . '/wp-content/mu-plugins/lib/proxy/ip-forward.php';
$forwarded_ips = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);
$forwarded_ips = array_map('trim', $forwarded_ips);
if ($forwarded_ips[0] && ! empty($_SERVER['REMOTE_ADDR']) && file_exists($proxy_lib) ) {
    include_once __DIR__ . '/remote-proxy-ips.php';
    include_once $proxy_lib;

    Automattic\VIP\Proxy\fix_remote_address(
        $_SERVER['REMOTE_ADDR'],
        $forwarded_ips[0],
        MY_PROXY_IP_ALLOW_LIST
    );
}*/

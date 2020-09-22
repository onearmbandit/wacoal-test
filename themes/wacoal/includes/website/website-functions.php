<?php

// Common Function File Include
include THEMEPATH . '/includes/website/common/website-common-function.php';


if( class_exists('acf') ) {

// ACF Theme options includes
require_once THEMEPATH . '/includes/website/acf-settings/acf-theme-options.php';

// ACF fields include
require_once THEMEPATH . '/includes/website/acf-settings/acf-group-functions.php';

}

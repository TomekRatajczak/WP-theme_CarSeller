<?php

if(!defined('DREAMAUTO_THEME_DIR')) {
	
	define('DREAMAUTO_THEME_DIR', get_theme_root().'/'.get_template().'/');
}	

if(!defined('DREAMAUTO_THEME_URL')) {
	define('DREAMAUTO_THEME_URL', WP_CONTENT_URL.'/themes/'.get_template().'/');
}

require_once DREAMAUTO_THEME_DIR.'libs/posttypes.php';
require_once DREAMAUTO_THEME_DIR.'libs/utils.php';


?>






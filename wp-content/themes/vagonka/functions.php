<?php

/***
 * Autoload custom classes and namespaces
 */

$autoload_path = ABSPATH . "/vendor/autoload.php";
if (file_exists($autoload_path)) :
    require $autoload_path;
endif;

/***
 * Define variables to be used across the project
 */

if (! defined('THEME_DIR')) :
    define('THEME_DIR', get_stylesheet_directory());
endif;

if (! defined('THEME_DIR_URI')) :
    define('THEME_DIR_URI', get_stylesheet_directory_uri());
endif;

if (! defined('INC_DIR')) :
    define('INC_DIR', get_stylesheet_directory() . DIRECTORY_SEPARATOR . "inc");
endif;

if (! defined('DOMAIN_TEXT')) :
    define('JS_DOMAIN_TEXT', 'vagonka');
endif;

if (! defined('JS_VERSION')) :
    define('JS_VERSION', 2020);
endif;

/***
 * Add ACF fields registration
 */
$acf_fields_path = INC_DIR . "/admin/admin-functions.php";
if (file_exists($acf_fields_path)) :
    include_once $acf_fields_path;
endif;

/***
 * Init Site Properties
 */
new \Admin\ThemeInit();

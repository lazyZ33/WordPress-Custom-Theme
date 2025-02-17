<?php
/**
* Theme Functions
*
* @package Custom Theme
*/


//Include autoloader file to load all classes at once without including them one by one.
if(!defined('CUSTOM_THEME_DIR_PATH')){
    define('CUSTOM_THEME_DIR_PATH', untrailingslashit( get_template_directory()));
}

//Include the file to define the constants if not already defined in the theme files.
if(!defined('CUSTOM_THEME_DIR_URI')){
    define('CUSTOM_THEME_DIR_URI', untrailingslashit( get_template_directory_uri()));
}

require_once CUSTOM_THEME_DIR_PATH . '/inc/helpers/autoloader.php';


//Include the files to load the classes and functions from the inc folder of the theme.
function custom_theme_get_theme_instance(){
    \CUSTOM_THEME\Inc\CUSTOM_THEME::get_instance();
}
custom_theme_get_theme_instance();


?>
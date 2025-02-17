<?php

/**
 * Bootstrap the theme
 *
 * @package Custom Theme
 */

 namespace CUSTOM_THEME\Inc;

 use CUSTOM_THEME\Inc\Traits\Singleton;
 
 class Custom_Theme {
     use Singleton;

    protected function __construct() {
        // Load classes

        Assets::get_instance();

        $this->setup_hooks();
    }

    protected function setup_hooks() {
        /*
         * Actions
         */
        
    }
}
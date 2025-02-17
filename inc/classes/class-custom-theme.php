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
        add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );  
    }
    public function setup_theme() {
        // Enable Website Title be dynamically added through WordPress (Apprearance > Customize > Site Identity)
        add_theme_support('title-tag');
    }
}
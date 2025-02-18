<?php
/**
* Register Menus
*
* @package Custom Theme
*/

namespace CUSTOM_THEME\Inc;

use CUSTOM_THEME\Inc\Traits\Singleton;

class Menus {
	use Singleton;
    
    protected function __construct() {
        // Load classes
        $this->set_hooks();
    }
    protected function set_hooks() {
        /*
         * Actions
         */
        add_action('init', [$this, 'register_menus']);
    }

    public function register_menus(){
        register_nav_menus([
            'custom-theme-header-menu' => esc_html__('Header Menu', 'custom-theme'),
            'custom-theme-footer-menu' => esc_html__('Footer Menu', 'custom-theme'),
        ]);
    }

}
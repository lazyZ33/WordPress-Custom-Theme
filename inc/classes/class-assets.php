<?php
/**
* Enqueue Theme Assets
*
* @package Custom Theme
*/

namespace CUSTOM_THEME\Inc;

use CUSTOM_THEME\Inc\Traits\Singleton;

class Assets {
	use Singleton;
    
    protected function __construct() {
        // Load classes
        $this->set_hooks();
    }

    protected function set_hooks() {
        /*
         * Actions
         */
        add_action('wp_enqueue_scripts', [$this, 'register_styles']);
        add_action('wp_enqueue_scripts', [$this, 'register_scripts']);
    }

    public function register_styles() {
        // Register Styles.
        wp_register_style('style-css', get_stylesheet_uri(), [], filemtime(CUSTOM_THEME_DIR_PATH . '/style.css'), 'all');
        wp_register_style('bootstrap-css', CUSTOM_THEME_DIR_URI . '/assets/src/library/css/bootstrap.min.css', [], false, 'all');

        // Enqueue Styles.
        wp_enqueue_style('style-css');
        wp_enqueue_style('bootstrap-css');
    }

    public function register_scripts() {
        // Register Scripts.
        wp_register_script('popper-js', 'https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js', [], null, true);
        wp_register_script('main-js', CUSTOM_THEME_DIR_URI . '/assets/main.js', [], filemtime(CUSTOM_THEME_DIR_PATH . '/assets/main.js'), true);
        wp_register_script('bootstrap-js', CUSTOM_THEME_DIR_URI . '/assets/src/library/js/bootstrap.min.js', ['jquery'], false, true);

        // Enqueue Scripts.
        wp_enqueue_script('popper-js');
        wp_enqueue_script('main-js');
        wp_enqueue_script('bootstrap-js');
    }
}
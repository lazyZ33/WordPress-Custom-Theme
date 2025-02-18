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
        Menus::get_instance();
        $this->setup_hooks();
    }

    protected function setup_hooks() {
        /*
         * Actions
         */
        add_action( 'after_setup_theme', [ $this, 'setup_theme' ] );  
    }
    public function setup_theme() {
        // Enable Website Title to be dynamically Added/Updated through WordPress. (Appearance > Customize > Site Identity)
        add_theme_support('title-tag');

        // Enable Website Logo to be dynamically Added/Updated through WordPress. (Appearance > Customize > Site Identity > Logo)
        add_theme_support('custom-logo', [
            'header-text'          => array('site-title', 'site-description'),
            'height'               => 100,
            'width'                => 400,
            'flex-height'          => true,
            'flex-width'           => true,
            'unlink-homepage-logo' => true,
        ]);

        // Add Featured Image Option on Posts and Pages.
        add_theme_support('post-thumbnails');

        // Enable Selective Refresh for Widgets in the Customizer. (Improves live preview performance)
        add_theme_support('customize_selective_refresh_widgets');

        // Enable Automatic Feed Links for RSS Feeds. (Adds RSS feed links to the <head> section of your site)
        add_theme_support('automatic-feed-links');

        // Enable HTML5 Markup for Core Features. (Replaces older XHTML markup with modern HTML5)
        add_theme_support('html5', [
            'search-form', 
            'comment-form',
            'comment-list',
            'gallery',
            'caption',
            'style',
            'script',
        ]);

        // Add Editor Styles for the WordPress Visual Editor. (Ensures consistency between the editor and frontend styles)
        add_editor_style();

        // Enable Default Styles for WordPress Core Blocks.
        add_theme_support('wp-block-styles');

        //Gives Align Wide and Full Width for Gutenberg Blocks.
        add_theme_support('align-wide');

        //Set Global Content max-width (if not defined)
        global $content_width;
        if(!isset ($content_width)){
            $content_width = 1240;
        }
    }
}
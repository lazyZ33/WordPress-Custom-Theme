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

		// load class.
		$this->setup_hooks();
	}

	protected function setup_hooks() {

		/**
		 * Actions.
		 */
		add_action( 'init', [ $this, 'register_menus' ] );
	}

	public function register_menus() {
		register_nav_menus([
			'custom-theme-header-menu' => esc_html__( 'Header Menu', 'custom-theme' ),
			'custom-theme-footer-menu' => esc_html__( 'Footer Menu', 'custom-theme' ),
		]);
	}

	/**
	 * Get the menu id by menu location.
	 *
	 * @param string $location
	 *
	 * @return integer
	 */
	public function get_menu_id( $location ) {

		// Get all locations
		$locations = get_nav_menu_locations();

		// Get object id by location.
		$menu_id = ! empty($locations[$location]) ? $locations[$location] : '';

		return ! empty( $menu_id ) ? $menu_id : '';

	}

	/**
	 * Get all child menus that has given parent menu id.
	 *
	 * @param array   $menu_array Menu array.
	 * @param integer $parent_id Parent menu id.
	 *
	 * @return array Child menu array.
	 */
	public function get_child_menu_items( $menu_array, $parent_id ) {

		$child_menus = [];

		if ( ! empty( $menu_array ) && is_array( $menu_array ) ) {

			foreach ( $menu_array as $menu ) {
				if ( intval( $menu->menu_item_parent ) === $parent_id ) {
					array_push( $child_menus, $menu );
				}
			}
		}

		return $child_menus;
	}

}
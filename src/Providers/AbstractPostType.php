<?php
/**
 * Abstract Post Type.
 *
 * @package WPSteak
 */

declare(strict_types=1);

namespace WPSteak\Providers;

use WPSteak\Services\Labels;

/**
 * Abstract Post Type class.
 */
abstract class AbstractPostType extends AbstractHookProvider {

	use Labels\PostType;

	/**
	 * Register hooks.
	 *
	 * @return void
	 */
	public function register_hooks() {
		$this->add_action( 'init', 'register_post_type' );
	}

	/**
	 * Register Post Type.
	 *
	 * @return void
	 */
	protected function register_post_type() {
		register_post_type( $this->get_post_type(), $this->get_args() );
	}

	/**
	 * Get args for register Post Type.
	 *
	 * This is passed for the $args attribute from register_post_type function.
	 * You can use the function $this->get_labels() for a easy way making your custom labels.
	 *
	 * @return array
	 */
	abstract public function get_args() : array;

	/**
	 * Get post type.
	 *
	 * Return your Entity::POST_TYPE, for a better code reuse.
	 *
	 * @return string
	 */
	abstract public function get_post_type() : string;
}

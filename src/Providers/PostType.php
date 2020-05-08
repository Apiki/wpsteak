<?php declare(strict_types = 1);

namespace WPSteak\Providers;

use WPSteak\Services\Labels;

abstract class PostType extends HookProvider {

	use Labels\PostType;

	/**
	 * Get args for register Post Type.
	 *
	 * This is passed for the $args attribute from register_post_type function.
	 * You can use the function $this->get_labels() for a easy way making your custom labels.
	 *
	 * @return array<string>
	 */
	abstract public function get_args(): array;

	/**
	 * Get post type.
	 *
	 * Return your Entity::POST_TYPE, for a better code reuse.
	 */
	abstract public function get_post_type(): string;

	public function register_hooks(): void {
		$this->add_action( 'init', 'register_post_type' );
	}

	protected function register_post_type(): void {
		register_post_type( $this->get_post_type(), $this->get_args() );
	}

}

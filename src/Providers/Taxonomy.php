<?php declare(strict_types = 1);

namespace WPSteak\Providers;

use WPSteak\Services\Labels;

abstract class Taxonomy extends HookProvider {

	use Labels\Taxonomy;

	/**
	 * Get args for register Taxonomy.
	 *
	 * This is passed for the $args attribute from register_taxonomy function.
	 * You can use the function $this->get_labels() for a easy way making your custom labels.
	 *
	 * @return array<string>
	 */
	abstract public function get_args(): array;

	/**
	 * Return your Entity::TAXONOMY, for a better code reuse.
	 */
	abstract public function get_taxonomy(): string;

	/**
	 * Passed for $object_type param, it can be an array or a string.
	 *
	 * @return array<string>|string
	 */
	abstract public function get_object_type();

	public function register_hooks(): void {
		$this->add_action( 'init', 'register_taxonomy' );
	}

	protected function register_taxonomy(): void {
		register_taxonomy( $this->get_taxonomy(), $this->get_object_type(), $this->get_args() );
	}

}

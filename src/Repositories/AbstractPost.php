<?php
/**
 * Abstract post.
 *
 * @package WPSteak
 */

declare(strict_types=1);

namespace WPSteak\Repositories;

use WPSteak\Services\Meta\PostInterface as MetaInterface;

/**
 * Abstract post class.
 *
 * @codeCoverageIgnore
 */
abstract class AbstractPost {

	/**
	 * Meta.
	 *
	 * @var MetaInterface
	 */
	protected $meta;

	/**
	 * Construct.
	 *
	 * @param MetaInterface $meta Meta.
	 */
	public function __construct( MetaInterface $meta ) {
		$this->meta = $meta;
	}

	/**
	 * Get post.
	 *
	 * @param \WP_Post|int $post The post object or id.
	 * @return \WP_Post|null
	 */
	protected function get_post( $post ) : ?\WP_Post {
		if ( $post instanceof \WP_Post ) {
			return $post;
		}

		if ( ! is_int( $post ) ) {
			return null;
		}

		return get_post( $post );
	}

	/**
	 * Get posts.
	 *
	 * @param array $args Args.
	 * @return \WP_Post[]|integer[]
	 */
	protected function get_posts( array $args ) : array {
		return get_posts( $args );
	}
}

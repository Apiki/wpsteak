<?php
/**
 * Post.
 *
 * @package WPSteak
 */

declare(strict_types=1);

namespace WPSteak\Entities;

/**
 * Post interface.
 */
interface PostInterface extends EntityInterface {

	/**
	 * Get post.
	 *
	 * @return \WP_Post
	 */
	public function get_post() : \WP_Post;

	/**
	 * Set post.
	 *
	 * @param \WP_Post $value Post.
	 * @return self
	 */
	public function set_post( \WP_Post $value ) : self;
}

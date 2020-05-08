<?php declare(strict_types = 1);

namespace WPSteak\Repositories;

/** @codeCoverageIgnore */
abstract class Post {

	/** @param \WP_Post|int $post The post object or id. */
	protected function get_post( $post ): ?\WP_Post {
		if ( $post instanceof \WP_Post ) {
			return $post;
		}

		$result = get_post( $post );

		if ( ! $result instanceof \WP_Post ) {
			return null;
		}

		return $result;
	}

	/**
	 * @param array<string> $args Args.
	 * @return array<\WP_Post>|array<int>
	 */
	protected function get_posts( array $args ): array {
		return get_posts( $args );
	}

}

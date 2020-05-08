<?php declare(strict_types = 1);

namespace WPSteak\Entities;

abstract class Post implements IPost {

	public const POST_TYPE = 'post';

	protected \WP_Post $post;

	public function __construct( \WP_Post $post ) {
		$this->post = $post;
	}

	public function get_post(): \WP_Post {
		return $this->post;
	}

}

<?php declare(strict_types = 1);

namespace WPSteak\Entities;

interface IPost extends IEntity {

	public function get_post(): \WP_Post;

}

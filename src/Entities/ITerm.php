<?php declare(strict_types = 1);

namespace WPSteak\Entities;

interface ITerm extends IEntity {

	public function get_term(): \WP_Term;

}

<?php declare(strict_types = 1);

namespace WPSteak\Entities;

abstract class Term implements ITerm {

	public const TAXONOMY = 'category';

	protected \WP_Term $term;

	public function __construct( \WP_Term $term ) {
		$this->term = $term;
	}

	public function get_term(): \WP_Term {
		return $this->term;
	}

}

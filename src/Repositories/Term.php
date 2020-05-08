<?php declare(strict_types = 1);

namespace WPSteak\Repositories;

/** @codeCoverageIgnore */
abstract class Term {

	/** @param \WP_Term|int $term Id. */
	protected function get_term( $term ): ?\WP_Term {
		if ( $term instanceof \WP_Term ) {
			return $term;
		}

		$result = get_term( $term );

		if ( ! $result instanceof \WP_Term ) {
			return null;
		}

		return $result;
	}

	/**
	 * @param array<string> $args Args.
	 * @return array<\WP_Term>
	 * @throws \InvalidArgumentException When the passed taxonomy does not exists.
	 */
	protected function get_terms( array $args ): array {
		$terms = get_terms( $args );

		if ( ! is_array( $terms ) ) {
			throw new \InvalidArgumentException( __( 'Taxonomia não existe.', 'wpsteak' ) );
		}

		return $terms;
	}

}

<?php
/**
 * Abstract term.
 *
 * @package WPSteak
 */

declare(strict_types=1);

namespace WPSteak\Repositories;

use WPSteak\Services\Meta\TermInterface as MetaInterface;

/**
 * Abstract term class.
 *
 * @codeCoverageIgnore
 */
abstract class AbstractTerm {

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
	 * Get term.
	 *
	 * @param \WP_Term|int $term Id.
	 * @return \WP_Term|null
	 * @throws \InvalidArgumentException When $term param is empty.
	 */
	protected function get_term( $term ) : ?\WP_Term {
		if ( $term instanceof \WP_Term ) {
			return $term;
		}

		if ( empty( $term ) ) {
			throw new \InvalidArgumentException( __( 'Termo invalido.', 'wpsteak' ) );
		}

		return get_term( $term );
	}

	/**
	 * Get terms.
	 *
	 * @param array $args Args.
	 * @return \WP_Term[]
	 * @throws \InvalidArgumentException When the passed taxonomy does not exists.
	 */
	protected function get_terms( array $args ) : array {
		$terms = get_terms( $args );

		if ( ! is_array( $terms ) ) {
			throw new \InvalidArgumentException( __( 'Taxonomia não existe.', 'wpsteak' ) );
		}

		return $terms;
	}
}

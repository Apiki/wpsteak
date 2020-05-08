<?php declare(strict_types = 1);

namespace WPSteak\Loggers;

/** @codeCoverageIgnore */
class WordPress extends \Psr\Log\AbstractLogger {

	/**
	 * {@inheritDoc}
	 */
	public function log( $level, $message, array $context = array() ) {
		if ( ! ( defined( 'WP_DEBUG' ) && WP_DEBUG ) ) {
			return;
		}

		/* @phpcs:ignore */
		error_log( strtoupper( $level ) . ': ' . $message . ' ' . ( ! empty( $context ) ? print_r( $context, true ) : '' ) );
	}

}


<?php
/**
 * WordPress.
 *
 * @package WPSteak
 */

declare(strict_types=1);

namespace WPSteak\Loggers;

/**
 * WordPress class.
 *
 * @codeCoverageIgnore
 */
class WordPress extends \Psr\Log\AbstractLogger {

	/**
	 * Log.
	 *
	 * @param mixed  $level Level.
	 * @param string $message Message.
	 * @param array  $context Context.
	 * @return void
	 */
	public function log( $level, $message, array $context = array() ) {
		if ( ! ( defined( 'WP_DEBUG' ) && WP_DEBUG ) ) {
			return;
		}

		/* @phpcs:ignore */
		error_log( strtoupper( $level ) . ': ' . $message . ' ' . ( ! empty( $context ) ? print_r( $context, true ) : '' ) );
	}
}


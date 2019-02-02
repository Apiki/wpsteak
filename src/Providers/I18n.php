<?php
/**
 * I18n.
 *
 * @package WPSteak.
 */

namespace WPSteak\Providers;

/**
 * I18n class.
 */
class I18n extends AbstractHookProvider {

	/**
	 * Register hooks.
	 *
	 * @return void
	 */
	public function register_hooks() {
		if ( did_action( 'plugins_loaded' ) ) {
			$this->load_textdomain();
		} else {
			$this->add_action( 'plugins_loaded', 'load_textdomain' );
		}
	}

	/**
	 * Load textdomain.
	 *
	 * @return void
	 */
	protected function load_textdomain() {
		$dir    = dirname( dirname( __DIR__ ) ) . '/languages';
		$domain = 'wpsteak';
		$locale = get_locale();

		load_textdomain( $domain, "{$dir}/{$domain}-{$locale}.mo" );
	}
}

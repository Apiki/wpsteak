<?php declare(strict_types = 1);

namespace WPSteak\Providers;

class I18n extends HookProvider {

	public function register_hooks(): void {
		if ( did_action( 'plugins_loaded' ) ) {
			$this->load_textdomain();
		} else {
			$this->add_action( 'plugins_loaded', 'load_textdomain' );
		}
	}

	protected function load_textdomain(): void {
		$dir = dirname( dirname( __DIR__ ) ) . '/languages';
		$domain = 'wpsteak';
		$locale = get_locale();

		load_textdomain( $domain, "{$dir}/{$domain}-{$locale}.mo" );
	}

}

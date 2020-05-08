<?php declare(strict_types = 1);

namespace WPSteak\Services;

/** @codeCoverageIgnore */
trait Assets {

	/** @param array<string> $dependencies */
	public function enqueue_style(
		string $handle,
		string $src,
		string $file = '',
		array $dependencies = [],
		string $media = 'all'
	): void {
		wp_enqueue_style( $handle, $src, $dependencies, $this->generate_file_version( $file ), $media );
	}

	/** @param array<string> $dependencies */
	public function enqueue_script(
		string $handle,
		string $src,
		string $file = '',
		array $dependencies = [],
		bool $in_footer = false
	): void {
		wp_enqueue_script( $handle, $src, $dependencies, $this->generate_file_version( $file ), $in_footer );
	}

	/** @return int|bool */
	protected function generate_file_version( string $file_path ) {
		$version = false;

		if ( $file_path && file_exists( $file_path ) ) {
			$version = filemtime( $file_path );
		}

		return $version;
	}

}

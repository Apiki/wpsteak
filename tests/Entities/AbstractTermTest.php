<?php
/**
 * Abstract term test.
 *
 * @package WPSteak\Test
 */

namespace WPSteak\Test\Entities;

use WPSteak\Entities\AbstractTerm as Entity;

/**
 * Abstract term test class.
 */
final class AbstractTermTest extends \PHPUnit\Framework\TestCase {

	/**
	 * Test get term.
	 *
	 * @return void
	 */
	public function test_get_term() {
		$entity = \Mockery::mock( Entity::class )->makePartial();

		$this->assertSame( $entity, $entity->set_term( \Mockery::mock( '\WP_Term' ) ) );
		$this->assertInstanceOf( '\WP_Term', $entity->get_term() );
	}
}

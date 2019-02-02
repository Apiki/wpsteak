<?php
/**
 * Abstract post test.
 *
 * @package WPSteak\Test
 */

namespace WPSteak\Test\Entities;

use WPSteak\Entities\AbstractPost as Entity;

/**
 * Abstract post test class.
 */
final class AbstractPostTest extends \PHPUnit\Framework\TestCase {

	/**
	 * Test get post.
	 *
	 * @return void
	 */
	public function test_get_post() {
		$entity = \Mockery::mock( Entity::class )->makePartial();

		$this->assertSame( $entity, $entity->set_post( \Mockery::mock( '\WP_Post' ) ) );
		$this->assertInstanceOf( '\WP_Post', $entity->get_post() );
	}
}

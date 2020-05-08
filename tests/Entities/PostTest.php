<?php declare(strict_types = 1);

namespace WPSteak\Test\Entities;

use WPSteak\Entities\Post as Entity;

final class PostTest extends \PHPUnit\Framework\TestCase {

	/** @var \WPSteak\Entities\Post&\PHPUnit\Framework\MockObject\MockObject $repository */
	private Entity $entity;

	public function setUp(): void {
		$this->entity = $this->getMockBuilder( Entity::class )
			->disableOriginalConstructor()
			->setMethods( ['get_post'] )
			->getMock();
	}

	public function test_get_post(): void {
		$this->assertInstanceOf( '\WP_Post', $this->entity->get_post() );
	}

}

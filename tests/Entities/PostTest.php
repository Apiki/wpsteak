<?php declare(strict_types = 1);

namespace WPSteak\Test\Entities;

use WPSteak\Entities\Post as Entity;

final class PostTest extends \PHPUnit\Framework\TestCase {

	/** @var \WPSteak\Entities\Post&\PHPUnit\Framework\MockObject\MockObject $entity */
	private Entity $entity;

	private \WP_Post $post;

	public function setUp(): void {
		$this->post = $this->getMockBuilder( \WP_Post::class )->getMock();
		$this->entity = $this->getMockBuilder( Entity::class )
			->setConstructorArgs( [$this->post] )
			->getMockForAbstractClass();
	}

	public function test_get_post(): void {
		$this->assertSame( $this->post, $this->entity->get_post() );
	}

}

<?php declare(strict_types = 1);

namespace WPSteak\Test\Entities;

use WPSteak\Entities\Term as Entity;

final class TermTest extends \PHPUnit\Framework\TestCase {

	/** @var \WPSteak\Entities\Term&\PHPUnit\Framework\MockObject\MockObject $repository */
	private Entity $entity;

	public function setUp(): void {
		$this->entity = $this->getMockBuilder( Entity::class )
			->disableOriginalConstructor()
			->setMethods( ['get_term'] )
			->getMock();
	}

	public function test_get_term(): void {
		$this->assertInstanceOf( '\WP_Term', $this->entity->get_term() );
	}

}

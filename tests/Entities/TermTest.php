<?php declare(strict_types = 1);

namespace WPSteak\Test\Entities;

use WPSteak\Entities\Term as Entity;

final class TermTest extends \PHPUnit\Framework\TestCase {

	/** @var \WPSteak\Entities\Term&\PHPUnit\Framework\MockObject\MockObject $entity */
	private Entity $entity;

	private \WP_Term $term;

	public function setUp(): void {
		$this->term = $this->getMockBuilder( \WP_Term::class )->getMock();
		$this->entity = $this->getMockBuilder( Entity::class )
			->setConstructorArgs( [$this->term] )
			->getMockForAbstractClass();
	}

	public function test_get_term(): void {
		$this->assertSame( $this->term, $this->entity->get_term() );
	}

}

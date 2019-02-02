<?php
/**
 * Collection.
 *
 * @package WPSteak
 */

declare(strict_types=1);

namespace WPSteak\Entities;

/**
 * Collection interface.
 */
interface CollectionInterface extends \Iterator, \ArrayAccess, \Countable {

	/**
	 * Add entity.
	 *
	 * @param EntityInterface $entity Entity.
	 * @param mixed           $key Key.
	 * @return void
	 */
	public function add_entity( EntityInterface $entity, $key = null );
}

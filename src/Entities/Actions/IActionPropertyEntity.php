<?php declare(strict_types = 1);

/**
 * IActionPropertyEntity.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 * @since          0.57.0
 *
 * @date           01.06.22
 */

namespace FastyBird\Metadata\Entities\Actions;

use FastyBird\Metadata\Entities;
use FastyBird\Metadata\Types;
use Ramsey\Uuid;

/**
 * Property action entity interface
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
interface IActionPropertyEntity extends Entities\IEntity
{

	/**
	 * @return Types\PropertyActionType
	 */
	public function getAction(): Types\PropertyActionType;

	/**
	 * @return Uuid\UuidInterface
	 */
	public function getProperty(): Uuid\UuidInterface;

	/**
	 * @return bool|float|int|string|null
	 */
	public function getExpectedValue();

	/**
	 * @return bool|float|int|string|null
	 */
	public function getActualValue();

	/**
	 * @return bool
	 */
	public function isPending(): bool;

}

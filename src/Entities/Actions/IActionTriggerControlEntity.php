<?php declare(strict_types = 1);

/**
 * IActionTriggerControlEntity.php
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
 * Trigger control action entity interface
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
interface IActionTriggerControlEntity extends Entities\IEntity
{

	/**
	 * @return Types\TriggerActionType
	 */
	public function getAction(): Types\TriggerActionType;

	/**
	 * @return Uuid\UuidInterface
	 */
	public function getTrigger(): Uuid\UuidInterface;

	/**
	 * @return Uuid\UuidInterface
	 */
	public function getControl(): Uuid\UuidInterface;

	/**
	 * @return bool|float|int|string|null
	 */
	public function getExpectedValue(): float|bool|int|string|null;

}

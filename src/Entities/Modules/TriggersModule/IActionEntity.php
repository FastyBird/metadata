<?php declare(strict_types = 1);

/**
 * IActionEntity.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 * @since          0.57.0
 *
 * @date           02.06.22
 */

namespace FastyBird\Metadata\Entities\Modules\TriggersModule;

use FastyBird\Metadata\Entities;
use FastyBird\Metadata\Types;
use Ramsey\Uuid;

/**
 * Action entity interface
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
interface IActionEntity extends Entities\IEntity
{

	/**
	 * @return Uuid\UuidInterface
	 */
	public function getId(): Uuid\UuidInterface;

	/**
	 * @return Uuid\UuidInterface
	 */
	public function getTrigger(): Uuid\UuidInterface;

	/**
	 * @return Types\TriggerActionTypeType
	 */
	public function getType(): Types\TriggerActionTypeType;

	/**
	 * @return bool
	 */
	public function isEnabled(): bool;

	/**
	 * @return bool|null
	 */
	public function isTriggered(): ?bool;

}

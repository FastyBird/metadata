<?php declare(strict_types = 1);

/**
 * ITriggerEntity.php
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
 * Trigger entity interface
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
interface ITriggerEntity extends Entities\IEntity
{

	/**
	 * @return Uuid\UuidInterface
	 */
	public function getId(): Uuid\UuidInterface;

	/**
	 * @return Types\TriggerTypeType
	 */
	public function getType(): Types\TriggerTypeType;

	/**
	 * @return string
	 */
	public function getName(): string;

	/**
	 * @return string|null
	 */
	public function getComment(): ?string;

	/**
	 * @return bool
	 */
	public function isEnabled(): bool;

	/**
	 * @return bool|null
	 */
	public function isTriggered(): ?bool;

}

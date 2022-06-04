<?php declare(strict_types = 1);

/**
 * IDeviceEntity.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 * @since          0.57.0
 *
 * @date           04.06.22
 */

namespace FastyBird\Metadata\Entities\Modules\DevicesModule;

use FastyBird\Metadata\Entities;
use Ramsey\Uuid;

/**
 * Device entity interface
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
interface IDeviceEntity extends Entities\IEntity
{

	/**
	 * @return Uuid\UuidInterface
	 */
	public function getId(): Uuid\UuidInterface;

	/**
	 * @return string
	 */
	public function getType(): string;

	/**
	 * @return string
	 */
	public function getIdentifier(): string;

	/**
	 * @return string|null
	 */
	public function getName(): ?string;

	/**
	 * @return string|null
	 */
	public function getComment(): ?string;

	/**
	 * @return Uuid\UuidInterface
	 */
	public function getConnector(): Uuid\UuidInterface;

	/**
	 * @return Uuid\UuidInterface[]
	 */
	public function getParents(): array;

	/**
	 * @return Uuid\UuidInterface[]
	 */
	public function getChildren(): array;

}

<?php declare(strict_types = 1);

/**
 * IChannelEntity.php
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
 * Channel entity interface
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
interface IChannelEntity extends Entities\IEntity
{

	/**
	 * @return Uuid\UuidInterface
	 */
	public function getId(): Uuid\UuidInterface;

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
	public function getDevice(): Uuid\UuidInterface;

}

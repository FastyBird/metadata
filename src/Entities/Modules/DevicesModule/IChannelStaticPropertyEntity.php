<?php declare(strict_types = 1);

/**
 * ChannelStaticPropertyEntity.php
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

namespace FastyBird\Metadata\Entities\Modules\DevicesModule;

use Ramsey\Uuid;

/**
 * Channel static property entity interface
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
interface IChannelStaticPropertyEntity extends IStaticPropertyEntity
{

	/**
	 * @return Uuid\UuidInterface
	 */
	public function getChannel(): Uuid\UuidInterface;

	/**
	 * @return Uuid\UuidInterface|null
	 */
	public function getParent(): ?Uuid\UuidInterface;

	/**
	 * @return Uuid\UuidInterface[]
	 */
	public function getChildren(): array;

}

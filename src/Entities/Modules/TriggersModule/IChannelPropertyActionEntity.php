<?php declare(strict_types = 1);

/**
 * IChannelPropertyActionEntity.php
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

use Ramsey\Uuid;

/**
 * Device property action entity interface
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
interface IChannelPropertyActionEntity extends IActionEntity
{

	/**
	 * @return Uuid\UuidInterface
	 */
	public function getDevice(): Uuid\UuidInterface;

	/**
	 * @return Uuid\UuidInterface
	 */
	public function getChannel(): Uuid\UuidInterface;

	/**
	 * @return Uuid\UuidInterface
	 */
	public function getProperty(): Uuid\UuidInterface;

	/**
	 * @return string
	 */
	public function getValue(): string;

}

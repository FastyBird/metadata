<?php declare(strict_types = 1);

/**
 * IChannelPropertyConditionEntity.php
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

use FastyBird\Metadata\Types;
use Ramsey\Uuid;

/**
 * Channel property condition entity interface
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
interface IChannelPropertyConditionEntity extends IConditionEntity
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
	public function getOperand(): string;

	/**
	 * @return Types\TriggerConditionOperatorType
	 */
	public function getOperator(): Types\TriggerConditionOperatorType;

}

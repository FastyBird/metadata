<?php declare(strict_types = 1);

/**
 * ChannelPropertyConditionEntity.php
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
 * Channel property condition entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class ChannelPropertyConditionEntity extends ConditionEntity implements IChannelPropertyConditionEntity
{

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $device;

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $channel;

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $property;

	/** @var string */
	private string $operand;

	/** @var Types\TriggerConditionOperatorType */
	private Types\TriggerConditionOperatorType $operator;

	public function __construct(
		string $id,
		string $trigger,
		string $type,
		bool $enabled,
		string $device,
		string $channel,
		string $property,
		string $operand,
		string $operator,
		?bool $isFulfilled = null
	) {
		parent::__construct($id, $trigger, $type, $enabled, $isFulfilled);

		$this->device = Uuid\Uuid::fromString($device);
		$this->channel = Uuid\Uuid::fromString($channel);
		$this->property = Uuid\Uuid::fromString($property);
		$this->operand = $operand;
		$this->operator = Types\TriggerConditionOperatorType::get($operator);
	}

	/**
	 * {@inheritdoc}
	 */
	public function getDevice(): Uuid\UuidInterface
	{
		return $this->device;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getChannel(): Uuid\UuidInterface
	{
		return $this->channel;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getProperty(): Uuid\UuidInterface
	{
		return $this->property;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getOperand(): string
	{
		return $this->operand;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getOperator(): Types\TriggerConditionOperatorType
	{
		return $this->operator;
	}

}

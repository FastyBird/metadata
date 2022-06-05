<?php declare(strict_types = 1);

/**
 * DevicePropertyConditionEntity.php
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
 * Device property condition entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class DevicePropertyConditionEntity extends ConditionEntity implements IDevicePropertyConditionEntity
{

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $device;

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
		string $property,
		string $operand,
		string $operator,
		?bool $isFulfilled = null,
		?string $owner = null
	) {
		parent::__construct($id, $trigger, $type, $enabled, $isFulfilled, $owner);

		$this->device = Uuid\Uuid::fromString($device);
		$this->property = Uuid\Uuid::fromString($property);
		$this->operand = $operand;
		$this->operator = Types\TriggerConditionOperatorType::get($operator);
	}

	/**
	 * {@inheritDoc}
	 */
	public function getDevice(): Uuid\UuidInterface
	{
		return $this->device;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getProperty(): Uuid\UuidInterface
	{
		return $this->property;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getOperand(): string
	{
		return $this->operand;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getOperator(): Types\TriggerConditionOperatorType
	{
		return $this->operator;
	}

	/**
	 * {@inheritDoc}
	 */
	public function toArray(): array
	{
		return array_merge(parent::toArray(), [
			'device'   => $this->getDevice()->toString(),
			'property' => $this->getProperty()->toString(),
			'operand'  => $this->getOperand(),
			'operator' => $this->getOperator()->getValue(),
		]);
	}

	/**
	 * @return Array<string, mixed>
	 */
	public function __serialize(): array
	{
		return $this->toArray();
	}

}

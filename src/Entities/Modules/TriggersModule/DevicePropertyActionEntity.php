<?php declare(strict_types = 1);

/**
 * DevicePropertyActionEntity.php
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

namespace FastyBird\Metadata\Entities\Modules\TriggersModule;

use Ramsey\Uuid;

/**
 * Device property action entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class DevicePropertyActionEntity extends ActionEntity implements IDevicePropertyActionEntity
{

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $device;

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $property;

	/** @var string */
	private string $value;

	public function __construct(
		string $id,
		string $trigger,
		string $type,
		bool $enabled,
		string $device,
		string $property,
		string $value,
		?bool $isTriggered = null
	) {
		parent::__construct($id, $trigger, $type, $enabled, $isTriggered);

		$this->device = Uuid\Uuid::fromString($device);
		$this->property = Uuid\Uuid::fromString($property);
		$this->value = $value;
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
	public function getProperty(): Uuid\UuidInterface
	{
		return $this->property;
	}

	/**
	 * {@inheritdoc}
	 */
	public function getValue(): string
	{
		return $this->value;
	}

	/**
	 * {@inheritdoc}
	 */
	public function toArray(): array
	{
		return array_merge(parent::toArray(), [
			'device'   => $this->getDevice()->toString(),
			'property' => $this->getProperty()->toString(),
			'value'    => $this->getValue(),
		]);
	}

}

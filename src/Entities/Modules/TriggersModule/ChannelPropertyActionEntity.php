<?php declare(strict_types = 1);

/**
 * ChannelPropertyActionEntity.php
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
 * Device channel property action entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class ChannelPropertyActionEntity extends ActionEntity implements IChannelPropertyActionEntity
{

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $device;

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $channel;

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
		string $channel,
		string $property,
		string $value,
		?bool $isTriggered = null,
		?string $owner = null
	) {
		parent::__construct($id, $trigger, $type, $enabled, $isTriggered, $owner);

		$this->device = Uuid\Uuid::fromString($device);
		$this->channel = Uuid\Uuid::fromString($channel);
		$this->property = Uuid\Uuid::fromString($property);
		$this->value = $value;
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
	public function getChannel(): Uuid\UuidInterface
	{
		return $this->channel;
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
	public function getValue(): string
	{
		return $this->value;
	}

	/**
	 * {@inheritDoc}
	 */
	public function toArray(): array
	{
		return array_merge(parent::toArray(), [
			'device'   => $this->getDevice()->toString(),
			'channel'  => $this->getChannel()->toString(),
			'property' => $this->getProperty()->toString(),
			'value'    => $this->getValue(),
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

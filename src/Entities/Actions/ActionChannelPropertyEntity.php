<?php declare(strict_types = 1);

/**
 * ActionChannelPropertyEntity.php
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

namespace FastyBird\Metadata\Entities\Actions;

use Ramsey\Uuid;

/**
 * Channel property action entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class ActionChannelPropertyEntity extends ActionPropertyEntity implements IActionChannelPropertyEntity
{

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $device;

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $channel;

	/**
	 * @param string $action
	 * @param string $device
	 * @param string $channel
	 * @param string $property
	 * @param string|int|float|bool|null $expectedValue
	 * @param string|int|float|bool|null $actualValue
	 * @param bool $pending
	 */
	public function __construct(
		string $action,
		string $device,
		string $channel,
		string $property,
		$expectedValue = null,
		$actualValue = null,
		bool $pending = false
	) {
		parent::__construct($action, $property, $expectedValue, $actualValue, $pending);

		$this->device = Uuid\Uuid::fromString($device);
		$this->channel = Uuid\Uuid::fromString($channel);
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
	public function toArray(): array
	{
		return array_merge(parent::toArray(), [
			'device'  => $this->getDevice()->toString(),
			'channel' => $this->getChannel()->toString(),
		]);
	}

}

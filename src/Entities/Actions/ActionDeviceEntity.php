<?php declare(strict_types = 1);

/**
 * ActionDeviceEntity.php
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
 * Device action entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class ActionDeviceEntity extends ActionEntity implements IActionDeviceEntity
{

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $device;

	/**
	 * @param string $action
	 * @param string $device
	 * @param string $control
	 * @param float|bool|int|string|null $expectedValue
	 */
	public function __construct(
		string $action,
		string $device,
		string $control,
		float|bool|int|string|null $expectedValue = null
	) {
		parent::__construct($action, $control, $expectedValue);

		$this->device = Uuid\Uuid::fromString($device);
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
	public function toArray(): array
	{
		return array_merge(parent::toArray(), [
			'device' => $this->getDevice()->toString(),
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

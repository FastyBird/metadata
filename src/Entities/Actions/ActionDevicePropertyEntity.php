<?php declare(strict_types = 1);

/**
 * ActionDevicePropertyEntity.php
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
 * Device property action entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class ActionDevicePropertyEntity extends ActionPropertyEntity implements IActionDevicePropertyEntity
{

	/** @var Uuid\UuidInterface */
	private Uuid\UuidInterface $device;

	/**
	 * @param string $action
	 * @param string $device
	 * @param string $property
	 * @param string|int|float|bool|null $expectedValue
	 * @param string|int|float|bool|null $actualValue
	 * @param bool $pending
	 */
	public function __construct(
		string $action,
		string $device,
		string $property,
		$expectedValue = null,
		$actualValue = null,
		bool $pending = false
	) {
		parent::__construct($action, $property, $expectedValue, $actualValue, $pending);

		$this->device = Uuid\Uuid::fromString($device);
	}

	/**
	 * {@inheritdoc}
	 */
	public function getDevice(): Uuid\UuidInterface
	{
		return $this->device;
	}

}

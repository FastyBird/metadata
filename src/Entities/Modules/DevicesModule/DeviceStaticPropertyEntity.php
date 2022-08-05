<?php declare(strict_types = 1);

/**
 * DeviceStaticPropertyEntity.php
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

use Nette\Utils;
use Ramsey\Uuid;

/**
 * Device static property entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class DeviceStaticPropertyEntity extends StaticPropertyEntity implements IDeviceStaticPropertyEntity
{

	use TDeviceProperty;

	/**
	 * @param string $id
	 * @param string $device
	 * @param string $type
	 * @param string $identifier
	 * @param string|null $name
	 * @param bool $settable
	 * @param bool $queryable
	 * @param string $dataType
	 * @param string|null $unit
	 * @param Array<int, string>|Array<int, string|int|float|Array<int, string|int|float>|null>|Array<int, Array<int, string|Array<int, string|int|float|bool>|null>>|null $format
	 * @param string|int|float|null $invalid
	 * @param int|null $numberOfDecimals
	 * @param string|int|float|bool|null $value
	 * @param string|int|float|bool|null $default
	 * @param string|null $parent
	 * @param Array<int, string>|Utils\ArrayHash<string> $children
	 * @param string|null $owner
	 */
	public function __construct(
		string $id,
		string $device,
		string $type,
		string $identifier,
		?string $name,
		bool $settable,
		bool $queryable,
		string $dataType,
		?string $unit = null,
		?array $format = null,
		string|int|float|null $invalid = null,
		?int $numberOfDecimals = null,
		float|bool|int|string|null $value = null,
		float|bool|int|string|null $default = null,
		?string $parent = null,
		array|Utils\ArrayHash $children = [],
		?string $owner = null
	) {
		parent::__construct($id, $type, $identifier, $name, $settable, $queryable, $dataType, $unit, $format, $invalid, $numberOfDecimals, $value, $default, $owner);

		$this->device = Uuid\Uuid::fromString($device);
		$this->parent = $parent !== null ? Uuid\Uuid::fromString($parent) : null;
		$this->children = array_map(function (string $item): Uuid\UuidInterface {
			return Uuid\Uuid::fromString($item);
		}, (array) $children);
	}

	/**
	 * {@inheritDoc}
	 */
	public function toArray(): array
	{
		return array_merge(parent::toArray(), [
			'device'  => $this->getDevice()->toString(),
			'parent'   => $this->getParent()?->toString(),
			'children' => array_map(function (Uuid\UuidInterface $child): string {
				return $child->toString();
			}, $this->getChildren()),
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

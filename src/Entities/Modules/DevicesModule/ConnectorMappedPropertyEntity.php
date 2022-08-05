<?php declare(strict_types = 1);

/**
 * ConnectorMappedPropertyEntity.php
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

use Exception;
use Ramsey\Uuid;

/**
 * Connector mapped property entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class ConnectorMappedPropertyEntity extends MappedPropertyEntity implements IConnectorMappedPropertyEntity
{

	use TConnectorProperty;

	/**
	 * @param string $id
	 * @param string $connector
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
	 * @param string|int|float|bool|null $actualValue
	 * @param string|int|float|bool|null $previousValue
	 * @param string|int|float|bool|null $expectedValue
	 * @param bool|null $pending
	 * @param bool|null $valid
	 * @param string|int|float|bool|null $value
	 * @param string|int|float|bool|null $default
	 * @param string|null $owner
	 */
	public function __construct(
		string $id,
		string $connector,
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
		float|bool|int|string|null $actualValue = null,
		float|bool|int|string|null $previousValue = null,
		float|bool|int|string|null $expectedValue = null,
		bool|string|null $pending = null,
		?bool $valid = null,
		float|bool|int|string|null $value = null,
		float|bool|int|string|null $default = null,
		?string $owner = null
	) {
		parent::__construct($id, $type, $identifier, $name, $settable, $queryable, $dataType, $unit, $format, $invalid, $numberOfDecimals, $actualValue, $previousValue, $expectedValue, $pending, $valid, $value, $default, $owner);

		$this->connector = Uuid\Uuid::fromString($connector);
	}

	/**
	 * {@inheritDoc}
	 *
	 * @throws Exception
	 */
	public function toArray(): array
	{
		return array_merge(parent::toArray(), [
			'connector' => $this->getConnector(),
		]);
	}

	/**
	 * @return Array<string, mixed>
	 *
	 * @throws Exception
	 */
	public function __serialize(): array
	{
		return $this->toArray();
	}

}

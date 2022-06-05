<?php declare(strict_types = 1);

/**
 * StaticPropertyEntity.php
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

/**
 * Static property entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
abstract class StaticPropertyEntity extends PropertyEntity implements IStaticPropertyEntity
{

	/** @var string|int|float|bool|null */
	private $value;

	/** @var string|int|float|bool|null */
	private $default;

	/**
	 * @param string $id
	 * @param string $type
	 * @param string $identifier
	 * @param string|null $name
	 * @param bool $settable
	 * @param bool $queryable
	 * @param string $dataType
	 * @param string|null $unit
	 * @param Array<string>|Array<Array<string|null>>|Array<int|null>|Array<float|null>|null $format
	 * @param string|int|float|null $invalid
	 * @param int|null $numberOfDecimals
	 * @param string|int|float|bool|null $value
	 * @param string|int|float|bool|null $default
	 * @param string|null $owner
	 */
	public function __construct(
		string $id,
		string $type,
		string $identifier,
		?string $name,
		bool $settable,
		bool $queryable,
		string $dataType,
		?string $unit,
		?array $format,
		$invalid,
		?int $numberOfDecimals,
		$value,
		$default,
		?string $owner = null
	) {
		parent::__construct($id, $type, $identifier, $name, $settable, $queryable, $dataType, $unit, $format, $invalid, $numberOfDecimals, $owner);

		$this->value = $value;
		$this->default = $default;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getValue()
	{
		return $this->value;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getDefault()
	{
		return $this->default;
	}

	/**
	 * {@inheritDoc}
	 */
	public function toArray(): array
	{
		return array_merge(parent::toArray(), [
			'value'   => $this->getValue(),
			'default' => $this->getDefault(),
		]);
	}

}

<?php declare(strict_types = 1);

/**
 * MappedPropertyEntity.php
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
 * Mapped property entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
abstract class MappedPropertyEntity extends PropertyEntity implements IMappedPropertyEntity
{

	/** @var string|int|float|bool|null */
	private $actualValue;

	/** @var string|int|float|bool|null */
	private $previousValue;

	/** @var string|int|float|bool|null */
	private $expectedValue;

	/** @var bool|null */
	private ?bool $pending;

	/** @var bool|null */
	private ?bool $valid;

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
		$actualValue,
		$previousValue,
		$expectedValue,
		?bool $pending,
		?bool $valid,
		$value,
		$default,
		?string $owner = null
	) {
		parent::__construct($id, $type, $identifier, $name, $settable, $queryable, $dataType, $unit, $format, $invalid, $numberOfDecimals, $owner);

		$this->actualValue = $actualValue;
		$this->previousValue = $previousValue;
		$this->expectedValue = $expectedValue;
		$this->pending = $pending;
		$this->valid = $valid;

		$this->value = $value;
		$this->default = $default;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getActualValue()
	{
		return $this->actualValue;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getPreviousValue()
	{
		return $this->previousValue;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getExpectedValue()
	{
		return $this->expectedValue;
	}

	/**
	 * {@inheritDoc}
	 */
	public function isPending(): ?bool
	{
		return $this->pending;
	}

	/**
	 * {@inheritDoc}
	 */
	public function isValid(): ?bool
	{
		return $this->valid;
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
			'actual_value'   => $this->getActualValue(),
			'previous_value' => $this->getPreviousValue(),
			'expected_value' => $this->getExpectedValue(),
			'pending'        => $this->isPending(),
			'valid'          => $this->isValid(),
			'value'          => $this->getValue(),
			'default'        => $this->getDefault(),
		]);
	}

}

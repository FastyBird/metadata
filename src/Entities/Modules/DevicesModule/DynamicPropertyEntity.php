<?php declare(strict_types = 1);

/**
 * DynamicPropertyEntity.php
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

use DateTimeInterface;
use Exception;
use Nette\Utils;

/**
 * Dynamic property entity
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
abstract class DynamicPropertyEntity extends PropertyEntity implements IDynamicPropertyEntity
{

	/** @var string|int|float|bool|null */
	private string|int|bool|null|float $actualValue;

	/** @var string|int|float|bool|null */
	private string|int|bool|null|float $previousValue;

	/** @var string|int|float|bool|null */
	private string|int|bool|null|float $expectedValue;

	/** @var bool|string|null */
	private string|bool|null $pending;

	/** @var bool|null */
	private ?bool $valid;

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
	 * @param float|bool|int|string|null $previousValue
	 * @param float|bool|int|string|null $expectedValue
	 * @param bool|string|null $pending
	 * @param bool|null $valid
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
		?string $unit = null,
		?array $format = null,
		string|int|float|null $invalid = null,
		?int $numberOfDecimals = null,
		float|bool|int|string|null $actualValue = null,
		float|bool|int|string|null $previousValue = null,
		float|bool|int|string|null $expectedValue = null,
		bool|string|null $pending = null,
		?bool $valid = null,
		?string $owner = null
	) {
		parent::__construct($id, $type, $identifier, $name, $settable, $queryable, $dataType, $unit, $format, $invalid, $numberOfDecimals, $owner);

		$this->actualValue = $actualValue;
		$this->previousValue = $previousValue;
		$this->expectedValue = $expectedValue;
		$this->pending = $pending;
		$this->valid = $valid;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getActualValue(): float|bool|int|string|null
	{
		return $this->actualValue;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getPreviousValue(): float|bool|int|string|null
	{
		return $this->previousValue;
	}

	/**
	 * {@inheritDoc}
	 */
	public function getExpectedValue(): float|bool|int|string|null
	{
		return $this->expectedValue;
	}

	/**
	 * {@inheritDoc}
	 *
	 * @throws Exception
	 */
	public function getPending(): bool|string|null
	{
		if (is_string($this->pending)) {
			$pending = Utils\DateTime::from($this->pending);
			return $pending->format(DateTimeInterface::ATOM);
		}

		return $this->pending;
	}

	/**
	 * {@inheritDoc}
	 */
	public function isPending(): ?bool
	{
		return $this->pending !== null;
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
	 *
	 * @throws Exception
	 */
	public function toArray(): array
	{
		return array_merge(parent::toArray(), [
			'actual_value'   => $this->getActualValue(),
			'previous_value' => $this->getPreviousValue(),
			'expected_value' => $this->getExpectedValue(),
			'pending'        => $this->getPending(),
			'valid'          => $this->isValid(),
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

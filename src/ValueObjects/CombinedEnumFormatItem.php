<?php declare(strict_types = 1);

/**
 * CombinedEnumFormatItem.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     ValueObjects
 * @since          0.73.0
 *
 * @date           05.08.22
 */

namespace FastyBird\Metadata\ValueObjects;

use Consistence;
use FastyBird\Metadata\Exceptions;
use FastyBird\Metadata\Types;
use Nette;
use Nette\Utils;

/**
 * Combined enum value format item
 *
 * @package        FastyBird:Metadata!
 * @subpackage     ValueObjects
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class CombinedEnumFormatItem
{

	use Nette\SmartObject;

	/** @var Types\DataTypeShortType|null */
	private ?Types\DataTypeShortType $dataType;

	/** @var string|int|float|bool */
	private string|int|float|bool $value;

	/**
	 * @param string|Array<int, string|int|float|bool> $item
	 */
	public function __construct(string|array $item)
	{
		$dataType = null;

		if (is_string($item)) {
			if (Utils\Strings::contains($item, '|')) {
				$parts = explode('|', $item) + [null, null];

				if ($parts[0] === null || !Types\DataTypeShortType::isValidValue(Utils\Strings::lower($parts[0]))) {
					throw new Exceptions\InvalidArgumentException('Provided format is not valid for combined enum format');
				}

				$dataType = Types\DataTypeShortType::get(Utils\Strings::lower($parts[0]));
				$this->value = trim(strval($parts[1]));
			} else {
				$this->value = trim($item);
			}
		} elseif (count($item) === 2) {
			if (!is_string($item[0]) || !Types\DataTypeShortType::isValidValue(Utils\Strings::lower($item[0]))) {
				throw new Exceptions\InvalidArgumentException('Provided format is not valid for combined enum format');
			}

			$dataType = Types\DataTypeShortType::get(Utils\Strings::lower($item[0]));
			$this->value = is_string($item[1]) ? trim($item[1]) : $item[1];

		} elseif (count($item) === 1) {
			$this->value = trim(strval($item[0]));

		} else {
			throw new Exceptions\InvalidArgumentException('Provided format is not valid for combined enum format');
		}

		if ($dataType !== null && !$this->validateDataType($dataType)) {
			throw new Exceptions\InvalidArgumentException('Provided format is not valid for combined enum format');
		}

		$this->dataType = $dataType;
	}

	/**
	 * @return float|bool|int|string|Types\ButtonPayloadType|Types\SwitchPayloadType
	 */
	public function getValue(): float|bool|int|string|Types\ButtonPayloadType|Types\SwitchPayloadType
	{
		if ($this->dataType === null) {
			return $this->value;
		}

		if (
			$this->dataType->equalsValue(Types\DataTypeShortType::DATA_TYPE_CHAR)
			|| $this->dataType->equalsValue(Types\DataTypeShortType::DATA_TYPE_UCHAR)
			|| $this->dataType->equalsValue(Types\DataTypeShortType::DATA_TYPE_SHORT)
			|| $this->dataType->equalsValue(Types\DataTypeShortType::DATA_TYPE_USHORT)
			|| $this->dataType->equalsValue(Types\DataTypeShortType::DATA_TYPE_INT)
			|| $this->dataType->equalsValue(Types\DataTypeShortType::DATA_TYPE_UINT)
		) {
			return intval($this->value);

		} elseif ($this->dataType->equalsValue(Types\DataTypeShortType::DATA_TYPE_FLOAT)) {
			return floatval($this->value);

		} elseif ($this->dataType->equalsValue(Types\DataTypeShortType::DATA_TYPE_STRING)) {
			return strval($this->value);

		} elseif ($this->dataType->equalsValue(Types\DataTypeShortType::DATA_TYPE_BOOLEAN)) {
			return in_array(Utils\Strings::lower(strval($this->value)), ['true', 't', 'yes', 'y', '1', 'on'], true);

		} elseif ($this->dataType->equalsValue(Types\DataTypeShortType::DATA_TYPE_BUTTON)) {
			if (Types\ButtonPayloadType::isValidValue(Utils\Strings::lower(strval($this->value)))) {
				return Types\ButtonPayloadType::get(Utils\Strings::lower(strval($this->value)));
			}

			throw new Exceptions\InvalidStateException('Combined enum value is not valid');

		} elseif ($this->dataType->equalsValue(Types\DataTypeShortType::DATA_TYPE_SWITCH)) {
			if (Types\SwitchPayloadType::isValidValue(Utils\Strings::lower(strval($this->value)))) {
				return Types\SwitchPayloadType::get(Utils\Strings::lower(strval($this->value)));
			}

			throw new Exceptions\InvalidStateException('Combined enum value is not valid');
		}

		throw new Exceptions\InvalidStateException('Combined enum value is not valid');
	}

	/**
	 * @return Types\DataTypeShortType|null
	 */
	public function getDataType(): ?Types\DataTypeShortType
	{
		return $this->dataType;
	}

	/**
	 * @return Array<int, string|int|float|bool>
	 */
	public function toArray(): array
	{
		$value = $this->getValue();

		if ($value instanceof Consistence\Enum\Enum) {
			$flattenValue = strval($value->getValue());

		} else {
			$flattenValue = $value;
		}

		if ($this->dataType === null) {
			return [
				strval($this->value),
			];
		}

		return [
			strval($this->dataType->getValue()),
			$flattenValue,
		];
	}

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return implode('|', $this->toArray());
	}

	/**
	 * @param Types\DataTypeShortType $dataType
	 *
	 * @return bool
	 */
	private function validateDataType(Types\DataTypeShortType $dataType): bool
	{
		return in_array($dataType->getValue(), [
			Types\DataTypeShortType::DATA_TYPE_CHAR,
			Types\DataTypeShortType::DATA_TYPE_UCHAR,
			Types\DataTypeShortType::DATA_TYPE_SHORT,
			Types\DataTypeShortType::DATA_TYPE_USHORT,
			Types\DataTypeShortType::DATA_TYPE_INT,
			Types\DataTypeShortType::DATA_TYPE_UINT,
			Types\DataTypeShortType::DATA_TYPE_FLOAT,
			Types\DataTypeShortType::DATA_TYPE_BOOLEAN,
			Types\DataTypeShortType::DATA_TYPE_STRING,
			Types\DataTypeShortType::DATA_TYPE_BUTTON,
			Types\DataTypeShortType::DATA_TYPE_SWITCH,
		], true);
	}

}

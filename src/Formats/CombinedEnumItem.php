<?php declare(strict_types = 1);

/**
 * CombinedEnumFormatItem.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:MetadataLibrary!
 * @subpackage     Formats
 * @since          1.0.0
 *
 * @date           05.08.22
 */

namespace FastyBird\Library\Metadata\Formats;

use BackedEnum;
use FastyBird\Library\Metadata\Exceptions;
use FastyBird\Library\Metadata\Types;
use Nette;
use Nette\Utils;
use TypeError;
use ValueError;
use function count;
use function explode;
use function floatval;
use function implode;
use function in_array;
use function intval;
use function is_string;
use function strval;
use function trim;

/**
 * Combined enum value format item
 *
 * @package        FastyBird:MetadataLibrary!
 * @subpackage     Formats
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class CombinedEnumItem
{

	use Nette\SmartObject;

	private Types\DataTypeShort|null $dataType;

	private string|int|float|bool $value;

	/**
	 * @param string|array<int, string|int|float|bool|null> $item
	 *
	 * @throws Exceptions\InvalidArgument
	 * @throws TypeError
	 * @throws ValueError
	 */
	public function __construct(string|array $item)
	{
		$dataType = null;

		if (is_string($item)) {
			if (Utils\Strings::contains($item, '|')) {
				$parts = explode('|', $item) + [null, null];

				if ($parts[0] === null || Types\DataTypeShort::tryFrom(Utils\Strings::lower($parts[0])) === null) {
					throw new Exceptions\InvalidArgument('Provided format is not valid for combined enum format');
				}

				$dataType = Types\DataTypeShort::from(Utils\Strings::lower($parts[0]));
				$this->value = trim(strval($parts[1]));
			} else {
				$this->value = trim($item);
			}
		} elseif (count($item) === 2) {
			if ($item[0] !== null) {
				if (!is_string($item[0]) || Types\DataTypeShort::tryFrom(Utils\Strings::lower($item[0])) === null) {
					throw new Exceptions\InvalidArgument('Provided format is not valid for combined enum format');
				}

				$dataType = Types\DataTypeShort::from(Utils\Strings::lower($item[0]));
			}

			if ($item[1] === null) {
				throw new Exceptions\InvalidArgument('Provided value is not valid for combined enum format');
			}

			$this->value = is_string($item[1]) ? trim($item[1]) : $item[1];

		} elseif (count($item) === 1) {
			$this->value = trim(strval($item[0]));

		} else {
			throw new Exceptions\InvalidArgument('Provided format is not valid for combined enum format');
		}

		if ($dataType !== null && !$this->validateDataType($dataType)) {
			throw new Exceptions\InvalidArgument('Provided format is not valid for combined enum format');
		}

		$this->dataType = $dataType;
	}

	/**
	 * @throws Exceptions\InvalidState
	 * @throws TypeError
	 * @throws ValueError
	 */
	public function getValue(): float|bool|int|string|Types\Payloads\Payload
	{
		if ($this->dataType === null) {
			return $this->value;
		}

		if (
			$this->dataType === Types\DataTypeShort::CHAR
			|| $this->dataType === Types\DataTypeShort::UCHAR
			|| $this->dataType === Types\DataTypeShort::SHORT
			|| $this->dataType === Types\DataTypeShort::USHORT
			|| $this->dataType === Types\DataTypeShort::INT
			|| $this->dataType === Types\DataTypeShort::UINT
		) {
			return intval($this->value);
		} elseif ($this->dataType === Types\DataTypeShort::FLOAT) {
			return floatval($this->value);
		} elseif ($this->dataType === Types\DataTypeShort::STRING) {
			return strval($this->value);
		} elseif ($this->dataType === Types\DataTypeShort::BOOLEAN) {
			return in_array(Utils\Strings::lower(strval($this->value)), ['true', 't', 'yes', 'y', '1', 'on'], true);
		} elseif ($this->dataType === Types\DataTypeShort::BUTTON) {
			if (Types\Payloads\Button::tryFrom(Utils\Strings::lower(strval($this->value))) !== null) {
				return Types\Payloads\Button::from(Utils\Strings::lower(strval($this->value)));
			}

			throw new Exceptions\InvalidState('Combined enum value is not valid');
		} elseif ($this->dataType === Types\DataTypeShort::SWITCH) {
			if (Types\Payloads\Switcher::tryFrom(Utils\Strings::lower(strval($this->value))) !== null) {
				return Types\Payloads\Switcher::from(Utils\Strings::lower(strval($this->value)));
			}

			throw new Exceptions\InvalidState('Combined enum value is not valid');
		} elseif ($this->dataType === Types\DataTypeShort::COVER) {
			if (Types\Payloads\Cover::tryFrom(Utils\Strings::lower(strval($this->value))) !== null) {
				return Types\Payloads\Cover::from(Utils\Strings::lower(strval($this->value)));
			}

			throw new Exceptions\InvalidState('Combined enum value is not valid');
		}

		throw new Exceptions\InvalidState('Combined enum value is not valid');
	}

	public function getDataType(): Types\DataTypeShort|null
	{
		return $this->dataType;
	}

	/**
	 * @return array<int, string|int|float|bool>
	 *
	 * @throws Exceptions\InvalidState
	 * @throws TypeError
	 * @throws ValueError
	 */
	public function toArray(): array
	{
		$value = $this->getValue();

		$flattenValue = $value instanceof BackedEnum ? strval($value->value) : $value;

		if ($this->dataType === null) {
			return [
				strval($this->value),
			];
		}

		return [
			$this->dataType->value,
			$flattenValue,
		];
	}

	private function validateDataType(Types\DataTypeShort $dataType): bool
	{
		return in_array($dataType, [
			Types\DataTypeShort::CHAR,
			Types\DataTypeShort::UCHAR,
			Types\DataTypeShort::SHORT,
			Types\DataTypeShort::USHORT,
			Types\DataTypeShort::INT,
			Types\DataTypeShort::UINT,
			Types\DataTypeShort::FLOAT,
			Types\DataTypeShort::BOOLEAN,
			Types\DataTypeShort::STRING,
			Types\DataTypeShort::BUTTON,
			Types\DataTypeShort::SWITCH,
			Types\DataTypeShort::COVER,
		], true);
	}

	/**
	 * @throws Exceptions\InvalidState
	 * @throws TypeError
	 * @throws ValueError
	 */
	public function __toString(): string
	{
		return implode('|', $this->toArray());
	}

}

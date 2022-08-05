<?php declare(strict_types = 1);

/**
 * CombinedEnumFormat.php
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

use FastyBird\Metadata\Exceptions;
use Nette;

/**
 * Combined enum value format
 *
 * @package        FastyBird:Metadata!
 * @subpackage     ValueObjects
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class CombinedEnumFormat
{

	use Nette\SmartObject;

	/** @var Array<int, Array<int, CombinedEnumFormatItem|null>> */
	private array $items;

	/**
	 * @param string|Array<int, Array<int, string|Array<int, string|int|float|bool>|null>> $items
	 */
	public function __construct(string|array $items)
	{
		if (is_string($items)) {
			$this->items = array_map(function (string $item): array {
				if (trim($item) === '') {
					throw new Exceptions\InvalidArgumentException('Provided format is not valid for combined enum format');
				}

				$parts = explode(':', $item) + [null, null, null];

				return array_map(function (?string $part): ?CombinedEnumFormatItem {
					if ($part === null || trim($part) === '') {
						return null;
					}

					return new CombinedEnumFormatItem($part);
				}, $parts);
			}, explode(',', $items));
		} else {
			$this->items = array_map(function (array $item): array {
				if ($item === []) {
					throw new Exceptions\InvalidArgumentException('Provided format is not valid for combined enum format');
				}

				return array_map(function (string|array|null $part): ?CombinedEnumFormatItem {
					if ($part === null || $part === []) {
						return null;
					}

					return new CombinedEnumFormatItem($part);
				}, $item);
			}, $items);
		}
	}

	/**
	 * @return Array<int, Array<int, CombinedEnumFormatItem|null>>
	 */
	public function getItems(): array
	{
		return $this->items;
	}

	/**
	 * @return Array<int, Array<int, string|Array<int, string|int|float|bool>|null>>
	 */
	public function toArray(): array
	{
		return array_map(function (array $item): array {
			return array_map(function (?CombinedEnumFormatItem $part): array|string|null {
				if ($part instanceof CombinedEnumFormatItem) {
					return $part->getDataType() !== null ? $part->toArray() : strval($part->getValue());
				}

				return $part;
			}, $item);
		}, $this->getItems());
	}

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return implode(',', array_map(function (array $item): string {
			return implode(':', array_map(function (?CombinedEnumFormatItem $part): string {
				if ($part instanceof CombinedEnumFormatItem) {
					return strval($part);
				}

				return '';
			}, $item));
		}, $this->getItems()));
	}

}

<?php declare(strict_types = 1);

/**
 * StringEnumFormat.php
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

use Nette;

/**
 * String enum value format
 *
 * @package        FastyBird:Metadata!
 * @subpackage     ValueObjects
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class StringEnumFormat
{

	use Nette\SmartObject;

	/** @var Array<int, string> */
	private array $items;

	/**
	 * @param string|Array<int, string> $items
	 */
	public function __construct(string|array $items)
	{
		if (is_string($items)) {
			$parts = explode(',', $items);

		} else {
			$parts = $items;
		}

		$this->items = array_values(array_filter(array_map(function (mixed $item): string {
			return trim(strval($item));
		}, $parts), function (string $item): bool {
			return $item !== '';
		}));
	}

	/**
	 * @return string[]
	 */
	public function getItems(): mixed
	{
		return $this->items;
	}

	/**
	 * @return string[]
	 */
	public function toArray(): array
	{
		return $this->getItems();
	}

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return implode(',', $this->toArray());
	}

}

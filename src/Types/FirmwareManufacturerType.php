<?php declare(strict_types = 1);

/**
 * FirmwareManufacturerType.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 * @since          0.1.0
 *
 * @date           27.07.18
 */

namespace FastyBird\Metadata\Types;

use Consistence;

/**
 * Device firmware manufacturer type
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class FirmwareManufacturerType extends Consistence\Enum\Enum
{

	/**
	 * Define data types
	 */
	public const MANUFACTURER_GENERIC = 'generic';
	public const MANUFACTURER_FASTYBIRD = 'fastybird';
	public const MANUFACTURER_SHELLY = 'shelly';
	public const MANUFACTURER_TUYA = 'tuya';
	public const MANUFACTURER_SONOFF = 'sonoff';

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return strval(self::getValue());
	}

}

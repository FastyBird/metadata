<?php declare(strict_types = 1);

/**
 * DeviceAttributeNameType.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 * @since          0.54.0
 *
 * @date           21.04.22
 */

namespace FastyBird\Metadata\Types;

use Consistence;

/**
 * Device property name types
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class DeviceAttributeNameType extends Consistence\Enum\Enum
{

	/**
	 * Define device attributes names
	 */
    public const ATTRIBUTE_HARDWARE_MANUFACTURER = 'hardware_manufacturer';
    public const ATTRIBUTE_HARDWARE_MODEL = 'hardware_model';
    public const ATTRIBUTE_HARDWARE_VERSION = 'hardware_version';
    public const ATTRIBUTE_HARDWARE_MAC_ADDRESS = 'hardware_mac_address';
    public const ATTRIBUTE_FIRMWARE_MANUFACTURER = 'firmware_manufacturer';
    public const ATTRIBUTE_FIRMWARE_NAME = 'firmware_name';
    public const ATTRIBUTE_FIRMWARE_VERSION = 'firmware_version';

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return strval(self::getValue());
	}

}

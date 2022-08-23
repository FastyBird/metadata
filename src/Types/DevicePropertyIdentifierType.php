<?php declare(strict_types = 1);

/**
 * DevicePropertyIdentifierType.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 * @since          0.2.0
 *
 * @date           16.07.21
 */

namespace FastyBird\Metadata\Types;

use Consistence;

/**
 * Device property identifier types
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class DevicePropertyIdentifierType extends Consistence\Enum\Enum
{

	/**
	 * Define device properties identifiers
	 */
	public const IDENTIFIER_STATE = PropertyIdentifierType::IDENTIFIER_STATE;
	public const IDENTIFIER_BATTERY = PropertyIdentifierType::IDENTIFIER_BATTERY;
	public const IDENTIFIER_WIFI = PropertyIdentifierType::IDENTIFIER_WIFI;
	public const IDENTIFIER_SIGNAL = PropertyIdentifierType::IDENTIFIER_SIGNAL;
	public const IDENTIFIER_RSSI = PropertyIdentifierType::IDENTIFIER_RSSI;
	public const IDENTIFIER_SSID = PropertyIdentifierType::IDENTIFIER_SSID;
	public const IDENTIFIER_VCC = PropertyIdentifierType::IDENTIFIER_VCC;
	public const IDENTIFIER_CPU_LOAD = PropertyIdentifierType::IDENTIFIER_CPU_LOAD;
	public const IDENTIFIER_UPTIME = PropertyIdentifierType::IDENTIFIER_UPTIME;
	public const IDENTIFIER_ADDRESS = PropertyIdentifierType::IDENTIFIER_ADDRESS;
	public const IDENTIFIER_IP_ADDRESS = PropertyIdentifierType::IDENTIFIER_IP_ADDRESS;
	public const IDENTIFIER_STATUS_LED = PropertyIdentifierType::IDENTIFIER_STATUS_LED;
	public const IDENTIFIER_FREE_HEAP = PropertyIdentifierType::IDENTIFIER_FREE_HEAP;

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return strval(self::getValue());
	}

}

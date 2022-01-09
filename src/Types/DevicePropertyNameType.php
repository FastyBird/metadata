<?php declare(strict_types = 1);

/**
 * DevicePropertyNameType.php
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
 * Device property name types
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class DevicePropertyNameType extends Consistence\Enum\Enum
{

	/**
	 * Define device states
	 */
	public const NAME_STATE = 'state';
	public const NAME_BATTERY = 'battery';
	public const NAME_WIFI = 'wifi';
	public const NAME_SIGNAL = 'signal';
	public const NAME_RSSI = 'rssi';
	public const NAME_VCC = 'vcc';
	public const NAME_CPU_LOAD = 'cpu-load';
	public const NAME_UPTIME = 'uptime';
	public const NAME_IP_ADDRESS = 'ip-address';
	public const NAME_STATUS_LED = 'status-led';
	public const NAME_FREE_HEAP = 'free-heap';

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return (string) self::getValue();
	}

}

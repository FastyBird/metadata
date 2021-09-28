<?php declare(strict_types = 1);

/**
 * DevicePropertyNameType.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Types
 * @since          0.2.0
 *
 * @date           16.07.21
 */

namespace FastyBird\ModulesMetadata\Types;

use Consistence;

/**
 * Device property name types
 *
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class DevicePropertyNameType extends Consistence\Enum\Enum
{

	/**
	 * Define device states
	 */
	public const TYPE_STATE = 'state';
	public const TYPE_BATTERY = 'battery';
	public const TYPE_WIFI = 'wifi';
	public const TYPE_SIGNAL = 'signal';
	public const RSSI = 'rssi';
	public const VCC = 'vcc';
	public const CPU_LOAD = 'cpu-load';
	public const UPTIME = 'uptime';
	public const IP_ADDRESS = 'ip-address';
	public const STATUS_LED = 'status-led';
	public const FREE_HEAP = 'free-heap';

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return (string) self::getValue();
	}

}

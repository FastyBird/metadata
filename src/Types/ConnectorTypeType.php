<?php declare(strict_types = 1);

/**
 * ConnectorTypeType.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Types
 * @since          0.19.0
 *
 * @date           07.01.22
 */

namespace FastyBird\ModulesMetadata\Types;

use Consistence;

/**
 * Connector types
 *
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class ConnectorTypeType extends Consistence\Enum\Enum
{

	/**
	 * Define types
	 */
    public const TYPE_FB_BUS = 'fb-bus';
    public const TYPE_FB_MQTT = 'fb-mqtt';
    public const TYPE_SHELLY = 'shelly';
    public const TYPE_TUYA = 'tuya';
    public const TYPE_SONOFF = 'sonoff';
    public const TYPE_MODBUS = 'modbus';

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return (string) self::getValue();
	}

}

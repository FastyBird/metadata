<?php declare(strict_types = 1);

/**
 * ConnectorOriginType.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 * @since          0.30.0
 *
 * @date           19.01.22
 */

namespace FastyBird\Metadata\Types;

use Consistence;
use FastyBird\Metadata;

/**
 * Connectors origins types
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class ConnectorOriginType extends Consistence\Enum\Enum
{

	/**
	 * Define types
	 */
	public const ORIGIN_NOT_SPECIFIED = Metadata\Constants::NOT_SPECIFIED_ORIGIN;
	public const ORIGIN_CONNECTOR_FB_BUS = Metadata\Constants::CONNECTOR_FB_BUS;
	public const ORIGIN_CONNECTOR_FB_MQTT = Metadata\Constants::CONNECTOR_FB_MQTT;
	public const ORIGIN_CONNECTOR_SHELLY = Metadata\Constants::CONNECTOR_SHELLY;
	public const ORIGIN_CONNECTOR_TUYA = Metadata\Constants::CONNECTOR_TUYA;
	public const ORIGIN_CONNECTOR_SONOFF = Metadata\Constants::CONNECTOR_SONOFF;
	public const ORIGIN_CONNECTOR_MODBUS = Metadata\Constants::CONNECTOR_MODBUS;

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return strval(self::getValue());
	}

}

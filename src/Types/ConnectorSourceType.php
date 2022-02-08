<?php declare(strict_types = 1);

/**
 * ConnectorSourceType.php
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
 * Connectors sources types
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class ConnectorSourceType extends Consistence\Enum\Enum
{

	/**
	 * Define types
	 */
	public const SOURCE_NOT_SPECIFIED = Metadata\Constants::NOT_SPECIFIED_SOURCE;
	public const SOURCE_CONNECTOR_FB_BUS = Metadata\Constants::CONNECTOR_FB_BUS_SOURCE;
	public const SOURCE_CONNECTOR_FB_MQTT = Metadata\Constants::CONNECTOR_FB_MQTT_SOURCE;
	public const SOURCE_CONNECTOR_SHELLY = Metadata\Constants::CONNECTOR_SHELLY_SOURCE;
	public const SOURCE_CONNECTOR_TUYA = Metadata\Constants::CONNECTOR_TUYA_SOURCE;
	public const SOURCE_CONNECTOR_SONOFF = Metadata\Constants::CONNECTOR_SONOFF_SOURCE;
	public const SOURCE_CONNECTOR_MODBUS = Metadata\Constants::CONNECTOR_MODBUS_SOURCE;

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return strval(self::getValue());
	}

}

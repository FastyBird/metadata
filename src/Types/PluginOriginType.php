<?php declare(strict_types = 1);

/**
 * PluginOriginType.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 * @since          0.1.0
 *
 * @date           08.01.22
 */

namespace FastyBird\Metadata\Types;

use Consistence;
use FastyBird\Metadata;

/**
 * Modules origins types
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class PluginOriginType extends Consistence\Enum\Enum
{

	/**
	 * Define types
	 */
	public const ORIGIN_NOT_SPECIFIED = Metadata\Constants::NOT_SPECIFIED_ORIGIN;
	public const ORIGIN_PLUGIN_CONNECTOR_FB_BUS = Metadata\Constants::PLUGIN_CONNECTOR_FB_BUS;
	public const ORIGIN_PLUGIN_CONNECTOR_FB_MQTT = Metadata\Constants::PLUGIN_CONNECTOR_FB_MQTT;
	public const ORIGIN_PLUGIN_CONNECTOR_SHELLY = Metadata\Constants::PLUGIN_CONNECTOR_SHELLY;
	public const ORIGIN_PLUGIN_CONNECTOR_TUYA = Metadata\Constants::PLUGIN_CONNECTOR_TUYA;
	public const ORIGIN_PLUGIN_CONNECTOR_SONOFF = Metadata\Constants::PLUGIN_CONNECTOR_SONOFF;
	public const ORIGIN_PLUGIN_CONNECTOR_MODBUS = Metadata\Constants::PLUGIN_CONNECTOR_MODBUS;

	public const ORIGIN_PLUGIN_EXCHANGE_WS = Metadata\Constants::PLUGIN_EXCHANGE_WS;
	public const ORIGIN_PLUGIN_EXCHANGE_REDISDB = Metadata\Constants::PLUGIN_EXCHANGE_REDISDB;
	public const ORIGIN_PLUGIN_EXCHANGE_RABBITMQ = Metadata\Constants::PLUGIN_EXCHANGE_RABBITMQ;

	public const ORIGIN_PLUGIN_STORAGE_REDISDB = Metadata\Constants::PLUGIN_STORAGE_REDISDB;
	public const ORIGIN_PLUGIN_STORAGE_COUCHDB = Metadata\Constants::PLUGIN_STORAGE_COUCHDB;

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return strval(self::getValue());
	}

}

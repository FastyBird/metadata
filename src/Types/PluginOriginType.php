<?php declare(strict_types = 1);

/**
 * PluginOriginType.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Types
 * @since          0.1.0
 *
 * @date           08.01.22
 */

namespace FastyBird\ModulesMetadata\Types;

use Consistence;
use FastyBird\ModulesMetadata;

/**
 * Modules origins types
 *
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     Types
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
class PluginOriginType extends Consistence\Enum\Enum
{

	/**
	 * Define types
	 */
	public const ORIGIN_NOT_SPECIFIED = ModulesMetadata\Constants::NOT_SPECIFIED_ORIGIN;
	public const ORIGIN_PLUGIN_CONNECTOR_FB_BUS = ModulesMetadata\Constants::PLUGIN_CONNECTOR_FB_BUS;
	public const ORIGIN_PLUGIN_CONNECTOR_FB_MQTT = ModulesMetadata\Constants::PLUGIN_CONNECTOR_FB_MQTT;
	public const ORIGIN_PLUGIN_CONNECTOR_SHELLY = ModulesMetadata\Constants::PLUGIN_CONNECTOR_SHELLY;
	public const ORIGIN_PLUGIN_CONNECTOR_TUYA = ModulesMetadata\Constants::PLUGIN_CONNECTOR_TUYA;
	public const ORIGIN_PLUGIN_CONNECTOR_SONOFF = ModulesMetadata\Constants::PLUGIN_CONNECTOR_SONOFF;
	public const ORIGIN_PLUGIN_CONNECTOR_MODBUS = ModulesMetadata\Constants::PLUGIN_CONNECTOR_MODBUS;

	public const ORIGIN_PLUGIN_EXCHANGE_WS = ModulesMetadata\Constants::PLUGIN_EXCHANGE_WS;
	public const ORIGIN_PLUGIN_EXCHANGE_REDISDB = ModulesMetadata\Constants::PLUGIN_EXCHANGE_REDISDB;
	public const ORIGIN_PLUGIN_EXCHANGE_RABBITMQ = ModulesMetadata\Constants::PLUGIN_EXCHANGE_RABBITMQ;

	public const ORIGIN_PLUGIN_STORAGE_REDISDB = ModulesMetadata\Constants::PLUGIN_STORAGE_REDISDB;
	public const ORIGIN_PLUGIN_STORAGE_COUCHDB = ModulesMetadata\Constants::PLUGIN_STORAGE_COUCHDB;

	/**
	 * @return string
	 */
	public function __toString(): string
	{
		return (string) self::getValue();
	}

}

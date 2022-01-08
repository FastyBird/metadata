<?php declare(strict_types = 1);

/**
 * Constants.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     common
 * @since          0.1.0
 *
 * @date           04.05.20
 */

namespace FastyBird\ModulesMetadata;

/**
 * Library constants
 *
 * @package        FastyBird:ModulesMetadata!
 * @subpackage     common
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class Constants
{

	public const RESOURCES_FOLDER = __DIR__ . '/../resources';

	public const EXCHANGE_CHANNEL_NAME = 'fb_exchange';

	/**
	 * App origins
	 */

	public const NOT_SPECIFIED_ORIGIN = '*';

	public const MODULE_ACCOUNTS_ORIGIN = 'com.fastybird.accounts-module';
	public const MODULE_DEVICES_ORIGIN = 'com.fastybird.devices-module';
	public const MODULE_TRIGGERS_ORIGIN = 'com.fastybird.triggers-module';
	public const MODULE_UI_ORIGIN = 'com.fastybird.ui-module';
	public const MODULE_WEB_UI_ORIGIN = 'com.fastybird.web-ui-module';

	public const PLUGIN_CONNECTOR_FB_BUS = 'com.fastybird.fb-bus-connector-plugin';
	public const PLUGIN_CONNECTOR_FB_MQTT = 'com.fastybird.fb-mqtt-connector-plugin';
	public const PLUGIN_CONNECTOR_SHELLY = 'com.fastybird.shelly-connector-plugin';
	public const PLUGIN_CONNECTOR_TUYA = 'com.fastybird.tuya-connector-plugin';
	public const PLUGIN_CONNECTOR_SONOFF = 'com.fastybird.sonoff-connector-plugin';
	public const PLUGIN_CONNECTOR_MODBUS = 'com.fastybird.modbus-connector-plugin';

	public const PLUGIN_EXCHANGE_WS = 'com.fastybird.ws-exchange-plugin';
	public const PLUGIN_EXCHANGE_REDISDB = 'com.fastybird.redisdb-exchange-plugin';
	public const PLUGIN_EXCHANGE_RABBITMQ = 'com.fastybird.rabbitmq-exchange-plugin';

	public const PLUGIN_STORAGE_REDISDB = 'com.fastybird.redisdb-storage-plugin';
	public const PLUGIN_STORAGE_COUCHDB = 'com.fastybird.couchdb-storage-plugin';

	/**
	 * Modules prefixes
	 */

	public const MODULE_ACCOUNTS_PREFIX = 'accounts-module';
	public const MODULE_DEVICES_PREFIX = 'devices-module';
	public const MODULE_TRIGGERS_PREFIX = 'triggers-module';
	public const MODULE_UI_PREFIX = 'ui-module';

	/**
	 * Message bus routing keys
	 */

	/**
	 * Global
	 */

	public const MESSAGE_BUS_DEVICES_PROPERTIES_DATA_ROUTING_KEY     = 'fb.bus.data.device.property';
	public const MESSAGE_BUS_DEVICES_CONFIGURATION_DATA_ROUTING_KEY  = 'fb.bus.data.device.configuration';
	public const MESSAGE_BUS_DEVICES_CONTROL_DATA_ROUTING_KEY        = 'fb.bus.data.device.control';
	public const MESSAGE_BUS_CHANNELS_PROPERTIES_DATA_ROUTING_KEY    = 'fb.bus.data.channel.property';
	public const MESSAGE_BUS_CHANNELS_CONFIGURATION_DATA_ROUTING_KEY = 'fb.bus.data.channel.configuration';
	public const MESSAGE_BUS_CHANNELS_CONTROL_DATA_ROUTING_KEY       = 'fb.bus.data.channel.control';
	public const MESSAGE_BUS_CONNECTORS_CONTROL_DATA_ROUTING_KEY     = 'fb.bus.data.connector.control';
	public const MESSAGE_BUS_TRIGGERS_CONTROL_DATA_ROUTING_KEY       = 'fb.bus.data.trigger.control';

	/**
	 * Accounts module
	 */

	// Accounts
	public const MESSAGE_BUS_ACCOUNTS_REPORTED_ENTITY_ROUTING_KEY = 'fb.bus.entity.reported.account';
	public const MESSAGE_BUS_ACCOUNTS_CREATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.created.account';
	public const MESSAGE_BUS_ACCOUNTS_UPDATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.updated.account';
	public const MESSAGE_BUS_ACCOUNTS_DELETED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.deleted.account';

	// Emails
	public const MESSAGE_BUS_EMAILS_REPORTED_ENTITY_ROUTING_KEY = 'fb.bus.entity.reported.email';
	public const MESSAGE_BUS_EMAILS_CREATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.created.email';
	public const MESSAGE_BUS_EMAILS_UPDATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.updated.email';
	public const MESSAGE_BUS_EMAILS_DELETED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.deleted.email';

	// Identities
	public const MESSAGE_BUS_IDENTITIES_REPORTED_ENTITY_ROUTING_KEY = 'fb.bus.entity.reported.identity';
	public const MESSAGE_BUS_IDENTITIES_CREATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.created.identity';
	public const MESSAGE_BUS_IDENTITIES_UPDATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.updated.identity';
	public const MESSAGE_BUS_IDENTITIES_DELETED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.deleted.identity';

	// Roles
	public const MESSAGE_BUS_ROLES_REPORTED_ENTITY_ROUTING_KEY = 'fb.bus.entity.reported.role';
	public const MESSAGE_BUS_ROLES_CREATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.created.role';
	public const MESSAGE_BUS_ROLES_UPDATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.updated.role';
	public const MESSAGE_BUS_ROLES_DELETED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.deleted.role';

	/**
	 * Devices module
	 */

	// Devices
	public const MESSAGE_BUS_DEVICES_REPORTED_ENTITY_ROUTING_KEY = 'fb.bus.entity.reported.device';
	public const MESSAGE_BUS_DEVICES_CREATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.created.device';
	public const MESSAGE_BUS_DEVICES_UPDATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.updated.device';
	public const MESSAGE_BUS_DEVICES_DELETED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.deleted.device';

	// Devices properties
	public const MESSAGE_BUS_DEVICES_PROPERTY_REPORTED_ENTITY_ROUTING_KEY = 'fb.bus.entity.reported.device.property';
	public const MESSAGE_BUS_DEVICES_PROPERTY_CREATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.created.device.property';
	public const MESSAGE_BUS_DEVICES_PROPERTY_UPDATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.updated.device.property';
	public const MESSAGE_BUS_DEVICES_PROPERTY_DELETED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.deleted.device.property';

	// Devices configuration
	public const MESSAGE_BUS_DEVICES_CONFIGURATION_REPORTED_ENTITY_ROUTING_KEY = 'fb.bus.entity.reported.device.configuration';
	public const MESSAGE_BUS_DEVICES_CONFIGURATION_CREATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.created.device.configuration';
	public const MESSAGE_BUS_DEVICES_CONFIGURATION_UPDATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.updated.device.configuration';
	public const MESSAGE_BUS_DEVICES_CONFIGURATION_DELETED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.deleted.device.configuration';

	// Devices control
	public const MESSAGE_BUS_DEVICES_CONTROL_REPORTED_ENTITY_ROUTING_KEY = 'fb.bus.entity.reported.device.control';
	public const MESSAGE_BUS_DEVICES_CONTROL_CREATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.created.device.control';
	public const MESSAGE_BUS_DEVICES_CONTROL_UPDATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.updated.device.control';
	public const MESSAGE_BUS_DEVICES_CONTROL_DELETED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.deleted.device.control';

	// Channels
	public const MESSAGE_BUS_CHANNELS_REPORTED_ENTITY_ROUTING_KEY = 'fb.bus.entity.reported.channel';
	public const MESSAGE_BUS_CHANNELS_CREATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.created.channel';
	public const MESSAGE_BUS_CHANNELS_UPDATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.updated.channel';
	public const MESSAGE_BUS_CHANNELS_DELETED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.deleted.channel';

	// Channels properties
	public const MESSAGE_BUS_CHANNELS_PROPERTY_REPORTED_ENTITY_ROUTING_KEY = 'fb.bus.entity.reported.channel.property';
	public const MESSAGE_BUS_CHANNELS_PROPERTY_CREATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.created.channel.property';
	public const MESSAGE_BUS_CHANNELS_PROPERTY_UPDATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.updated.channel.property';
	public const MESSAGE_BUS_CHANNELS_PROPERTY_DELETED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.deleted.channel.property';

	// Channels configuration
	public const MESSAGE_BUS_CHANNELS_CONFIGURATION_REPORTED_ENTITY_ROUTING_KEY = 'fb.bus.entity.reported.channel.configuration';
	public const MESSAGE_BUS_CHANNELS_CONFIGURATION_CREATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.created.channel.configuration';
	public const MESSAGE_BUS_CHANNELS_CONFIGURATION_UPDATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.updated.channel.configuration';
	public const MESSAGE_BUS_CHANNELS_CONFIGURATION_DELETED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.deleted.channel.configuration';

	// Channels control
	public const MESSAGE_BUS_CHANNELS_CONTROL_REPORTED_ENTITY_ROUTING_KEY = 'fb.bus.entity.reported.channel.control';
	public const MESSAGE_BUS_CHANNELS_CONTROL_CREATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.created.channel.control';
	public const MESSAGE_BUS_CHANNELS_CONTROL_UPDATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.updated.channel.control';
	public const MESSAGE_BUS_CHANNELS_CONTROL_DELETED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.deleted.channel.control';

	// Connectors configuration
	public const MESSAGE_BUS_CONNECTORS_REPORTED_ENTITY_ROUTING_KEY = 'fb.bus.entity.reported.connector';
	public const MESSAGE_BUS_CONNECTORS_CREATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.created.connector';
	public const MESSAGE_BUS_CONNECTORS_UPDATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.updated.connector';
	public const MESSAGE_BUS_CONNECTORS_DELETED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.deleted.connector';

	// Connectors control
	public const MESSAGE_BUS_CONNECTORS_CONTROL_REPORTED_ENTITY_ROUTING_KEY = 'fb.bus.entity.reported.connector.control';
	public const MESSAGE_BUS_CONNECTORS_CONTROL_CREATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.created.connector.control';
	public const MESSAGE_BUS_CONNECTORS_CONTROL_UPDATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.updated.connector.control';
	public const MESSAGE_BUS_CONNECTORS_CONTROL_DELETED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.deleted.connector.control';

	/**
	 * Triggers module
	 */

	// Triggers
	public const MESSAGE_BUS_TRIGGERS_REPORTED_ENTITY_ROUTING_KEY = 'fb.bus.entity.reported.trigger';
	public const MESSAGE_BUS_TRIGGERS_CREATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.created.trigger';
	public const MESSAGE_BUS_TRIGGERS_UPDATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.updated.trigger';
	public const MESSAGE_BUS_TRIGGERS_DELETED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.deleted.trigger';

	// Triggers control
	public const MESSAGE_BUS_TRIGGERS_CONTROL_REPORTED_ENTITY_ROUTING_KEY = 'fb.bus.entity.reported.trigger.control';
	public const MESSAGE_BUS_TRIGGERS_CONTROL_CREATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.created.trigger.control';
	public const MESSAGE_BUS_TRIGGERS_CONTROL_UPDATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.updated.trigger.control';
	public const MESSAGE_BUS_TRIGGERS_CONTROL_DELETED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.deleted.trigger.control';

	// Triggers actions
	public const MESSAGE_BUS_TRIGGERS_ACTIONS_REPORTED_ENTITY_ROUTING_KEY = 'fb.bus.entity.reported.trigger.action';
	public const MESSAGE_BUS_TRIGGERS_ACTIONS_CREATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.created.trigger.action';
	public const MESSAGE_BUS_TRIGGERS_ACTIONS_UPDATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.updated.trigger.action';
	public const MESSAGE_BUS_TRIGGERS_ACTIONS_DELETED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.deleted.trigger.action';

	// Triggers notifications
	public const MESSAGE_BUS_TRIGGERS_NOTIFICATIONS_REPORTED_ENTITY_ROUTING_KEY = 'fb.bus.entity.reported.trigger.notification';
	public const MESSAGE_BUS_TRIGGERS_NOTIFICATIONS_CREATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.created.trigger.notification';
	public const MESSAGE_BUS_TRIGGERS_NOTIFICATIONS_UPDATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.updated.trigger.notification';
	public const MESSAGE_BUS_TRIGGERS_NOTIFICATIONS_DELETED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.deleted.trigger.notification';

	// Triggers conditions
	public const MESSAGE_BUS_TRIGGERS_CONDITIONS_REPORTED_ENTITY_ROUTING_KEY = 'fb.bus.entity.reported.trigger.condition';
	public const MESSAGE_BUS_TRIGGERS_CONDITIONS_CREATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.created.trigger.condition';
	public const MESSAGE_BUS_TRIGGERS_CONDITIONS_UPDATED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.updated.trigger.condition';
	public const MESSAGE_BUS_TRIGGERS_CONDITIONS_DELETED_ENTITY_ROUTING_KEY  = 'fb.bus.entity.deleted.trigger.condition';

	/*
	 * JSON schemas mapping
	 */

	public const JSON_SCHEMAS_MAPPING = [
		self::MESSAGE_BUS_DEVICES_PROPERTIES_DATA_ROUTING_KEY     => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'data.device.property.json',
		self::MESSAGE_BUS_DEVICES_CONFIGURATION_DATA_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'data.device.configuration.json',
		self::MESSAGE_BUS_DEVICES_CONTROL_DATA_ROUTING_KEY        => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'data.device.control.json',
		self::MESSAGE_BUS_CHANNELS_PROPERTIES_DATA_ROUTING_KEY    => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'data.channel.property.json',
		self::MESSAGE_BUS_CHANNELS_CONFIGURATION_DATA_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'data.channel.configuration.json',
		self::MESSAGE_BUS_CHANNELS_CONTROL_DATA_ROUTING_KEY       => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'data.channel.control.json',
		self::MESSAGE_BUS_CONNECTORS_CONTROL_DATA_ROUTING_KEY     => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'data.connector.control.json',
		self::MESSAGE_BUS_TRIGGERS_CONTROL_DATA_ROUTING_KEY       => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'data' . DIRECTORY_SEPARATOR . 'data.trigger.control.json',

		self::MESSAGE_BUS_ACCOUNTS_REPORTED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.account.json',
		self::MESSAGE_BUS_ACCOUNTS_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.account.json',
		self::MESSAGE_BUS_ACCOUNTS_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.account.json',
		self::MESSAGE_BUS_ACCOUNTS_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.account.json',

		self::MESSAGE_BUS_EMAILS_REPORTED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.email.json',
		self::MESSAGE_BUS_EMAILS_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.email.json',
		self::MESSAGE_BUS_EMAILS_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.email.json',
		self::MESSAGE_BUS_EMAILS_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.email.json',

		self::MESSAGE_BUS_IDENTITIES_REPORTED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.identity.json',
		self::MESSAGE_BUS_IDENTITIES_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.identity.json',
		self::MESSAGE_BUS_IDENTITIES_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.identity.json',
		self::MESSAGE_BUS_IDENTITIES_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.identity.json',

		self::MESSAGE_BUS_ROLES_REPORTED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.role.json',
		self::MESSAGE_BUS_ROLES_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.role.json',
		self::MESSAGE_BUS_ROLES_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.role.json',
		self::MESSAGE_BUS_ROLES_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.role.json',

		self::MESSAGE_BUS_DEVICES_REPORTED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.json',
		self::MESSAGE_BUS_DEVICES_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.json',
		self::MESSAGE_BUS_DEVICES_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.json',
		self::MESSAGE_BUS_DEVICES_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.json',

		self::MESSAGE_BUS_DEVICES_PROPERTY_REPORTED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.property.json',
		self::MESSAGE_BUS_DEVICES_PROPERTY_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.property.json',
		self::MESSAGE_BUS_DEVICES_PROPERTY_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.property.json',
		self::MESSAGE_BUS_DEVICES_PROPERTY_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.property.json',

		self::MESSAGE_BUS_DEVICES_CONFIGURATION_REPORTED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.configuration.json',
		self::MESSAGE_BUS_DEVICES_CONFIGURATION_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.configuration.json',
		self::MESSAGE_BUS_DEVICES_CONFIGURATION_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.configuration.json',
		self::MESSAGE_BUS_DEVICES_CONFIGURATION_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.configuration.json',

		self::MESSAGE_BUS_DEVICES_CONTROL_REPORTED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.control.json',
		self::MESSAGE_BUS_DEVICES_CONTROL_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.control.json',
		self::MESSAGE_BUS_DEVICES_CONTROL_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.control.json',
		self::MESSAGE_BUS_DEVICES_CONTROL_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.control.json',

		self::MESSAGE_BUS_CHANNELS_REPORTED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.json',
		self::MESSAGE_BUS_CHANNELS_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.json',
		self::MESSAGE_BUS_CHANNELS_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.json',
		self::MESSAGE_BUS_CHANNELS_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.json',

		self::MESSAGE_BUS_CHANNELS_PROPERTY_REPORTED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.property.json',
		self::MESSAGE_BUS_CHANNELS_PROPERTY_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.property.json',
		self::MESSAGE_BUS_CHANNELS_PROPERTY_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.property.json',
		self::MESSAGE_BUS_CHANNELS_PROPERTY_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.property.json',

		self::MESSAGE_BUS_CHANNELS_CONFIGURATION_REPORTED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.configuration.json',
		self::MESSAGE_BUS_CHANNELS_CONFIGURATION_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.configuration.json',
		self::MESSAGE_BUS_CHANNELS_CONFIGURATION_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.configuration.json',
		self::MESSAGE_BUS_CHANNELS_CONFIGURATION_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.configuration.json',

		self::MESSAGE_BUS_CHANNELS_CONTROL_REPORTED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.control.json',
		self::MESSAGE_BUS_CHANNELS_CONTROL_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.control.json',
		self::MESSAGE_BUS_CHANNELS_CONTROL_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.control.json',
		self::MESSAGE_BUS_CHANNELS_CONTROL_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.control.json',

		self::MESSAGE_BUS_CONNECTORS_REPORTED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.connector.json',
		self::MESSAGE_BUS_CONNECTORS_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.connector.json',
		self::MESSAGE_BUS_CONNECTORS_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.connector.json',
		self::MESSAGE_BUS_CONNECTORS_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.connector.json',

		self::MESSAGE_BUS_CONNECTORS_CONTROL_REPORTED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.connector.control.json',
		self::MESSAGE_BUS_CONNECTORS_CONTROL_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.connector.control.json',
		self::MESSAGE_BUS_CONNECTORS_CONTROL_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.connector.control.json',
		self::MESSAGE_BUS_CONNECTORS_CONTROL_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.connector.control.json',

		self::MESSAGE_BUS_TRIGGERS_REPORTED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.trigger.json',
		self::MESSAGE_BUS_TRIGGERS_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.trigger.json',
		self::MESSAGE_BUS_TRIGGERS_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.trigger.json',
		self::MESSAGE_BUS_TRIGGERS_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.trigger.json',

		self::MESSAGE_BUS_TRIGGERS_CONTROL_REPORTED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.trigger.control.json',
		self::MESSAGE_BUS_TRIGGERS_CONTROL_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.trigger.control.json',
		self::MESSAGE_BUS_TRIGGERS_CONTROL_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.trigger.control.json',
		self::MESSAGE_BUS_TRIGGERS_CONTROL_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.trigger.control.json',

		self::MESSAGE_BUS_TRIGGERS_ACTIONS_REPORTED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.action.json',
		self::MESSAGE_BUS_TRIGGERS_ACTIONS_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.action.json',
		self::MESSAGE_BUS_TRIGGERS_ACTIONS_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.action.json',
		self::MESSAGE_BUS_TRIGGERS_ACTIONS_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.action.json',

		self::MESSAGE_BUS_TRIGGERS_NOTIFICATIONS_REPORTED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.notification.json',
		self::MESSAGE_BUS_TRIGGERS_NOTIFICATIONS_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.notification.json',
		self::MESSAGE_BUS_TRIGGERS_NOTIFICATIONS_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.notification.json',
		self::MESSAGE_BUS_TRIGGERS_NOTIFICATIONS_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.notification.json',

		self::MESSAGE_BUS_TRIGGERS_CONDITIONS_REPORTED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.condition.json',
		self::MESSAGE_BUS_TRIGGERS_CONDITIONS_CREATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.condition.json',
		self::MESSAGE_BUS_TRIGGERS_CONDITIONS_UPDATED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.condition.json',
		self::MESSAGE_BUS_TRIGGERS_CONDITIONS_DELETED_ENTITY_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.condition.json',
	];

}

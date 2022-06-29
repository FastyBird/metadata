<?php declare(strict_types = 1);

/**
 * Constants.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     common
 * @since          0.1.0
 *
 * @date           04.05.20
 */

namespace FastyBird\Metadata;

/**
 * Library constants
 *
 * @package        FastyBird:Metadata!
 * @subpackage     common
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class Constants
{

	public const RESOURCES_FOLDER = __DIR__ . '/../resources';

	public const EXCHANGE_CHANNEL_NAME = 'fb_exchange';

	/**
	 * App sources
	 */

	public const NOT_SPECIFIED_SOURCE = '*';

	public const MODULE_ACCOUNTS_SOURCE = 'com.fastybird.accounts-module';
	public const MODULE_DEVICES_SOURCE = 'com.fastybird.devices-module';
	public const MODULE_TRIGGERS_SOURCE = 'com.fastybird.triggers-module';
	public const MODULE_UI_SOURCE = 'com.fastybird.ui-module';
	public const MODULE_WEB_UI_SOURCE = 'com.fastybird.web-ui-module';

	public const CONNECTOR_FB_BUS_SOURCE = 'com.fastybird.fb-bus-connector';
	public const CONNECTOR_FB_MQTT_SOURCE = 'com.fastybird.fb-mqtt-connector';
	public const CONNECTOR_SHELLY_SOURCE = 'com.fastybird.shelly-connector';
	public const CONNECTOR_TUYA_SOURCE = 'com.fastybird.tuya-connector';
	public const CONNECTOR_SONOFF_SOURCE = 'com.fastybird.sonoff-connector';
	public const CONNECTOR_MODBUS_SOURCE = 'com.fastybird.modbus-connector';
	public const CONNECTOR_HOMEKIT_SOURCE = 'com.fastybird.homekit-connector';
	public const CONNECTOR_ITEAD_SOURCE = 'com.fastybird.itead-connector';
	public const CONNECTOR_VIRTUAL_SOURCE = 'com.fastybird.virtual-connector';

	public const PLUGIN_STORAGE_COUCHDB_SOURCE = 'com.fastybird.couchdb-storage-plugin';
	public const PLUGIN_EXCHANGE_RABBITMQ_SOURCE = 'com.fastybird.rabbitmq-exchange-plugin';
	public const PLUGIN_EXCHANGE_REDISDB_SOURCE = 'com.fastybird.redisdb-exchange-plugin';
	public const PLUGIN_STORAGE_REDISDB_SOURCE = 'com.fastybird.redisdb-storage-plugin';

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

	public const MESSAGE_BUS_CONNECTOR_ACTION_ROUTING_KEY = 'fb.exchange.action.connector';
	public const MESSAGE_BUS_CONNECTOR_PROPERTY_ACTION_ROUTING_KEY = 'fb.exchange.action.connector.property';
	public const MESSAGE_BUS_DEVICE_ACTION_ROUTING_KEY = 'fb.exchange.action.device';
	public const MESSAGE_BUS_DEVICE_PROPERTY_ACTION_ROUTING_KEY = 'fb.exchange.action.device.property';
	public const MESSAGE_BUS_CHANNEL_ACTION_ROUTING_KEY = 'fb.exchange.action.channel';
	public const MESSAGE_BUS_CHANNEL_PROPERTY_ACTION_ROUTING_KEY = 'fb.exchange.action.channel.property';
	public const MESSAGE_BUS_TRIGGER_ACTION_ROUTING_KEY = 'fb.exchange.action.trigger';

	public const MESSAGE_BUS_MODULE_MESSAGE_ROUTING_KEY = 'fb.exchange.message.module';
	public const MESSAGE_BUS_PLUGIN_MESSAGE_ROUTING_KEY = 'fb.exchange.message.plugin';
	public const MESSAGE_BUS_CONNECTOR_MESSAGE_ROUTING_KEY = 'fb.exchange.message.connector';

	public const MESSAGE_BUS_ENTITY_PREFIX_KEY = 'fb.exchange.module.entity';

	public const MESSAGE_BUS_ENTITY_REPORTED_KEY = 'reported';
	public const MESSAGE_BUS_ENTITY_CREATED_KEY = 'created';
	public const MESSAGE_BUS_ENTITY_UPDATED_KEY = 'updated';
	public const MESSAGE_BUS_ENTITY_DELETED_KEY = 'deleted';

	/**
	 * MODULES
	 */

	/**
	 * Accounts module
	 */

	// Accounts
	public const MESSAGE_BUS_ACCOUNT_ENTITY_REPORTED_ROUTING_KEY = 'fb.exchange.module.entity.reported.account';
	public const MESSAGE_BUS_ACCOUNT_ENTITY_CREATED_ROUTING_KEY = 'fb.exchange.module.entity.created.account';
	public const MESSAGE_BUS_ACCOUNT_ENTITY_UPDATED_ROUTING_KEY = 'fb.exchange.module.entity.updated.account';
	public const MESSAGE_BUS_ACCOUNT_ENTITY_DELETED_ROUTING_KEY = 'fb.exchange.module.entity.deleted.account';

	// Emails
	public const MESSAGE_BUS_EMAIL_ENTITY_REPORTED_ROUTING_KEY = 'fb.exchange.module.entity.reported.email';
	public const MESSAGE_BUS_EMAIL_ENTITY_CREATED_ROUTING_KEY = 'fb.exchange.module.entity.created.email';
	public const MESSAGE_BUS_EMAIL_ENTITY_UPDATED_ROUTING_KEY = 'fb.exchange.module.entity.updated.email';
	public const MESSAGE_BUS_EMAIL_ENTITY_DELETED_ROUTING_KEY = 'fb.exchange.module.entity.deleted.email';

	// Identities
	public const MESSAGE_BUS_IDENTITY_ENTITY_REPORTED_ROUTING_KEY = 'fb.exchange.module.entity.reported.identity';
	public const MESSAGE_BUS_IDENTITY_ENTITY_CREATED_ROUTING_KEY = 'fb.exchange.module.entity.created.identity';
	public const MESSAGE_BUS_IDENTITY_ENTITY_UPDATED_ROUTING_KEY = 'fb.exchange.module.entity.updated.identity';
	public const MESSAGE_BUS_IDENTITY_ENTITY_DELETED_ROUTING_KEY = 'fb.exchange.module.entity.deleted.identity';

	// Roles
	public const MESSAGE_BUS_ROLE_ENTITY_REPORTED_ROUTING_KEY = 'fb.exchange.module.entity.reported.role';
	public const MESSAGE_BUS_ROLE_ENTITY_CREATED_ROUTING_KEY = 'fb.exchange.module.entity.created.role';
	public const MESSAGE_BUS_ROLE_ENTITY_UPDATED_ROUTING_KEY = 'fb.exchange.module.entity.updated.role';
	public const MESSAGE_BUS_ROLE_ENTITY_DELETED_ROUTING_KEY = 'fb.exchange.module.entity.deleted.role';

	/**
	 * Devices module
	 */

	// Devices
	public const MESSAGE_BUS_DEVICE_ENTITY_REPORTED_ROUTING_KEY = 'fb.exchange.module.entity.reported.device';
	public const MESSAGE_BUS_DEVICE_ENTITY_CREATED_ROUTING_KEY = 'fb.exchange.module.entity.created.device';
	public const MESSAGE_BUS_DEVICE_ENTITY_UPDATED_ROUTING_KEY = 'fb.exchange.module.entity.updated.device';
	public const MESSAGE_BUS_DEVICE_ENTITY_DELETED_ROUTING_KEY = 'fb.exchange.module.entity.deleted.device';

	// Devices properties
	public const MESSAGE_BUS_DEVICE_PROPERTY_ENTITY_REPORTED_ROUTING_KEY = 'fb.exchange.module.entity.reported.device.property';
	public const MESSAGE_BUS_DEVICE_PROPERTY_ENTITY_CREATED_ROUTING_KEY = 'fb.exchange.module.entity.created.device.property';
	public const MESSAGE_BUS_DEVICE_PROPERTY_ENTITY_UPDATED_ROUTING_KEY = 'fb.exchange.module.entity.updated.device.property';
	public const MESSAGE_BUS_DEVICE_PROPERTY_ENTITY_DELETED_ROUTING_KEY = 'fb.exchange.module.entity.deleted.device.property';

	// Devices control
	public const MESSAGE_BUS_DEVICE_CONTROL_ENTITY_REPORTED_ROUTING_KEY = 'fb.exchange.module.entity.reported.device.control';
	public const MESSAGE_BUS_DEVICE_CONTROL_ENTITY_CREATED_ROUTING_KEY = 'fb.exchange.module.entity.created.device.control';
	public const MESSAGE_BUS_DEVICE_CONTROL_ENTITY_UPDATED_ROUTING_KEY = 'fb.exchange.module.entity.updated.device.control';
	public const MESSAGE_BUS_DEVICE_CONTROL_ENTITY_DELETED_ROUTING_KEY = 'fb.exchange.module.entity.deleted.device.control';

	// Devices attribute
	public const MESSAGE_BUS_DEVICE_ATTRIBUTE_ENTITY_REPORTED_ROUTING_KEY = 'fb.exchange.module.entity.reported.device.attribute';
	public const MESSAGE_BUS_DEVICE_ATTRIBUTE_ENTITY_CREATED_ROUTING_KEY = 'fb.exchange.module.entity.created.device.attribute';
	public const MESSAGE_BUS_DEVICE_ATTRIBUTE_ENTITY_UPDATED_ROUTING_KEY = 'fb.exchange.module.entity.updated.device.attribute';
	public const MESSAGE_BUS_DEVICE_ATTRIBUTE_ENTITY_DELETED_ROUTING_KEY = 'fb.exchange.module.entity.deleted.device.attribute';

	// Channels
	public const MESSAGE_BUS_CHANNEL_ENTITY_REPORTED_ROUTING_KEY = 'fb.exchange.module.entity.reported.channel';
	public const MESSAGE_BUS_CHANNEL_ENTITY_CREATED_ROUTING_KEY = 'fb.exchange.module.entity.created.channel';
	public const MESSAGE_BUS_CHANNEL_ENTITY_UPDATED_ROUTING_KEY = 'fb.exchange.module.entity.updated.channel';
	public const MESSAGE_BUS_CHANNEL_ENTITY_DELETED_ROUTING_KEY = 'fb.exchange.module.entity.deleted.channel';

	// Channels properties
	public const MESSAGE_BUS_CHANNEL_PROPERTY_ENTITY_REPORTED_ROUTING_KEY = 'fb.exchange.module.entity.reported.channel.property';
	public const MESSAGE_BUS_CHANNEL_PROPERTY_ENTITY_CREATED_ROUTING_KEY = 'fb.exchange.module.entity.created.channel.property';
	public const MESSAGE_BUS_CHANNEL_PROPERTY_ENTITY_UPDATED_ROUTING_KEY = 'fb.exchange.module.entity.updated.channel.property';
	public const MESSAGE_BUS_CHANNEL_PROPERTY_ENTITY_DELETED_ROUTING_KEY = 'fb.exchange.module.entity.deleted.channel.property';

	// Channels control
	public const MESSAGE_BUS_CHANNEL_CONTROL_ENTITY_REPORTED_ROUTING_KEY = 'fb.exchange.module.entity.reported.channel.control';
	public const MESSAGE_BUS_CHANNEL_CONTROL_ENTITY_CREATED_ROUTING_KEY = 'fb.exchange.module.entity.created.channel.control';
	public const MESSAGE_BUS_CHANNEL_CONTROL_ENTITY_UPDATED_ROUTING_KEY = 'fb.exchange.module.entity.updated.channel.control';
	public const MESSAGE_BUS_CHANNEL_CONTROL_ENTITY_DELETED_ROUTING_KEY = 'fb.exchange.module.entity.deleted.channel.control';

	// Connectors
	public const MESSAGE_BUS_CONNECTOR_ENTITY_REPORTED_ROUTING_KEY = 'fb.exchange.module.entity.reported.connector';
	public const MESSAGE_BUS_CONNECTOR_ENTITY_CREATED_ROUTING_KEY = 'fb.exchange.module.entity.created.connector';
	public const MESSAGE_BUS_CONNECTOR_ENTITY_UPDATED_ROUTING_KEY = 'fb.exchange.module.entity.updated.connector';
	public const MESSAGE_BUS_CONNECTOR_ENTITY_DELETED_ROUTING_KEY = 'fb.exchange.module.entity.deleted.connector';

	// Connectors properties
	public const MESSAGE_BUS_CONNECTOR_PROPERTY_ENTITY_REPORTED_ROUTING_KEY = 'fb.exchange.module.entity.reported.connector.property';
	public const MESSAGE_BUS_CONNECTOR_PROPERTY_ENTITY_CREATED_ROUTING_KEY = 'fb.exchange.module.entity.created.connector.property';
	public const MESSAGE_BUS_CONNECTOR_PROPERTY_ENTITY_UPDATED_ROUTING_KEY = 'fb.exchange.module.entity.updated.connector.property';
	public const MESSAGE_BUS_CONNECTOR_PROPERTY_ENTITY_DELETED_ROUTING_KEY = 'fb.exchange.module.entity.deleted.connector.property';

	// Connectors control
	public const MESSAGE_BUS_CONNECTOR_CONTROL_ENTITY_REPORTED_ROUTING_KEY = 'fb.exchange.module.entity.reported.connector.control';
	public const MESSAGE_BUS_CONNECTOR_CONTROL_ENTITY_CREATED_ROUTING_KEY = 'fb.exchange.module.entity.created.connector.control';
	public const MESSAGE_BUS_CONNECTOR_CONTROL_ENTITY_UPDATED_ROUTING_KEY = 'fb.exchange.module.entity.updated.connector.control';
	public const MESSAGE_BUS_CONNECTOR_CONTROL_ENTITY_DELETED_ROUTING_KEY = 'fb.exchange.module.entity.deleted.connector.control';

	/**
	 * Triggers module
	 */

	// Triggers
	public const MESSAGE_BUS_TRIGGER_ENTITY_REPORTED_ROUTING_KEY = 'fb.exchange.module.entity.reported.trigger';
	public const MESSAGE_BUS_TRIGGER_ENTITY_CREATED_ROUTING_KEY = 'fb.exchange.module.entity.created.trigger';
	public const MESSAGE_BUS_TRIGGER_ENTITY_UPDATED_ROUTING_KEY = 'fb.exchange.module.entity.updated.trigger';
	public const MESSAGE_BUS_TRIGGER_ENTITY_DELETED_ROUTING_KEY = 'fb.exchange.module.entity.deleted.trigger';

	// Triggers control
	public const MESSAGE_BUS_TRIGGER_CONTROL_ENTITY_REPORTED_ROUTING_KEY = 'fb.exchange.module.entity.reported.trigger.control';
	public const MESSAGE_BUS_TRIGGER_CONTROL_ENTITY_CREATED_ROUTING_KEY = 'fb.exchange.module.entity.created.trigger.control';
	public const MESSAGE_BUS_TRIGGER_CONTROL_ENTITY_UPDATED_ROUTING_KEY = 'fb.exchange.module.entity.updated.trigger.control';
	public const MESSAGE_BUS_TRIGGER_CONTROL_ENTITY_DELETED_ROUTING_KEY = 'fb.exchange.module.entity.deleted.trigger.control';

	// Triggers actions
	public const MESSAGE_BUS_TRIGGER_ACTION_ENTITY_REPORTED_ROUTING_KEY = 'fb.exchange.module.entity.reported.trigger.action';
	public const MESSAGE_BUS_TRIGGER_ACTION_ENTITY_CREATED_ROUTING_KEY = 'fb.exchange.module.entity.created.trigger.action';
	public const MESSAGE_BUS_TRIGGER_ACTION_ENTITY_UPDATED_ROUTING_KEY = 'fb.exchange.module.entity.updated.trigger.action';
	public const MESSAGE_BUS_TRIGGER_ACTION_ENTITY_DELETED_ROUTING_KEY = 'fb.exchange.module.entity.deleted.trigger.action';

	// Triggers notifications
	public const MESSAGE_BUS_TRIGGER_NOTIFICATION_ENTITY_REPORTED_ROUTING_KEY = 'fb.exchange.module.entity.reported.trigger.notification';
	public const MESSAGE_BUS_TRIGGER_NOTIFICATION_ENTITY_CREATED_ROUTING_KEY = 'fb.exchange.module.entity.created.trigger.notification';
	public const MESSAGE_BUS_TRIGGER_NOTIFICATION_ENTITY_UPDATED_ROUTING_KEY = 'fb.exchange.module.entity.updated.trigger.notification';
	public const MESSAGE_BUS_TRIGGER_NOTIFICATION_ENTITY_DELETED_ROUTING_KEY = 'fb.exchange.module.entity.deleted.trigger.notification';

	// Triggers conditions
	public const MESSAGE_BUS_TRIGGER_CONDITION_ENTITY_REPORTED_ROUTING_KEY = 'fb.exchange.module.entity.reported.trigger.condition';
	public const MESSAGE_BUS_TRIGGER_CONDITION_ENTITY_CREATED_ROUTING_KEY = 'fb.exchange.module.entity.created.trigger.condition';
	public const MESSAGE_BUS_TRIGGER_CONDITION_ENTITY_UPDATED_ROUTING_KEY = 'fb.exchange.module.entity.updated.trigger.condition';
	public const MESSAGE_BUS_TRIGGER_CONDITION_ENTITY_DELETED_ROUTING_KEY = 'fb.exchange.module.entity.deleted.trigger.condition';

	/*
	 * JSON schemas mapping
	 */

	public const JSON_SCHEMAS_MAPPING = [
		self::MESSAGE_BUS_CONNECTOR_ACTION_ROUTING_KEY             => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'actions' . DIRECTORY_SEPARATOR . 'action.connector.json',
		self::MESSAGE_BUS_CONNECTOR_PROPERTY_ACTION_ROUTING_KEY    => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'actions' . DIRECTORY_SEPARATOR . 'action.connector.property.json',
		self::MESSAGE_BUS_DEVICE_ACTION_ROUTING_KEY                => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'actions' . DIRECTORY_SEPARATOR . 'action.device.json',
		self::MESSAGE_BUS_DEVICE_PROPERTY_ACTION_ROUTING_KEY       => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'actions' . DIRECTORY_SEPARATOR . 'action.device.property.json',
		self::MESSAGE_BUS_CHANNEL_ACTION_ROUTING_KEY               => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'actions' . DIRECTORY_SEPARATOR . 'action.channel.json',
		self::MESSAGE_BUS_CHANNEL_PROPERTY_ACTION_ROUTING_KEY      => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'actions' . DIRECTORY_SEPARATOR . 'action.channel.property.json',
		self::MESSAGE_BUS_TRIGGER_ACTION_ROUTING_KEY               => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'actions' . DIRECTORY_SEPARATOR . 'action.trigger.json',

		self::MESSAGE_BUS_ACCOUNT_ENTITY_REPORTED_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.account.json',
		self::MESSAGE_BUS_ACCOUNT_ENTITY_CREATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.account.json',
		self::MESSAGE_BUS_ACCOUNT_ENTITY_UPDATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.account.json',
		self::MESSAGE_BUS_ACCOUNT_ENTITY_DELETED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.account.json',

		self::MESSAGE_BUS_EMAIL_ENTITY_REPORTED_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.email.json',
		self::MESSAGE_BUS_EMAIL_ENTITY_CREATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.email.json',
		self::MESSAGE_BUS_EMAIL_ENTITY_UPDATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.email.json',
		self::MESSAGE_BUS_EMAIL_ENTITY_DELETED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.email.json',

		self::MESSAGE_BUS_IDENTITY_ENTITY_REPORTED_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.identity.json',
		self::MESSAGE_BUS_IDENTITY_ENTITY_CREATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.identity.json',
		self::MESSAGE_BUS_IDENTITY_ENTITY_UPDATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.identity.json',
		self::MESSAGE_BUS_IDENTITY_ENTITY_DELETED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.identity.json',

		self::MESSAGE_BUS_ROLE_ENTITY_REPORTED_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.role.json',
		self::MESSAGE_BUS_ROLE_ENTITY_CREATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.role.json',
		self::MESSAGE_BUS_ROLE_ENTITY_UPDATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.role.json',
		self::MESSAGE_BUS_ROLE_ENTITY_DELETED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'accounts-module' . DIRECTORY_SEPARATOR . 'entity.role.json',

		self::MESSAGE_BUS_DEVICE_ENTITY_REPORTED_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.json',
		self::MESSAGE_BUS_DEVICE_ENTITY_CREATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.json',
		self::MESSAGE_BUS_DEVICE_ENTITY_UPDATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.json',
		self::MESSAGE_BUS_DEVICE_ENTITY_DELETED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.json',

		self::MESSAGE_BUS_DEVICE_PROPERTY_ENTITY_REPORTED_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.property.json',
		self::MESSAGE_BUS_DEVICE_PROPERTY_ENTITY_CREATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.property.json',
		self::MESSAGE_BUS_DEVICE_PROPERTY_ENTITY_UPDATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.property.json',
		self::MESSAGE_BUS_DEVICE_PROPERTY_ENTITY_DELETED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.property.json',

		self::MESSAGE_BUS_DEVICE_CONTROL_ENTITY_REPORTED_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.control.json',
		self::MESSAGE_BUS_DEVICE_CONTROL_ENTITY_CREATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.control.json',
		self::MESSAGE_BUS_DEVICE_CONTROL_ENTITY_UPDATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.control.json',
		self::MESSAGE_BUS_DEVICE_CONTROL_ENTITY_DELETED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.control.json',

		self::MESSAGE_BUS_DEVICE_ATTRIBUTE_ENTITY_REPORTED_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.attribute.json',
		self::MESSAGE_BUS_DEVICE_ATTRIBUTE_ENTITY_CREATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.attribute.json',
		self::MESSAGE_BUS_DEVICE_ATTRIBUTE_ENTITY_UPDATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.attribute.json',
		self::MESSAGE_BUS_DEVICE_ATTRIBUTE_ENTITY_DELETED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.device.attribute.json',

		self::MESSAGE_BUS_CHANNEL_ENTITY_REPORTED_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.json',
		self::MESSAGE_BUS_CHANNEL_ENTITY_CREATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.json',
		self::MESSAGE_BUS_CHANNEL_ENTITY_UPDATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.json',
		self::MESSAGE_BUS_CHANNEL_ENTITY_DELETED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.json',

		self::MESSAGE_BUS_CHANNEL_PROPERTY_ENTITY_REPORTED_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.property.json',
		self::MESSAGE_BUS_CHANNEL_PROPERTY_ENTITY_CREATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.property.json',
		self::MESSAGE_BUS_CHANNEL_PROPERTY_ENTITY_UPDATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.property.json',
		self::MESSAGE_BUS_CHANNEL_PROPERTY_ENTITY_DELETED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.property.json',

		self::MESSAGE_BUS_CHANNEL_CONTROL_ENTITY_REPORTED_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.control.json',
		self::MESSAGE_BUS_CHANNEL_CONTROL_ENTITY_CREATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.control.json',
		self::MESSAGE_BUS_CHANNEL_CONTROL_ENTITY_UPDATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.control.json',
		self::MESSAGE_BUS_CHANNEL_CONTROL_ENTITY_DELETED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.channel.control.json',

		self::MESSAGE_BUS_CONNECTOR_ENTITY_REPORTED_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.connector.json',
		self::MESSAGE_BUS_CONNECTOR_ENTITY_CREATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.connector.json',
		self::MESSAGE_BUS_CONNECTOR_ENTITY_UPDATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.connector.json',
		self::MESSAGE_BUS_CONNECTOR_ENTITY_DELETED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.connector.json',

		self::MESSAGE_BUS_CONNECTOR_PROPERTY_ENTITY_REPORTED_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.connector.property.json',
		self::MESSAGE_BUS_CONNECTOR_PROPERTY_ENTITY_CREATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.connector.property.json',
		self::MESSAGE_BUS_CONNECTOR_PROPERTY_ENTITY_UPDATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.connector.property.json',
		self::MESSAGE_BUS_CONNECTOR_PROPERTY_ENTITY_DELETED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.connector.property.json',

		self::MESSAGE_BUS_CONNECTOR_CONTROL_ENTITY_REPORTED_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.connector.control.json',
		self::MESSAGE_BUS_CONNECTOR_CONTROL_ENTITY_CREATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.connector.control.json',
		self::MESSAGE_BUS_CONNECTOR_CONTROL_ENTITY_UPDATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.connector.control.json',
		self::MESSAGE_BUS_CONNECTOR_CONTROL_ENTITY_DELETED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'devices-module' . DIRECTORY_SEPARATOR . 'entity.connector.control.json',

		self::MESSAGE_BUS_TRIGGER_ENTITY_REPORTED_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.trigger.json',
		self::MESSAGE_BUS_TRIGGER_ENTITY_CREATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.trigger.json',
		self::MESSAGE_BUS_TRIGGER_ENTITY_UPDATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.trigger.json',
		self::MESSAGE_BUS_TRIGGER_ENTITY_DELETED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.trigger.json',

		self::MESSAGE_BUS_TRIGGER_CONTROL_ENTITY_REPORTED_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.trigger.control.json',
		self::MESSAGE_BUS_TRIGGER_CONTROL_ENTITY_CREATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.trigger.control.json',
		self::MESSAGE_BUS_TRIGGER_CONTROL_ENTITY_UPDATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.trigger.control.json',
		self::MESSAGE_BUS_TRIGGER_CONTROL_ENTITY_DELETED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.trigger.control.json',

		self::MESSAGE_BUS_TRIGGER_ACTION_ENTITY_REPORTED_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.action.json',
		self::MESSAGE_BUS_TRIGGER_ACTION_ENTITY_CREATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.action.json',
		self::MESSAGE_BUS_TRIGGER_ACTION_ENTITY_UPDATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.action.json',
		self::MESSAGE_BUS_TRIGGER_ACTION_ENTITY_DELETED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.action.json',

		self::MESSAGE_BUS_TRIGGER_NOTIFICATION_ENTITY_REPORTED_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.notification.json',
		self::MESSAGE_BUS_TRIGGER_NOTIFICATION_ENTITY_CREATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.notification.json',
		self::MESSAGE_BUS_TRIGGER_NOTIFICATION_ENTITY_UPDATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.notification.json',
		self::MESSAGE_BUS_TRIGGER_NOTIFICATION_ENTITY_DELETED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.notification.json',

		self::MESSAGE_BUS_TRIGGER_CONDITION_ENTITY_REPORTED_ROUTING_KEY => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.condition.json',
		self::MESSAGE_BUS_TRIGGER_CONDITION_ENTITY_CREATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.condition.json',
		self::MESSAGE_BUS_TRIGGER_CONDITION_ENTITY_UPDATED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.condition.json',
		self::MESSAGE_BUS_TRIGGER_CONDITION_ENTITY_DELETED_ROUTING_KEY  => self::RESOURCES_FOLDER . DIRECTORY_SEPARATOR . 'schemas' . DIRECTORY_SEPARATOR . 'modules' . DIRECTORY_SEPARATOR . 'triggers-module' . DIRECTORY_SEPARATOR . 'entity.condition.json',
	];

}

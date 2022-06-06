<?php declare(strict_types = 1);

/**
 * GlobalEntityFactory.php
 *
 * @license        More in LICENSE.md
 * @copyright      https://www.fastybird.com
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 * @since          0.59.0
 *
 * @date           06.06.22
 */

namespace FastyBird\Metadata\Entities;

use FastyBird\Metadata\Entities;
use FastyBird\Metadata\Exceptions;
use FastyBird\Metadata\Types;

/**
 * Global entity factory
 *
 * @package        FastyBird:Metadata!
 * @subpackage     Entities
 *
 * @author         Adam Kadlec <adam.kadlec@fastybird.com>
 */
final class GlobalEntityFactory
{

	/** @var Actions\ActionConnectorEntityFactory */
	private Entities\Actions\ActionConnectorEntityFactory $actionConnectorEntityFactory;

	/** @var Actions\ActionConnectorPropertyEntityFactory */
	private Entities\Actions\ActionConnectorPropertyEntityFactory $actionConnectorPropertyEntityFactory;

	/** @var Actions\ActionDeviceEntityFactory */
	private Entities\Actions\ActionDeviceEntityFactory $actionDeviceEntityFactory;

	/** @var Actions\ActionDevicePropertyEntityFactory */
	private Entities\Actions\ActionDevicePropertyEntityFactory $actionDevicePropertyEntityFactory;

	/** @var Actions\ActionChannelEntityFactory */
	private Entities\Actions\ActionChannelEntityFactory $actionChannelEntityFactory;

	/** @var Actions\ActionChannelPropertyEntityFactory */
	private Entities\Actions\ActionChannelPropertyEntityFactory $actionChannelPropertyEntityFactory;

	/** @var Actions\ActionTriggerEntityFactory */
	private Entities\Actions\ActionTriggerEntityFactory $actionTriggerEntityFactory;

	/** @var Modules\AccountsModule\AccountEntityFactory */
	private Entities\Modules\AccountsModule\AccountEntityFactory $accountEntityFactory;

	/** @var Modules\AccountsModule\EmailEntityFactory */
	private Entities\Modules\AccountsModule\EmailEntityFactory $emailEntityFactory;

	/** @var Modules\AccountsModule\IdentityEntityFactory */
	private Entities\Modules\AccountsModule\IdentityEntityFactory $identityEntityFactory;

	/** @var Modules\AccountsModule\RoleEntityFactory */
	private Entities\Modules\AccountsModule\RoleEntityFactory $roleEntityFactory;

	/** @var Modules\TriggersModule\ActionEntityFactory */
	private Entities\Modules\TriggersModule\ActionEntityFactory $triggerActionEntityFactory;

	/** @var Modules\TriggersModule\ConditionEntityFactory */
	private Entities\Modules\TriggersModule\ConditionEntityFactory $triggerConditionEntityFactory;

	/** @var Modules\TriggersModule\NotificationEntityFactory */
	private Entities\Modules\TriggersModule\NotificationEntityFactory $triggerNotificationEntityFactory;

	/** @var Modules\TriggersModule\TriggerControlEntityFactory */
	private Entities\Modules\TriggersModule\TriggerControlEntityFactory $triggerControlEntityFactory;

	/** @var Modules\TriggersModule\TriggerEntityFactory */
	private Entities\Modules\TriggersModule\TriggerEntityFactory $triggerEntityFactory;

	/** @var Modules\DevicesModule\ConnectorEntityFactory */
	private Entities\Modules\DevicesModule\ConnectorEntityFactory $connectorEntityFactory;

	/** @var Modules\DevicesModule\ConnectorControlEntityFactory */
	private Entities\Modules\DevicesModule\ConnectorControlEntityFactory $connectorControlEntityFactory;

	/** @var Modules\DevicesModule\ConnectorPropertyEntityFactory */
	private Entities\Modules\DevicesModule\ConnectorPropertyEntityFactory $connectorPropertyEntityFactory;

	/** @var Modules\DevicesModule\DeviceEntityFactory */
	private Entities\Modules\DevicesModule\DeviceEntityFactory $deviceEntityFactory;

	/** @var Modules\DevicesModule\DeviceControlEntityFactory */
	private Entities\Modules\DevicesModule\DeviceControlEntityFactory $deviceControlEntityFactory;

	/** @var Modules\DevicesModule\DevicePropertyEntityFactory */
	private Entities\Modules\DevicesModule\DevicePropertyEntityFactory $devicePropertyEntityFactory;

	/** @var Modules\DevicesModule\DeviceAttributeEntityFactory */
	private Entities\Modules\DevicesModule\DeviceAttributeEntityFactory $deviceAttributeEntityFactory;

	/** @var Modules\DevicesModule\ChannelEntityFactory */
	private Entities\Modules\DevicesModule\ChannelEntityFactory $channelEntityFactory;

	/** @var Modules\DevicesModule\ChannelControlEntityFactory */
	private Entities\Modules\DevicesModule\ChannelControlEntityFactory $channelControlEntityFactory;

	/** @var Modules\DevicesModule\ChannelPropertyEntityFactory */
	private Entities\Modules\DevicesModule\ChannelPropertyEntityFactory $channelPropertyEntityFactory;

	public function __construct(
		Entities\Actions\ActionConnectorEntityFactory $actionConnectorEntityFactory,
		Entities\Actions\ActionConnectorPropertyEntityFactory $actionConnectorPropertyEntityFactory,
		Entities\Actions\ActionDeviceEntityFactory $actionDeviceEntityFactory,
		Entities\Actions\ActionDevicePropertyEntityFactory $actionDevicePropertyEntityFactory,
		Entities\Actions\ActionChannelEntityFactory $actionChannelEntityFactory,
		Entities\Actions\ActionChannelPropertyEntityFactory $actionChannelPropertyEntityFactory,
		Entities\Actions\ActionTriggerEntityFactory $actionTriggerEntityFactory,
		Entities\Modules\AccountsModule\AccountEntityFactory $accountEntityFactory,
		Entities\Modules\AccountsModule\EmailEntityFactory $emailEntityFactory,
		Entities\Modules\AccountsModule\IdentityEntityFactory $identityEntityFactory,
		Entities\Modules\AccountsModule\RoleEntityFactory $roleEntityFactory,
		Entities\Modules\TriggersModule\ActionEntityFactory $triggerActionEntityFactory,
		Entities\Modules\TriggersModule\ConditionEntityFactory $triggerConditionEntityFactory,
		Entities\Modules\TriggersModule\NotificationEntityFactory $triggerNotificationEntityFactory,
		Entities\Modules\TriggersModule\TriggerControlEntityFactory $triggerControlEntityFactory,
		Entities\Modules\TriggersModule\TriggerEntityFactory $triggerEntityFactory,
		Entities\Modules\DevicesModule\ConnectorEntityFactory $connectorEntityFactory,
		Entities\Modules\DevicesModule\ConnectorControlEntityFactory $connectorControlEntityFactory,
		Entities\Modules\DevicesModule\ConnectorPropertyEntityFactory $connectorPropertyEntityFactory,
		Entities\Modules\DevicesModule\DeviceEntityFactory $deviceEntityFactory,
		Entities\Modules\DevicesModule\DeviceControlEntityFactory $deviceControlEntityFactory,
		Entities\Modules\DevicesModule\DevicePropertyEntityFactory $devicePropertyEntityFactory,
		Entities\Modules\DevicesModule\DeviceAttributeEntityFactory $deviceAttributeEntityFactory,
		Entities\Modules\DevicesModule\ChannelEntityFactory $channelEntityFactory,
		Entities\Modules\DevicesModule\ChannelControlEntityFactory $channelControlEntityFactory,
		Entities\Modules\DevicesModule\ChannelPropertyEntityFactory $channelPropertyEntityFactory
	) {
		$this->actionConnectorEntityFactory = $actionConnectorEntityFactory;
		$this->actionConnectorPropertyEntityFactory = $actionConnectorPropertyEntityFactory;
		$this->actionDeviceEntityFactory = $actionDeviceEntityFactory;
		$this->actionDevicePropertyEntityFactory = $actionDevicePropertyEntityFactory;
		$this->actionChannelEntityFactory = $actionChannelEntityFactory;
		$this->actionChannelPropertyEntityFactory = $actionChannelPropertyEntityFactory;
		$this->actionTriggerEntityFactory = $actionTriggerEntityFactory;

		$this->accountEntityFactory = $accountEntityFactory;
		$this->emailEntityFactory = $emailEntityFactory;
		$this->identityEntityFactory = $identityEntityFactory;
		$this->roleEntityFactory = $roleEntityFactory;

		$this->triggerActionEntityFactory = $triggerActionEntityFactory;
		$this->triggerConditionEntityFactory = $triggerConditionEntityFactory;
		$this->triggerNotificationEntityFactory = $triggerNotificationEntityFactory;
		$this->triggerControlEntityFactory = $triggerControlEntityFactory;
		$this->triggerEntityFactory = $triggerEntityFactory;

		$this->connectorEntityFactory = $connectorEntityFactory;
		$this->connectorControlEntityFactory = $connectorControlEntityFactory;
		$this->connectorPropertyEntityFactory = $connectorPropertyEntityFactory;
		$this->deviceEntityFactory = $deviceEntityFactory;
		$this->deviceControlEntityFactory = $deviceControlEntityFactory;
		$this->devicePropertyEntityFactory = $devicePropertyEntityFactory;
		$this->deviceAttributeEntityFactory = $deviceAttributeEntityFactory;
		$this->channelEntityFactory = $channelEntityFactory;
		$this->channelControlEntityFactory = $channelControlEntityFactory;
		$this->channelPropertyEntityFactory = $channelPropertyEntityFactory;
	}

	/**
	 * @param string $data
	 * @param Types\RoutingKeyType $routingKey
	 *
	 * @return IEntity
	 *
	 * @throws Exceptions\FileNotFoundException
	 */
	public function create(string $data, Types\RoutingKeyType $routingKey): IEntity
	{
		// ACTIONS
		if ($routingKey->equalsValue(Types\RoutingKeyType::ROUTE_CONNECTOR_ACTION)) {
			return $this->actionConnectorEntityFactory->create($data);

		} elseif ($routingKey->equalsValue(Types\RoutingKeyType::ROUTE_CONNECTOR_PROPERTY_ACTION)) {
			return $this->actionConnectorPropertyEntityFactory->create($data);

		} elseif ($routingKey->equalsValue(Types\RoutingKeyType::ROUTE_DEVICE_ACTION)) {
			return $this->actionDeviceEntityFactory->create($data);

		} elseif ($routingKey->equalsValue(Types\RoutingKeyType::ROUTE_DEVICE_PROPERTY_ACTION)) {
			return $this->actionDevicePropertyEntityFactory->create($data);

		} elseif ($routingKey->equalsValue(Types\RoutingKeyType::ROUTE_CHANNEL_ACTION)) {
			return $this->actionChannelEntityFactory->create($data);

		} elseif ($routingKey->equalsValue(Types\RoutingKeyType::ROUTE_CHANNEL_PROPERTY_ACTION)) {
			return $this->actionChannelPropertyEntityFactory->create($data);

		} elseif ($routingKey->equalsValue(Types\RoutingKeyType::ROUTE_TRIGGER_ACTION)) {
			return $this->actionTriggerEntityFactory->create($data);

		// ACCOUNTS MODULE
		} elseif (
			$routingKey->equalsValue(Types\RoutingKeyType::ROUTE_ACCOUNT_ENTITY_REPORTED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_ACCOUNT_ENTITY_CREATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_ACCOUNT_ENTITY_UPDATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_ACCOUNT_ENTITY_DELETED)
		) {
			return $this->accountEntityFactory->create($data, $routingKey);

		} elseif (
			$routingKey->equalsValue(Types\RoutingKeyType::ROUTE_EMAIL_ENTITY_REPORTED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_EMAIL_ENTITY_CREATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_EMAIL_ENTITY_UPDATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_EMAIL_ENTITY_DELETED)
		) {
			return $this->emailEntityFactory->create($data, $routingKey);

		} elseif (
			$routingKey->equalsValue(Types\RoutingKeyType::ROUTE_IDENTITY_ENTITY_REPORTED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_IDENTITY_ENTITY_CREATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_IDENTITY_ENTITY_UPDATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_IDENTITY_ENTITY_DELETED)
		) {
			return $this->identityEntityFactory->create($data, $routingKey);

		} elseif (
			$routingKey->equalsValue(Types\RoutingKeyType::ROUTE_ROLE_ENTITY_REPORTED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_ROLE_ENTITY_CREATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_ROLE_ENTITY_UPDATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_ROLE_ENTITY_DELETED)
		) {
			return $this->roleEntityFactory->create($data, $routingKey);

		// DEVICES MODULE
		} elseif (
			$routingKey->equalsValue(Types\RoutingKeyType::ROUTE_DEVICE_ENTITY_REPORTED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_DEVICE_ENTITY_CREATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_DEVICE_ENTITY_UPDATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_DEVICE_ENTITY_DELETED)
		) {
			return $this->deviceEntityFactory->create($data, $routingKey);

		} elseif (
			$routingKey->equalsValue(Types\RoutingKeyType::ROUTE_DEVICE_PROPERTY_ENTITY_REPORTED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_DEVICE_PROPERTY_ENTITY_CREATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_DEVICE_PROPERTY_ENTITY_UPDATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_DEVICE_PROPERTY_ENTITY_DELETED)
		) {
			return $this->devicePropertyEntityFactory->create($data, $routingKey);

		} elseif (
			$routingKey->equalsValue(Types\RoutingKeyType::ROUTE_DEVICE_CONTROL_ENTITY_REPORTED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_DEVICE_CONTROL_ENTITY_CREATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_DEVICE_CONTROL_ENTITY_UPDATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_DEVICE_CONTROL_ENTITY_DELETED)
		) {
			return $this->deviceControlEntityFactory->create($data, $routingKey);

		} elseif (
			$routingKey->equalsValue(Types\RoutingKeyType::ROUTE_DEVICE_ATTRIBUTE_ENTITY_REPORTED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_DEVICE_ATTRIBUTE_ENTITY_CREATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_DEVICE_ATTRIBUTE_ENTITY_UPDATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_DEVICE_ATTRIBUTE_ENTITY_DELETED)
		) {
			return $this->deviceAttributeEntityFactory->create($data, $routingKey);

		} elseif (
			$routingKey->equalsValue(Types\RoutingKeyType::ROUTE_CHANNEL_ENTITY_REPORTED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_CHANNEL_ENTITY_CREATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_CHANNEL_ENTITY_UPDATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_CHANNEL_ENTITY_DELETED)
		) {
			return $this->channelEntityFactory->create($data, $routingKey);

		} elseif (
			$routingKey->equalsValue(Types\RoutingKeyType::ROUTE_CHANNEL_PROPERTY_ENTITY_REPORTED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_CHANNEL_PROPERTY_ENTITY_CREATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_CHANNEL_PROPERTY_ENTITY_UPDATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_CHANNEL_PROPERTY_ENTITY_DELETED)
		) {
			return $this->channelPropertyEntityFactory->create($data, $routingKey);

		} elseif (
			$routingKey->equalsValue(Types\RoutingKeyType::ROUTE_CHANNEL_CONTROL_ENTITY_REPORTED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_CHANNEL_CONTROL_ENTITY_CREATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_CHANNEL_CONTROL_ENTITY_UPDATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_CHANNEL_CONTROL_ENTITY_DELETED)
		) {
			return $this->channelControlEntityFactory->create($data, $routingKey);

		} elseif (
			$routingKey->equalsValue(Types\RoutingKeyType::ROUTE_CONNECTOR_ENTITY_REPORTED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_CONNECTOR_ENTITY_CREATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_CONNECTOR_ENTITY_UPDATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_CONNECTOR_ENTITY_DELETED)
		) {
			return $this->connectorEntityFactory->create($data, $routingKey);

		} elseif (
			$routingKey->equalsValue(Types\RoutingKeyType::ROUTE_CONNECTOR_PROPERTY_ENTITY_REPORTED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_CONNECTOR_PROPERTY_ENTITY_CREATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_CONNECTOR_PROPERTY_ENTITY_UPDATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_CONNECTOR_PROPERTY_ENTITY_DELETED)
		) {
			return $this->connectorPropertyEntityFactory->create($data, $routingKey);

		} elseif (
			$routingKey->equalsValue(Types\RoutingKeyType::ROUTE_CONNECTOR_CONTROL_ENTITY_REPORTED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_CONNECTOR_CONTROL_ENTITY_CREATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_CONNECTOR_CONTROL_ENTITY_UPDATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_CONNECTOR_CONTROL_ENTITY_DELETED)
		) {
			return $this->connectorControlEntityFactory->create($data, $routingKey);

		// TRIGGERS MODULE
		} elseif (
			$routingKey->equalsValue(Types\RoutingKeyType::ROUTE_TRIGGER_ENTITY_REPORTED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_TRIGGER_ENTITY_CREATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_TRIGGER_ENTITY_UPDATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_TRIGGER_ENTITY_DELETED)
		) {
			return $this->triggerEntityFactory->create($data, $routingKey);

		} elseif (
			$routingKey->equalsValue(Types\RoutingKeyType::ROUTE_TRIGGER_CONTROL_ENTITY_REPORTED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_TRIGGER_CONTROL_ENTITY_CREATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_TRIGGER_CONTROL_ENTITY_UPDATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_TRIGGER_CONTROL_ENTITY_DELETED)
		) {
			return $this->triggerControlEntityFactory->create($data, $routingKey);

		} elseif (
			$routingKey->equalsValue(Types\RoutingKeyType::ROUTE_TRIGGER_ACTION_ENTITY_REPORTED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_TRIGGER_ACTION_ENTITY_CREATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_TRIGGER_ACTION_ENTITY_UPDATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_TRIGGER_ACTION_ENTITY_DELETED)
		) {
			return $this->triggerActionEntityFactory->create($data, $routingKey);

		} elseif (
			$routingKey->equalsValue(Types\RoutingKeyType::ROUTE_TRIGGER_NOTIFICATION_ENTITY_REPORTED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_TRIGGER_NOTIFICATION_ENTITY_CREATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_TRIGGER_NOTIFICATION_ENTITY_UPDATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_TRIGGER_NOTIFICATION_ENTITY_DELETED)
		) {
			return $this->triggerNotificationEntityFactory->create($data, $routingKey);

		} elseif (
			$routingKey->equalsValue(Types\RoutingKeyType::ROUTE_TRIGGER_CONDITION_ENTITY_REPORTED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_TRIGGER_CONDITION_ENTITY_CREATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_TRIGGER_CONDITION_ENTITY_UPDATED)
			|| $routingKey->equalsValue(Types\RoutingKeyType::ROUTE_TRIGGER_CONDITION_ENTITY_DELETED)
		) {
			return $this->triggerConditionEntityFactory->create($data, $routingKey);
		}

		throw new Exceptions\InvalidStateException('Entity could not be created');
	}

}

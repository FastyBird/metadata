export enum ActionRoutes {
  CONNECTOR = 'fb.exchange.action.connector',
  DEVICE = 'fb.exchange.action.device',
  DEVICE_PROPERTY = 'fb.exchange.action.device.property',
  DEVICE_CONFIGURATION = 'fb.exchange.action.device.configuration',
  CHANNEL = 'fb.exchange.action.channel',
  CHANNEL_PROPERTY = 'fb.exchange.action.channel.property',
  CHANNEL_CONFIGURATION = 'fb.exchange.action.channel.configuration',
  TRIGGER = 'fb.exchange.action.trigger',
}

export enum MessageRoutes {
  MODULE = 'fb.exchange.message.module',
  PLUGIN = 'fb.exchange.message.plugin',
  CONNECTOR = 'fb.exchange.message.connector',
}

export enum AccountsModuleRoutes {
  // Accounts
  ACCOUNTS_ENTITY_REPORTED = 'fb.exchange.module.entity.created.account',
  ACCOUNTS_ENTITY_CREATED = 'fb.exchange.module.entity.created.account',
  ACCOUNTS_ENTITY_UPDATED = 'fb.exchange.module.entity.updated.account',
  ACCOUNTS_ENTITY_DELETED = 'fb.exchange.module.entity.deleted.account',

  // Emails
  EMAILS_ENTITY_REPORTED = 'fb.exchange.module.entity.created.email',
  EMAILS_ENTITY_CREATED = 'fb.exchange.module.entity.created.email',
  EMAILS_ENTITY_UPDATED = 'fb.exchange.module.entity.updated.email',
  EMAILS_ENTITY_DELETED = 'fb.exchange.module.entity.deleted.email',

  // Identities
  IDENTITIES_ENTITY_REPORTED = 'fb.exchange.module.entity.created.identity',
  IDENTITIES_ENTITY_CREATED = 'fb.exchange.module.entity.created.identity',
  IDENTITIES_ENTITY_UPDATED = 'fb.exchange.module.entity.updated.identity',
  IDENTITIES_ENTITY_DELETED = 'fb.exchange.module.entity.deleted.identity',

  // Roles
  ROLES_ENTITY_REPORTED = 'fb.exchange.module.entity.created.role',
  ROLES_ENTITY_CREATED = 'fb.exchange.module.entity.created.role',
  ROLES_ENTITY_UPDATED = 'fb.exchange.module.entity.updated.role',
  ROLES_ENTITY_DELETED = 'fb.exchange.module.entity.deleted.role',
}

export enum DevicesModuleRoutes {
  // Devices
  DEVICES_ENTITY_REPORTED = 'fb.exchange.module.entity.created.device',
  DEVICES_ENTITY_CREATED = 'fb.exchange.module.entity.created.device',
  DEVICES_ENTITY_UPDATED = 'fb.exchange.module.entity.updated.device',
  DEVICES_ENTITY_DELETED = 'fb.exchange.module.entity.deleted.device',

  // Device's properties
  DEVICES_PROPERTY_ENTITY_REPORTED = 'fb.exchange.module.entity.created.device.property',
  DEVICES_PROPERTY_ENTITY_CREATED = 'fb.exchange.module.entity.created.device.property',
  DEVICES_PROPERTY_ENTITY_UPDATED = 'fb.exchange.module.entity.updated.device.property',
  DEVICES_PROPERTY_ENTITY_DELETED = 'fb.exchange.module.entity.deleted.device.property',

  // Device's configuration
  DEVICES_CONFIGURATION_ENTITY_REPORTED = 'fb.exchange.module.entity.created.device.configuration',
  DEVICES_CONFIGURATION_ENTITY_CREATED = 'fb.exchange.module.entity.created.device.configuration',
  DEVICES_CONFIGURATION_ENTITY_UPDATED = 'fb.exchange.module.entity.updated.device.configuration',
  DEVICES_CONFIGURATION_ENTITY_DELETED = 'fb.exchange.module.entity.deleted.device.configuration',

  // Device's control
  DEVICES_CONTROL_ENTITY_REPORTED = 'fb.exchange.module.entity.created.device.control',
  DEVICES_CONTROL_ENTITY_CREATED = 'fb.exchange.module.entity.created.device.control',
  DEVICES_CONTROL_ENTITY_UPDATED = 'fb.exchange.module.entity.updated.device.control',
  DEVICES_CONTROL_ENTITY_DELETED = 'fb.exchange.module.entity.deleted.device.control',

  // Channels
  CHANNELS_ENTITY_REPORTED = 'fb.exchange.module.entity.created.channel',
  CHANNELS_ENTITY_CREATED = 'fb.exchange.module.entity.created.channel',
  CHANNELS_ENTITY_UPDATED = 'fb.exchange.module.entity.updated.channel',
  CHANNELS_ENTITY_DELETED = 'fb.exchange.module.entity.deleted.channel',

  // Channel's properties
  CHANNELS_PROPERTY_ENTITY_REPORTED = 'fb.exchange.module.entity.created.channel.property',
  CHANNELS_PROPERTY_ENTITY_CREATED = 'fb.exchange.module.entity.created.channel.property',
  CHANNELS_PROPERTY_ENTITY_UPDATED = 'fb.exchange.module.entity.updated.channel.property',
  CHANNELS_PROPERTY_ENTITY_DELETED = 'fb.exchange.module.entity.deleted.channel.property',

  // Channel's configuration
  CHANNELS_CONFIGURATION_ENTITY_REPORTED = 'fb.exchange.module.entity.created.channel.configuration',
  CHANNELS_CONFIGURATION_ENTITY_CREATED = 'fb.exchange.module.entity.created.channel.configuration',
  CHANNELS_CONFIGURATION_ENTITY_UPDATED = 'fb.exchange.module.entity.updated.channel.configuration',
  CHANNELS_CONFIGURATION_ENTITY_DELETED = 'fb.exchange.module.entity.deleted.channel.configuration',

  // Channel's control
  CHANNELS_CONTROL_ENTITY_REPORTED = 'fb.exchange.module.entity.created.channel.control',
  CHANNELS_CONTROL_ENTITY_CREATED = 'fb.exchange.module.entity.created.channel.control',
  CHANNELS_CONTROL_ENTITY_UPDATED = 'fb.exchange.module.entity.updated.channel.control',
  CHANNELS_CONTROL_ENTITY_DELETED = 'fb.exchange.module.entity.deleted.channel.control',

  // Connector's configuration
  CONNECTORS_ENTITY_REPORTED = 'fb.exchange.module.entity.created.connector',
  CONNECTORS_ENTITY_CREATED = 'fb.exchange.module.entity.created.connector',
  CONNECTORS_ENTITY_UPDATED = 'fb.exchange.module.entity.updated.connector',
  CONNECTORS_ENTITY_DELETED = 'fb.exchange.module.entity.deleted.connector',

  // Connector's control
  CONNECTORS_CONTROL_ENTITY_REPORTED = 'fb.exchange.module.entity.created.connector.control',
  CONNECTORS_CONTROL_ENTITY_CREATED = 'fb.exchange.module.entity.created.connector.control',
  CONNECTORS_CONTROL_ENTITY_UPDATED = 'fb.exchange.module.entity.updated.connector.control',
  CONNECTORS_CONTROL_ENTITY_DELETED = 'fb.exchange.module.entity.deleted.connector.control',
}

export enum TriggersModuleRoutes {
  // Triggers
  TRIGGERS_ENTITY_REPORTED = 'fb.exchange.module.entity.created.trigger',
  TRIGGERS_ENTITY_CREATED = 'fb.exchange.module.entity.created.trigger',
  TRIGGERS_ENTITY_UPDATED = 'fb.exchange.module.entity.updated.trigger',
  TRIGGERS_ENTITY_DELETED = 'fb.exchange.module.entity.deleted.trigger',

  // Trigger's control
  TRIGGERS_CONTROL_ENTITY_REPORTED = 'fb.exchange.module.entity.created.trigger.control',
  TRIGGERS_CONTROL_ENTITY_CREATED = 'fb.exchange.module.entity.created.trigger.control',
  TRIGGERS_CONTROL_ENTITY_UPDATED = 'fb.exchange.module.entity.updated.trigger.control',
  TRIGGERS_CONTROL_ENTITY_DELETED = 'fb.exchange.module.entity.deleted.trigger.control',

  // Actions
  ACTIONS_ENTITY_REPORTED = 'fb.exchange.module.entity.created.trigger.action',
  ACTIONS_ENTITY_CREATED = 'fb.exchange.module.entity.created.trigger.action',
  ACTIONS_ENTITY_UPDATED = 'fb.exchange.module.entity.updated.trigger.action',
  ACTIONS_ENTITY_DELETED = 'fb.exchange.module.entity.deleted.trigger.action',

  // Notifications
  NOTIFICATIONS_ENTITY_REPORTED = 'fb.exchange.module.entity.created.trigger.notification',
  NOTIFICATIONS_ENTITY_CREATED = 'fb.exchange.module.entity.created.trigger.notification',
  NOTIFICATIONS_ENTITY_UPDATED = 'fb.exchange.module.entity.updated.trigger.notification',
  NOTIFICATIONS_ENTITY_DELETED = 'fb.exchange.module.entity.deleted.trigger.notification',

  // Conditions
  CONDITIONS_ENTITY_REPORTED = 'fb.exchange.module.entity.created.trigger.condition',
  CONDITIONS_ENTITY_CREATED = 'fb.exchange.module.entity.created.trigger.condition',
  CONDITIONS_ENTITY_UPDATED = 'fb.exchange.module.entity.updated.trigger.condition',
  CONDITIONS_ENTITY_DELETED = 'fb.exchange.module.entity.deleted.trigger.condition',
}

export enum UiModuleRoutes {
}

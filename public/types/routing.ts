export enum AccountsModule {
    // Accounts
    ACCOUNTS_ENTITY_CREATED = 'fb.bus.entity.created.account',
    ACCOUNTS_ENTITY_UPDATED = 'fb.bus.entity.updated.account',
    ACCOUNTS_ENTITY_DELETED = 'fb.bus.entity.deleted.account',

    // Emails
    EMAILS_ENTITY_CREATED = 'fb.bus.entity.created.email',
    EMAILS_ENTITY_UPDATED = 'fb.bus.entity.updated.email',
    EMAILS_ENTITY_DELETED = 'fb.bus.entity.deleted.email',

    // Identities
    IDENTITIES_ENTITY_CREATED = 'fb.bus.entity.created.identity',
    IDENTITIES_ENTITY_UPDATED = 'fb.bus.entity.updated.identity',
    IDENTITIES_ENTITY_DELETED = 'fb.bus.entity.deleted.identity',
}

export enum DevicesModule {
    // Devices
    DEVICES_ENTITY_CREATED = 'fb.bus.entity.created.device',
    DEVICES_ENTITY_UPDATED = 'fb.bus.entity.updated.device',
    DEVICES_ENTITY_DELETED = 'fb.bus.entity.deleted.device',

    DEVICES_CONTROLS = 'fb.bus.control.device',

    // Devices properties
    DEVICES_PROPERTY_ENTITY_CREATED = 'fb.bus.entity.created.device.property',
    DEVICES_PROPERTY_ENTITY_UPDATED = 'fb.bus.entity.updated.device.property',
    DEVICES_PROPERTY_ENTITY_DELETED = 'fb.bus.entity.deleted.device.property',

    DEVICES_PROPERTIES_DATA = 'fb.bus.data.device.property',

    // Devices configuration
    DEVICES_CONFIGURATION_ENTITY_CREATED = 'fb.bus.entity.created.device.configuration',
    DEVICES_CONFIGURATION_ENTITY_UPDATED = 'fb.bus.entity.updated.device.configuration',
    DEVICES_CONFIGURATION_ENTITY_DELETED = 'fb.bus.entity.deleted.device.configuration',

    DEVICES_CONFIGURATION_DATA = 'fb.bus.data.device.configuration',

    // Devices connectors
    DEVICES_CONNECTOR_ENTITY_CREATED = 'fb.bus.entity.created.device.connector',
    DEVICES_CONNECTOR_ENTITY_UPDATED = 'fb.bus.entity.updated.device.connector',
    DEVICES_CONNECTOR_ENTITY_DELETED = 'fb.bus.entity.deleted.device.connector',

    // Channels
    CHANNELS_ENTITY_CREATED = 'fb.bus.entity.created.channel',
    CHANNELS_ENTITY_UPDATED = 'fb.bus.entity.updated.channel',
    CHANNELS_ENTITY_DELETED = 'fb.bus.entity.deleted.channel',

    CHANNELS_CONTROLS = 'fb.bus.control.channel',

    // Channels properties
    CHANNELS_PROPERTY_ENTITY_CREATED = 'fb.bus.entity.created.channel.property',
    CHANNELS_PROPERTY_ENTITY_UPDATED = 'fb.bus.entity.updated.channel.property',
    CHANNELS_PROPERTY_ENTITY_DELETED = 'fb.bus.entity.deleted.channel.property',

    CHANNELS_PROPERTIES_DATA = 'fb.bus.data.channel.property',

    // Channels configuration
    CHANNELS_CONFIGURATION_ENTITY_CREATED = 'fb.bus.entity.created.channel.configuration',
    CHANNELS_CONFIGURATION_ENTITY_UPDATED = 'fb.bus.entity.updated.channel.configuration',
    CHANNELS_CONFIGURATION_ENTITY_DELETED = 'fb.bus.entity.deleted.channel.configuration',

    CHANNELS_CONFIGURATION_DATA = 'fb.bus.data.channel.configuration',

    // Connectors configuration
    CONNECTOR_ENTITY_CREATED = 'fb.bus.entity.created.connector',
    CONNECTOR_ENTITY_UPDATED = 'fb.bus.entity.updated.connector',
    CONNECTOR_ENTITY_DELETED = 'fb.bus.entity.deleted.connector',

    CONNECTOR_CONTROLS = 'fb.bus.control.connector',
}

export enum TriggersModule {
    // Triggers
    TRIGGERS_ENTITY_CREATED = 'fb.bus.entity.created.trigger',
    TRIGGERS_ENTITY_UPDATED = 'fb.bus.entity.updated.trigger',
    TRIGGERS_ENTITY_DELETED = 'fb.bus.entity.deleted.trigger',

    TRIGGER_CONTROLS = 'fb.bus.control.trigger',

    // Triggers actions
    TRIGGERS_ACTIONS_ENTITY_CREATED = 'fb.bus.entity.created.trigger.action',
    TRIGGERS_ACTIONS_ENTITY_UPDATED = 'fb.bus.entity.updated.trigger.action',
    TRIGGERS_ACTIONS_ENTITY_DELETED = 'fb.bus.entity.deleted.trigger.action',

    // Triggers notifications
    TRIGGERS_NOTIFICATIONS_ENTITY_CREATED = 'fb.bus.entity.created.trigger.notification',
    TRIGGERS_NOTIFICATIONS_ENTITY_UPDATED = 'fb.bus.entity.updated.trigger.notification',
    TRIGGERS_NOTIFICATIONS_ENTITY_DELETED = 'fb.bus.entity.deleted.trigger.notification',

    // Triggers conditions
    TRIGGERS_CONDITIONS_ENTITY_CREATED = 'fb.bus.entity.created.trigger.condition',
    TRIGGERS_CONDITIONS_ENTITY_UPDATED = 'fb.bus.entity.updated.trigger.condition',
    TRIGGERS_CONDITIONS_ENTITY_DELETED = 'fb.bus.entity.deleted.trigger.condition',
}

export enum UiModule {
}

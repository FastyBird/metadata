export enum AccountsModule {
    // Accounts
    ACCOUNTS_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.account',
    ACCOUNTS_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.account',
    ACCOUNTS_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.account',

    // Emails
    EMAILS_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.email',
    EMAILS_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.email',
    EMAILS_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.email',

    // Identities
    IDENTITIES_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.identity',
    IDENTITIES_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.identity',
    IDENTITIES_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.identity',
}

export enum DevicesModule {
    // Devices
    DEVICES_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.device',
    DEVICES_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.device',
    DEVICES_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.device',

    DEVICES_CONTROLS_ROUTING_KEY = 'fb.bus.control.device',

    // Devices properties
    DEVICES_PROPERTY_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.device.property',
    DEVICES_PROPERTY_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.device.property',
    DEVICES_PROPERTY_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.device.property',

    DEVICES_PROPERTIES_DATA_ROUTING_KEY = 'fb.bus.data.device.property',

    // Devices configuration
    DEVICES_CONFIGURATION_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.device.configuration',
    DEVICES_CONFIGURATION_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.device.configuration',
    DEVICES_CONFIGURATION_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.device.configuration',

    DEVICES_CONFIGURATION_DATA_ROUTING_KEY = 'fb.bus.data.device.configuration',

    // Devices connectors
    DEVICES_CONNECTOR_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.device.connector',
    DEVICES_CONNECTOR_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.device.connector',
    DEVICES_CONNECTOR_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.device.connector',

    // Channels
    CHANNELS_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.channel',
    CHANNELS_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.channel',
    CHANNELS_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.channel',

    CHANNELS_CONTROLS_ROUTING_KEY = 'fb.bus.control.channel',

    // Channels properties
    CHANNELS_PROPERTY_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.channel.property',
    CHANNELS_PROPERTY_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.channel.property',
    CHANNELS_PROPERTY_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.channel.property',

    CHANNELS_PROPERTIES_DATA_ROUTING_KEY = 'fb.bus.data.channel.property',

    // Channels configuration
    CHANNELS_CONFIGURATION_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.channel.configuration',
    CHANNELS_CONFIGURATION_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.channel.configuration',
    CHANNELS_CONFIGURATION_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.channel.configuration',

    CHANNELS_CONFIGURATION_DATA_ROUTING_KEY = 'fb.bus.data.channel.configuration',

    // Connectors configuration
    CONNECTOR_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.connector',
    CONNECTOR_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.connector',
    CONNECTOR_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.connector',

    CONNECTOR_CONTROLS_ROUTING_KEY = 'fb.bus.control.connector',
}

export enum TriggersModule {
    // Triggers
    TRIGGERS_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.trigger',
    TRIGGERS_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.trigger',
    TRIGGERS_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.trigger',

    TRIGGER_CONTROLS_ROUTING_KEY = 'fb.bus.control.trigger',

    // Triggers actions
    TRIGGERS_ACTIONS_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.trigger.action',
    TRIGGERS_ACTIONS_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.trigger.action',
    TRIGGERS_ACTIONS_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.trigger.action',

    // Triggers notifications
    TRIGGERS_NOTIFICATIONS_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.trigger.notification',
    TRIGGERS_NOTIFICATIONS_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.trigger.notification',
    TRIGGERS_NOTIFICATIONS_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.trigger.notification',

    // Triggers conditions
    TRIGGERS_CONDITIONS_CREATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.created.trigger.condition',
    TRIGGERS_CONDITIONS_UPDATED_ENTITY_ROUTING_KEY = 'fb.bus.entity.updated.trigger.condition',
    TRIGGERS_CONDITIONS_DELETED_ENTITY_ROUTING_KEY = 'fb.bus.entity.deleted.trigger.condition',
}

export enum UiModule {
}

export enum ModuleOrigin {
    NOT_SPECIFIED_ORIGIN = '*',
    MODULE_ACCOUNTS_ORIGIN = 'com.fastybird.accounts-module',
    MODULE_DEVICES_ORIGIN = 'com.fastybird.devices-module',
    MODULE_TRIGGERS_ORIGIN = 'com.fastybird.triggers-module',
    MODULE_UI_ORIGIN = 'com.fastybird.ui-module',
    MODULE_WEB_UI_ORIGIN = 'com.fastybird.web-ui-module',
}

export enum ModulePrefix {
    MODULE_ACCOUNTS_PREFIX = 'accounts-module',
    MODULE_DEVICES_PREFIX = 'devices-module',
    MODULE_TRIGGERS_PREFIX = 'triggers-module',
    MODULE_UI_PREFIX = 'ui-module',
}

export enum DataType {
    CHAR = 'char',
    UCHAR = 'uchar',
    SHORT = 'short',
    USHORT = 'ushort',
    INT = 'int',
    UINT = 'uint',
    FLOAT = 'float',
    BOOLEAN = 'bool',
    STRING = 'string',
    ENUM = 'enum',
    COLOR = 'color',
}

export enum SwitchPayload {
    ON = 'on',
    OFF = 'off',
    TOGGLE = 'toggle',
}

export enum AccountState {
    ACTIVE = 'active',
    BLOCKED = 'blocked',
    DELETED = 'deleted',
    NOT_ACTIVATED = 'notActivated',
    APPROVAL_WAITING = 'approvalWaiting',
}

export enum IdentityState {
    ACTIVE = 'active',
    BLOCKED = 'blocked',
    DELETED = 'deleted',
    INVALID = 'invalid',
}

export enum ConnectorType {
    FB_BUS = 'fb-bus',
    FB_MQTT = 'fb-mqtt',
}

export enum DeviceConnectionState {
    CONNECTED = 'connected',
    DISCONNECTED = 'disconnected',
    INIT = 'init',
    READY = 'ready',
    RUNNING = 'running',
    SLEEPING = 'sleeping',
    STOPPED = 'stopped',
    LOST = 'lost',
    ALERT = 'alert',
    UNKNOWN = 'unknown',
}

export enum DeviceType {
    LOCAL = 'local',
    NETWORK = 'network',
    VIRTUAL = 'virtual',
}

export enum HardwareManufacturer {
    GENERIC = 'generic',
    FASTYBIRD = 'fastybird',
    ITEAD = 'itead',
    AI_THINKER = 'ai_thinker',
}

export enum FirmwareManufacturer {
    GENERIC = 'generic',
    FASTYBIRD = 'fastybird',
}

export enum DeviceModel {
    CUSTOM = 'custom',

    SONOFF_BASIC = 'sonoff_basic',
    SONOFF_RF = 'sonoff_rf',
    SONOFF_TH = 'sonoff_th',
    SONOFF_SV = 'sonoff_sv',
    SONOFF_SLAMPHER = 'sonoff_slampher',
    SONOFF_S20 = 'sonoff_s20',
    SONOFF_TOUCH = 'sonoff_touch',
    SONOFF_POW = 'sonoff_pow',
    SONOFF_POW_R2 = 'sonoff_pow_r2',
    SONOFF_DUAL = 'sonoff_dual',
    SONOFF_DUAL_R2 = 'sonoff_dual_r2',
    SONOFF_4CH = 'sonoff_4ch',
    SONOFF_4CH_PRO = 'sonoff_4ch_pro',
    SONOFF_RF_BRIDGE = 'sonoff_rf_bridge',
    SONOFF_B1 = 'sonoff_b1',
    SONOFF_LED = 'sonoff_led',
    SONOFF_T1_1CH = 'sonoff_t1_1ch',
    SONOFF_T1_2CH = 'sonoff_t1_2ch',
    SONOFF_T1_3CH = 'sonoff_t1_3ch',
    SONOFF_S31 = 'sonoff_s31',
    SONOFF_SC = 'sonoff_sc',
    SONOFF_SC_PRO = 'sonoff_sc_pro',
    SONOFF_PS_15 = 'sonoff_ps_15',

    AI_THINKER_AI_LIGHT = 'ai_thinker_ai_light',

    FASTYBIRD_WIFI_GW = 'fastybird_wifi_gw',
    FASTYBIRD_3CH_POWER_STRIP_R1 = 'fastybird_3ch_power_strip_r1',
    FASTYBIRD_8CH_BUTTONS = '8ch_buttons',
    FASTYBIRD_16CH_BUTTONS = '16ch_buttons',
}

export enum DevicePropertyName {
    STATE = 'state',
    BATTERY = 'battery',
    WIFI = 'wifi',
    SIGNAL = 'signal',
    SSID = 'ssid',
    RSSI = 'rssi',
    VCC = 'vcc',
    CPU_LOAD = 'cpu-load',
    UPTIME = 'uptime',
    IP_ADDRESS = 'ip-address',
    STATUS_LED = 'status-led',
    FREE_HEAP = 'free-heap',
}

export enum TriggerType {
    MANUAL = 'manual',
    AUTOMATIC = 'automatic',
}

export enum TriggerActionType {
    DEVICE_PROPERTY = 'device-property',
    CHANNEL_PROPERTY = 'channel-property',
}

export enum TriggerConditionType {
    CHANNEL_PROPERTY = 'channel-property',
    DEVICE_PROPERTY = 'device-property',
    TIME = 'time',
    DATE = 'date',
}

export enum TriggerNotificationType {
    EMAIL = 'email',
    SMS = 'sms',
}

export enum TriggerConditionOperator {
    EQUAL = 'eq',
    ABOVE = 'above',
    BELOW = 'below',
}

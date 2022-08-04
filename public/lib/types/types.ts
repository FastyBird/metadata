export enum ModulePrefix {
  MODULE_ACCOUNTS = 'accounts-module',
  MODULE_DEVICES = 'devices-module',
  MODULE_TRIGGERS = 'triggers-module',
  MODULE_UI = 'ui-module',
}

export enum ModuleSource {
  NOT_SPECIFIED = '*',
  MODULE_ACCOUNTS = 'com.fastybird.accounts-module',
  MODULE_DEVICES = 'com.fastybird.devices-module',
  MODULE_TRIGGERS = 'com.fastybird.triggers-module',
  MODULE_UI = 'com.fastybird.ui-module',
  MODULE_WEB_UI = 'com.fastybird.web-ui-module',
}

export enum PluginSource {
  NOT_SPECIFIED = '*',
  COUCHDB_STORAGE_PLUGIN = 'com.fastybird.couchdb-storage-plugin',
  RABBITMQ_EXCHANGE_PLUGIN = 'com.fastybird.rabbitmq-exchange-plugin',
  REDISDB_EXCHANGE_PLUGIN = 'com.fastybird.redisdb-exchange-plugin',
  REDISDB_STORAGE_PLUGIN = 'com.fastybird.redisdb-storage-plugin',
}

export enum ConnectorSource {
  NOT_SPECIFIED = '*',
  FB_BUS_CONNECTOR = 'com.fastybird.fb-bus-connector',
  FB_MQTT_CONNECTOR = 'com.fastybird.fb-mqtt-connector',
  SHELLY_CONNECTOR = 'com.fastybird.shelly-connector',
  TUYA_CONNECTOR = 'com.fastybird.tuya-connector',
  SONOFF_CONNECTOR = 'com.fastybird.sonoff-connector',
  MODBUS_CONNECTOR = 'com.fastybird.modbus-connector',
  HOMEKIT_CONNECTOR = 'com.fastybird.homekit-connector',
  ITEAD_CONNECTOR = 'com.fastybird.itead-connector',
  VIRTUAL_CONNECTOR = 'com.fastybird.virtual-connector',
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
  DATE = 'date',
  TIME = 'time',
  DATETIME = 'datetime',
  COLOR = 'color',
  BUTTON = 'button',
  SWITCH = 'switch',
  UNKNOWN = 'unknown',
}

export enum ShortDataType {
  CHAR = 'i8',
  UCHAR = 'u8',
  SHORT = 'i16',
  USHORT = 'u16',
  INT = 'i32',
  UINT = 'u32',
  FLOAT = 'f',
  BOOLEAN = 'b',
  STRING = 's',
  ENUM = 'e',
  DATE = 'd',
  TIME = 't',
  DATETIME = 'dt',
}

export enum SwitchPayload {
  ON = 'switch-on',
  OFF = 'switch-off',
  TOGGLE = 'switch-toggle',
}

export enum ButtonPayload {
  PRESSED = 'btn-pressed',
  RELEASED = 'btn-released',
  CLICKED = 'btn-clicked',
  DOUBLE_CLICKED = 'btn-double-clicked',
  TRIPLE_CLICKED = 'btn-triple-clicked',
  LONG_CLICKED = 'btn-long-clicked',
  EXTRA_LONG_CLICKED = 'btn-extra-long-clicked',
}

export enum ControlName {
  CONFIGURE = 'configure',
  RESET = 'reset',
  FACTORY_RESET = 'factory-reset',
  REBOOT = 'reboot',
  TRIGGER = 'trigger',
}

export enum PropertyAction {
  SET = 'set',
  GET = 'get',
  REPORT = 'report',
}

export enum ControlAction {
  SET = 'set',
}

export interface ConnectorControlAction {
  action: ControlAction
  control: string
  connector: string
  expected_value?:
    | null
    | string
    | number
    | boolean
}

export interface DeviceControlAction {
  action: ControlAction
  control: string
  device: string
  expected_value?:
    | null
    | string
    | number
    | boolean
}

export interface ChannelControlAction {
  action: ControlAction
  control: string
  device: string
  channel: string
  expected_value?:
    | null
    | string
    | number
    | boolean
}

export interface TriggerControlAction {
  action: ControlAction
  control: string
  trigger: string
  expected_value?:
    | null
    | string
    | number
    | boolean
}

export interface DevicePropertyAction {
  action: PropertyAction
  device: string
  property: string
  expected_value?: string | number | boolean | ButtonPayload | SwitchPayload
  actual_value?: string | number | boolean | ButtonPayload | SwitchPayload
  pending?: boolean
}

export interface ChannelPropertyAction {
  action: PropertyAction
  device: string
  channel: string
  property: string
  expected_value?: string | number | boolean | ButtonPayload | SwitchPayload
  actual_value?: string | number | boolean | ButtonPayload | SwitchPayload
  pending?: boolean
}

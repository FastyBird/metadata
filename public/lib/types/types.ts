export enum ModuleOrigin {
  NOT_SPECIFIED = '*',
  MODULE_ACCOUNTS = 'com.fastybird.accounts-module',
  MODULE_DEVICES = 'com.fastybird.devices-module',
  MODULE_TRIGGERS = 'com.fastybird.triggers-module',
  MODULE_UI = 'com.fastybird.ui-module',
  MODULE_WEB_UI = 'com.fastybird.web-ui-module',
}

export enum ModulePrefix {
  MODULE_ACCOUNTS = 'accounts-module',
  MODULE_DEVICES = 'devices-module',
  MODULE_TRIGGERS = 'triggers-module',
  MODULE_UI = 'ui-module',
}

export enum PluginOrigin {
  NOT_SPECIFIED = '*',
  FB_BUS_CONNECTOR_PLUGIN = 'com.fastybird.fb-bus-connector-plugin',
  FB_MQTT_CONNECTOR_PLUGIN = 'com.fastybird.fb-mqtt-connector-plugin',
  SHELLY_CONNECTOR_PLUGIN = 'com.fastybird.shelly-connector-plugin',
  TUYA_CONNECTOR_PLUGIN = 'com.fastybird.tuya-connector-plugin',
  SONOFF_CONNECTOR_PLUGIN = 'com.fastybird.sonoff-connector-plugin',
  MODBUS_CONNECTOR_PLUGIN = 'com.fastybird.modbus-connector-plugin',
  WS_EXCHANGE_PLUGIN = 'com.fastybird.ws-exchange-plugin',
  REDISDB_EXCHANGE_PLUGIN = 'com.fastybird.redisdb-exchange-plugin',
  RABBITMQ_EXCHANGE_PLUGIN = 'com.fastybird.rabbitmq-exchange-plugin',
  REDISDB_STORAGE_PLUGIN = 'com.fastybird.redisdb-storage-plugin',
  COUCHDB_STORAGE_PLUGIN = 'com.fastybird.couchdb-storage-plugin',
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

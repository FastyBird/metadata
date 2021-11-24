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

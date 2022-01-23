import { ButtonPayload, DataType, SwitchPayload } from '@/lib/types/types'

export enum PropertyType {
  DYNAMIC = 'dynamic',
  STATIC = 'static',
}

export enum ConnectionState {
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

export enum ConfigurationField {
  BOOLEAN = 'boolean',
  NUMBER = 'number',
  SELECT = 'select',
  TEXT = 'text',
}

export enum ConfigurationBooleanFieldAttribute {
  DEFAULT = 'default',
}

export enum ConfigurationNumberFieldAttribute {
  MIN = 'min',
  MAX = 'max',
  STEP = 'step',
  DEFAULT = 'default',
}

export enum ConfigurationSelectFieldAttribute {
  VALUES = 'values',
  DEFAULT = 'default',
}

export enum ConfigurationTextFieldAttribute {
  DEFAULT = 'default',
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

export enum FirmwareManufacturer {
  GENERIC = 'generic',
  FASTYBIRD = 'fastybird',
  SHELLY = 'shelly',
  TUYA = 'tuya',
  SONOFF = 'sonoff',
}

export enum HardwareManufacturer {
  GENERIC = 'generic',
  FASTYBIRD = 'fastybird',
  ITEAD = 'itead',
  AI_THINKER = 'ai_thinker',
  SHELLY = 'shelly',
  TUYA = 'tuya',
  SONOFF = 'sonoff',
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

export interface ConnectorEntity {
  id: string
  type: string
  key: string
  name: string
  enabled: boolean
  address?: number | null
  serial_interface?: string | null
  baud_rate?: number | null
  server?: string | null
  port?: number | null
  secured_port?: number | null
  username?: string | null
  owner: string | null

  [k: string]: string | number | boolean | null | undefined
}

export interface ConnectorControlEntity {
  id: string
  name: string
  connector: string
  owner: string | null

  [k: string]: string | null
}

export interface DeviceEntity {
  id: string
  type: string
  identifier: string
  key: string
  name: string | null
  comment: string | null
  enabled: boolean
  hardware_manufacturer: HardwareManufacturer | string
  hardware_model: DeviceModel | string
  hardware_version: string | null
  hardware_mac_address: string | null
  firmware_manufacturer: FirmwareManufacturer | string
  firmware_version: string | null
  connector: string
  owner: string | null

  [k: string]: string | boolean | HardwareManufacturer | DeviceModel | FirmwareManufacturer | null | undefined
}

export interface DevicePropertyEntity {
  id: string
  type: PropertyType
  identifier: string
  key: string
  name: string | null
  settable: boolean
  queryable: boolean
  data_type: DataType | null
  unit: string | null
  format: string[] | ((string | null)[])[] | (number | null)[] | null
  invalid: string | number | null
  number_of_decimals: number | null
  value?: string | number | boolean | null
  actual_value?: string | number | boolean | ButtonPayload | SwitchPayload | null
  expected_value?: string | number | boolean | ButtonPayload | SwitchPayload | null
  previous_value?: string | number | boolean | ButtonPayload | SwitchPayload | null
  pending?: boolean
  device: string
  owner: string | null

  [k: string]: string | boolean | number | string[] | ((string | null)[])[] | (number | null)[] | DataType | ButtonPayload | SwitchPayload | null | undefined
}

export interface DeviceConfigurationEntity {
  id: string
  identifier: string
  key: string
  name: string | null
  comment: string | null
  data_type: DataType
  default: string | number | null
  value: string | number | null
  values?: (string | number | boolean)[]
  min?: number | null
  max?: number | null
  step?: number | null
  device: string
  owner: string | null

  [k: string]: string | number | (string | number | boolean)[] | DataType | null | undefined
}

export interface DeviceControlEntity {
  id: string
  name: string
  device: string
  owner: string | null

  [k: string]: string | null
}

export interface ChannelEntity {
  id: string
  identifier: string
  key: string
  name: string | null
  comment: string | null
  device: string
  owner: string | null

  [k: string]: string | null
}

export interface ChannelPropertyEntity {
  id: string
  type: PropertyType
  identifier: string
  key: string
  name: string | null
  settable: boolean
  queryable: boolean
  data_type: DataType | null
  unit: string | null
  format: string[] | ((string | null)[])[] | (number | null)[] | null
  invalid: string | number | null
  number_of_decimals: number | null
  value?: string | number | boolean | null
  actual_value?: string | number | boolean | ButtonPayload | SwitchPayload | null
  expected_value?: string | number | boolean | ButtonPayload | SwitchPayload | null
  previous_value?: string | number | boolean | ButtonPayload | SwitchPayload | null
  pending?: boolean
  channel: string
  owner: string | null

  [k: string]: string | boolean | number | string[] | ((string | null)[])[] | (number | null)[] | DataType | ButtonPayload | SwitchPayload | null | undefined
}

export interface ChannelConfigurationEntity {
  id: string
  identifier: string
  key: string
  name: string | null
  comment: string | null
  data_type: DataType
  default: string | number | null
  value: string | number | null
  values?: (string | number | boolean)[]
  min?: number | null
  max?: number | null
  step?: number | null
  channel: string
  owner: string | null

  [k: string]: string | number | (string | number | boolean)[] | DataType | null | undefined
}

export interface ChannelControlEntity {
  id: string
  name: string
  channel: string
  owner: string | null

  [k: string]: string | null
}

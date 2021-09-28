import {
  ConnectorType,
  DataType,
  DeviceConnectionState,
  DeviceModel,
  FirmwareManufacturer,
  HardwareManufacturer,
} from './types'

export interface ConnectorEntity {
    id: string
    type: ConnectorType
    key: string
    name: string
    enabled: boolean
    control: string[]
    address?: number | null
    serial_interface?: string | null
    baud_rate?: number | null
    server?: string | null
    port?: number | null
    secured_port?: number | null
    username?: string | null

    [k: string]: string | number | string[] | ConnectorType | boolean | null | undefined
}

export interface DeviceEntity {
    id: string
    identifier: string
    key: string
    name: string | null
    comment: string | null
    enabled: boolean
    hardware_version: string | null
    hardware_manufacturer: HardwareManufacturer
    hardware_model: DeviceModel
    hardware_mac_address: string | null
    firmware_manufacturer: FirmwareManufacturer
    firmware_version: string | null
    control: string[]
    owner?: string

    [k: string]: string | HardwareManufacturer | DeviceModel | FirmwareManufacturer | boolean | string[] | null | undefined
}

export interface DeviceConnectorEntity {
    id: string
    type: ConnectorType
    address?: number | null
    max_packet_length?: number | null
    description_support?: boolean
    settings_support?: boolean
    configured_key_length?: number | null
    username?: string | null
    connector: string
    device: string

    [k: string]: string | number | string[] | ConnectorType | boolean | null | undefined
}

export interface DevicePropertyEntity {
    id: string
    identifier: string
    key: string
    name: string | null
    settable: boolean
    queryable: boolean
    data_type: DataType | null
    unit: string | null
    format: string | string[] | number[] | null
    actual_value?: string | number | boolean | DeviceConnectionState | null
    expected_value?: string | number | boolean | null
    previous_value?: string | number | boolean | null
    device: string
    owner?: string

    [k: string]: string | boolean | number | string[] | number[] | DataType | DeviceConnectionState | null | undefined
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
    owner?: string

    [k: string]: string | number | (string | number | boolean)[] | DataType | null | undefined
}

export interface ChannelEntity {
    id: string
    identifier: string
    key: string
    name: string | null
    comment: string | null
    control: string[]
    device: string
    owner?: string

    [k: string]: string | string[] | null | undefined
}

export interface ChannelPropertyEntity {
    id: string
    identifier: string
    key: string
    name: string | null
    settable: boolean
    queryable: boolean
    data_type: DataType | null
    unit: string | null
    format: string | string[] | number[] | null
    actual_value?: string | number | boolean | null
    expected_value?: string | number | boolean | null
    previous_value?: string | number | boolean | null
    channel: string
    owner?: string

    [k: string]: string | boolean | number | string[] | number[] | DataType | null | undefined
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
    owner?: string

    [k: string]: string | number | (string | number | boolean)[] | DataType | null | undefined
}

export interface DeviceControlData {
    control: string
    expected_value?:
        | null
        | string
        | number
        | boolean
    device: string

    [k: string]: string | number | boolean | null | undefined
}

export interface DevicePropertyData {
    device: string
    property: string
    expected_value: string | number | boolean

    [k: string]: string | number | boolean | undefined
}

export interface ChannelControlData {
    control: string
    expected_value?:
      | null
      | string
      | number
      | boolean
    device: string
    channel: string

    [k: string]: string | number | boolean | null | undefined
}

export interface ChannelPropertyData {
    device: string
    channel: string
    property: string
    expected_value: string | number | boolean

    [k: string]: string | number | boolean | undefined
}

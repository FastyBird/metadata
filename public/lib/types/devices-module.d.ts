import {
    ConnectorType,
    DataType,
    DeviceControlAction,
    DeviceModel,
    DeviceState,
    FirmwareManufacturer,
    HardwareManufacturer,
    ChannelControlAction,
} from from '@/lib/types.d.ts'

export interface ConnectorEntity {
    id: string
    type: ConnectorType
    name: string
    key: string
    enabled: boolean
    control: Array<string>
    address?: number | null
    serial_interface?: string | null
    baud_rate?: number | null
    server?: string | null
    port?: number | null
    secured_port?: number | null
    username?: string | null

    [k: string]: string | number | Array<string> | ConnectorType | boolean | null | undefined
}

export interface DeviceEntity {
    id: string
    key: string
    identifier: string
    name: string | null
    comment: string | null
    state: DeviceState
    enabled: boolean
    hardware_version: string | null
    hardware_manufacturer: HardwareManufacturer
    hardware_model: DeviceModel
    mac_address: string | null
    firmware_manufacturer: FirmwareManufacturer
    firmware_version: string | null
    control: Array<string>
    owner?: string

    [k: string]: string | DeviceState | HardwareManufacturer | DeviceModel | FirmwareManufacturer | boolean | Array<string> | null | undefined
}

export interface DeviceConnectorEntity {
    id: string
    connector: ConnectorType
    address?: number | null
    max_packet_length?: number | null
    description_support?: boolean
    settings_support?: boolean
    configured_key_length?: number | null
    username?: string | null

    [k: string]: string | number | Array<string> | ConnectorType | boolean | null | undefined
}

export interface DevicePropertyEntity {
    id: string
    key: string
    identifier: string
    name: string | null
    settable: boolean
    queryable: boolean
    data_type: DataType | null
    unit: string | null
    format: string | Array<string> | Array<number> | null
    value?: string | number | boolean | null
    expected?: string | number | boolean | null
    previous_value?: string | number | boolean | null
    owner?: string

    [k: string]: string | boolean | number | Array<string> | Array<number> | DataType | null | undefined
}

export interface DeviceConfigurationEntity {
    id: string
    key: string
    identifier: string
    name: string | null
    comment: string | null
    data_type: DataType
    default: string | number | null
    value: string | number | null
    values?: Array<any>
    min?: number | null
    max?: number | null
    step?: number | null
    owner?: string

    [k: string]: string | number | Array<any> | DataType | null | undefined
}

export interface ChannelEntity {
    id: string
    key: string
    identifier: string
    name: string | null
    comment: string | null
    control: Array<string>
    owner?: string

    [k: string]: string | Array<string> | null | undefined
}

export interface ChannelPropertyEntity {
    id: string
    key: string
    identifier: string
    name: string | null
    settable: boolean
    queryable: boolean
    data_type: DataType | null
    unit: string | null
    format: string | Array<string> | Array<number> | null
    value?: string | number | boolean | null
    expected?: string | number | boolean | null
    previous_value?: string | number | boolean | null
    owner?: string

    [k: string]: string | boolean | number | Array<string> | Array<number> | DataType | null | undefined
}

export interface ChannelConfigurationEntity {
    id: string
    key: string
    identifier: string
    name: string | null
    comment: string | null
    data_type: DataType
    default: string | number | null
    value: string | number | null
    values?: Array<any>
    min?: number | null
    max?: number | null
    step?: number | null
    owner?: string

    [k: string]: string | number | Array<any> | DataType | null | undefined
}

export interface DeviceControlData {
    control: DeviceControlAction
    value?:
        | null
        | string
    device: string

    [k: string]: string | DeviceControlAction | null | undefined
}

export interface DevicePropertyData {
    device: string
    property: string
    expected: string | number | boolean

    [k: string]: string | number | boolean | undefined
}

export interface ChannelControlData {
    control: ChannelControlAction
    value?:
        | null
        | string
    device: string
    channel: string

    [k: string]: string | ChannelControlAction | null | undefined
}

export interface ChannelPropertyData {
    device: string
    channel: string
    property: string
    expected: string | number | boolean

    [k: string]: string | number | boolean | undefined
}

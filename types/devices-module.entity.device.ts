import {DeviceModel, DeviceState, FirmwareManufacturer, HardwareManufacturer} from './types'

export default interface Entity {
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

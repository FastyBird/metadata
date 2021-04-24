import {DeviceControlAction} from './types'

export default interface Data {
    control: DeviceControlAction
    value?:
        | null
        | string
    device: string

    [k: string]: string | DeviceControlAction | null | undefined
}

import {ChannelControlAction} from './types'

export default interface Data {
    control: ChannelControlAction
    value?:
        | null
        | string
    device: string
    channel: string

    [k: string]: string | ChannelControlAction | null | undefined
}

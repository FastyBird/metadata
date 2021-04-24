import {TriggerActionType} from './types'

export default interface Entity {
    id: string
    type: TriggerActionType
    enabled: boolean
    trigger: string
    device?: string
    channel?: string
    property?: string
    value?: string
    owner?: string

    [k: string]: string | TriggerActionType | boolean | undefined
}

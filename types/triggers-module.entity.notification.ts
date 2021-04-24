import {TriggerNotificationType} from './types'

export default interface Entity {
    id: string
    type: TriggerNotificationType
    enabled: boolean
    trigger: string
    email?: string
    phone?: string
    owner?: string

    [k: string]: string | TriggerNotificationType | boolean | undefined
}

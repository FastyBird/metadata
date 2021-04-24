import {TriggerType} from './types'

export default interface Entity {
    id: string
    type: TriggerType
    name: string
    comment: string | null
    enabled: boolean
    owner?: string

    [k: string]: string | TriggerType | boolean | null | undefined
}

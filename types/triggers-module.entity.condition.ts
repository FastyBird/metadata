import {TriggerConditionOperator, TriggerConditionType} from './types'

export default interface Entity {
    id: string
    type: TriggerConditionType
    enabled: boolean
    trigger: string
    device?: string
    channel?: string
    property?: string
    operand?: string
    operator?: TriggerConditionOperator
    time?: string
    days?: Array<number>
    date?: string
    owner?: string

    [k: string]: string | TriggerConditionType | TriggerConditionOperator | boolean | Array<number> | null | undefined
}

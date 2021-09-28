import {
    TriggerType,
    TriggerActionType,
    TriggerConditionOperator,
    TriggerConditionType,
    TriggerNotificationType,
} from './types'

export interface TriggerEntity {
    id: string
    type: TriggerType
    name: string
    comment: string | null
    enabled: boolean
    control?: string[]
    owner?: string
    is_triggered?: boolean | null
    is_fulfilled?: boolean | null

    [k: string]: string | TriggerType | boolean | string[] | null | undefined
}

export interface ActionEntity {
    id: string
    type: TriggerActionType
    enabled: boolean
    trigger: string
    device?: string
    channel?: string
    property?: string
    value?: string
    owner?: string
    is_triggered?: boolean | null

    [k: string]: string | TriggerActionType | boolean | null | undefined
}

export interface ConditionEntity {
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
    days?: number[]
    date?: string
    owner?: string
    is_fulfilled?: boolean | null

    [k: string]: string | TriggerConditionType | TriggerConditionOperator | boolean | number[] | null | undefined
}

export interface NotificationEntity {
    id: string
    type: TriggerNotificationType
    enabled: boolean
    trigger: string
    email?: string
    phone?: string
    owner?: string

    [k: string]: string | TriggerNotificationType | boolean | undefined
}

export interface TriggerControlData {
    control: string
    expected_value?:
      | null
      | string
      | number
      | boolean
    trigger: string

    [k: string]: string | number | boolean | null | undefined
}

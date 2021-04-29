import {
    TriggerType,
    TriggerActionType,
    TriggerConditionOperator,
    TriggerConditionType,
    TriggerNotificationType,
} from from '@/lib/types.d.ts'

export interface TriggerEntity {
    id: string
    type: TriggerType
    name: string
    comment: string | null
    enabled: boolean
    owner?: string

    [k: string]: string | TriggerType | boolean | null | undefined
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

    [k: string]: string | TriggerActionType | boolean | undefined
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
    days?: Array<number>
    date?: string
    owner?: string

    [k: string]: string | TriggerConditionType | TriggerConditionOperator | boolean | Array<number> | null | undefined
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

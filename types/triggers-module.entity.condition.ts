export enum Type {
    CHANNEL_PROPERTY = 'channel-property',
    DEVICE_PROPERTY = 'device-property',
    TIME = 'time',
    DATE = 'date',
}

export enum Operator {
    EQUAL = 'eq',
    ABOVE = 'above',
    BELOW = 'below',
}

export interface Entity {
    id: string
    type: Type
    enabled: boolean
    trigger: string
    device?: string
    channel?: string
    property?: string
    operand?: string
    operator?: Operator
    time?: string
    days?: Array<number>
    date?: string

    [k: string]: string | Type | Operator | boolean | Array<number> | null | undefined
}

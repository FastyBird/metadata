export enum Type {
    MANUAL = 'manual',
    AUTOMATIC = 'automatic',
    CHANNEL_PROPERTY = 'channel-property',
}

export enum Operator {
    EQUAL = 'eq',
    ABOVE = 'above',
    BELOW = 'below',
}

export interface Entity {
    id: string
    type: Type
    name: string
    comment: string | null
    enabled: boolean
    device?: string
    channel?: string
    property?: string
    operand?: string
    operator?: Operator

    [k: string]: string | Type | Operator | boolean | null | undefined
}

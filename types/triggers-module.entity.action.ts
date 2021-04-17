export enum Type {
    CHANNEL_PROPERTY = 'channel-property',
}

export interface Entity {
    id: string
    type: Type
    enabled: boolean
    trigger: string
    device?: string
    channel?: string
    property?: string
    value?: string
    owner?: string

    [k: string]: string | Type | boolean | undefined
}

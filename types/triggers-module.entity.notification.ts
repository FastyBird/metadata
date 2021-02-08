export enum Type {
    EMAIL = 'email',
    SMS = 'sms',
}

export interface Entity {
    id: string
    type: Type
    enabled: boolean
    trigger: string
    email?: string
    phone?: string

    [k: string]: string | Type | boolean | undefined
}

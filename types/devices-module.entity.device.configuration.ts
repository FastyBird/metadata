export enum Type {
    BOOLEAN = 'boolean',
    NUMBER = 'number',
    SELECT = 'select',
    TEXT = 'text',
}

export interface Entity {
    id: string
    key: string
    type: Type
    identifier: string
    name: string | null
    comment: string | null
    default: string | number | null
    value: string | number | null
    values?: Array<any>
    min?: number | null
    max?: number | null
    step?: number | null

    [k: string]: string | Type | number | Array<any> | null | undefined
}

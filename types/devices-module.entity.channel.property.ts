export enum Datatype {
    STRING = 'string',
    INTEGER = 'integer',
    FLOAT = 'float',
    BOOLEAN = 'boolean',
    ENUM = 'enum',
    COLOR = 'color',
}

export interface Entity {
    id: string
    property: string
    name: string | null
    settable: boolean
    queryable: boolean
    datatype: Datatype | null
    unit: string | null
    format: string | Array<string> | Array<number> | null
    value?: string | number | boolean | null
    expected?: string | number | boolean | null
    previous_value?: string | number | boolean | null
    device: string
    owner: string
    parent: string | null
    channel: string

    [k: string]: string | Datatype | boolean | number | Array<string> | Array<number> | null | undefined
}

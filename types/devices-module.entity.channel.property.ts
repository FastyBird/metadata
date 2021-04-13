export enum DataType {
    CHAR = 'char',
    UCHAR = 'uchar',
    SHORT = 'short',
    USHORT = 'ushort',
    INT = 'int',
    UINT = 'uint',
    FLOAT = 'float',
    BOOLEAN = 'bool',
    STRING = 'string',
    ENUM = 'enum',
    COLOR = 'color',
}

export interface Entity {
    id: string
    key: string
    identifier: string
    name: string | null
    settable: boolean
    queryable: boolean
    data_type: DataType | null
    unit: string | null
    format: string | Array<string> | Array<number> | null
    value?: string | number | boolean | null
    expected?: string | number | boolean | null
    previous_value?: string | number | boolean | null
    owner?: string
}

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
    comment: string | null
    data_type: DataType
    default: string | number | null
    value: string | number | null
    values?: Array<any>
    min?: number | null
    max?: number | null
    step?: number | null
    owner?: string
}

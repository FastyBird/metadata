import {DataType} from './types'

export default interface Entity {
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

    [k: string]: string | boolean | number | Array<string> | Array<number> | DataType | null | undefined
}

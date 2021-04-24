import {ConnectorType} from './types'

export default interface Entity {
    id: string
    connector: ConnectorType
    address?: number | null
    max_packet_length?: number | null
    description_support?: boolean
    settings_support?: boolean
    configured_key_length?: number | null
    username?: string | null

    [k: string]: string | number | Array<string> | ConnectorType | boolean | null | undefined
}

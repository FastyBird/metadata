export enum Connector {
    FB_BUS = 'fb-bus',
    FB_MQTT_V1 = 'fb-mqtt-v1',
}

export interface Entity {
    id: string
    connector: Connector
    address?: number | null
    max_packet_length?: number | null
    description_support?: boolean
    settings_support?: boolean
    configured_key_length?: number | null
    username?: string | null

    [k: string]: string | number | Array<string> | Connector | boolean | null | undefined
}

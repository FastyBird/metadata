export enum Type {
    FB_BUS = 'fb-bus',
    FB_MQTT_V1 = 'fb-mqtt-v1',
}

export interface Entity {
    id: string
    type: Type
    name: string
    key: string
    enabled: boolean
    control: Array<string>
    address?: number | null
    serial_interface?: string | null
    baud_rate?: number | null
    server?: string | null
    port?: number | null
    secured_port?: number | null
    username?: string | null

    [k: string]: string | number | Array<string> | Type | boolean | null | undefined
}

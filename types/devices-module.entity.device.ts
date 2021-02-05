export enum Type {
    NETWORK = 'network',
    LOCAL = 'local',
}

export enum State {
    CONNECTED = 'connected',
    DISCONNECTED = 'disconnected',
    INIT = 'init',
    READY = 'ready',
    SLEEPING = 'sleeping',
    LOST = 'lost',
    ALERT = 'alert',
    UNKNOWN = 'unknown',
}

export interface Entity {
    id: string
    key: string
    identifier: string
    type: Type
    name: string | null
    comment: string | null
    state: State
    enabled: boolean
    hardware_version: string | null
    hardware_manufacturer: string
    hardware_model: string
    mac_address: string | null
    firmware_manufacturer: string
    firmware_version: string | null
    control: Array<string>
    device: string
    owner: string
    parent: string | null

    [k: string]: string | Type | State | boolean | Array<string> | null
}

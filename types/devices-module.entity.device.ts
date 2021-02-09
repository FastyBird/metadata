export enum State {
    CONNECTED = 'connected',
    DISCONNECTED = 'disconnected',
    INIT = 'init',
    READY = 'ready',
    RUNNING = 'running',
    SLEEPING = 'sleeping',
    STOPPED = 'stopped',
    LOST = 'lost',
    ALERT = 'alert',
    UNKNOWN = 'unknown',
}

export interface Entity {
    id: string
    key: string
    identifier: string
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
    owner?: string

    [k: string]: string | State | boolean | Array<string> | null | undefined
}

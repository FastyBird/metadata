export enum Control {
    CONFIGURE = 'configure',
    RESET = 'reset',
    RECONNECT = 'reconnect',
    FACTORY_RESET = 'factory-reset',
}

export interface Entity {
    control: Control
    value?:
        | null
        | string
    device: string

    [k: string]: string | Control | null | undefined
}

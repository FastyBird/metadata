export enum Control {
    CONFIGURE = 'configure',
    RESET = 'reset',
    RECONNECT = 'reconnect',
    FACTORY_RESET = 'factory-reset',
}

export interface Entity {
    id: string
    control: Control
    expected:
        | null
        | string
        | {
        [k: string]: any
    }
    device: string
    owner: string
    parent: string | null

    [k: string]: string | Control | Array<string> | Array<number> | null | any
}

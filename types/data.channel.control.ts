export enum Control {
    RESET = 'reset',
}

export interface Entity {
    control: Control
    value?:
        | null
        | string
    device: string
    channel: string

    [k: string]: string | Control | null | undefined
}

export enum Control {
    RESET = 'reset',
}

export interface Entity {
    id: string
    control: Control
    expected:
        | null
        | string
        | undefined
    device: string
    owner: string
    parent: string | null
    channel: string

    [k: string]: string | Control | Array<string> | Array<number> | null | any
}

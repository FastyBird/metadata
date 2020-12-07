export enum Control {
    CONFIGURE = 'configure',
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
    channel: string

    [k: string]: string | Control | Array<string> | Array<number> | null | any
}

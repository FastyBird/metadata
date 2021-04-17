export enum State {
    ACTIVE = 'active',
    BLOCKED = 'blocked',
    DELETED = 'deleted',
    INVALID = 'invalid',
}

export interface Entity {
    id: string
    state: State
    uid: string
    password?: string

    [k: string]: string | State | undefined
}

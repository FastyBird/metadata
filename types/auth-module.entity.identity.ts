import {IdentityState} from './types'

export default interface Entity {
    id: string
    state: IdentityState
    uid: string
    password?: string

    [k: string]: string | IdentityState | undefined
}

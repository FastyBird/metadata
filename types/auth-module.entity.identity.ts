import {AccountEmailState} from './types'

export default interface Entity {
    id: string
    state: AccountEmailState
    uid: string
    password?: string

    [k: string]: string | AccountEmailState | undefined
}

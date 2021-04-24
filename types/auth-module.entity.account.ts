import {AccountState} from './types'

export default interface Entity {
    id: string
    state: AccountState
    registered: string | null
    last_visit: string | null
    roles: Array<string>
    first_name?: string
    last_name?: string
    middle_name?: string
    email?: string
    language?: string
    device?: string
    owner?: string

    [k: string]: string | Array<string> | AccountState | null | undefined
}

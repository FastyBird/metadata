import {AccountState, IdentityState} from from '@/lib/types.d.ts'

export interface AccountEntity {
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

export interface EmailEntity {
    id: string
    address: string
    default: boolean
    verified: boolean
    private: boolean
    public: boolean

    [k: string]: string | boolean
}

export interface IdentityEntity {
    id: string
    state: IdentityState
    uid: string
    password?: string

    [k: string]: string | IdentityState | undefined
}

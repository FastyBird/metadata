export enum AccountState {
  ACTIVE = 'active',
  BLOCKED = 'blocked',
  DELETED = 'deleted',
  NOT_ACTIVATED = 'notActivated',
  APPROVAL_WAITING = 'approvalWaiting',
}

export enum IdentityState {
  ACTIVE = 'active',
  BLOCKED = 'blocked',
  DELETED = 'deleted',
  INVALID = 'invalid',
}

export interface AccountEntity {
  id: string
  first_name: string
  last_name: string
  middle_name: string
  state: AccountState
  registered: string | null
  last_visit: string | null
  email: string
  language: string
  roles: string[]

  [k: string]: string | string[] | AccountState | null
}

export interface EmailEntity {
  id: string
  address: string
  default: boolean
  verified: boolean
  private: boolean
  public: boolean
  account: string

  [k: string]: string | boolean
}

export interface IdentityEntity {
  id: string
  state: IdentityState
  uid: string
  password?: string
  account: string

  [k: string]: string | IdentityState | undefined
}

export interface RoleEntity {
  id: string
  name: string
  description: string
  anonymous: boolean
  authenticated: boolean
  administrator: boolean
  parent: string | null

  [k: string]: string | boolean | null
}

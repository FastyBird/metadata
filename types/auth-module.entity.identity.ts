export enum Type {
	USER = 'user',
	MACHINE = 'machine',
}

export enum State {
	ACTIVE = 'active',
	BLOCKED = 'blocked',
	DELETED = 'deleted',
	INVALID = 'invalid',
}

export interface Entity {
	id: string
	account: string
	type: Type
	state: State
	uid: string
	password?: string
	[k: string]: string | Type | State | undefined
}

export enum Type {
	USER = 'user',
	MACHINE = 'machine',
}

export enum State {
	ACTIVE = 'active',
	BLOCKED = 'blocked',
	DELETED = 'deleted',
	NOT_ACTIVATED = 'notActivated',
	APPROVAL_WAITING = 'approvalWaiting',
}

export interface Entity {
	id: string
	type: Type
	state: State
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
	[k: string]: string | Type | State | Array<string> | null | undefined
}

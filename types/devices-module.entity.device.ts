export enum Type {
	NETWORK = 'network',
	LOCAL = 'local',
}

export enum State {
	CONNECTED = 'connected',
	DISCONNECTED = 'disconnected',
	INIT = 'init',
	READY = 'ready',
	SLEEPING = 'sleeping',
	LOST = 'lost',
	ALERT = 'alert',
	UNKNOWN = 'unknown',
}

export interface Entity {
	id: string
	identifier: string
	type: Type
	name: string | null
	comment: string | null
	state: State
	enabled: boolean
	control: Array<string>
	device: string
	owner: string
	parent: string | null
	[k: string]: string | Type | State | boolean | Array<string> | null
}

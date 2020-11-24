export enum Type {
	BOOLEAN = 'boolean',
	NUMBER = 'number',
	SELECT = 'select',
	TEXT = 'text',
}

export interface Entity {
	id: string
	type: Type
	configuration: string
	name: string | null
	comment: string | null
	default: string | number | null
	value: string | number | null
	device: string
	owner: string
	parent: string | null
	channel: string
	values?: Array<any>
	min?: number | null
	max?: number | null
	step?: number | null
	[k: string]: string | Type | number | Array<any> | null | undefined
}

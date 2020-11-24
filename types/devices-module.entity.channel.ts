export interface Entity {
	id: string
	name: string | null
	comment: string | null
	control: Array<string>
	device: string
	owner: string
	parent: string | null
	channel: string
	[k: string]: string | Array<string> | null
}

export interface Entity {
	id: string
	name: string | null
	manufacturer: string
	version: string | null
	device: string
	owner: string
	parent: string | null
	[k: string]: string | null
}

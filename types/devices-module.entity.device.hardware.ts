export interface Entity {
	id: string
	version: string | null
	manufacturer: string
	model: string
	mac_address: string | null
	device: string
	owner: string
	parent: string | null
	[k: string]: string | null
}

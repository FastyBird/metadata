export interface Entity {
    id: string
    key: string
    identifier: string
    name: string | null
    comment: string | null
    control: Array<string>
    owner?: string
}

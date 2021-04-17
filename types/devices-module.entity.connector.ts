export interface Entity {
    id: string
    type: string
    name: string
    key: string
    enabled: boolean
    control: Array<string>
    address?: number | null
    serial_interface?: string | null
    baud_rate?: number | null
    server?: string | null
    port?: number | null
    secured_port?: number | null
    username?: string | null
}

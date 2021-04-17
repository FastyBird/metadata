export interface Entity {
    id: string
    address: string
    default: boolean
    verified: boolean
    private: boolean
    public: boolean

    [k: string]: string | boolean
}

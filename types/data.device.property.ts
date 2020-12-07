export interface Data {
    device: string
    property: string
    expected: string | number | boolean | null

    [k: string]: string | number | boolean | null | undefined
}

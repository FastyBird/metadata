export default interface Data {
    device: string
    channel: string
    property: string
    expected: string | number | boolean

    [k: string]: string | number | boolean | undefined
}

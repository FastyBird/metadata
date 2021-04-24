export default interface Data {
    device: string
    property: string
    expected: string | number | boolean

    [k: string]: string | number | boolean | undefined
}

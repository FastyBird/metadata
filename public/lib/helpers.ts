import { ButtonPayload, DataType, SwitchPayload } from '@/lib/types/types'
import { parse } from 'date-fns'

export const normalizeValue = (
  dataType: DataType,
  value: string | null,
  format?: string[] | (number | null)[] | null,
): number | string | boolean | Date | null => {
  if (value === null) {
    return null
  }

  switch (dataType) {
    case DataType.BOOLEAN:
      return ['true', 't', 'yes', 'y', '1', 'on'].includes(value.toLowerCase())

    case DataType.FLOAT: {
      const floatValue = parseFloat(value)

      if (Array.isArray(format) && format.length === 2) {
        if (format[0] !== null && format[0] > floatValue) {
          return null
        }

        if (format[1] !== null && format[1] < floatValue) {
          return null
        }
      }

      return floatValue
    }

    case DataType.CHAR:
    case DataType.UCHAR:
    case DataType.SHORT:
    case DataType.USHORT:
    case DataType.INT:
    case DataType.UINT: {
      const intValue = parseInt(value, 10)

      if (Array.isArray(format) && format.length === 2) {
        if (format[0] !== null && format[0] > intValue) {
          return null
        }

        if (format[1] !== null && format[1] < intValue) {
          return null
        }
      }

      return intValue
    }

    case DataType.STRING:
      return value

    case DataType.ENUM:
      if (Array.isArray(format) && (format as string[]).includes(value.toLowerCase())) {
        return value.toLowerCase()
      }

      return null

    case DataType.DATE:
      return parse(value, 'yyyy-MM-DD', new Date())

    case DataType.TIME:
      return parse(value, 'HH:mm:ssxxx', new Date())

    case DataType.DATETIME:
      return parse(value, "yyyy-MM-DD'T'HH:mm:ssxxx", new Date())

    case DataType.COLOR:
      break

    case DataType.BUTTON:
      if (value.toLowerCase() in ButtonPayload) {
        return value.toLowerCase()
      }

      return null

    case DataType.SWITCH:
      if (value.toLowerCase() in SwitchPayload) {
        return value.toLowerCase()
      }

      return null
  }

  return value
}
